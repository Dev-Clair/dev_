<?php

declare(strict_types=1);

namespace db;

use Dotenv\Dotenv;
use db\Connection\DbConn;
use db\Connection\DbTable;
use db\Connection\DbTableOp;

class DbResource
{
    /** Establishes and Provides Resource: Connection Object */
    private static function getConnection(?string $databaseName = null)
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $conn = new DbConn(
            driver: $_ENV["DSN_DRIVER"],
            serverName: $_ENV["DATABASE_HOSTNAME"],
            userName: $_ENV["DATABASE_USERNAME"],
            password: $_ENV["DATABASE_PASSWORD"],
            database: $databaseName
        );

        return $conn->getConnection();
    }

    /******* Create/Drop/Truncate/Alter Table ******/
    public static function getTableConnection(?string $databaseName = null): DbTable
    {
        // $conn = self::getConnection($databaseName);
        $conn = static::getConnection($databaseName);
        return new DbTable($conn);
    }

    /******* Table Read and Write Operations ******/
    public static function getTableOpConnection(?string $databaseName = null): DbTableOp
    {
        // $conn = self::getConnection($databaseName);
        $conn = static::getConnection($databaseName);
        return new DbTableOp($conn);
    }
}
