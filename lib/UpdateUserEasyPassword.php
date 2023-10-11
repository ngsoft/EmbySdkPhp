<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('Emby.Api.UpdateUserEasyPassword')]
class UpdateUserEasyPassword extends \EmbyClient\Model
{
    protected string $id;
    protected string $newPw;
    protected bool $resetPassword;

    public function getId(): string
    {
        return $this->id;
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
