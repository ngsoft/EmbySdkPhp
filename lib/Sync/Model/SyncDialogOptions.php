<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.SyncDialogOptions')]
class SyncDialogOptions extends \EmbyClient\Model
{
    protected static array $mapping = [
        'targets'        => \EmbyClient\Model\Sync\SyncTarget::class,
        'options'        => SyncJobOption::class,
        'qualityOptions' => SyncQualityOption::class,
        'profileOptions' => SyncProfileOption::class,
    ];

    /** @var \EmbyClient\Model\Sync\SyncTarget[] */
    protected array $targets;
    /** @var SyncJobOption[] */
    protected array $options;
    /** @var SyncQualityOption[] */
    protected array $qualityOptions;
    /** @var SyncProfileOption[] */
    protected array $profileOptions;

    /**
     * @return \EmbyClient\Model\Sync\SyncTarget[]
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * @return SyncJobOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @return SyncQualityOption[]
     */
    public function getQualityOptions(): array
    {
        return $this->qualityOptions;
    }

    /**
     * @return SyncProfileOption[]
     */
    public function getProfileOptions(): array
    {
        return $this->profileOptions;
    }
}
