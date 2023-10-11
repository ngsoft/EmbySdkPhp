<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.AddMediaPath')]
class AddMediaPath extends \EmbyClient\Model
{
    protected static array $mapping = [
        'pathInfo' => \EmbyClient\Model\Configuration\MediaPathInfo::class,
    ];

    protected string $id;
    protected string $path;
    protected \EmbyClient\Model\Configuration\MediaPathInfo $pathInfo;
    protected bool $refreshLibrary;

    public function getId(): string
    {
        return $this->id;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getPathInfo(): \EmbyClient\Model\Configuration\MediaPathInfo
    {
        return $this->pathInfo;
    }

    public function getRefreshLibrary(): bool
    {
        return $this->refreshLibrary;
    }
}
