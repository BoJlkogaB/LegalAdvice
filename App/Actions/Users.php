<?php
namespace App\Models;

use App\Core\Model;
use App\Classes\Database\DatabaseInterface;
use App\Models\Traits;

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

    public function getAll(DatabaseInterface $database): array
    {
        $query = [
          $this->getModelName() => ['id', 'email'],
          'Roles' => ['name', 'role_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}