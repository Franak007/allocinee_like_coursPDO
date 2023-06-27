<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\MovieRepositories\MovieRepository;
use App\Service\PDOService;
use App\Repositories\MovieRepositories;

$PDO = new PDOService();

// dump(new PDOService());

dump($PDO->findAllMovie());

dump($PDO->findOne());

dump($PDO->findAll());

dump(new MovieRepository());
