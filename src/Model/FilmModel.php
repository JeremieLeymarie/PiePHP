<?php

class FilmModel extends Core\Entity
{
    private static $relations = ["has one" => "genre"]; 
    public $tableName = "film"; 

    public function getRelations(){
        return self::$relations; 
    }   
    
}
