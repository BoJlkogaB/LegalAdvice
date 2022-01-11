<?php

class Controller_Table_Roles extends Controller
{
    function action_index()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Roles');
        $this->set_data
        (
            [
                'TEMPLATE' => 'ADMIN',
                'DATA' => $this->get_model()->get_data($database)
            ]
        );
        $this->get_view()->generate('view_table_roles.php', 'view_template.php', $this->get_data());
    }

    function action_edit()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Roles');
        $this->set_data
        (
            [
                'TEMPLATE' => 'ADMIN',
                'DATA' => $this->get_model()->get_item($_GET['id'], $database)
            ]
        );

        $this->get_view()->generate('view_table_roles_edit.php', 'view_template.php', $this->get_data());
    }

    function action_new()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Roles');
        $this->set_data
        (
            [
                'TEMPLATE' => 'ADMIN',
            ]
        );

        $this->get_view()->generate('view_table_roles_new.php', 'view_template.php', $this->get_data());
    }

    function action_create()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Roles');

        $this->set_data
        (
            [
                'name' => $_POST['name'],
            ]
        );

        $this->get_model()->create_item($this->get_data(), $database);

        if (@$_SERVER['HTTP_REFERER'] != null) {
            header('Location: /table_roles/');
        }
    }

    function action_update()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Roles');

        $this->set_data
        (
            [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
            ]
        );

        $this->get_model()->update_item($this->get_data(), $database);

        if (@$_SERVER['HTTP_REFERER'] != null) {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
    }

    function action_delete()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Roles');
        $this->get_model()->delete_item($_GET['id'], $database);

        if (@$_SERVER['HTTP_REFERER'] != null) {
            header('Location: /table_roles/');
        }
    }
}