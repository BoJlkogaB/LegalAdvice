<?php
namespace Database;

interface DatabaseInterface
{

    public function connection();

    public function query($query, $params);

    public function fetch($query, $params);

    public function fetchAll($query, $params);

    public function quote($input): string;

    public function quoteIdentifier($input): string;

}