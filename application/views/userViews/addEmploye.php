<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AddEmployee</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('userViews/components/css'); ?>




</head>

<body onload="myFunction()" class="hold-transition sidebar-mini" data-spy="scroll" data-target=".navbar"
    data-offset="50">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <?php $this->load->view('userViews/components/sideBar'); ?>

        <!-- new nav bar -->
      
        <!-- nav bar finished -->




        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
						<div class="col-sm-6">
                            <h1>Employee Management</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
                                <li class="breadcrumb-item active">Employee Management</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <!-- nav bar------------------------------------------------------------------- -->
                    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top  justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item" text>
                                <a class="nav-link active" href="#section1">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section2">Educational</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section3">Job</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section4">Bank</a>
                            </li>
                        </ul>
                    </nav> -->
                    <div class="card-body">

                        <form action="<?php echo base_url(); ?>index.php/HrUser/EmployeeDetailshandler" method="post"
                            id="form">

                           
                            <h1>Personal Details</h1>


                           
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="empFullName">
                                </div>
                                <div class="form-group test3" id="test1">
                                    <label>Name With Initial</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="initialName">
                                </div>
                                <div class="form-group test3" id="test1">
                                    <label>Other Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="otherName">
                                </div>
                                <div class="form-group test3" id="test1">
                                    <label>Address(Permanent)</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="empAddress1">
                                </div>
                                <div class="form-group test3" id="test1">
                                    <label>Address(Tempary)</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="empAddress2">
								</div>
								<div class="form-row">
										<div class="form-group col-md-4" id="test1">
											<label>Email</label>
											<input type="email" class="form-control form-control-sm" placeholder="Jhon Doe"
												name="empEmail">
										</div>
										<div class="form-group col-md-4" id="test1">
											<label>NIC Number</label>
											<input type="text" class="form-control form-control-sm" placeholder="1999xxxxxx"
												name="empNicNo">
										</div>
										<div class="form-group col-md-4">
										<label>Date Of Birth</label><br>
											
											<input type="date" class="form-control control form-control-sm"
												  name="dob">
										</div>		
								</div>

								<div class="form-row">
										<div class="form-group col-md-4">
											<label>Contact Number(Office) </label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fa fa-phone"></i></span>
												</div>
												<input type="text" class="form-control control form-control-sm"
													data-inputmask="&quot;mask&quot;: &quot;(+94) 999-999-999&quot;"
													data-mask="" name="officeNo">
											</div>
										</div>
										<div class="form-group col-md-4">
											<label>Contact Number(Mobile) </label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fa fa-phone"></i></span>
												</div>
												<input type="text" class="form-control form-control-sm"
													data-inputmask="&quot;mask&quot;: &quot;(+94) 999-999-999&quot;"
													data-mask="" name="mobileNo">
											</div>
										</div>
										<div class="form-group col-md-4">
											<label>Contact Number(Home) </label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fa fa-phone"></i></span>
												</div>
												<input type="text" class="form-control control form-control-sm"
													data-inputmask="&quot;mask&quot;: &quot;(+94) 999-999-999&quot;"
													data-mask="" name="homeNo">
											</div>
										</div>
								</div>	

								<div class="form-row ">
									
										<div class="radio" class="col-md-4">
											<label>Gender</label>
											<br>

											<input type="radio" name="gender" value="female">Female
											<input type="radio" name="gender" value="male">Male

										</div>
										
										<div class="col-md-6"></div>
										
										
										<div class="radio" class="col-md-2">
											<label>Civil State</label>
											<br>

											<input type="radio" name="civil" value="Married">Married
											<input type="radio" name="civil" value="Unmarried">Unmarried

										</div>
								</div>		
								<br>
								<div class="form-row">
										<div class="radio" class="col-md-6">
											<label>Nationality</label>
											<br>

											<input type="radio" name="nationality" value="Sinhalees">Sinhalees
											<input type="radio" name="nationality" value="Tamil">Tamil
											<input type="radio" name="nationality" value="Muslim">Muslim
											<input type="radio" name="nationality" value="Barger">Barger
											<input type="radio" name="nationality" value="Other">Other

										</div>
										<br>
										<div class="col-md-2"></div>
										<div class="radio" class="col-md-4">
											<label>Religious</label>
											<br>

											<input type="radio" name="religious" value="Buddhism">Buddhism
											<input type="radio" name="religious" value="Christian">Christian
											<input type="radio" name="religious" value="Roman Catholic">Roman Catholic
											<input type="radio" name="religious" value="Islam">Islam
											<input type="radio" name="religious" value="Hindu">Hindu

										</div>
                           	 	</div>
                                                  
                            <h1>Education Details</h1>
                                                       
                                <div class=row>
                                    <div class=col-md-2>
                                        <label>Name</label>
                                    </div>
                                    <div class=col-md-2>
                                        <label>Qualification</label>
                                    </div>
                                    <div class=col-md-3>
                                        <label>Specilization</label>
                                    </div>
                                    <div class=col-md-3>
                                        <label>Institute</label>
                                    </div>
                                    <div class=col-md-2>
                                        <label>Date</label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r1QuaName">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="qualificationType" class="form-control form-control-sm">
                                            <option name="r1QuaQualification" value="Certificate">Certificate</option>
                                            <option name="r1QuaQualification" value="diploma">Diploma</option>
                                            <option name="r1QuaQualification" value="AdvancedDiploma">Advanced Diploma
                                            </option>
                                            <option name="r1QuaQualification" value="Bachelor">Bachelor</option>
                                            <option name="r1QuaQualification" value="Masters">Masters</option>
                                            <option name="r1QuaQualification" value="Doctoral">Doctoral</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r1QuaSp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r1QuaIns">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="date" class="form-control form-control-sm" placeholder=""
                                            name="r1QuaDate">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r2QuaName">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="qualificationType" class="form-control form-control-sm">
                                            <option name="r2QuaQualification" value="Certificate">Certificate</option>
                                            <option name="r2QuaQualification" value="diploma">Diploma</option>
                                            <option name="r2QuaQualification" value="AdvancedDiploma">Advanced Diploma
                                            </option>
                                            <option name="r2QuaQualification" value="Bachelor">Bachelor</option>
                                            <option name="r2QuaQualification" value="Masters">Masters</option>
                                            <option name="r2QuaQualification" value="Doctoral">Doctoral</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r2QuaSp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r2QuaIns">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="date" class="form-control form-control-sm" placeholder=""
                                            name="r2QuaDate">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r3QuaName">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="qualificationType" class="form-control form-control-sm">
                                            <option name="r3QuaQualification" value="Certificate">Certificate</option>
                                            <option name="r3QuaQualification" value="diploma">Diploma</option>
                                            <option name="r3QuaQualification" value="AdvancedDiploma">Advanced Diploma
                                            </option>
                                            <option name="r3QuaQualification" value="Bachelor">Bachelor</option>
                                            <option name="r3QuaQualification" value="Masters">Masters</option>
                                            <option name="r3QuaQualification" value="Doctoral">Doctoral</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r3QuaSp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r3QuaIns">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="date" class="form-control form-control-sm" placeholder=""
                                            name="r3QuaDate">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r4QuaName">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="qualificationType" class="form-control form-control-sm">
                                            <option name="r4QuaQualification" value="Certificate">Certificate</option>
                                            <option name="r4QuaQualification" value="diploma">Diploma</option>
                                            <option name="r4QuaQualification" value="AdvancedDiploma">Advanced Diploma
                                            </option>
                                            <option name="r4QuaQualification" value="Bachelor">Bachelor</option>
                                            <option name="r4QuaQualification" value="Masters">Masters</option>
                                            <option name="r4QuaQualification" value="Doctoral">Doctoral</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r4QuaSp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r4QuaIns">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="date" class="form-control form-control-sm" placeholder=""
                                            name="r4QuaDate">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r5QuaName">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="qualificationType" class="form-control form-control-sm">
                                            <option name="r5QuaQualification" value="Certificate">Certificate</option>
                                            <option name="r5QuaQualification" value="diploma">Diploma</option>
                                            <option name="r5QuaQualification" value="AdvancedDiploma">Advanced Diploma
                                            </option>
                                            <option name="r5QuaQualification" value="Bachelor">Bachelor</option>
                                            <option name="r5QuaQualification" value="Masters">Masters</option>
                                            <option name="r5QuaQualification" value="Doctoral">Doctoral</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r5QuaSp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="r5QuaIns">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="date" class="form-control form-control-sm" placeholder=""
                                            name="r5QuaDate">
                                    </div>
                                </div>
                                <!-- table finish------------------------------------------------- -->
                                <label>GCE Advanced Level Examination Result</label><br>

                                <div class=row>
                                    <div class=col-md-3>
                                        <label>Subject</label>
                                    </div>

                                    <div class=col-md-3>
                                        <label>Result</label>
                                    </div>
                                    <div class=col-md-3>
                                        <label>Index No</label>
                                    </div>
                                    <div class=col-md-3>
                                        <label>year</label>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alSubject1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alResult1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alIndexNo1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alYear1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alSubject2">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alResult2">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alIndexNo2">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alYear2">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alSubject3">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alResult3">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alIndexNo3">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alYear3">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alSubject4">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alResult4">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alIndexNo4">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="alYear4">
                                    </div>
                                </div>

                                <!-- GCE OL results table --------------------------------------------->
                                <label>GCE Ordinary Level Examination Result</label><br>
                                <div class=row>
                                    <div class="col-md-2">
                                        <div class=col-md-3>
                                            <label>Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class=col-md-3>
                                            <label>Index No</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class=col-md-3>
                                            <label>Result</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class=col-md-3>
                                            <label>Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class=col-md-3>
                                            <label>Index No</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class=col-md-3>
                                            <label>Result</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject1">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo1">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult1">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject2">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo2">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult2">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject3">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo3">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult3">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject4">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo4">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject5">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo5">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult5">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject6">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo6">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult6">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject7">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo7">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult7">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject8">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo8">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult8">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject9">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo9">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult9">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olSubject10">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olIndexNo10">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            name="olResult10">
                                    </div>
                                </div>

                                <!-- GCE OL results table finished--------------------------------------------->

                           


                            <!-- page 2 finished------------------------------------------------------------------------------------------ -->

                            <!-- page 3 start--------------------------------------------------------------------------- -->
                            <!-- <div id="section3" class="container-fluid " style="padding-top:70px;padding-bottom:70px"> -->
                            <h1>Job Details</h1>



                            <div class="col-md-12" id="page3">
                                <div class="col-md-12" id="PermanateEmpDetailes">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 " id="test1">
                                            <label>Employee Number</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="1999xxxxxx" name="empNo">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Job Designation</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="jobDesignation">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="">
                                            <label>Date of Designation</label>
                                            <input type="date" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="dateOfDesignation">
                                        </div>
                                        <div class="form-group col-md-6" id="">
                                            <label>Department</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="department">
                                        </div>
                                        <div class="form-group col-md-6 " id="">
                                            <label>EPF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="EPFNo">
                                        </div>
                                        <div class="form-group col-md-6" id="">
                                            <label>ETF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="ETFNo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Contract employee Detailes--------------------------------------- -->



                                <div class="form-group" id="contract">

                                    <label>Daily Employee Detailes</label><br>

                                    <div class="form-row">

                                        <div class="form-group col-md-6" id="contract">
                                            <label>Contract Period </label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="contractPeriod">
                                        </div>



                                        <div class="form-group col-md-6" id="contract">
                                            <label>Contract Expire Date </label>
                                            <input type="date" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="contractExpireDate">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="contract">
                                            <label>Department</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="department">
                                        </div>
                                        <div class="form-group col-md-6" id="contract">
                                            <label>EPF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="EPFNo">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="contract">
                                            <label>ETF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="ETFNo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Tranining Students------------------------------------------ -->

                                <div class="form-row">

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Period</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingPeriod">
                                    </div>

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Finished Date </label>
                                        <input type="date" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingFinishedDate">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Institute Name </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingInstituteName">
                                    </div>
                                    <div class="form-group col-md-6" id="training">
                                        <label>Department</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="department">
                                    </div>

                                </div>

                            </div>



                            <!-- page 3finished-------------------------------------------------------------------------------- -->

                            <!-- <div id="section4" class="container-fluid " style="padding-top:70px;padding-bottom:70px"> -->
                            <h1>Bank Details</h1>



                            <div class="col-md-12" id="page4">

                                <div class="form-row">
                                    <div class="form-group col-md-6" id="">
                                        <label>Account No </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="accNo">
                                    </div>
                                    <div class="form-group col-md-6" id="">
                                        <label>Bank Name </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="bankName">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6" id="">
                                        <label>Branch Name</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="branchName">
                                    </div>
                                    <div class="form-group col-md-6" id="">
                                        <label>Account Type</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="accType">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="page4">
                                        <label>Family Detailes</label>
									</div>
									
                                    <div class="col-md-12">
                                        <label>Parents Detailes</label>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Name</label>
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <label>NIC No</label>
											</div>
											<div class="col-md-4">
                                                <label>Relation</label>
                                            </div>
										</div>
										<div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsName1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsNIC1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                     name="parentsRelation1">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                     name="parentsName2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                     name="parentsNIC2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsRelation2">
                                            </div>
										</div>
                                    </div>



									


                                    <div class="col-md-12">
                                        <label>Children Detailes</label>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>BirthDay</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>NIC No</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childName1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                    name="childDOB1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                     name="childNIC1">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                     name="childName2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                     name="childDOB2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childNIC2">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                     name="childName3">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                     name="childDOB3">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childNIC3">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                     name="childName4">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                     name="childDOB4">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childNIC4">
                                            </div>
                                        </div>
                                    </div>	






                                        <div class="col-md-12">
                                            <label>Wife/Husband Detailes</label>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Name</label>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>NIC No</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Relation</label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="" name="hwName">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="" name="hwNICNo">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="" name="hwRelation">
                                                </div>
                                            </div>





                                        </div>
									</div>
                            </div>

                            <input name="Submit" id="submit" class="btn btn-primary" type="submit"
                                        value="submit">
                        </form>
                        <!--form finished ----------------------------------------------------------------------------------- -->

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->








        <?php $this->load->view('userViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
        <!-- /.control-sidebar -->
    </div>

    <script>
    // Page 1 next button
    function myFunction() {
        $('#page2').hide();
    }

    $('#page1NextBtn').click(function() {
        $('#page2').show();
        $('#page1').hide();

    });

    // Page 2 next button
    function myFunction() {
        $('#page3').hide();
    }

    $('#page2NextBtn').click(function() {
        $('#page3').show();
        $('#page2').hide();
    });

    // page 3 next button
    //function myFunction() {
    //    $('#page4').hide();
    // }

    // $('#page3NextBtn').click(function() {
    //     $('#page4').show();
    //     $('#page3').hide();
    // });

    // Page 2 prev button
    // function myFunction() {
    //    $('#page4').hide();
    }

    // $('#page2PrevtBtn').click(function() {
    //    $('#page4').show();
    //    $('#page3').hide();
    // });


    //Contaract , training ,Premanant selection
    $('#empType').change(function() {
        $test = $('#empType').val();
        if ($test == 'contract') {
            $('.test3').hide();
        } else {
            $('.test3').show();
        }
        alert($test);
    });
    </script>



    <?php $this->load->view('userViews/components/js'); ?>

</body>

</html>
