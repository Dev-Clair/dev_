<?php

declare(strict_types=1);

namespace db\Connection;

/**
 * Table Creation Class.
 * Requires Resource
 * to Create Tables in Database.
 */
class DbTable
{
    /**
     * Constructor,
     * sources resource: connection object
     */
    public function __construct(private ?\mysqli $conn)
    {
    }

    /**
     * @param string $tableName = "Name of table to be created in database"
     * @param string $fieldNames = "fieldName dataType NULL/NOT NULL ?PRIMARY KEY ?AUTO_INCREMENT, fieldName dataType NULL/NOT NULL ?DEFAULT"
     * @return bool True if the table was created successfully, false otherwise
     */
    public function createTable(string $tableName, string $fieldNames): bool
    {
        if (!$this->conn instanceof \mysqli) {
            throw new \RuntimeException("No database connection available.");
        }

        $sql_query = "CREATE TABLE $tableName ($fieldNames)";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new \RuntimeException("Error! Table Creation Failed: " . $this->conn->error);
        }

        // $this->conn->close(); // Close Connection Object
        return $result === true;
    }

    /**
     * @param string $tableName Name of the table to be altered in the database
     * @param string $alterStatement Statement to modify the table structure
     * @return bool True if the table was altered successfully, false otherwise
     */
    public function alterTable(string $tableName, string $alterStatement): bool
    {
        if (!$this->conn instanceof \mysqli) {
            throw new \RuntimeException("No database connection available.");
        }

        $sql_query = "ALTER TABLE $tableName $alterStatement";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new \RuntimeException("Error! Process Failed: " . $this->conn->error);
        }

        // $this->conn->close(); // Close Connection Object
        return $result === true;
    }

    /**
     * @param string $tableName Name of the table to be truncated in the database
     * @return bool True if the table was truncated successfully, false otherwise
     */
    public function truncateTable(string $tableName): bool
    {
        if (!$this->conn instanceof \mysqli) {
            throw new \RuntimeException("No database connection available.");
        }

        $sql_query = "TRUNCATE TABLE $tableName";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new \RuntimeException("Error! Process Failed: " . $this->conn->error);
        }

        // $this->conn->close(); // Close Connection Object
        return $result === true;
    }

    /**
     * @param string $tableName Name of the table to be dropped in the database
     * @return bool True if the table was dropped successfully, false otherwise
     */
    public function dropTable(string $tableName): bool
    {
        if (!$this->conn instanceof \mysqli) {
            throw new \RuntimeException("No database connection available.");
        }

        $sql_query = "DROP TABLE $tableName";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new \RuntimeException("Error! Process Failed: " . $this->conn->error);
        }

        // $this->conn->close(); // Close Connection Object
        return $result === true;
    }
}
