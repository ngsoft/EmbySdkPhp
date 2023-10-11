<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.NameLongIdPair')]
class NameLongIdPair extends \EmbyClient\Model
{
    protected string $name;
    protected int $id;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
