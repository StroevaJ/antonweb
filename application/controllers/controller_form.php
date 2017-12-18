<?php

class Controller_form extends Controller
{
 function __construct()
	{
		$this->model = new Model_Form();
		$this->view = new View();
	}
public function action_index()
{	
  // echo ("1"); 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
	$name = $_POST['name'];
	$family = $_POST['family'];
	$email = $_POST['email'];
        $country = $_POST['country'];
	$city = $_POST['city'];
	$password1 = $_POST['password1']; 
        $password2 = $_POST['password2']; 

	$name = Request::clean($name);
	$family = Request::clean($family);
	$email = Request::clean($email);
        $country =Request::clean($country);
	$city = Request::clean($city);
	$password1 = Request::clean($password1);
        $password2 = Request::clean($password2);
        
        if(!Request::examp($password1,$password2));
        else{
            Request::register($name, $family,$email,$country, $city,$password1);
                
            
        
        }
        
    }
    $data = $this->model->get_data();
    $this->view->generate('form_view.php', null, $data);
    return true;
}    
}

