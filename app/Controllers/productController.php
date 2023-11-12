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
    }
}
