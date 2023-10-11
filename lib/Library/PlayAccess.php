<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Library.PlayAccess')]
enum PlayAccess: string
{
    case Full = 'Full';
    case None = 'None';
}
