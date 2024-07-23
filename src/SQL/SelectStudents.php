<?php

namespace Src\SQL;

require_once __DIR__ . '/../../vendor/autoload.php';

$dataBasePath = __DIR__ . "/banco.sqlite";
$pdo = new \PDO("sqlite:" . $dataBasePath);

$statement = $pdo->query("SELECT * FROM student;");

var_dump($statement->fetchAll());
