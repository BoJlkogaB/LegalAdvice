<?php
namespace Controllers\Traits;

trait PreparedActionsTrait
{

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
        if (empty($data['id'])) {
            unset($data['id']);
        }
        $this->setData($data);
        $this->getModel()->create($this->getAll(), $this->getDatabase());
        //    TODO: Через ajax создавать запись на сервере и через DOM у клиента, чтобы убрать редирект
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
              ->getById($_GET['id'], $this->getDatabase());
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
        $this->getModel()->update($this->getAll(), $this->getDatabase());
        //    TODO: Через ajax изменять запись на сервере и через DOM у клиента, чтобы убрать редирект
        if (@$_SERVER['HTTP_REFERER'] != null) {
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    }

}