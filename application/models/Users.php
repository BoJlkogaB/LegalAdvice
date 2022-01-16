<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;

class Users extends Model
{

    public function getData(DatabaseInterface $database)
    {
        $query = "SELECT `Users`.`id`, `Users`.`email`, `Users`.`created_at`, `Users`.`updated_at`, `Roles`.`name`
                    FROM `Users`
                    LEFT JOIN `Roles`
                    ON `Roles`.`id` = `Users`.`role_id`";

        return $database->fetchAll($query);
    }

    public function getItem($id, DatabaseInterface $database)
    {
        $query = "SELECT `Users`.`id`, `Users`.`email`, `Users`.`created_at`, `Users`.`updated_at`, `Roles`.`name`
                    FROM `Users`
                    LEFT JOIN `Roles`
                    ON `Roles`.`id` = `Users`.`role_id`
                    WHERE `Users`.`id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->fetch($query, $params);
    }

    public function createItem($data, DatabaseInterface $database)
    {
        $query = "INSERT INTO `Users` (`email`, `password`, `role_id`, `created_at`, `updated_at`)
                    VALUES (:email, :password, :role_id, :created_at, :updated_at)";
        $params =
          [
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT,
              ['cost' => 12]),
            'role_id' => $data['role_id'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function updateItem($data, DatabaseInterface $database)
    {
        $query = "UPDATE `Users` SET `email` = :email, `role_id` = :role_id, `updated_at` = :updated_at WHERE `id` = :id";
        $params =
          [
            'id' => $data['id'],
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function deleteItem($id, DatabaseInterface $database)
    {
        $query = "DELETE FROM `Users` WHERE `id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->query($query, $params);
    }

}