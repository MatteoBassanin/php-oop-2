<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Games.php';
require_once __DIR__ . '/Models/Species.php';

// $cibo = new Products(100,"peppe");

$species = new Species ("cat");
// $croccantini = new Food(2,"pippo",$species,1102);

$species = new Species("dog");
// $umido = new Food(5,"pluto",$species,234);

$species = new Species("fish");
// $cuccia = new Kennel(523,"papaerino",$species,"green","wood");


$prodotti=[new Food(2,"croccantini",$species,1102),new Food(5,"umido",$species,234),new Kennel(523,"cuccia",$species,"green","wood")];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <h1>Amazing Shop</h1>
    </header>

    <main>
        <div class="container">
            <?php 
            foreach($prodotti as $prodotto) {?>
            <div class="card" style="width: 18rem;">
                <h3><?php $prodotto->brand ?></h3>
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <?php } ?>
        </div>





    </main>
</body>
</html>