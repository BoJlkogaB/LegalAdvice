<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class EmployeesController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost([
          'id', 'post_id', 'department_id', 'name', 'surname', 'lastname',
          'gender', 'phone', 'salary', 'date_of_birth', 'date_of_employment',
          'date_of_dismissal',
        ]);
        $this->setModelList(['Posts', 'Departments']);
    }

}