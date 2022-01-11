<?php
interface IDatabase
{
    public function get_connect();

    public function request($query, $params);

    public function get_fetch($query, $params);

    public function get_fetch_all($query, $params);
}