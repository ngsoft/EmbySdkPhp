<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Enums;

use EmbyClient\RefName;

#[RefName('Emby.Media.Model.Enums.SecondaryFrameworks')]
enum SecondaryFrameworks: string
{
    case Unknown      = 'Unknown';
    case None         = 'None';
    case AmdAmf       = 'AmdAmf';
    case MediaCodec   = 'MediaCodec';
    case NvEncDec     = 'NvEncDec';
    case OpenMax      = 'OpenMax';
    case QuickSync    = 'QuickSync';
    case VaApi        = 'VaApi';
    case V4L2         = 'V4L2';
    case DxVa         = 'DxVa';
    case D3d11va      = 'D3d11va';
    case VideoToolbox = 'VideoToolbox';
    case Mmal         = 'Mmal';
}
