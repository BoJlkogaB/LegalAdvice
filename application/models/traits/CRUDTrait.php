<?php
namespace Models\Traits;

use Database\DatabaseInterface;
use Traits as GlobalTraits;

trait CRUDTrait
{

    use RequestCollectorTrait;
    use GlobalTraits\ParamsDataTrait;

    public function getData(DatabaseInterface $database)
    {
        return $database->fetchAll($this->getSelectQuery($this->getParamsData()));
    }

    public function getItem($id, DatabaseInterface $database)
    {
        return $database->fetch($this->getSelectQuery($this->getParamsData(),
          true),
          ['id' => $id]);
    }

    public function createItem($data, DatabaseInterface $database)
    {
        $database->query($this->getCreateQuery($data), $this->getParams($data));
    }

    public function updateItem($data, DatabaseInterface $database)
    {
        $database->query($this->getUpdateQuery($data),
          $this->getParams($data));
    }

    public function deleteItem($id, DatabaseInterface $database)
    {
        $database->query($this->getDeleteQuery(), ['id' => $id]);
    }

}