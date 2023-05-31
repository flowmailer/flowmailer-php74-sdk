<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class FlowStepArchiveRetention
{
    public const P1M = 'P1M';
    public const P3M = 'P3M';
    public const P6M = 'P6M';
    public const P1Y = 'P1Y';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
