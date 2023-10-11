<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\Api;

use EmbyClient\Model\RefName;

#[RefName('Emby.Web.Api.ConfigurationPageInfo')]
class ConfigurationPageInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'configurationPageType' => \EmbyClient\Model\Plugins\ConfigurationPageType::class,
        'plugin               ' => \EmbyClient\Model\Common\Plugins\IPlugin::class,
    ];

    protected string $name;
    protected bool $enableInMainMenu;
    protected string $menuSection;
    protected string $menuIcon;
    protected string $displayName;
    protected \EmbyClient\Model\Plugins\ConfigurationPageType $configurationPageType;
    protected string $pluginId;
    protected \EmbyClient\Model\Common\Plugins\IPlugin $plugin;
    /** @var string[] */
    protected array $translations;

    public function getName(): string
    {
        return $this->name;
    }

    public function getEnableInMainMenu(): bool
    {
        return $this->enableInMainMenu;
    }

    public function getMenuSection(): string
    {
        return $this->menuSection;
    }

    public function getMenuIcon(): string
    {
        return $this->menuIcon;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getConfigurationPageType(): \EmbyClient\Model\Plugins\ConfigurationPageType
    {
        return $this->configurationPageType;
    }

    public function getPluginId(): string
    {
        return $this->pluginId;
    }

    public function getPlugin(): \EmbyClient\Model\Common\Plugins\IPlugin
    {
        return $this->plugin;
    }

    /**
     * @return string[]
     */
    public function getTranslations(): array
    {
        return $this->translations;
    }
}
