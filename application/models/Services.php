<?php
namespace Models;

use Core\Model;
use Models\Traits;

class Services extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;
    use Traits\GetNamesTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => ['id', 'name', 'price',],
        ]);
    }

}