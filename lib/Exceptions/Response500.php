<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use EmbyClient\EmbyException;

class Response500 extends EmbyException
{
    protected string $defaultMessage = 'Server error.';
    protected int $defaultCode       = 500;
}
