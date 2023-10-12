<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;

class Response403 extends \RuntimeException implements ClientExceptionInterface
{
    public function __construct($message = 'Forbidden. No permission for the reqested operation.', $code = 403, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
