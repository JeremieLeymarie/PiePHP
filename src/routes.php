<?php

Core\Router::connect("/", ["controller" => "app", "action" => "index"]); 
Core\Router::connect("/register", ["controller" => "user", "action" => "add"]); 
Core\Router::connect("/save", ["controller" => "user", "action" => "register"]); 
Core\Router::connect("/test", ["controller" => "user", "action" => "test"]); 
Core\Router::connect("/user/{id}?", ["controller" => "user", "action" => "show"]); 