<?php
/**
* 
*/
class Loginmodel extends CI_model
{
	
	public function login_valid($username,$password)
	{
		$q = $this->db->where(['uname'=>$username,'password'=>$password])
						->get('user');


	if ($q->num_rows()) 
		{
			$this->load->view('public/welcome');
			return TRUE ;
		}

	else
		return FALSE;		
	}

	

}


?>