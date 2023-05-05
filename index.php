<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Games.php';
require_once __DIR__ . '/Models/Species.php';




$cibo = new Products(100,"peppe");

$gatto = new Species ("cat");
$croccantini = new Food(2,"pippo");

$species = new Species("cat");


$croccantini->species = $species;

var_dump($croccantini);



?>