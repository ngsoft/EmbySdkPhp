<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Querying.AllThemeMediaResult')]
class AllThemeMediaResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'themeVideosResult    ' => ThemeMediaResult::class,
        'themeSongsResult     ' => ThemeMediaResult::class,
        'soundtrackSongsResult' => ThemeMediaResult::class,
    ];

    protected ThemeMediaResult $themeVideosResult;
    protected ThemeMediaResult $themeSongsResult;
    protected ThemeMediaResult $soundtrackSongsResult;

    public function getThemeVideosResult(): ThemeMediaResult
    {
        return $this->themeVideosResult;
    }

    public function getThemeSongsResult(): ThemeMediaResult
    {
        return $this->themeSongsResult;
    }

    public function getSoundtrackSongsResult(): ThemeMediaResult
    {
        return $this->soundtrackSongsResult;
    }
}
