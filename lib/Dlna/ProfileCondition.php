<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Dlna.ProfileCondition')]
class ProfileCondition extends \EmbyClient\Model
{
    protected static array $mapping = [
        'condition' => ProfileConditionType::class,
        'property ' => ProfileConditionValue::class,
    ];

    protected ProfileConditionType $condition;
    protected ProfileConditionValue $property;
    protected string $value;
    protected bool $isRequired;

    public function getCondition(): ProfileConditionType
    {
        return $this->condition;
    }

    public function getProperty(): ProfileConditionValue
    {
        return $this->property;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }
}
