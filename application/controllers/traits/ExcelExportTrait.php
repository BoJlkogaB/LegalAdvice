<?php
namespace Controllers\Traits;

use Export\ExcelExport;

trait ExcelExportTrait
{

    public function excelExportAction()
    {
        ExcelExport::export($this->getModel()->getExportData($this->getDatabase()),
          $this->getModelName());
    }

}