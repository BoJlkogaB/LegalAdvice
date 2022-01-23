<?php
namespace Core;

use Database\DatabaseInterface;
use Traits;

abstract class Model
{

    use Traits\ModelNameTrait;

    public function __construct($modelName)
    {
        //    TODO: Убрать передачу имени модели и вшить в стандартный функционал
        $this->setModelName($modelName);
    }

    abstract public function getData(DatabaseInterface $database);

    abstract public function getItem($id, DatabaseInterface $database);

    abstract public function createItem($data, DatabaseInterface $database);

    abstract public function updateItem($data, DatabaseInterface $database);

    abstract public function deleteItem($id, DatabaseInterface $database);

}