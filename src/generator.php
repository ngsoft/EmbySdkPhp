<?php

declare(strict_types=1);

use Brick\VarExporter\VarExporter;
use EmbyClient\ApiService;
use EmbyClient\DynamicModel;
use EmbyClient\Model;
use EmbyClient\RefName;
use NGSOFT\DataStructure\Map;
use Psr\Http\Client\ClientExceptionInterface;

function resolvePath(string $ref): array
{
    global $schema;

    if (str_starts_with($ref, '#/'))
    {
        $result   = $schema;

        $ref      = rtrim($ref, '/');
        $ref      = ltrim($ref, '#/');

        $segments = explode('/', $ref);
        $key      = array_pop($segments);

        foreach ($segments as $segment)
        {
            $result = $result[$segment];
        }

        return $result[$key];
    }

    throw new ValueError(sprintf('Invalid ref %s', $ref));
}

function resolveTypeRef(string $ref): string
{
    return resolveClassName(basename($ref));
}

function resolveClassName(string $name, string $ns = ''): string
{
    $name = str_replace(['_', '.'], NAMESPACE_SEPARATOR, $name);
    $name = str_replace('LiveTV\\Api', 'LiveTv\\Api', $name);
    $name = str_replace('-', '', $name);

    if ( ! empty($ns) && str_starts_with($name, $ns))
    {
        $name = substr($name, strlen($ns));
    }

    return $name;
}

/**
 * @return string[]
 */
function splitClassName(string|object $className): array
{
    $className = resolveClassName($className);
    return [class_basename($className), class_namespace($className)];
}

function addRef(array &$template, $data): void
{
    if ( ! isset($data['x-internal-ref-name']))
    {
        return;
    }

    $template[] = sprintf('use %s;', RefName::class);

    $template[] = '';
    $template[] = sprintf('#[%s(\'%s\')]', class_basename(RefName::class), $data['x-internal-ref-name']);
}

function getFileName(string $className): string
{
    global $root, $namespace;

    $className             = resolveClassName($className, $namespace);
    [$name, $subNamespace] = splitClassName($className);

    return $root .
        str_replace(NAMESPACE_SEPARATOR, DIRECTORY_SEPARATOR, $subNamespace) .
        DIRECTORY_SEPARATOR . $name . '.php';
}

function MakeEnum(string $name, array $data): void
{
    global $namespace, $overwrite;

    $values                      = $data['enum'];

    [$usableName, $subNamespace] = splitClassName($name);

    if ( ! empty($subNamespace))
    {
        $subNamespace = NAMESPACE_SEPARATOR . $subNamespace;
    }

    $fileName                    = getFileName($subNamespace . NAMESPACE_SEPARATOR . $usableName);

    if (is_file($fileName) && ! $overwrite)
    {
        return;
    }

    @mkdir(dirname($fileName), 0777, true);

    $template                    = [
        '<?php',
        '',
        'declare(strict_types=1);',
        '',
        sprintf('namespace %s%s;', $namespace, $subNamespace),
        '',
    ];

    addRef($template, $data);

    $template[]                  = sprintf('enum %s: string', $usableName);
    $template[]                  = '{';

    $pad                         = max(1, ...array_map(fn ($str) => strlen($str), $values));

    foreach ($values as $enumValue)
    {
        $enumName   = $enumValue;

        if ( ! preg_match('#^[A-Z]#', $enumValue))
        {
            $enumName = strtoupper($enumValue);
        }

        $template[] = sprintf('    case %s = \'%s\';', str_pad($enumName, $pad), $enumValue);
    }

    $template[]                  = "}\n";

    file_put_contents($fileName, implode("\n", $template));
}

