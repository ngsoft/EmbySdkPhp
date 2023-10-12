<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.ChapterInfo')]
class ChapterInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'markerType' => MarkerType::class,
    ];

    protected int $startPositionTicks;
    protected string $name;
    protected string $imageTag;
    protected MarkerType $markerType;
    protected int $chapterIndex;

    public function getStartPositionTicks(): int
    {
        return $this->startPositionTicks;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImageTag(): string
    {
        return $this->imageTag;
    }

    public function getMarkerType(): MarkerType
    {
        return $this->markerType;
    }

    public function getChapterIndex(): int
    {
        return $this->chapterIndex;
    }
}
