<?php
namespace Export;

class ExcelExport implements ExportInterface
{

    public static function export($data, $modelName = 'export')
    {
        $fileName = "$modelName-".date('d-m-Y').".xls";
        header('Content-Type: text/xls; charset=utf-8');
        header('Content-Disposition: attachment; filename='.$fileName);
        $heading = false;
        foreach ($data as $item) {
            if (!$heading) {
                echo implode("\t", array_keys($item))."\n";
                $heading = true;
            }
            echo implode("\t", array_values($item))."\n";
        }
    }

}
