<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.GameSystemSummary')]
class GameSystemSummary extends \EmbyClient\Model
{
    protected string $name;
    protected string $displayName;
    protected int $gameCount;
    /** @var string[] */
    protected array $gameFileExtensions;
    protected int $clientInstalledGameCount;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getGameCount(): int
    {
        return $this->gameCount;
    }

    /**
     * @return string[]
     */
    public function getGameFileExtensions(): array
    {
        return $this->gameFileExtensions;
    }

    public function getClientInstalledGameCount(): int
    {
        return $this->clientInstalledGameCount;
    }
}