function MakeModel(string $name, array $data, array $props): void
{
    global $namespace, $overwrite;

    [$usableName, $subNamespace] = splitClassName($name);

    if ( ! empty($subNamespace))
    {
        $subNamespace = NAMESPACE_SEPARATOR . $subNamespace;
    }

    $fileName                    = getFileName($subNamespace . NAMESPACE_SEPARATOR . $usableName);

    if (is_file($fileName) && ! $overwrite)
    {
        return;
    }

    @mkdir(dirname($fileName), 0777, true);

    $template                    = [
        '<?php',
        '',
        'declare(strict_types=1);',
        '',
        sprintf('namespace %s%s;', $namespace, $subNamespace),
        '',
    ];
    addRef($template, $data);
    $template[]                  = sprintf('class %s extends %s', $usableName, NAMESPACE_SEPARATOR . $data['extends']);
    $template[]                  = '{';
    $header                      = $body = $mapping = [];
    $pad                         = 0;

    foreach ($props as $prop => $type)
    {
        $prop     = lcfirst($prop);

        $isList   = str_ends_with($type, '[]');

        $baseType = str_replace('[]', '', $type);

        // not a builtin type
        if (str_contains($baseType, NAMESPACE_SEPARATOR))
        {
            $baseType       = str_replace(NAMESPACE_SEPARATOR . $namespace . $subNamespace . NAMESPACE_SEPARATOR, '', $baseType);
            $mapping[$prop] = $baseType;
            $pad            = max($pad, strlen($prop));
        }

        if ($isList)
        {
            $header[] = sprintf('    /** @var %s[] */', $baseType);
        }
        $header[] = sprintf('    protected %s $%s;', $isList ? 'array' : $baseType, $prop);

        // make getter
        $body[]   = '';

        if ($isList)
        {
            $body[] = '    /**';
            $body[] = sprintf('     * @return %s[]', $baseType);
            $body[] = '     */';
        }

        $body[]   = sprintf('    public function get%s(): %s', ucfirst($prop), $isList ? 'array' : $baseType);
        $body[]   = '    {';
        $body[]   = sprintf('        return $this->%s;', $prop);
        $body[]   = '    }';
    }

    if ( ! empty($mapping))
    {
        $template[] = '    protected static array $mapping = [';

        foreach ($mapping as $keyName => $className)
        {
            $template[] = sprintf('        \'%s\' => %s::class,', str_pad($keyName, $pad), $className);
        }

        $template[] = '    ];';
        $template[] = '';
    }

    $template                    = array_merge($template, $header, $body);

    $template[]                  = "}\n";
    file_put_contents($fileName, implode("\n", $template));
}

function MakeResponseError(int $code, string $description): void
{
    global $namespace, $overwrite;

    $subNamespace = NAMESPACE_SEPARATOR . 'Exceptions';

    $usableName   = sprintf('Response%u', $code);

    $fileName     = getFileName($subNamespace . NAMESPACE_SEPARATOR . $usableName);

    if (is_file($fileName) && ! $overwrite)
    {
        return;
    }

    @mkdir(dirname($fileName), 0777, true);

    $template     = [
        '<?php',
        '',
        'declare(strict_types=1);',
        '',
        sprintf('namespace %s%s;', $namespace, $subNamespace),
        '',
        sprintf('use %s;', ClientExceptionInterface::class),
        '',

    ];

    $template[]   = sprintf(
        'class %s extends %s implements %s',
        $usableName,
        NAMESPACE_SEPARATOR . RuntimeException::class,
        class_basename(ClientExceptionInterface::class)
    );

    $template[]   = '{';

    $template[]   = sprintf(
        '    public function __construct($message = \'%s\', $code = %u, \\Throwable $previous = null)',
        $description,
        $code
    );

    $template[]   = '    {';
    $template[]   = '        parent::__construct($message, $code, $previous);';
    $template[]   = '    }';
    $template[]   = "}\n";
    file_put_contents($fileName, implode("\n", $template));
}

function getServiceName(array $data): string
{
    global $httpMethods;

    foreach (array_keys($httpMethods) as $key)
    {
        if (isset($data[$key]['tags'][0]))
        {
            return $data[$key]['tags'][0];
        }
    }

    return '';
}

