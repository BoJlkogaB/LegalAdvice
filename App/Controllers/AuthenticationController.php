<?php
namespace App\Controllers;

use App\Controllers\Traits\StandardViewTrait;
use App\Core\Controller;
use App\Traits as GlobalTraits;

class AuthenticationController extends Controller
{

    use StandardViewTrait;
    use Traits\ModelTrait;
    use Traits\DatabaseTrait;
    use GlobalTraits\DataTrait;

    public function beforeAction(): void
    {
        $this->useDatabase();
        $this->setModelName('Authentication');
    }

    public function indexAction()
    {
        $this->useStandardView('authentication');
    }

    public function checkAction()
    {
        $this->setModel($this->getModelName());
        $this->setData
        ([
          'email' => $_POST['email'],
          'password' => $_POST['password'],
        ]);
        $user = $this->getModel()
          ->checkAction($this->getAll(), $this->getDatabase());
        if ($user) {
            $_SESSION['USER']['ID'] = $user['id'];
            $_SESSION['USER']['EMAIL'] = $user['email'];
            $_SESSION['USER']['ROLE'] = $user['role_id'];
            header('Location: /tables/');
        } else {
            header('Location: /authentication/');
        }
    }

}