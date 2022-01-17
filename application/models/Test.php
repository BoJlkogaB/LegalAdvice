<?php
namespace Models;

use Core\Model;

class Test extends Model
{

    use Traits\CRUDTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setRequestData([
          $this->getModelName() => [],
        ]);
    }

}