<?php
namespace App\Core;

use App\Helpers\OsHelper;

class Route
{

    /**
     * @description Запускаем роутинг
     *
     * @return void
     */
    public static function handle(): void
    {
        session_start();

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $controllerName = self::getControllerInstance($routes[1]);
        $actionName = $routes[2];

        self::runAction($controllerName, $actionName);
    }

    /**
     * @description Получаем объект класса контроллера
     *
     * @param  string  $name
     *
     * @return \App\Core\Controller|null
     */
    private static function getControllerInstance(string $name): ?Controller
    {
        // TODO: проверить может ли передаваться null
        $controllerName = self::getControllerName($name);
        $controllerPath = OsHelper::replaceDirectorySeparator('App/Controllers/'.$controllerName.'.php');

        if (!file_exists($controllerPath)) {
            Route::ErrorPage404();
        }
        
        return new $controllerName;
    }

    /**
     * @description Получаем название контроллера по переданному $name
     *
     * @param  string  $name
     *
     * @return string
     */
    private static function getControllerName(string $name): string
    {
        return $name
          ? str_replace('_', '', $name).'Controller'
          : 'MainController';
    }

    /**
     * @description Перенаправляем на страницу 404
     *
     * @return void
     */
    public static function errorPage404(): void
    {
        // TODO: Реализовать рендер и сделать реализацию не только 404 ошибку
        // TODO: header('Status: 404 Not Found');

        header('Location: /404/');
        exit();
    }

    private static function runAction(Controller $controller, string $actionName)
    {
        $action = ($actionName && $actionName[0] != '?')
          ? $actionName.'Action'
          : 'indexAction';
        if (method_exists($controller, $action)) {
            $controller->beforeAction();
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }
    }

}