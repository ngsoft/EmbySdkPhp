<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\Model\RefName;

#[RefName('Emby.Server.Sync.Model.ItemFileInfo')]
class ItemFileInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type     ' => ItemFileType::class,
        'imageType' => \EmbyClient\Model\ImageType::class,
    ];

    protected ItemFileType $type;
    protected string $name;
    protected string $path;
    protected \EmbyClient\Model\ImageType $imageType;
    protected int $index;

    public function getType(): ItemFileType
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getImageType(): \EmbyClient\Model\ImageType
    {
        return $this->imageType;
    }

    public function getIndex(): int
    {
        return $this->index;
    }
}
