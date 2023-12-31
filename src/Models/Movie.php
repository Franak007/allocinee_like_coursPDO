<?php

namespace App\Models;

use App\Models\Actor;
use DateTime;

class Movie
{
    private int $id;
    private string $title;
    private DateTime|string $releaseDate;

    private array $actors = [];


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id 
     * @return self
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title 
     * @return self
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    /**
     * @return DateTime
     */
    public function getReleaseDate(): DateTime|string
    {
        return $this->releaseDate;
    }

    /**
     * @param DateTime $releaseDate 
     * @return self
     */
    public function setReleaseDate(DateTime $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return string
     */

    public function addActor(Actor $actor): void
    {
        $this->actors[] = $actor;
    }

    public function removeActor(Actor $actor): void
    {
        if ($key = array_search($actor, $this->actors) !== false) {
            unset($this->actors[$key]);
        }
    }

    /**
     * @return array
     */
    public function getActors(): array
    {
        return $this->actors;
    }

    /**
     * @param array $actors 
     * @return self
     */
    public function setActors(array $actors): void
    {
        $this->actors = $actors;
    }
}
