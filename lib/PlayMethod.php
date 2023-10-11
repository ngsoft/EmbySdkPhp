<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.PlayMethod')]
enum PlayMethod: string
{
    case Transcode    = 'Transcode';
    case DirectStream = 'DirectStream';
    case DirectPlay   = 'DirectPlay';
}
