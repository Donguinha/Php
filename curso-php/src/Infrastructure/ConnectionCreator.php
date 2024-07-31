<?php

namespace Src\Infrastructure;

use PDO;
use PDOException;

class ConnectionCreator
{
    // public static function createConnection(): PDO
    // {
    //     return new PDO("sqlite:" . __DIR__ . "/../../banco.sqlite");
    // }

    public static function createConnection(): PDO
    {
        $host = '127.0.0.1';  // Use 'mysql_container' se estiver acessando a partir de outro contêiner Docker
        $dbName = 'my_database';
        $username = 'root';
        $password = 'root_password';  // Certifique-se de que esta senha é a mesma definida no docker-compose.yml

        try {
            $dsn = "mysql:host=$host;dbname=$dbName;charset=utf8";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            return new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            throw $e;
        }
    }
}
