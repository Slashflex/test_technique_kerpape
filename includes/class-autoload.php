<?php

spl_autoload_register("autoLoader");

/**
 * @param $className
 * @return bool
 */
function autoLoader($className)
{
    $path = "classes/";
    $extension = ".php";
    $fileName = $path . $className . $extension;

    if (!file_exists($fileName)) {
        return false;
    }

    include_once $fileName;
}