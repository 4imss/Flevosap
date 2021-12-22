<?php

/**
 * Class ShoppingCartController
 */
class ShoppingCartController
{
    /**
     *  Shows the shopping card.
     */
    public function renderAsHTML()
    {
        // Initialize shopping card as array in the session super global if it doesn't exist.
        if(isset($_SESSION['shoppingCart']) === false)
        {
            $_SESSION['shoppingCart'] = [];
        }

        // Create new productModel
        $productModel = new ProductModel();

        // Checks if the productId and amount are posted.
        if(isset($_POST['productId']) && isset($_POST['amount']) && is_numeric($_POST['amount']))
        {
            // Gets the right product by the posted productId.
            $productModel->find($_POST['productId']);

            // If the product is found in de database.
            if($productModel->exists())
            {
                $amount = (int)$_POST['amount'];

                // Check if the given amount is between 0 and 100. If the value is bigger ignore the request. If the amount is 0 go to the else condition.
                if($amount > 0 && $amount < 100) {

                    // Check if the product is already in the shopping card.
                    if (array_key_exists($_POST['productId'], $_SESSION['shoppingCart'])) {

                        // Add the amount of products given in de products page.
                        $_SESSION['shoppingCart'][$_POST['productId']]['amount'] += $amount;

                        // If the amount of a single product exceeds 99 products put it at the max of 99 products.
                        if($_SESSION['shoppingCart'][$_POST['productId']]['amount'] > 99)
                        {
                            $_SESSION['shoppingCart'][$_POST['productId']]['amount'] = 99;
                        }

                        // Update the price and the total price (the (math)product of the amount of products and the product price).
                        $_SESSION['shoppingCart'][$_POST['productId']]['price'] = $productModel->getPrice();
                        $_SESSION['shoppingCart'][$_POST['productId']]['totalPrice'] = $productModel->getPrice() * $_SESSION['shoppingCart'][$_POST['productId']]['amount'];
                    } else {
                        // Initialize new array for the product and sets it's values.
                        $newProduct = [];
                        $newProduct['id'] = $productModel->getId();
                        $newProduct['name'] = $productModel->getName();
                        $newProduct['amount'] = $amount;

                        // Sets the price and the total price (the (math)product of the amount of products and the product price).
                        $newProduct['price'] = $productModel->getPrice();
                        $newProduct['totalPrice'] = $productModel->getPrice() * $amount;

                        // Add the product to the shopping card.
                        $_SESSION['shoppingCart'][(string)$_POST['productId']] = $newProduct;
                    }
                }
                // Checks if the product exists in the shopping card and checks of the amount is 0.
                else if($amount == 0 && array_key_exists($_POST['productId'], $_SESSION['shoppingCart']))
                {
                    // Remove the product from the shopping card.
                    unset($_SESSION['shoppingCart'][$_POST['productId']]);
                }
            }
        }

        // Sort the products in the shopping card by name.
        uasort($_SESSION['shoppingCart'], function ($element1, $element2) { return strcmp($element1['name'], $element2['name']);});

        // Put the shopping card products in the local $products variable to render on the view.
        $products = $_SESSION['shoppingCart'];

        // Render the view.
        require "views/shoppingCart.view.php";
    }

    public function renderAsPDF()
    {
        if (isset($_POST['klant'])) {
            $login = new UserModel();
            $login->login($_POST['email'], $_POST['wachtwoord']);
            // check if user exists and if 'wachtwoord' is the same
            if ($login->existsKlant() && $_POST['wachtwoord'] == $login->getWachtwoord()) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['userId'] = $login->getKlantId();
                $voornaam = $login->getVoornaam();
                $achternaam = $login->getAchternaam();
                $sex = $login->getSex();
                $email = $login->getEmail();
                $telefoonnummer = $login->getTelefoonnummer();
                $adres = $login->getAdres();
                $woonplaats = $login->getWoonplaats();
                $postcode = $login->getPostcode();

                if(isset($_SESSION['shoppingCart']) === false)
                {
                    $_SESSION['shoppingCart'] = [];
                }

                // Put the shopping card products in the local $products variable to render on the view.
                $products = $_SESSION['shoppingCart'];

                require 'views/pdf.view.php';
            } else {
                header('location: /winkelwagen');
            }
        } elseif (isset($_POST['gast'])) {

            // Define inputs from guest
            $voornaam = $_POST['voornaam'];
            $achternaam = $_POST['achternaam'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $adres = $_POST['adres'];
            $woonplaats = $_POST['woonplaats'];
            $postcode = $_POST['postcode'];

            if(isset($_SESSION['shoppingCart']) === false)
            {
                $_SESSION['shoppingCart'] = [];
            }

            // Put the shopping card products in the local $products variable to render on the view.
            $products = $_SESSION['shoppingCart'];

            require 'views/pdf.view.php';
        }
    }
}