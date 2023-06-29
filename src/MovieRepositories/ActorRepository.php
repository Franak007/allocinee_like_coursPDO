<?php

namespace App\MovieRepositories;

use App\Service\PDOService;
use App\Models\Actor;
use PDO;

class ActorRepository
{
    private PDOService $pdoService;
    private string $queryAll = 'SELECT * FROM actor';

    public function __construct()
    {
        $this->pdoService = new PDOService;
    }

    // Les deux fonctions suivantes sont seulement créées pour voir qu'elles existent mais n'ont pas d'intérê.
    // /**
    //  * @findAllMovie requête la BDD et retourne tous les films sous forme de tableau
    //  */
    // public function findAllActor(): array
    // {
    //     return $this->pdoService->getPDO()->query($this->queryAll)->fetchAll();
    // }

    // /**
    //  * findOne Fonction qui requête la BDD pour récupérer tous les films, puis affiche sous forme d'objet le premier film récupéré. 
    //  */

    // public function findOne(): Actor
    // {
    //     return $this->pdoService->getPDO()->query($this->queryAll)->fetchObject(Actor::class);
    // }

    // /**
    //  * findAll Fonction qui requête la BDD pour récupérer tous les films, puis les affiche sous forme de tableau d'objets.
    //  */

    public function findAll(): array
    {
        return $this->pdoService->getPDO()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Actor::class);
    }

    // public function findById(int $id): Actor|bool
    // {
    //     $query = $this->pdoService->getPDO()->prepare('SELECT * FROM actor WHERE id = ?');
    //     $query->bindValue(1, $id);
    //     $query->execute();
    //     return $query->fetchObject(Actor::class);
    // }

    public function findById(int $id): bool|Object
    {
        $query = $this->pdoService->getPDO()->prepare('SELECT id, first_name as firstName, last_name AS lastName FROM actor WHERE id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetchObject();
    }

    public function convertDataActorToObject(Object $dataBaseObject): Actor
    {
        $actor = new Actor();
        $actor->setId($dataBaseObject->id);
        $actor->setFirstName($dataBaseObject->firstName);
        $actor->setLastName($dataBaseObject->lastName);

        return $actor;
    }

    public function insertActor(Actor $actor): Actor
    {
        $query = $this->pdoService->getPDO()->prepare('INSERT INTO actor VALUE (null,:firstName,:lastName)');
        $firstName = $actor->getFirstName();
        $lastName = $actor->getLastName();

        $query->bindParam(':firstName', $firstName);
        $query->bindParam(':lastName', $lastName);
        $query->execute();
        return $actor;
    }

    public function updateActor(Actor $actor): Actor
    {
        $query = $this->pdoService->getPDO()->prepare('UPDATE actor set first_name = :first_name, last_name = :last_name WHERE id = :idActor');

        $id = $actor->getId();
        $firstName = $actor->getFirstName();
        $lastName = $actor->getLastName();

        $query->bindParam(':idActor', $id);
        $query->bindParam(':first_name', $firstName);
        $query->bindParam(':last_name', $lastName);
        $query->execute();
        return $actor;
    }
}
