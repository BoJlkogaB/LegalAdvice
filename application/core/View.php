<?php
namespace Core;

use Traits;

class View
{

    use Traits\ModelNameTrait;
    use Traits\DataTrait;

    private array $data;

    public function generate($contentView, $templateView)
    {
        include 'application/views/'.$templateView;
    }

    public function render($inputName)
    {
        require_once($_SERVER["DOCUMENT_ROOT"].'/application/views/templates/inputs/'.$inputName.'.php');
    }

}