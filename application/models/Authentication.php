<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;

class Authentication extends Model
{

    public function checkAuthentication($data, DatabaseInterface $database)
    {
        $query = "SELECT `id`, `email`, `password` FROM `Users` WHERE `email` = :email";
        $params =
          [
            ':email' => $data['email'],
          ];
        $user = $database->fetch($query, $params);
        if (password_verify($data['password'], $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }

    public function getData(DatabaseInterface $database)
    {
        // TODO: Implement get_data() method.
    }

    public function getItem($id, DatabaseInterface $database)
    {
        // TODO: Implement get_item() method.
    }

    public function createItem($data, DatabaseInterface $database)
    {
        // TODO: Implement create_item() method.
    }

    public function updateItem($data, DatabaseInterface $database)
    {
        // TODO: Implement update_item() method.
    }

    public function deleteItem($id, DatabaseInterface $database)
    {
        // TODO: Implement delete_item() method.
    }

}