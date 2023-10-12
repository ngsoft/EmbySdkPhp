<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.ItemCounts')]
class ItemCounts extends \EmbyClient\Model
{
    protected int $movieCount;
    protected int $seriesCount;
    protected int $episodeCount;
    protected int $gameCount;
    protected int $artistCount;
    protected int $programCount;
    protected int $gameSystemCount;
    protected int $trailerCount;
    protected int $songCount;
    protected int $albumCount;
    protected int $musicVideoCount;
    protected int $boxSetCount;
    protected int $bookCount;
    protected int $itemCount;

    public function getMovieCount(): int
    {
        return $this->movieCount;
    }

    public function getSeriesCount(): int
    {
        return $this->seriesCount;
    }

    public function getEpisodeCount(): int
    {
        return $this->episodeCount;
    }

    public function getGameCount(): int
    {
        return $this->gameCount;
    }

    public function getArtistCount(): int
    {
        return $this->artistCount;
    }

    public function getProgramCount(): int
    {
        return $this->programCount;
    }

    public function getGameSystemCount(): int
    {
        return $this->gameSystemCount;
    }

    public function getTrailerCount(): int
    {
        return $this->trailerCount;
    }

    public function getSongCount(): int
    {
        return $this->songCount;
    }

    public function getAlbumCount(): int
    {
        return $this->albumCount;
    }

    public function getMusicVideoCount(): int
    {
        return $this->musicVideoCount;
    }

    public function getBoxSetCount(): int
    {
        return $this->boxSetCount;
    }

    public function getBookCount(): int
    {
        return $this->bookCount;
    }

    public function getItemCount(): int
    {
        return $this->itemCount;
    }
}
