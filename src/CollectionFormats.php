<?php

declare(strict_types=1);

namespace EmbyClient;

enum CollectionFormats: string
{
    case CSV   = ',';
    case SSV   = ' ';
    case TSV   = "\t";
    case PIPES = '|';
}
