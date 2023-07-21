<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/db/dbResource.php';

$databaseName = "employee";
$conn = tableOpConnection($databaseName);
var_dump($conn);
