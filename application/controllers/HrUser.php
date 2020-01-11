<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HrUser extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$currentUserData = $this->session->userdata();

		    if(!isset($currentUserData["loggedHRUser"]))
			{
				redirect('/Login/index');
			}

		//$this->load->model('HrUser_model','',true);
		//$this->load->model('HrUser_model','',true);
	

	}
	public function index()
	{
		$this->load->view('userViews\home');
	}
	public function employeeDetails()
	{
		$this->load->view('userViews\employeeDetails');
	}
	public function addEmploye()
	{
		$this->load->view('userViews\addEmploye');
	}

	public function yearplanning()
	{
		$this->load->view('userViews\yearplanning');
	}
	public function progress()
	{
		$this->load->view('userViews\progress');
	}
	public function loginnew()
	{
		$this->load->view('userViews\loginnew');
	}
	public function firstPage()
	{
		$this->load->view('userViews\firstPage');
	}
	
	
	
	public function attendance()
	{
		$this->load->view('userViews\attendance');
	}
	
	public function leaveManagement()
	{
		$this->load->view('userViews\leaveManagement');
	}
	public function payRoll()
	{
		$this->load->view('userViews\payRoll');
	}
	
	public function PayRollInformation()
	{
		$this->load->view('userViews\PayRollInformation');
	}
	public function PaySheetMaker()
	{
		$this->load->view('userViews\paySheetMaker');
	}
	public function timeSheet()
	{
		$this->load->view('userViews\timeSheet');
	}
	public function report()
	{
		$this->load->view('userViews\timeSheet');
	}
	







// employee add ------------------------------------------------------------------------- 
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
			 $result=$this->HrUser_model-> addEmployeePersonalDetails($empdata);
			
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
			$result=$this->HrUser_model-> addEmployeeEducationalDetails($empedudata);

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
			//var_dump($empedudata);
			$result=$this->HrUser_model-> addEmployeeEducationalResult($empresultdata);
			

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
			$result=$this->HrUser_model-> addEmployeeJobDetails($empjobdata);
			

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
			$result=$this->HrUser_model-> addEmployeeBankDetails($empbankdata);	


			$empfamily=array(
				'empName'		=>$empInitialName,
				'empNic'		=>$empNicNo,
				'empId '		=> $empId,
				'empNo'			=>$empNo,						
				'hwName'  		=>$hwName,
				'hwNicNo' 		=>$hwNICNo,
				'hwRelation'	=>$hwRelation
			);
			$result=$this->HrUser_model-> addEmployeeFamilyDetails($empfamily);	

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
			$result=$this->HrUser_model-> addEmployeeChildrenkDetails($empchildrendata);

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
			$result=$this->HrUser_model-> addEmployeeParentDetails($empparentdata);

			
	}


//-----------------------------------------------------------------
	public function resignationHandler(){
		$empName			=$this->input->post('empName');
		$empNo				=$this->input->post('empNo');
		$empNICNo			=$this->input->post('empNICNo');
		$department			=$this->input->post('department');
		$resignationDetails	=$this->input->post('resignationDetails');
		$resignationDate	=$this->input->post('resignationDate');

		$resignationdata=array(
			
			'empName'		=> $empName,
			'empNic' 		=> $empNICNo,
			'department'	=> $department,
			'resigDetails'	=> $resignationDetails,
			'resigDate'		=> $resignationDate,
			'empNo'			=> $empNo


		);//var_dump($resignationdata);
		$result=$this->HrUser_model-> addResignation($resignationdata);
		if($result ){
			
	
			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

	
			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}
	}
