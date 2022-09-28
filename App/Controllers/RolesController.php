<?php
namespace Controllers;

use App\Core\Controller;
use Traits as GlobalTraits;

class RolesController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use Traits\ExcelExportTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['USER']['ROLE'] != 1) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost(['id', 'name']);
    }

}