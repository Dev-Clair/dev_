<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$databaseName = "employee";
$conn = tableOpConnection($databaseName);
var_dump($conn);
