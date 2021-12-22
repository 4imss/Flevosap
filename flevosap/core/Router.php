<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    // Dit zijn de routes voor Flevosap
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Aan de hand van REQUEST_URI gaan wij een bepaalde route afleggen
     * Maar als de route er niet is dan geven wij een ERROR
     */
    public function direct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : $_SERVER['REQUEST_URI'];

        if (array_key_exists($uri, $this->routes[$method])) {
            $currentRoute = $this->routes[$method][$uri];
            $controller = new $currentRoute['controller']();
            $controller->{$currentRoute['method']}();
            return;
        }

        throw new Exception('Error, De url die u zoekt bestaat niet');
    }
}