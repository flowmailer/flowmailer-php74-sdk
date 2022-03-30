<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Parameter;

class ReferenceRange
{
    private int $count;
    private ?string $reference = null;
    public function __construct(int $count, ?string $reference = null)
    {
        $this->count = $count;
        $this->reference = $reference;
    }
    public function __toString(): string
    {
        return sprintf('items=%s:%d', $this->getReference(), $this->getCount());
    }
    public function getCount(): int
    {
        return $this->count;
    }
    public function setCount(int $count): ReferenceRange
    {
        $this->count = $count;

        return $this;
    }
    public function getReference(): ?string
    {
        return $this->reference;
    }
    public function setReference(?string $reference): ReferenceRange
    {
        $this->reference = $reference;

        return $this;
    }
}
