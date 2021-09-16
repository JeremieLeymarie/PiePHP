<?php

namespace Core;

class Router
{
    private static $routes;
    protected $request;
    public function __construct()
    {
        $this->request = new Request();
    }

    public static function connect($url, $route)
    {
        $reg = preg_match("/(?<=\/)(.*)(?=\/)/", $url, $matches);
        if ($reg) {
            $url = $matches[0];
        }
        self::$routes[$url] = $route;
    }

    public static function get($url)
    {
        if (array_key_exists($url, self::$routes)) {

            return self::$routes[$url];
        } else {
            return false;
        }
    }
}
