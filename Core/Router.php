<?php
namespace Core; 

class Router {
    private static $routes; 
    protected $request; 
    public function __construct()
    {
        $this->request = new Request(); 
    }

    public static function connect($url, $route){
        self::$routes[$url] = $route; 
    }

    public static function get($url){
        if(array_key_exists($url, self::$routes)){
            return self::$routes[$url]; 
        }
        else{
            return false; 
        }
    }
}