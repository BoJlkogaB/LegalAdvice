<?php
namespace App\Controllers\Traits;

use App\Classes\Database\DatabaseInterface;

trait DatabaseTrait
{

    private DatabaseInterface $database;

    public function setDatabase($database)
    {
        $database = 'App\\Classes\\Database\\'.$database;
        $this->database = new $database();
    }

    public function getDatabase(): DatabaseInterface
    {
        return $this->database;
    }

    public function useDatabase()
    {
        $this->setDatabase($_ENV['DBMS_NAME']);
    }

}