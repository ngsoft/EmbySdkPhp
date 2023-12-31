<?php

declare(strict_types=1);

namespace EmbyClient;

abstract class Model implements \JsonSerializable, \ArrayAccess
{
    /**
     * Type mapping.
     *
     * @var array<string,string>
     */
    protected static array $mapping = [];

    public function __serialize(): array
    {
        return array_map(fn ($prop) => $this->{$prop}, array_keys($this->getPropertyList()));
    }

    public function __unserialize(array $data): void
    {
        foreach (array_keys($this->getPropertyList()) as $index => $prop)
        {
            $this->{$prop} = $data[$index];
        }
    }

    public function jsonSerialize(): array
    {
        $result = [];

        foreach (array_keys($this->getPropertyList()) as $prop)
        {
            $result[$prop] = $this->{$prop};
        }

        return $result;
    }

    public static function make(array $data): static
    {
        $instance   = new static();

        $properties = $instance->getPropertyList();

        foreach ($data as $prop => $value)
        {
            $prop = lcfirst($prop);

            if (in_array($prop, array_keys($properties)))
            {
                $expectedType      = $properties[$prop];

                if (is_string($value))
                {
                    if ('string' !== $expectedType)
                    {
                        try
                        {
                            $value = json_decode($value, true, flags: JSON_THROW_ON_ERROR);
                        } catch (\JsonException)
                        {
                        }
                    }
                }

                $mappedClass       = static::$mapping[$prop] ?? null;

                if (isset($mappedClass))
                {
                    if (is_array($value))
                    {
                        if (
                            array_is_list($value)
                            && class_exists($mappedClass)
                            && is_a($mappedClass, self::class, true)
                        ) {
                            $value = array_map(fn ($item) => $mappedClass::make($item), $value);
                        } elseif (
                            class_exists($mappedClass)
                            && is_a($mappedClass, self::class, true))
                        {
                            $value = $mappedClass::make($value);
                        }
                    } elseif (is_a(
                        $mappedClass,
                        \BackedEnum::class,
                        true
                    ))
                    {
                        $value = $mappedClass::from($value);
                    } elseif (class_exists($mappedClass))
                    {
                        $value = new $mappedClass($value);
                    }
                }

                $instance->{$prop} = $value;
            }
        }
        return $instance;
    }

    public function offsetExists(mixed $offset): bool
    {
        if ( ! is_string($offset))
        {
            return false;
        }

        return property_exists($this, $offset);
    }

    public function offsetGet(mixed $offset): mixed
    {
        if ( ! is_string($offset))
        {
            return null;
        }

        return $this->{$offset};
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        // noop
    }

    public function offsetUnset(mixed $offset): void
    {
        // noop
    }

    private function getPropertyList(): array
    {
        static $cache, $key = '665d11e749a5b8a929dd11fa5b4d11e249a54228';
        $cache ??= Cache::get($key, []);
        $className          = get_class($this);

        if ( ! isset($cache[$className]))
        {
            $cache[$className] = [];

            try
            {
                $reflectionClass = new \ReflectionClass($className);

                foreach ($reflectionClass->getProperties() as $reflectionProperty)
                {
                    if ($reflectionProperty->isStatic() || $reflectionProperty->isPrivate() || $reflectionProperty->isPublic())
                    {
                        continue;
                    }
                    $cache[$className][$reflectionProperty->getName()] = (string) $reflectionProperty->getType();
                }

                Cache::set($key, $cache);
            } catch (\ReflectionException)
            {
            }
        }

        return $cache[$className];
    }
}
