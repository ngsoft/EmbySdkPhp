<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Configuration.CodecConfiguration')]
class CodecConfiguration extends \EmbyClient\Model
{
    protected bool $isEnabled;
    protected int $priority;
    protected string $codecId;

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getCodecId(): string
    {
        return $this->codecId;
    }
}
