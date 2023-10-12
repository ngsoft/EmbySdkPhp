<?php

declare(strict_types=1);

namespace EmbyClient\Model\IO;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.IO.FileSystemEntryInfo')]
class FileSystemEntryInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type' => FileSystemEntryType::class,
    ];

    protected string $name;
    protected string $path;
    protected FileSystemEntryType $type;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getType(): FileSystemEntryType
    {
        return $this->type;
    }
}
