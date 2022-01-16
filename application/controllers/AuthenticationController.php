<?php
namespace Controllers;

use Controllers\Traits\StandardViewTrait;
use Core\Controller;

class AuthenticationController extends Controller
{

    use StandardViewTrait;

    public function indexAction()
    {
        $this->useStandardView('authentication');
    }

    public function action_check_account()
    {
        //        $this->setData
        //        ([
        //          'email' => $_POST['email'],
        //          'password' => $_POST['password'],
        //        ]);
        //        $user = $this->getModel()->check_authentication($this->getData());
        //        if ($user) {
        //            $_SESSION['user_id'] = $user['id'];
        //            $_SESSION['user_email'] = $user['email'];
        //            header('Location: /main/');
        //        } else {
        //            header('Location: /authentication/');
        //        }
    }

}