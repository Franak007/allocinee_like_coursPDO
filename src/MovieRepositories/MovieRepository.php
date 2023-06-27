<?php

namespace App\MovieRepositories;

use App\Service\PDOService;
use App\Models\Movie;
use PDO;

class MovieRepository
{
    private PDOService $pdoService;
    private string $queryAll = 'SELECT * FROM Movie';

    public function __construct()
    {
        $this->pdoService = new PDOService;
    }

    /**
     * @findAllMovie requête la BDD et retourne tous les films sous forme de tableau
     */
    public function findAllMovie(): array
    {
        return $this->pdoService->getPDO()->query($this->queryAll)->fetchAll();
    }

    /**
     * findOne Fonction qui requête la BDD pour récupérer tous les films, puis affiche sous forme d'objet le premier film récupéré. 
     */

    public function findOne(): Movie
    {
        return $this->pdoService->getPDO()->query($this->queryAll)->fetchObject(Movie::class);
    }

    /**
     * findAll Fonction qui requête la BDD pour récupérer tous les films, puis les affiche sous forme de tableau d'objets.
     */

    public function findAll(): array
    {
        return $this->pdoService->getPDO()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }

    public function findById(int $id): Movie|bool
    {
        $query = $this->pdoService->getPDO()->prepare('SELECT * FROM movie WHERE id = ?');
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchObject(Movie::class);
    }
}
