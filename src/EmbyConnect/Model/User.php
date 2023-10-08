<?php

declare(strict_types=1);

namespace EmbyClient\EmbyConnect\Model;

use EmbyClient\Model;

class User extends Model
{
    protected int $id;
    protected string $name;
    protected string $email;
    protected bool $isActive;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }
}
