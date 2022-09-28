<?php

use App\Core\Route;
use App\Helpers\OsHelper;
use Config\Config;

require_once 'Core/Autoloader.php';
spl_autoload_register(['Core\Autoloader', 'autoloader']);

Config::setConfig(include(OsHelper::replaceDirectorySeparator(__DIR__.'/../config/application.php')));
Route::handle();