<?php
namespace Controllers\Traits;

trait CRUDTrait
{

    use DatabaseTrait;
    use AdminViewTrait;

    public function indexAction()
    {
        $this->setData([
          'DATA' => $this->getModel()->getData($this->getDatabase()),
        ]);
        $this->useAdminView();
    }

    public function preparedNewAction(array $options = [])
    {
        $data = [];
        if ($options) {
            foreach ($options as $key => $option) {
                $data[$key] = $option;
            }
        }
        $this->setData($data);
        $this->useAdminView('new');
    }

    public function preparedCreateAction(array $data)
    {
        $this->setData($data);
        $this->getModel()->createItem($this->getData(), $this->getDatabase());
        if ($_SERVER['HTTP_REFERER']) {
            header('Location: /'.$this->getModelName().'/');
        }
    }

    public function preparedEditAction(
      bool $useData = true,
      array $options = []
    ) {
        $data = [];
        if ($useData) {
            $data['DATA'] = $this->getModel()
              ->getItem($_GET['id'], $this->getDatabase());
        }
        if ($options) {
            foreach ($options as $key => $option) {
                $data[$key] = $option;
            }
        }
        $this->setData($data);
        $this->useAdminView('edit');
    }

    public function preparedUpdateAction(array $data)
    {
        $this->setData($data);
        $this->getModel()->updateItem($this->getData(), $this->getDatabase());
        if (@$_SERVER['HTTP_REFERER'] != null) {
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    }

    public function deleteAction()
    {
        $this->getModel()->deleteItem($_GET['id'], $this->getDatabase());
        if ($_SERVER['HTTP_REFERER']) {
            header('Location: /'.$this->getModelName().'/');
        }
    }

}