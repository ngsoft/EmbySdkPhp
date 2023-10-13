<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Providers.RemoteImageInfo')]
class RemoteImageInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type'       => ImageType::class,
        'ratingType' => RatingType::class,
    ];

    protected string $providerName;
    protected string $url;
    protected string $thumbnailUrl;
    protected int $height;
    protected int $width;
    protected float $communityRating;
    protected int $voteCount;
    protected string $language;
    protected string $displayLanguage;
    protected ImageType $type;
    protected RatingType $ratingType;

    public function getProviderName(): string
    {
        return $this->providerName;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getCommunityRating(): float
    {
        return $this->communityRating;
    }

    public function getVoteCount(): int
    {
        return $this->voteCount;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getDisplayLanguage(): string
    {
        return $this->displayLanguage;
    }

    public function getType(): ImageType
    {
        return $this->type;
    }

    public function getRatingType(): RatingType
    {
        return $this->ratingType;
    }
}
