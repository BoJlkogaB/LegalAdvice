<?php
namespace Database;

interface DatabaseInterface
{

    public function connect();

    public function query($query, $params);

    public function fetch($query, $params);

    public function fetchAll($query, $params);

}