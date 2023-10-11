<?php

declare(strict_types=1);

namespace EmbyClient\Model\RokuMetadata\Api;

use EmbyClient\Model\RefName;

#[RefName('RokuMetadata.Api.ThumbnailSetInfo')]
class ThumbnailSetInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'thumbnails' => ThumbnailInfo::class,
    ];

    protected float $aspectRatio;
    /** @var ThumbnailInfo[] */
    protected array $thumbnails;

    public function getAspectRatio(): float
    {
        return $this->aspectRatio;
    }

    /**
     * @return ThumbnailInfo[]
     */
    public function getThumbnails(): array
    {
        return $this->thumbnails;
    }
}
