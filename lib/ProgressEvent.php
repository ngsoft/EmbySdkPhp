<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.ProgressEvent')]
enum ProgressEvent: string
{
    case TimeUpdate           = 'TimeUpdate';
    case Pause                = 'Pause';
    case Unpause              = 'Unpause';
    case VolumeChange         = 'VolumeChange';
    case RepeatModeChange     = 'RepeatModeChange';
    case AudioTrackChange     = 'AudioTrackChange';
    case SubtitleTrackChange  = 'SubtitleTrackChange';
    case PlaylistItemMove     = 'PlaylistItemMove';
    case PlaylistItemRemove   = 'PlaylistItemRemove';
    case PlaylistItemAdd      = 'PlaylistItemAdd';
    case QualityChange        = 'QualityChange';
    case StateChange          = 'StateChange';
    case SubtitleOffsetChange = 'SubtitleOffsetChange';
    case PlaybackRateChange   = 'PlaybackRateChange';
}
