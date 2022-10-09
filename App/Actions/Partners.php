<?php
namespace App\Actions;

use App\Core\Model;
use App\Actions\Traits;

class Partners extends Model
{

    use Traits\CRUDTrait;
    use Traits\ExportDataTrait;
    use Traits\GetNamesTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => ['id', 'name', 'phone'],
        ]);
    }

}