<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Classes\Traits as GlobalTraits;
use App\Core\View;

class PassportsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use Traits\ExcelExportTrait;
    use GlobalTraits\DataTrait;

    public function __construct(View $view)
    {
        if ($_SESSION['USER']['ROLE'] != 1 && $_SESSION['USER']['ROLE'] != 2 && $_SESSION['USER']['ROLE'] != 4) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost([
          'id', 'employee_id', 'number', 'series', 'issued_by_whom',
          'date_of_issue',
        ]);
        $this->setModelList(['Employees' => 'employee']);

        parent::__construct($view);
    }

}