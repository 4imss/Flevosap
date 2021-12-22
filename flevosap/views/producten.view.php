<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Producten van Flevosap</title>
        <link rel="stylesheet" href="../style.css">
<!--         stylesheets bootstrap & googlefonts-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
<!--    top announcement banner-->
    <p id="top">Gratis verzending naar Nederland en België vanaf een bestelwaarde van 20 euro.</p>

<!--    nav bar link php-->
    <?php
    include "navigatie.php";
        ?>

<!--   4x producten img and info -->
    <h1 class="head1">Onze sappen</h1>
    <hr>

    <?php foreach ($products as $product) : ?>
    <div class="products">
        <img src="/getProductImage?productId=<?= $product['id'] ?>" alt="Aimage">
        <div class="product-info">
            <h2 class="head2"><?= $product['name'] ?></h2>
            <p><?= $product['description'] ?></p>
            <p class="prijs">€<?= $product['price'] ?></p>
            <p><form action="winkelwagen" method="post"><button class="button">Voeg toe</button> <input type="number" min="1" max="100" name="amount" value="1"/> <input type="hidden" name="productId" value="<?= $product['id'] ?>" /></form></p>
        </div>
    </div>
    <?php endforeach; ?>


    <footer>
        <p>Copyright 2020 Flevosap</p>
    </footer>

    </body>

</html>
