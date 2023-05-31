<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class Protocol
{
    public const SMTP = 'SMTP';
    public const SMTP_RCPT = 'SMTP_RCPT';
    public const SMTP_HEADER = 'SMTP_HEADER';
    public const SMTP_IPONLY = 'SMTP_IPONLY';
    public const SMPP = 'SMPP';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
