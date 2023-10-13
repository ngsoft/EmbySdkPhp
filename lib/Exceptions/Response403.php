<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use EmbyClient\EmbyException;

class Response403 extends EmbyException
{
    protected string $defaultMessage = 'Forbidden. No permission for the reqested operation.';
    protected int $defaultCode       = 403;
}
