<?php
namespace App\Core;

use App\Classes\Traits\ModelNameTrait;
use App\Classes\Traits\DataTrait;

class View
{

    use ModelNameTrait;
    use DataTrait;

    /** @var array $data - данные для View */
    private array $data;

    /**
     * @description Создаёт html документ
     *
     * @param $contentView
     * @param $templateView
     *
     * @return void
     */
    public function generate($contentView, $templateView): void
    {
        // TODO: переделать вызов view
        include 'App/views/'.$templateView;
    }

    /**
     * @description Отображает input элементы
     *
     * @param $inputName
     *
     * @return void
     */
    public function render($inputName): void
    {
        require_once($_SERVER["DOCUMENT_ROOT"].'/App/Views/templates/inputs/'.$inputName.'.php');
    }

}