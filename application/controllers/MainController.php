<?php
namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use Core\Controller;

class MainController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('main');
    }

}