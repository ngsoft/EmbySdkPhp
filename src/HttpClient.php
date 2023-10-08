<?php

declare(strict_types=1);

namespace EmbyClient;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

final class HttpClient
{
    private static int $timeout      = 5;

    private static ?Client $instance = null;

    private function __construct()
    {
    }

    public static function setTimeout(int $timeout): void
    {
        self::$timeout  = $timeout;
        self::$instance = null;
    }

    public static function getHttpClient(): Client
    {
        return self::$instance ??= new Client([
            RequestOptions::TIMEOUT         => self::$timeout,
            RequestOptions::CONNECT_TIMEOUT => self::$timeout,
        ]);
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
