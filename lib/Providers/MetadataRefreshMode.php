<?php

declare(strict_types=1);

namespace EmbyClient\Model\Providers;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Controller.Providers.MetadataRefreshMode')]
enum MetadataRefreshMode: string
{
    case ValidationOnly = 'ValidationOnly';
    case Default        = 'Default';
    case FullRefresh    = 'FullRefresh';
}
