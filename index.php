<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Service\PDOService;
use App\Models\Movie;



$PDO = new PDOService();
// dump($PDO->findAllMovie());

dump($PDO->findAll());
