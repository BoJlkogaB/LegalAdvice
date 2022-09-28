<?php
namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use App\Core\Controller;

class AboutController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('about');
    }

}