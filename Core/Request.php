<?php
namespace Core;

class Request{

    protected $request; 
    public function __construct()
    {
        $this->request = new Request(); 
    }
    
    public function getQueryParams(){
        $params = []; 

        foreach($_GET as $key => $value){
            $params[$key] =  htmlspecialchars(trim(stripslashes($value))); 
        }
        foreach($_POST as $key => $value){
            $params[$key] =  htmlspecialchars(trim(stripslashes($value))); 
        }
        return $params; 
    }
}