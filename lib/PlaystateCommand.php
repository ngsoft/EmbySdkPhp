<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.PlaystateCommand')]
enum PlaystateCommand: string
{
    case Stop          = 'Stop';
    case Pause         = 'Pause';
    case Unpause       = 'Unpause';
    case NextTrack     = 'NextTrack';
    case PreviousTrack = 'PreviousTrack';
    case Seek          = 'Seek';
    case Rewind        = 'Rewind';
    case FastForward   = 'FastForward';
    case PlayPause     = 'PlayPause';
}
