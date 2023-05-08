<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Games.php';
require_once __DIR__ . '/Models/Species.php';
require_once __DIR__ . '/Traits/Picturable.php';

// $cibo = new Products(100,"peppe");

$cat = new Species("cat");
// $croccantini = new Food(2,"pippo",$species,1102);

$dog = new Species("dog");
// $umido = new Food(5,"pluto",$species,234);

// $species = [new Species ("cat"),new Species("dog")];
// $cuccia = new Kennel(523, "papaerino", $species, "green", "wood");



$prodotti = [new Food(2, "croccantini", "https://www.dreamstime.com/stock-photo-birman-cat-cute-brown-image97036622", $cat, 1102)];

// var_dump($prodotti)
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
            foreach ($prodotti as $prodotto) { ?>
                <div class="card" style="width: 18rem;">
                    <h3><?php echo $prodotto->brand;  ?></h3>
                    <div><?php echo $prodotto->price;  ?></div>
                    <div><?php echo $prodotto->species->kind;  ?></div>
                    <img src="<?php echo $prodotto->picture ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                    </div>
                </div>
            <?php } ?>
        </div>





    </main>
</body>

</html>