<?php

declare(strict_types=1);

use dbSource\Connection as Connection;

use Dotenv\Dotenv;

// require resource: Connection Object
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'dbSource/dbConn.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'dbSource/dbTable.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'dbSource/dbTableOp.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

/******* Create/Drop/Truncate/Alter Table ******/
function tableConnection(string $databaseName): DbTable
{
    $conn = new Connection\DbConn($_ENV["DATABASE_HOSTNAME"], $_ENV["DATABASE_USERNAME"], $_ENV["DATABASE_PASSWORD"], $databaseName);
    $conn = new DbTable($conn->getConnection());
    return $conn;
}

/******* Table Read and Write Operations ******/
function tableOpConnection(string $databaseName): DbTableOp
{
    $conn = new Connection\DbConn($_ENV["DATABASE_HOSTNAME"], $_ENV["DATABASE_USERNAME"], $_ENV["DATABASE_PASSWORD"], $databaseName);
    $conn = new DbTableOp($conn->getConnection());
    return $conn;
}
