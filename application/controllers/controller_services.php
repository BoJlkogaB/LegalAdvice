<?php

class Controller_Services extends Controller
{
    function action_index()
    {
        $this->set_data
        (
            [
                'TEMPLATE' => 'STANDARD',
            ]
        );
        $this->get_view()->generate('view_services.php', 'view_template.php', $this->get_data());
    }
}