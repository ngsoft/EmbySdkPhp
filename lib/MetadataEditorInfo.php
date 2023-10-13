<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.MetadataEditorInfo')]
class MetadataEditorInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'parentalRatingOptions' => ParentalRating::class,
        'countries'             => Globalization\CountryInfo::class,
        'cultures'              => Globalization\CultureDto::class,
        'externalIdInfos'       => ExternalIdInfo::class,
    ];

    /** @var ParentalRating[] */
    protected array $parentalRatingOptions;
    /** @var Globalization\CountryInfo[] */
    protected array $countries;
    /** @var Globalization\CultureDto[] */
    protected array $cultures;
    /** @var ExternalIdInfo[] */
    protected array $externalIdInfos;

    /**
     * @return ParentalRating[]
     */
    public function getParentalRatingOptions(): array
    {
        return $this->parentalRatingOptions;
    }

    /**
     * @return Globalization\CountryInfo[]
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @return Globalization\CultureDto[]
     */
    public function getCultures(): array
    {
        return $this->cultures;
    }

    /**
     * @return ExternalIdInfo[]
     */
    public function getExternalIdInfos(): array
    {
        return $this->externalIdInfos;
    }
}
