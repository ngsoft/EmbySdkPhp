<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.UserConfiguration')]
class UserConfiguration extends \EmbyClient\Model
{
    protected static array $mapping = [
        'subtitleMode ' => SubtitlePlaybackMode::class,
        'introSkipMode' => SegmentSkipMode::class,
    ];

    protected string $audioLanguagePreference;
    protected bool $playDefaultAudioTrack;
    protected string $subtitleLanguagePreference;
    protected bool $displayMissingEpisodes;
    protected SubtitlePlaybackMode $subtitleMode;
    protected bool $enableLocalPassword;
    /** @var string[] */
    protected array $orderedViews;
    /** @var string[] */
    protected array $latestItemsExcludes;
    /** @var string[] */
    protected array $myMediaExcludes;
    protected bool $hidePlayedInLatest;
    protected bool $rememberAudioSelections;
    protected bool $rememberSubtitleSelections;
    protected bool $enableNextEpisodeAutoPlay;
    protected int $resumeRewindSeconds;
    protected SegmentSkipMode $introSkipMode;

    public function getAudioLanguagePreference(): string
    {
        return $this->audioLanguagePreference;
    }

    public function getPlayDefaultAudioTrack(): bool
    {
        return $this->playDefaultAudioTrack;
    }

    public function getSubtitleLanguagePreference(): string
    {
        return $this->subtitleLanguagePreference;
    }

    public function getDisplayMissingEpisodes(): bool
    {
        return $this->displayMissingEpisodes;
    }

    public function getSubtitleMode(): SubtitlePlaybackMode
    {
        return $this->subtitleMode;
    }

    public function getEnableLocalPassword(): bool
    {
        return $this->enableLocalPassword;
    }

    /**
     * @return string[]
     */
    public function getOrderedViews(): array
    {
        return $this->orderedViews;
    }

    /**
     * @return string[]
     */
    public function getLatestItemsExcludes(): array
    {
        return $this->latestItemsExcludes;
    }

    /**
     * @return string[]
     */
    public function getMyMediaExcludes(): array
    {
        return $this->myMediaExcludes;
    }

    public function getHidePlayedInLatest(): bool
    {
        return $this->hidePlayedInLatest;
    }

    public function getRememberAudioSelections(): bool
    {
        return $this->rememberAudioSelections;
    }

    public function getRememberSubtitleSelections(): bool
    {
        return $this->rememberSubtitleSelections;
    }

    public function getEnableNextEpisodeAutoPlay(): bool
    {
        return $this->enableNextEpisodeAutoPlay;
    }

    public function getResumeRewindSeconds(): int
    {
        return $this->resumeRewindSeconds;
    }

    public function getIntroSkipMode(): SegmentSkipMode
    {
        return $this->introSkipMode;
    }
}
