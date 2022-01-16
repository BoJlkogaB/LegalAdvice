<?php

namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use Core\Controller;

class ServicesController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('services');
    }
}