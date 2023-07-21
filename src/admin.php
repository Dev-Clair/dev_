<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/db/dbResource.php';

/** *******************************************Create Tables***************************************** */
/** ******* Create Table*******/
$tableName = "";
$fieldNames = "`` VARCHAR() PRIMARY KEY NOT NULL,
               `` VARCHAR() NOT NULL,
               `` VARCHAR() UNIQUE NOT NULL,
               `` INT() NOT NULL,
               `datecreated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";

$databaseName = "";
// $conn = tableConnection($databaseName);
// $result = $conn->createTable("`$tableName`", $fieldNames);
// echo "Creating table $tableName: ";
// if ($result) {
//     echo "Success\n";
// } else {
//     echo "Failure\n";
// }

/** Add Record to Table */
$newRecord = [];
$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->createRecords("`$tableName`", $newRecord);
// echo "Creating new record in $tableName: ";
// if ($result) {
//     echo "Success\n";
// } else {
//     echo "Failure\n";
// }

/** Update Table Record */
$record = [];
$fieldName = "";
$fieldValue = "";

$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->updateRecord("`$tableName`", $record, $fieldName, $fieldValue);
// echo "Updating record in $tableName: ";
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
