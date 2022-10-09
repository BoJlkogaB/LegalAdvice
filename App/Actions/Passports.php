<?php
namespace App\Actions;

use App\Core\Model;
use App\Classes\Database\DatabaseInterface;
use App\Actions\Traits;

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

    public function getAll(DatabaseInterface $database): array
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