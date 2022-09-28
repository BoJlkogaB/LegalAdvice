<?php
namespace Controllers;

use App\Core\Controller;
use Traits as GlobalTraits;

class ContractsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use Traits\ExcelExportTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['USER']['ROLE'] != 1 && $_SESSION['USER']['ROLE'] != 2 && $_SESSION['USER']['ROLE'] != 3) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost([
          'id', 'partner_id', 'number', 'date_of_singing',
        ]);
        $this->setModelList(['Partners']);
    }

}