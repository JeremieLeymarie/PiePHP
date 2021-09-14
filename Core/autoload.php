<?php

spl_autoload_register(function ($class) {
    $directories = ["", "src/Controller/", "src/Model/"];
    $class = str_replace("\\", "/", $class);

    foreach ($directories as $dir) {
        $path = $dir . $class . ".php";

        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});
