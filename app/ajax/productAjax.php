<?php
require_once "../../config/app.php";
require_once "../Views/inc/session_start.php";
require_once "../../autoload.php";

use app\Controllers\productController;

if (isset($_POST['module_product'])) {
    $insProduct = new productController();
    if ($_POST['module_product'] == "register") {
        echo $insProduct->registerProductController();
    }
} else {
    session_destroy();
    header("Location: " . APP_URL . "login");
}
