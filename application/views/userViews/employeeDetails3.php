<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('adminViews/components/css'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('adminViews/components/topBar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('adminViews/components/sideBar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee Details</h3>



                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url(); ?>index.php/Admin/employeeDetailView" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Employee No</label>
                                        <input type="text" class="form-control form-control-sm" name="SearchEmpNo"
                                            id="SearchEmpNo" placeholder="120">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button style="margin-top:32px; width:100px;" type="submit" onclick="editFunction()"
                                        class="btn btn-sm btn-primary" name="search" id="search" value="submit" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-search"></i> Search
                                    </button>
								</div>
								

								<div class="form-group">
                                    <input type="text" id="firstname">
                                </div>

                            </div>
						</form>
						
						

						
							<?php

								
						foreach($employeeDetail as $employeeDetails){
						
							//var_dump($employeeDetails);

								$sad=explode(",",$employeeDetails->qualificationName);
								$qua=explode(",",$employeeDetails->qualification);
								$spe=explode(",",$employeeDetails->specialization);
								$ins=explode(",",$employeeDetails->institute);
								$qudate=explode(",",$employeeDetails->qualifieddate);
								$alindex=explode(",",$employeeDetails->alIndexNo);
								$alyea=explode(",",$employeeDetails->alYear);
								$alsub=explode(",",$employeeDetails->alSubject);
								$alres=explode(",",$employeeDetails->alResult);
								$olindex=explode(",",$employeeDetails->olIndexNo);
								$olsub=explode(",",$employeeDetails->olsubject);
								$olres=explode(",",$employeeDetails->olResult);

								//var_dump($olsub);
							
								echo '
								<script>					
									var object = {						
									empNo:`'.$employeeDetails->empNo.'`,
									fullName:`'.$employeeDetails->fullName.'`,
									nameInitials:`'.$employeeDetails->nameInitials.'`,
									otherName:`'.$employeeDetails->otherName.'`,
									address1:`'.$employeeDetails->address1.'`,
									address2:`'.$employeeDetails->address2.'`,
									contactOffice:`'.$employeeDetails->contactOffice.'`,
									contactMobile:`'.$employeeDetails->contactMobile.'`,
									contactHome:`'.$employeeDetails->contactHome.'`,
									gender:`'.$employeeDetails->gender.'`,
									empEmail:`'.$employeeDetails->empEmail.'`,
									dateOfBirth:`'.$employeeDetails->dateOfBirth.'`,
									civilState:`'.$employeeDetails->civilState.'`,
									nationality:`'.$employeeDetails->nationality.'`,
									religious:`'.$employeeDetails->religious.'`, 
									qualificationName1: `'.$sad[0].'`,
									qualificationName2: `'.$sad[1].'`,
									qualificationName3: `'.$sad[2].'`,
									qualificationName4: `'.$sad[3].'`,
									qualificationName5: `'.$sad[4].'`,
									qualification1: `'.$qua[0].'`,
									qualification2: `'.$qua[1].'`,
									qualification3: `'.$qua[2].'`,
									qualification4: `'.$qua[3].'`,
									qualification5: `'.$qua[4].'`,
									specialization1:`'.$spe[0].'`,
									specialization2:`'.$spe[1].'`,
									specialization3:`'.$spe[2].'`,
									specialization4:`'.$spe[3].'`,
									specialization5:`'.$spe[4].'`,
									institute1:`'.$ins[0].'`,
									institute2:`'.$ins[1].'`,
									institute3:`'.$ins[2].'`,
									institute4:`'.$ins[3].'`,
									institute5:`'.$ins[4].'`,
									qualifieddate1:`'.$qudate[0].'`,
									qualifieddate2:`'.$qudate[1].'`,
									qualifieddate3:`'.$qudate[2].'`,
									qualifieddate4:`'.$qudate[3].'`,
									qualifieddate5:`'.$qudate[4].'`,
									
									alYear1:`'.$alyea[0].'`,
									alYear2:`'.$alyea[1].'`,
									alYear3:`'.$alyea[2].'`,
									alYear4:`'.$alyea[3].'`,
									
									alSubject1:`'.$alsub[0].'`,
									alSubject1:`'.$alsub[1].'`,
									alSubject3:`'.$alsub[2].'`,
									alSubject4:`'.$alsub[3].'`,

									alIndexNo1:`'.$alindex[0].'`,
									alIndexNo2:`'.$alindex[1].'`,
									alIndexNo3:`'.$alindex[2].'`,
									alIndexNo4:`'.$alindex[3].'`,

									alResult1:`'.$alres[0].'`,
									alResult2:`'.$alres[1].'`,
									alResult3:`'.$alres[2].'`,
									alResult4:`'.$alres[3].'`,

									olIndexNo1:`'.$olindex[0].'`,
									olIndexNo2:`'.$olindex[1].'`,
									olIndexNo3:`'.$olindex[2].'`,
									olIndexNo4:`'.$olindex[3].'`,
									olIndexNo5:`'.$olindex[4].'`,
									olIndexNo6:`'.$olindex[5].'`,
									olIndexNo7:`'.$olindex[6].'`,
									olIndexNo8:`'.$olindex[7].'`,
									olIndexNo9:`'.$olindex[8].'`,
									olIndexNo10:`'.$olindex[9].'`,

									olsubject1:`'.$olsub[0].'`,
									olsubject2:`'.$olsub[1].'`,
									olsubject3:`'.$olsub[2].'`,
									olsubject4:`'.$olsub[3].'`,
									olsubject5:`'.$olsub[4].'`,
									olsubject6:`'.$olsub[5].'`,
									olsubject7:`'.$olsub[6].'`,
									olsubject8:`'.$olsub[7].'`,
									olsubject9:`'.$olsub[8].'`,
									olsubject10:`'.$olsub[9].'`,

									olResult1:`'.$olres[0].'`,
									olResult2:`'.$olres[1].'`,
									olResult3:`'.$olres[2].'`,
									olResult4:`'.$olres[3].'`,
									olResult5:`'.$olres[4].',
									olResult6:`'.$olres[5].'`,
									olResult7:`'.$olres[6].'`,
									olResult8:`'.$olres[7].'`,
									olResult9:`'.$olres[8].'`,
									olResult10:`'.$olres[9].'`

								}
								</script>
								';
						
								
								 
								

								//  foreach(explode(",",$employeeDetails->qualificationName) as $key=> $edudata){
								// 	echo 'qualificationName'.($key+1).':`' .$edudata.'`' ;

								// }
						}

						?>

					</div>
					<!-- ---------------------------------form -->
					<div id="editModal" class="modal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Employee Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body" style="min-height:400px;">
///////////////////////////////////////////


<h1>Personal Details</h1>



                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empFullName" id="empFullName"  >
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Name With Initial</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="initialName" id="initialName"  >
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Other Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="otherName" id="otherName">
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Address(Permanent)</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empAddress1" id="empAddress1"  >
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Address(Tempary)</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empAddress2" id="empAddress2">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4" id="test1">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="empEmail" id="empEmail">
                                </div>
                                <div class="form-group col-md-4" id="test1">
                                    <label>NIC Number</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="1999xxxxxx"
                                        name="empNicNo" id="empNicNo"  >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Date Of Birth</label><br>

                                    <input type="date" class="form-control control form-control-sm" name="dob" id="dob">
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
                                            data-mask="" name="officeNo" id="officeNo">
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
                                            data-mask="" name="mobileNo" id="mobileNo">
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
                                            data-mask="" name="homeNo" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row ">

                                <div class="radio" class="col-md-4">
                                    <label>Gender</label>
                                    <br>

                                    <input type="radio" name="gender" id="gender" value="female">Female
                                    <input type="radio" name="gender" id="gender" value="male">Male

                                </div>

                                <div class="col-md-6"></div>


                                <div class="radio" class="col-md-2">
                                    <label>Civil State</label>
                                    <br>

                                    <input type="radio" name="civil" id="civil" value="Married">Married
                                    <input type="radio" name="civil" id="civil" value="Unmarried">Unmarried

                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="radio" class="col-md-6">
                                    <label>Nationality</label>
                                    <br>

                                    <input type="radio" name="nationality" id="nationality" value="Sinhalees">Sinhalees
                                    <input type="radio" name="nationality" id="nationality" value="Tamil">Tamil
                                    <input type="radio" name="nationality" id="nationality" value="Muslim">Muslim
                                    <input type="radio" name="nationality" id="nationality" value="Barger">Barger
                                    <input type="radio" name="nationality" id="nationality" value="Other">Other

                                </div>
                                <br>
                                <div class="col-md-2"></div>
                                <div class="radio" class="col-md-4">
                                    <label>Religious</label>
                                    <br>

                                    <input type="radio" name="religious" id="religious" value="Buddhism">Buddhism
                                    <input type="radio" name="religious" id="religious" value="Christian">Christian
                                    <input type="radio" name="religious" id="religious" value="Roman Catholic">Roman
                                    Catholic
                                    <input type="radio" name="religious" id="religious" value="Islam">Islam
                                    <input type="radio" name="religious" id="religious" value="Hindu">Hindu

                                </div>
                            </div>
                            <br>
                            <hr>
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
                                        name="r1QuaName" id="r1QuaName">
                                </div>


                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r1QuaQualification" id="r1QuaQualification">
                                        <option value="Certificate">Certificate</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="AdvancedDiploma">Advanced Diploma
                                        </option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Doctoral">Doctoral</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r1QuaSp" id="r1QuaSp">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r1QuaIns" id="r1QuaIns">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r1QuaDate" id="r1QuaDate">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r2QuaName" id="r2QuaName">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r2QuaQualification" id="r2QuaQualification">
                                        <option value="Certificate">Certificate</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="AdvancedDiploma">Advanced Diploma
                                        </option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Doctoral">Doctoral</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r2QuaSp" id="r2QuaSp">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r2QuaIns" id="r2QuaIns">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r2QuaDate" id="r2QuaDate">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r3QuaName" id="r3QuaName">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r3QuaQualification" id="r3QuaQualification">
                                        <option value="Certificate">Certificate</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="AdvancedDiploma">Advanced Diploma
                                        </option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Doctoral">Doctoral</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r3QuaSp" id="r3QuaSp">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r3QuaIns" id="r3QuaIns">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r3QuaDate" id="r3QuaDate">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r4QuaName" id="r4QuaName">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r4QuaQualification" id="r4QuaQualification">
                                        <option value="Certificate">Certificate</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="AdvancedDiploma">Advanced Diploma
                                        </option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Doctoral">Doctoral</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r4QuaSp" id="r4QuaSp">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r4QuaIns" id="r4QuaIns">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r4QuaDate" id="r4QuaDate">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r5QuaName" id="r5QuaName">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r5QuaQualification" id="r5QuaQualification">
                                        <option value="Certificate">Certificate</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="AdvancedDiploma">Advanced Diploma
                                        </option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Doctoral">Doctoral</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r5QuaSp" id="r5QuaSp">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r5QuaIns" id="r5QuaIns">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r5QuaDate" id="r5QuaDate">
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
                                        name="alSubject1" id="alSubject1">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult1" id="alResult1">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo1" id="alIndexNo1">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear1" id="alYear1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alSubject2" id="alSubject2">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult2" id="alResult2">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo2" id="alIndexNo2">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear2" id="alYear2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alSubject3" id="alSubject3">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult3" id="alResult3">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo3" id="alIndexNo3">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear3" id="alYear3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alSubject4" id="alSubject4">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult4" id="alResult4">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo4" id="alIndexNo4">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear4" id="alYear4">
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
                                        name="olSubject1" id="olSubject1">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo1" id="olIndexNo1">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult1" id="olResult1">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject2" id="olSubject2">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo2" id="olIndexNo2">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult2" id="olResult2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject3" id="olSubject3">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo3" id="olIndexNo3">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult3" id="olResult3">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject4" id="olSubject4">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo4" id="olIndexNo4">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult4" id="olResult4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject5" id="olSubject5">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo5" id="olIndexNo5">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult5" id="olResult5">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject6" id="olSubject6">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo6" id="olIndexNo6">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult6" id="olResult6">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject7" id="olSubject7">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo7" id="olIndexNo7">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult7" id="olResult7">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject8" id="olSubject8">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo8" id="olIndexNo8">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult8" id="olResult8">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject9" id="olSubject9">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo9" id="olIndexNo9">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult9" id="olResult9">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject10" id="olSubject10">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo10" id="olIndexNo10">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult10" id="olResult10">
                                </div>
                            </div>

                            <!-- GCE OL results table finished--------------------------------------------->




                            <!-- page 2 finished------------------------------------------------------------------------------------------ -->

                            <!-- page 3 start--------------------------------------------------------------------------- -->
                            <!-- <div id="section3" class="container-fluid " style="padding-top:70px;padding-bottom:70px"> -->
                            <br>
                            <hr>
                            <h1>Job Details</h1>



                            <div class="col-md-12" id="page3">
                                <div class="col-md-12" id="PermanateEmpDetailes">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 " id="test1">
                                            <label>Employee Number</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="1999xxxxxx" name="empNo" id="empNo"  >
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Job Designation</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="jobDesignation" id="jobDesignation">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="">
                                            <label>Date of Designation</label>
                                            <input type="date" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="dateOfDesignation" id="dateOfDesignation">
                                        </div>
                                        <div class="form-group col-md-6" id="">
                                            <label>Department</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="department" id="department">
                                        </div>
                                        <div class="form-group col-md-6 " id="">
                                            <label>EPF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="EPFNo" id="EPFNo">
                                        </div>
                                        <div class="form-group col-md-6" id="">
                                            <label>ETF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="ETFNo" id="ETFNo">
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
                                                placeholder="Jhon Doe" name="contractPeriod" id="contractPeriod">
                                        </div>



                                        <div class="form-group col-md-6" id="contract">
                                            <label>Contract Expire Date </label>
                                            <input type="date" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="contractExpireDate"
                                                id="contractExpireDate">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="contract">
                                            <label>Department</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="department" id="department">
                                        </div>
                                        <div class="form-group col-md-6" id="contract">
                                            <label>EPF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="EPFNo" id="EPFNo">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="contract">
                                            <label>ETF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="ETFNo" id="ETFNo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Tranining Students------------------------------------------ -->

                                <div class="form-row">

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Period</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingPeriod" id="trainingPeriod">
                                    </div>

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Finished Date </label>
                                        <input type="date" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingFinishedDate" id="trainingFinishedDate">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Institute Name </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingInstituteName" id="trainingInstituteName">
                                    </div>
                                    <div class="form-group col-md-6" id="training">
                                        <label>Department</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="department" id="department">
                                    </div>

                                </div>

                            </div>



                            <!-- page 3finished-------------------------------------------------------------------------------- -->

                            <!-- <div id="section4" class="container-fluid " style="padding-top:70px;padding-bottom:70px"> -->
                            <br>
                            <hr>
                            <h1>Bank Details</h1>



                            <div class="col-md-12" id="page4">

                                <div class="form-row">
                                    <div class="form-group col-md-6" id="">
                                        <label>Account No </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="accNo" id="accNo">
                                    </div>
                                    <div class="form-group col-md-6" id="">
                                        <label>Bank Name </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="bankName" id="bankName">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6" id="">
                                        <label>Branch Name</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="branchName" id="branchName">
                                    </div>
                                    <div class="form-group col-md-6" id="">
                                        <label>Account Type</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="accType" id="accType">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-12" id="page4">

                                        <h1>Family Detailes</h1>
                                        <hr>
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
                                                    name="parentsName1" id="parentsName1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsNIC1" id="parentsNIC1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsRelation1" id="parentsRelation1">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsName2" id="parentsName2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsNIC2" id="parentsNIC2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="parentsRelation2" id="parentsRelation2">
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
                                                    name="childName1" id="childName1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                    name="childDOB1" id="childDOB1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childNIC1" id="childNIC1">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childName2" id="childName2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                    name="childDOB2" id="childDOB2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childNIC2" id="childNIC2">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" id="childName3" class="form-control form-control-sm"
                                                    placeholder="" name="childName3" id="childName3">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                    name="childDOB3" id="childDOB3">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childNIC3" id="childNIC3">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childName4" id="childName4">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="date" class="form-control form-control-sm" placeholder=""
                                                    name="childDOB4" id="childDOB4">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="childNIC4" id="childNIC4">
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
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="hwName" id="hwName">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="hwNICNo" id="hwNICNo">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder=""
                                                    name="hwRelation" id="hwRelation">
                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>

///////////////////////////////////////////////
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="closeStop()" class="close_btn btn btn-default pull-left"
                            data-dismiss="modal">Close</button>
                        <button type="button" id="stopModelAdd" onclick="addStop()" class="btn btn-primary"
                            data-dismiss="modal">ADD</button>
                    </div>
                </div>
            </div>
        </div>

<!-- --------------------------------------------------------------- -->
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

        <?php $this->load->view('adminViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  	</aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

	<?php $this->load->view('adminViews/components/js'); ?>
	
<script>
 function editFunction2() {
alert('succes');
	 
 }

function editFunction(object) {
        //var type=type;
       // alert(JSON.stringify(object))
		alert(sussce);
		
		console.log(object);
		$('#firstname').val(object.fullName);

			// $('#empFullName').val(object.fullName);
            // $('#initialName').val(object.nameInitials);
            // $('#empEmail').val(object.empEmail);
            // $('#otherName').val(object.otherName);
            // $('#empAddress1').val(object.address1);
            // $('#empAddress2').val(object.address2);
            // $('#empNicNo').val(object.empNic);
            // $('#officeNo').val(object.contactOffice);
            // $('#mobileNo').val(object.contactMobile);
            // $('#homeNo').val(object.contactHome);
            // $('#gender').val(object.gender);
            // $('#dob').val(object.dateOfBirth);
            // $('#civil').val(object.civilState);
            // $('#nationality').val(object.nationality);
            // $('#religious').val(object.religious);

            // $('#r1QuaName').val(object.qualificationName1);
            // $('#r1QuaQualification').val(object.qualification1);
            // $('#r1QuaSp').val(object.specialization1);
            // $('#r1QuaIns').val(object.institute1);
            // $('#r1QuaDate').val(object.qualifieddate1);

			// $('#r2QuaName').val(object.qualificationName2);
            // $('#r2QuaQualification').val(object.qualification2);
            // $('#r2QuaSp').val(object.specialization2);
            // $('#r2QuaIns').val(object.institute2);
            // $('#r2QuaDate').val(object.qualifieddate2);

            // $('#r3QuaName').val(object.qualificationName3);
            // $('#r3QuaQualification').val(object.qualification3);
            // $('#r3QuaSp').val(object.specialization3);
            // $('#r3QuaIns').val(object.institute3);
            // $('#r3QuaDate').val(object.qualifieddate3);

            // $('#r4QuaName').val(object.qualificationName4);
            // $('#r4QuaQualification').val(object.qualification4);
            // $('#r4QuaSp').val(object.specialization4);
            // $('#r4QuaIns').val(object.institute4);
            // $('#r4QuaDate').val(object.qualifieddate4);

            // $('#r5QuaName').val(object.qualificationName5);
            // $('#r5QuaQualification').val(object.qualification5);
            // $('#r5QuaSp').val(object.specialization5);
            // $('#r5QuaIns').val(object.institute5);
            // $('#r5QuaDate').val(object.qualifieddate5);

			// $('#alSubject1').val(object.alSubject1);
            // $('#alSubject2').val(object.alSubject1);
            // $('#alSubject3').val(object.alSubject3);
            // $('#alSubject4').val(object.alSubject4);

            // $('#alIndexNo1').val(object.alIndexNo1);
            // $('#alIndexNo2').val(object.alIndexNo2);
            // $('#alIndexNo3').val(object.alIndexNo3);
            // $('#alIndexNo4').val(object.alIndexNo4);

            // $('#alResult1').val(object.alResult1);
            // $('#alResult2').val(object.alResult2);
            // $('#alResult3').val(object.alResult3);
            // $('#alResult4').val(object.alResult4);

            // $('#alYear1').val(object.alYear1);
            // $('#alYear2').val(object.alYear2);
            // $('#alYear3').val(object.alYear3);
            // $('#alYear4').val(object.alYear4);

            // $('#olIndexNo1').val(object.olIndexNo1);
            // $('#olIndexNo2').val(object.olIndexNo2);
            // $('#olIndexNo3').val(object.olIndexNo3);
            // $('#olIndexNo4').val(object.olIndexNo4);
            // $('#olIndexNo6').val(object.olIndexNo6);
            // $('#olIndexNo7').val(object.olIndexNo7);
            // $('#olIndexNo8').val(object.olIndexNo8);
            // $('#olIndexNo9').val(object.olIndexNo9);
            // $('#olIndexNo10').val(object.olIndexNo10);
			// $('#olIndexNo5').val(object.olIndexNo5);

            // $('#olSubject1').val(object.olsubject1);
            // $('#olSubject2').val(object.olsubject2);
            // $('#olSubject3').val(object.olsubject3);
            // $('#olSubject4').val(object.olsubject4);
            // $('#olSubject5').val(object.olsubject5);
            // $('#olSubject6').val(object.olsubject6);
            // $('#olSubject7').val(object.olsubject7);
            // $('#olSubject8').val(object.olsubject8);
            // $('#olSubject9').val(object.olsubject9);
            // $('#olSubject10').val(object.olsubject10);

            // $('#olResult1').val(object.olResult1);
            // $('#olResult2').val(object.olResult2);
            // $('#olResult3').val(object.olResult3);
            // $('#olResult4').val(object.olResult4);
            // $('#olResult5').val(object.olResult5);
            // $('#olResult6').val(object.olResult6);
            // $('#olResult7').val(object.olResult7);
            // $('#olResult8').val(object.olResult8);
            // $('#olResult9').val(object.olResult19);
            // $('#olResult10').val(object.olResult10);

							




      
      


        var modal = document.getElementById('editModal');



        modal.style.display = "block";


    }

</script>
</body>

</html>
