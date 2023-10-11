<?php

declare(strict_types=1);

namespace EmbyClient\Model\Tasks;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Tasks.TaskState')]
enum TaskState: string
{
    case Idle       = 'Idle';
    case Cancelling = 'Cancelling';
    case Running    = 'Running';
}
