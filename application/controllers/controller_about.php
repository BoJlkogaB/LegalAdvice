<?php

class Controller_About extends Controller
{
    function action_index()
    {
        $this->set_data
        (
            [
                'TEMPLATE' => 'STANDARD',
            ]
        );
        $this->get_view()->generate('view_about.php', 'view_template.php', $this->get_data());
    }
}