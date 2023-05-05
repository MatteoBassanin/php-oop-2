<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Games.php';




$cibo = new Products(100,"peppe");


echo $cibo->getInfo();


var_dump($cibo);
?>