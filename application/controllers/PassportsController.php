<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class PassportsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost([
          'id', 'employee_id', 'number', 'series', 'issued_by_whom',
          'date_of_issue',
        ]);
        $this->setModelList(['Employees' => 'employee']);
    }

}