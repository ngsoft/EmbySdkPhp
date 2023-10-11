<?php

declare(strict_types=1);

namespace EmbyClient\Model\Users;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Users.UserActionType')]
enum UserActionType: string
{
    case PlayedItem = 'PlayedItem';
}
