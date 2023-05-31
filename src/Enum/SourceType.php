<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class SourceType
{
    public const API = 'API';
    public const SMTP = 'SMTP';
    public const SMTP_RCPT = 'SMTP_RCPT';
    public const SMTP_DOMAIN = 'SMTP_DOMAIN';
    public const SMPP = 'SMPP';
    public const FLOWMAILER = 'FLOWMAILER';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
