<?php
namespace App\Controllers;

use App\Controllers\Traits\StandardViewTrait;
use App\Core\Controller;

class MainController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('main');
    }

}