<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema By PiePHP</title>
    <link rel="stylesheet" href="http://localhost/pie/webroot/css/style.css">
</head>
<?php
$link = "";
if (isset($_SESSION["user"]["id_fiche_personne"])) {
    $link = "http://localhost/pie/profile/" . $_SESSION["user"]["id_fiche_personne"];
} else {
    $link = "http://localhost/pie/loginPage";
}
?>

<body>
    <header>
        <h1>My Cinema</h1>
        <nav>
            <ul>
                <li class="btn"><a href="http://localhost/pie/">Home</a></li>
                <li class="btn"><a href=<?=$link?>>Profile</a></li>
                <li class="btn"><a href="http://localhost/pie/genre">Genres</a></li>
            </ul>
        </nav>
    </header>
    <?= $view ?>
</body>

</html>