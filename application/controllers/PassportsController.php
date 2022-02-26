<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class PassportsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use Traits\ExcelExportTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['USER']['ROLE'] != 1 && $_SESSION['USER']['ROLE'] != 2 && $_SESSION['USER']['ROLE'] != 4) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost([
          'id', 'employee_id', 'number', 'series', 'issued_by_whom',
          'date_of_issue',
        ]);
        $this->setModelList(['Employees' => 'employee']);
    }

}