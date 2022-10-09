<?php
namespace App\Core;

use App\Classes\Containers\Container;
use App\Classes\Containers\Exceptions\NotFoundException;
use ReflectionException;

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
        try {
            $controller = self::getControllerInstance($routes[1]);

            $actionName = $routes[2] ?? '';

            self::runAction($controller, $actionName);
        } catch (NotFoundException $e) {
            // TODO: сделать логирование
            Route::errorPage404();
        } catch (ReflectionException $e) {
            // TODO: сделать логирование
        }
    }

    /**
     * @description Получаем объект класса контроллера
     *
     * @param  string  $name
     *
     * @return Controller
     *
     * @throws ReflectionException
     * @throws NotFoundException
     */
    private static function getControllerInstance(string $name): object
    {
        $container = new Container();

        // TODO: проверить может ли передаваться null
        $controllerName = self::getControllerName($name);

        $container->has($controllerName);

        return $container->get($controllerName);
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
        return 'App\\Controllers\\'.($name
            ? str_replace('_', '', $name).'Controller'
            : 'MainController');
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

    private static function runAction(
      Controller $controller,
      string $actionName
    ) {
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