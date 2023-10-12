<?php

declare(strict_types=1);

namespace EmbyClient\Model\Transcoding;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.Transcoding.VpStepInfo')]
class VpStepInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'stepType' => VpStepTypes::class,
    ];

    protected VpStepTypes $stepType;
    protected string $stepTypeName;
    protected string $hardwareContextName;
    protected bool $isHardwareContext;
    protected string $name;
    protected string $short;
    protected string $ffmpegName;
    protected string $ffmpegDescription;
    protected string $ffmpegOptions;
    protected string $param;
    protected string $paramShort;

    public function getStepType(): VpStepTypes
    {
        return $this->stepType;
    }

    public function getStepTypeName(): string
    {
        return $this->stepTypeName;
    }

    public function getHardwareContextName(): string
    {
        return $this->hardwareContextName;
    }

    public function getIsHardwareContext(): bool
    {
        return $this->isHardwareContext;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getShort(): string
    {
        return $this->short;
    }

    public function getFfmpegName(): string
    {
        return $this->ffmpegName;
    }

    public function getFfmpegDescription(): string
    {
        return $this->ffmpegDescription;
    }

    public function getFfmpegOptions(): string
    {
        return $this->ffmpegOptions;
    }

    public function getParam(): string
    {
        return $this->param;
    }

    public function getParamShort(): string
    {
        return $this->paramShort;
    }
}
