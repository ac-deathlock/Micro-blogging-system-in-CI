<?php

/**
* 
*/
class Register extends MY_Controller
{
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->view('public/reg');

	}


	public function admin_reg()
			{	

				$this->load->library('form_validation');

				$this->form_validation->set_rules('username','Username','required|alpha');
				$this->form_validation->set_rules('password','Password','required');
				$this->form_validation->set_rules('fname','First name','required');
				

				if ($this->form_validation->run()) {
					$username= $this->input->post('username');
					$password= $this->input->post('password');
					$fname= $this->input->post('fname');
					$lname= $this->input->post('lname');

					$data = array(
						'uname' => $username,
						'password' => $password,
						'fname' => $fname,
						'lname' => $lname
						);

					$this->db->insert('user',$data);
					$this->load->helper('url');
					redirect('login');
				}
				else

					$this->load->helper('form');
					$this->load->helper('url');
					$this->load->view('public/reg');
			}


}

?>
