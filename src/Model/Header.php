<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * Header.
 */
final class Header implements ModelInterface
{
    private string $name;
    private ?string $value = null;
    public function __construct(string $name, ?string $value = null)
    {
        /**
         * Header name.
         */
        $this->name = $name;
        /**
         * Header value.
         */
        $this->value = $value;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setValue(?string $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}
