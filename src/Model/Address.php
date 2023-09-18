<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * Address.
 */
class Address implements ModelInterface
{
    private ?string $address = null;
    private ?string $name = null;
    public function __construct(?string $address = null, ?string $name = null)
    {
        /**
         * Email address or phone number.
         */
        $this->address = $address;
        /**
         * Display name, only used for email messages.
         */
        $this->name = $name;
    }

    public function setAddress(?string $address = null): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
