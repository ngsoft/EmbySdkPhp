<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.RatingType')]
enum RatingType: string
{
    case Score = 'Score';
    case Likes = 'Likes';
}
