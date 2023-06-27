<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Service\PDOService;

$PDO = new PDOService();

// dump($PDO->findAllMovie());

dump($PDO->findAll());
