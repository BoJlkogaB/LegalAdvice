<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;

class Partners extends Model
{

    public function getData(DatabaseInterface $database)
    {
        $query = "SELECT `id`, `name`, `phone`, `created_at`, `updated_at` FROM `Partners`";

        return $database->fetchAll($query);
    }

    public function getNames(DatabaseInterface $database)
    {
        $query = "SELECT `id`, `name` FROM `Partners`";

        return $database->fetchAll($query);
    }

    public function getItem($id, DatabaseInterface $database)
    {
        $query = "SELECT `id`, `name`, `phone`, `created_at`, `updated_at` FROM `Partners` WHERE `id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->fetch($query, $params);
    }

    public function createItem($data, DatabaseInterface $database)
    {
        $query = "INSERT INTO `Partners` (`name`, `phone`, `created_at`, `updated_at`)
                    VALUES (:name, :phone, :created_at, :updated_at)";
        $params =
          [
            'name' => $data['name'],
            'phone' => $data['phone'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function updateItem($data, DatabaseInterface $database)
    {
        $query = "UPDATE `Partners` SET `name` = :name, `phone` = :phone, `updated_at` = :updated_at WHERE `id` = :id";
        $params =
          [
            'id' => $data['id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function deleteItem($id, DatabaseInterface $database)
    {
        $query = "DELETE FROM `Partners` WHERE `id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->query($query, $params);
    }

}