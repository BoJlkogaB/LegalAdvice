<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;
use Models\Traits;

class Users extends Model
{

    use Traits\CRUDTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setRequestData([
          $this->getModelName() => ['id', 'email', 'role_id',],
        ]);
    }

    public function getData(DatabaseInterface $database)
    {
        $query = [
          $this->getModelName() => ['id', 'email'],
          'Roles' => ['name', 'role_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}