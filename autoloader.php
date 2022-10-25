<?php

spl_autoload_register("autoload");

function autoload($class_name)
{

    if (file_exists("src" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . $class_name . ".php")) {
        require_once "src" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . $class_name . ".php";
    } elseif (file_exists("src" . DIRECTORY_SEPARATOR . "controllers" . DIRECTORY_SEPARATOR . $class_name . ".php")) {
        require_once "src" . DIRECTORY_SEPARATOR . "controllers" . DIRECTORY_SEPARATOR . $class_name . ".php";
    }

}


