<?php

namespace app\Controllers;

use app\Models\mainModel;

class userController extends mainModel
{
    # controller for register user #
    public function registerUserController()
    {
        #almacen de datos#
        $name = $this->clearChain($_POST['name_user']);
        $email = $this->clearChain($_POST['email_user']);
        $password = $this->clearChain($_POST['password_user']);

        #verificacion de campos obligatorios#
        if ($name == " " || $email == " " || $password == " ") {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "Verify that all fields are filled out",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        #verificacion de la integridad de los datos#
        if ($this->verifiedData("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $name)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The name not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        if ($this->verifiedData("[a-zA-Z0-9$@.-]{7,100}", $password)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The password not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        if ($email != "") {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            } else {
                $alert = [
                    "type" => "simple",
                    "title" => "an unexpected error occurred",
                    "text" => "The email isn't match with the pattern required",
                    "icon" => "error"
                ];
                return json_encode($alert);
                exit();
            }
        }
    }
}
