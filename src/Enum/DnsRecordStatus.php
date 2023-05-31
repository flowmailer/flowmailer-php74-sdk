<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class DnsRecordStatus
{
    public const UNKNOWN = 'UNKNOWN';
    public const ERROR = 'ERROR';
    public const DNS = 'DNS';
    public const OK = 'OK';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
