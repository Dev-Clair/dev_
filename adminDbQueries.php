<?php
// require resource: Connection Object
require_once __DIR__ . DIRECTORY_SEPARATOR . 'dbConnection.php';

/** *******************************************Create Tables***************************************** */
/** ******* Database Table*******/

$tableName = "";
$fieldNames = "``  PRIMARY KEY NOT NULL,
               ``  NOT NULL,
               ``  UNIQUE NOT NULL,
               ``  NOT NULL,
               `datecreated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";

$databaseName = "";
// $conn = tableConnection($databaseName);
// $dbTable = new DbTable($conn);
// $result = $dbTable->createTable("`$tableName`", $fieldNames);
// echo "Creating table $tableName: ";
// if ($result) {
//     echo "Success\n";
// } else {
//     echo "Failure\n";
// }

/** *******************************************Alter Tables***************************************** */
$databaseName = "";
$tableName = "";
$alterStatement = "ADD COLUMN ``  NOT NULL FIRST";
// $conn = tableConnection($databaseName);
// $dbTable = new DbTable($conn);
// $result = $dbTable->alterTable("`$tableName`", $alterStatement);


/** *******************************************Truncate Tables***************************************** */
$databaseName = "";
$tableName = "";
// $conn = tableConnection($databaseName);
// $dbTable = new DbTable($conn);
// $result = $dbTable->truncateTable("`$tableName`");


/** *******************************************Drop Tables***************************************** */
$databaseName = "";
$tableName = "";
// $conn = tableConnection($databaseName);
// $dbTable = new DbTable($conn);
// $result = $dbTable->dropTable("`$tableName`");
