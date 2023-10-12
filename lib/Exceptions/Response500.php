<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;

class Response500 extends \RuntimeException implements ClientExceptionInterface
{
    public function __construct($message = 'Server error.', $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
