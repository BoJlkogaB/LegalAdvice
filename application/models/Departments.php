<?php
namespace Models;

use Core\Model;
use Database\DatabaseInterface;
use Models\Traits;

class Departments extends Model
{

    use Traits\CRUDTrait;
    use Traits\GetNamesTrait;

    public function __construct($modelName = '')
    {
        parent::__construct($modelName);
        $this->setParamsData([
          $this->getModelName() => ['id', 'name'],
        ]);
    }

}