<?php
namespace Models\Traits;

use Database\DatabaseInterface;

trait CRUDTrait
{

    use RequestCollectorTrait;
    use PrepareDataTrait;

    public function getData(DatabaseInterface $database)
    {
        return $database->fetchAll($this->getSelectQuery($this->getRequestData()));
    }

    public function getItem($id, DatabaseInterface $database)
    {
        return $database->fetch($this->getSelectQuery($this->getRequestData(),
          true), ['id' => $id]);
    }

    public function createItem($data, DatabaseInterface $database)
    {
        return $database->query($this->getCreateQuery($data),
          $this->getParams($data));
    }

    public function updateItem($data, DatabaseInterface $database)
    {
        return $database->query($this->getUpdateQuery($data),
          $this->getParams($data));
    }

    public function deleteItem($id, DatabaseInterface $database)
    {
        return $database->query($this->getDeleteQuery(), ['id' => $id]);
    }

}