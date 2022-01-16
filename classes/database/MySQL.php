<?php
namespace Database;

use PDO;
use PDOException;

class MySQL implements DatabaseInterface
{

    private PDO $connect;

    public function __construct()
    {
        try {
            $this->connect = new PDO('mysql:host=localhost;dbname=LegalAdvice',
              'root', '28811310Dd');
        } catch (PDOException $e) {
            echo "Error!: ".$e->getMessage();
            //  Убрать die() и передать обработку ошибок клиентской части
            die();
        }
    }

    public function connect(): PDO
    {
        return $this->connect;
    }

    public function query($query, $params = null): bool
    {
        $stmt = $this->connect->prepare($query);

        return $stmt->execute($params);
    }

    public function fetch($query, $params = null)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute($params);

        return $stmt->fetch(PDO::FETCH_LAZY);
    }

    public function fetchAll($query, $params = null)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_NAMED);
    }

}