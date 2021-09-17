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
        $sql = "SELECT * FROM $table WHERE id_" . $table . " =  " . $id;
        $qry = $db->query($sql);
        $res = $qry->fetch();

        if ($relations != NULL) {
            foreach ($relations as $type => $tableName) {
                if ($type == "has many") {
                    $sql = "SELECT * FROM $tableName WHERE id_" . $table . " = $id";
                    $qry = $db->query($sql);
                    $res[$tableName] = $qry->fetchAll();
                } else if ($type == "has one") {
                    if (isset($res["id_" . $tableName]) && $res["id_" . $tableName] != NULL) {
                        $sql = "SELECT * FROM $tableName WHERE id_" . $tableName . " = " . $res["id_" . $tableName];
                        $qry = $db->query($sql);
                        $res[$tableName] = $qry->fetch();
                    }
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

        $sql .= " WHERE id_" . $table . " = " . $id;
        $qry = $db->query($sql);
        return $qry === false ? $qry : true;
    }

    public function delete($table, $id)
    {
        $db = $this->dbConnect();
        $sql = "DELETE FROM $table WHERE id_" . $table . " = " . $id;
        $qry = $db->query($sql);
        return $qry === false ? $qry : true;
    }

    public function find($table, $params = array(
        "WHERE id =" => "1",
        "ORDER BY" => "id ASC",
        "LIMIT" => ""
    ))
    {
        $db = $this->dbConnect();
        $sql = "SELECT * FROM $table ";
        foreach ($params as $key => $value) {
            $sql .= $key . " '" . $value . "' ";
        }

        $qry = $db->query($sql);
        $res = $qry->fetch();

        return $res;
    }
}
