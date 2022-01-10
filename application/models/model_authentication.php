<?php

class Model_Authentication extends Model
{
    public function check_authentication($data, $DBconnect)
    {
        require($_SERVER["DOCUMENT_ROOT"] . '/scripts/php/request.php');
        $query = "SELECT `id`, `email`, `password` FROM `Users` WHERE `email` = :email";
        $params =
            [
                ':email' => $data['email']
            ];

        $user = getFetch($query, $params, $DBconnect);

        if (password_verify($data['password'], $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }
}