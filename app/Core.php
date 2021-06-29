<?php

namespace App;

class Core
{
    public function  content($viewPath)
    {
        $path = __DIR__ . "/../app/views/{$viewPath}.phtml";

        if(file_exists($path)){
            require_once $path;
        } else {
            echo "Error: View path not found!";
        }
    }

}