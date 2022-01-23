<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class CustomersController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['USER']['ROLE'] != 1 && $_SESSION['USER']['ROLE'] != 2 && $_SESSION['USER']['ROLE'] != 3 && $_SESSION['USER']['ROLE'] != 5) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost(['id', 'name', 'phone']);
    }

}