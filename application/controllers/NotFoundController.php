<?php
namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use Core\Controller;

class NotFoundController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('404');
    }

}