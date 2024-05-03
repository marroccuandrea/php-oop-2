<?php

require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/data/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP OOP 2</title>
</head>

<body>
    <div class="container my-5 text-center">
        <h1>Pets Shop</h1>

    </div>
    <div class="container my-5">
        <h2>Food shop: </h2>
        <div class="container my-4">
            <div class="row row-cols-3">
                <?php foreach ($foods as $food) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $food->getImage() ?>" class="card-img-top">
                            <div class="card-body">
                                <p class="card-title"><?php echo $food->getName() ?></p>
                                <p class="card-title"><?php echo $food->getPrice() ?></p>
                                <p class="card-title"><?php echo $food->getType() ?></p>
                                <p class="card-title"><?php echo $food->getTaste() ?></p>
                                <p class="card-title"><?php echo $food->getWeight() ?></p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h2>Toys shop: </h2>
        <div class="container my-4">
            <div class="row row-cols-3">
                <?php foreach ($toys as $toy) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $toy->getImage() ?>" class="card-img-top">
                            <div class="card-body">
                                <p class="card-title"><?php echo $toy->getName() ?></p>
                                <p class="card-title"><?php echo $toy->getPrice() ?></p>
                                <p class="card-title"><?php echo $toy->getType() ?></p>
                                <p class="card-title"><?php echo $toy->getMaterial() ?></p>
                                <p class="card-title"><?php echo $toy->getSize() ?></p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>