<?php

namespace Core; 

class Database{

    public function dbConnect(){
        try {
            $db = new \PDO("mysql:host=localhost;dbname=pie_test;charset=UTF8", "jemleym", "jemleym", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            return $db; 
        } catch (\Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

}