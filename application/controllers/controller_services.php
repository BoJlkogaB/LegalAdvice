<?php

class Controller_Services extends Controller
{
    function action_index()
    {
        $this->view->generate('view_services.php', 'view_template.php');
    }
}