//---------------------------------------------------------------------------------------------------
	public function leaveRequestManagement(){
		
		$leaveEmpName	= $this->input->post('leaveEmpName');
		$leaveEmpNo		= $this->input->post('leaveEmpNo');
		$leaveEmpNICNo	= $this->input->post('leaveEmpNICNo');
		$leaveEmpDeprtment	= $this->input->post('leaveEmpDeprtment');
		$leaveReason	= $this->input->post('leaveReason');
		$leaveType		= $this->input->post('leaveType');
		$leaveDate 		= $this->input->post('leaveDate');
		$leaveEmpNICNo 	= $this->input->post('leaveEmpNICNo');
		$noOfDate 		= $this->input->post('noOfDate');

		$leaverequestdata=array(

			'empName' 		=> $leaveEmpName,
			'empNo'   		=> $leaveEmpNo,
			'leaveType'		=> $leaveType,
			'date' 			=> $leaveDate ,
			'reason'		=> $leaveReason,
			'department' 	=> $leaveEmpDeprtment,	
			'leaveEmpNICNo' => $leaveEmpNICNo,
			'noOfDate' 		=> $noOfDate,
			
		);//var_dump($leaverequestdata);	
		$result=$this->HrUser_model-> addLeaveRequestdata($leaverequestdata);
		if($result){

			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}
	}

//------------------------------------------------------------------

		public function trainingManagementData(){
			
			$trainingEmpName	=$this->input->post('trainingEmpName');
			$trainingEmpNo		=$this->input->post('trainingEmpNo');
			$trainingEmpNICNo	=$this->input->post('trainingEmpNICNo');
			$programmeName		=$this->input->post('trainingProgrameName');
			$courseContent		=$this->input->post('courseContent');
			$trainingVenue		=$this->input->post('trainingVenue');
			$trainingDate 		=$this->input->post('trainingDate');
			$trainingDuration 	=$this->input->post('trainingDuration');
			$courseFee 			=$this->input->post('courseFee');
		
			
		$trainingManagementData=array(

			'empName' 		=> $trainingEmpName,
			'empNo'   		=> $trainingEmpNo,
			'empNicNo'		=> $trainingEmpNICNo,
			'courseName' 	=> $programmeName ,
			'courseContent'	=> $courseContent,
			'venue' 		=> $trainingVenue,	
			'courseDuration'=> $trainingDuration,
			'date' 			=> $trainingDate,
			'courseFee' 	=> $courseFee,
			
		);
		//var_dump($trainingManagementData);	
		$result=$this->HrUser_model-> addTrainingManagementData($trainingManagementData);	
		if($result){
		
			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}
	}

