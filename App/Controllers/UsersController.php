<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Classes\Traits as GlobalTraits;
use App\Core\View;

class UsersController extends Controller
{

    use Traits\CRUDTrait;
    use Traits\ModelTrait;
    use GlobalTraits\DataTrait;

    public function __construct(View $view)
    {
        if ($_SESSION['USER']['ROLE'] != 1) {
            header('Location: /tables/');
        }
        $this->setParamsDataFromPost(['id', 'email', 'password', 'role_id']);
        $this->setModelList(['Roles']);

        parent::__construct($view);
    }

    public function editAction()
    {
        $this->setParamsDataFromPost(['email', 'role_id']);
        $this->preparedEditAction(true, $this->generationModelList());
    }

    public function createAction()
    {
        $this->setParamsData([
          'email' => $_POST['email'],
          'password' => password_hash($_POST['password'], PASSWORD_BCRYPT,
            ['cost' => 12]),
          'role_id' => $_POST['role_id'],
        ]);
        $this->preparedCreateAction($this->getParamsData());
    }

}