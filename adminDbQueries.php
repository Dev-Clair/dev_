<?php
// require resource: Connection Object
require_once __DIR__ . DIRECTORY_SEPARATOR . 'dbConnection.php';

/** *******************************************Create Tables***************************************** */
/** ******* Database Table*******/

$tableName = "productionemployee";
$fieldNames = "`empID` VARCHAR(10) PRIMARY KEY NOT NULL,
               `name` VARCHAR(100) NOT NULL,
               `department` VARCHAR(100) UNIQUE NOT NULL,
               `level` INT(2) NOT NULL,
               `datecreated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";

$databaseName = "employee";
$conn = tableConnection($databaseName);
$result = $conn->createTable("`$tableName`", $fieldNames);
echo "Creating table $tableName: ";
if ($result) {
    echo "Success\n";
} else {
    echo "Failure\n";
}

/** *******************************************Alter Tables***************************************** */
$databaseName = "";
$tableName = "";
$alterStatement = "ADD COLUMN ``  NOT NULL FIRST";
// $conn = tableConnection($databaseName);
// $result = $conn->alterTable("`$tableName`", $alterStatement);


/** *******************************************Truncate Tables***************************************** */
$databaseName = "";
$tableName = "";
// $conn = tableConnection($databaseName);
// $result = $conn->truncateTable("`$tableName`");


/** *******************************************Drop Tables***************************************** */
$databaseName = "";
$tableName = "";
// $conn = tableConnection($databaseName);
// $result = $conn->dropTable("`$tableName`");
