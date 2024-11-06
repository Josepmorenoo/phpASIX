<?php
//Fitxer per gestionar les rutes
namespace Core;

use http\Exception\RuntimeException;

class Route
{
    //creem array per les rutes
    protected $routes = [];

    //creem funcio per afegir les rutes a l'array
    public function register($route)
    {
        //li assignem a la variable routes en this la variable route que li passem a la funció
        $this->routes[] = $route;
    }

    //funcio per rebreun array de rutes i assignar a la propietar routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        //si la ruta no existeix redirigim a la vista d'error
        if(!array_key_exists($uri, $this->routes)) {
            //retornem vista
            require '../resources/views/errors/404.blade.php';
            //retornem ruta
            return $this;
        }

        //si no troba el controlador
        if (!file_exists($this->routes[$uri])) {
            throw new RuntimeException("No s'ha trobat el controlador:". $this->routes[$uri]);
        }

        //retornem les rutes
        return require $this->routes[$uri];
    }


}