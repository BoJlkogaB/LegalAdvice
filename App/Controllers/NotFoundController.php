<?php
namespace App\Controllers;

use App\Controllers\Traits\StandardViewTrait;
use App\Core\Controller;

class NotFoundController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('404');
    }

}