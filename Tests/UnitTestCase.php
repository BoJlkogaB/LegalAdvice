<?php

use App\Classes\Containers\Container;
use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__).'/App/Classes/Helpers/OsHelper.php';
require_once dirname(__DIR__).'/App/Core/Autoloader.php';

spl_autoload_register(['App\Core\Autoloader', 'autoloader']);

class UnitTestCase extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function getClass(string $className): object
    {
        $container = new Container();
        return $container->get($className);
    }
}