<?php

class Controller_Stock extends Controller
{
	
	function action_index()
	{
		$this->view->generate('stock_view.php', 'template_view.php');
	}

}