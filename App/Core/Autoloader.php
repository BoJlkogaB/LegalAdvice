<?php
namespace App\Core;

use App\Helpers\OsHelper;

class Autoloader
{

    /** @var string[] - Директории, в которых расположены классы */
    private const DIRS =
      [
        'App',
      ];

    /**
     * @description Ищем классы внутри директорий указанных в константе DIRS
     *
     * @param  string|null  $classname
     */
    public static function autoloader(?string $classname = null): void
    {
        $classname = OsHelper::replaceDirectorySeparator($classname);
        foreach (self::DIRS as $dir) {
            $path = self::getClassPath($dir, $classname);
            if (file_exists($path)) {
                require_once $path;
                break;
            }
        }
    }

    /**
     * @description Получаем путь до класса
     *
     * @param  string  $dir
     * @param  string  $classname
     *
     * @return string
     */
    private static function getClassPath(string $dir, string $classname): string
    {
        $path = realpath(__DIR__.'/../../'.$dir.'/'.$classname.'.php');
        return OsHelper::replaceDirectorySeparator($path);
    }

}