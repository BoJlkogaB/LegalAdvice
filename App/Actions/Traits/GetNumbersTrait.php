<?php
namespace App\Models\Traits;

use App\Classes\Database\DatabaseInterface;

trait GetNumbersTrait
{

    public function getNumbers(DatabaseInterface $database)
    {
        $data = [$this->getModelName() => ['id', 'number']];

        return $database->fetchAll($this->getSimpleSelectQuery($data));
    }

}