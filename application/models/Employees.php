<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;
use Models\Traits;

class Employees extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => [
            'id', 'post_id', 'department_id', 'name', 'surname', 'lastname',
            'gender', 'phone', 'salary', 'date_of_birth', 'date_of_employment',
            'date_of_dismissal',
          ],
        ]);
    }

    public function getData(DatabaseInterface $database)
    {
        $query = [
          $this->getModelName() => [
            'id', 'name', 'surname', 'lastname',
            'gender', 'phone', 'salary', 'date_of_birth', 'date_of_employment',
            'date_of_dismissal',
          ],
          'Posts' => ['name', 'post_id'],
          'Departments' => ['name', 'department_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

    public function getEmployees(DatabaseInterface $database)
    {
        $query = [
          $this->getModelName() => [
            'id', 'name', 'surname', 'lastname', 'phone',
          ],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}