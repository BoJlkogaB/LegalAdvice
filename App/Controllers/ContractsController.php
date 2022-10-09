<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Classes\Traits as GlobalTraits;
use App\Core\View;

class ContractsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use Traits\ExcelExportTrait;
    use GlobalTraits\DataTrait;

    public function __construct(View $view)
    {
        if ($_SESSION['USER']['ROLE'] != 1 && $_SESSION['USER']['ROLE'] != 2 && $_SESSION['USER']['ROLE'] != 3) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost([
          'id', 'partner_id', 'number', 'date_of_singing',
        ]);
        $this->setModelList(['Partners']);

        parent::__construct($view);
    }

}