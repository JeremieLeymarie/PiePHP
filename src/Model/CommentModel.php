<?php

class CommentModel extends Core\Entity{
    private static $relations = ["has one" => "article"]; 
    public $tableName = "comment"; 

    public function getRelations(){
        return self::$relations; 
    }
}