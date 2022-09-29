<?php
namespace App\Controllers;

use App\Controllers\Traits\AdminViewTrait;
use App\Core\Controller;

class TablesController extends Controller
{

    use AdminViewTrait;

    public function indexAction()
    {
        $this->useSimpleAdminView();
    }

}