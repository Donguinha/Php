<?php

namespace Src\SQL;

use PDO;

$dataBasePath = __DIR__ . "/banco.sqlite";

$pdo = new PDO("sqlite:" . $dataBasePath);

echo "Connected successfully" . PHP_EOL;

$pdo->exec("CREATE TABLE student (id INTEGER PRIMARY KEY, name TEXT, created_at TEXT);");
