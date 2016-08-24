<?php
namespace controllers;

class contacts extends \core\controller
{
    function action_index()
    {
        $this->view->generate('contacts_view.php', 'template_view.php');
    }
}
