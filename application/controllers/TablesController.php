<?php
namespace Controllers;

use Controllers\Traits\AdminViewTrait;
use Core\Controller;

class TablesController extends Controller
{

    use AdminViewTrait;

    public function indexAction()
    {
        $this->useSimpleAdminView();
    }

}