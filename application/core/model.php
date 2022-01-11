<?php

abstract class Model
{
    abstract public function get_data(IDatabase $database);

    abstract public function get_item($id, IDatabase $database);

    abstract public function create_item($data, IDatabase $database);

    abstract public function update_item($data, IDatabase $database);

    abstract public function delete_item($data, IDatabase $database);
}