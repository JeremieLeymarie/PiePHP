<?php

class GenreModel extends Core\Entity
{
    private static $relations = ["has many" => "film"]; 
    public $tableName = "genre"; 

    public function getRelations(){
        return self::$relations; 
    }   
    
    
}
