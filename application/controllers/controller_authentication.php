<?php

class Controller_Authentication extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Authentication();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('view_authentication.php', 'view_template.php');
    }

    function action_check_account()
    {
        require_once($_SERVER["DOCUMENT_ROOT"] . '/scripts/php/dbConnect.php');

        $this->data =
            [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];

        $model = $this->model;
        $view = $this->view;

        $user = $model->check_authentication($this->data, $DBconnect);

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            header('Location: /main/');
        } else {
            header('Location: /authentication/');
        }
    }
}