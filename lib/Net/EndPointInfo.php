<?php

declare(strict_types=1);

namespace EmbyClient\Model\Net;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Net.EndPointInfo')]
class EndPointInfo extends \EmbyClient\Model
{
    protected bool $isLocal;
    protected bool $isInNetwork;

    public function isLocal(): bool
    {
        return $this->isLocal;
    }

    public function isInNetwork(): bool
    {
        return $this->isInNetwork;
    }
}
