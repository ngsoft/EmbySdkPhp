<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.CodecProfile')]
class CodecProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type'            => CodecType::class,
        'conditions'      => ProfileCondition::class,
        'applyConditions' => ProfileCondition::class,
    ];

    protected CodecType $type;
    /** @var ProfileCondition[] */
    protected array $conditions;
    /** @var ProfileCondition[] */
    protected array $applyConditions;
    protected string $codec;
    protected string $container;

    public function getType(): CodecType
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

    /**
     * @return ProfileCondition[]
     */
    public function getApplyConditions(): array
    {
        return $this->applyConditions;
    }

    public function getCodec(): string
    {
        return $this->codec;
    }

    public function getContainer(): string
    {
        return $this->container;
    }
}
