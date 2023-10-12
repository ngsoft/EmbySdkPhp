<?php

declare(strict_types=1);

namespace EmbyClient\Model\Notifications;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Notifications.NotificationTypeInfo')]
class NotificationTypeInfo extends \EmbyClient\Model
{
    protected string $type;
    protected string $name;
    protected bool $enabled;
    protected string $category;
    protected bool $isBasedOnUserEvent;

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getIsBasedOnUserEvent(): bool
    {
        return $this->isBasedOnUserEvent;
    }
}
