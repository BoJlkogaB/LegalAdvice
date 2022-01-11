<?php

class Controller_Main extends Controller
{
    function action_index()
    {
        $this->set_data
        (
            [
                'TEMPLATE' => 'STANDARD',
            ]
        );
        $this->get_view()->generate('view_main.php', 'view_template.php', $this->get_data());
    }
}