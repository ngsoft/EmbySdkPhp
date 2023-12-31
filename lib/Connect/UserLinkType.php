<?php

declare(strict_types=1);

namespace EmbyClient\Model\Connect;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Connect.UserLinkType')]
enum UserLinkType: string
{
    case LinkedUser = 'LinkedUser';
    case Guest      = 'Guest';
}
