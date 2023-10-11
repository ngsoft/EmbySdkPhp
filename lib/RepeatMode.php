<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.RepeatMode')]
enum RepeatMode: string
{
    case RepeatNone = 'RepeatNone';
    case RepeatAll  = 'RepeatAll';
    case RepeatOne  = 'RepeatOne';
}
