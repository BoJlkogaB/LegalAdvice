<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class ContractsController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost([
          'id', 'partner_id', 'number', 'date_of_singing',
        ]);
        $this->setModelList(['Partners']);
    }

}