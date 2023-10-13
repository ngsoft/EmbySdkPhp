<?php

declare(strict_types=1);

use EmbyClient\Connection;
use EmbyClient\EmbyConnect;
use EmbyClient\Model\Services\LibraryService;

require_once __DIR__ . '/../vendor/autoload.php';

// $conn = EmbyConnect::connect('daedelus005@gmail.com', "7Kj~DE3q*'Ur6zW", 'mediaserver');

$local = Connection::getConnection('mediaserver', '230403e6d2634684b4f5121621acd765');

// var_dump($conn->testConnection());
var_dump(LibraryService::create()->getLibrarySelectablemediafolders());
//
// var_dump($conn);
//
// var_dump($ms);
