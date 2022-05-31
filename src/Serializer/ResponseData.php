<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Serializer;

class ResponseData
{
    /**
     * @readonly
     */
    private string $responseBody;
    /**
     * @readonly
     */
    private array $meta = [];
    public function __construct(string $responseBody, array $meta = [])
    {
        $this->responseBody = $responseBody;
        $this->meta = $meta;
    }
    public function __toString(): string
    {
        return $this->responseBody;
    }
    public function getResponseBody(): string
    {
        return $this->responseBody;
    }
    /**
     * @return mixed
     */
    public function getMeta($key)
    {
        return $this->meta[$key] ?? null;
    }
}
