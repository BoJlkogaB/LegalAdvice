<?php

class Model_Test extends Model
{
    public function test(IDatabase $database)
    {
        $query = "";
        $params = [];

        return $database->request($query, $params);
    }
}