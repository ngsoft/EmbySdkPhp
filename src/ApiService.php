<?php

declare(strict_types=1);

namespace EmbyClient;

abstract class ApiService
{
    protected static array $endpoints        = [];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    protected function makeApiCall(string $fn, ...$args)
    {
    }
}
