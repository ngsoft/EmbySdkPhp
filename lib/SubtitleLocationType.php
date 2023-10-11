<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Entities.SubtitleLocationType')]
enum SubtitleLocationType: string
{
    case InternalStream = 'InternalStream';
    case VideoSideData  = 'VideoSideData';
}
