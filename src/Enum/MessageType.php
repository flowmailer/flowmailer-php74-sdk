<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class MessageType
{
    public const EMAIL = 'EMAIL';
    public const SMS = 'SMS';
    public const LETTER = 'LETTER';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
