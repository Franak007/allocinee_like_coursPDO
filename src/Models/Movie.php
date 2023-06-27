<?php

namespace App\Models;

use DateTime;

class Movie
{
    private string $title;
    private DateTime $releaseDate;

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
}
