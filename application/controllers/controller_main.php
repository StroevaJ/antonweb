<?php
class Controller_Main extends Controller
{
	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

