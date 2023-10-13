<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv\Api;

use EmbyClient\RefName;

#[RefName('MediaBrowser.LiveTV.Api.GetPrograms')]
class GetPrograms extends \EmbyClient\Model
{
    protected bool $isAiring;
    protected string $tagIds;
    protected string $excludeItemIds;
    protected bool $enableTotalRecordCount;
    protected string $seriesTimerId;
    protected string $librarySeriesId;
    protected string $seriesFromProgramId;
    protected string $showingsFromProgramId;
    protected bool $groupProgramsBySeries;

    public function isAiring(): bool
    {
        return $this->isAiring;
    }

    public function getTagIds(): string
    {
        return $this->tagIds;
    }

    public function getExcludeItemIds(): string
    {
        return $this->excludeItemIds;
    }

    public function getEnableTotalRecordCount(): bool
    {
        return $this->enableTotalRecordCount;
    }

    public function getSeriesTimerId(): string
    {
        return $this->seriesTimerId;
    }

    public function getLibrarySeriesId(): string
    {
        return $this->librarySeriesId;
    }

    public function getSeriesFromProgramId(): string
    {
        return $this->seriesFromProgramId;
    }

    public function getShowingsFromProgramId(): string
    {
        return $this->showingsFromProgramId;
    }

    public function getGroupProgramsBySeries(): bool
    {
        return $this->groupProgramsBySeries;
    }
}
