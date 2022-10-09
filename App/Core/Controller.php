<?php
namespace App\Core;

abstract class Controller
{

    /** @var View $view - объект класса View */
    private View $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * @description Получаем объект класса View
     *
     * @return \App\Core\View
     */
    public function getView(): View
    {
        return $this->view;
    }

    /**
     * @description Выполняет какое-либо действие перед основным action
     *
     * @return void
     */
    public function beforeAction(): void
    {
    }

}