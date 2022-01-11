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

        require_once 'application/models/model_table_roles.php';
        $roles = new Model_Table_Roles();

        $this->set_model('Model_Table_Users');
        $this->set_data
        (
            [
                'TEMPLATE' => 'ADMIN',
                'DATA' => $this->get_model()->get_item($_GET['id'], $database),
                'ROLES' => $roles->get_data($database)
            ]
        );

        $this->get_view()->generate('view_table_users_edit.php', 'view_template.php', $this->get_data());
    }

    function action_new()
    {
        $database = new MySQL_db();

        require_once 'application/models/model_table_roles.php';
        $roles = new Model_Table_Roles();

        $this->set_model('Model_Table_Users');
        $this->set_data
        (
            [
                'TEMPLATE' => 'ADMIN',
                'ROLES' => $roles->get_data($database)
            ]
        );

        $this->get_view()->generate('view_table_users_new.php', 'view_template.php', $this->get_data());
    }

    function action_create()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Users');

        $this->set_data
        (
            [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'role_id' => $_POST['role'],
            ]
        );

        $this->get_model()->create_item($this->get_data(), $database);

        if (@$_SERVER['HTTP_REFERER'] != null) {
            header('Location: /table_users/');
        }
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

        if (@$_SERVER['HTTP_REFERER'] != null) {
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    }

    function action_delete()
    {
        $database = new MySQL_db();

        $this->set_model('Model_Table_Users');
        $this->get_model()->delete_item($_GET['id'], $database);

        if (@$_SERVER['HTTP_REFERER'] != null) {
            header('Location: /table_users/');
        }
    }
}