<?php
namespace App\Actions;

use App\Core\Model;
use App\Classes\Database\DatabaseInterface;
use App\Actions\Traits;

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

    public function getAll(DatabaseInterface $database): array
    {
        $query = [
          $this->getModelName() => ['id'],
          'Services' => ['name', 'service_id'],
          'Agreements' => ['number', 'agreement_id'],
        ];

        return $database->fetchAll($this->getSelectQuery($query));
    }

}