<?php

class UserModel extends Core\Entity
{
    private static $relations; 
    public $tableName = "fiche_personne"; 

    public function getRelations(){
        return self::$relations; 
    }   
    
}
