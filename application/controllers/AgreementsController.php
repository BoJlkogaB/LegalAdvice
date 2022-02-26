<?php
namespace Controllers;

use Controllers\Traits;
use Core\Controller;
use Traits as GlobalTraits;

class AgreementsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use Traits\ExcelExportTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['USER']['ROLE'] != 1 && $_SESSION['USER']['ROLE'] != 2 && $_SESSION['USER']['ROLE'] != 3 && $_SESSION['USER']['ROLE'] != 5) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost([
          'id', 'customer_id', 'number', 'date_of_singing',
        ]);
        $this->setModelList(['Customers']);
    }

}