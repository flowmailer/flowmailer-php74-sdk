<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\FlowStepArchiveRetention;

/**
 * FlowStepArchive.
 */
class FlowStepArchive implements ModelInterface
{
    /**
     * Indicates whether this archive is available for online version link.
     */
    private ?bool $onlineLink = null;

    /**
     * ISO8601 period notation indicating a shorter retention time (than account settings) for message archives created by this flow step. The following values are valid P1M, P3M, P6M, P1Y.
     *
     *  Empty means that the account retention time will be applied.
     * @var string|FlowStepArchiveRetention|null
     */
    private $retention = null;

    public function setOnlineLink(?bool $onlineLink = null): self
    {
        $this->onlineLink = $onlineLink;

        return $this;
    }

    public function getOnlineLink(): ?bool
    {
        return $this->onlineLink;
    }

    /**
     * @param string|FlowStepArchiveRetention|null $retention
     */
    public function setRetention($retention = null): self
    {
        $this->retention = $retention;

        return $this;
    }

    /**
     * @return string|FlowStepArchiveRetention|null
     */
    public function getRetention()
    {
        return $this->retention;
    }
}