//----------------------------------------------------------------------------------------------------
	public function incrementManagement(){

		$empName 			= $this->input->post('empName');
		$empNo				= $this->input->post('empNo');
		$empNICNo			= $this->input->post('empNICNo');
		$incrementDetails	= $this->input->post('incrementDetails');
		$date				= $this->input->post('date');
		$increment			= $this->input->post('increment');			
		$department			= $this->input->post('department');
		
		$incrementManagement=array(

			'empName'			=> $empName,
			'empNo' 			=> $empNo ,
			'empNicNo'			=> $empNICNo,					
			'incrementDetails'	=> $incrementDetails,
			'date' 				=> $date,
			'increment' 		=> $increment,
			'departmentName' 	=> $department,

		);
		//var_dump($monthlyPerformanceManagement);	
		$result=$this->HrUser_model-> addIncrementManagement($incrementManagement);	
		if($result){

			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}
	}
			


	public function monthlyPerformanceManagement(){

		$empid 				= $this->input->post('empid');
		$promotionYear		= $this->input->post('promotionYear');
		$promotionMonth		= $this->input->post('promotionMonth');
		$empName			= $this->input->post('empName');
		$empNo				= $this->input->post('empNo');
		$empNICNo			= $this->input->post('empNICNo');			
		$knowledgeOfWork 	= $this->input->post('knowledgeOfWork');
		$achievements		= $this->input->post('achievements');
		$quality 			= $this->input->post('quality');
		$motivationOfTheWork= $this->input->post('motivationOfTheWork');
		$relationship 		= $this->input->post('relationship');
		$attendence 		= $this->input->post('attendence');
		$discipline			= $this->input->post('discipline');
		$teamWork			= $this->input->post('teamWork');
		$adhearance 		= $this->input->post('adhearance');
		$abilityToWork 		= $this->input->post('abilityToWork');
		
		$monthlyPerformanceManagement=array(

			'promotionYear' 	=> $promotionYear,
			'promotionMonth'   	=> $promotionMonth,
			'empName'			=> $empName,
			'empNo' 			=> $empNo ,
			'empNICNo'			=> $empNICNo,					
			'knowledgeOfWork'	=> $knowledgeOfWork,
			'achievements' 		=> $achievements,
			'quality' 			=> $quality,
			'motivationOfTheWork'=> $motivationOfTheWork,
			'relationship' 		=> $relationship,	
			'discipline'		=> $discipline,
			'attendence' 		=> $attendence,
			'teamWork' 			=> $teamWork,
			'adhearance' 		=> $adhearance,
			'abilityToWork' 	=> $abilityToWork,
			'empId'				=> $empid


		);
		//var_dump($monthlyPerformanceManagement);	
		$result=$this->HrUser_model-> addMonthlyPerformanceData($monthlyPerformanceManagement);	
		if($result){

			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}


	}



	public function yearPerformanceManagement(){

		$evaluationYear		=$this->input->post('evaluationYear');
		$ymEmpName			=$this->input->post('ymEmpName');
		$yEempNo			=$this->input->post('yEempNo');
		$yEempNicNo			=$this->input->post('yEempNicNo');
		$evaluationAgree	=$this->input->post('evaluationAgree');
		$term1				= $this->input->post('term1');
		$term2 				=$this->input->post('term2');
		$term3				= $this->input->post('term3');
		//$yearTotal 		= $this->input->post('yearTotal');
		$approve			= $this->input->post('approve');
		//$approvedBy 		= $this->input->post('evaApprovedBy');


		$yearTotal          =$term1+$term2 +$term3;
		$totalPresantage	=($yearTotal/12)*100 ;

		if($totalPresantage>100){
			$overallEvaluation = 'Good';
		}elseif($totalPresantage>50){
			$overallEvaluation = 'Medium';
		}elseif($totalPresantage<50){
			$overallEvaluation = 'Weak';
		}
		
		$yearPerformanceManagement=array(

			'yearEva'		=> $evaluationYear,
			'empName'   	=> $ymEmpName,
			'empNo'			=> $yEempNo,
			'empNicNo' 		=> $yEempNicNo,
			'promotionAgree'=> $evaluationAgree,
			'term1' 		=> $term1,	
			'term2'			=> $term2,
			'term3' 		=> $term3,
			'yearTotal' 	=> $yearTotal,
			'approve'		=> $approve,
			//'approvedBy' 	=> $approvedBy,	
			'yearTotalPresantage'=>$totalPresantage,
			'overAllEvaluation'=>$overallEvaluation,

		);	
		$result=$this->HrUser_model-> addYearPerformanceData($yearPerformanceManagement);
		if($result){

			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}
	}



//----------------------------------payroll information----------------------------------------------------
	public function payRollInformationMgt(){

		$payEmpName			=$this->input->post('payEmpName');
		$payEmpNo			=$this->input->post('payEmpNo');
		$payEmpNICNo		=$this->input->post('payEmpNICNo');
		$payDepartment		=$this->input->post('payDepartment');
		$payBsalary			=$this->input->post('payBsalary');
		$payBRallowance		=$this->input->post('payBRallowance');
		$payIncrements		=$this->input->post('payIncrements');
		$payOTRate			=$this->input->post('payOTRate');
		$payEPF				=$this->input->post('payEPF');
		$payETF				=$this->input->post('payETF');
		$payNoPayRate		=$this->input->post('payNoPayRate');
		$payAbsents			=$this->input->post('payAbsents');
		$payLone			=$this->input->post('payLone');
		
		
		
		$payRollInformationMgt=array(

			'empName'		=> $payEmpName,
			'empNo'   		=> $payEmpNo,
			'empNicNo'		=> $payEmpNICNo,
			'department' 	=> $payDepartment,
			'basicSalary'	=> $payBsalary,
			'brAllowance' 	=> $payBRallowance,	
			'increments'	=> $payIncrements,
			'OTrate' 		=> $payOTRate,
			'epf' 			=> $payEPF,
			'etf'			=> $payETF,
			'noPayRate' 	=> $payNoPayRate,	
			'absent'		=> $payAbsents,
			'lone' 			=> $payLone,	
			
		);
		
		$result=$this->HrUser_model-> addayRollInformationData($payRollInformationMgt);
		if($result){

			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}


	}

