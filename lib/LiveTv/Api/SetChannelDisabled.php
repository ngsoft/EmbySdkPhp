<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv\Api;

use EmbyClient\RefName;

#[RefName('MediaBrowser.LiveTV.Api.SetChannelDisabled')]
class SetChannelDisabled extends \EmbyClient\Model
{
    protected string $id;
    protected string $managementId;
    protected bool $disabled;

    public function getId(): string
    {
        return $this->id;
    }

    public function getManagementId(): string
    {
        return $this->managementId;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }
}
