<?php
namespace App\Core;

use App\Classes\Helpers\OsHelper;

require_once 'App/Classes/Helpers/OsHelper.php';

class Autoloader
{

    /** @var string[] - Директории, в которых расположены классы */
    /**
     * @description Ищем классы внутри директорий указанных в константе DIRS
     *
     * @param  string|null  $classname
     */
    public static function autoloader(?string $classname = null): void
    {
        $path = self::getClassPath($classname);
        if (file_exists($path)) {
            require_once $path;
        }
    }

    /**
     * @description Получаем путь до класса
     *
     * @param  string  $classname
     *
     * @return string
     */
    private static function getClassPath(string $classname): string
    {
        $classname = OsHelper::replaceDirectorySeparator($classname);
        $path = realpath(__DIR__.'/../../'.$classname.'.php');

        return OsHelper::replaceDirectorySeparator($path);
    }

}