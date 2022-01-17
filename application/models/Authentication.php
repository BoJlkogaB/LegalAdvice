<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;

class Authentication extends Model
{

    use Traits\CRUDTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setRequestData([
          $this->getModelName() => [],
        ]);
    }

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

}