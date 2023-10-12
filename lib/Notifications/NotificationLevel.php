<?php

declare(strict_types=1);

namespace EmbyClient\Model\Notifications;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Notifications.NotificationLevel')]
enum NotificationLevel: string
{
    case Normal  = 'Normal';
    case Warning = 'Warning';
    case Error   = 'Error';
}
