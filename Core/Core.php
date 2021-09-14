<?php

namespace Core;

class Core
{

    protected $request;
    public function __construct()
    {
        $this->request = new Request();
    }

    public function run()
    {

        /* STATIC ROUTER
        */
        require_once "src/routes.php";
        $url = substr($_SERVER["REQUEST_URI"], 4);
        $route = Router::get($url);
        $controllerName = ucfirst($route["controller"]) . "Controller";
        $methodName = $route["action"] . "Action";
        $controller = new $controllerName();
        $controller->$methodName();

        /*DYNAMIC ROUTER
        $url = substr($_SERVER["REQUEST_URI"], 5);
        $params = explode("/", $url);
        if ($params[0] == "") {
            $params[0] = "app";
        }
        if ($params[1] == "") {
            $params[1] = "index";
        }
        $controllerName = ucfirst($params[0]) . "Controller";
        $methodName = $params[1] . "Action";

        $controller = new $controllerName();
        if(class_exists($controllerName)&& method_exists($controller, $methodName)){
            $controller->$methodName();
        }else{
            echo "404\n"; 
        }
        */
    }
}
