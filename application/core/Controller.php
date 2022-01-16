<?php
namespace Core;

class Controller
{

    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function getView(): View
    {
        return $this->view;
    }

    public function beforeAction()
    {
    }

}