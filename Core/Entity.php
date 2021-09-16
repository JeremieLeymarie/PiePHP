<?php

namespace Core;

class Entity extends ORM
{
    public $tableName;

    public function __construct($params)
    {
        if (count($params) == 1 && key_exists("id", $params)) {
            $params = $this->read($this->tableName, $params["id"]);
            $this->id = $params["id_" . $this->tableName]; 
        }
        else{
            $this->id = $this->create($this->tableName, $params);
        }
        foreach ($params as $key => $value) {
            $this->$key = $value;
        }
    }
}
