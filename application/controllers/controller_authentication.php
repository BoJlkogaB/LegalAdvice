<?php

class Controller_Authentication extends Controller
{
    function action_index()
    {
        $this->set_data
        (
            [
                'TEMPLATE' => 'STANDARD',
            ]
        );
        $this->get_view()->generate('view_authentication.php', 'view_template.php', $this->get_data());
    }

    function action_check_account()
    {
        $this->set_data
            ([
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]);

        $user = $this->get_model()->check_authentication($this->get_data());

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            header('Location: /main/');
        } else {
            header('Location: /authentication/');
        }
    }
}