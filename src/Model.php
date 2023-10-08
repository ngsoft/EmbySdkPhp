<?php

declare(strict_types=1);

namespace EmbyClient;

abstract class Model implements \JsonSerializable
{
    protected static array $mapping = [];

    final public function __serialize(): array
    {
        return array_map(fn ($prop) => $this->{$prop}, $this->getPropertyList());
    }

    final public function __unserialize(array $data): void
    {
        foreach ($this->getPropertyList() as $index => $prop)
        {
            $this->{$prop} = $data[$index];
        }
    }

    public function jsonSerialize(): array
    {
        $result = [];

        foreach ($this->getPropertyList() as $prop)
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

            if (in_array($prop, $properties))
            {
                if (is_string($value))
                {
                    try
                    {
                        $value = json_decode($value, true, flags: JSON_THROW_ON_ERROR);
                    } catch (\JsonException)
                    {
                    }
                }

                $mappedClass       = static::$mapping[$prop] ?? null;

                if (isset($mappedClass) && is_array($value))
                {
                    if (array_is_list($value))
                    {
                        $value = array_map(fn ($item) => $mappedClass::make($item), $value);
                    } else
                    {
                        $value = $mappedClass::make($value);
                    }
                }

                $instance->{$prop} = $value;
            }
        }
        return $instance;
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
                    $cache[$className][] = $reflectionProperty->getName();
                }

                Cache::set($key, $cache);
            } catch (\ReflectionException)
            {
            }
        }

        return $cache[$className];
    }
}
