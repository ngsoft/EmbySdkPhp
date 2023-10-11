<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.MediaPathInfo')]
class MediaPathInfo extends \EmbyClient\Model
{
    protected string $path;
    protected string $networkPath;

    public function getPath(): string
    {
        return $this->path;
    }

    public function getNetworkPath(): string
    {
        return $this->networkPath;
    }
}
