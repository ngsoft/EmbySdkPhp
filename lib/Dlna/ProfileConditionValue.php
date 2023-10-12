<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.ProfileConditionValue')]
enum ProfileConditionValue: string
{
    case AudioChannels    = 'AudioChannels';
    case AudioBitrate     = 'AudioBitrate';
    case AudioProfile     = 'AudioProfile';
    case Width            = 'Width';
    case Height           = 'Height';
    case Has64BitOffsets  = 'Has64BitOffsets';
    case PacketLength     = 'PacketLength';
    case VideoBitDepth    = 'VideoBitDepth';
    case VideoBitrate     = 'VideoBitrate';
    case VideoFramerate   = 'VideoFramerate';
    case VideoLevel       = 'VideoLevel';
    case VideoProfile     = 'VideoProfile';
    case VideoTimestamp   = 'VideoTimestamp';
    case IsAnamorphic     = 'IsAnamorphic';
    case RefFrames        = 'RefFrames';
    case NumAudioStreams  = 'NumAudioStreams';
    case NumVideoStreams  = 'NumVideoStreams';
    case IsSecondaryAudio = 'IsSecondaryAudio';
    case VideoCodecTag    = 'VideoCodecTag';
    case IsAvc            = 'IsAvc';
    case IsInterlaced     = 'IsInterlaced';
    case AudioSampleRate  = 'AudioSampleRate';
    case AudioBitDepth    = 'AudioBitDepth';
}
