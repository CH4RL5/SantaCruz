<?php
if (!isset($_SESSION['loggedin'])) {
    require_once "./app/views/inc/security-panel.php";
}
require_once "./app/views/inc/navbar-admin.php";
