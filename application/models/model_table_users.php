<?php

class Model_Table_Users extends Model
{
    public function get_data(IDatabase $database)
    {
        $query = "SELECT `Users`.`id`, `Users`.`email`, `Users`.`created_at`, `Users`.`updated_at`, `Roles`.`name`
                    FROM `Users`
                    LEFT JOIN `Roles`
                    ON `Roles`.`id` = `Users`.`role_id`";
        $params = [];

        return $database->get_fetch_all($query, $params);
    }

    public function get_item($id, IDatabase $database)
    {
        $query = "SELECT `Users`.`id`, `Users`.`email`, `Users`.`created_at`, `Users`.`updated_at`, `Roles`.`name`
                    FROM `Users`
                    LEFT JOIN `Roles`
                    ON `Roles`.`id` = `Users`.`role_id`
                    WHERE `Users`.`id` = :id";
        $params =
            [
                'id' => $id
            ];

        return $database->get_fetch($query, $params);
    }

    public function update_item($data, IDatabase $database)
    {
        $query = "UPDATE `Users` SET `email` = :email, `role_id` = :role_id, `updated_at` = :updated_at WHERE `id` = :id";
        $params =
            [
                'id' => $data['id']
            ];

        return $database->get_fetch($query, $params);
    }
}