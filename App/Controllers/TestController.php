<?php
namespace App\Controllers;

use App\Core\Controller;

class TestController extends Controller
{

    public function indexAction()
    {
//        $options = [
//          'cost' => 12,
//        ];
//        $hash = password_hash("SecretUserPassword789!", PASSWORD_BCRYPT,
//          $options);
//        echo $hash.'</br>';
//        echo password_verify("SecretUserPassword789!", $hash);
//        $database = new MySQL();
//        $this->setModel('Test');
//        $this->setData
//        (
//          [
//            'DATA' => $this->getModel()->test($database),
//          ]
//        );
        $this->getView()
          ->generate(
            'test.php',
            'templates/standard/template.php',
            $this->getAll()
          );
    }

}