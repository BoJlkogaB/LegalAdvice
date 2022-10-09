<?php
namespace App\Actions;

use App\Core\Model;
use App\Classes\Database\DatabaseInterface;
use App\Actions\Traits;

class Agreements extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;
    use Traits\GetNumbersTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => [
            'id', 'customer_id', 'number', 'date_of_singing',
          ],
        ]);
    }

    public function getAll(DatabaseInterface $database): array
    {
        $query = [
          $this->getModelName() => ['id', 'number', 'date_of_singing'],
          'Customers' => ['name', 'phone', 'customer_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}