function MakeService(Map $service): void
{
    global $namespace, $overwrite, $httpMethods, $typeMap, $methodNames;

    $usableName   = $service->get('name');
    $service->delete('name');

    $subNamespace = NAMESPACE_SEPARATOR . 'Services';

    $className    = NAMESPACE_SEPARATOR . $namespace . $subNamespace . NAMESPACE_SEPARATOR . $usableName;

    $fileName     = getFileName($subNamespace . NAMESPACE_SEPARATOR . $usableName);

    if (is_file($fileName) && ! $overwrite)
    {
        return;
    }

    @mkdir(dirname($fileName), 0777, true);

    $template     = [
        '<?php',
        '',
        'declare(strict_types=1);',
        '',
        sprintf('namespace %s%s;', $namespace, $subNamespace),
        '',
        'use ' . ApiService::class . ';',
        '',
        sprintf('class %s extends %s', $usableName, class_basename(ApiService::class)),
        '{',
    ];

    // methods
    $header       = $body = $queryParameters = $pathParameters = $headerParameters = $endpoints = [];

    foreach ($service as $endpoint => $data)
    {
        foreach ($httpMethods as $key => $httpMethod)
        {
            if ( ! isset($data[$key]))
            {
                continue;
            }

            $entry                     = $data[$key];

            $fn                        = $entry['operationId'];
            $params                    = [];
            $methodNames[$className] ??= [];
            $methodNames[$className][] = $fn;

            $docs                      = [];

            // php-docs

            $docs[]                    = '    /**';

            if ( ! empty($entry['summary']))
            {
                $docs[] = sprintf('     * %s', $entry['summary']);
                $docs[] = sprintf('     * %s', $entry['description']);
            }

            if (isset($entry['externalDocs']['url']))
            {
                $docs[] = sprintf(
                    '     * @link %s %s',
                    $entry['externalDocs']['url'],
                    $entry['externalDocs']['description']
                );
            }

            // parameters

            foreach ($entry['parameters'] ?? [] as $item)
            {
                // there
                $name = lcfirst($item['name']);

                switch ($item['in'])
                {
                    case 'path':
                        $pathParameters[$endpoint]   ??= [];
                        $pathParameters[$endpoint][$name]            = true;
                        break;
                    case 'header':
                        $headerParameters[$endpoint] ??= [];
                        $headerParameters[$endpoint][ucfirst($name)] = true;
                        $name                                        = preg_replace_callback(
                            '#-(\w)#',
                            fn ($matches) => ucfirst($matches[1]),
                            $name
                        );
                        break;
                    default:
                        $queryParameters[$endpoint]  ??= [];
                        $queryParameters[$endpoint][$name]           = true;
                        break;
                }

                // types

                if ( ! isset($item['schema']['type']))
                {
                    $params[$name][] = $typeMap[$item['schema']['$ref']];
                } elseif (isset($item['schema']['format']))
                {
                    $params[$name][] = aliasType($item['schema']['format']);
                } else
                {
                    $params[$name][] = aliasType($item['schema']['type']);
                }

                if (isset($item['schema']['nullable']))
                {
                    $params[$name][] = 'null';
                }
            }
            // return type

            $returns                   = false;
            $returnType                = 'void';

            if ( ! isset($entry['responses']['200']['content']['application/json']['schema']))
            {
                $returnType = 'mixed';
                $returns    = ! str_contains($entry['responses']['200']['description'], 'Empty response');
            } elseif (isset($entry['responses']['200']['content']['application/json']['schema']['type']))
            {
                $returnType = aliasType($entry['responses']['200']['content']['application/json']['schema']['type']);
                $returns    = true;

                if ('array' === $returnType)
                {
                    if ( ! isset($entry['responses']['200']['content']['application/json']['schema']['items']['$ref']))
                    {
                        $docs[] = sprintf(
                            '     * @return %s[]',
                            aliasType($entry['responses']['200']['content']['application/json']['schema']['items']['type'])
                        );
                    } else
                    {
                        $docs[] = sprintf(
                            '     * @return %s[]',
                            $typeMap[$entry['responses']['200']['content']['application/json']['schema']['items']['$ref']]
                        );
                    }
                }
            } elseif (isset($entry['responses']['200']['content']['application/json']['schema']['$ref']))
            {
                $returns    = true;
                $returnType = $typeMap[$entry['responses']['200']['content']['application/json']['schema']['$ref']];
            }

            // params

            $paramList                 = [];

            uasort($params, function ($a, $_)
            {
                if (in_array('null', $a))
                {
                    return 1;
                }

                return -1;
            });

            foreach ($params as $prop => $types)
            {
                $prop        = implode('|', $types) . ' $' . $prop;

                if (in_array('null', $types))
                {
                    $prop .= ' = null';
                }
                $paramList[] = $prop;
            }

            $paramList                 = implode(",\n        ", $paramList);

            $endpoints[$fn]            = [$endpoint, $httpMethod, $returns ? $returnType : 'void'];

            if (count($docs) > 1)
            {
                $docs[] = '     */';
                $body   = array_merge($body, $docs);
            }

            // fn body
            if (count($params) < 2)
            {
                $body[] = sprintf('    public function %s(%s): %s', $fn, $paramList, $returns ? $returnType : 'void');
            } else
            {
                $body[] = sprintf('    public function %s(', $fn);
                $body[] = '        ' . $paramList;
                $body[] = sprintf('    ): %s', $returns ? $returnType : 'void');
            }

            $body[]                    = '    {';

            $code                      = '$this->makeApiCall(__FUNCTION__';

            if (count($params))
            {
                $code .= ', ' . implode(', ', array_map(fn ($x) => '$' . $x, array_keys($params)));
            }

            $code .= ');';

            if ($returns)
            {
                $code = 'return ' . $code;
            }

            $body[]                    = '        ' . $code;
            $body[]                    = '    }';
            $body[]                    = '';
        }
    }

    // metadata

    $header[]     = sprintf(
        '    protected static array $endpoints = %s;',
        VarExporter::export($endpoints)
    );
    $header[]     = sprintf(
        '    protected static array $queryParameters = %s;',
        VarExporter::export($queryParameters)
    );
    $header[]     = sprintf(
        '    protected static array $pathParameters = %s;',
        VarExporter::export($pathParameters)
    );
    $header[]     = sprintf(
        '    protected static array $headerParameters = %s;',
        VarExporter::export($headerParameters)
    );

    //    var_dump($endpoints);
    $template     = array_merge($template, $header, $body);
    $template[]   = "}\n";

    //    var_dump(implode("\n", $template));
    file_put_contents($fileName, implode("\n", $template));
}

