<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.RecommendationDto')]
class RecommendationDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items             ' => BaseItemDto::class,
        'recommendationType' => RecommendationType::class,
    ];

    /** @var BaseItemDto[] */
    protected array $items;
    protected RecommendationType $recommendationType;
    protected string $baselineItemName;
    protected int $categoryId;

    /**
     * @return BaseItemDto[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getRecommendationType(): RecommendationType
    {
        return $this->recommendationType;
    }

    public function getBaselineItemName(): string
    {
        return $this->baselineItemName;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
}
