<?php
namespace App\Controllers\Traits;

use App\Traits as GlobalTraits;

trait CRUDTrait
{

    use DatabaseTrait;
    use AdminViewTrait;
    use PreparedActionsTrait;
    use ExtraModelListItemsTrait;
    use GlobalTraits\ParamsDataTrait;

    public function beforeAction()
    {
        $this->useModel();
        $this->useDatabase();
    }

    public function indexAction()
    {
        $this->setData([
          'DATA' => $this->getModel()->getAll($this->getDatabase()),
        ]);
        $this->useAdminView();
    }

    public function newAction()
    {
        $this->preparedNewAction($this->generationModelList());
    }

    public function createAction()
    {
        $this->preparedCreateAction($this->getParamsData());
    }

    public function editAction()
    {
        $this->preparedEditAction(true, $this->generationModelList());
    }

    public function updateAction()
    {
        $this->preparedUpdateAction($this->getParamsData());
    }

    public function deleteAction()
    {
        $this->getModel()->delete($_GET['id'], $this->getDatabase());
        //    TODO: Через ajax удалять запись на сервере и из DOM у клиента, чтобы убрать редирект
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: /'.$this->getModelName().'/');
        }
    }

    public function getDataAction()
    {
        $this->setData([
          'DATA' => $this->getModel()->getAll($this->getDatabase()),
        ]);
        echo json_encode($this->getAll());
    }

}