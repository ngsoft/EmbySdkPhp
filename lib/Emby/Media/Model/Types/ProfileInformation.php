<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Types;

use EmbyClient\Model\RefName;

#[RefName('Emby.Media.Model.Types.ProfileInformation')]
class ProfileInformation extends \EmbyClient\Model
{
    protected string $shortName;
    protected string $description;
    protected string $details;
    protected string $id;
    /** @var int[] */
    protected array $bitDepths;

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDetails(): string
    {
        return $this->details;
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int[]
     */
    public function getBitDepths(): array
    {
        return $this->bitDepths;
    }
}
