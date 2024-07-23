<?php

namespace Src\Infrastructure;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        return new PDO("sqlite:" . __DIR__ . "/../../banco.sqlite");
    }
}