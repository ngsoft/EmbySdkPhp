<?php

declare(strict_types=1);

namespace EmbyClient\Model\Persistence;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Controller.Persistence.IntroDebugInfo')]
class IntroDebugInfo extends \EmbyClient\Model
{
    protected int $id;
    protected string $path;
    protected int $start;
    protected int $end;

    public function getId(): int
    {
        return $this->id;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getStart(): int
    {
        return $this->start;
    }

    public function getEnd(): int
    {
        return $this->end;
    }
}
