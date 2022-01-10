<?php

class Controller_About extends Controller
{
    function action_index()
    {
        $this->view->generate('view_about.php', 'view_template.php');
    }
}