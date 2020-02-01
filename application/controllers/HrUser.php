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

		 $this->load->model('HrUser_model','',true);
		 $this->load->model('HrUser_model','',true);
	

	}
	//..................................................................................


	public function index()
	{
		//------------------emp leave-----
		$month = date('m');
		$year = date('Y');
		$date =date('d');

		if($month == 12){
			$endyear = $year +1;
			$endmonth= 01;
		}else{
			$endyear = $year;
			$endmonth = $month+1;
			
		}
		
		$startDate=$year.'-'.$month.'-01';
		$enddata=$endyear.'-'.$endmonth.'-01';
		
		$data['leave']=sizeof($this->HrUser_model-> getEmployeeLeave($startDate,$enddata));
		//var_dump($result);
		//emp attendance

		//$data['attendance']=sizeof($this->HrUser_model-> getEmployeeaAttendance($startDate,$enddata));
		$data['resignation']=sizeof($this->HrUser_model-> getEmployeeResignation($startDate,$enddata));

		//var_dump($data);
		$this->load->view('userViews\home',$data);
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
	public function overTime()

	{
	$StartDate	=$this->input->post('startDate');
	$EndDate	=$this->input->post('endDate');
	$empNo	=$this->input->post('empNo');

	// $StartDate=2019-11-01;
	// $EndDate=2019-11-31;
	// $empNo=100;
	$otData['overTime']=$this->HrUser_model->getOverTimeCaldata($empNo,$StartDate,$EndDate);

		$this->load->view('userViews\overTime',$otData);
	}
	public function userProfile()
	{
		$this->load->view('userViews\userProfile');
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

		$month = date('m');
		$year = date('Y');

		

		if($month==12){
			$nextMonth='01';
			$nextYear=$year+1;
		}else{
			$nextMonth=$month+1;
			$nextYear=$year;
		}

		// if($month <10){
		// 	$month='0'.$month;
		// }
		if($nextMonth <10){
			$nextMonth='0'.$nextMonth;
		}
		$stDate=$year.'-'.$month.'-01';
		$endDate=$nextYear.'-'.$nextMonth.'-01';

		$data['thisMonthPaysheetData']=$this->HrUser_model->getThisMonthPaySheets($stDate,$endDate);
		
		$this->load->view('userViews\paySheetMaker',$data);
	}
	public function timeSheet()
	{
		$this->load->view('userViews\timeSheet');
	}
	public function report()
	{
		$this->load->view('userViews\timeSheet');
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

			

			$hruserpassword='QAZWSXEDCRFVTGBYHNUJMIKOLP1234567890';
		    $hruserpassword= str_shuffle($hruserpassword);
		    $hruserpassword= substr($hruserpassword,0,8);
		

		if($userType=='Admin'){

			$data= array(
				'adminName'=>	$userName,
				'adminEmail'=>	$userEmail,
				'adminNIC'=>	$UserNIC,
				'empId'		=>	$userEmpId,
				'Type'		=>	$userType,
				'adminAddData'=>$userAddDate,
				'adminPassword'=>$hruserpassword,

			);//var_dump($data);
			
			$msg="Dear  ".$userName.",<br>
			Welcome to Sri Lanka Thriposha Ltd. 
			Please find mentioned below the login link to get started on your venture. </br>
			Login Page: < https://localhost/HRIS> <br>
			User Name: ".$userEmail."<br>
			Password: <PW> ".$hruserpassword."<br>
			Thanks and regards.

					";

				

			 $result1=$this->HrUser_model->sendEmail($msg,$userEmail);
			 var_dump($result1);
			 if($result1){
			$result=$this->HrUser_model->addAdmin($data);
			

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
		}elseif($userType=='Executive'){

			$data= array(
				'empName'=>$userName,
				'hrExeEmail'=>$userEmail,
				'hrExeNIC'=>	$UserNIC,
				'empId'=>$userEmpId,
				'userType'=>$userType,
				'userAddDate'=>$userAddDate,
				'hrExePassword'=>$hruserpassword,

			);
			$msg="Dear  ".$userName.",<br>
			Welcome to Sri Lanka Thriposha Ltd. 
			Please find mentioned below the login link to get started on your venture. </br>
			Login Page: < https://localhost/HRIS> <br>
			User Name: ".$userEmail."<br>
			Password: <PW> ".$hruserpassword."<br>
			Thanks and regards.

					";

				

			 $result1=$this->HrUser_model->sendEmail($msg,$userEmail);
			 var_dump($result1);
			 if($result1){
			$result=$this->HrUser_model-> addExecutive($data);
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
		}
		}elseif($userType=='Staff'){
			$data= array(
				'empName'=>$userName,
				'hrUserEmail'=>$userEmail,
				'hrUserNIC'=>	$UserNIC,
				'empId'=>$userEmpId,
				'userType'=>$userType,
				'userAddDate'=>	$userAddDate,
				'hrUserPassword'=>$hruserpassword
			);
			$msg="Dear ".$userName.",<br>
			Welcome to Sri Lanka Thriposha Ltd. 
			Please find mentioned below the login link to get started on your venture. </br>
			Login Page: < https://localhost/HRIS> <br>
			User Name: ".$userEmail."<br>
			Password: <PW> ".$hruserpassword."<br>
			Thanks and regards.

					";

				

			 $result1=$this->HrUser_model->sendEmail($msg,$userEmail);
			 var_dump($result1);
			 if($result1){
			$result=$this->HrUser_model-> addStaffUser($data);
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
		else{
		
			echo json_encode(
				array(
					  
					'status' => false,
					  
				)
			);
		}
		
		}
	}	
	
//-----------------------------------------------admin data edit------------------
			public function admindataEdit(){

				$EditempName		=$this->input->post('EditempName');
				$EditempNo			=$this->input->post('EditempNo');
				$EditempNICNo		=$this->input->post('EditempNICNo');
				$Editemail			=$this->input->post('Editemail');
				$EdituserAddDate	=$this->input->post('EdituserAddDate');
				$EdituserType		=$this->input->post('EdituserType');

				$userId=$this->session->userdata['loggedHRUser']['empName'];


				//var_dump($userId);
				
				$wherearray =array('adminId' => $userId);
				$datarr= array(

					'adminName'=>	$EditempName,
					'adminEmail'=>	$Editemail,
					'adminNIC'=>	$EditempNICNo,
					'empNo'		=>	$EditempNo,
					'Type'		=>	$EdituserType,
					'adminAddData'=>$EdituserAddDate,
					
	
				);//var_dump($datarr);
				$result=$this->HrUser_model->EditAdmin($datarr,$wherearray);
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


				 if($contractperiod==''&& $trainingPeriod==''){
					$empType ='Permanent';
				 }elseif($contractperiod !==''&& $trainingPeriod==''){
					$empType ='Contract';
				 }else{
					$empType ='Training';
				 }
					
				

				
				
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
						'EPFNo'			=>$epfNo,
						'ETFNo'			=>$etfNo,
						'bankName'		=>$bankName,
						'empType'		=>$empType,
						'department'	=>$department,
						'designation'	=>$jobDesignation,
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
					if($result){
						echo("Employee Data adding Succesfully");
					}else{

					}
					
					
			}

	
//------------------------------resignationHandler-----------------------------------
			public function resignationHandler(){
				$empName			=$this->input->post('empName');
				$empNo				=$this->input->post('empNo');
				$empNICNo			=$this->input->post('empNICNo');
				$department			=$this->input->post('department');
				$resignationDetails	=$this->input->post('resignationDetails');
				$resignationDate	=$this->input->post('resignationDate');

				$adminName=$this->session->userdata['loggedHRUser']['empName'];

				$resignationdata=array(
					
					'empName'		=> $empName,
					'empNic' 		=> $empNICNo,
					'department'	=> $department,
					'resigDetails'	=> $resignationDetails,
					'resigDate'		=> $resignationDate,
					'empNo'			=> $empNo,
					'EnteredBy'		=>$adminName,


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
				$leaveDateForm 	= $this->input->post('leaveDateForm');
				$leaveDateTo 		= $this->input->post('leaveDateTo');

				$userName=$this->session->userdata['loggedHRUser']['empName'];

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
					'EnteredBy' 	=> $userName,
					
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

					$adminName=$this->session->userdata['loggedHRUser']['empName'];
					
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
					'EnteredBy' 	=> $adminName,
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

				$userId=$this->session->userdata['loggedHRUser']['empName'];
				
				$incrementManagement=array(

					'empName'			=> $empName,
					'empNo' 			=> $empNo ,
					'empNicNo'			=> $empNICNo,					
					'incrementDetails'	=> $incrementDetails,
					'date' 				=> $date,
					'increment' 		=> $increment,
					'departmentName' 	=> $department,
					'EnteredBy' 		=> $userId,

				);
				
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
//-----------------------------------------------------------------------

public function yearPerformanceManagement(){

	$data['yearPerformanceManagement'] = $this->HrUser_model->getmonthperfor();
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
				$payEFTComp			=$this->input->post('payEFTComp');
				$payliving			=$this->input->post('payLiving');
				
				// EPF calculation
				$payEPFamount=($payBsalary*$payEPFPresantage)/100 ;

				// ETF calculations
				$payETFamount=($payBsalary*$payETFPresantage)/100 ;

				// EPF Calculation compny
				$payETFCompany=($payBsalary*$payEFTComp)/100 ;

				//lone calculation
				// gross salary
				$grossSalary = ($payBsalary+ $payBRallowance + $payIncrements+$payliving);

				if($payBsalary>600000){
					$paye =($payBsalary*4)/100;
				}elseif( $payBsalary>1200000){
					$paye =((600000*4)/100 + (600000*8)/100);
				}else{
					$paye =0;
				}

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
					'epfCompany'	=> $payETFCompany,
					'grossSalary'	=> $grossSalary,
					'payeTax'		=> $paye,
					'livingExpenses'=> $payliving,


				);
				//var_dump($payRollInformationMgt);
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


///////////////////////////////////////////////////////////////////////////////////////////////////////

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

//------------------------------------- user Profile Management-------------------------------------
 
public function userProfileData(){
	
	$hrUserId=$this->session->userdata['loggedHRUser']['hrUserId'];

	$data['userProfileData']=$this->HrUser_model->getuserProfileData($hrUserId);
	$this->load->view('userViews\userProfile',$data);


}
//---------------------------------------paysheet maker data view---------------------------------------------
			public function paySheetDataView(){

		$month = date('m');
		$year = date('Y');

		

		if($month==12){
			$nextMonth='01';
			$nextYear=$year+1;
		}else{
			$nextMonth=$month+1;
			$nextYear=$year;
		}

		// if($month <10){
		// 	$month='0'.$month;
		// }
		if($nextMonth <10){
			$nextMonth='0'.$nextMonth;
		}
		$stDate=$year.'-'.$month.'-01';
		$endDate=$nextYear.'-'.$nextMonth.'-01';

		$data['thisMonthPaysheetData']=$this->HrUser_model->getThisMonthPaySheets($stDate,$endDate);

				$data['paySheetDataView']=$this->HrUser_model->getPaySheetDataView();
				$this->load->view('userViews\paySheetMaker',$data);

			} 	

//////////////////////////////////////////////////////////////////////////////////////////////////////

//------------------------------------department dataview----------------------------------------------------
				public function departmentDataView(){
					$data['departmentDataView']=$this->HrUser_model->getDepartmentDataView();
					$this->load->view('userViews\departments',$data);

				} 	

//-----------------------------------user Management Data view---------------
				
				public function userManagementDataView(){

					$data['AdminCount']=sizeof($this->HrUser_model-> getAdminUserDetails());
					$data['ExrCount']=sizeof($this->HrUser_model-> getExeUserDetails());
					$data['StaffCount']=sizeof($this->HrUser_model-> getStaffUserDetails());

					$data['userManagementDataView']=$this->HrUser_model->getUserManagementDataView();
					$this->load->view('userViews\userManagement',$data);

				} 
				//-----------------------------------user Management Data ---------------
				// Admin User----
				public function userManagementData(){
					$data['userManagementData']=$this->HrUser_model->getUserManagementData();
					$this->load->view('userViews\userManagementData',$data);

				} 
				//Staff user---
				public function userManagementDataTwo(){
					$data['userManagementDataTwo']=$this->HrUser_model->getUserManagementDataTwo();
					$this->load->view('userViews\userManagementDataTwo',$data);

				} 
				//Exe user---
				public function userManagementDataThree(){
					$data['userManagementDataThree']=$this->HrUser_model->getUserManagementDataThree();
					$this->load->view('userViews\userManagementDataThree',$data);

				} 


 

//-----------------------------------employee Details---------------------------------------------------------
			public function employeeDetailView(){

				$empNo	=$this->input->post('SearchEmpNo');
				$empNo=100;
				$data ['employeeDetail']=$this->HrUser_model->getemployeeParentData($empNo);
				$data2['employeeDetail']=$this->HrUser_model->getemployeeEducationallDetailView($empNo);
				$data3['employeeDetail']=$this->HrUser_model->getemployeeSubjectDetailView($empNo);
				$data4['employeeDetail']=$this->HrUser_model->getemployeeFamilyDetailView($empNo);
				$data5['employeeDetail']=$this->HrUser_model->getemployeeBankDetailView($empNo);
				$data6['employeeDetail']=$this->HrUser_model->getemployeeChildrenDetailView($empNo);
				$data7['employeeDetail']=$this->HrUser_model->getemployeeParentDetailView($empNo);
				
				$sad=explode(",",$data['employeeDetail']->qualificationName);
				$qua=explode(",",$data2['employeeDetail']->qualification);
				$spe=explode(",",$data2['employeeDetail']->specialization);
				$ins=explode(",",$data2['employeeDetail']->institute);
				$qudate=explode(",",$data2['employeeDetail']->qualifieddate);



				// $alindex=explode(",",$employeeDetails->alIndexNo);
				// $alyea=explode(",",$employeeDetails->alYear);
				// $alsub=explode(",",$employeeDetails->alSubject);
				// $alres=explode(",",$employeeDetails->alResult);
				// $olindex=explode(",",$employeeDetails->olIndexNo);
				// $olsub=explode(",",$employeeDetails->olsubject);
				// $olres=explode(",",$employeeDetails->olResult);



var_dump($data);

				//$this->load->view('userViews\employeeDetails',$data);

			} 		
//-----------------------------------paysheet Information data ---------------------------------
			public function paySeetMakingInformation(){

				$empNo	=$this->input->post('$empNo');
				$data['paySeetMakingInformation']=$this->HrUser_model->getpaySeetMakingInformation($empNo);
				$this->load->view('userViews\PaySheetMaker',$data);

			} 	


//-------------------------------------timesheet data view-------------------------------------------------------
			public function timeDataView(){
				$data['timeDataView']=$this->HrUser_model->gettimeDataView();
				$this->load->view('userViews\timeSheet',$data);

			} 

/////////////////////////////////////////////////////////////////////////////////////////
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


// ---------------------------------------Departmental Employee Reports-----------------------------------
			public function reportDeptEmpDataView(){

				$Department	=$this->input->post('Department');
				$type		=$this->input->post('type');

				//var_dump($type);
					if($type=='Permanent'){
						var_dump($type=='Permanent');
						//$data['reportDeptEmpDataView']=$this->HrUser_model->getreportDeptEmpDataView($type, $Department);
						//var_dump($data);
						//$this->load->view('userViews\report8',$data);
					}elseif($type=='Contract'){

						$data['reportDeptEmpDataView']=$this->HrUser_model->getreportDeptEmpDataView($type, $Department);
						$this->load->view('userViews\report8',$data);
					}else{
						
						$data['reportDeptEmpDataView']=$this->HrUser_model->getreportDeptEmpDataView($type, $Department);
						$this->load->view('userViews\report8',$data);
					}

				//$data['reportPromotionDatalView']=$this->HrUser_model->getreportDeptEmpDataView();
			//	$this->load->view('userViews\report8',$data);
					
			} 
//---------------------------------------resignation approval reports----------------------------------------------
			
			public function approvedResignationDatalView(){
				$data['approvedResignationDatalView']=$this->HrUser_model->getApprovedResignationDatalView();
				$this->load->view('userViews\report9',$data);
					
			} 
//----------------------------------------------Decline resignatio report----------------------------------------
			public function declineResignationDatalView(){
				$data['declineResignationDatalView']=$this->HrUser_model->getDeclineResignationDatalView();
				$this->load->view('userViews\report10',$data);
					
			} 
//---------------------------------------------resignatio reports------------------------------------------------
			public function reportResignationDatalView(){
				$data['reportResignationDatalView']=$this->HrUser_model->getReportResignationDatalView();
				$this->load->view('userViews\report11',$data);
					
			} 
//---------------------------------------------training approval reports---------------------------------------
			
			public function approvedTrainingDatalView(){
				$data['approvedTrainingDatalView']=$this->HrUser_model->getApprovedTrainingDatalView();
				$this->load->view('userViews\report17',$data);
					
			} 
			//----------------------------------------------training resignatio report----------------------------------------
			public function declineTrainingDatalView(){
				$data['declineTrainingDatalView']=$this->HrUser_model->getDeclineTrainingDatalView();
				$this->load->view('userViews\report12',$data);
					
			} 
			//---------------------------------------------training reports------------------------------------------------
			public function reportTrainingDatalView(){
				$data['reportTrainingDatalView']=$this->HrUser_model->getReportTrainingDatalView();
				$this->load->view('userViews\report13',$data);
					
			} 
			//---------------------------------------monthly performance approval Reports-------------------------
			public function approvedMonthlyProDatalView(){
				$data['approvedMonthlyProDatalView']=$this->HrUser_model->getApprovedMonthlyProDatalView();
				$this->load->view('userViews\report14',$data);
					
			} 
			//-------------------------------------------monthly performance decline reports-----------------------------------------
			public function declineMonthlyProDatalView(){
				$data['declineMonthlyProDatalView']=$this->HrUser_model->getDeclineMonthlyProDatalView();
				$this->load->view('userViews\report15',$data);
					
			} 
			//-------------------------------------------all monthly performance reports-----------------------------------------------
			public function reportMonthlyProDatalView(){
				$data['reportMonthlyProDatalView']=$this->HrUser_model->getReportMonthlyProDatalView();
				$this->load->view('userViews\report16',$data);
					
			} 


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
// proformance approval /rejection-----------------------------------------------------------------------------

			public function apporvelMonthPerformance(){
				$monthPromoId=$this->input->post('promotionId');
				$monthPromoStatus=$this->input->post('promotionStatus');

				$userName=$this->session->userdata['loggedHRUser']['empName'];
				$month = date('m');
				$year = date('Y');
				$date =date('d');
				
				$startDate=$year.'-'.$month.'-'.$date;

				$data = array(
					'yearPromoStatus' => $monthPromoStatus,
					'approvedBy' => $userName,
					'appDate' => $startDate,
				
				);
				$wherearray = array('promotionId' => $monthPromoId);

				$result=$this->HrUser_model->approvalMonthPerformance($data,$wherearray);

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

				$userName=$this->session->userdata['loggedHRUser']['empName'];

				$month = date('m');
				$year = date('Y');
				$date =date('d');
				$startDate=$year.'-'.$month.'-'.$date;

				$data = array(
					'promotionStatus' => $monthPromoStatus,
					'approvedBy' => $userName,
					'appDate' => $startDate,
				
				);
				$wherearray = array('promotionId' => $monthPromoId);

				$result=$this->HrUser_model->approvalMonthPerformance($data,$wherearray);

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

				$userName=$this->session->userdata['loggedHRUser']['empName'];
				$month = date('m');
				$year = date('Y');
				$date =date('d');
				
				$startDate=$year.'-'.$month.'-'.$date;


				$data = array(
					'leaveStatus'=> $leaveStatus,
					'appDate'=> $startDate,
					'approvedBy'=> $userName,
				
				);
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
//---------------------------training approval or rejction-------------------------------------------------

public function approvalTraining(){
	$trainingId=$this->input->post('trainingId');
	$trainingStatus=$this->input->post('trainingStatus');

$adminName=$this->session->userdata['loggedHRUser']['empName'];
		$month = date('m');
		$year = date('Y');
		$date =date('d');
		
		$startDate=$year.'-'.$month.'-'.$date;

	$data = array(
		'trainingStatus'=> $trainingStatus,
		'approvedBy'=> $adminName,
		'appDate'=> $startDate,

	
	);
	$wherearray =array('trainingId' => $trainingId);

	$result =$this ->HrUser_model->updateTrainingApproval($data,$wherearray);

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

				$userName=$this->session->userdata['loggedHRUser']['empName'];
				$month = date('m');
				$year = date('Y');
				$date =date('d');
				
				$startDate=$year.'-'.$month.'-'.$date;


				$data = array(
					'incrementStatus'=> $incrementStatus,
					'approvedBy'=> $userName,
					'appDate'=> $startDate,
				
				);
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

		$month = date('m');
		$year = date('Y');
		$date =date('d');
		

	$adminName=$this->session->userdata['loggedHRUser']['empName'];
	$appDate =$year."-".$month."-".$date;
	//$nameAndDate=$adminName." ".$date."".$month."".$year;
//var_dump($appDate);
	$data = array(
		'empStatus'=> $empStatus,
		'resignationApproved' =>$adminName,
		'appDate'=> $appDate,
);
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
//------------------------------paysheet approval-----------------------------------------------------

public function approvalPaysheet(){
	$payid=$this->input->post('payid');
	$approvalStatus=$this->input->post('approvalStatus');

	//var_dump($payid);
	$wherearray= array('payid'=> $payid);
	 $data =array('approvalStatus' => $approvalStatus);

	$result =$this ->HrUser_model->paySheetMakingApproval($data,$wherearray);

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

				//var_dump($resignationdata);
				$result =$this ->HrUser_model->editResignation($resignationdata,$wherearray);

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
//-------------------------------------edit promotion data---------------------------------------------------------

public function promotionEdit(){

	$empName 			= $this->input->post('empName');
	$empNo				= $this->input->post('empNo');
	$empNICNo			= $this->input->post('empNICNo');
	$incrementDetails	= $this->input->post('incrementDetails');
	$date				= $this->input->post('date');
	$increment			= $this->input->post('increment');			
	$department			= $this->input->post('department');
	$IncrementId			= $this->input->post('IncrementId');
	
	$promotionEdit=array(

		'empName'			=> $empName,
		'empNo' 			=> $empNo ,
		'empNicNo'			=> $empNICNo,					
		'incrementDetails'	=> $incrementDetails,
		'date' 				=> $date,
		'increment' 		=> $increment,
		'departmentName' 	=> $department,

	);
	$wherearray =array('IncrementId' => $IncrementId);

				//var_dump($promotionEdit);
				$result =$this ->HrUser_model->editPromotion($promotionEdit,$wherearray);

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
//-------------------------------edit training data------------------------------------------------
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
				
				
				$result =$this ->HrUser_model->editTrainingData($trainingData,$wherearray);
			
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
	
	
	$result =$this ->HrUser_model->editLeaveData($leaveEditData,$wherearray);

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

				$monthlytotal =$knowledgeOfWork +  $achievements+$quality+$motivationOfTheWork+$relationship+$discipline+$attendence+$teamWork+ $adhearance+$abilityToWork;
				//var_dump($promotionMonth);
				
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
					'promotionTotal'	=> $monthlytotal,
				);
				$wherearray =array('promotionId' => $promotionId);
				
				
				$result =$this ->HrUser_model->editmaonthPerformaceData($maonthPerformaceEdit,$wherearray);
			
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
			$editempPayId		=$this->input->post('editempPayId');
			$editEPFComp		=$this->input->post('payEPFComp');
			$editpayLiving		=$this->input->post('payLiving');
			
			
			
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
				'epfCompany' 	=> $editEPFComp,
				'livingExpenses'=> $editpayLiving,	
				
			);
			$wherearray =array('empPayId' => $editempPayId);
			
			$result=$this->HrUser_model-> payRollInformationEdit($payRollInformationEdit,$wherearray);
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

				$data['allUserData']=$this->HrUser_model->getAllUserData();

				$data['userData']=$this->HrUser_model->getUserData('EMP1569394607');

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
		$result=$this->HrUser_model-> timeSheetData($timeData);
	
		
		
		}

		fclose($file);

		 var_dump(base_url().$timesheet);
		 
	}
//--------------------------------------------------Paysheet makeing------------------------------

public function getempData(){
	$data['getempData'] = $this->HrUser_model->gettData();
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
		$salaryInfo=$this->HrUser_model->getPayRollInfoDataViewOne($employee->empNo);
		$startDate='2019-11-01';
		$endDate='2019-12-01'; 
		
		$countPermonth=$this->HrUser_model->getAttendacebymonth($employee->empNo,$startDate,$endDate);
		$attendanceData=$this->HrUser_model->getAttendacebymonthAll($employee->empNo,$startDate,$endDate);
		$numberOfLeaveMonth=$this->HrUser_model->getnumberOfLeaveMonth($employee->empNo,$startDate,$endDate);
		
		var_dump($numberOfLeaveMonth) ;
		//$onOfLeave= intval ( $numberOfLeaveMonth );
		$onOfLeave=0;
		foreach($numberOfLeaveMonth as $leave){
			$onOfLeave+=$leave->noOfDate;
		}
		//var_dump($onOfLeave) ;
		$noOfWorkingDays=22-$onOfLeave;
		//var_dump($noOfWorkingDays);

		//ot calculation
		$time=0;

		foreach ($attendanceData as $attendace) {
			//$diff=
			
			$dattTime = new DateTime($attendace->in_time);
			$dateTime2 = new DateTime($attendace->out_time);
			$interval = $dateTime2->diff($dattTime);
			$hours=$interval->h;
			$minutes=$interval->i;
			$totalMinutes=$hours * 60 +$minutes;

			$time=$time+$totalMinutes;
		}

		
		$shouldComeMinutes=60*8*22;
		$otTime=$time-$shouldComeMinutes;
		if($otTime>0){
			$othours=$otTime/60;
		}else{
			$othours=0;
		}
		
		
		//select count(empNo) as datecame from attendancetable where empNO=$empNo AND date BETWEEN $startDate AND $endDate;
		
		if($salaryInfo){
			$basicSalary=$salaryInfo->basicSalary;
			$brAllowance=$salaryInfo->brAllowance;
			$increments=$salaryInfo->increments;
			$OTrate=$salaryInfo->OTrate;
			$livingExpenses=$salaryInfo->livingExpenses;
			$department=$salaryInfo->department;
			$epf=$salaryInfo->epf;
			$etf=$salaryInfo->etf;
			$etf=$salaryInfo->epfCompany;
			$noPayRate=$salaryInfo->noPayRate;
			$lone=$salaryInfo->lone;
			$absent=$salaryInfo->absent;
			$epfCompany=$salaryInfo->epfCompany;
			$grossSalary=$salaryInfo->grossSalary;
			$payeTax=$salaryInfo->payeTax;
			$reduction1=0;
			$noPayrate=458;

			

			//date came 
			if($countPermonth[0]->datecame < $noOfWorkingDays){
				$reduction1=($noOfWorkingDays-($countPermonth[0]->datecame)) *$noPayrate;

				
			}
			var_dump($reduction1);
			//++++++items--------------------------
			$gSalary=$basicSalary+$increments+ $livingExpenses;
			$reduction=$reduction1 +$epf;
			$total=$grossSalary-$reduction;

			$month = date('m');
			$year = date('Y');
	
			if($month==01){
			$payrollMonth=$month='12';
			$payrollYear=$year=($year-1);
			}else{
				$payrollMonth=$month-1;
				$payrollYear=$year;
			}

			//ot Amount calculation
			$otamount=$othours*$OTrate;


			$arrayName = array(
				'empNo' 		=>$employee->empNo,
				'empName' 		=>$employee->nameInitials,
				'basicSalary' 	=> $basicSalary,
				'departmentName'=> $department,
				'brAllowance' 	=> $brAllowance,
				'increment'		=> $increments,
				'ot' 			=> $otamount,
				'EPF' 			=> $epf,
				'ETF' 			=> $etf,
				'EPFCompany'	=>$epfCompany,
				'Nopay' 		=> $noPayRate,
				'loan'			=> $lone,
				'absent' 		=> $absent,
				'deduction'		=> $reduction,
				'grossSalary'	=> $gSalary,
				'NetSalary'		=> $total,
				'month'			=> $payrollMonth,
				'year'			=> $payrollYear,
				'paye'			=> $payeTax,
				'datecame' 		=> $countPermonth[0]->datecame
			);
			$result=$this->HrUser_model-> payRollSheetMker($arrayName,);
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

		//$convert_date = date('Y');
       
	}

	

	// echo $stDate;
	// echo $endDate;

	//var_dump($data['salaryInfo']);
		
		echo '<br/>';


}
////////////////////////////////////////////////////// bank report///////////

		public function bankreport(){

			$paybankName		=$this->input->post('bankName');
			$payYear			=$this->input->post('Year');
			$payMonth			=$this->input->post('bankReportMonth');
			
			//var_dump($payYear);
			if($paybankName=='All'){
				$result['bankreport']=$this->HrUser_model->bankReport($payYear,$payMonth);
				$this->load->view('userViews\report18',$result);
				//var_dump($result);
			}else{
				$result['bankreport']=$this->HrUser_model->bankReporttwo($payYear,$payMonth,$paybankName);
				$this->load->view('userViews\report18',$result);
				//var_dump($result);
			}		
			
			
	}

///////////////////////////////////salary report/////////////////
public function salaryreport(){

	$Department			=$this->input->post('Department');
	$payYear			=$this->input->post('Year');
	$salaryMonth		=$this->input->post('salaryMonth');
	
	//var_dump($Department);
	if($Department=='All' && $payYear!=='' && $salaryMonth !=='' ){
		$result['salaryreport']=$this->HrUser_model->salaryReport($payYear,$salaryMonth);
		$this->load->view('userViews\report19',$result);
		//var_dump($result);
	
	}elseif($Department=='All' && $payYear==''){
		$result['salaryreport']=$this->HrUser_model->salaryReportfore($salaryMonth);
		$this->load->view('userViews\fhjkl',$result);
		//var_dump($result);	
	}elseif($Department=='All' && $salaryMonth==''){
		$result['salaryreport']=$this->HrUser_model->salaryReportfive($payYear);
		$this->load->view('userViews\fhjkl',$result);
		//var_dump($result);	
	}elseif($payYear==''){
		$result['salaryreport']=$this->HrUser_model->salaryReporttwo($salaryMonth,$Department);
		$this->load->view('userViews\fhjkl',$result);
		//var_dump($result);
	}elseif($salaryMonth==''){
		$result['salaryreport']=$this->HrUser_model->salaryReportthree($payYear,$Department);
		$this->load->view('userViews\fhjkl',$result);
		//var_dump($result);			
	}else{
		$result['salaryreport']=$this->HrUser_model->salaryReportsix($payYear,$salaryMonth,$Department);
		$this->load->view('userViews\fhjkl',$result);
		//var_dump($result);	
}


}

public function EPFreport(){

	$EPF				=$this->input->post('ETF');
	$Department			=$this->input->post('Department');
	$payYear			=$this->input->post('epfMonth');
	$salaryMonth		=$this->input->post('epfMonth');

	//var_dump($EPF);	
	if($EPF=='EPF'){

		if($Department=='All' && $payYear!=='' && $salaryMonth !=='' ){
		$result['EPFreport']=$this->HrUser_model->epfyReport($payYear,$salaryMonth,$EPF);
		$this->load->view('userViews\report20',$result);
		var_dump($result);
	
		}elseif($Department=='All' && $payYear==''){
			$result['EPFreport']=$this->HrUser_model->epfyReportfore($salaryMonth,$EPF);
			$this->load->view('userViews\report20',$result);
			//var_dump($result);	
		}elseif($Department=='All' && $salaryMonth==''){
			$result['EPFreport']=$this->HrUser_model->epfyReportfive($payYear,$EPF);
			$this->load->view('userViews\report20',$result);
			//var_dump($result);	
		}elseif($payYear==''){
			$result['EPFreport']=$this->HrUser_model->epfyReporttwo($salaryMonth,$Department,$EPF);
			$this->load->view('userViews\report20',$result);
			//var_dump($result);
		}elseif($salaryMonth==''){
			$result['EPFreport']=$this->HrUser_model->epfyReportthree($payYear,$Department,$EPF);
			$this->load->view('userViews\report20',$result);
			//var_dump($result);			
		}else{
			$result['EPFreport']=$this->HrUser_model->epfyReportsix($payYear,$salaryMonth,$Department,$EPF);
			$this->load->view('userViews\report20',$result);
			//var_dump($result);	
		}
	}else{
		if($Department=='All'&& $payYear!=='' && $salaryMonth !=='' ){
			$result['EPFreport']=$this->HrUser_model->epfyReport($payYear,$salaryMonth,$EPF);
			//var_dump($EPF);
			$this->load->view('userViews\report21',$result);
			//var_dump($result);
		
			}elseif($Department=='All' && $payYear==''){
				$result['EPFreport']=$this->HrUser_model->epfyReportfore($salaryMonth,$EPF);
				$this->load->view('userViews\report21',$result);
				//var_dump($result);	
			}elseif($Department=='All' && $salaryMonth==''){
				$result['EPFreport']=$this->HrUser_model->epfyReportfive($payYear,$EPF);
				$this->load->view('userViews\report21',$result);
				//var_dump($result);	
			}elseif($payYear==''){
				$result['EPFreport']=$this->HrUser_model->epfyReporttwo($salaryMonth,$Department,$EPF);
				$this->load->view('userViews\report21',$result);
				//var_dump($result);
			}elseif($salaryMonth==''){
				$result['EPFreport']=$this->HrUser_model->epfyReportthree($payYear,$Department,$EPF);
				$this->load->view('userViews\report21',$result);
				//var_dump($result);			
			}else{
				$result['EPFreport']=$this->HrUser_model->epfyReportsix($payYear,$salaryMonth,$Department,$EPF);
				$this->load->view('userViews\report21',$result);
				//var_dump($result);	
			}
	}
}

//-----------------------------------------------ETF report--------------------------------------

public function ETFReport(){
	
	$Department			=$this->input->post('Department');
	$payYear			=$this->input->post('etfYear');
	$salaryMonth		=$this->input->post('etfMonth');

	
	if($Department=='All' && $payYear!=='' && $salaryMonth !=='' ){
		$result['ETFReport']=$this->HrUser_model->ETFReport($payYear,$salaryMonth);
		$this->load->view('userViews\report22',$result);
		//($result);
	
	}elseif($Department=='All' && $payYear==''){
		//var_dump($Department=='All' && $payYear=='');
		$result['ETFReport']=$this->HrUser_model->ETFReportfore($salaryMonth);
		$this->load->view('userViews\report22',$result);
		//var_dump($result);	
	}elseif($Department=='All' && $salaryMonth==''){
		$result['ETFReport']=$this->HrUser_model->ETFReportfive($payYear);
		$this->load->view('userViews\report22',$result);
		//var_dump($result);	
	}elseif($payYear==''){
		$result['ETFReport']=$this->HrUser_model->ETFReporttwo($salaryMonth,$Department);
		$this->load->view('userViews\report22',$result);
		//var_dump($result);
	}elseif($salaryMonth==''){
		$result['ETFReport']=$this->HrUser_model->ETFReportthree($payYear,$Department);
		$this->load->view('userViews\report22',$result);
		//var_dump($result);			
	}else{
		$result['ETFReport']=$this->HrUser_model->ETFReportsix($payYear,$salaryMonth,$Department);
		$this->load->view('userViews\report22',$result);
		//var_dump($result);	
}

}
//---------------------------passwoed change-------------------------------------
		public function passwordChange(){
			
			$userId=$this->session->userdata['loggedHRUser']['hrUserId'];	
			$hrAdminPasswd=$this->session->userdata['loggedHRUser']['hrUserPassword'];
			//var_dump($hrAdminPasswd);

			$newPasswd			=$this->input->post('newPasswd');
			$reNewPasswd		=$this->input->post('reNewPasswd');
			$currentPasswd		=$this->input->post('currentPasswd');
			//var_dump($currentPasswd);

			if($hrAdminPasswd==$currentPasswd){
				if($newPasswd==$reNewPasswd){
					
					$result=$this->HrUser_model->getpasswordChange($newPasswd,$userId);
					if($result){

			//var_dump($result);
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
			}
				

							//var_dump($currentPasswd==$hrAdminPasswd);
					
			
		}

			
	public function timeSheetChecker(){

		$date	=$this->input->post('fileName');
		//var_dump($date);
		$result=$this->HrUser_model-> TimeSheetChecker($date);
		if($result){

			//var_dump($result);
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
//---------------------------get EMP Data-----------------------------
public function EmpformData(){
	$date	=$this->input->post('empNo');
	//var_dump($date);
	$result=$this->HrUser_model-> getEmpformData($date);
	//var_dump($result);
	if($result){

		//var_dump($result);
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


//---------------------------Over time calculation----------------

public function overTimeCal(){
	// $StartDate	=$this->input->post('startDate');
	// $EndDate	=$this->input->post('endDate');
	// $empNo	=$this->input->post('empNo');

	$StartDate=2019-11-01;
	$EndDate=2019-11-31;
	$empNo=100;
	$otData=$this->HrUser_model->getOverTimeCaldata($empNo,$StartDate,$EndDate);

	
	$workedHours=8;
	foreach($otData as $othours){

			$empNo=$othours->empNo;
			// $empName=$othours->empName;
			// $date=$othours->date;
			$dattTime = new DateTime($othours->in_time);
			$dateTime2 = new DateTime($othours->out_time);
			$interval = $dateTime2->diff($dattTime);
			$hours=$interval->h;
			
			$otHourswork=$hours-$workedHours;
			
			$arrayName = array(
						$othours->empNo,
						$othours->nameInitials,
				 	 	$othours->$hours,
			 			$othours->$otHourswork,
			);
			$this->load->view('userViews\overTime',$arrayName);	 	
	}
	var_dump($otHourswork);
	
}
//---------------------- Remove Admin-------------------------------------
public function RemoveAdmin(){
	$adminId=$this->input->post('adminId');
	$Status=$this->input->post('Status');

	$data = array('Status' => $Status);
	$wherearray = array('adminId' => $adminId);

	$result=$this->HrUser_model->removeAdminModal($data,$wherearray);

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

//-------------------------remove hr Exe---------------------------------
public function RemoveExe(){
	$hrExeId=$this->input->post('hrExeId');
	$Status=$this->input->post('Status');

	$data = array('Status' => $Status);
	$wherearray = array('hrExeId' => $hrExeId);

	$result=$this->HrUser_model->removeExeModal($data,$wherearray);

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
//------------------------------hr staff remover------------


public function RemoveStaff(){
	$hrUserId=$this->input->post('hrUserId');
	$Status=$this->input->post('Status');

	$data = array('Status' => $Status);
	$wherearray = array('hrUserId' => $hrUserId);

	$result=$this->HrUser_model->removeStaffModal($data,$wherearray);

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
public function editAdmindata(){

	$adminId=$this->input->post('adminId');
	$EditempName		=$this->input->post('EditempName');
	$EditempNo			=$this->input->post('EditempNo');
	$EditempNICNo		=$this->input->post('EditempNICNo');
	$Editemail			=$this->input->post('Editemail');
	$EdituserAddDate	=$this->input->post('EdituserAddDate');
	

	//var_dump($userId);
	
	$wherearray =array('adminId' => $adminId);
	$datarr= array(

		'adminName'=>	$EditempName,
		'adminEmail'=>	$Editemail,
		'adminNIC'=>	$EditempNICNo,
		'empNo'		=>	$EditempNo,
		
		'adminAddData'=>$EdituserAddDate,
		

	);//var_dump($datarr);
	$result=$this->HrUser_model->EditAdmin($datarr,$wherearray);
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

//-------------------leave count-----------------------
public function leaveCount(){
	$empNo=$this->input->post('empNo');

	//var_dump($empNo);
	
	$year = date('Y');
	$month =01;
	$endmonth=12;
	$startDate=$year.'-'.$month.'-01';
	$enddata=$year.'-'.$endmonth.'-31';

	$data = array('empName' => $empNo);
	//$data =100;

	$numberOfLeaveMonth=$this->HrUser_model->getleaveCount($data,$startDate,$enddata);
	
		//var_dump($numberOfLeaveMonth);
		//$onOfLeave= intval ( $numberOfLeaveMonth );
		$onOfLeave=0;
		foreach($numberOfLeaveMonth as $leave){
			$onOfLeave+=$leave->noOfDate;
		}
		if($onOfLeave<43){
			echo json_encode(
				array(
	
					'result' => $onOfLeave,
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
}
?>
