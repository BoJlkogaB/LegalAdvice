<?php
namespace App\Actions;

use App\Core\Model;
use App\Classes\Database\DatabaseInterface;
use App\Actions\Traits;

class Contracts extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => ['id', 'partner_id', 'number', 'date_of_singing',],
        ]);
    }

    public function getAll(DatabaseInterface $database): array
    {
        $query = [
          $this->getModelName() => ['id', 'number', 'date_of_singing'],
          'Partners' => ['name', 'phone', 'partner_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}