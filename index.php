<?php
require_once "./config/app.php";
require_once "./autoload.php";
require_once "./app/Views/inc/session_start.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["home"];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "./app/Views/inc/head.php" ?>
</head>

<body>

    <?php

    use app\Controllers\viewsController;
    use app\Controllers\loginController;

    $insLogin = new loginController();

    $viewsController = new viewsController();
    $views = $viewsController->getViewsController($url[0]);
    if ($views == "home" || $views == "404") {
        require_once "./app/views/content/" . $views . "-view.php";
    } else {
        // if (!isset($_SESSION['id']) || !isset($_SESSION['name']) || !isset($_SESSION['user']) || $_SESSION['id'] == " " || $_SESSION['name'] == " " || $_SESSION['user'] == "") {
        //     $insLogin->closeSessionController();
        //     exit();
        // }
        require_once $views;
    }
    require_once "./app/views/inc/script.php" ?>
</body>

</html>