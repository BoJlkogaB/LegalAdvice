<?php
namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use Core\Controller;

class AboutController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('about');
    }

}