<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;

class Contracts extends Model
{

    public function getData(DatabaseInterface $database)
    {
        $query = "SELECT `Contracts`.`id`, `Contracts`.`number`, `Contracts`.`date_of_singing`, `Contracts`.`created_at`, `Contracts`.`updated_at`, `Partners`.`name`, `Partners`.`phone`
                    FROM `Contracts`
                    LEFT JOIN `Partners`
                    ON `Partners`.`id` = `Contracts`.`partner_id`";

        return $database->fetchAll($query);
    }

    public function getItem($id, DatabaseInterface $database)
    {
        $query = "SELECT `id`, `partner_id`, `number`, `date_of_singing`, `created_at`, `updated_at` FROM `Contracts` WHERE `id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->fetch($query, $params);
    }

    public function createItem($data, DatabaseInterface $database)
    {
        $query = "INSERT INTO `Contracts` (`partner_id`, `number`, `date_of_singing`, `created_at`, `updated_at`)
                    VALUES (:partner_id, :number, :date_of_singing, :created_at, :updated_at)";
        $params =
          [
            'partner_id' => $data['partner_id'],
            'number' => $data['number'],
            'date_of_singing' => $data['date_of_singing'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function updateItem($data, DatabaseInterface $database)
    {
        $query = "UPDATE `Contracts` SET `partner_id` = :partner_id, `number` = :number, `date_of_singing` = :date_of_singing, `updated_at` = :updated_at WHERE `id` = :id";
        $params =
          [
            'id' => $data['id'],
            'partner_id' => $data['partner_id'],
            'number' => $data['number'],
            'date_of_singing' => $data['date_of_singing'],
            'updated_at' => date("Y-m-d H:i:s"),
          ];

        return $database->query($query, $params);
    }

    public function deleteItem($id, DatabaseInterface $database)
    {
        $query = "DELETE FROM `Contracts` WHERE `id` = :id";
        $params =
          [
            'id' => $id,
          ];

        return $database->query($query, $params);
    }

}