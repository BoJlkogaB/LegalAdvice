<?php

ini_set('display_errors', 1);

// Подключаем все созданные классы
require_once 'classes/database/IDatabase.php';
require_once 'classes/database/MySQL_DB.php';

require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор