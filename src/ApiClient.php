<?php

declare(strict_types=1);

namespace EmbyClient;

class ApiClient
{
    public const APP           = 'EmbyClientPhp';
    public const VERSION       = '1.0.0';
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
