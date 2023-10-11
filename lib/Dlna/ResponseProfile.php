<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Dlna.ResponseProfile')]
class ResponseProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type      ' => DlnaProfileType::class,
        'conditions' => ProfileCondition::class,
    ];

    protected string $container;
    protected string $audioCodec;
    protected string $videoCodec;
    protected DlnaProfileType $type;
    protected string $orgPn;
    protected string $mimeType;
    /** @var ProfileCondition[] */
    protected array $conditions;

    public function getContainer(): string
    {
        return $this->container;
    }

    public function getAudioCodec(): string
    {
        return $this->audioCodec;
    }

    public function getVideoCodec(): string
    {
        return $this->videoCodec;
    }

    public function getType(): DlnaProfileType
    {
        return $this->type;
    }

    public function getOrgPn(): string
    {
        return $this->orgPn;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @return ProfileCondition[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }
}
