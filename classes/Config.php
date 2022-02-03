<?php
namespace Config;

class Config
{

    private static array $config = [];

    public static function setConfig($config)
    {
        static::$config = $config;
    }

    public static function getDatabaseName(): string
    {
        return static::$config['DATABASE']['NAME'];
    }

    public static function getDatabaseHost(): string
    {
        return static::$config['DATABASE']['HOST'];
    }

    public static function getDatabaseDBName(): string
    {
        return static::$config['DATABASE']['DBNAME'];
    }

    public static function getDatabaseLogin(): string
    {
        return static::$config['DATABASE']['LOGIN'];
    }

    public static function getDatabasePassword(): string
    {
        return static::$config['DATABASE']['PASSWORD'];
    }

}