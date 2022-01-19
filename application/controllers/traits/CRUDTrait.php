<?php
namespace Controllers\Traits;

use Traits as GlobalTraits;

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
          'DATA' => $this->getModel()->getData($this->getDatabase()),
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
        $this->getModel()->deleteItem($_GET['id'], $this->getDatabase());
        if ($_SERVER['HTTP_REFERER']) {
            header('Location: /'.$this->getModelName().'/');
        }
    }

}