<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.PlaybackErrorCode')]
enum PlaybackErrorCode: string
{
    case NotAllowed         = 'NotAllowed';
    case NoCompatibleStream = 'NoCompatibleStream';
    case RateLimitExceeded  = 'RateLimitExceeded';
}
