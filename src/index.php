<?php

require_once __DIR__ . '/vendor/autoload.php';

$databaseName = "employee";
$conn = tableOpConnection($databaseName);
var_dump($conn);
