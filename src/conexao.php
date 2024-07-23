<?php

$dataBasePath = __DIR__ . "/banco.sqlite";

$pdo = new \PDO("sqlite:" . $dataBasePath);

echo "Connected successfully" . PHP_EOL;

$pdo->exec("CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, bith_date TEXT);");
