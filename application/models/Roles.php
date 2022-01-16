<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;

class Roles extends Model
{

    public function getData(DatabaseInterface $database)
    {
        $query = "SELECT `id`, `name`, `created_at`, `updated_at` FROM `Roles`";

        return $database->fetchAll($query);
    }

    public function getNames(DatabaseInterface $database)
    {
        $query = "SELECT `id`, `name` FROM `Roles`";

        return $database->fetchAll($query);
    }

    public function getItem($id, DatabaseInterface $database)
    {
        $query = "SELECT `id`, `name`, `created_at`, `updated_at` FROM `Roles` WHERE `id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->fetch($query, $params);
    }

    public function createItem($data, DatabaseInterface $database)
    {
        $query = "INSERT INTO `Roles` (`name`, `created_at`, `updated_at`)
                    VALUES (:name, :created_at, :updated_at)";
        $params =
          [
            'name' => $data['name'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function updateItem($data, DatabaseInterface $database)
    {
        $query = "UPDATE `Roles` SET `name` = :name, `updated_at` = :updated_at WHERE `id` = :id";
        $params =
          [
            'id' => $data['id'],
            'name' => $data['name'],
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function deleteItem($id, DatabaseInterface $database)
    {
        $query = "DELETE FROM `Roles` WHERE `id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->query($query, $params);
    }

}