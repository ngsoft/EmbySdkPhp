<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.BaseItemPerson')]
class BaseItemPerson extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type' => PersonType::class,
    ];

    protected string $name;
    protected string $id;
    protected string $role;
    protected PersonType $type;
    protected string $primaryImageTag;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getType(): PersonType
    {
        return $this->type;
    }

    public function getPrimaryImageTag(): string
    {
        return $this->primaryImageTag;
    }
}
