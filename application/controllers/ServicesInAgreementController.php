<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class ServicesInAgreementController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost(['id', 'agreement_id', 'service_id']);
        $this->setModelList(['Agreements' => 'number', 'Services']);
    }

}