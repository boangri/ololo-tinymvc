<?php
namespace controllers;

class portfolio extends \core\controller
{
    function __construct()
    {
        $this->model = new \models\portfolio();
        $this->view = new \core\view();
    }

    function action_index()
    {
        $data = $this->model->get_data();		
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }
}
