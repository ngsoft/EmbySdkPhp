<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.LiveTv.LiveTvInfo')]
class LiveTvInfo extends \EmbyClient\Model
{
    protected bool $isEnabled;
    /** @var string[] */
    protected array $enabledUsers;

    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * @return string[]
     */
    public function getEnabledUsers(): array
    {
        return $this->enabledUsers;
    }
}
