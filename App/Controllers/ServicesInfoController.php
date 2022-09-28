<?php

namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use App\Core\Controller;

class ServicesInfoController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('services_info');
    }
}