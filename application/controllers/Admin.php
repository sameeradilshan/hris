<?php
class Admin extends CI_Controller{

	public function __construct() {

		parent::__construct();

		$currentUserData = $this->session->userdata();

		    if(!isset($currentUserData["loggedHRAdmin"]))
			{
				redirect('/Login/index');
			}

		$this->load->model('Admin_model','',true);
		$this->load->model('Admin_model','',true);
	
		

	}

// admin views ..................................................................................


	public function index()
	{
		$this->load->view('adminViews\home');
	}
	public function employeeDetails()
	{
		$this->load->view('adminViews\employeeDetails');
	}
	public function addEmploye()
	{
		$this->load->view('adminViews\addEmploye');
	}

	public function yearplanning()
	{
		$this->load->view('adminViews\yearplanning');
	}
	public function progress()
	{
		$this->load->view('adminViews\progress');
	}
	public function loginnew()
	{
		$this->load->view('adminViews\loginnew');
	}
	public function firstPage()
	{
		$this->load->view('adminViews\firstPage');
	}
	public function overTime()
	{
		$this->load->view('adminViews\overTime');
	}
	
	
	public function attendance()
	{
		$this->load->view('adminViews\attendance');
	}
	
	public function leaveManagement()
	{
		$this->load->view('adminViews\leaveManagement');
	}
	public function payRoll()
	{
		$this->load->view('adminViews\payRoll');
	}
	
	public function PayRollInformation()
	{
		$this->load->view('adminViews\PayRollInformation');
	}
	public function PaySheetMaker()
	{
		$this->load->view('adminViews\paySheetMaker');
	}
	public function timeSheet()
	{
		$this->load->view('adminViews\timeSheet');
	}
	public function report()
	{
		$this->load->view('adminViews\timeSheet');
	}
	
	
	
// admin views end----------------------------------------------------------------------------------------


// user Management Controllers------------------------------- --------------------------------------------

