<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Types;

use EmbyClient\RefName;

#[RefName('Emby.Media.Model.Types.Resolution')]
class Resolution extends \EmbyClient\Model
{
    protected int $width;
    protected int $height;

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
