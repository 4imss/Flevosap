<?php


class LoginController
{
    public function index()
    {
        require 'views/home.view.php';
    }

    public function login()
    {
        if (isset($_POST['bestelknop1'])) {
            $login = new UserModel();
            $login->login($_POST['email'], $_POST['wachtwoord']);
            // check if user exists and if 'wachtwoord' is the same
            if ($login->existsKlant() && $_POST['wachtwoord'] == $login->getWachtwoord()) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['userId'] = $login->getKlantId();
                header('location: /winkelwagen');
            } else {
                header('location: /registratie');
            }
        }
    }
}