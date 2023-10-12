<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\RefName;

#[RefName('Emby.Api.Library.MediaUpdateInfo')]
class MediaUpdateInfo extends \EmbyClient\Model
{
    protected string $path;
    protected string $updateType;

    public function getPath(): string
    {
        return $this->path;
    }

    public function getUpdateType(): string
    {
        return $this->updateType;
    }
}
