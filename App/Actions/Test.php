<?php
namespace App\Models;

use App\Core\Model;

class Test extends Model
{

    use Traits\CRUDTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => [],
        ]);
    }

}