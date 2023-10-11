<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.TranscodeReason')]
enum TranscodeReason: string
{
    case ContainerNotSupported        = 'ContainerNotSupported';
    case VideoCodecNotSupported       = 'VideoCodecNotSupported';
    case AudioCodecNotSupported       = 'AudioCodecNotSupported';
    case ContainerBitrateExceedsLimit = 'ContainerBitrateExceedsLimit';
    case AudioBitrateNotSupported     = 'AudioBitrateNotSupported';
    case AudioChannelsNotSupported    = 'AudioChannelsNotSupported';
    case VideoResolutionNotSupported  = 'VideoResolutionNotSupported';
    case UnknownVideoStreamInfo       = 'UnknownVideoStreamInfo';
    case UnknownAudioStreamInfo       = 'UnknownAudioStreamInfo';
    case AudioProfileNotSupported     = 'AudioProfileNotSupported';
    case AudioSampleRateNotSupported  = 'AudioSampleRateNotSupported';
    case AnamorphicVideoNotSupported  = 'AnamorphicVideoNotSupported';
    case InterlacedVideoNotSupported  = 'InterlacedVideoNotSupported';
    case SecondaryAudioNotSupported   = 'SecondaryAudioNotSupported';
    case RefFramesNotSupported        = 'RefFramesNotSupported';
    case VideoBitDepthNotSupported    = 'VideoBitDepthNotSupported';
    case VideoBitrateNotSupported     = 'VideoBitrateNotSupported';
    case VideoFramerateNotSupported   = 'VideoFramerateNotSupported';
    case VideoLevelNotSupported       = 'VideoLevelNotSupported';
    case VideoProfileNotSupported     = 'VideoProfileNotSupported';
    case AudioBitDepthNotSupported    = 'AudioBitDepthNotSupported';
    case SubtitleCodecNotSupported    = 'SubtitleCodecNotSupported';
    case DirectPlayError              = 'DirectPlayError';
}
