<?php

class Controller_Table_Users extends Controller
{
    function action_index()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Users');
        $this->set_data
        (
            [
                'TEMPLATE' => 'ADMIN',
                'DATA' => $this->get_model()->get_data($database)
            ]
        );
        $this->get_view()->generate('view_table_users.php', 'view_template.php', $this->get_data());
    }

    function action_edit()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Users');
        $this->set_data
        (
            [
                'TEMPLATE' => 'ADMIN',
                'DATA' => $this->get_model()->get_item($_GET['id'], $database)
            ]
        );

        $this->get_view()->generate('view_table_users_edit.php', 'view_template.php', $this->get_data());
    }

    function action_update()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Users');

        $this->set_data
        (
            [
                'id' => $_POST['id'],
                'email' => $_POST['email'],
                'role_id' => $_POST['role'],
            ]
        );

        $this->get_model()->update_item($this->get_data(), $database);

        header('Location: /table_users/edit/?id='.$this->get_data()['id']);
    }

    function action_delete()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Users');
        $this->get_model()->delete_item($_GET['id'], $database);

        header('Location: /table_users/');
    }
}