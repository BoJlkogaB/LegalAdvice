<?php
namespace Core;

class Autoloader
{

    static function autoloader($classname = null)
    {
        $dirs = ['application', 'classes'];
        $classname = str_replace('\\', '/', $classname);
        foreach ($dirs as $dir) {
            $path = realpath(__DIR__.'/../../'.$dir.'/'.$classname.'.php');
            if (file_exists($path)) {
                require_once $path;
                break;
            }
        }
    }

}