	public function UserManagementHandler(){
	

			$userName=$this->input->post('userName');
			$userEmail=$this->input->post('userEmail');
			$UserNIC=$this->input->post('userNIC');
			$userEmpId=$this->input->post('empId');
			$userType=$this->input->post('userType');
			$userAddDate=$this->input->post('userAddDate');
			//$password='password';

		

		if($userType=='Admin'){

			$data= array(
				'adminName'=>$userName,
				'adminEmail'=>$userEmail,
				'adminNIC'=>	$UserNIC,
				'empId'=>$userEmpId,
				'Type'=>$userType,
				'adminAddDate'=>$userAddDate,

			);
			

			$result=$this->Admin_model->addAdmin($data);
			

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
			 
		}elseif($userType=='Executive'){

			$data= array(
				'empName'=>$userName,
				'hrExeEmail'=>$userEmail,
				'hrExeNIC'=>	$UserNIC,
				'empId'=>$userEmpId,
				'userType'=>$userType,
				'userAddDate'=>$userAddDate,

			);
			$result=$this->Admin_model-> addExecutive($data);
			//var_dump($result);

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
			

		}elseif($userType=='Staff'){
			$data= array(
				'empName'=>$userName,
				'hrUserEmail'=>$userEmail,
				'hrUserNIC'=>	$UserNIC,
				'empId'=>$userEmpId,
				'userType'=>$userType,
				'userAddDate'=>	$userAddDate,

			);
			$result=$this->Admin_model-> addStaffUser($data);
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
		}else{
		
			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}
		
	}	

	
// employee add ------------------------------------------------------------------------- 
			public function EmployeeDetailshandler(){
				// var_dump($this->input->post());
				// die();
				
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
					 $result=$this->Admin_model-> addEmployeePersonalDetails($empdata);
					
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
					$result=$this->Admin_model-> addEmployeeEducationalDetails($empedudata);

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
					$result=$this->Admin_model-> addEmployeeEducationalResult($empresultdata);
					

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
					$result=$this->Admin_model-> addEmployeeJobDetails($empjobdata);
					

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
					$result=$this->Admin_model-> addEmployeeBankDetails($empbankdata);	


					$empfamily=array(
						'empName'		=>$empInitialName,
						'empNic'		=>$empNicNo,
						'empId '		=> $empId,
						'empNo'			=>$empNo,						
						'hwName'  		=>$hwName,
						'hwNicNo' 		=>$hwNICNo,
						'hwRelation'	=>$hwRelation
					);
					$result=$this->Admin_model-> addEmployeeFamilyDetails($empfamily);	

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
					$result=$this->Admin_model-> addEmployeeChildrenkDetails($empchildrendata);

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
					$result=$this->Admin_model-> addEmployeeParentDetails($empparentdata);
					if($result){
						echo("Employee Data adding Succesfully");
					}else{

					}
					
					
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
				$result=$this->Admin_model-> addResignation($resignationdata);
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
				$leaveDateForm 	= $this->input->post('leaveDateForm');
				$leaveDateTo 		= $this->input->post('leaveDateTo');

				$leaverequestdata=array(

					'empName' 		=> $leaveEmpName,
					'empNo'   		=> $leaveEmpNo,
					'leaveType'		=> $leaveType,
					'noOfDate' 		=> $leaveDate ,
					'reason'		=> $leaveReason,
					'department' 	=> $leaveEmpDeprtment,	
					'leaveEmpNICNo' => $leaveEmpNICNo,
					'dateFrom' 		=> $leaveDateForm,
					'dateTo' 		=> $leaveDateTo,
					
				);//var_dump($leaverequestdata);	
				$result=$this->Admin_model-> addLeaveRequestdata($leaverequestdata);
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
				$result=$this->Admin_model-> addTrainingManagementData($trainingManagementData);	
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
				$result=$this->Admin_model-> addIncrementManagement($incrementManagement);	
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

				$monthlytotal =$knowledgeOfWork +  $achievements+$quality+$motivationOfTheWork+$relationship+$discipline+$attendence+$teamWork+ $adhearance+$abilityToWork;

				
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
					
					'promotionTotal'	=> $monthlytotal,

				);
				//var_dump($monthlyPerformanceManagement);	
				$result=$this->Admin_model-> addMonthlyPerformanceData($monthlyPerformanceManagement);	
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
//-----------------------------------------------------------------------

public function yearPerformanceManagement(){

	$data['yearPerformanceManagement'] = $this->Admin_model->getmonthperfor();
	$x=0;
	foreach($data ->result_array() as $row){
		//echo $row['title'];
		var_dump($row);
	}
			//var_dump('yearPerformanceManagement');

			
}





//------------------------------------------------------------------------------


			public function yearPerformanceManagemen1(){

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
				$result=$this->Admin_model-> addYearPerformanceData($yearPerformanceManagement);
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

				//var_dump('payEmpName');

				$payEmpName			=$this->input->post('payinfoEmpName');
				$payEmpNo			=$this->input->post('payEmpNo');
				$payEmpNICNo		=$this->input->post('payEmpNICNo');
				$payDepartment		=$this->input->post('payDepartment');
				$payBsalary			=$this->input->post('payBsalary');
				$payBRallowance		=$this->input->post('payBRallowance');
				$payIncrements		=$this->input->post('payIncrements');
				$payOTRate			=$this->input->post('payOTRate');
				$payEPFPresantage	=$this->input->post('payEPFPresantage');
				$payETFPresantage	=$this->input->post('payETFPresantage');
				$payNoPayRate		=$this->input->post('payNoPayRate');
				$payAbsents			=$this->input->post('payAbsents');
				$payLone			=$this->input->post('payLone');
				
				// EPF calculation
				$payEPFamount=($payBsalary*$payEPFPresantage)/100 ;

				// ETF calculations
				$payETFamount=($payBsalary*$payETFPresantage)/100 ;

				//lone calculation
				
				$payRollInformationMgt=array(

					'empName'		=> $payEmpName,
					'empNo'   		=> $payEmpNo,
					'empNicNo'		=> $payEmpNICNo,
					'department' 	=> $payDepartment,
					'basicSalary'	=> $payBsalary,
					'brAllowance' 	=> $payBRallowance,	
					'increments'	=> $payIncrements,
					'OTrate' 		=> $payOTRate,
					'epf' 			=> $payEPFamount,
					'etf'			=> $payETFamount,
					'noPayRate' 	=> $payNoPayRate,	
					'absent'		=> $payAbsents,
					'lone' 			=> $payLone,	
					'epfPresantage' => $payEPFPresantage,
					'etfPresantage'	=> $payETFPresantage,

				);
				//var_dump($payRollInformationMgt);
				$result=$this->Admin_model-> addayRollInformationData($payRollInformationMgt);
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
				$result=$this->Admin_model-> addDepartmentManagement($departmentManagement);
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
				$result=$this->Admin_model-> addDesignationManagement($designationManagement);
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
				$data['trainingDataView']=$this->Admin_model->getTrainingDataView();
				$this->load->view('adminViews\training',$data);

			} 

//--------------------------------------------------resignation Data display -------------------------------

