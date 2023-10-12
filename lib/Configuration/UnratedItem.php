<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Configuration.UnratedItem')]
enum UnratedItem: string
{
    case Movie          = 'Movie';
    case Trailer        = 'Trailer';
    case Series         = 'Series';
    case Music          = 'Music';
    case Game           = 'Game';
    case Book           = 'Book';
    case LiveTvChannel  = 'LiveTvChannel';
    case LiveTvProgram  = 'LiveTvProgram';
    case ChannelContent = 'ChannelContent';
    case Other          = 'Other';
}
