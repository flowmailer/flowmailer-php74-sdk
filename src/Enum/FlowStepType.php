<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Enum;

class FlowStepType
{
    public const ADD_ATTACHMENT = 'addAttachment';
    public const ADD_HEADER = 'addHeader';
    public const AGGREGATE = 'aggregate';
    public const ANALYTICS = 'analytics';
    public const ARCHIVE = 'archive';
    public const EXTERNAL_CONTENT = 'externalContent';
    public const EXTERNAL_DATA = 'externalData';
    public const EXTRACTDATA = 'extractdata';
    public const MAIL_PLUS_CONTACT = 'mailPlusContact';
    public const QAMAIL = 'qamail';
    public const RESUBMIT_MESSAGE = 'resubmitMessage';
    public const REWRITE_RECIPIENT = 'rewriteRecipient';
    public const SCHEDULE = 'schedule';
    public const SET_SENDER = 'setSender';
    public const SUBJECT = 'subject';
    public const TEMPLATE = 'template';
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
