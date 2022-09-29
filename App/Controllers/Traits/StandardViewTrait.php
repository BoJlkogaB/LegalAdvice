<?php
namespace App\Controllers\Traits;

trait StandardViewTrait
{

    public function useStandardView($view)
    {
        $this->getView()
          ->generate($view.'.php', 'templates/standard/template.php');
    }

}