<?php
namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use Core\Controller;

class ServicesDetailsController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('services_details');
    }

}