//-----------------------------------------------department information------------------------------
	public function departmentManagement(){
		$departmentID	=$this->input->post('departmentId');
		$departmentName	=$this->input->post('departmentName');
	
		$departmentManagement=array(

			'deptId'			=>$departmentID,
			'departmentName'	=>$departmentName,
		

		);
		$result=$this->HrUser_model-> addDepartmentManagement($departmentManagement);
		if($result){
			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}


	}

//-----------------------------------------------designation management----------------------------
	public function designationManagement(){
	
		$departmentName	=$this->input->post('departmentName');
		$designationName=$this->input->post('designationName');
		$designationNo	=$this->input->post('designationNo');

		$designationManagement=array(

			
			'departmentName'	=>$departmentName,
			'designationName'	=>$designationName,
			'designationNo'		=>$designationNo,

		);
		$result=$this->HrUser_model-> addDesignationManagement($designationManagement);
		if($result){
			
			echo json_encode(
				array(

					'result' => $result,
					'status' => true,
					  
				)
			);

		}else{

			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}


	}

//----------------------------------------------------training data display -------------------------
public function trainingDataView(){
	$data['trainingDataView']=$this->HrUser_model->getTrainingDataView();
	$this->load->view('userViews\training',$data);

} 

//--------------------------------------------------resignation Data display -------------------------------

public function resignationDataView(){
	$data['resignationDataView']=$this->HrUser_model->getResignationDataView();
	$this->load->view('userViews\resignation',$data);

} 

//-------------------------------------------------leave Data display---------------------------------------
public function leaveDataView(){
	$data['leaveDataView']=$this->HrUser_model->getLeaveDataView();
	$this->load->view('userViews\leave',$data);

} 
//--------------------------------------------increment data display---------------------------------------
public function incrementDataView(){
	$data['incrementDataView']=$this->HrUser_model->getincrementDataView();
	$this->load->view('userViews\promotion',$data);

} 
//---------------------------------------------monthly performance data Display-----------------------------

public function monthlyPerfomDataView(){
	$data['monthlyPerfomDataView']=$this->HrUser_model->getMonthlyPerfomDataView();
	$this->load->view('userViews\monthlyPerformance',$data);

} 

//-----------------------------------------yearly performance data display---------------------------------

public function yearPerformanceDataView(){
	$data['yearPerformanceDataView']=$this->HrUser_model->getYarePerfomDataView();
	$this->load->view('userViews\yearPerformance',$data);

} 	

//-----------------------------------------payRoll info data display------------------------------------------


public function payRollInfoDataView(){
	$data['payRollInfoDataView']=$this->HrUser_model->getPayRollInfoDataView();
	$this->load->view('userViews\PayRollInformation',$data);

} 	

//------------------------------------department dataview----------------------------------------------------
	public function departmentDataView(){
		$data['departmentDataView']=$this->HrUser_model->getDepartmentDataView();
		$this->load->view('userViews\departments',$data);

	} 	

//-----------------------------------user Management Data view---------------
	public function userManagementDataView(){
		$data['userManagementDataView']=$this->HrUser_model->getUserManagementDataView();
		$this->load->view('userViews\userManagement',$data);

	} 


//-----------------------------------employee Details---------------------------------------------------------
public function employeeDetailView(){

	$Nic	=$this->input->post('SearchNicNo');
	$data['employeeDetailView']=$this->HrUser_model->getemployeeDetailView($Nic);
	$this->load->view('userViews\employeeDetails',$data);

} 		

//------------------------------------------------reporting ----------------------------------------------------


