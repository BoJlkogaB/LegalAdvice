<?php
namespace Controllers\Traits;

trait AdminViewTrait
{

    public function useAdminView($view = 'index')
    {
        $this->getView()->setData($this->getData());
        $this->getView()->setModelName($this->getModelName());
        $this->getView()->generate(
          'table/'.$this->getModelName().'/'.$view.'.php',
          'templates/admin/template.php'
        );
    }

    public function useSimpleAdminView($view = 'index')
    {
        $this->getView()->generate(
          'table/'.$view.'.php',
          'templates/admin/template.php'
        );
    }

}