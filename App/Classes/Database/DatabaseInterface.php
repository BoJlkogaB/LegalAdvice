<?php
namespace App\Classes\Database;

interface DatabaseInterface
{

    public function connection();

    public function query($query, $params);

    public function fetch($query, $params);

    public function fetchAll($query, $params);

}