<?php
session_start();
error_reporting(E_PARSE);
if (isset($_SESSION['loggedin'])) {
} else {
    header("Location: " . APP_URL . "login/");
    exit();
}
