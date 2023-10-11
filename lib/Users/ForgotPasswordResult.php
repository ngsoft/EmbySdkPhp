<?php

declare(strict_types=1);

namespace EmbyClient\Model\Users;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Users.ForgotPasswordResult')]
class ForgotPasswordResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'action           ' => ForgotPasswordAction::class,
        'pinExpirationDate' => \DateTimeImmutable::class,
    ];

    protected ForgotPasswordAction $action;
    protected string $pinFile;
    protected \DateTimeImmutable $pinExpirationDate;

    public function getAction(): ForgotPasswordAction
    {
        return $this->action;
    }

    public function getPinFile(): string
    {
        return $this->pinFile;
    }

    public function getPinExpirationDate(): \DateTimeImmutable
    {
        return $this->pinExpirationDate;
    }
}
