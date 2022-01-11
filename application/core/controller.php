<?php

class Controller
{
    private $model = null;
    private View $view;
    private $data = null;

    function __construct()
    {
        $this->view = new View();
    }

    public function action_index()
    {
    }

    public function get_model()
    {
        return $this->model;
    }

    public function set_model($model)
    {
        $this->model = new $model;
    }

    public function get_view(): View
    {
        return $this->view;
    }

    public function get_data()
    {
        return $this->data;
    }

    public function set_data($data)
    {
        $this->data = $data;
    }

}