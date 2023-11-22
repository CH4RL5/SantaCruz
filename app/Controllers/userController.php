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

        #verificacion de fields obligatorios#
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
        } else {
            $password = password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]);
        }
        if ($email != "") {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $check_email = $this->execConsult("SELECT user_email FROM users WHERE user_email='$email'");
                if ($check_email->rowCount() > 0) {
                    $alert = [
                        "type" => "simple",
                        "title" => "an unexpected error occurred",
                        "text" => "The email already is registered",
                        "icon" => "error"
                    ];
                    return json_encode($alert);
                }
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
        $user_data_reg = [
            [
                "field_name" => "user_name",
                "field_marker" => ":name",
                "field_value" => $name
            ],
            [
                "field_name" => "user_email",
                "field_marker" => ":Email",
                "field_value" => $email
            ],
            [
                "field_name" => "user_password",
                "field_marker" => ":Password",
                "field_value" => $password
            ],
            [
                "field_name" => "user_user",
                "field_marker" => ":User",
                "field_value" => 'user'
            ],
            [
                "field_name" => "user_created",
                "field_marker" => ":Created",
                "field_value" => date("Y-m-d H:i:s")
            ],
            [
                "field_name" => "user_updated",
                "field_marker" => ":Updated",
                "field_value" => date("Y-m-d H:i:s")
            ]
        ];

        $register_user = $this->saveData("users", $user_data_reg);

        if ($register_user->rowCount() == 1) {
            $alert = [
                "type" => "clean",
                "title" => "user registered successfully",
                "text" => "The user " . $name . " " . " was registered successfully",
                "icon" => "success"
            ];
        } else {
            $alert = [
                "type" => "simple",
                "title" => "",
                "text" => "No se pudo registrar el user, por favor intente nuevamente",
                "icon" => "error"
            ];
        }
        return json_encode($alert);
        exit();
    }
}
