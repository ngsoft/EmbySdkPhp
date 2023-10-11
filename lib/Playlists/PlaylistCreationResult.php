<?php

declare(strict_types=1);

namespace EmbyClient\Model\Playlists;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Playlists.PlaylistCreationResult')]
class PlaylistCreationResult extends \EmbyClient\Model
{
    protected string $id;
    protected string $name;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
