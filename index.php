<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Games.php';
require_once __DIR__ . '/Models/Species.php';
require_once __DIR__ . '/Traits/Picturable.php';



$cat = new Species("cat", "fa-solid fa-cat");


$dog = new Species("dog", "fa-solid fa-dog");

$prodotti = [new Food(2, "croccantini", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu1FWeo7EbupPPZFoqvMe9O4KuX6m2OMeFQKSZRTriyOt0gyXtQ_94hyQ66d88gHEsm0Q&usqp=CAU", $cat, 1102)];

try {
    echo $cat->kind = 7;
} catch (Exception $e) {
    echo "hai inserito un valore sbagliato";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <i class="<?php echo $prodotto->species->icon; ?>"></i>
                    <img src="<?php echo $prodotto->picture; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    </div>
                </div>
            <?php } ?>
            <div class="button"><a href="fodhodsuhfdsuogfdso">vai</a></div>
        </div>





    </main>
</body>

</html>