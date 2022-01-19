<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class AgreementsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost([
          'id', 'customer_id', 'number', 'date_of_singing',
        ]);
        $this->setModelList(['Customers']);
    }

}