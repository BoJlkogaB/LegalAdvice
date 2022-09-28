<?php
namespace Models;

use Database\DatabaseInterface;
use Traits as GlobalTraits;

class Authentication
{

    use GlobalTraits\DataTrait;
    use GlobalTraits\ModelNameTrait;

    public function __construct($modelName)
    {
        //    TODO: Убрать передачу имени модели и вшить в стандартный функционал
        $this->setModelName($modelName);
    }

    public function checkAction($data, DatabaseInterface $database)
    {
        $query = "SELECT `id`, `email`, `password`, `role_id` FROM `Users` WHERE `email` = :email";
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

}