<?php

namespace controllers;

class main extends \core\controller
{
    function action_index()
    {	
        $this->view->generate('main_view.php', 'template_view.php');
    }
}
