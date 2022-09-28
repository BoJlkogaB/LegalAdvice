<?php
namespace Database;

use Config\Config;
use PDO;
use PDOException;

class MySQL implements DatabaseInterface
{

    private PDO $connection;

    public function __construct()
    {
        $host = Config::getDatabaseHost();
        $dbname = Config::getDatabaseDBName();
        $login = Config::getDatabaseLogin();
        $password = Config::getDatabasePassword();

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
        } catch (PDOException $e) {
            echo "Error!: ".$e->getMessage();
            //  Убрать die() и передать обработку ошибок клиентской части
            die();
        }
    }

    public function connection(): PDO
    {
        return $this->connection;
    }

    public function query($query, $params = null): bool
    {
        $stmt = $this->connection->prepare($query);

        return $stmt->execute($params);
    }

    public function fetch($query, $params = null)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);

        return $stmt->fetch(PDO::FETCH_LAZY);
    }

    public function fetchAll($query, $params = null)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_NAMED);
    }

}