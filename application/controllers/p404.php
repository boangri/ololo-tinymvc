<?php

namespace controllers;

class p404 extends \core\controller
{
    function action_index()
    {
            $this->view->generate('404_view.php', 'template_view.php');
    }
}
