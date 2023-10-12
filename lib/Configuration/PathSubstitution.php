<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Configuration.PathSubstitution')]
class PathSubstitution extends \EmbyClient\Model
{
    protected string $from;
    protected string $to;

    public function getFrom(): string
    {
        return $this->from;
    }

    public function getTo(): string
    {
        return $this->to;
    }
}
