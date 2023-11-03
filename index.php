<?php
require_once "./config/app.php";
require_once "./autoload.php";
require_once "./app/Views/inc/session_start.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["login"];
}
?>
<!DOCTYPE html>

<html lang="es">

<head>
    <?php require_once "./app/Views/inc/head.php" ?>
</head>

<body>

    <?php require_once "./app/Views/inc/script.php" ?>
</body>

</html>