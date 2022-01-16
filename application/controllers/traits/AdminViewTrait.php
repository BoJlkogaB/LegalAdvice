<?php
namespace Controllers\Traits;

trait AdminViewTrait
{

    public function useAdminView($view = 'index')
    {
        $this->getView()->generate(
          'table/'.$this->getModelName().'/'.$view.'.php',
          'templates/admin/template.php',
          $this->getData()
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