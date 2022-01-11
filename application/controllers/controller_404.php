<?php

class Controller_404 extends Controller
{
    function action_index()
    {
        $this->set_data
        (
            [
                'TEMPLATE' => 'STANDARD',
            ]
        );
        $this->get_view()->generate('view_404.php', 'view_template.php', $this->get_data());
    }
}