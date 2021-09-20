<?php

class HistoryModel extends Core\Entity
{
    private static $relations = ["has one" => "film"]; 
    public $tableName = "historique_membre"; 

    public function getRelations(){
        return self::$relations; 
    }   
    
    
}
