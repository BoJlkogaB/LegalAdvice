<?php
namespace App\Controllers\Traits;

use App\Classes\Export\ExcelExport;

trait ExcelExportTrait
{

    public function excelExportAction()
    {
        ExcelExport::export($this->getModel()->getExportData($this->getDatabase()),
          $this->getModelName());
    }

}