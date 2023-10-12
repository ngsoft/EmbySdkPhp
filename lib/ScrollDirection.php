<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.ScrollDirection')]
enum ScrollDirection: string
{
    case Horizontal = 'Horizontal';
    case Vertical   = 'Vertical';
}
