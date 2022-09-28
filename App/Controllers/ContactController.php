<?php
namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use App\Core\Controller;

class ContactController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('contact');
    }

}