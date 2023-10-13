<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Providers.RemoteSubtitleInfo')]
class RemoteSubtitleInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'dateCreated' => \DateTimeImmutable::class,
    ];

    protected string $threeLetterISOLanguageName;
    protected string $id;
    protected string $providerName;
    protected string $name;
    protected string $format;
    protected string $author;
    protected string $comment;
    protected \DateTimeImmutable $dateCreated;
    protected float $communityRating;
    protected int $downloadCount;
    protected bool $isHashMatch;
    protected bool $isForced;
    protected string $language;

    public function getThreeLetterISOLanguageName(): string
    {
        return $this->threeLetterISOLanguageName;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getProviderName(): string
    {
        return $this->providerName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getDateCreated(): \DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function getCommunityRating(): float
    {
        return $this->communityRating;
    }

    public function getDownloadCount(): int
    {
        return $this->downloadCount;
    }

    public function isHashMatch(): bool
    {
        return $this->isHashMatch;
    }

    public function isForced(): bool
    {
        return $this->isForced;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}
