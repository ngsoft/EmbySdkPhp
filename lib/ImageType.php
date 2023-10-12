<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.ImageType')]
enum ImageType: string
{
    case Primary        = 'Primary';
    case Art            = 'Art';
    case Backdrop       = 'Backdrop';
    case Banner         = 'Banner';
    case Logo           = 'Logo';
    case Thumb          = 'Thumb';
    case Disc           = 'Disc';
    case Box            = 'Box';
    case Screenshot     = 'Screenshot';
    case Menu           = 'Menu';
    case Chapter        = 'Chapter';
    case BoxRear        = 'BoxRear';
    case Thumbnail      = 'Thumbnail';
    case LogoLight      = 'LogoLight';
    case LogoLightColor = 'LogoLightColor';
}
