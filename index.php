<?php

use App\Core\Route;
use Dotenv\Dotenv;

ini_set('display_errors', '1');
require_once 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

Route::handle();