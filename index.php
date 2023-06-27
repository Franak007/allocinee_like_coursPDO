<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Service\PDOService;
use App\MovieRepositories\MovieRepository;
use App\MovieRepositories\ActorRepository;

$PDO = new PDOService();

// dump(new PDOService());

$test = new MovieRepository();
// dump($test->findAll());
// dump($test->findOne());
// dump($test->findAllMovie());

dump($test->findById(1));

$testActor = new ActorRepository();

// dump($testActor->findAll());
// dump($testActor->findOne());
// dump($testActor->findAllActor());

dump($testActor->findById(2));
