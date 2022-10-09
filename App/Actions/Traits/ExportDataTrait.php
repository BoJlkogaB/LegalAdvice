<?php
namespace App\Actions\Traits;

use App\Classes\Database\DatabaseInterface;

trait ExportDataTrait
{

    public function getExportData(DatabaseInterface $database)
    {
        return $database->fetchAll($this->getSelectQuery($this->getParamsData()));
    }

}