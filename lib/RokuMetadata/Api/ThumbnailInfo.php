<?php

declare(strict_types=1);

namespace EmbyClient\Model\RokuMetadata\Api;

use EmbyClient\RefName;

#[RefName('RokuMetadata.Api.ThumbnailInfo')]
class ThumbnailInfo extends \EmbyClient\Model
{
    protected int $positionTicks;
    protected string $imageTag;

    public function getPositionTicks(): int
    {
        return $this->positionTicks;
    }

    public function getImageTag(): string
    {
        return $this->imageTag;
    }
}
