<?php

namespace app\Controllers;

use app\Models\viewsModel;

class viewsController extends viewsModel
{
    public function getViewsController($views)
    {
        if ($views != "") {
            $answer = $this->getViewsModel($views);
        } else {
            $answer = "home";
        }
        return $answer;
    }
}
