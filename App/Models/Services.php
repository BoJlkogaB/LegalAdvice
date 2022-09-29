<?php
namespace App\Models;

use App\Core\Model;
use App\Models\Traits;

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