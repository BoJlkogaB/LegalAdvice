<?php

class Controller_Services_Details extends Controller
{
    function action_index()
    {
        $this->set_data
        (
            [
                'TEMPLATE' => 'STANDARD',
            ]
        );
        $this->get_view()->generate('view_services_details.php', 'view_template.php', $this->get_data());
    }
}