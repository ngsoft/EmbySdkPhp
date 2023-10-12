<?php

declare(strict_types=1);

namespace EmbyClient\Model\Tasks;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Tasks.TaskCompletionStatus')]
enum TaskCompletionStatus: string
{
    case Completed = 'Completed';
    case Failed    = 'Failed';
    case Cancelled = 'Cancelled';
    case Aborted   = 'Aborted';
}