//----------------------------------------------Report Approved leave-------------------------------------------------
	public function approvedLeaveDatalView(){
	$data['approvedLeaveDatalView']=$this->HrUser_model->getApprovedLeaveDatalView();
	$this->load->view('userViews\report2',$data);
		
} 
//----------------------------------------------Decline leave report----------------------------------------
public function declineLeaveDatalView(){
	$data['declineLeaveDatalView']=$this->HrUser_model->getDeclineLeaveDatalView();
	$this->load->view('userViews\report3',$data);
		
} 
//---------------------------------------------leave reports------------------------------------------------
public function reportLeaveDatalView(){
	$data['reportLeaveDatalView']=$this->HrUser_model->getReportLeaveDatalView();
	$this->load->view('userViews\report4',$data);
		
} 

//--------------------------------------------promotion approval reports----------------------------------------
public function approvedPromotionDatalView(){
	$data['approvedPromotionDatalView']=$this->HrUser_model->getApprovedPromotionDatalView();
	$this->load->view('userViews\report5',$data);
		
} 
//-------------------------------------------promotion decline reports-----------------------------------------
public function declinePromotionDatalView(){
	$data['declinePromotionDatalView']=$this->HrUser_model->getDeclinePromotionDatalView();
	$this->load->view('userViews\report6',$data);
		
} 
//-------------------------------------------all promotion reports-----------------------------------------------
public function reportPromotionDatalView(){
	$data['reportPromotionDatalView']=$this->HrUser_model->getReportPromotionDatalView();
	$this->load->view('userViews\report7',$data);
		
} 


// proformance approval /rejection-----------------------------------------------------------------------------

public function updateyearPerformance(){
	$yearPromoId=$this->input->post('yearPromoId');
	$yearPromoStatus=$this->input->post('yearPromoStatus');

	$data = array('yearPromoStatus' => $yearPromoStatus);
	$wherearray = array('yearPromoId' => $yearPromoId);

	$result=$this->HrUser_model->update($data,$wherearray);

	if($result){

		echo json_encode(
			array(

				'result' => $result,
				'status' => true,
				  
			)
		);

	}else{

		echo json_encode(
			array(
				  
				'status' => false,
				  
			)
		);
	}
}


//----------------------------------leave approval or rejection --------------------------------------
public function updateLeave(){
	$leaveId=$this->input->post('leaveId');
	$leaveStatus=$this->input->post('leaveStatus');

	$data = array('leaveStatus'=> $leaveStatus);
	$wherearray =array('leaveId' => $leaveId);

	$result =$this ->HrUser_model->updateLeaveApproval($data,$wherearray);

	if($result){

	
		echo json_encode(
			array(

				'result' => $result,
				'status' => true,
				  
			)
		);

	}else{

		echo json_encode(
			array(
				  
				'status' => false,
				  
			)
		);
	}
}
//-------------------------------increment approval----------------------------------------------------------
public function updateincrement(){

	$IncrementId=$this->input->post('IncrementId');
	$incrementStatus=$this->input->post('incrementStatus');

	$data = array('incrementStatus'=> $incrementStatus);
	$wherearray =array('IncrementId' => $IncrementId);

	$result =$this ->HrUser_model->updateIncrementApproval($data,$wherearray);

	if($result){

	
		echo json_encode(
			array(

				'result' => $result,
				'status' => true,
				
			)
		);

	}else{

		echo json_encode(
			array(
				
				'status' => false,
				
			)
		);
	}
}



//------------------------------emp resignation approval-----------------------------------------------------

	public function updateResignation(){
	$empResigId=$this->input->post('empResigId');
	$empStatus=$this->input->post('empStatus');

	$data = array('empStatus'=> $empStatus);
	$wherearray =array('empResigId' => $empResigId);

	$result =$this ->HrUser_model->updateResignationApproval($data,$wherearray);

	if($result){


	echo json_encode(
	array(

		'result' => $result,
		'status' => true,
		
	)
	);

	}else{

	echo json_encode(
	array(
		
		'status' => false,
		
	)
	);
	}
	}





public function test(){

	$data['allUserData']=$this->HrUser_model->getAllUserData();

	$data['userData']=$this->HrUser_model->getUserData('EMP1569394607');

	$this->load->view('example',$data);

}
//---------------------------------------------------------------------------

}
