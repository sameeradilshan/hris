<?php 
class UserManagement_model extends CI_model{
	
	 public function __construct() {
        parent::__construct();
	}
}
 class HrExecutive_model extends CI_model{

	
	//form handling --------------------------------------------------------------------------------
	public function  addEmployeePersonalDetails($empdata){

        $result = $this->db->insert("addemployee", $empdata);
        return $result;

	}
	public function  addEmployeeEducationalDetails($empedudata){

        $result = $this->db->insert("empedudetails", $empedudata);
        return $result;

	}
	public function  addEmployeeEducationalResult($empresultdata){

        $result = $this->db->insert("empresultdetails", $empresultdata);
        return $result;

	}
	public function  addEmployeeJobDetails($empjobdata){

        $result = $this->db->insert("empjobdetails", $empjobdata);
        return $result;

	}
	public function  addEmployeeBankDetails($empbankdata){

        $result = $this->db->insert("empbamkdetails", $empbankdata);
        return $result;

	}
	public function  addEmployeeFamilyDetails($empfamily){

        $result = $this->db->insert("empfamilydetails", $empfamily);
        return $result;

	}
	public function  addEmployeeChildrenkDetails($empchildrendata){

        $result = $this->db->insert("empchilddetails", $empchildrendata);
        return $result;

	}
	public function  addEmployeeParentDetails($empparentdata){

        $result = $this->db->insert("empparentdetails", $empparentdata);
        return $result;

	}
// --------------------------Leave Request data---------------------------------------------

		public function  addLeaveRequestdata($leaverequestdata){

			$result = $this->db->insert("empleave", $leaverequestdata);
			return $result;

		}

	



	
}

