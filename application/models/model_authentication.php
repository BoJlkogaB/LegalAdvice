<?php

class Model_Authentication extends Model
{
    public function check_authentication($data, IDatabase $database)
    {
        $query = "SELECT `id`, `email`, `password` FROM `Users` WHERE `email` = :email";
        $params =
            [
                ':email' => $data['email']
            ];

        $user = $database->get_fetch($query, $params);

        if (password_verify($data['password'], $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }
}