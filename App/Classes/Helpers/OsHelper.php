<?php
namespace App\Classes\Helpers;

class OsHelper
{
    /**
     * @description Заменяем разделители на те, которые используются в текущей OS
     *
     * @param  string  $value
     *
     * @return string
     */
    public static function replaceDirectorySeparator(string $value): string
    {
        return str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $value);
    }
}