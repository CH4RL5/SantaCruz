<?php

namespace app\Controllers;

use app\Models\mainModel;

class productController extends mainModel
{
    public function registerProductController()
    {
        $name = $this->clearChain($_POST['name_product']);
        $type = $this->clearChain($_POST['type_product']);
        $price = $this->clearChain($_POST['price_product']);
        $stock = $this->clearChain($_POST['stock_product']);
        $code = $this->clearChain($_POST['code_product']);
        $brand = $this->clearChain($_POST['brand_product']);
        if ($name == " " || $type == " " || $price == " " || $stock == " " || $code == " " || $brand == " ") {
            $alert = [
                "type" => "simple",
                "icon" => "error",
                "title" => "an unexpected error occurred",
                "text" => "Verify that all fields are filled out",

            ];
            return json_encode($alert);
            exit();
        }

        #verificacion de la integridad de los datos#
        if ($this->verifiedData("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $name)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The password not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        if ($this->verifiedData("[a-zA-Z ]{3,40}", $type)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The password not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        if ($this->verifiedData("[0-9]{3,20}", $price)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The password not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        if ($this->verifiedData("[0-9]{3,20}", $stock)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The password not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        if ($this->verifiedData("[a-zA-Z0-9$@.-]{7,100}", $code)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The password not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        if ($this->verifiedData("[a-zA-Z ]{7,100}", $brand)) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The password not match with the pattern required",
                "icon" => "error"
            ];
            return json_encode($alert);
            exit();
        }
        $img_dir = "../Views/photos/";

        #
        if ($_FILES['photo_product']['name'] != "" && $_FILES['photo_product']['size'] > 0) {
            # Creando directorio #
            if (!file_exists($img_dir)) {
                if (!mkdir($img_dir, 0777)) {
                    $alert = [
                        "type" => "simple",
                        "title" => "Ocurrió un error inesperado",
                        "text" => "Error al crear el directorio",
                        "icon" => "error"
                    ];
                    return json_encode($alert);
                    exit();
                }
            }

            # Verificando formato de imagenes #
            if (mime_content_type($_FILES['photo_product']['tmp_name']) != "image/jpeg" && mime_content_type($_FILES['photo_product']['tmp_name']) != "image/png") {
                $alert = [
                    "type" => "simple",
                    "title" => "Ocurrió un error inesperado",
                    "text" => "La imagen que ha seleccionado es de un formato no permitido",
                    "icon" => "error"
                ];
                return json_encode($alert);
                exit();
            }

            # Verificando peso de imagen #
            if (($_FILES['photo_product']['size'] / 1024) > 5120) {
                $alerta = [
                    "type" => "simple",
                    "title" => "Ocurrió un error inesperado",
                    "text" => "La imagen que ha seleccionado supera el peso permitido",
                    "icon" => "error"
                ];
                return json_encode($alerta);
                exit();
            }

            # name de la foto #
            $photo = str_ireplace(" ", "_", $name);
            $photo = $photo . "_" . rand(0, 100);

            # Extension de la imagen #
            switch (mime_content_type($_FILES['photo_product']['tmp_name'])) {
                case 'image/jpeg':
                    $photo = $photo . ".jpg";
                    break;
                case 'image/png':
                    $photo = $photo . ".png";
                    break;
            }

            chmod($img_dir, 0777);

            # Moviendo imagen al directorio #
            if (!move_uploaded_file($_FILES['photo_product']['tmp_name'], $img_dir . $photo)) {
                $alert = [
                    "type" => "simple",
                    "title|" => "Ocurrió un error inesperado",
                    "text" => "No podemos subir la imagen al sistema en este momento",
                    "icon" => "error"
                ];
                return json_encode($alert);
                exit();
            }
        } else {
            $photo = "";
        }
        $check_product = $this->execConsult("SELECT product_name FROM products WHERE product_name='$name'");

        if ($check_product->rowCount() > 0) {
            $alert = [
                "type" => "simple",
                "title" => "an unexpected error occurred",
                "text" => "The product already is registered",
                "icon" => "error"
            ];
            return json_encode($alert);

            exit();
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
        $product_data_reg = [
            [
                "field_name" => "product_name",
                "field_marker" => ":Name",
                "field_value" => $name
            ],
            [
                "field_name" => "product_type",
                "field_marker" => ":Type",
                "field_value" => $type
            ],
            [
                "field_name" => "product_price",
                "field_marker" => ":Price",
                "field_value" => $price
            ],
            [
                "field_name" => "product_stock",
                "field_marker" => ":Stock",
                "field_value" => $stock
            ],
            [
                "field_name" => "product_code",
                "field_marker" => ":Code",
                "field_value" => $code
            ],
            [
                "field_name" => "product_brand",
                "field_marker" => ":Brand",
                "field_value" => $brand
            ],
            [
                "field_name" => "product_photo",
                "field_marker" => ":Photo",
                "field_value" => $photo
            ],
        ];

        $register_product = $this->saveData("products", $product_data_reg);

        if ($register_product->rowCount() == 1) {
            $alert = [
                "tipo" => "limpiar",
                "titulo" => "Usuario registrado",
                "texto" => "El usuario " . $name . " " . " se registro con exito",
                "icono" => "success"
            ];
        } else {

            if (is_file($img_dir . $photo)) {
                chmod($img_dir . $photo, 0777);
                unlink($img_dir . $photo);
            }

            $alert = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No se pudo registrar el usuario, por favor intente nuevamente",
                "icono" => "error"
            ];
        }

        return json_encode($alert);
    }
}
