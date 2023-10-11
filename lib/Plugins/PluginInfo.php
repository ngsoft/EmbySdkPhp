<?php

declare(strict_types=1);

namespace EmbyClient\Model\Plugins;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Plugins.PluginInfo')]
class PluginInfo extends \EmbyClient\Model
{
    protected string $name;
    protected string $version;
    protected string $configurationFileName;
    protected string $description;
    protected string $id;
    protected string $imageTag;

    public function getName(): string
    {
        return $this->name;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getConfigurationFileName(): string
    {
        return $this->configurationFileName;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getImageTag(): string
    {
        return $this->imageTag;
    }
}
