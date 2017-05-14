<?php
/**
* 
*/
class Login extends MY_Controller
{
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');


		$this->load->view('public/admin_login');
		
	}

	public function admin_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required|alpha');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()) {
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			
			$this->load->model('loginmodel');
			if ($this->loginmodel->login_valid($username,$password))
			{
					// $this->load->view('public/welcome');
				$this->load->helper('url');
				redirect('user/welcome');
				$this->load->library('session');
				$this->session->set_userdata('username',$username);
					echo $_SESSION['username'];

			
			}
			else
				echo "password incorrect";
		}
		else

			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->view('public/admin_login');
	}


}

?>