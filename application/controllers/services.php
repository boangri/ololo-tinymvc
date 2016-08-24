<?php
namespace controllers;

class services extends \core\controller
{
    function action_index()
    {
        $this->view->generate('services_view.php', 'template_view.php');
    }
}
