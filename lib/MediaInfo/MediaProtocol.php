<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaInfo;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.MediaInfo.MediaProtocol')]
enum MediaProtocol: string
{
    case File = 'File';
    case Http = 'Http';
    case Rtmp = 'Rtmp';
    case Rtsp = 'Rtsp';
    case Udp  = 'Udp';
    case Rtp  = 'Rtp';
    case Ftp  = 'Ftp';
    case Mms  = 'Mms';
}
