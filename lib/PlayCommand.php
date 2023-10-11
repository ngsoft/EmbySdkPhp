<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.PlayCommand')]
enum PlayCommand: string
{
    case PlayNow        = 'PlayNow';
    case PlayNext       = 'PlayNext';
    case PlayLast       = 'PlayLast';
    case PlayInstantMix = 'PlayInstantMix';
    case PlayShuffle    = 'PlayShuffle';
}
