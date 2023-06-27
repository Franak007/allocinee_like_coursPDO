<?php

namespace App\Models;

use App\Models\Actor;
use DateTime;

class Movie
{
    private string $title;
    private DateTime $releaseDate;

    private array $actors = [];

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
    public function getReleaseDate(): DateTime
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
        if (array_search($actor, $this->actors) === true) {
            unset($this->actors, $actor);
        }
    }

    /**
     * @return array
     */
    public function getActors(): array
    {
        return $this->actors;
    }
}
