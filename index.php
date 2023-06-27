<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\MovieRepositories\MovieRepository;
use App\Service\PDOService;
use App\Repositories\MovieRepositories;

$PDO = new PDOService();

$movieRepository = new MovieRepository;
dump($movieRepository->findAll());
