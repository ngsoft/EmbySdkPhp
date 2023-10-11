<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.MetadataFeatures')]
enum MetadataFeatures: string
{
    case Collections   = 'Collections';
    case Adult         = 'Adult';
    case RequiredSetup = 'RequiredSetup';
}
