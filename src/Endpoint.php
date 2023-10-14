<?php

declare(strict_types=1);

namespace EmbyClient;

use NGSOFT\DataStructure\ReversibleIterator;
use NGSOFT\DataStructure\Sort;
use NGSOFT\Traits\ReversibleIteratorTrait;

final class Endpoint implements \Stringable, ReversibleIterator
{
    use ReversibleIteratorTrait;

    private string $path            = '';
    private string $method          = '';
    private string $httpMethod      = 'GET';
    private string $returnType      = '';
    private bool $isList            = false;
    private array $parameters       = [];

    private array $queryParameters  = [];
    private array $pathParameters   = [];
    private array $headerParameters = [];

    private function __construct()
    {
    }

    public function __unserialize(array $data): void
    {
        [
            $this->method, $this->path, $this->httpMethod,
            $this->returnType, $this->isList, $this->parameters,
            $this->queryParameters, $this->pathParameters, $this->headerParameters
        ] = $data;
    }

    public function __serialize(): array
    {
        return [
            $this->method, $this->path, $this->httpMethod,
            $this->returnType, $this->isList, $this->parameters,
            $this->queryParameters, $this->pathParameters, $this->headerParameters,
        ];
    }

    public function __toString()
    {
        return $this->path;
    }

    public static function make(
        string $method,
        array $data,
        array $parameters,
        array $queryParams,
        array $pathParams,
        array $headerParams
    ): self {
        $instance                                                       = new self();

        $instance->method                                               = $method;

        [$instance->path, $instance->httpMethod, $instance->returnType] = $data;

        if (false !== $data[3])
        {
            $instance->returnType = $data[3];
            $instance->isList     = true;
        }

        $instance->parameters                                           = $parameters[$method]
            ?? [];

        $instance->queryParameters                                      = $queryParams[$instance->path]
            ?? [];
        $instance->pathParameters                                       = $pathParams[$instance->path]
            ?? [];
        $instance->headerParameters                                     = $headerParams[$instance->path]
            ?? [];

        return $instance;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function isQueryParameter(string $param): bool
    {
        return isset($this->queryParameters[$param]);
    }

    public function isPathParameter(string $param): bool
    {
        return isset($this->pathParameters[$param]);
    }

    public function convertHeaderParameter(string $param): string
    {
        static $cache = [];
        return $cache[$param] ??= ucfirst(
            preg_replace_callback(
                '#[A-Z]#',
                fn ($letter) => '-' . $letter,
                $param
            )
        );
    }

    public function isHeaderParameter(string $param): bool
    {
        return isset(
            $this->headerParameters[$this->convertHeaderParameter($param)]
        );
    }

    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function returnsModel(): bool
    {
        return is_a($this->returnType, Model::class, true);
    }

    public function getReturnType(): string
    {
        return $this->returnType;
    }

    public function isList(): bool
    {
        return $this->isList;
    }

    public function entries(Sort $sort = Sort::ASC): iterable
    {
        $entries = $this->parameters;

        if (Sort::DESC === $sort)
        {
            $entries = array_reverse($entries);
        }

        yield from $entries;
    }
}
