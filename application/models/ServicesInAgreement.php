<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;
use Models\Traits;

class ServicesInAgreement extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => ['id', 'service_id', 'agreement_id',],
        ]);
    }

    public function getData(DatabaseInterface $database)
    {
        $query = [
          $this->getModelName() => ['id'],
          'Services' => ['name', 'service_id'],
          'Agreements' => ['number', 'agreement_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}