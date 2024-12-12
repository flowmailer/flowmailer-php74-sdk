<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Parameter;

class ContentRange
{
    private string $startReference;
    private string $endReference;
    /**
     * @var int|string|null
     */
    private $total = null;
    /**
     * @param null|int|string $total
     */
    public function __construct(string $startReference, string $endReference, $total = null)
    {
        $this->startReference = $startReference;
        $this->endReference = $endReference;
        $this->total = $total;
    }
    public function __toString(): string
    {
        $separator = (is_null($this->getTotal()) || $this->getTotal() == '*') ? ':' : '-';

        return sprintf('items %s%s%s/%s', $this->getStartReference(), $separator, $this->getEndReference(), $this->getTotal() ?? '*');
    }
    public static function fromString(string $string): self
    {
        if (substr_compare($string, '/*', -strlen('/*')) === 0) {
            $total         = '*';
            [$start, $end] = explode(':', substr($string, 6, -2));
        } else {
            [$ranges, $total] = explode('/', substr($string, 6));
            [$start, $end]    = explode('-', $ranges);
        }

        return new self($start, $end, $total);
    }
    public function getStartReference(): string
    {
        return $this->startReference;
    }
    public function setStartReference(string $startReference): ContentRange
    {
        $this->startReference = $startReference;

        return $this;
    }
    public function getEndReference(): string
    {
        return $this->endReference;
    }
    public function setEndReference(string $endReference): ContentRange
    {
        $this->endReference = $endReference;

        return $this;
    }
    /**
     * @return int|string|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * @param int|string|null $total
     */
    public function setTotal($total): ContentRange
    {
        $this->total = $total;

        return $this;
    }
}
