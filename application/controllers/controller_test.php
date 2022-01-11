<?php

class Controller_Test extends Controller
{
    function action_index()
    {
//        $options = [
//            'cost' => 12,
//        ];
//        $hash = password_hash("SecretUserPassword789!",PASSWORD_BCRYPT, $options);
//        echo $hash.'</br>';
//        echo password_verify("SecretUserPassword789!", $hash);

//        $database = new MySQL_db();
//        $this->set_model('Model_Test');
//        $this->set_data
//        (
//            [
//                'TEMPLATE' => 'ADMIN',
//                'DATA' => $this->get_model()->test($database)
//            ]
//        );
        $this->get_view()->generate('view_test.php', 'view_template.php', $this->get_data());
    }
}