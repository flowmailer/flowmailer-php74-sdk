<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class ContentDisposition
{
    public const ATTACHMENT = 'attachment';
    public const INLINE = 'inline';
    public const RELATED = 'related';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
