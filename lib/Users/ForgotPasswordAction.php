<?php

declare(strict_types=1);

namespace EmbyClient\Model\Users;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Users.ForgotPasswordAction')]
enum ForgotPasswordAction: string
{
    case ContactAdmin      = 'ContactAdmin';
    case PinCode           = 'PinCode';
    case InNetworkRequired = 'InNetworkRequired';
}
