<?php
namespace App\Controllers;

use App\Controllers\Traits\StandardViewTrait;
use App\Core\Controller;

class ContactController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('contact');
    }

}