<?php

class Controller_Contact extends Controller
{
    function action_index()
    {
        $this->set_data
        (
            [
                'TEMPLATE' => 'STANDARD',
            ]
        );
        $this->get_view()->generate('view_contract.php', 'view_template.php', $this->get_data());
    }
}