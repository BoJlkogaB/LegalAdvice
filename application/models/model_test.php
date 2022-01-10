<?php

class Model_Test extends Model
{
    public function get_data($data = null): array
    {
        return array();
    }

    public function test($DBconnect)
    {
        require($_SERVER["DOCUMENT_ROOT"] . '/scripts/php/request.php');

        $query = "";
        $query = "";
        $params = [];
        $data = getFetchAll($query, $params, $DBconnect);

        return $data;
    }
}