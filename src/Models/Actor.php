<?php

namespace App\Models;

class Actor
{
    private string $firstName;
    private string $lastName;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName 
     * @return self
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName 
     * @return self
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
}
