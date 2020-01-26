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
//------------------------------paysheet maker ---------------------------------------------------------------
			public function  payRollSheetMker($arrayName){

				$result = $this->db->insert("paysheetmaker", $arrayName);
				return $result;
				
			}	


//------------------------usermanagement------------------
public function getUserManagementDataView() {
	$this->db->select('*');
	$this->db->from('admin a');
	$this->db->from('hrexecuitve e');
	$this->db->from('hruser u');
	$this->db->where('a.adminStatus' or'e.exeStatus' or'u.userStatus', 0);
	$query=$this->db->query('select * from paysheetmaker where  year="" AND month="" AND departmentName ="" ;');
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

//----------------------------------------------user data display model---------------------------------
public function getuserProfileData($adminId) {
	
	$this->db->select('*');
	$this->db->from('admin d');
	$this->db->where('d.adminId',$adminId);
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
//---------------------------------------------paysheet making data view-------------------------------
public function getPaySheetDataView() {
	$this->db->select('*');
	$this->db->from('paysheetmaker d');
	$this->db->where('d.approvalStatus', 0);
	$query = $this->db->get();
	return $query->result();
}


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
public function getPayRollInfoDataViewOne($empNo) {
	$this->db->select('*');
	$this->db->from('emppayrollinfo d');
	$this->db->where('d.empNo',$empNo);
	$this->db->where('d.payrollstatus', 0);
	$query = $this->db->get();
	return $query->row();
}

//-------------------------------------Employee Details--------------------------------------------------

public function getemployeeDetailView($empNo) {

	$this->db->select('*');
	$this->db->from('addemployee d');
	$this->db->from('empedudetails e');
	$this->db->from('empresultdetails f');
	$this->db->from('empjobdetails g');
	$this->db->from('empbamkdetails h');
	$this->db->from('empfamilydetails i');
	$this->db->from('empchilddetails j');
	$this->db->from('empparentdetails k');
	$this->db->where('d.empNo ', $empNo );
	$this->db->where('e.empNo ', $empNo );
	$this->db->where('f.empNo ', $empNo );
	$this->db->where('g.empNo ', $empNo );
	$this->db->where('h.empNo ', $empNo );
	$this->db->where('i.empNo ', $empNo );
	$this->db->where('j.empNo ', $empNo );
	$this->db->where('k.empNo ', $empNo );
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
	
//---------------------------------------approval maonth performance ------------------------------------


//---------------------------------------decline maonth performance ------------------------------------
public function getDeclineMonthlyProformanceDatalView() {

	$this->db->select('*');
	$this->db->from('empmonthlyevaluation d');	
	$this->db->where('d.promotionStatus',2);
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

//-----------------------------------------------resignation approval reports---------------------------------------
		public function getApprovedResignationDatalView() {

			$this->db->select('*');
			$this->db->from('empresignation d');	
			$this->db->where('d.empStatus',1);
			$query = $this->db->get();
			return $query->result();

		}

//----------------------------------------------resignation decline reports-----------------------------------
		public function getDeclineResignationDatalView() {

			$this->db->select('*');
			$this->db->from('empresignation d');	
			$this->db->where('d.empStatus',2);
			$query = $this->db->get();
			return $query->result();

		}

//-----------------------------------------------resignation reports--------------------------------------
		public function getReportResignationDatalView() {

			$this->db->select('*');
			$this->db->from('empresignation d');	
			$this->db->where ("d.empStatus ='1' or d.empStatus ='2'");
			$query = $this->db->get();
			return $query->result();

		}
//----------------------------------------------training reports-----------------------------------------
//-----------------------------------------------training approval reports---------------------------------------
public function getApprovedTrainingDatalView() {

	$this->db->select('*');
	$this->db->from('empaddtraining d');	
	$this->db->where('d.trainingStatus',1);
	$query = $this->db->get();
	return $query->result();

}

//----------------------------------------------training decline reports-----------------------------------
public function getDeclineTrainingDatalView() {

	$this->db->select('*');
	$this->db->from('empaddtraining d');	
	$this->db->where('d.trainingStatus',2);
	$query = $this->db->get();
	return $query->result();

}

//-----------------------------------------------training reports--------------------------------------
public function getReportTrainingDatalView() {

	$this->db->select('*');
	$this->db->from('empaddtraining d');	
	$this->db->where ("d.trainingStatus ='1' or d.trainingStatus ='2'");
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
//----------------------------------------monthly performance  data report-----------------------------


		public function getApprovedMonthlyProDatalView() {

			$this->db->select('*');
			$this->db->from('empmonthlyevaluation d');	
			$this->db->where('d.promotionStatus',1);
			$query = $this->db->get();
			return $query->result();

		}

//-------------------------------------monthly performance decline data view------------------------------------
		public function getDeclineMonthlyProDatalView() {

			$this->db->select('*');
			$this->db->from('empmonthlyevaluation d');	
			$this->db->where('d.promotionStatus',2);
			$query = $this->db->get();
			return $query->result();

		}
//-------------------------------------monthly performance all data reports---------------------------------------
		public function getReportMonthlyProDatalView() {

			$this->db->select('*');
			$this->db->from('empmonthlyevaluation d');	
			$this->db->where ("d.promotionStatus ='1' or d.promotionStatus ='2'");
			$query = $this->db->get();
			return $query->result();

		}	
//------------------------------------Departmantal employrr data report------------------------------------
		public function getreportDeptEmpDataView($type,$Department) {

			
			//var_dump($Department);
			$query=$this->db->query('SELECT * FROM addemployee WHERE department="'.$Department.'" AND empType = "'.$type.'";');
			//var_dump($query);
			return $query->result();
			
		}
//------------------------------------employee data view----------------------
		public function getemployeesDataView() {

			$this->db->select('*');
			$this->db->from('empincrement d');	
			$this->db->where ("d.incrementStatus ='1' or d.incrementStatus ='2'");
			$query = $this->db->get();
			return $query->result();

		}
//------------------------------------time sheet data view---------------------------
				public function gettimeDataView() {

					$this->db->select('*');
					$this->db->from('timesheet d');	
					$this->db->where('d.timestatus',0);
					$query = $this->db->get();
					return $query->result();

				}

//--------------------------paysheet making information------------------------------------
				public function getpaySeetMakingInformation($empNo) {

					$this->db->select('*');
					$this->db->from('emppayrollinfo d');	
					$this->db->where('d.empNo', $empNo );
					$query = $this->db->get();
					return $query->row();

				}



				//meke nic akan data ganna ona display karanna 
				//mage code eka ekak penahang ..... 
// for example------------------------------------------
public function getmonthperfor() {
	$this->db->select('*');
	$this->db->from('empmonthlyevaluation d');
	$this->db->where('d.promotionStatus', 1);
	$query = $this->db->get();
	return $query->result();
}




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
//-----------------------------get emp data for payroll-------------------
public function gettData(){
	$this->db->select('*');
	$this->db->from('addemployee d');	
	$this->db->where('d.empStatus', 0);
	$query = $this->db->get();
	return $query->result();
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
//-----------------------------------------------------------Year Promotion  Approval ---
public function EditAdmin($datarr, $whereArr){
			//var_dump($datarr);
			$result =$this->db->update('admin',$datarr,$whereArr);
			//var_dump($result);
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
//-------------------------------------training approval update----------------------------------
			public function updateTrainingApproval($dataArr, $whereArr){
				$result =$this->db->update('empaddtraining',$dataArr,$whereArr );
				return $result;
}

//-------------------------------------approval month performance -------------------------------

			public function approvalMonthPerformance($dataArr, $whereArr){
				$result =$this->db->update('empmonthlyevaluation',$dataArr,$whereArr );
				return $result;
			}

//------------------------------------approval paysheet ------------------------------------------
			public function paySheetMakingApproval($dataArr, $whereArr){
				$result =$this->db->update('paysheetmaker',$dataArr,$whereArr );
				return $result;
			}

//-------------------------------------Edit resignation details---------------------

			public function editResignation($dataArr, $whereArr){
				$result =$this->db->update('empresignation',$dataArr,$whereArr );
				return $result;
			}
// ----------------------------------Edit Promotion And Incerments--------------------------------
			public function editPromotion($dataArr, $whereArr){
				$result =$this->db->update('empincrement',$dataArr,$whereArr );
				return $result;
			}

//------------------------------------Edit Training details-------------------------------
			public function editTrainingData($trainingData, $wherearray){
				$result =$this->db->update('empaddtraining',$trainingData,$wherearray );
				return $result;
			}

//---------------------------------------Edit leave Details--------------------------
			public function editLeaveData($leaveEditData, $wherearray){
				$result =$this->db->update('empleave',$leaveEditData,$wherearray );
				return $result;
			}
//----------------------------------------Edit monthly performance--------------------
			public function editmaonthPerformaceData($maonthPerformaceEdit, $wherearray){
				$result =$this->db->update('empmonthlyevaluation',$maonthPerformaceEdit,$wherearray );
				return $result;
			}
//--------------------------------------Edit payoll Information------------------------------------------
			public function payRollInformationEdit($maonthPerformaceEdit, $wherearray){
				$result =$this->db->update('emppayrollinfo',$maonthPerformaceEdit,$wherearray );
				return $result;
			}

//----------------------------------- time sheet adding----------------------------------
		public function  timeSheetData($timeData){

			$result = $this->db->insert("timesheet", $timeData);
			return $result;

		}
//-------------------------------------------insert attendane emp No---------------------------------
		public function  addEmpAttendanceDetails($attandance){

			$result = $this->db->insert("attendance", $attandance);
			return $result;

		}


//---------------------------------------get attendance month-----------------------------------------
public function getAttendacebymonth($empNo,$startDate,$endDate){

	$query=$this->db->query('select count(empNo) as datecame from timesheet where empNo="'.$empNo.'" AND date BETWEEN "'.$startDate.'" AND "'.$endDate.'";');
	return $query->result();
	

}

public function getThisMonthPaySheets($startDate,$endDate){

	$query=$this->db->query('select * from timesheet where date BETWEEN "'.$startDate.'" AND "'.$endDate.'";');
	return $query->result();
	

}



/////////////////////////////////////////////////////////
public function sendEmail($msg,$email){


	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer();
	//$mail->SMTPDebug = 2;                               // Enable verbose debug output
	//$mail->Debugoutput = 'html';
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'ksdilshan96@gmail.com';                 // SMTP username
	$mail->Password = 'sameera1996';                           // SMTP password
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->From = 'ksdilshan96@gmail.com';
	$mail->FromName = 'HRIS';
	$mail->addAddress($email);               // Name is optional

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'welcome';
	$mail->Body    = $msg ;
	$mail->AltBody = $msg ;

	if(!$mail->send()) {
	   return false;
	} else {
		return true;
	}
}

///////////////////////////////////////////////////////////////////////////
public function bankReport($payYear,$payMonth){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$payMonth.'";');
	
	return $query->result();
}
public function bankReporttwo($payYear,$payMonth,$paybankName){
	
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$payMonth.'" AND bankName ="'.$paybankName.'" ;');
	//var_dump($query);
	return $query->result();
}


///////////////////////////////////////////////////////////////////////////Salary Report
public function salaryReport($payYear,$salaryMonth){
	var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$salaryMonth.'";');
	
	return $query->result();
}
public function salaryReporttwo($salaryMonth,$Department){
	
	$query=$this->db->query('select * from paysheetmaker where   month="'.$salaryMonth.'" AND departmentName ="'.$Department.'" ;');
	//var_dump($query);
	return $query->result();
}
public function salaryReportthree($payYear,$Department){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND  departmentName ="'.$Department.'" ;');
	
	return $query->result();
}
public function salaryReportfore($salaryMonth){
	
	$query=$this->db->query('select * from paysheetmaker where   month="'.$salaryMonth.'" ;');
	//var_dump($query);
	return $query->result();
}
public function salaryReportfive($payYear){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" ;');
	
	return $query->result();
}
public function salaryReportsix($payYear,$salaryMonth,$Department){
	
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$salaryMonth.'" AND departmentName ="'.$Department.'" ;');
	//var_dump($query);
	return $query->result();
}

//-----------------------------------------------------------------------ETF Reports-----

public function epfyReport($payYear,$salaryMonth,$ETF){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$salaryMonth.'" AND month="'.$salaryMonth.'";');
	
	return $query->result();
}
public function epfyReportfore($salaryMonth,$Department,$ETF){
	
	$query=$this->db->query('select * from paysheetmaker where   month="'.$salaryMonth.'" AND departmentName ="'.$Department.'" ;');
	//var_dump($query);
	return $query->result();
}
public function epfyReportfive($payYear,$Department,$ETF){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND  departmentName ="'.$Department.'" ;');
	
	return $query->result();
}
public function epfyReporttwo($salaryMonth,$ETF){
	
	$query=$this->db->query('select * from paysheetmaker where   month="'.$salaryMonth.'" ;');
	//var_dump($query);
	return $query->result();
}
public function epfyReportthree($payYear,$ETF){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" ;');
	
	return $query->result();
}
public function epfyReportsix($payYear,$salaryMonth,$Department,$ETF){
	
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$salaryMonth.'" AND departmentName ="'.$Department.'" ;');
	//var_dump($query);
	return $query->result();
}

//-------------------------------------------------------------ETF Reports--------------------------------
public function ETFReport($payYear,$salaryMonth){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$salaryMonth.'" AND month="'.$salaryMonth.'";');
	
	return $query->result();
}
public function ETFReporttwo($salaryMonth,$Department){
	
	$query=$this->db->query('select * from paysheetmaker where   month="'.$salaryMonth.'" AND departmentName ="'.$Department.'" ;');
	//var_dump($query);
	return $query->result();
}
public function ETFReportthree($payYear,$Department){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND  departmentName ="'.$Department.'" ;');
	
	return $query->result();
}
public function ETFReportfore($salaryMonth){
	//var_dump($salaryMonth);
	$query=$this->db->query('select * from paysheetmaker where  month="'.$salaryMonth.'" ;');
	//var_dump($query);
	return $query->result();
}
public function ETFReportfive($payYear){
	//var_dump($payYear);
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" ;');
	
	return $query->result();
}
public function ETFReportsix($payYear,$salaryMonth,$Department){
	
	$query=$this->db->query('select * from paysheetmaker where  year="'.$payYear.'" AND month="'.$salaryMonth.'" AND departmentName ="'.$Department.'" ;');
	//var_dump($query);
	return $query->result();
}
/////////////////////////////////////////////////////////////
			public function getpasswordChange($newPasswd, $wherearray){
				//var_dump($newPasswd);
				$result=$this->db->query('UPDATE admin SET  adminPassword = "'.$newPasswd.'"  WHERE  adminId =  "'.$wherearray.'" ;');
				return $result;
				//var_dump($result);

				//return $query->result();
				//$result =$this->db->update('admin',$newPasswd,$userId );
				
				
				//

}
		public function TimeSheetChecker($date){
			//var_dump($date);
			$query=$this->db->query('SELECT date FROM `timesheet` WHERE `date` ="'.$date.'";');
			return $query->result();
				//if ($result->num_rows > 0) 
				var_dump($query);
}

//--------------------------Dashboard view button details-------

public function getEmployeeLeave($startDate,$endDate){
	$e='select * from empleave where  dateTo BETWEEN "'.$startDate.'" AND "'.$endDate.'";';
	$query=$this->db->query($e);
	return $query->result();
}

public function getEmployeeResignation($startDate,$endDate){
	$e='select * from empresignation where `resigDate` BETWEEN "'.$startDate.'" AND "'.$endDate.'" AND empStatus = 1;';
	$query=$this->db->query($e);
	return $query->result();
}



}

?>
