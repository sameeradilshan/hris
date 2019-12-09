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
	public function promotion()
	{
		$this->load->view('userViews\promotion');
	}
	public function departments()
	{
		$this->load->view('userViews\departments');
	}
	public function resignation()
	{
		$this->load->view('userViews\resignation');
	}
	public function attendance()
	{
		$this->load->view('userViews\attendance');
	}
	public function leave()
	{
		$this->load->view('userViews\leave');
	}
	public function leaveManagement()
	{
		$this->load->view('userViews\leaveManagement');
	}
	public function payRoll()
	{
		$this->load->view('userViews\payRoll');
	}
	public function userManagement()
	{
		$this->load->view('userViews\userManagement');
	}




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


		$empdata= array(
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
		);var_dump($empdata);
		$result=$this->Admin_model-> addEmployeePersonalDetails($empdata);
		
		

		$empedudata=array(
				
			'empName' 			=> $empInitialName,
			'NIC '				=> $empNicNo,
			'qualificationName'	=> $qualificationName1,$qualificationName2,$qualificationName3, $qualificationName4,$qualificationName5,
			'qualification' 	=> $qualification1,$qualification2,$qualification3,$qualification4,$qualification5,
			'specialization'	=> $quaSpecilization1,$quaSpecilization2,$quaSpecilization3,$quaSpecilization4,$quaSpecilization5,
			'institute'			=> $quaInstitute1, $quaInstitute2,$quaInstitute3,$quaInstitute4,$quaInstitute5,
			'qualifieddate' 	=> $quaDate1,$quaDate2,$quaDate3,$quaDate4,$quaDate5,
			


		);
		var_dump($empedudata);
	//	$result=$this->Admin_model-> addEmployeeEducationalDetails($empedudata);
	}

}
