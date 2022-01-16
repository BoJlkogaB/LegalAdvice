<?php
namespace Core;

class Route
{

    public static function start()
    {
        session_start();
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        static::getModel($routes[1]);
        static::getAction(static::getController($routes[1]),
          count($routes) <= 2 ? null : $routes[2]);
    }

    public static function ErrorPage404()
    {
        header('Location: /404/');
        //        Реализовать рендер и сделать реализацию не только 404 ошибку
        //        header('Status: 404 Not Found');
        exit();
    }

    private static function getController($route): Controller
    {
        $controllerName = $route
          ? str_replace('_', '', $route).'Controller'
          : 'MainController';
        $controllerFile = strtolower($controllerName).'.php';
        $controllerPath = "application/controllers/".$controllerFile;
        if (file_exists($controllerPath)) {
            require_once "application/controllers/".$controllerFile;
        } else {
            Route::ErrorPage404();
        }
        $controllerName = 'Controllers\\'.$controllerName;

        return new $controllerName;
    }

    private static function getAction($controller, $route)
    {
        $action = $route
          ? $route.'Action'
          : 'indexAction';
        if (method_exists($controller, $action)) {
            $controller->beforeAction();
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }
    }

    private static function getModel($route)
    {
        $modelName = $route
          ? str_replace('_', '', $route).'Model'
          : 'Main';
        $modelFile = strtolower($modelName).'.php';
        $modelPath = "application/models/".$modelFile;
        if (file_exists($modelPath)) {
            require_once "application/models/".$modelFile;
        }
    }

}