<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Types;

use EmbyClient\RefName;

#[RefName('Emby.Media.Model.Types.BitRate')]
class BitRate extends \EmbyClient\Model
{
    protected int $bps;
    protected float $kbps;
    protected float $mbps;

    public function getBps(): int
    {
        return $this->bps;
    }

    public function getKbps(): float
    {
        return $this->kbps;
    }

    public function getMbps(): float
    {
        return $this->mbps;
    }
}
