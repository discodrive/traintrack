<?php

namespace Traintrack;

class Autoload
{
    public static function loader($class)
    {
        $parts    = explode('\\', $class);
        $file     = 'classes/' . end($parts) . '.php';
        if (!file_exists($file)) {
            return false;
        }
        include $file;
    }
}