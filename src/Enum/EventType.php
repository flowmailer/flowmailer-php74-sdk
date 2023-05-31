<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class EventType
{
    public const SOFTBOUNCE = 'SOFTBOUNCE';
    public const HARDBOUNCE = 'HARDBOUNCE';
    public const COMPLAINT = 'COMPLAINT';
    public const UNSUBSCRIBE = 'UNSUBSCRIBE';
    public const REJECT = 'REJECT';
    public const DISCARD = 'DISCARD';
    public const DELIVERED = 'DELIVERED';
    public const POSTED = 'POSTED';
    public const ATTEMPT = 'ATTEMPT';
    public const QUEUEATTEMPT = 'QUEUEATTEMPT';
    public const SUBMITTED = 'SUBMITTED';
    public const PROCESSED = 'PROCESSED';
    public const INSERTED = 'INSERTED';
    public const OPENED = 'OPENED';
    public const CLICKED = 'CLICKED';
    public const HELD = 'HELD';
    public const CUSTOM = 'CUSTOM';
    public const REPLY = 'REPLY';
    public const RESENT = 'RESENT';
    public const SUSPENDED = 'SUSPENDED';
    public const RESUBMITTED = 'RESUBMITTED';
    public const ERROR = 'ERROR';
    public const RESUMED = 'RESUMED';
    public const EVENT_SUSPENDED = 'EVENT_SUSPENDED';
    public const EVENT_ERROR = 'EVENT_ERROR';
    public const EVENT_RESUMED = 'EVENT_RESUMED';
    public const EVENT_DISCARD = 'EVENT_DISCARD';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
