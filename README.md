# Emby Sdk for Php

This is a Php port of  [Emby.SDK](https://github.com/MediaBrowser/Emby.SDK) for [Emby Media Server](https://emby.media/)
With this you can connect to your Emby mediaserver and manage it.

## How to install

You can install this package using composer inside your project

```shell
composer require ngsoft/emby-client-php
```

This library requires use of a PSR-18 Http client and was developed
using [Guzzle](https://docs.guzzlephp.org/en/stable/)

If you wish to use guzzle:

```shell
composer require guzzlehttp/guzzle
```

This library also supports any PSR-6 caching (to keep your EmbyConnect connection token).

You can install a Cache library using:

```shell
composer require symfony/cache
```

## How to use

You can initialize the library like this:

```php
<?php

use EmbyClient\Connection;
use EmbyClient\EmbyConnect;
use EmbyClient\Cache;
use EmbyClient\HttpClient;

// if you are using a custom cache library you can add that line
// if you installed symfony/cache you don't need that line
Cache::setCachePool($myCacheItemPoolInstance);
// if you are using a custom Http Client you can add that line
// with guzzle it is automatic
HttpClient::setHttpClient($myHttpClientInstance);
// To make a connection using emby connect:
$connection = EmbyConnect::connect('usernameOrEmail', 'password', 'serverName');
// or to make a connection to a local or remote server using its ip or address using an api key
// you can generate an api key for your server in the web interface of your emby server:
// settings -> Advanced -> Api Keys -> New Api Key
$connection = Connection::getConnection('ipAddressOrHostname', 'api_key');
// or with custom port 
$connection = Connection::getConnection('ipAddressOrHostname:port', 'api_key');
// you can also connect to a server using its http(s) address and port
$connection = Connection::getConnection('https://example.com:8096', 'api_key');

// you can also test if a connection is authenticated
if($connection->testConnection())
{
    // you can also make a connection active globally
    // the first to connect is automatically registered
    $connection->makeActive();
}

```

To make an Api call you can use emby api client:

```php
use EmbyClient\ApiClient;

$devices = ApiClient::getDevices();

```

You can also use the services directly:

```php

use EmbyClient\Model\Services\DeviceService;

$service = new DeviceService($connection)

$devices = $service->getDevices();

```

# Informations

All models inside 'lib/' and the `ApiClient` are generated using `src/generator.php` using emby schema
in `resources/openapi_v3.json`.

[PHP-CS-Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) has also been used to make
it [PSR-12](https://www.php-fig.org/psr/psr-12/) compliant.
[phan](https://github.com/phan/phan) has also been used to check for errors


