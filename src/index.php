<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/db/dbResource.php';

$databaseName = "";
$conn = tableOpConnection($databaseName);
