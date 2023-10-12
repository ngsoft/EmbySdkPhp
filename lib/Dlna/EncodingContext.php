<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.EncodingContext')]
enum EncodingContext: string
{
    case Streaming = 'Streaming';
    case Static    = 'Static';
}
