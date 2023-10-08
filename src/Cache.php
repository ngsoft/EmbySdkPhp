<?php

declare(strict_types=1);

namespace EmbyClient;

use NGSOFT\Cache\PHPCache;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use Symfony\Component\Cache\Adapter\ApcuAdapter;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\ChainAdapter;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

final class Cache
{
    private static ?CacheItemPoolInterface $cache = null;

    private function __construct()
    {
    }

    public static function getCachePool(): ?CacheItemPoolInterface
    {
        if ( ! self::$cache)
        {
            if (class_exists(PHPCache::class))
            {
                self::$cache = new PHPCache();
            } elseif (class_exists(ChainAdapter::class))
            {
                $adapters    = [new ArrayAdapter()];

                if (ApcuAdapter::isSupported() && 'cli' !== php_sapi_name())
                {
                    $adapters[] = new ApcuAdapter();
                }

                $adapters[]  = new FilesystemAdapter();

                self::$cache = new ChainAdapter(
                    $adapters
                );
            }
        }

        return self::$cache;
    }

    public static function setCachePool(CacheItemPoolInterface $cacheItemPool): void
    {
        self::$cache = $cacheItemPool;
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function get(string $key, mixed $defaultValue = null): mixed
    {
        if ( ! self::getCachePool())
        {
            return value($defaultValue);
        }

        $item = self::getCachePool()->getItem($key);

        if ( ! $item->isHit())
        {
            $value = value($defaultValue);

            if (isset($value))
            {
                self::getCachePool()->save(
                    $item->set($value)
                );
            }

            return $value;
        }

        return $item->get();
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function set(string $key, mixed $value): void
    {
        if ( ! self::getCachePool())
        {
            return;
        }

        if (null === $value = value($value))
        {
            self::getCachePool()->deleteItem($key);
        } else
        {
            self::getCachePool()->save(
                self::getCachePool()
                    ->getItem($key)
                    ->set($value)
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function delete(string $key): void
    {
        self::getCachePool()?->deleteItem($key);
    }

    public static function clear(): void
    {
        self::getCachePool()?->clear();
    }
}
