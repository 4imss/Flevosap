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

    <!--    index page big image-->
    <img id="banner" src="Images/banner.jpg" alt="Banner image">
    <br>
    <br>

    <!--    intro text and images-->
    <h2 class="center">Altijd en overal genieten van Flevosap</h2>
    <br>

    <div class="container">
        <div class="row">
            <div class="col">
                Appelsap is een sap waar ieder kind mee is opgegroeid
                en waar iedere volwassene stiekem nog altijd erg van geniet.
                Zeker wanneer het vers  is, want dan is appelsap extra lekker.
                Nu kun je verse appelsap gemakkelijk in onze nieuwe webshop kopen!
                Als je appelsap gemaakt van verse appels drinkt krijgt je lichaam
                veel van de gezonde stoffen uit appels binnen.
                <br>
            </div>
            <div class="col"><img id="artic" src="Images/artic.jpeg" alt="Article image"></div>
            <div class="w-100"></div>
            <div class="col">
                Gezond drinken terwijl je lekker van appelsap kunt genieten als een
                heerlijk drankje. Hierbij krijg je veel antioxidanten binnen.
                Antioxidanten zijn bijzonder goed voor het lichaam, omdat ze de vrije
                radicalen bestrijden. Vrije radicalen ontstaan door veroudering, stress,
                roken, alcohol, slechte voeding en UV-straling. Door het drinken van
                appelsap kun jij er dus voor zorgen dat het verouderingsproces wordt
                geremd. Dit is goed door je geheugen en voor je huid!
            </div>
            <div class="col"><img id="artic2" src="Images/a-image.png" alt="Article image2"></div>
        </div>
    </div>

    <br>

    <footer>
        <p>Copyright 2020 Flevosap</p>
    </footer>

    </body>

</html>