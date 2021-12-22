<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registreren</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <p id="top">Gratis verzending naar Nederland en België vanaf een bestelwaarde van 20 euro.</p>
</head>


<!--Registratie formulier-->
<body>
<?php
    include "navigatie.php";
?>

<div class="wrapper">
    <div class="title">
        Registreren
    </div>
    <div class="form">
        <form action="" method="post">
        <div class="input-field">
            <label>Voornaam</label>
            <input type="text" class="input" name="voornaam" placeholder="Herman" required>
        </div>

        <div class="input-field">
            <label>Achternaam</label>
            <input type="text" class="input" name="achternaam" placeholder="de Boer" required>
        </div>

        <div class="input-field">
            <label>Wachtwoord</label>
            <input type="password" class="input" name="wachtwoord" placeholder="wachtwoord" required>
        </div>

        <div class="input-field">
            <label>Bevestig wachtwoord</label>
            <input type="password" class="input" name="wachtwoord2" placeholder="wachtwoord" required>
        </div>

        <div class="input-field">
            <label>Geslacht</label>
            <div class="custom-select">
                <select name="sex" required>
                    <option value="" disabled selected>geslacht</option>
                    <option value="male">Man</option>
                    <option value="female">Vrouw</option>
                    <option value="different">Anders</option>
                </select>
            </div>
        </div>
        <div class="input-field">
            <label>Email adres</label>
            <input type="email" class="input" name="email" placeholder="hermandeboer@hotmail.nl" required>
        </div>

        <div class="input-field">
            <label>Telefoonnummer</label>
            <input type="text" class="input" name="telefoonnummer" placeholder="0612345678" required>
        </div>
        <div class="input-field">
            <label>Straat en huisnummer</label>
            <input type="text" class="input" name="adres" placeholder="polderweg 4" required>
        </div>

        <div class="input-field">
            <label>Stad</label>
            <input type="text" class="input" name="woonplaats" placeholder="Almere" required>
        </div>

        <div class="input-field">
            <label>Postcode</label>
            <input type="text" class="input" name="postcode" placeholder="1234AB" required>
        </div>

        <div class="input-field">
            <button type="submit" name="registration" class="btn">Registreer</button>
        </div>
    </form>
    </div>
</div>

</body>

<footer>
    <p>Copyright 2020 Flevosap</p>
</footer>