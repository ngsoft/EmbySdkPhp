<?php

declare(strict_types=1);

namespace EmbyClient\Model\Common\Plugins;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Common.Plugins.IPlugin')]
class IPlugin extends \EmbyClient\Model
{
    protected static array $mapping = [
        'version' => \EmbyClient\Model\Version::class,
    ];

    protected string $name;
    protected string $description;
    protected string $id;
    protected \EmbyClient\Model\Version $version;
    protected string $assemblyFilePath;
    protected string $dataFolderPath;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getVersion(): \EmbyClient\Model\Version
    {
        return $this->version;
    }

    public function getAssemblyFilePath(): string
    {
        return $this->assemblyFilePath;
    }

    public function getDataFolderPath(): string
    {
        return $this->dataFolderPath;
    }
}
