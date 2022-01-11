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
        $this->get_model()->update_item($_POST, $database);

        $this->get_view()->generate('view_table_users_edit.php', 'view_template.php', $this->get_data());
    }
}