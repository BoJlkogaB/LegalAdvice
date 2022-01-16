<?php
namespace Core;

use Database\DatabaseInterface;

abstract class Model
{

    abstract public function getData(DatabaseInterface $database);

    abstract public function getItem($id, DatabaseInterface $database);

    abstract public function createItem($data, DatabaseInterface $database);

    abstract public function updateItem($data, DatabaseInterface $database);

    abstract public function deleteItem($id, DatabaseInterface $database);

}