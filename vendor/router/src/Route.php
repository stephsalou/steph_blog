<?php
/**
 * Created by PhpStorm.
 * User: steph
 * Date: 09/04/2019
 * Time: 13:45
 */

namespace App\Router;

/**
 * Class Route
 * @package App\Router
 */
class Route
{
    /**
     * @var string le chemin vers lequel le routage est fait
     */
    private $path;
    /**
     * @var closure c'est la fonction de callback
     */
    private $callable;
    /**
     * @var int c'est le resultat de la correspondances des regex pour avoir le ou les parametres parser dans l'url
     */
    private $matches=[];

    private $params=[];


    /**
     * @param \App\Router\string|string    $path     string le chemin vers lequel le routage est fait
     * @param \App\Router\closure|callable $callable closure c'est la fonction de callback
     */

    public function __construct(string $path, $callable)
    {

        $this->path = trim($path, '/');
        $this->callable = $callable;

    }

    /**
     * @param $url string le lien entrez dans la barra d'addresse
     * @return bool true si tout c'est bien passer ou false dans le cas contraire
     */
    public function match($url)
    {
        $url = trim($url, '/');
        $path = preg_replace_callback('#:([\w]+)#', [$this,'paramMatch'], $this->path);
        $regex = "#^$path$#i";
        if (!preg_match($regex, $url, $matches)) {
            return false;
        }
        array_shift($matches);
        $this->matches = $matches;
        return true;

    }

    /**
     * @return mixed retourne l'execution de la fonction de callback sur les parametres passer dans l'url
     */
    public function call()
    {
    	if(is_string($this->callable)){
    		$params=explode('.' , $this->callable);
    		$controller="App\\Controller\\".$params[0]."controller";
    		$controller=new $controller();
    		$action=$params[1];
            return call_user_func_array([$controller,$params[1]],$this->matches);
		}else{
        return call_user_func_array($this->callable, $this->matches);
		}
    }
    private function paramMatch($match){
        if(isset($this->params[$match[1]])){
         return '('.$this->params[$match[1]].')';
        }
        return '([^/]+)';
    }



    public function with($param, $regex){
        $this->params[$param]=str_replace('(','(?:',$regex);
        return $this;
    }
	
	public function getUrl($params)
	{
		$path=$this->path;
		foreach ($params as $k => $v){
			$path=str_replace(":$k" , $v , $path);
		}
		return $path;
	}
}