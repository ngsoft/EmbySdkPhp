<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('System.Version')]
class Version extends \EmbyClient\Model
{
    protected int $major;
    protected int $minor;
    protected int $build;
    protected int $revision;
    protected int $majorRevision;
    protected int $minorRevision;

    public function getMajor(): int
    {
        return $this->major;
    }

    public function getMinor(): int
    {
        return $this->minor;
    }

    public function getBuild(): int
    {
        return $this->build;
    }

    public function getRevision(): int
    {
        return $this->revision;
    }

    public function getMajorRevision(): int
    {
        return $this->majorRevision;
    }

    public function getMinorRevision(): int
    {
        return $this->minorRevision;
    }
}
