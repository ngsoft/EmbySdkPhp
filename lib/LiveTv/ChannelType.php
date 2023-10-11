<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.LiveTv.ChannelType')]
enum ChannelType: string
{
    case TV    = 'TV';
    case Radio = 'Radio';
}
