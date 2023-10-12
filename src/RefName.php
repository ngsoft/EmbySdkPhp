<?php

declare(strict_types=1);

namespace EmbyClient;

#[\Attribute(\Attribute::TARGET_CLASS)]
class RefName
{
    public function __construct(
        public string $value
    ) {
    }
}
