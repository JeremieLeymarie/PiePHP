<?php

class ArticleModel extends Core\Entity{
    private static $relations = ["has many" => "comment"]; 
    public $tableName = "article"; 

    public function getRelations(){
        return self::$relations; 
    }
}