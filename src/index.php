<?php

declare(strict_types=1);

// namespace db\DbResource;

use db\DbResource;

require __DIR__ . '/../vendor/autoload.php';

$databaseName = "";
$conn = DbResource::getTableOpConnection(databaseName: $databaseName);
print_r($conn);
