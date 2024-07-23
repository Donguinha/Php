<?php

namespace Src\Infrastructure;

use PDO;

$pdo = ConnectionCreator::createConnection();

$query = "DELETE FROM student WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->bindValue(":id", 6, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo "Deleted successfully";
}
