<?php

declare(strict_types=1);

namespace EmbyClient\Model\Logging;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Logging.LogSeverity')]
enum LogSeverity: string
{
    case Info  = 'Info';
    case Debug = 'Debug';
    case Warn  = 'Warn';
    case Error = 'Error';
    case Fatal = 'Fatal';
}
