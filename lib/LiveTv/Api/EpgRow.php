<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTV\Api;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.LiveTV.Api.EpgRow')]
class EpgRow extends \EmbyClient\Model
{
    protected static array $mapping = [
        'channel ' => \EmbyClient\Model\BaseItemDto::class,
        'programs' => \EmbyClient\Model\BaseItemDto::class,
    ];

    protected \EmbyClient\Model\BaseItemDto $channel;
    /** @var \EmbyClient\Model\BaseItemDto[] */
    protected array $programs;

    public function getChannel(): \EmbyClient\Model\BaseItemDto
    {
        return $this->channel;
    }

    /**
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public function getPrograms(): array
    {
        return $this->programs;
    }
}
