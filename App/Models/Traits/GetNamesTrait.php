<?php
namespace Models\Traits;

use Database\DatabaseInterface;

trait GetNamesTrait
{

    public function getNames(DatabaseInterface $database)
    {
        $data = [$this->getModelName() => ['id', 'name']];

        return $database->fetchAll($this->getSimpleSelectQuery($data));
    }

}