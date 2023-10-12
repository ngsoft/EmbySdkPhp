<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Types;

use EmbyClient\RefName;

#[RefName('Emby.Media.Model.Types.LevelInformation')]
class LevelInformation extends \EmbyClient\Model
{
    protected static array $mapping = [
        'maxBitRate     ' => BitRate::class,
        'resolutionRates' => ResolutionWithRate::class,
    ];

    protected string $shortName;
    protected string $description;
    protected int $ordinal;
    protected BitRate $maxBitRate;
    protected string $maxBitRateDisplay;
    protected string $id;
    /** @var ResolutionWithRate[] */
    protected array $resolutionRates;
    /** @var string[] */
    protected array $resolutionRateStrings;
    protected string $resolutionRatesDisplay;

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getOrdinal(): int
    {
        return $this->ordinal;
    }

    public function getMaxBitRate(): BitRate
    {
        return $this->maxBitRate;
    }

    public function getMaxBitRateDisplay(): string
    {
        return $this->maxBitRateDisplay;
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return ResolutionWithRate[]
     */
    public function getResolutionRates(): array
    {
        return $this->resolutionRates;
    }

    /**
     * @return string[]
     */
    public function getResolutionRateStrings(): array
    {
        return $this->resolutionRateStrings;
    }

    public function getResolutionRatesDisplay(): string
    {
        return $this->resolutionRatesDisplay;
    }
}
