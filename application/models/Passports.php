<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;
use Models\Traits;

class Passports extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => [
            'id', 'employee_id', 'number', 'series', 'issued_by_whom',
            'date_of_issue',
          ],
        ]);
    }

    public function getData(DatabaseInterface $database)
    {
        $query = [
          $this->getModelName() => [
            'id', 'number', 'series', 'date_of_issue',
          ],
          'Employees' => [
            'name', 'surname', 'lastname', 'phone', 'employee_id',
          ],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}