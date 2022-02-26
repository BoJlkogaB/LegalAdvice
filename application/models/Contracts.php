<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;
use Models\Traits;

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

    public function getData(DatabaseInterface $database)
    {
        $query = [
          $this->getModelName() => ['id', 'number', 'date_of_singing'],
          'Partners' => ['name', 'phone', 'partner_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}