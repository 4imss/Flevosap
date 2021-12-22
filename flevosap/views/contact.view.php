<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <p id="top">Gratis verzending naar Nederland en België vanaf een bestelwaarde van 20 euro.</p>
</head>

<!--    nav bar link php-->
<?php
include "navigatie.php";
?>

<!--Contact info met maps kaart-->
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 content-left-map">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Flevosap%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="50%" marginwidth="50%"></iframe>

        </div>
        <div class="col-md-6 content-right-contact">
            <ul class="contactinfo">
                <h3>Contact Informatie</h3>
                <p>
                    Flevosap bv <br>
                    Prof. Zuurlaan 22 <br>
                    8256 PE Biddinghuizen, Nederland
                    <br>
                    <br>
                    info@flevosap.nl
                    <br>
                    <br>
                    +31 (0)321 – 33 25 25
                    <br>
                    <br>
                    KvK 58224483 <br>
                    BTW NL8529.322.73.B.01
                </p>
                <a href="https://www.facebook.com/Flevosap/"><img width="40px" height="50px" src="../images/facebook.png" alt="Facebook logo image"></a>
            </ul>
        </div>
    </div>
</div>
</body>

<footer>
    <p>Copyright 2020 Flevosap</p>
</footer>



</html>