<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Service\PDOService;
use App\MovieRepositories\MovieRepository;
use App\MovieRepositories\ActorRepository;
use App\Models\Actor;

$PDO = new PDOService();

// dump(new PDOService());

$testMovie = new MovieRepository();
// dump($test->findAll());
// dump($test->findOne());
// dump($test->findAllMovie());
// dump($test->findById(1));
dump($testMovie->findByTitle('Conan'));

$testActor = new ActorRepository();

// dump($testActor->findAll());
// dump($testActor->findOne());
// dump($testActor->findAllActor());

// dump($testActor->findById(2));
