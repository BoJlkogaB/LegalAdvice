<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class ServicesController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost(['id', 'name', 'price']);
    }

}