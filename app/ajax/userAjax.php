<?php
require_once "../../config/app.php";
require_once "../Views/inc/session_start.php";
require_once "../../autoload.php";

use app\Controllers\userController;

if (isset($_POST['module_user'])) {
    $insUser = new userController();
    if ($_POST['module_user'] == "register") {
        echo $insUser->registerUserController();
    }
} else {
    session_destroy();
    header("Location: " . APP_URL . "login");
}
