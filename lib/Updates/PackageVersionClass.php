<?php

declare(strict_types=1);

namespace EmbyClient\Model\Updates;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Updates.PackageVersionClass')]
enum PackageVersionClass: string
{
    case Release = 'Release';
    case Beta    = 'Beta';
    case Dev     = 'Dev';
}
