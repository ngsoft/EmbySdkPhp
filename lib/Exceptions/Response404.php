<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use EmbyClient\EmbyException;

class Response404 extends EmbyException
{
    protected string $defaultMessage = 'Resource not found or unavailable.';
    protected int $defaultCode       = 404;
}
