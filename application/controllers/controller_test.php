<?php

class Controller_Test extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Test();
        $this->view = new View();
    }

    function action_index()
    {
//        $options = [
//            'cost' => 12,
//        ];
//        $hash = password_hash("SecretUserPassword789!",PASSWORD_BCRYPT, $options);
//        echo $hash.'</br>';
//        echo password_verify("SecretUserPassword789!", $hash);


        require_once($_SERVER["DOCUMENT_ROOT"] . '/scripts/php/dbConnect.php');
//        $this->data = $this->model->test($DBconnect);
        $this->view->generate('view_test.php', 'view_template.php');
    }
}