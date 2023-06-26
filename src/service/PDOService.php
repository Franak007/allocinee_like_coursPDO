<?php

namespace App\service;

use PDO;

class PDOService

{
    protected PDO $pdo;

    private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=allocinee_like';
    private string $user = 'root';
    private string $pwd = '';
}
