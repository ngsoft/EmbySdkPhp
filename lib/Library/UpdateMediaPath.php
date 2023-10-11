<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.UpdateMediaPath')]
class UpdateMediaPath extends \EmbyClient\Model
{
    protected static array $mapping = [
        'pathInfo' => \EmbyClient\Model\Configuration\MediaPathInfo::class,
    ];

    protected string $id;
    protected \EmbyClient\Model\Configuration\MediaPathInfo $pathInfo;

    public function getId(): string
    {
        return $this->id;
    }

    public function getPathInfo(): \EmbyClient\Model\Configuration\MediaPathInfo
    {
        return $this->pathInfo;
    }
}
