<?php
include_once __DIR__ . '/vendor/autoload.php';

echo "Hello World";

use App\Service\PDOService;
use App\MovieRepositories\MovieRepository;
use App\MovieRepositories\ActorRepository;
use App\Models\Actor;
use App\Models\Movie;

$PDO = new PDOService();

// dump(new PDOService());

$testMovie = new MovieRepository();
// dump($test->findAll());
// dump($test->findOne());
// dump($test->findAllMovie());
// dump($test->findById(1));
// dump($testMovie->findByTitle('Conan'));

$testActor = new ActorRepository();

// dump($testActor->findAll());
// dump($testActor->findOne());
// dump($testActor->findAllActor());
// dump($testActor->findById(2));

$actor = new Actor();
$actor->setFirstName('Blanc');
$actor->setLastName('Michel');

$actor2 = new Actor();
$actor2->setFirstName('Jugnot');
$actor2->setLastName('Gérard');

// dump($actor);

$film1 = $testMovie->findById(8);
// $film1 = new Movie();
$film1->addActor($actor);
$film1->addActor($actor2);

// dump($film1);
// dump($film1->getActors());

$film1->removeActor($actor);

// dump($film1);
