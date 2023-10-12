<?php

declare(strict_types=1);

namespace EmbyClient\Model\Plugins;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Controller.Plugins.ConfigurationPageType')]
enum ConfigurationPageType: string
{
    case PluginConfiguration = 'PluginConfiguration';
    case None                = 'None';
}
