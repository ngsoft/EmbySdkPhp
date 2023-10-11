<?php

declare(strict_types=1);

namespace EmbyClient\Model\Drawing;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Drawing.ImageOrientation')]
enum ImageOrientation: string
{
    case TopLeft     = 'TopLeft';
    case TopRight    = 'TopRight';
    case BottomRight = 'BottomRight';
    case BottomLeft  = 'BottomLeft';
    case LeftTop     = 'LeftTop';
    case RightTop    = 'RightTop';
    case RightBottom = 'RightBottom';
    case LeftBottom  = 'LeftBottom';
}
