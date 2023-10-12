<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\GenericEdit\Conditions;

use EmbyClient\RefName;

#[RefName('Emby.Web.GenericEdit.Conditions.PropertyCondition')]
class PropertyCondition extends \EmbyClient\Model
{
    protected static array $mapping = [
        'conditionType  ' => PropertyConditionType::class,
        'simpleCondition' => \EmbyClient\Model\Attributes\SimpleCondition::class,
        'valueCondition ' => \EmbyClient\Model\Attributes\ValueCondition::class,
    ];

    protected string $affectedPropertyId;
    protected PropertyConditionType $conditionType;
    protected string $targetPropertyId;
    protected \EmbyClient\Model\Attributes\SimpleCondition $simpleCondition;
    protected \EmbyClient\Model\Attributes\ValueCondition $valueCondition;
    protected object $value;

    public function getAffectedPropertyId(): string
    {
        return $this->affectedPropertyId;
    }

    public function getConditionType(): PropertyConditionType
    {
        return $this->conditionType;
    }

    public function getTargetPropertyId(): string
    {
        return $this->targetPropertyId;
    }

    public function getSimpleCondition(): \EmbyClient\Model\Attributes\SimpleCondition
    {
        return $this->simpleCondition;
    }

    public function getValueCondition(): \EmbyClient\Model\Attributes\ValueCondition
    {
        return $this->valueCondition;
    }

    public function getValue(): object
    {
        return $this->value;
    }
}
