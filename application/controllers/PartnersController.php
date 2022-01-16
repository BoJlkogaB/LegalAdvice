<?php
namespace Controllers;

use Core\Controller;

class PartnersController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use Traits\DataTrait;

    public function beforeAction()
    {
        $this->useModel();
        $this->useDatabase();
    }

    public function editAction()
    {
        $this->preparedEditAction();
    }

    public function newAction()
    {
        $this->preparedNewAction();
    }

    public function createAction()
    {
        $this->preparedCreateAction([
          'name' => $_POST['name'],
          'phone' => $_POST['phone'],
        ]);
    }

    public function updateAction()
    {
        $this->preparedUpdateAction([
          'id' => $_POST['id'],
          'name' => $_POST['name'],
          'phone' => $_POST['phone'],
        ]);
    }

}