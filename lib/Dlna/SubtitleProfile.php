<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Dlna.SubtitleProfile')]
class SubtitleProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'method' => SubtitleDeliveryMethod::class,
    ];

    protected string $format;
    protected SubtitleDeliveryMethod $method;
    protected string $didlMode;
    protected string $language;
    protected string $container;
    protected string $protocol;

    public function getFormat(): string
    {
        return $this->format;
    }

    public function getMethod(): SubtitleDeliveryMethod
    {
        return $this->method;
    }

    public function getDidlMode(): string
    {
        return $this->didlMode;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getContainer(): string
    {
        return $this->container;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }
}
