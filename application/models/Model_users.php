<?php

class Model_users extends CI_Model {

	function LoginUser(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->where('email',$email );
		$this->db->where('password',$password );

		$respond = $this->db->get('admin');
		if($respond ->num_rows(0)==1){
		return $respond->row(0);
		
		}else{
			return false;
		}
	}
}

?>
