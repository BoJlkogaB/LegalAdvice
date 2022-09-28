<?php
namespace Controllers;

use App\Core\Controller;

class ExitController extends Controller
{

    public function indexAction()
    {
        unset($_SESSION['USER']);
        header('Location: /main/');
    }

}