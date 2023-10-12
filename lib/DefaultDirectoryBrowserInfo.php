<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.DefaultDirectoryBrowserInfo')]
class DefaultDirectoryBrowserInfo extends \EmbyClient\Model
{
    protected string $path;

    public function getPath(): string
    {
        return $this->path;
    }
}
