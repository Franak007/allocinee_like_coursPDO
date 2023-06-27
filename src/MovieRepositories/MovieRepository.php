<?php

namespace App\MovieRepositories;

use App\Service\PDOService;

class MovieRepository
{
	private PDOService $pdoService;

	public function __construct()
	{
		$this->pdoService = new PDOService;
	}

	/**
	 * @return PDOService
	 */
	public function getPdoService(): PDOService
	{
		return $this->pdoService;
	}

	/**
	 * @param PDOService $pdoService 
	 * @return self
	 */
	public function setPdoService(PDOService $pdoService): void
	{
		$this->pdoService = $pdoService;
	}
}
