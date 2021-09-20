<?php

class UserModel extends Core\Entity
{
    private static $relations = ["has many" => "historique_membre"]; 
    public $tableName = "fiche_personne"; 

    public function getRelations(){
        return self::$relations; 
    }   
    
}
