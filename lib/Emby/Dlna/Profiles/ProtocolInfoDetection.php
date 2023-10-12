<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Dlna\Profiles;

use EmbyClient\RefName;

#[RefName('Emby.Dlna.Profiles.ProtocolInfoDetection')]
class ProtocolInfoDetection extends \EmbyClient\Model
{
    protected bool $enabledForVideo;
    protected bool $enabledForAudio;
    protected bool $enabledForPhotos;

    public function getEnabledForVideo(): bool
    {
        return $this->enabledForVideo;
    }

    public function getEnabledForAudio(): bool
    {
        return $this->enabledForAudio;
    }

    public function getEnabledForPhotos(): bool
    {
        return $this->enabledForPhotos;
    }
}
