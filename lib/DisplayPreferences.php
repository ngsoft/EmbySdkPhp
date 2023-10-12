<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.DisplayPreferences')]
class DisplayPreferences extends \EmbyClient\Model
{
    protected static array $mapping = [
        'scrollDirection' => ScrollDirection::class,
        'sortOrder      ' => SortOrder::class,
    ];

    protected string $id;
    protected string $viewType;
    protected string $sortBy;
    protected string $indexBy;
    protected bool $rememberIndexing;
    protected int $primaryImageHeight;
    protected int $primaryImageWidth;
    protected object $customPrefs;
    protected ScrollDirection $scrollDirection;
    protected bool $showBackdrop;
    protected bool $rememberSorting;
    protected SortOrder $sortOrder;
    protected string $client;

    public function getId(): string
    {
        return $this->id;
    }

    public function getViewType(): string
    {
        return $this->viewType;
    }

    public function getSortBy(): string
    {
        return $this->sortBy;
    }

    public function getIndexBy(): string
    {
        return $this->indexBy;
    }

    public function getRememberIndexing(): bool
    {
        return $this->rememberIndexing;
    }

    public function getPrimaryImageHeight(): int
    {
        return $this->primaryImageHeight;
    }

    public function getPrimaryImageWidth(): int
    {
        return $this->primaryImageWidth;
    }

    public function getCustomPrefs(): object
    {
        return $this->customPrefs;
    }

    public function getScrollDirection(): ScrollDirection
    {
        return $this->scrollDirection;
    }

    public function getShowBackdrop(): bool
    {
        return $this->showBackdrop;
    }

    public function getRememberSorting(): bool
    {
        return $this->rememberSorting;
    }

    public function getSortOrder(): SortOrder
    {
        return $this->sortOrder;
    }

    public function getClient(): string
    {
        return $this->client;
    }
}
