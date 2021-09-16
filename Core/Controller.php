<?php

namespace Core;

class Controller
{   
    protected static $_render;
    protected $request; 

    public function __construct()
    {
        $this->request = new Request(); 
    }

    protected function render($view, $scope = [])
    {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), "src",  "View", str_replace("Controller", "", basename(get_class($this))), $view]) . ".php";
        if (file_exists($f)) {
            var_dump($f); 
            $txt = file_get_contents($f); 
            $txt = $this->parse($txt); 
            $newView = substr($f, 0, -4) . "View.php";  
            file_put_contents($newView, $txt);
            ob_start();
            include($newView);
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), "src", "View", "index"]) . ".php");
            self::$_render = ob_get_clean();
        }
    }
    function __destruct()
    {
        echo self::$_render; 
    }
    
    protected function parse($txt){
        $patterns = []; 
        $replacements = []; 
        array_push($patterns, "/({{)(.*)(}})/");
        array_push($replacements, "<?= htmlentities($2)?>");
      /*   array_push($patterns, "/(@if\()(.*)(\))/");
        array_push($replacements, "<?php if($2):?>");
        array_push($patterns, "//"); */
       return preg_replace($patterns, $replacements, $txt); 
    }
}
