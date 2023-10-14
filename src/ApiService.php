<?php

declare(strict_types=1);

namespace EmbyClient;

abstract class ApiService implements Client
{
    /**
     * Maps the endpoints.
     *
     * @var array<string,array{path: string,httpMethod: string,returnType: string,isList: bool}>
     */
    protected static array $endpoints        = [];

    /**
     * Stores the parameter names for variadic load.
     *
     * @var array<string,string[]>
     */
    protected static array $parameters       = [];

    /**
     * Stores the query parameters.
     *
     * @var array<string,array<string,bool>>
     */
    protected static array $queryParameters  = [];

    /**
     * Stores the path parameters.
     *
     * @var array<string,array<string,bool>>
     */
    protected static array $pathParameters   = [];

    /**
     * Stores the headers parameters.
     *
     * @var array<string,array<string,bool>>
     */
    protected static array $headerParameters = [];

    public function __construct(
        protected ?Connection $connection = null
    ) {
        $this->connection ??= Connection::getActiveConnection();
    }

    public static function create(?Connection $connection = null): static
    {
        return new static($connection);
    }

    protected function getEndpoint(string $method): Endpoint
    {
        return Endpoint::make(
            $method,
            static::$endpoints[$method],
            static::$parameters,
            static::$queryParameters,
            static::$pathParameters,
            static::$headerParameters
        );
    }

    protected function valueToString(mixed $value): string
    {
        if ($value instanceof \DateTimeInterface)
        {
            return $value->format(static::DATE_FORMAT);
        }

        if ( ! is_string($value))
        {
            try
            {
                return json_encode($value, flags: JSON_THROW_ON_ERROR);
            } catch (\JsonException)
            {
                return '';
            }
        }

        return $value;
    }

    protected function makeApiCall(string $fn, ...$args)
    {
        if ( ! isset($this->connection))
        {
            throw new EmbyException(
                'You have no Emby active connection.'
            );
        }

        $endpoint = $this->getEndpoint($fn);
        $query    = $headers = [];
        $path     = $endpoint->getPath();

        foreach ($endpoint as $index => $prop)
        {
            $value = $args[$index];

            if (null === $value)
            {
                continue;
            }

            if ($endpoint->isQueryParameter($prop))
            {
                $query[$prop] = $this->valueToString($value);
            } elseif ($endpoint->isPathParameter($prop))
            {
                $path = str_replace(
                    sprintf('{%s}', ucfirst($prop)),
                    $this->valueToString($value),
                    $path
                );
            } else
            {
                $headers[$endpoint->convertHeaderParameter($prop)] = $this->valueToString($value);
            }
        }

        $getRaw   = ! $endpoint->isList() && ! $endpoint->returnsModel();

        if ($resp = $this->connection->makeApiCall(
            $path,
            $query,
            $headers,
            $endpoint->getHttpMethod(),
            false,
            $getRaw
        ))
        {
            $returnType = $endpoint->getReturnType();

            // for autocompletion
            if (is_a($returnType, Model::class, true))
            {
                if ($endpoint->isList())
                {
                    return array_map(fn ($x) => $returnType::make($x), $resp);
                }

                return $returnType::make($resp);
            }

            // mixed|void
            return $resp;
        }

        // fallback
        return null;
    }
}
