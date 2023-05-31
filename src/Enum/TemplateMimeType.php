<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class TemplateMimeType
{
    public const PLAIN = 'text/plain';
    public const HTML = 'text/html';
    public const PDF = 'application/vnd.flowmailer.itext+pdf';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
