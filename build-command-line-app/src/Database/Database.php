<?php

namespace App\Database;

use PDO;

class DB{

    public static $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function all($table)
    {
       return $this->connection->query("SELECT * FROM {$table}")->fetchAll();
    }

    public function query($sql, $params)
    {
        $this->connection->prepare($sql)->execute($params);
    }
}