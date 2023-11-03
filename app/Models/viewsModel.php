<?php

namespace app\Models;

class viewsModel
{
    protected function getViewsModel($views)
    {
        $whitelist = ["login", "products", "faq", "contact", "about", "register", "shopping-car", "report-issue"];
        if (in_array($views, $whitelist)) {
            if (is_file("./app/views/content/" . $views . "-view.php")) {
                $content = "./app/views/content/" . $views . "-view.php";
            } else {
                $content = "404";
            }
        } elseif ($views == "home" || $views == "index") {
            $content = "home";
        } else {
            $content = "404";
        }
        return $content;
    }
}
