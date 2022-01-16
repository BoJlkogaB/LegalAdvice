<?php
namespace Controllers\Traits;

use Config\Config;
use Database\DatabaseInterface;

trait DatabaseTrait
{

    private DatabaseInterface $database;

    public function setDatabase($database)
    {
        $database = '\Database\\'.$database;
        $this->database = new $database();
    }

    public function getDatabase(): DatabaseInterface
    {
        return $this->database;
    }

    public function useDatabase()
    {
        $this->setDatabase(Config::getDatabase());
    }

}