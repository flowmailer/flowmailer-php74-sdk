<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class DeliveryNotificationType
{
    public const NONE = 'NONE';
    public const FAILURE = 'FAILURE';
    public const DELIVERY_AND_FAILURE = 'DELIVERY_AND_FAILURE';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
