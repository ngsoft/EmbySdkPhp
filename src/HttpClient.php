<?php

declare(strict_types=1);

namespace EmbyClient;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

final class HttpClient
{
    private function __construct()
    {
    }

    public static function getHttpClient(): Client
    {
        static $instance;
        return $instance ??= new Client();
    }

    public static function getHttpFactory(): HttpFactory
    {
        static $instance;
        return $instance ??= new HttpFactory();
    }

    public static function createRequest(string|UriInterface $uri, string $method = 'GET'): RequestInterface
    {
        return self::getHttpFactory()->createRequest($method, $uri);
    }

    public static function sendApiRequest(RequestInterface $request): ?array
    {
        try
        {
            $resp = self::getHttpClient()->sendRequest($request);

            if (200 === $resp->getStatusCode())
            {
                $body = $resp->getBody();
                $body->rewind();
                return json_decode(
                    $body->getContents(),
                    true
                );
            }
        } catch (\Throwable)
        {
        }
        return null;
    }
}
