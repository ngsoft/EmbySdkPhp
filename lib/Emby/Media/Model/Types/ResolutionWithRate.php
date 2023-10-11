<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Types;

use EmbyClient\Model\RefName;

#[RefName('Emby.Media.Model.Types.ResolutionWithRate')]
class ResolutionWithRate extends \EmbyClient\Model
{
    protected static array $mapping = [
        'resolution' => Resolution::class,
    ];

    protected int $width;
    protected int $height;
    protected float $frameRate;
    protected Resolution $resolution;

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getFrameRate(): float
    {
        return $this->frameRate;
    }

    public function getResolution(): Resolution
    {
        return $this->resolution;
    }
}
