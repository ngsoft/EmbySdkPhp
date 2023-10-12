<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.UpdateUserPassword')]
class UpdateUserPassword extends \EmbyClient\Model
{
    protected string $id;
    protected string $currentPw;
    protected string $newPw;
    protected bool $resetPassword;

    public function getId(): string
    {
        return $this->id;
    }

    public function getCurrentPw(): string
    {
        return $this->currentPw;
    }

    public function getNewPw(): string
    {
        return $this->newPw;
    }

    public function getResetPassword(): bool
    {
        return $this->resetPassword;
    }
}
