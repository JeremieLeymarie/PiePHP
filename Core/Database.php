<?php

namespace Core; 

class Database{

    public function dbConnect(){
        try {
            $db = new \PDO("mysql:host=localhost;dbname=cinema;charset=UTF8", getenv("SQL_LOGIN"), getenv("SQL_PASS"), array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            return $db; 
        } catch (\Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

}