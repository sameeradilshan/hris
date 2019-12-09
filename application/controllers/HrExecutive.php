<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HrExecutive extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$currentUserData = $this->session->userdata();

		    if(!isset($currentUserData["loggedHRExecutive"]))
			{
				redirect('/Login/index');
			}

		$this->load->model('HrExecutive_model','',true);
		$this->load->model('HrExecutive_model','',true);
	

	}

	public function index()
	{
		$this->load->view('executiveViews\home');
	}
	public function employeeDetails()
	{
		$this->load->view('executiveViews\employeeDetails');
	}
	public function addEmploye()
	{
		$this->load->view('executiveViews\addEmploye');
	}

	public function yearplanning()
	{
		$this->load->view('executiveViews\yearplanning');
	}
	public function progress()
	{
		$this->load->view('executiveViews\progress');
	}
	public function loginnew()
	{
		$this->load->view('executiveViews\loginnew');
	}
	public function firstPage()
	{
		$this->load->view('executiveViews\firstPage');
	}
	public function promotion()
	{
		$this->load->view('executiveViews\promotion');
	}
	public function departments()
	{
		$this->load->view('executiveViews\departments');
	}
	public function resignation()
	{
		$this->load->view('executiveViews\resignation');
	}
	public function attendance()
	{
		$this->load->view('executiveViews\attendance');
	}
	public function leaveDataView()
	{
		$this->load->view('executiveViews\leave');
	}
	public function leaveManagement()
	{
		$this->load->view('executiveViews\leaveManagement');
	}
	public function payRoll()
	{
		$this->load->view('executiveViews\payRoll');
	}
	public function userManagement()
	{
		$this->load->view('executiveViews\userManagement');
	}
	public function trainingDataView()
	{
		$this->load->view('executiveViews\training');
	}
	public function monthlyPerfomDataView()
	{
		$this->load->view('executiveViews\monthlyPerformance');
	}







