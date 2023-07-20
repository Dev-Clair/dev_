<?php

trait DbConn
{
    protected $conn;
    /**
     *Initializes the connection settings.
     *
     * @param string $serverName Server name (localhost) or IP address(remote host).
     * @param string $userName   Database username.
     * @param string $password   Database password.
     * @param string|null $database   Database name (optional).
     */
    public function dbConn(string $serverName, string $userName, string $password, ?string $database = null)
    {
        $conn = new mysqli($serverName, $userName, $password, $database);

        if ($conn->connect_error) {
            die("Error! Connection Failed: " . $this->conn->connect_error);
        }

        return $conn;
    }

    /**
     * Closes the resource: database connection.
     */
    public function closedbConn($conn): void
    {
        if ($conn !== null) {
            $conn->close();
        }
    }
}
