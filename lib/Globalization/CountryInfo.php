<?php

declare(strict_types=1);

namespace EmbyClient\Model\Globalization;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Globalization.CountryInfo')]
class CountryInfo extends \EmbyClient\Model
{
    protected string $name;
    protected string $displayName;
    protected string $englishName;
    protected string $twoLetterISORegionName;
    protected string $threeLetterISORegionName;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getEnglishName(): string
    {
        return $this->englishName;
    }

    public function getTwoLetterISORegionName(): string
    {
        return $this->twoLetterISORegionName;
    }

    public function getThreeLetterISORegionName(): string
    {
        return $this->threeLetterISORegionName;
    }
}