//employee add ---------------------------------------------------------------------------------
		public function EmployeeDetailshandler(){
						
			$empFullName	=$this->input->post('empFullName');
			$empInitialName	=$this->input->post('initialName');
			$empNameEmail	=$this->input->post('empEmail');
			$otherName		=$this->input->post('otherName');
			$empAdress1		=$this->input->post('empAddress1');
			$empAdress2		=$this->input->post('empAddress2');
			$empNicNo		=$this->input->post('empNicNo');
			$officeNo		=$this->input->post('officeNo');
			$mobileNo		=$this->input->post('mobileNo');
			$homeNo			=$this->input->post('homeNo');
			$gender			=$this->input->post('gender');
			$dob			=$this->input->post('dob');
			$civil			=$this->input->post('civil');
			$nationality	=$this->input->post('nationality');
			$religious		=$this->input->post('religious');
				
			$qualificationName1	=$this->input->post('r1QuaName');
			$qualification1		=$this->input->post('r1QuaQualification');				
			$quaSpecilization1	=$this->input->post('r1QuaSp');
			$quaInstitute1		=$this->input->post('r1QuaIns');
			$quaDate1			=$this->input->post('r1QuaDate');
			$qualificationName2	=$this->input->post('r2QuaName');
			$qualification2		=$this->input->post('r2QuaQualification');
			$quaSpecilization2	=$this->input->post('r2QuaSp');
			$quaInstitute2		=$this->input->post('r2QuaIns');
			$quaDate2			=$this->input->post('r2QuaDate');
			$qualificationName3	=$this->input->post('r3QuaName');
			$qualification3		=$this->input->post('r3QuaQualification');
			$quaSpecilization3	=$this->input->post('r3QuaSp');
			$quaInstitute3		=$this->input->post('r3QuaIns');
			$quaDate3			=$this->input->post('r3QuaDate');
			$qualificationName4	=$this->input->post('r4QuaName');
			$qualification4		=$this->input->post('r4QuaQualification');
			$quaSpecilization4	=$this->input->post('r4QuaSp');
			$quaInstitute4		=$this->input->post('r4QuaIns');
			$quaDate4			=$this->input->post('r4QuaDate');
			$qualificationName5	=$this->input->post('r5QuaName');
			$qualification5		=$this->input->post('r5QuaQualification');
			$quaSpecilization5	=$this->input->post('r5QuaSp');
			$quaInstitute5		=$this->input->post('r5QuaIns');
			$quaDate5			=$this->input->post('r5QuaDate');
			
			$alSubject1	=$this->input->post('alSubject1');
			$alSubject2	=$this->input->post('alSubject2');
			$alSubject3	=$this->input->post('alSubject3');
			$alSubject4	=$this->input->post('alSubject4');
			$alIndexNo1	=$this->input->post('alIndexNo1');
			$alIndexNo2	=$this->input->post('alIndexNo2');
			$alIndexNo3	=$this->input->post('alIndexNo3');
			$alIndexNo4	=$this->input->post('alIndexNo4');
			$alResult1	=$this->input->post('alResult1');
			$alResult2	=$this->input->post('alResult2');
			$alResult3	=$this->input->post('alResult3');
			$alResult4	=$this->input->post('alResult4');
			$alYear1	=$this->input->post('alYear1');
			$alYear2	=$this->input->post('alYear2');
			$alYear3	=$this->input->post('alYear3');
			$alYear4	=$this->input->post('alYear4');
			
			$olIndexNo1	 =$this->input->post('olIndexNo1');
			$olIndexNo2  =$this->input->post('olIndexNo2');
			$olIndexNo3  =$this->input->post('olIndexNo3');
			$olIndexNo4  =$this->input->post('olIndexNo4');
			$olIndexNo5  =$this->input->post('olIndexNo5');
			$olIndexNo6  =$this->input->post('olIndexNo6');
			$olIndexNo7  =$this->input->post('olIndexNo7');
			$olIndexNo8  =$this->input->post('olIndexNo8');
			$olIndexNo9  =$this->input->post('olIndexNo9');
			$olIndexNo10 =$this->input->post('olIndexNo10'); 
			$olSubject1  =$this->input->post('olSubject1');
			$olSubject2  =$this->input->post('olSubject2');
			$olSubject3  =$this->input->post('olSubject3');
			$olSubject4  =$this->input->post('olSubject4');
			$olSubject5  =$this->input->post('olSubject5');
			$olSubject6  =$this->input->post('olSubject6');
			$olSubject7  =$this->input->post('olSubject7');
			$olSubject8  =$this->input->post('olSubject8');
			$olSubject9 =$this->input->post('olSubject9');
			$olSubject10=$this->input->post('olSubject10');				
			$olResult1	=$this->input->post('olResult1');
			$olResult2	=$this->input->post('olResult2');
			$olResult3	=$this->input->post('olResult3');
			$olResult4	=$this->input->post('olResult4');
			$olResult5	=$this->input->post('olResult5');
			$olResult6	=$this->input->post('olResult6');
			$olResult7	=$this->input->post('olResult7');
			$olResult8	=$this->input->post('olResult8');
			$olResult9	=$this->input->post('olResult9');
			$olResult10	=$this->input->post('olResult10');
			
			$empNo					=$this->input->post('empNo');
			$jobDesignation 		=$this->input->post('jobDesignation');
			$dateOfDesignation		=$this->input->post('dateOfDesignation');
			$department				=$this->input->post('department');
			$epfNo					=$this->input->post('EPFNo');
			$etfNo					=$this->input->post('ETFNo');
			$contractperiod			=$this->input->post('contractPeriod');
			$contractExpireDate		=$this->input->post('contractExpireDate');
			$trainingPeriod			=$this->input->post('trainingPeriod');
			$trainingFinishDate		=$this->input->post('trainingFinishedDate');
			$trainingInstituteName	=$this->input->post('trainingInstituteName');

			$accNo			=$this->input->post('accNo');
			$bankName		=$this->input->post('bankName');
			$branchName		=$this->input->post('branchName');
			$accType		=$this->input->post('accType');
			$childName1		=$this->input->post('childName1');
			$childDOB1		=$this->input->post('childDOB1');
			$childNIC1		=$this->input->post('childNIC1');
			$childName2		=$this->input->post('childName2');
			$childDOB2		=$this->input->post('childDOB2');
			$childNIC2		=$this->input->post('childNIC2');
			$childName3		=$this->input->post('childName3');
			$childDOB3		=$this->input->post('childDOB3');
			$childNIC3		=$this->input->post('childNIC3');
			$childName4		=$this->input->post('childName4');
			$childDOB4		=$this->input->post('childDOB4');
			$childNIC4		=$this->input->post('childNIC4');
			$hwName			=$this->input->post('hwName');
			$hwNICNo		=$this->input->post('hwNICNo');
			$hwRelation		=$this->input->post('hwRelation');
			$parentsName1	=$this->input->post('parentsName1');
			$parentsRelation1	=$this->input->post('parentsRelation1');
			$parentsNIC1		=$this->input->post('parentsNIC1');
			$parentsName2		=$this->input->post('parentsName2');
			$parentsRelation2	=$this->input->post('parentsRelation2');
			$parentsNIC2		=$this->input->post('parentsNIC2');

			
			$idTail=date('Y-m-d H:i:s');
			$idTail=strtotime($idTail);

	
			$empId='EMP'.$idTail;


				$empdata= array(
					'empId'			=>$empId,
					'fullname'		=>$empFullName,
					'nameInitials'	=>$empInitialName,
					'empEmail'		=>$empNameEmail,
					'otherName'		=>$otherName,
					'address1'		=>$empAdress1	,
					'address2'		=>$empAdress2	,
					'empNic'		=>$empNicNo	,
					'contactOffice'	=>$officeNo,
					'contactMobile' =>$mobileNo,
					'contactHome'	=>$homeNo,
					'gender'		=>$gender,
					'dateOfBirth'	=>$dob,
					'civilState'	=>$civil,
					'nationality'	=>$nationality,
					'religious'		=>$religious,
					'empNo'			=>$empNo,	
				);
				var_dump($empdata);
				$result=$this->HrExecutive_model-> addEmployeePersonalDetails($empdata);
				
				$qualificationnamed= $qualificationName1.",".$qualificationName2.",".$qualificationName3.",". $qualificationName4.",".$qualificationName5;
				$qualification=$qualification1.",".$qualification2.",".$qualification3.",".$qualification4.",".$qualification5;
				$quaSpecilization=$quaSpecilization1.",".$quaSpecilization2.",".$quaSpecilization3.",".$quaSpecilization4.",".$quaSpecilization5;
				$institute=$quaInstitute1.",".$quaInstitute2.",".$quaInstitute3.",".$quaInstitute4.",".$quaInstitute5;
				$qualificationdata=$quaDate1.",".$quaDate2.",".$quaDate3.",".$quaDate4.",".$quaDate5;

				$empedudata=array(
						
					'empName' 			=> $empInitialName,
					'empNic '			=> $empNicNo,
					'empId '			=> $empId,
					'qualificationName'	=> $qualificationnamed,
					'qualification' 	=>	$qualification,
					'specialization'	=> $quaSpecilization,
					'institute'			=> $institute,
					'qualifieddate' 	=> $qualificationdata,
					'empNo'				=>$empNo,
				);
				var_dump($empedudata);
				$result=$this->HrExecutive_model-> addEmployeeEducationalDetails($empedudata);

				$alSubject	= $alSubject1.",".$alSubject2.",".$alSubject3.",".$alSubject4;
				$alIndexNo	= $alIndexNo1.",".$alIndexNo2.",".$alIndexNo3.",".$alIndexNo4;
				$alResult 	= $alResult1.",".$alResult2.",".$alResult3.",".$alResult4;
				$alYear 	= $alYear1.",".$alYear2.",".$alYear3.",".$alYear4;
				$olSubject	=$olSubject1.",".$olSubject2.",".$olSubject3.",".$olSubject4.",".$olSubject5.",".$olSubject6.",".$olSubject7.",".$olSubject8.",".$olSubject9.",".$olSubject10;
				$olIndexNo	=$olIndexNo1.",".$olIndexNo2.",".$olIndexNo3.",".$olIndexNo4.",".$olIndexNo5.",".$olIndexNo6.",".$olIndexNo7.",".$olIndexNo8.",".$olIndexNo9.",".$olIndexNo10;
				$olResult	=$olResult1.",".$olResult2.",".$olResult3.",".$olResult4.",".$olResult5.",".$olResult6.",".$olResult7.",".$olResult8.",".$olResult9.",".$olResult10;

				$empresultdata=array(
					'alSubject'			=> $alSubject,
					'alIndexNo'			=> $alIndexNo,
					'alResult '			=> $alResult,
					'alYear'			=> $alYear,
											
					'olsubject'	=>  $olSubject,          
					'olIndexNo'	=>  $olIndexNo ,          
					'olResult'	=>  $olResult,
					'empNo'		=>$empNo,
					'empId '	=> $empId,
					
				);
				//var_dump($empresultdata);
				$result=$this->HrExecutive_model-> addEmployeeEducationalResult($empresultdata);
				

				$empjobdata=array(
					'empName'				=>$empInitialName,
					'empNic'				=>$empNicNo,
					'empNo'					=>$empNo,
					'jobDesignation'		=>$jobDesignation ,
					'department'			=>$department,	
					'EPFNo'					=>$epfNo,
					'ETFNo'					=>$etfNo,
					'contractPeriod'		=>$contractperiod,	
					'contractExpireDate'	=>$contractExpireDate,	
					'trainingPeriod'		=>$trainingPeriod,
					'trainingFinishedDate'	=>$trainingFinishDate,
					'traineeInstituteName'	=>$trainingInstituteName,
					'designationDate'		=>$dateOfDesignation,
					'empId '				=> $empId,
				); 
				//var_dump($empjobdata);
				$result=$this->HrExecutive_model-> addEmployeeJobDetails($empjobdata);
				

				$empbankdata=array(
					'empId '		=> $empId,
					'empNo'			=>$empNo,
					'empName' 		=>$empInitialName,
					'empNic' 		=>$empNicNo,
					'accountNo'		=>$accNo,
					'bankName' 		=>$bankName,
					'branchName' 	=>$branchName,
					'accountType' 	=>$accType,
				);
				//var_dump($empbankdata);
				$result=$this->HrExecutive_model-> addEmployeeBankDetails($empbankdata);	


				$empfamily=array(
					'empName'		=>$empInitialName,
					'empNic'		=>$empNicNo,
					'empId '		=> $empId,
					'empNo'			=>$empNo,						
					'hwName'  		=>$hwName,
					'hwNicNo' 		=>$hwNICNo,
					'hwRelation'	=>$hwRelation
				);
				//var_dump($empfamily);
				$result=$this->HrExecutive_model-> addEmployeeFamilyDetails($empfamily);	

				$childName	=$childName1.",".$childName2.",".$childName3.",".$childName4;
				$childDOB	=$childDOB1.",".$childDOB2.",".$childDOB3.",".$childDOB4;
				$childNIC	=$childNIC1.",".$childNIC2.",".$childNIC3.",".$childNIC4;

				$empchildrendata=array(
					'empNo'				=>$empNo,	
					'empId '			=> $empId,
					'childrenName'		=>$childName,
					'childrenBirthDay'	=>$childDOB,
					'childrenNicNo'		=>$childNIC,
				);
				//var_dump($empchildrendata);
				$result=$this->HrExecutive_model-> addEmployeeChildrenkDetails($empchildrendata);

				$parentsName	=$parentsName1.",".$parentsName2;
				$parentsNIC		=$parentsNIC1.",".$parentsNIC2;
				$parentsRelation=$parentsRelation1.",".$parentsRelation2;

				$empparentdata=array(
					'empNo'			=>$empNo,	
					'empId '		=> $empId,
					'parentName' 	=>$parentsName,
					'parentNicNo' 	=>$parentsNIC,
					'parentRelation'=>$parentsRelation,

				);
				//var_dump($empparentdata);
				$result=$this->HrExecutive_model-> addEmployeeParentDetails($empparentdata);
		}

		//emp  resignation handler-------------------------------------------------------------------


		public function resignationHandler(){
			$empName	=$this->input->post('empName');
			$empNo	=$this->input->post('empNo');
			$empNICNo	=$this->input->post('empNICNo');
			$department		=$this->input->post('department');
			$resignationDetails		=$this->input->post('resignationDetails');
			$resignationDate	=$this->input->post('resignationDate');

			$resignationdata=array(
				
				'empName'		=> $empName,
				'empNic' 		=> $empNICNo,
				'department'	=> $department,
				'resigDetails'	=> $resignationDetails,
				'resigDate'		=> $resignationDate,
				'empNo'			=> $empNo


			);//var_dump($resignationdata);
			$result=$this->HrExecutive_model-> addResignation($resignationdata);				

		}
		//leave request management-------------------------------------------------------------------------

		public function leaveRequestManagement(){
			$leaveEmpName	=$this->input->post('leaveEmpName');
			$leaveEmpNo		=$this->input->post('leaveEmpNo');
			$leaveEmpNICNo	=$this->input->post('leaveEmpNICNo');
			$department		=$this->input->post('leaveEmpDeprtment');
			$leaveReason	=$this->input->post('leaveReason');
			$leaveType		= $this->input->post('leaveType');
			$leaveDate		= $this->input->post('leaveDate');
			$leaveEmpNICNo 	= $this->input->post('leaveEmpNICNo');
			$noOfDate 		= $this->input->post('noOfDate');

			$leaverequestdata=array(

				'empName' 		=> $leaveEmpName,
				'empNo'   		=> $leaveEmpNo,
				'leaveType'		=> $leaveType,
				'date' 			=> $leaveDate ,
				'reason'		=> $leaveReason,
				'department' 	=> $department,	
				'leaveEmpNICNo' => $leaveEmpNICNo,
				'noOfDate' 		=> $noOfDate,
				

			);//var_dump($leaverequestdata);	
			$result=$this->HrExecutive_model-> addLeaveRequestdata($leaverequestdata);
			
				}
		
	}


