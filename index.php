<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Service\PDOService;
use App\Models\MovieService;


$PDO = new PDOService();
dump($PDO->findAllMovie());
