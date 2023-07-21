<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/db/dbResource.php';

/** *******************************************Create Tables***************************************** */
/** ******* Create Table*******/
$tableName = "";
$fieldNames = "`` VARCHAR() PRIMARY KEY NOT NULL,
               `` VARCHAR() NOT NULL,
               `` VARCHAR() NOT NULL,
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
$newRecord = []; // Record must be passed as an associative array
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

/** Validate Record */
$fieldName = "";
$fieldValue = "";

$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->validateRecord("`$tableName`", $fieldName, $fieldValue);
// echo "Validating record in $tableName returns: $result" . PHP_EOL;

/** Retrieve All Table Records */
$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->retrieveAllRecords("`$tableName`");
// echo "Retrieving all records in $tableName: " . PHP_EOL;
// var_dump($result);

/** Retrieve Single Value from Table Records */
$fieldName = "";
$fieldValue = "";

$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->retrieveSingleValue("`$tableName`", $fieldName, $fieldValue);
// echo "Retrieving single value in $tableName: " . PHP_EOL;
// var_dump($result);

/** Retrieve Multiple FieldValues from Table Record */
$fieldName = "";
$compareFieldName = "";
$compareFieldValue = "";

$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->retrieveMultipleValues("`$tableName`", $fieldName, $compareFieldName, $compareFieldValue);
// echo "Retrieving multple values from $tableName: " . PHP_EOL;
// var_dump($result);

/** Retrieve Single Table Record */
$fieldName = "";
$fieldValue = "";

$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->retrieveSingleRecord("`$tableName`", $fieldName, $fieldValue);
// echo "Retrieving single record in $tableName: " . PHP_EOL;
// var_dump($result);

/** Update Table Record */
$record = []; // Record must be passed as an associative array
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

/** Delete Table Record */
$fieldName = "";
$fieldValue = "";

$tableName = "";
$databaseName = "";
// $conn = tableOpConnection($databaseName);
// $result = $conn->deleteRecord("`$tableName`", $fieldName, $fieldValue);
// echo "Deleting record in $tableName: ";
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