			public function resignationDataView(){
				$data['resignationDataView']=$this->Admin_model->getResignationDataView();
				$this->load->view('adminViews\resignation',$data);

			} 

//-------------------------------------------------leave Data display---------------------------------------
			public function leaveDataView(){
				$data['leaveDataView']=$this->Admin_model->getLeaveDataView();
				$this->load->view('adminViews\leave',$data);

			} 
//--------------------------------------------increment data display---------------------------------------
			public function incrementDataView(){
				$data['incrementDataView']=$this->Admin_model->getincrementDataView();
				$this->load->view('adminViews\promotion',$data);

			} 
//---------------------------------------------monthly performance data Display-----------------------------

			public function monthlyPerfomDataView(){
				$data['monthlyPerfomDataView']=$this->Admin_model->getMonthlyPerfomDataView();
				$this->load->view('adminViews\monthlyPerformance',$data);

			} 

//-----------------------------------------yearly performance data display---------------------------------

			public function yearPerformanceDataView(){
				$data['yearPerformanceDataView']=$this->Admin_model->getYarePerfomDataView();
				$this->load->view('adminViews\yearPerformance',$data);

			} 	

//-----------------------------------------payRoll info data display------------------------------------------

			
			public function payRollInfoDataView(){
				$data['payRollInfoDataView']=$this->Admin_model->getPayRollInfoDataView();
				$this->load->view('adminViews\PayRollInformation',$data);

			} 	

//------------------------------------department dataview----------------------------------------------------
				public function departmentDataView(){
					$data['departmentDataView']=$this->Admin_model->getDepartmentDataView();
					$this->load->view('adminViews\departments',$data);

				} 	

//-----------------------------------user Management Data view---------------
				public function userManagementDataView(){
					$data['userManagementDataView']=$this->Admin_model->getUserManagementDataView();
					$this->load->view('adminViews\userManagement',$data);

				} 


//-----------------------------------employee Details---------------------------------------------------------
			public function employeeDetailView(){

				$empNo	=$this->input->post('SearchEmpNo');
				$data['employeeDetail']=$this->Admin_model->getemployeeDetailView($empNo);
				$this->load->view('adminViews\employeeDetails',$data);

			} 		
//-----------------------------------paysheet Information data ---------------------------------
			public function paySeetMakingInformation(){

				$empNo	=$this->input->post('$empNo');
				$data['paySeetMakingInformation']=$this->Admin_model->getpaySeetMakingInformation($empNo);
				$this->load->view('adminViews\PaySheetMaker',$data);

			} 	


//-------------------------------------timesheet data view-------------------------------------------------------
			public function timeDataView(){
				$data['timeDataView']=$this->Admin_model->gettimeDataView();
				$this->load->view('adminViews\timeSheet',$data);

			} 


//------------------------------------------------reporting ----------------------------------------------------


//----------------------------------------------Report Approved leave-------------------------------------------------
				public function approvedLeaveDatalView(){
				$data['approvedLeaveDatalView']=$this->Admin_model->getApprovedLeaveDatalView();
				$this->load->view('adminViews\report2',$data);
					
			} 
//----------------------------------------------Decline leave report----------------------------------------
			public function declineLeaveDatalView(){
				$data['declineLeaveDatalView']=$this->Admin_model->getDeclineLeaveDatalView();
				$this->load->view('adminViews\report3',$data);
					
			} 
//---------------------------------------------leave reports------------------------------------------------
			public function reportLeaveDatalView(){
				$data['reportLeaveDatalView']=$this->Admin_model->getReportLeaveDatalView();
				$this->load->view('adminViews\report4',$data);
					
			} 

//--------------------------------------------promotion approval reports----------------------------------------
			public function approvedPromotionDatalView(){
				$data['approvedPromotionDatalView']=$this->Admin_model->getApprovedPromotionDatalView();
				$this->load->view('adminViews\report5',$data);
					
			} 
//-------------------------------------------promotion decline reports-----------------------------------------
			public function declinePromotionDatalView(){
				$data['declinePromotionDatalView']=$this->Admin_model->getDeclinePromotionDatalView();
				$this->load->view('adminViews\report6',$data);
					
			} 
//-------------------------------------------all promotion reports-----------------------------------------------
			public function reportPromotionDatalView(){
				$data['reportPromotionDatalView']=$this->Admin_model->getReportPromotionDatalView();
				$this->load->view('adminViews\report7',$data);
					
			} 

// ---------------------------------------Departmental Employee Reports-----------------------------------
			public function reportDeptEmpDataView(){
				$data['reportPromotionDatalView']=$this->Admin_model->getreportDeptEmpDataView();
				$this->load->view('adminViews\report8',$data);
					
			} 


// proformance approval /rejection-----------------------------------------------------------------------------

