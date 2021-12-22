<?php


class RegistratieController
{
    public function index()
    {
        require "views/Registratie.view.php";
    }

    public function aanmelden()
    {
        if (isset($_POST['registration'])) {
            // check if passwords are the same
            if ($_POST['wachtwoord'] == $_POST['wachtwoord2']) {
                $user = new UserModel();
                $user->registration($_POST['voornaam'], $_POST['achternaam'], $_POST['wachtwoord'], $_POST['sex'], $_POST['email'], $_POST ['telefoonnummer'], $_POST['adres'], $_POST['woonplaats'], $_POST['postcode']);
                header('location: /');
            } else {
                // send back to register page
                header('location: /registratie');
            }
        }
    }
}