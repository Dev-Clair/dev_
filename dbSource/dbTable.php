<?php

/**
 * Table Creation Class.
 * Requires Resource
 * to Create Tables in Database.
 */
class DbTable
{
    private ?mysqli $conn;

    /**
     * Constructor,
     * sources resource: connection object
     */
    public function __construct(?mysqli $conn)
    {
        $this->conn = $conn;
    }

    /**
     * @param string $tableName = "Name of table to be created in database"
     * @param string $fieldNames = "fieldName dataType NULL/NOT NULL ?PRIMARY KEY ?AUTO_INCREMENT, fieldName dataType NULL/NOT NULL ?DEFAULT"
     * @return bool True if the table was created successfully, false otherwise
     */
    public function createTable(string $tableName, string $fieldNames): bool
    {
        if (!$this->conn instanceof mysqli) {
            throw new Exception("No database connection available.");
        }

        $sql_query = "CREATE TABLE $tableName ($fieldNames)";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new Exception("Error! Table Creation Failed: " . $this->conn->error);
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
        if (!$this->conn instanceof mysqli) {
            throw new Exception("No database connection available.");
        }

        $sql_query = "ALTER TABLE $tableName $alterStatement";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new Exception("Error! Process Failed: " . $this->conn->error);
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
        if (!$this->conn instanceof mysqli) {
            throw new Exception("No database connection available.");
        }

        $sql_query = "TRUNCATE TABLE $tableName";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new Exception("Error! Process Failed: " . $this->conn->error);
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
        if (!$this->conn instanceof mysqli) {
            throw new Exception("No database connection available.");
        }

        $sql_query = "DROP TABLE $tableName";
        $result = $this->conn->query($sql_query);

        if ($result !== true) {
            throw new Exception("Error! Process Failed: " . $this->conn->error);
        }

        // $this->conn->close(); // Close Connection Object
        return $result === true;
    }

    /**
     * Retrieves the names of tables in a database as an array containing values only.
     * @param string $databaseName Name of the database
     * @return array Array containing the names of tables
     */
    public function retrieveTableNames(string $databaseName): array
    {
        if (!$this->conn instanceof mysqli) {
            throw new Exception("No database connection available.");
        }

        $sql_query = "SHOW TABLES FROM $databaseName";
        $result = $this->conn->query($sql_query);

        if ($result) {
            $tableNames = [];
            while ($row = $result->fetch_row()) {
                $tableNames[] = $row[0];
            }
            $result->close(); // Close Result Object
            return $tableNames;
        }
        // $this->conn->close(); // Close connection
        return [];
    }
}
