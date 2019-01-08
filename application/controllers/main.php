<?php

namespace controllers;

class main extends \core\Controller
{
    function action_index()
    {	
        $this->view->generate('main_view.php', 'template_view.php');
    }
}
