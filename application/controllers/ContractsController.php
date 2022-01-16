<?php
namespace Controllers;

use Core\Controller;
use Models\Partners;

class ContractsController extends Controller
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
        $roles = new Partners();
        $this->preparedEditAction(true, [
          'PARTNERS' => $roles->getNames($this->getDatabase()),
        ]);
    }

    public function newAction()
    {
        $roles = new Partners();
        $this->preparedNewAction([
          'PARTNERS' => $roles->getNames($this->getDatabase()),
        ]);
    }

    public function createAction()
    {
        $this->preparedCreateAction([
          'partner_id' => $_POST['partner'],
          'number' => $_POST['number'],
          'date_of_singing' => $_POST['date_of_singing'],
        ]);
    }

    public function updateAction()
    {
        $this->preparedUpdateAction([
          'id' => $_POST['id'],
          'partner_id' => $_POST['partner'],
          'number' => $_POST['number'],
          'date_of_singing' => $_POST['date_of_singing'],
        ]);
    }

}