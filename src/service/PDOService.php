<?php

namespace App\Service;

use PDO;
use App\Models\Movie;

class PDOService
{
    private PDO $pdo;

    private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=allocinee_like';
    private string $user = 'root';
    private string $password = '';

    public function __construct()
    {
        $this->pdo = new pdo($this->dsn, $this->user, $this->password);
    }

    /**
     * @return pdo
     */
    public function getPDO(): pdo
    {
        return $this->pdo;
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

    /**
     * @findAllMovie requête la BDD et retourne tous les films sous forme de tableau
     */
    public function findAllMovie(): array
    {
        return $this->pdo->query('SELECT * FROM Movie')->fetchAll();
    }


    /**
     * findOne Fonction qui requête la BDD pour récupérer tous les films, puis affiche sous forme d'objet le premier film récupéré. 
     */

    public function findOne(): Movie
    {
        $query = $this->pdo->query('SELECT * FROM Movie');
        return $query->fetchObject(Movie::class);
    }

    /**
     * findAll Fonction qui requête la BDD pour récupérer tous les films, puis les affiche sous forme de tableau d'objets.
     */

    public function findAll(): array
    {
        $query = $this->pdo->query('SELECT * FROM Movie');
        return $query->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }
}
