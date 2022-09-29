<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Traits as GlobalTraits;

class PartnersController extends Controller
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
        $this->setParamsDataFromPost(['id', 'name', 'phone']);
    }

}