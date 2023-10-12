<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv\Api;

use EmbyClient\RefName;

#[RefName('MediaBrowser.LiveTV.Api.SetChannelMapping')]
class SetChannelMapping extends \EmbyClient\Model
{
    protected string $tunerChannelId;
    protected string $providerChannelId;

    public function getTunerChannelId(): string
    {
        return $this->tunerChannelId;
    }

    public function getProviderChannelId(): string
    {
        return $this->providerChannelId;
    }
}
