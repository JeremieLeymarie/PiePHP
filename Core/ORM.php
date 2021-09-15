<?php

namespace Core;

class ORM extends Database
{

    public function create($table, $fields)
    {
        $db = $this->dbConnect(); 
        $sql = "INSERT INTO $table (";
        $i = 0;
        foreach ($fields as $key => $value) {
            $sql .= $key;
            $i++;
            if ($i != count($fields)) {
                $sql .= ", ";
            }
        }
        $sql .= ") VALUES (";
        $i = 0;
        foreach ($fields as $value) {
            $sql .= "'$value'";
            $i++;
            if ($i != count($fields)) {
                $sql .= ", ";
            }
        }
        $sql .= ")";
        $db->exec($sql);
        return $db->lastInsertId();
    }

    public function read($table, $id, $relations = NULL)
    {
        $db = $this->dbConnect(); 
        $sql = "SELECT * FROM $table WHERE id = $id";
        $qry = $db->query($sql);
        $res = $qry->fetch(); 

        if($relations != NULL){
            foreach($relations as $type=>$tableName){
                if($type == "has many"){
                    $sql = "SELECT * FROM $tableName WHERE " . $table . "_id = $id";
                    $qry = $db->query($sql); 
                    $res[$tableName] = $qry->fetchAll(); 
                }
            }
        }

        return $res;
    }

    public function update($table, $id, $fields)
    {
        $db = $this->dbConnect(); 
        $sql = "UPDATE $table SET ";
        $i = 0;
        foreach ($fields as $key => $value) {
            $sql .= $key . " = '" . $value . "'";
            $i++;
            if ($i != count($fields)) {
                $sql .= ", ";
            }
        }

        $sql .= " WHERE id = $id";
        $qry = $db->query($sql);
        return $qry === false ? $qry : true;
    }

    public function delete($table, $id)
    {
        $db = $this->dbConnect(); 
        $sql = "DELETE FROM $table WHERE id=$id";
        $qry = $db->query($sql);
        return $qry === false ? $qry : true;
    }

    public function find($table, $params = array(
        "WHERE" => "1",
        "ORDER BY" => "id ASC",
        "LIMIT" => ""
    ))
    {
        $db = $this->dbConnect(); 
        $sql = "SELECT * FROM $table ";
        foreach ($params as $key => $value) {
            if ($key == "WHERE") {
                $sql .= "WHERE id =' $value '";
            } else {
                $sql .= $key . " '" . $value . "' ";
            }
        }
        $qry = $db->query($sql);
        return $qry->fetch();
    }
}
