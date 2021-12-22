<?php
session_start();
require "Models/BaseModel.php";
require "Models/ProductModel.php";
require "Models/UserModel.php";
require "controllers/HomeController.php";
require "controllers/LoginController.php";
require "controllers/IndeflesController.php";
require "controllers/RegistratieController.php";
require "controllers/ContactController.php";
require "controllers/ProductenController.php";
require "controllers/BestellenController.php";
require "controllers/ShoppingCartController.php";
require "core/Router.php";

$router = new Router();
require "core/routes.php";

$router->direct();