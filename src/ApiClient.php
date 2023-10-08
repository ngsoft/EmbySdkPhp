<?php

declare(strict_types=1);

namespace EmbyClient;

class ApiClient
{
    protected string $basepath = 'http://emby.media/emby';

    public function getBasepath(): string
    {
        return $this->basepath;
    }

    public static function getDefaultClient(): static
    {
        static $instance;
        return $instance ??= new static();
    }
}
