<?php

namespace Src\Infrastructure;

use Src\Domain\Student;

require __DIR__ . '/../../vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student("ConnectionCreator");

//podemos passar os parâmetros da seguinte forma
//primeira forma
//$sqlInsert = "INSERT INTO student (name, created_at) VALUES (?, ?);";
//$statement = $pdo->prepare($sqlInsert);
//$statement->bindValue(1, $student->name);
//$statement->bindValue(2, $student->createdAt->format('Y-m-d H:i:s'));

//segunda forma
$sqlInsert = "INSERT INTO student (name, created_at) VALUES (:name, :created_at);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(":name", $student->name);
$statement->bindValue(":created_at", $student->createdAt->format('Y-m-d H:i:s'));

if ($statement->execute()) {
    echo "Added successfully";
}