<?php

declare(strict_types=1);

namespace EmbyClient\Model\Transcoding;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.Transcoding.VpStepTypes')]
enum VpStepTypes: string
{
    case Decoder           = 'Decoder';
    case Encoder           = 'Encoder';
    case Scaling           = 'Scaling';
    case Deinterlace       = 'Deinterlace';
    case SubtitleOverlay   = 'SubtitleOverlay';
    case ToneMapping       = 'ToneMapping';
    case ColorConversion   = 'ColorConversion';
    case SplitCaptions     = 'SplitCaptions';
    case TextSub2Video     = 'TextSub2Video';
    case GraphicSub2Video  = 'GraphicSub2Video';
    case GraphicSub2Text   = 'GraphicSub2Text';
    case BurnInTextSubs    = 'BurnInTextSubs';
    case BurnInGraphicSubs = 'BurnInGraphicSubs';
    case ScaleSubs         = 'ScaleSubs';
    case TextMod           = 'TextMod';
    case Censor            = 'Censor';
    case ShowSpeaker       = 'ShowSpeaker';
    case StripStyles       = 'StripStyles';
    case ConnectTo         = 'ConnectTo';
}
