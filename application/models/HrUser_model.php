<?php 
class UserManagement_model extends CI_model{
    
     public function __construct() {
        parent::__construct();
	}
}
	class HrExecutive_model extends CI_model{	


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
//----------------------------increment management-----------------------------------------------

	public function  addIncrementManagement($incrementManagement){

		$result = $this->db->insert("empincrement", $incrementManagement);
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

					$result = $this->db->insert("empdesignation", $designationManagement);
					return $result;
					
				}	



//------------------------usermanagement------------------
public function getUserManagementDataView() {
	$this->db->select('*');
	$this->db->from('admin a');
	$this->db->from('hrexecuitve e');
	$this->db->from('hruser u');
	$this->db->where('a.adminStatus' or'e.exeStatus' or'u.userStatus', 0);
	$query = $this->db->get();
	return $query->result();
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
//----------------------------------------increment infoermations------------------------------

public function getincrementDataView() {
	$this->db->select('*');
	$this->db->from('empincrement d');
	$this->db->where('d.incrementStatus', 0);
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
//----------------------------------department--------------------------------------------------------------
public function getDepartmentDataView() {

	$this->db->select('*');
	$this->db->from('empdesignation d');
	$this->db->join('department t', 't.departmentName = d.departmentName');
	$this->db->where('t.deptStatus',0);
	$query = $this->db->get();
	return $query->result();

}
//--------------------------------------Approval Leave Data View report-------------------------------------
	public function getApprovedLeaveDatalView() {

		$this->db->select('*');
		$this->db->from('empleave d');	
		$this->db->where('d.leaveStatus',1);
		$query = $this->db->get();
		return $query->result();

	}
//---------------------------------------Decline Leave Data View report -------------------------------------
	public function getDeclineLeaveDatalView() {

		$this->db->select('*');
		$this->db->from('empleave d');	
		$this->db->where('d.leaveStatus',2);
		$query = $this->db->get();
		return $query->result();

	}
//------------------------------------leave reports------------------------------------------------------------
public function getReportLeaveDatalView() {

	$this->db->select('*');
	$this->db->from('empleave d');	
	$this->db->where ("d.leaveStatus ='1' or d.leaveStatus ='2'");
	$query = $this->db->get();
	return $query->result();

}

//-------------------------------------increment approval data view--------------------------------------

	public function getApprovedPromotionDatalView() {

		$this->db->select('*');
		$this->db->from('empincrement d');	
		$this->db->where('d.incrementStatus',1);
		$query = $this->db->get();
		return $query->result();

	}

//-------------------------------------increment decline data view------------------------------------
	public function getDeclinePromotionDatalView() {

		$this->db->select('*');
		$this->db->from('empincrement d');	
		$this->db->where('d.incrementStatus',2);
		$query = $this->db->get();
		return $query->result();

	}
//-------------------------------------increment all data reports---------------------------------------
	public function getReportPromotionDatalView() {

		$this->db->select('*');
		$this->db->from('empincrement d');	
		$this->db->where ("d.incrementStatus ='1' or d.incrementStatus ='2'");
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
//-----------------------------------------------------------Year Promotion  Approval ---
			public function update($dataArr, $whereArr){
				$result =$this->db->update('empyearproformance',$dataArr,$whereArr );
				return $result;
			}

//----------------------------------------leave Approval update-------------------------------------
			public function updateLeaveApproval($dataArr, $whereArr){
				$result =$this->db->update('empleave',$dataArr,$whereArr );
				return $result;
			}

//-----------------------------------------resignation approval update-------------------------------
			public function updateResignationApproval($dataArr, $whereArr){
				$result =$this->db->update('empresignation',$dataArr,$whereArr );
				return $result;
			}
//-------------------------------------update increment approval update ----------------------------------

			public function updateIncrementApproval($dataArr, $whereArr){
				$result =$this->db->update('empincrement',$dataArr,$whereArr );
				return $result;
			}





}
?>
