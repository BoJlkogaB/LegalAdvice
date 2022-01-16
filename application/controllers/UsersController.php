<?php
namespace Controllers;

use Core\Controller;
use Models\Roles;

class UsersController extends Controller
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
        $roles = new Roles();
        $this->preparedEditAction(true, [
          'ROLES' => $roles->getNames($this->getDatabase()),
        ]);
    }

    public function newAction()
    {
        $roles = new Roles();
        $this->preparedNewAction([
          'ROLES' => $roles->getNames($this->getDatabase()),
        ]);
    }

    public function createAction()
    {
        $this->preparedCreateAction([
          'email' => $_POST['email'],
          'password' => $_POST['password'],
          'role_id' => $_POST['role'],
        ]);
    }

    public function updateAction()
    {
        $this->preparedUpdateAction([
          'id' => $_POST['id'],
          'email' => $_POST['email'],
          'role_id' => $_POST['role'],
        ]);
    }

}