<?php

Core\Router::connect("/", ["controller" => "app", "action" => "index"]); 
Core\Router::connect("/register", ["controller" => "user", "action" => "add"]); 
Core\Router::connect("/save", ["controller" => "user", "action" => "register"]); 
Core\Router::connect("/loginPage", ["controller" => "user", "action" => "loginPage"]); 
Core\Router::connect("/login", ["controller" => "user", "action" => "login"]); 
Core\Router::connect("/profile/{id}", ["controller" => "user", "action" => "profile"]); 
Core\Router::connect("/modify/{id}", ["controller" => "user", "action" => "modify"]); 
Core\Router::connect("/modifyPage/{id}", ["controller" => "user", "action" => "modifyPage"]); 
Core\Router::connect("/delete/{id}", ["controller" => "user", "action" => "delete"]); 
Core\Router::connect("/film/{id}", ["controller" => "film", "action" => "film"]); 
Core\Router::connect("/admin", ["controller" => "film", "action" => "admin"]); 
Core\Router::connect("/searchFilm", ["controller" => "film", "action" => "searchFilm"]); 
Core\Router::connect("/addFilm", ["controller" => "film", "action" => "addFilm"]); 
Core\Router::connect("/modifyFilm/{id}", ["controller" => "film", "action" => "modifyFilm"]); 
Core\Router::connect("/deleteFilm/{id}", ["controller" => "film", "action" => "deleteFilm"]); 
