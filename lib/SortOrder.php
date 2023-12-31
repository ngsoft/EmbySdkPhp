<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.SortOrder')]
enum SortOrder: string
{
    case Ascending  = 'Ascending';
    case Descending = 'Descending';
}
