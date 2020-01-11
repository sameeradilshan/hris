<?php 
class Auth_model extends CI_model{
	
	 public function __construct() {
        parent::__construct();
	}
	
    public function checkHRAdmin($email,$password){

         $loggedHRAdmin = $this->db->select('*')
         ->where('adminEmail',$email)
         ->where('adminPassword',$password)
             ->get('admin');

        return $loggedHRAdmin->row_array();



    }

    public function checkHRExecutive($email,$password){

         $loggedTransportManager = $this->db->select('*')
         ->where('hrExeEmail',$email)
         ->where('hrExePassword',$password)
             ->get('hrexecuitve');

        return $loggedTransportManager->row_array();



    }

    public function checkHRUser($email,$password){

         $loggedFManagerData = $this->db->select('*')
         ->where('hrUserEmail',$email)
         ->where('hrUserPassword',$password)
             ->get('hruser');

        return $loggedFManagerData->row_array();



    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }


    

    

    

}

?>
