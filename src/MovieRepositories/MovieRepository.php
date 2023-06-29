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

    // Les deux fonctions suivantes sont seulement créées pour voir qu'elles existent mais n'ont pas d'intérê.
    // /**
    //  * @findAllMovie requête la BDD et retourne tous les films sous forme de tableau
    //  */
    // public function findAllMovie(): array
    // {
    //     return $this->pdoService->getPDO()->query($this->queryAll)->fetchAll();
    // }

    // /**
    //  * findOne Fonction qui requête la BDD pour récupérer tous les films, puis affiche sous forme d'objet le premier film récupéré. 
    //  */

    // public function findOne(): Movie
    // {
    //     return $this->pdoService->getPDO()->query($this->queryAll)->fetchObject(Movie::class);
    // }

    /**
     * findAll Fonction qui requête la BDD pour récupérer tous les films, puis les affiche sous forme de tableau d'objets.
     */

    public function findAll(): array
    {
        return $this->pdoService->getPDO()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }

    // public function findById(int $id): Movie|bool
    // {
    //     $query = $this->pdoService->getPDO()->prepare('SELECT * FROM movie WHERE id = ?');
    //     $query->bindValue(1, $id);
    //     $query->execute();
    //     return $query->fetchObject(Movie::class);
    // }

    public function findById(int $id): bool|Object
    {
        $query = $this->pdoService->getPDO()->prepare('SELECT id, title, release_date AS releaseDate FROM movie WHERE id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetchObject();
    }

    public function convertDataMovieToObject(Object $dataBaseObject): Movie
    {
        $movie = new Movie();
        $movie->setId($dataBaseObject->id);
        $movie->setTitle($dataBaseObject->title);
        $movie->setReleaseDate(new \DateTime($dataBaseObject->releaseDate));

        return $movie;
    }
    public function findByTitle(string $title): array
    {
        $query = $this->pdoService->getPDO()->prepare("SELECT * FROM movie WHERE title LIKE :title");
        $like = '%' . $title . '%';
        $query->bindParam(':title', $like);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }

    public function addMovie(Movie $movie): Movie
    {
        $query = $this->pdoService->getPDO()->prepare('INSERT INTO movie VALUE (null,:title,:release_date)');
        $title = $movie->getTitle();
        $date = $movie->getReleaseDate();

        $release_date = $date->format('Y-m-d');

        $query->bindParam(':title', $title);
        $query->bindParam(':release_date', $release_date);
        $query->execute();
        return $movie;
    }

    // EQUIVAUT A : 

    // public function addMovie(Movie $movie): Movie
    // {
    //     $query = $this->pdoService->getPDO()->prepare('INSERT INTO movie VALUE (null, ?, ?)');

    //     $title = $movie->getTitle();
    //     $date = $movie->getReleaseDate();

    //     $releaseDate = $date->format('Y-m-d');

    //     $query->bindValue(1, $title);
    //     $query->bindValue(2, $releaseDate);
    //     $query->execute();
    //     return $movie;
    // }

    public function addInMovieActor(Movie $movie): Movie
    {
        $actors = $movie->getActors();

        foreach ($actors as $actor) {
            $query = $this->pdoService->getPDO()->prepare('INSERT INTO movie_actor VALUE (null,:idActor,:idMovie)');

            $idMovie = $movie->getId();
            $idActor = $actor->getId();

            $query->bindParam(':idMovie', $idMovie);
            $query->bindParam(':idActor', $idActor);

            $query->execute();
        }
        return $movie;
    }

    public function deleteMovie(Movie $movie): void
    {
        $query = $this->pdoService->getPDO()->prepare('DELETE FROM movie WHERE id = :idMovie');
        $idMovie = $movie->getId();
        $query->bindParam(':idMovie', $idMovie);
        $query->execute();
    }

    public function updateMovie(Movie $movie): Movie
    {
        $query = $this->pdoService->getPDO()->prepare('UPDATE movie set title = :title, release_date = :release_date WHERE id = :idMovie');

        $id = $movie->getId();
        $title = $movie->getTitle();
        $date = $movie->getReleaseDate();

        $releaseDate = $date->format('Y-m-d');

        $query->bindParam(':idMovie', $id);
        $query->bindParam(':title', $title);
        $query->bindParam(':release_date', $releaseDate);

        $query->execute();

        return $movie;
    }
}
