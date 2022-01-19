<?php
namespace Controllers;

use Core\Controller;
use Traits as GlobalTraits;

class UsersController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct()
    {
        parent::__construct();
        $this->setParamsDataFromPost(['id', 'email', 'password', 'role_id']);
        $this->setModelList(['Roles']);
    }

    public function editAction()
    {
        $this->setParamsDataFromPost(['email', 'role_id']);
        $this->preparedEditAction(true, $this->generationModelList());
    }

}