			public function apporvelMonthPerformance(){
				$monthPromoId=$this->input->post('promotionId');
				$monthPromoStatus=$this->input->post('promotionStatus');

				$data = array('yearPromoStatus' => $monthPromoStatus);
				$wherearray = array('promotionId' => $monthPromoId);

				$result=$this->Admin_model->approvalMonthPerformance($data,$wherearray);

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

			// proformance approval /rejection-----------------------------------------------------------------------------

			public function dclineMonthPerformance(){
				$monthPromoId=$this->input->post('promotionId');
				$monthPromoStatus=$this->input->post('promotionStatus');

				$data = array('promotionStatus' => $monthPromoStatus);
				$wherearray = array('promotionId' => $monthPromoId);

				$result=$this->Admin_model->approvalMonthPerformance($data,$wherearray);

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

				$result =$this ->Admin_model->updateLeaveApproval($data,$wherearray);

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
//---------------------------training approval or rejction-------------------------------------------------
//----------------------------------leave approval or rejection --------------------------------------
public function approvalTraining(){
	$trainingId=$this->input->post('trainingId');
	$trainingStatus=$this->input->post('trainingStatus');

	$data = array('trainingStatus'=> $trainingStatus);
	$wherearray =array('trainingId' => $trainingId);

	$result =$this ->Admin_model->updateTrainingApproval($data,$wherearray);

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

				$result =$this ->Admin_model->updateIncrementApproval($data,$wherearray);

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

	$result =$this ->Admin_model->updateResignationApproval($data,$wherearray);

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

//----------------------------------------------------resignation edit data-------------------------------
			public function resignationupdate(){

				$empName			=$this->input->post('empName');
				$empNo				=$this->input->post('empNo');
				$empNICNo			=$this->input->post('empNICNo');
				$resignationDetails	=$this->input->post('resignationDetails');
				$resignationDate	=$this->input->post('resignationDate');
				$resignationId		=$this->input->post('empResigId');

				$resignationdata=array(
					
					'empName'		=> $empName,
					'empNic' 		=> $empNICNo,
					'resigDetails'	=> $resignationDetails,
					'resigDate'		=> $resignationDate,
					'empNo'			=> $empNo,
					'empResigId'	=> $resignationId,


				);
				$wherearray =array('empResigId' => $resignationId);

				var_dump($resignationdata);
				$result =$this ->Admin_model->editResignation($resignationdata,$wherearray);

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

//-------------------------------edit raining data------------------------------------------------
			public function trainingupdate(){

				$empName				=$this->input->post('empName');
				$empNo					=$this->input->post('empNo');
				$empNICNo				=$this->input->post('empNICNo');
				$trainingProgrameName	=$this->input->post('trainingProgrameName');
				$courseContent			=$this->input->post('courseContent');
				$trainingVenue			=$this->input->post('trainingVenue');
				$trainingDate			=$this->input->post('trainingDate');
				$trainingDuration		=$this->input->post('trainingDuration');
				$courseFee				=$this->input->post('courseFee');
				$trainingId				=$this->input->post('trainingId');
				
				

				$trainingData=array(
					
					'empName'		=> $empName,
					'empNicNo' 		=> $empNICNo,
					'empNo'			=> $empNo,
					'courseName'	=> $trainingProgrameName,
					'courseContent'	=> $courseContent,
					'venue'			=> $trainingVenue,
					'date'			=> $trainingDate,
					'courseDuration'=> $trainingDuration,
					'courseFee'		=> $courseFee,
				
				);
				$wherearray =array('trainingId' => $trainingId);
				
				
				$result =$this ->Admin_model->editTrainingData($trainingData,$wherearray);
			
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

//-----------------------leave edit----------------------------		
public function leaveUpdate(){

				$leaveEmpName	= $this->input->post('leaveEmpName');
				$leaveEmpNo		= $this->input->post('leaveEmpNo');
				$leaveEmpNICNo	= $this->input->post('leaveEmpNICNo');
				$leaveEmpDeprtment	= $this->input->post('leaveEmpDeprtment');
				$leaveReason	= $this->input->post('leaveReason');
				$leaveType		= $this->input->post('leaveType');
				$leaveDate 		= $this->input->post('leaveDate');
				$leaveDateForm 	= $this->input->post('leaveDateForm');
				$leaveDateTo 		= $this->input->post('leaveDateTo');
				$leaveId 		= $this->input->post('leaveId');

				$leaveEditData=array(

					'empName' 		=> $leaveEmpName,
					'empNo'   		=> $leaveEmpNo,
					'leaveType'		=> $leaveType,
					'noOfDate' 		=> $leaveDate ,
					'reason'		=> $leaveReason,
					'department' 	=> $leaveEmpDeprtment,	
					'leaveEmpNICNo' => $leaveEmpNICNo,
					'dateFrom' 		=> $leaveDateForm,
					'dateTo' 		=> $leaveDateTo,
	
	);
	$wherearray =array('leaveId' => $leaveId);
	
	
	$result =$this ->Admin_model->editLeaveData($leaveEditData,$wherearray);

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
//--------------------------monthly performance edit--------------------------------------
public function maonthPerformaceEdit(){

				
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
				$promotionId 		= $this->input->post('promotionId');
				
				$maonthPerformaceEdit=array(

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
				);
				$wherearray =array('promotionId' => $promotionId);
				
				
				$result =$this ->Admin_model->editmaonthPerformaceData($maonthPerformaceEdit,$wherearray);
			
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

//----------------------------------payroll information edit-----------------------------------

		public function payRollInformationEdit(){

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
			$editempPayId			=$this->input->post('editempPayId');
			
			
			
			$payRollInformationEdit=array(

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
			$wherearray =array('empPayId' => $editempPayId);
			
			$result=$this->Admin_model-> payRollInformationEdit($payRollInformationEdit,$wherearray);
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
//-----------------------------------------------------------
			public function test(){

				$data['allUserData']=$this->Admin_model->getAllUserData();

				$data['userData']=$this->Admin_model->getUserData('EMP1569394607');

				$this->load->view('example',$data);

			}
//------------------------------------Time Sheet Upload------------------------
		public function upload(){

			$structure = 'upload';
        

 		/////////////////////////////////////////////////////////////////////////////////

 		$config['upload_path']          = $structure;
        $config['allowed_types']        = '*';
        $config['max_size']             = 50000;
        $config['max_width']            = 10240;
        $config['max_height']           = 10240;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('csv_file'))
        {
                $error = array('error' => $this->upload->display_errors());

                //var_dump($error);

                //$this->load->view('upload_form', $error);
                //echo "not insder";
        }
        else
        {
                $data1 = array('upload_data' => $this->upload->data());
                //echo "insder";

               // $this->load->view('upload_success', $data);
        }

 		if(isset($data1)){
 			$timesheet=$data1['upload_data']['file_name'];
	        $path=$structure.'/';
	        $timesheet=$path.$timesheet;
 		}else{
 			$timesheet='';
		 }

		//  $myfile = fopen(base_url().$timesheet, "r") or die("Unable to open file!");
		// 	echo fread($myfile,filesize("webdictionary.txt"));

		$file = fopen(base_url().$timesheet, "r");

		$array=[];

		//Output lines until EOF is reached
		while(! feof($file)) {
		$line = fgets($file);
		$linearray=explode(",",$line);
		
		$timeData=array(
					
			'empNo'			=> $linearray[0],
			'empName' 		=> $linearray[1],
			'date'			=> $linearray[2],
			'in_time'		=> $linearray[3],
			'out_time'		=> $linearray[4],
			

		);
		$result=$this->Admin_model-> timeSheetData($timeData);
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

		
		// var_dump($data);
		// echo $line. "<br>";
		
		}

		fclose($file);

		 var_dump(base_url().$timesheet);
		 
	}
//-----------------------------------------
public function getempData(){
	$data['getempData'] = $this->Admin_model->gettData();
	$data['salaryInfo'] =array();

	//---------------viw

	// foreach ($getempData as $employee) {
	// 	$i=0;
	// 	$employee->empName;

	// 	if($salaryInfo[$i]->basicSalry){
	// 		echo $salaryInfo[$i]->basicSalry;
	// 	}

	// 	$i++;
	// }

	//view

	//var_dump($data['getempData']);
	
	foreach ($data['getempData'] as $employee) {
		$salaryInfo=$this->Admin_model->getPayRollInfoDataViewOne($employee->empNo);
		$startDate='2019-12-01';
		$endDate='2020-01-01'; 

		$countPermonth=$this->Admin_model->getAttendacebymonth($employee->empNo,$startDate,$endDate);
		
		//select count(empNo) as datecame from attendancetable where empNO=$empNo AND date BETWEEN $startDate AND $endDate;

		if($salaryInfo){
			$basicSalary=$salaryInfo->basicSalary;
			$brAllowance=$salaryInfo->brAllowance;
			$increments=$salaryInfo->increments;
			$OTrate=$salaryInfo->OTrate;
			$epf=$salaryInfo->epf;
			$etf=$salaryInfo->etf;
			$noPayRate=$salaryInfo->noPayRate;
			$lone=$salaryInfo->lone;
			$absent=$salaryInfo->absent;
			$reduction=0;

			if($countPermonth<22){
				$reduction=(22-$countPermonth) *458;
			}
			
			$total=$basicSalary-$reduction;



			$arrayName = array('basicSalary' => $basicSalary );
			array_push($data['salaryInfo'],$arrayName);
		}else{
			array_push($data['salaryInfo'],'');
		}
	}

	var_dump($data['salaryInfo']);
		
		echo '<br/>';

	

}
}

?>