function aliasType(string $type): string
{
    static $alias;
    $alias ??= [
        'integer'   => 'int',
        'int32'     => 'int',
        'int64'     => 'int',
        'guid'      => 'string',
        'double'    => 'float',
        'boolean'   => 'bool',
        'date-time' => NAMESPACE_SEPARATOR . DateTimeImmutable::class,
    ];

    if (isset($alias[$type]))
    {
        return $alias[$type];
    }

    $type = str_replace('LiveTV\\Api', 'LiveTv\\Api', $type);
    return str_replace('-', '', $type);
}

chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

$source      = __DIR__ . '/../resources/openapi_v3.json';
$schema      = json_decode(file_get_contents($source), true);

if ( ! is_array($schema))
{
    exit('Invalid schema');
}

$root        = __DIR__ . '/../lib';
$namespace   = Model::class;
$overwrite   = in_array('-f', $argv);
$mapping     = [];
$uniqueTypes = [];
$typeMap     = [];

$path        = '#/components/schemas/';

// Schemas
foreach (resolvePath($path) as $name => $data)
{
    $resolvedName       = resolveClassName($name);
    $type               = aliasType($data['type']);

    $uniqueTypes[$type] = true;

    if ('string' === $type)
    {
        // Enum

        if (isset($data['enum']))
        {
            MakeEnum($name, $data);
            $typeMap[$path . $name] = NAMESPACE_SEPARATOR . $namespace . NAMESPACE_SEPARATOR . resolveClassName($name);
        }
    } else
    {
        // object

        $data['extends']        = Model::class;
        $props                  = [];

        if ( ! isset($data['properties']))
        {
            if (isset($data['additionalProperties']))
            {
                $data['extends'] = DynamicModel::class;
            }
        } else
        {
            foreach ($data['properties'] as $prop => $item)
            {
                $type = null;

                if (isset($item['format']))
                {
                    $type = $item['format'];
                } elseif (isset($item['type']))
                {
                    $type = $item['type'];

                    if ('array' === $type)
                    {
                        if (isset($item['items']['$ref']))
                        {
                            $type = NAMESPACE_SEPARATOR .
                                $namespace . NAMESPACE_SEPARATOR .
                                resolveTypeRef($item['items']['$ref']) . '[]';
                        } elseif (isset($item['items']['type']))
                        {
                            $type = aliasType($item['items']['type']) . '[]';
                        }
                    }
                } elseif (isset($item['$ref']))
                {
                    $type = NAMESPACE_SEPARATOR . $namespace . NAMESPACE_SEPARATOR . resolveTypeRef($item['$ref']);
                }

                if (isset($type))
                {
                    $type                                      = aliasType($type);
                    $uniqueTypes[str_replace('[]', '', $type)] = true;
                    $props[$prop]                              = $type;
                }
            }
        }

        MakeModel($name, $data, $props);
        $typeMap[$path . $name] = NAMESPACE_SEPARATOR . $namespace . NAMESPACE_SEPARATOR . resolveClassName($name);
    }
}

// Responses
$path        = '#/components/responses/';

foreach (resolvePath($path) as $code => $data)
{
    MakeResponseError((int) $code, $data['description']);

    $typeMap[$path . $code] = NAMESPACE_SEPARATOR . $namespace . NAMESPACE_SEPARATOR .
        sprintf('Exceptions\\Response%s', $code);
}

// services

$path        = '#/tags/';
$tags        = [];

foreach (resolvePath($path) as $item)
{
    $tags[$item['name']] = $item['externalDocs'] ?? [];
}

// implements services
$path        = '#/paths';
// path => tag
$services    = [];
// methods for AIO static class
$methodNames = [];

$httpMethods = [
    'get'    => 'GET',
    'post'   => 'POST',
    'put'    => 'PUT',
    'delete' => 'DELETE',
    'patch'  => 'PATCH',
];

foreach (resolvePath($path) as $endpoint => $data)
{
    // there
    $serviceName = getServiceName($data);
    $services[$serviceName] ??= new Map();
    $services[$serviceName]->add('name', $serviceName)->add($endpoint, $data);
}

foreach ($services as $service)
{
    MakeService($service);
}

// var_dump($services);

// write maps to json file
krsort($uniqueTypes);
file_put_contents(
    $root . DIRECTORY_SEPARATOR . 'components.json',
    json_encode(
        [
            'tags'           => $tags,
            'types'          => array_keys($uniqueTypes),
            'components'     => $typeMap,
            'serviceMethods' => $methodNames,

        ],
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    )
);