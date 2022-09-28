<?php
namespace Models\Traits;

use Database\DatabaseInterface;

trait ExportDataTrait
{

    public function getExportData(DatabaseInterface $database)
    {
        return $database->fetchAll($this->getSelectQuery($this->getParamsData()));
    }

}