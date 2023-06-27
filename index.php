<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Service\PDOService;
use App\MovieRepositories\MovieRepository;

$PDO = new PDOService();

// dump(new PDOService());

$test = new MovieRepository();
// dump($test->findAll());
// dump($test->findOne());
// dump($test->findAllMovie());

dump($test->findById(16));
