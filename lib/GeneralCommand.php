<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.GeneralCommand')]
class GeneralCommand extends \EmbyClient\Model
{
    protected string $name;
    protected string $controllingUserId;
    protected object $arguments;

    public function getName(): string
    {
        return $this->name;
    }

    public function getControllingUserId(): string
    {
        return $this->controllingUserId;
    }

    public function getArguments(): object
    {
        return $this->arguments;
    }
}
