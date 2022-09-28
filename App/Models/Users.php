<?php
namespace Models;

use App\Core\Model;
use Database\DatabaseInterface;
use Models\Traits;

class Users extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => ['id', 'email', 'role_id',],
        ]);
    }

    public function getAll(DatabaseInterface $database)
    {
        $query = [
          $this->getModelName() => ['id', 'email'],
          'Roles' => ['name', 'role_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}