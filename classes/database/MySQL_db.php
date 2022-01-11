<?php
class MySQL_db implements IDatabase
{
    private $connect;

    public function __construct()
    {
        try
        {
            $this->connect = new PDO('mysql:host=localhost;dbname=LegalAdvice', 'root', '28811310Dd');
        }
        catch (PDOException $e)
        {
            echo "Error!: " . $e->getMessage();
            //  Убрать die() и передать обработку ошибок клиентской части
            die();
        }
    }

    public function get_connect(): PDO
    {
        return $this->connect;
    }

    public function request($query, $params): bool
    {
        $stmt = $this->connect->prepare($query);
        return $stmt->execute($params);
    }

    public function get_fetch($query, $params)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_LAZY);
    }

    public function get_fetch_all($query, $params)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_NAMED);
    }
}