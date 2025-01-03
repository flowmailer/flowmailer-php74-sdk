<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * Role.
 */
class Role implements ModelInterface
{
    private string $description;
    private string $name;
    private ?string $id = null;
    /**
     * @var string[]|null
     */
    private ?array $roles = null;
    /**
     * @param string[]|null $roles
     */
    public function __construct(string $description, string $name, ?string $id = null, ?array $roles = null)
    {
        $this->description = $description;
        $this->name = $name;
        $this->id = $id;
        $this->roles = $roles;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setId(?string $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
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

    public function setRoles(?array $roles = null): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }
}
