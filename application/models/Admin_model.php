<?php 
class Admin_model extends CI_model{
    
     public function __construct() {
        parent::__construct();
	}
	
	public function addAdmin($data){

		$result = $this->db->insert("admin", $data);

		return $result;

	}


	public function addExecutive($data){

		$result = $this->db->insert("hrexecutive", $data);
		
        return $result;

	}
	public function addStaffUser($data){

        $result = $this->db->insert("hrUser", $data);
        return $result;
   
	}
	//form handling-----------------------------------------------------------------


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


//----------------------------monthly performance  insert ---------------------------------------------

		public function  addMonthlyPerformanceData($monthlyPerformanceData){

			$result = $this->db->insert("empmonthlyevaluation", $monthlyPerformanceData);
			return $result;
			
		}


//-------------------------------year performance management----------------------------------------------

		public function  addYearPerformanceData($yearPerformanceManagement){

			$result = $this->db->insert("empyearproformance", $yearPerformanceManagement);
			return $result;
			
		}	

//----------------------------training management-------------------------------------------------------------

				public function  addTrainingManagementData($trainingManagementData){

					$result = $this->db->insert("empaddtraining", $trainingManagementData);
					return $result;
					
				}	



//-------------------------------payroll information mgt--------------------------------------------------

				public function  addayRollInformationData($payRollInformationMgt){

					$result = $this->db->insert("emppayrollinfo", $payRollInformationMgt);
					return $result;
					
				}		



//------------------------------departments-------------------------------------------------------------------

				public function  addDepartmentManagement($departmentManagement){

					$result = $this->db->insert("department", $departmentManagement);
					return $result;
					
				}	

//------------------------------designation -----------------------------------------------------------------
				public function  addDesignationManagement($designationManagement){

					$result = $this->db->insert("department", $designationManagement);
					return $result;
					
				}	








//----------------------------------------------------training data display model------------------------
public function getTrainingDataView() {
	$this->db->select('*');
	$this->db->from('empaddtraining d');
	$this->db->where('d.trainingStatus', 0);
	$query = $this->db->get();
	return $query->result();
}


//----------------------------------------------------resignation data display model----------------------------

	
public function getResignationDataView() {
	$this->db->select('*');
	$this->db->from('empresignation d');
	$this->db->where('d.empStatus', 0);
	$query = $this->db->get();
	return $query->result();
}

//---------------------------------------Leave data view----------------------------------------

public function getLeaveDataView() {
	$this->db->select('*');
	$this->db->from('empleave d');
	$this->db->where('d.leaveStatus', 0);
	$query = $this->db->get();
	return $query->result();
}
//----------------------------------------------------------------------------------------------



//--------------------------------------monthly performance evaluation------------------------


public function getMonthlyPerfomDataView() {
	$this->db->select('*');
	$this->db->from('empmonthlyevaluation d');
	$this->db->where('d.promotionStatus', 0);
	$query = $this->db->get();
	return $query->result();
}

//--------------------------------------year performance evaluation------------------------------


public function getYarePerfomDataView() {
	$this->db->select('*');
	$this->db->from('empyearproformance d');
	$this->db->where('d.yearPromoStatus', 0);
	$query = $this->db->get();
	return $query->result();
}

//--------------------------------------payroll information management---------------------------

public function getPayRollInfoDataView() {
	$this->db->select('*');
	$this->db->from('emppayrollinfo d');
	$this->db->where('d.payrollstatus', 0);
	$query = $this->db->get();
	return $query->result();
}


//-------------------------------------Employee Details--------------------------------------------------

public function getemployeeDetailView() {


	$this->db->select('*');
	$this->db->from('addemployee d');
	$this->db->where('d.empNic', );
	$query = $this->db->get();
	return $query->result();
}

//meke nic akan data ganna ona display karanna 
//mage code eka ekak penahang ..... 
// for example------------------------------------------





//-----------------------------------
	public function getAllUserData() {
        $this->db->select('*');
        $this->db->from('addemployee d');
        $this->db->where('d.empStatus', 0);
        $query = $this->db->get();
        return $query->result();
	}
	
	public function getUserData($empId) {
        $this->db->select('*');
		$this->db->from('addemployee d');
		$this->db->where('d.empId', $empId);
        $this->db->where('d.empStatus', 0);
        $query = $this->db->get();
        return $query->row();
    }
//add employee form handling finished----------------------------------------------------------------------



			public function  addResignation($resignationdata){

				$result = $this->db->insert("empresignation", $resignationdata);
				return $result;

			}

//--------------------------------------------------------------------------------------------------------

			public function  trainingManagementData($trainingManagementData){

				$result = $this->db->insert("emptraining", $trainingManagementData);
				return $result;

			}

//-----------------------------------------------------------------------------------------------------------

			public function  addEmployeeEducat($empresultdata){

				$result = $this->db->insert("empresultdetails", $empresultdata);
				return $result;

			}
//-------------------------------------------------------------------------------------------------------------

}
?>
