<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Classes\Traits as GlobalTraits;
use App\Core\View;

class EmployeesController extends Controller
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
          'id', 'post_id', 'department_id', 'name', 'surname', 'lastname',
          'gender', 'phone', 'salary', 'date_of_birth', 'date_of_employment',
          'date_of_dismissal',
        ]);
        $this->setModelList(['Posts', 'Departments']);

        parent::__construct($view);
    }

}