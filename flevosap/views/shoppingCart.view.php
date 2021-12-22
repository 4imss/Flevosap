<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welkom bij Flevosap</title>
        <link rel="stylesheet" href="style.css">
        <!--        stylesheets bootstrap & googlefonts-->
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

    <h2 class="head2">Winkelwagen</h2>
    <?php
    if(array_sum(array_map(function ($item){return $item['amount'];}, $products)) > 0)
    {
    ?>

    <div class="small-container">

        <table class="table table-bordered">
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Aantal</th>
                <th scope="col">Prijs</th>
                <th scope="col">Totaal</th>
                <th scope="col"></th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <th scope="row"><?= $product['name'] ?></th>
                <td><input type="number" value="<?= $product['amount'] ?>" readonly></td>
                <td>&euro;<?= $product['price'] ?></td>
                <td>&euro;<?= $product['totalPrice'] ?></td>
                <td>
                    <form id="form_<?= $product['id'] ?>" method="post">
                        <input type="hidden" name="productId" value="<?= $product['id'] ?>"/>
                        <input type="hidden" name="amount" value="0"/>
                        <a href="#" onclick="javascript:$('#form_<?= $product['id'] ?>').submit()">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></a>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td><b>Total</b></td>
                <td><input type="number" value="<?= array_sum(array_map(function ($item){return $item['amount'];}, $products)) ?>" readonly></td>
                <td></td>
                <td>&euro;<?= array_sum(array_map(function ($item){return $item['totalPrice'];}, $products)) ?></td>
                <td></td>
            </tr>
        </table>

<!--        <--- bestel knop --->
        <form action="/bestellen" method="POST">
            <button class="button" name="bestelknop" type="submit">Bestellen</button>
        </form>
        <?php
            } else {
        ?>
            <h2 class="cart-empty-text">Je winkelwagen is leeg</h2>
        <?php
            }
        ?>
    </div>

    <br>

    <footer class="foot">
        <p>Copyright 2020 Flevosap</p>
    </footer>

    </body>

</html>