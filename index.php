<?php
//Define BASE_URI constant that consists of the path of the current directory
define("BASE_URI", str_replace("\\", "/", substr(__DIR__, strlen($_SERVER["DOCUMENT_ROOT"]))));

require_once(implode(DIRECTORY_SEPARATOR, ["Core", "autoload.php"]));

$app = new Core\Core();
$app->run();

// require("src/View/index.php"); 

echo "<pre>";
var_dump($_POST, $_GET, $_SERVER);
echo "</pre>";

