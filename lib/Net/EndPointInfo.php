<?php

declare(strict_types=1);

namespace EmbyClient\Model\Net;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Net.EndPointInfo')]
class EndPointInfo extends \EmbyClient\Model
{
    protected bool $isLocal;
    protected bool $isInNetwork;

    public function getIsLocal(): bool
    {
        return $this->isLocal;
    }

    public function getIsInNetwork(): bool
    {
        return $this->isInNetwork;
    }
}
