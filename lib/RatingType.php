<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.RatingType')]
enum RatingType: string
{
    case Score = 'Score';
    case Likes = 'Likes';
}
