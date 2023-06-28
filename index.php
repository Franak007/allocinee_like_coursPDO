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

$avatar = new Movie();
$release = new DateTime();
$release->setDate(2022, 12, 06);

$avatar->setTitle("Avatar : La Voie De L'Eau");
$avatar->setReleaseDate($release);



// dump($avatar);

// $testMovie->addMovie($avatar);
// dump($testMovie->findAll());

$blanc = new Actor();
$blanc->setFirstName('Michel');
$blanc->setLastName('Blanc');

$costner = new Actor();
$costner->setFirstName('Kevin');
$costner->setLastName('Costner');

// $testActor->insertActor($blanc);
// $testActor->insertActor($costner);

// dump($testActor->findAll());

$avatar->addActor($blanc);
$avatar->addActor($costner);

// dump($avatar->getActors());
dump($PDO);

$movie = $testMovie->findById(17);
$actor4 = $testActor->findById(2);
$actor5 = $testActor->findById(19);

$movie->addActor($actor4);
$movie->addActor($actor5);

dump($movie);

// $testMovie->addInMovieActor($movie);

$movieRepo = new MovieRepository();
$actorRepo = new ActorRepository();

$act1 = $actorRepo->findById(5);
$act2 = $actorRepo->findById(9);

$movie = $movieRepo->findById(5);
$movie->addActor($act1);
$movie->addActor($act2);
dump($movie);

// $movieRepo->addInMovieActor($movie);
