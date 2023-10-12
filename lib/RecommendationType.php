<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.RecommendationType')]
enum RecommendationType: string
{
    case SimilarToRecentlyPlayed       = 'SimilarToRecentlyPlayed';
    case SimilarToLikedItem            = 'SimilarToLikedItem';
    case HasDirectorFromRecentlyPlayed = 'HasDirectorFromRecentlyPlayed';
    case HasActorFromRecentlyPlayed    = 'HasActorFromRecentlyPlayed';
    case HasLikedDirector              = 'HasLikedDirector';
    case HasLikedActor                 = 'HasLikedActor';
}
