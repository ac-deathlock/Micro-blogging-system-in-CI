<?php
/**
* 
*/
class User extends MY_Controller
{
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('public/article_list.php');
	}

	public function welcome()
	{
		$this->load->view('public/welcome');
	}
}

?>