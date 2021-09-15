<?php

class UserModel extends Core\Entity
{
    private $email;
    private $password;
    public $tableName = "users"; 
 
    public function save()
    {
        try {
            $db = new PDO("mysql:host=localhost;dbname=pie_test;charset=UTF8", "jemleym", "jemleym", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {

            die("Error : " . $e->getMessage());
        }

        $sql = "INSERT INTO users (email, password) VALUES (:email, :pass)";
        $query = $db->prepare($sql);
        $query->execute(array(
            ":email"=>$this->email, 
            ":pass"=>$this->password, 
        ));
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }
}
