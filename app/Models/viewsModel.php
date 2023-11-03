<?php

namespace app\Models;

class viewsModel
{
    protected function getViewsModel($views)
    {
        $whitelist = ["home,products,about"];
        if (in_array($views, $whitelist)) {
            if (is_file("./app/Views/content/" . $views . "-view.php")) {
                $content = "./app/Views/content/" . $views . "-view.php";
            } else {
                $content = "404";
            }
        } elseif ($views == "login" || $views == "index") {
            $content = "login";
        } else {
            $content = "404";
        }
        return $content;
    }
}
