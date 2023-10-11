<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Entities.MetadataFields')]
enum MetadataFields: string
{
    case Cast                = 'Cast';
    case Genres              = 'Genres';
    case ProductionLocations = 'ProductionLocations';
    case Studios             = 'Studios';
    case Tags                = 'Tags';
    case Name                = 'Name';
    case Overview            = 'Overview';
    case Runtime             = 'Runtime';
    case OfficialRating      = 'OfficialRating';
    case Collections         = 'Collections';
    case ChannelNumber       = 'ChannelNumber';
    case SortName            = 'SortName';
    case OriginalTitle       = 'OriginalTitle';
}
