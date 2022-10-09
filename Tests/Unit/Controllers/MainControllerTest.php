<?php

namespace Tests\Controllers\Unit;

require_once dirname(__DIR__, 3).'/Tests/UnitTestCase.php';

use App\Controllers\MainController;
use App\Core\View;
use UnitTestCase;

class MainControllerTest extends UnitTestCase
{
    public MainController $controller;

    /**
     * @throws \ReflectionException
     */
    public function setUp(): void
    {
        $this->controller = $this->getClass(MainController::class);
    }

    public function testGetView()
    {
        $this->assertEquals(new View(), $this->controller->getView());
    }
}