<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Plugin;

use Cache\Adapter\PHPArray\ArrayCachePool;
use Flowmailer\API\FlowmailerInterface;
use Flowmailer\API\Model\OAuthTokenResponse;
use Flowmailer\API\OptionsInterface;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\SimpleCache\CacheInterface;

class AuthTokenPlugin implements Plugin
{
    private int $retriesLeft = 3;

    /**
     * @readonly
     */
    private CacheInterface $cache;
    /**
     * @readonly
     */
    private FlowmailerInterface $client;
    /**
     * @readonly
     */
    private OptionsInterface $options;
    /**
     * @readonly
     */
    private int $maxRetries = 3;

    public function __construct(
        FlowmailerInterface $client,
        OptionsInterface $options,
        ?CacheInterface $cache = null,
        int $maxRetries = 3
    ) {
        $this->client = $client;
        $this->options = $options;
        $this->maxRetries = $maxRetries;
        $this->retriesLeft = $maxRetries;
        $this->cache       = $cache ?? new ArrayCachePool();
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        if (!$request->hasHeader('Authorization')) {
            $request = $request->withHeader('Authorization', "Bearer {$this->getToken()}");
        }

        return $next($request)->then(function (ResponseInterface $response) use ($request, $first) {
            if (401 === $response->getStatusCode() && $this->retriesLeft > 0) {
                --$this->retriesLeft;

                return $first($request->withHeader('Authorization', sprintf('Bearer %s', $this->getToken(true))));
            }

            $this->retriesLeft = $this->maxRetries;

            return $response;
        });
    }

    private function getToken($refresh = false): string
    {
        $cacheKey = 'flowmailer_token_'.$this->options->getAccountId().'_'.$this->options->getClientId();

        if ($this->cache->has($cacheKey) === false || $refresh === true) {
            /** @var OAuthTokenResponse $tokenData */
            $tokenData = $this->client->createOAuthToken($this->options->getClientId(), $this->options->getClientSecret(), 'client_credentials', $this->options->getOAuthScope());
            $this->cache->set($cacheKey, $tokenData->getAccessToken(), $tokenData->getExpiresIn());
        }

        return $this->cache->get($cacheKey);
    }
}
