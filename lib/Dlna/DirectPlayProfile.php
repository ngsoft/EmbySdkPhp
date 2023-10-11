<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Dlna.DirectPlayProfile')]
class DirectPlayProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type' => DlnaProfileType::class,
    ];

    protected string $container;
    protected string $audioCodec;
    protected string $videoCodec;
    protected DlnaProfileType $type;

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
}
