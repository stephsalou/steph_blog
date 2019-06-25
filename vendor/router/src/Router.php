<?php
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 09/04/2019
 * Time: 13:42
 */

namespace App\Router;


/**
 * Class Router
 * @package App\Router
 */
class Router
{

    /**
     * @var string lien envoyer par le GET c'est le lien entrez dans la barre d'addresse
     */
    private $url;
    /**
     * @var array routes repertoire de toutes les root definie ce structure comme $routes[method][route]
     */
    private $routes = [];
    private $namedRoutes = [];

    /**
     * @param $url string lien envoyer par le GET c'est le lien entrez dans la barre d'addresse
     */
    public function  __construct($url)
    {
        $this->url = strtolower(htmlspecialchars(trim($url)));
    }

    /**
     * @param                              $path     string le chemin vers lequel sera faite le routing
     * @param \App\Router\closure|         $callable closure c'est la fonction de callback
     * @param null                         $name
     *
     * @return mixed retourne une instance de la class Route
     */
    public function get($path, $callable, $name = null)
    {
        return $this->add($path, $callable, $name, 'GET');
    }

    /**
     * @param                              $path     string le chemin vers lequel sera faite le routing
     * @param \App\Router\closure|         $callable closure c'est la fonction de callback a execute
     * @param null                         $name
     *
     * @return mixed retourne une instance de la class Route
     */
    public function post($path, $callable, $name = null)
    {
        return $this->add($path, $callable, $name, 'POST');
    }

    /**
     * @param $path
     * @param $callable
     * @param $name
     * @param $method
     *
     * @return \App\Router\Route
     */
    private function add($path, $callable, $name = null, $method)
    {
        $route = new Route($path, $callable);
        $this->routes[$method][] = $route;
        if ($name) {
            $this->namedRoutes[$name] = $route;
        }
        if(is_string($callable) && $name === null){
        $name= $callable;
    }
        return $route;
    }

    /**
     * @param callable $error
     *
     * @return
     * @throws \App\Router\RouterException
     */
    public function run(callable $error=null)
    {
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
            if($error!=null && gettype($error)=='object'){
                return $error();
            }else{
                throw new RouterException('REQUEST_METHOD DOES NOT EXIST');
            }
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->match($this->url)) {
                return $route->call();
            }
        }

       if($error!=null && gettype($error)=='object') {
           return $error();
       }else{
           throw new RouterException('No matching routes');
       }
    }

    public function url($name, $param = [])
    {
        if (!isset($this->namedRoutes[$name])) {
            throw new RouterException('No Route matches this name');
        }
        return $this->namedRoutes[$name]->getUrl($param);

    }


}