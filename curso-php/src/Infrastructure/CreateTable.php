<?php

namespace Src\Infrastructure;

require_once __DIR__ . "/../../vendor/autoload.php";

use Src\Infrastructure\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

$result = $pdo->exec("CREATE TABLE IF NOT EXISTS student (id INTEGER PRIMARY KEY, name TEXT, created_at TEXT);");


echo $result;
