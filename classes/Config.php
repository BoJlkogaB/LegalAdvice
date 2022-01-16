<?php
namespace Config;

class Config
{

    private static array $config = [];

    public static function setConfig($config)
    {
        static::$config = $config;
    }

    public static function getDatabase(): string
    {
        return static::$config['DATABASE'];
    }

}