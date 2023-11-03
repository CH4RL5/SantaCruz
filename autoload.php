<?php
spl_autoload_register(function ($class) {
    $archivo = __DIR__ . "/" . $class . ".php";
    $archivo = str_replace("\\", "/", $archivo);

    if (is_file($archivo)) {
        require_once $archivo;
    }
});
