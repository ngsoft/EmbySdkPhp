<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.PlaystateRequest')]
class PlaystateRequest extends \EmbyClient\Model
{
    protected static array $mapping = [
        'command' => PlaystateCommand::class,
    ];

    protected PlaystateCommand $command;
    protected int $seekPositionTicks;
    protected string $controllingUserId;

    public function getCommand(): PlaystateCommand
    {
        return $this->command;
    }

    public function getSeekPositionTicks(): int
    {
        return $this->seekPositionTicks;
    }

    public function getControllingUserId(): string
    {
        return $this->controllingUserId;
    }
}
