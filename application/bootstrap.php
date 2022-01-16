<?php
require_once 'classes/Config.php';
require_once 'core/Autoloader.php';
Config\Config::setConfig(include(__DIR__.'/../config/application.php'));
spl_autoload_register(['Core\Autoloader', 'autoloader']);
\Core\Route::start(); // запускаем маршрутизатор