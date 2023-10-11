<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.ImageSavingConvention')]
enum ImageSavingConvention: string
{
    case Legacy     = 'Legacy';
    case Compatible = 'Compatible';
}
