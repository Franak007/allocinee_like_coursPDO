<?php
include_once __DIR__ . '/vendor/autoload.php';

echo "Hello World";

use App\Service\PDOService;
use App\MovieRepositories\MovieRepository;
use App\MovieRepositories\ActorRepository;

$PDO = new PDOService();

// dump(new PDOService());

$repoMovie = new MovieRepository();
// dump($repoMovie->findAll());
// dump($repoMovie->findOne());
// dump($repoMovie->findAllMovie());
// dump($repoMovie->findById(1));
// dump($repoMovie->findByTitle('Conan'));

$repoActor = new ActorRepository();

// // dump($repoActor->findAll());
// // dump($repoActor->findOne());
// // dump($repoActor->findAllActor());
// // dump($repoActor->findById(2));

// $actor = new Actor();
// $actor->setFirstName('Blanc');
// $actor->setLastName('Michel');

// $actor2 = new Actor();
// $actor2->setFirstName('Jugnot');
// $actor2->setLastName('Gérard');

// // dump($actor);

// $film1 = $repoMovie->findById(8);
// // $film1 = new Movie();
// $film1->addActor($actor);
// $film1->addActor($actor2);

// // dump($film1);
// // dump($film1->getActors());

// $film1->removeActor($actor);

// // dump($film1);

// $avatar = new Movie();
// $release = new DateTime();
// $release->setDate(2022, 12, 06);


// $avatar->setTitle("Avatar : La Voie De L'Eau");
// $avatar->setReleaseDate($release);
// dump($avatar);
// dump(gettype($avatar->getReleaseDate()));

// dump($avatar);

// // $repoMovie->addMovie($avatar);
// // dump($repoMovie->findAll());

// $blanc = new Actor();
// $blanc->setFirstName('Michel');
// $blanc->setLastName('Blanc');

// $costner = new Actor();
// $costner->setFirstName('Kevin');
// $costner->setLastName('Costner');

// // $repoActor->insertActor($blanc);
// // $repoActor->insertActor($costner);

// // dump($repoActor->findAll());

// $avatar->addActor($blanc);
// $avatar->addActor($costner);

// // dump($avatar->getActors());
// dump($PDO);

// $movie = $repoMovie->findById(17);
// $actor4 = $repoActor->findById(2);
// $actor5 = $repoActor->findById(19);

// // $movie->addActor($actor4);
// // $movie->addActor($actor5);

// dump($movie);

// // $repoMovie->addInMovieActor($movie);

// $movieToDelete = $repoMovie->findById(17);
// $repoMovie->deleteMovie($movieToDelete);

$movieToUpdate = $repoMovie->findById(21);
dump($movieToUpdate);
$convertedMovie = $repoMovie->convertDataMovieToObject($movieToUpdate);
dump($convertedMovie);
$newTitle = 'AVATAR 2';
$convertedMovie->setTitle($newTitle);
dump($convertedMovie);
$repoMovie->updateMovie($convertedMovie);

$actorToUpdate = $repoActor->findById(5);
dump($actorToUpdate);
$convertedActor = ($repoActor->convertDataActorToObject($actorToUpdate));
dump($convertedActor);
$newActorName = 'Toto';
$convertedActor->setLastName($newActorName);
dump($convertedActor);
$repoActor->updateActor($convertedActor);
