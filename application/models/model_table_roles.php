<?php

class Model_Table_Roles extends Model
{
    public function get_data(IDatabase $database)
    {
        $query = "SELECT `id`, `name`, `created_at`, `updated_at` FROM `Roles`";
        $params = [];

        return $database->get_fetch_all($query, $params);
    }

    public function get_item($id, IDatabase $database)
    {
        $query = "SELECT `id`, `name`, `created_at`, `updated_at` FROM `Roles` WHERE `id` = :id";
        $params =
            [
                'id' => $id
            ];

        return $database->get_fetch($query, $params);
    }

    public function create_item($data, IDatabase $database)
    {
        $query = "INSERT INTO `Roles` (`name`, `created_at`, `updated_at`)
                    VALUES (:name, :created_at, :updated_at)";

        $params =
            [
                'name' => $data['name'],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ];

        return $database->request($query, $params);
    }

    public function update_item($data, IDatabase $database)
    {
        $query = "UPDATE `Roles` SET `name` = :name, `updated_at` = :updated_at WHERE `id` = :id";
        $params =
            [
                'id' => $data['id'],
                'name' => $data['name'],
                'updated_at' => date("Y-m-d H:i:s"),
            ];

        return $database->request($query, $params);
    }

    public function delete_item($data, IDatabase $database)
    {
        $query = "DELETE FROM `Roles` WHERE `id` = :id";
        $params =
            [
                'id' => $data['id']
            ];

        return $database->request($query, $params);
    }
}