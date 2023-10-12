<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;

class Response404 extends \RuntimeException implements ClientExceptionInterface
{
    public function __construct($message = 'Resource not found or unavailable.', $code = 404, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
