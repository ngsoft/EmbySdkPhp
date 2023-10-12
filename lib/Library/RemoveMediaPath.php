<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\RefName;

#[RefName('Emby.Api.Library.RemoveMediaPath')]
class RemoveMediaPath extends \EmbyClient\Model
{
    protected string $id;
    protected string $path;
    protected bool $refreshLibrary;

    public function getId(): string
    {
        return $this->id;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getRefreshLibrary(): bool
    {
        return $this->refreshLibrary;
    }
}
