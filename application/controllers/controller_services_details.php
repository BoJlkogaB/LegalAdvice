<?php

class Controller_Services_Details extends Controller
{
    function action_index()
    {
        $this->view->generate('view_services_details.php', 'view_template.php');
    }
}