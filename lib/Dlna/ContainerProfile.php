<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.ContainerProfile')]
class ContainerProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type      ' => DlnaProfileType::class,
        'conditions' => ProfileCondition::class,
    ];

    protected DlnaProfileType $type;
    /** @var ProfileCondition[] */
    protected array $conditions;
    protected string $container;

    public function getType(): DlnaProfileType
    {
        return $this->type;
    }

    /**
     * @return ProfileCondition[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    public function getContainer(): string
    {
        return $this->container;
    }
}
