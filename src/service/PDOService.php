<?php

namespace App\Service;

use PDO;

class PDOService
{
    private PDO $PDO;

    private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=allocinee_like';
    private string $user = 'root';
    private string $password = '';

    public function __construct()
    {
        $this->PDO = new PDO($this->dsn, $this->user, $this->password);
    }

    /**
     * @return PDO
     */
    public function getPDO(): PDO
    {
        return $this->PDO;
    }

    /**
     * @return string
     */
    public function getDsn(): string
    {
        return $this->dsn;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
