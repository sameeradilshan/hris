<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Employee</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('adminViews/components/css'); ?>

    <style>
    div.card-body {
        width: 900px;
        margin: auto;
        border: 2px solid;
        background-color: rgb(0, 28, 255, 0.02);
    }
    </style>

</head>

<body class="hold-transition sidebar-mini" data-spy="scroll" data-target="#myScrollspy" data-offset="100">
    <!-- Site wrapper -->
    <div class="wrapper">


        <!-- Main Sidebar Container -->
        <?php $this->load->view('adminViews/components/sideBar'); ?>


<?php error_reporting(0); ?>



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
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Add Employee Details</li>
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
                        
                        <form action="<?php echo base_url(); ?>index.php/Admin/EmployeeDetailEditshandler" method="POST"
                            id="body1">


                            <h1>Personal Details</h1>


                            <div class="form-group">
                                
                                <input type="hidden" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empId" id="empId" value="<?php echo $employeeDetail->empId?>">
                            </div>

                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empFullName" id="empFullName" value="<?php echo $employeeDetail->fullName?>">
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Name With Initial</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="initialName" id="initialName"
                                    value="<?php echo $employeeDetail->nameInitials?>">
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Other Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="otherName" id="otherName" value="<?php echo $employeeDetail->otherName?>">
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Address(Permanent)</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empAddress1" id="empAddress1" value="<?php echo $employeeDetail->address1?>">
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Address(Tempary)</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empAddress2" id="empAddress2" value="<?php echo $employeeDetail->address2?>">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4" id="test1">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="empEmail" id="empEmail" value="<?php echo $employeeDetail->empEmail?>">
                                </div>
                                <div class="form-group col-md-4" id="test1">
                                    <label>NIC Number</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="1999xxxxxx"
                                        name="empNicNo" id="empNicNo" value="<?php echo $employeeDetail->empNic?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Date Of Birth</label><br>

                                    <input type="date" class="form-control control form-control-sm" name="dob" id="dob"
                                        value="<?php echo $employeeDetail->dateOfBirth?>">
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
                                            data-mask="" name="officeNo" id="officeNo"
                                            value="<?php echo $employeeDetail->contactOffice?>">
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
                                            data-mask="" name="mobileNo" id="mobileNo"
                                            value="<?php echo $employeeDetail->contactMobile?>">
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
                                            data-mask="" name="homeNo" id=""
                                            value="<?php echo $employeeDetail->contactHome?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row ">

                                <div class="radio" class="col-md-4">
                                    <label>Gender</label>
                                    <br>

                                    <input type="text" name="gender" id="gender" value="<?php echo $employeeDetail->gender?>">
                                   

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
                                        name="r1QuaName" id="r1QuaName"
                                        value="<?php if($qualificationName[0]) echo $qualificationName[0];?>">
                                </div>


                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r1QuaQualification" id="r1QuaQualification"
                                        value="<?php if($qualification[0]) echo $qualification[0];?>">
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
                                        name="r1QuaSp" id="r1QuaSp"
                                        value="<?php if($specialization[0]) echo $specialization[0];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r1QuaIns" id="r1QuaIns"
                                        value="<?php if($institute[0]) echo $institute[0];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r1QuaDate" id="r1QuaDate"
                                        value="<?php if($qualifieddate[0]) echo $qualifieddate[0];?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r2QuaName" id="r2QuaName"
                                        value="<?php if($qualificationName[1]) echo $qualificationName[1];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r2QuaQualification" id="r2QuaQualification"
                                        value="<?php if($qualification[1]) echo $qualification[1];?>">
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
                                        name="r2QuaSp" id="r2QuaSp"
                                        value="<?php if($specialization[1]) echo $specialization[1];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r2QuaIns" id="r2QuaIns"
                                        value="<?php if($institute[1]) echo $institute[1];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r2QuaDate" id="r2QuaDate"
                                        value="<?php if($qualifieddate[1]) echo $qualifieddate[1];?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r3QuaName" id="r3QuaName"
                                        value="<?php if(isset($qualificationName[2])) echo $qualificationName[2];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r3QuaQualification" id="r3QuaQualification"
                                        value="<?php if(isset($qualification[2])) echo $qualification[2];?>">
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
                                        name="r3QuaSp" id="r3QuaSp"
                                        value="<?php if(isset($specialization[2])) echo $specialization[2];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r3QuaIns" id="r3QuaIns"
                                        value="<?php if(isset($institute[2])) echo $institute[2];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r3QuaDate" id="r3QuaDate"
                                        value="<?php if(isset($qualifieddate[2])) echo $qualifieddate[2];?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r4QuaName" id="r4QuaName"
                                        value="<?php if(isset($qualificationName[3])) echo $qualificationName[3];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r4QuaQualification" id="qualification"
                                        value="<?php if(isset($qualification[3])) echo $qualificationName[3];?>">
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
                                        name="r4QuaSp" id="r4QuaSp"
                                        value="<?php if(isset($specialization[3])) echo $specialization[3];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r4QuaIns" id="r4QuaIns"
                                        value="<?php if(isset($institute[3])) echo $institute[3];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r4QuaDate" id="r4QuaDate"
                                        value="<?php if(isset($qualifieddate[3])) echo $qualifieddate[3];?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r5QuaName" id="r5QuaName"
                                        value="<?php if(isset($qualificationName[4])) echo $qualificationName[4];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="qualificationType" class="form-control form-control-sm"
                                        name="r5QuaQualification" id="r5QuaQualification"
                                        value="<?php if(isset($qualification[4])) echo $qualification[4];?>">
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
                                        name="r5QuaSp" id="r5QuaSp"
                                        value="<?php if(isset($specialization[4])) echo $specialization[4];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="r5QuaIns" id="r5QuaIns"
                                        value="<?php if(isset($institute[4])) echo $institute[4];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" class="form-control form-control-sm" placeholder=""
                                        name="r5QuaDate" id="r5QuaDate"
                                        value="<?php if(isset($qualifieddate[4])) echo $qualifieddate[4];?>">
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
                                        name="alSubject1" id="alSubject1"
                                        value="<?php if(isset($alSubject[0])) echo $alSubject[0];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult1" id="alResult1"
                                        value="<?php if(isset($alResult[0])) echo $alResult[0];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo1" id="alIndexNo1"
                                        value="<?php if(isset($employeAlSubjectDetail)) echo$employeAlSubjectDetail->alIndexNo ;?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear1" id="alYear1"
                                        value="<?php if(isset($alYear[0])) echo $alYear[0];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alSubject2" id="alSubject2"
                                        value="<?php if(isset($alSubject[1])) echo $alSubject[1];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult2" id="alResult2"
                                        value="<?php if(isset($alResult[1])) echo $alResult[1];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo2" id="alIndexNo2"
                                        value="<?php if(isset($employeAlSubjectDetail)) echo$employeAlSubjectDetail->alIndexNo ;?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear2" id="alYear2"
                                        value="<?php if(isset($alYear[1])) echo $alYear[1];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alSubject3" id="alSubject3"
                                        value="<?php if(isset($alSubject[2])) echo $alSubject[2];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult3" id="alResult3"
                                        value="<?php if(isset($alResult[2])) echo $alResult[2];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo3" id="alIndexNo3"
                                        value="<?php if(isset($employeAlSubjectDetail)) echo$employeAlSubjectDetail->alIndexNo ;?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear3" id="alYear3"
                                        value="<?php if(isset($alYear[2])) echo $alYear[2];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alSubject4" id="alSubject4"
                                        value="<?php if(isset($alSubject[3])) echo $alSubject[3];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alResult4" id="alResult4"
                                        value="<?php if(isset($alResult[3])) echo $alResult[3];?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alIndexNo4" id="alIndexNo4"
                                        value="<?php if(isset($employeAlSubjectDetail)) echo$employeAlSubjectDetail->alIndexNo ;?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="alYear4" id="alYear4"
                                        value="<?php if(isset($alYear[3])) echo $alYear[3];?>">
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
                                        name="olSubject1" id="olSubject1"
                                        value="<?php if(isset($olsubject[0])) echo $olsubject[0];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo1" id="olIndexNo1"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult1" id="olResult1"
                                        value="<?php if(isset($olResult[0])) echo $olResult[0];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject2" id="olSubject2"
                                        value="<?php if(isset($olsubject[1])) echo $olsubject[1];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo2" id="olIndexNo2"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult2" id="olResult2"
                                        value="<?php if(isset($olResult[1])) echo $olResult[1];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject3" id="olSubject3"
                                        value="<?php if(isset($olsubject[2])) echo $olsubject[2];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo3" id="olIndexNo3"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult3" id="olResult3"
                                        value="<?php if(isset($olResult[2])) echo $olResult[2];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject4" id="olSubject4"
                                        value="<?php if(isset($olsubject[3])) echo $olsubject[3];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo4" id="olIndexNo4"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult4" id="olResult4"
                                        value="<?php if(isset($olResult[3])) echo $olResult[3];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject5" id="olSubject5"
                                        value="<?php if(isset($olsubject[4])) echo $olsubject[4];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo5" id="olIndexNo5"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult5" id="olResult5"
                                        value="<?php if(isset($olResult[4])) echo $olResult[4];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject6" id="olSubject6"
                                        value="<?php if(isset($olsubject[5])) echo $olsubject[5];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo6" id="olIndexNo6"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult6" id="olResult6"
                                        value="<?php if(isset($olResult[5])) echo $olResult[5];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject7" id="olSubject7"
                                        value="<?php if(isset($olsubject[6])) echo $olsubject[6];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo7" id="olIndexNo7"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult7" id="olResult7"
                                        value="<?php if(isset($olResult[6])) echo $olResult[6];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject8" id="olSubject8"
                                        value="<?php if(isset($olsubject[7])) echo $olsubject[7];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo8" id="olIndexNo8"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult8" id="olResult8"
                                        value="<?php if(isset($olResult[7])) echo $olResult[7];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject9" id="olSubject9"
                                        value="<?php if(isset($olsubject[8])) echo $olsubject[8];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo9" id="olIndexNo9"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult9" id="olResult9"
                                        value="<?php if(isset($olResult[8])) echo $olResult[8];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olSubject10" id="olSubject10"
                                        value="<?php if(isset($olsubject[9])) echo $olsubject[9];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olIndexNo10" id="olIndexNo10"
                                        value="<?php if(isset($employeAlSubjectDetail->olIndexNo)) echo $employeAlSubjectDetail->olIndexNo;?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" class="form-control form-control-sm" placeholder=""
                                        name="olResult10" id="olResult10"
                                        value="<?php if(isset($olResult[9])) echo $olResult[9];?>">
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
                                                placeholder="1999xxxxxx" name="empNo" id="empNo"
                                                value="<?php echo $employeeDetail->empNo?>">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Job Designation</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="jobDesignation" id="jobDesignation"
                                                value="<?php echo $employeeDetail->jobDesignation?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="">
                                            <label>Date of Designation</label>
                                            <input type="date" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="dateOfDesignation" id="dateOfDesignation"
                                                value="<?php echo $employeeDetail->designationDate?>">
                                        </div>
                                        <div class="form-group col-md-6" id="">
                                            <label>Department</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="dateOfDesignation" id="dateOfDesignation"
                                                value="<?php echo $employeeDetail->Department?>">
                                        </div>
                                        <div class="form-group col-md-6 " id="">
                                            <label>EPF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="EPFNo" id="EPFNo"
                                                value="<?php echo $employeeDetail->EPFNo?>">
                                        </div>
                                        <div class="form-group col-md-6" id="">
                                            <label>ETF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="ETFNo" id="ETFNo"
                                                value="<?php echo $employeeDetail->ETFNo?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Contract employee Detailes--------------------------------------- -->



                                <div class="form-group" id="contract">

                                    <label>Daily Employee Details</label><br>

                                    <div class="form-row">

                                        <div class="form-group col-md-6" id="contract">
                                            <label>Contract Period </label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="contractPeriod" id="contractPeriod"
                                                value="<?php echo $employeeDetail->contractPeriod?>">
                                        </div>



                                        <div class="form-group col-md-6" id="contract">
                                            <label>Contract Expire Date </label>
                                            <input type="date" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="contractExpireDate" id="contractExpireDate"
                                                value="<?php echo $employeeDetail->contractExpireDate?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="contract">
                                            <label>Department</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="department" id="department"
                                                value="<?php echo $employeeDetail->Department?>">
                                        </div>
                                        <div class="form-group col-md-6" id="contract">
                                            <label>EPF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="EPFNo" id="EPFNo"
                                                value="<?php echo $employeeDetail->ETFNo?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="contract">
                                            <label>ETF No</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Jhon Doe" name="ETFNo" id="ETFNo"
                                                value="<?php echo $employeeDetail->ETFNo?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Tranining Students------------------------------------------ -->

                                <div class="form-row">

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Period</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingPeriod" id="trainingPeriod"
                                            value="<?php echo $employeeDetail->trainingPeriod?>">
                                    </div>

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Finished Date </label>
                                        <input type="date" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingFinishedDate" id="trainingFinishedDate"
                                            value="<?php echo $employeeDetail->trainingFinishedDate?>">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6" id="training">
                                        <label>Training Institute Name </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="trainingInstituteName" id="trainingInstituteName"
                                            value="<?php echo $employeeDetail->traineeInstituteName?>">
                                    </div>
                                    <div class="form-group col-md-6" id="training">
                                        <label>Department</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="department" id="department"
                                            value="<?php echo $employeeDetail->department?>">
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
                                            name="accNo" id="accNo" value="<?php echo $employeeDetail->accountNo?>">
                                    </div>
                                    <div class="form-group col-md-6" id="">
                                        <label>Bank Name </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="accNo" id="accNo" value="<?php echo $employeeDetail->bankName?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" id="">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="branchName" id="branchName"
                                        value="<?php echo $employeeDetail->branchName?>">
                                </div>
                                <div class="form-group col-md-6" id="">
                                    <label>Account Type</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        name="accType" id="accType" value="<?php echo $employeeDetail->accountType?>">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12" id="page4">

                                    <h1>Family Details</h1>
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
                                                name="parentsName1" id="parentsName1"
                                                value="<?php if(isset($parentName[0])) echo $parentName[0];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="parentsNIC1" id="parentsNIC1"
                                                value="<?php if(isset($parentNicNo[0])) echo $parentNicNo[0];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="parentsRelation1" id="parentsRelation1"
                                                value="<?php if(isset($parentRelation[0])) echo $parentRelation[0];?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="parentsName2" id="parentsName2"
                                                value="<?php if(isset($parentName[1])) echo $parentName[1];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="parentsNIC2" id="parentsNIC2"
                                                value="<?php if(isset($parentNicNo[1])) echo $parentNicNo[1];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="parentsRelation2" id="parentsRelation2"
                                                value="<?php if(isset($parentRelation[1])) echo $parentRelation[1];?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label>Children Details</label>

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
                                                name="childName1" id="childName1"
                                                value="<?php if(isset($childrenName[0])) echo $childrenName[0];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="date" class="form-control form-control-sm" placeholder=""
                                                name="childDOB1" id="childDOB1"
                                                value="<?php if(isset($childrenBirthDay[0])) echo $childrenBirthDay[0];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="childNIC1" id="childNIC1"
                                                value="<?php if(isset($childrenNicNo[0])) echo $childrenNicNo[0];?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="childName2" id="childName2"
                                                value="<?php if(isset($childrenName[1])) echo $childrenName[1];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="date" class="form-control form-control-sm" placeholder=""
                                                name="childDOB2" id="childDOB2"
                                                value="<?php if(isset($childrenBirthDay[1])) echo $childrenBirthDay[1];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="childNIC2" id="childNIC2"
                                                value="<?php if(isset($childrenNicNo[1])) echo $childrenNicNo[1];?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" id="childName3" class="form-control form-control-sm"
                                                placeholder="" name="childName3" id="childName3"
                                                value="<?php if(isset($childrenName[2])) echo $childrenName[2];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="date" class="form-control form-control-sm" placeholder=""
                                                name="childDOB3" id="childDOB3"
                                                value="<?php if(isset($childrenBirthDay[2])) echo $childrenBirthDay[2];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="childNIC3" id="childNIC3"
                                                value="<?php if(isset($childrenNicNo[2])) echo $childrenNicNo[2];?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="childName4" id="childName4"
                                                value="<?php if(isset($childrenName[3])) echo $childrenName[3];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="date" class="form-control form-control-sm" placeholder=""
                                                name="childDOB4" id="childDOB4"
                                                value="<?php if(isset($childrenBirthDay[3])) echo $childrenBirthDay[3];?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="childNIC4" id="childNIC4"
                                                value="<?php if(isset($childrenNicNo[3])) echo $childrenNicNo[3];?>">
										</div>
										
                                    </div>
                                </div>






                                <div class="col-md-12">
                                    <label>Wife/Husband Details</label>


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
                                                name="hwName" id="hwName"
                                                value="<?php echo $employeeFamilyDetailView->hwName ;?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="hwNICNo" id="hwNICNo"
                                                value="<?php echo $employeeFamilyDetailView->hwNicNo ;?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-sm" placeholder=""
                                                name="hwRelation" id="hwRelation"
                                                value="<?php echo $employeeFamilyDetailView->hwRelation ;?>">
                                        </div>
                                    </div>





                                </div>
                            </div>
                    </div>
                    <div class="row" ><div class="btn-group"> 
                        <input name="SAVE" id="submit" class="btn btn-primary" type="submit" value="Save">
                        <input name="DELETE" id="submit2" class="btn btn-primary" type="button" value="Delete">
					</div>
                    </div>
                        </form>
                        <!--form finished ----------------------------------------------------------------------------------- -->

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <input id="nameqws" value="devaka">

    <?php $this->load->view('adminViews/components/footer'); ?>

    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark"> 
  	</aside> -->
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('adminViews/components/js'); ?>


    <script>
    $('#submit').click(function() {
        alert($('#empFullName').val())
        var param = {
			empId: $('#empId').val(),
            empFullName: $('#empFullName').val(),
            empInitialName: $('#initialName').val(),
            empNameEmail: $('#empEmail').val(),
            otherName: $('#otherName').val(),
            empAdress1: $('#empAddress1').val(),
            empAdress2: $('#empAddress2').val(),
            empNicNo: $('#empNicNo').val(),
            officeNo: $('#officeNo').val(),
            mobileNo: $('#mobileNo').val(),
            homeNo: $('#homeNo').val(),
            gender: $('#gender').val(),
            dob: $('#dob').val(),
            civil: $('#civil').val(),
            nationality: $('#nationality').val(),
            religious: $('#religious').val(),
            qualificationName1: $('#r1QuaName').val(),
            qualification1: $('#r1QuaQualification').val(),
            quaSpecilization1: $('#r1QuaSp').val(),
            quaInstitute1: $('#r1QuaIns').val(),
            quaDate1: $('#r1QuaDate').val(),
            qualificationName2: $('#r2QuaName').val(),
            qualification2: $('#r2QuaQualification').val(),
            quaSpecilization2: $('#r2QuaSp').val(),
            quaInstitute2: $('#r2QuaIns').val(),
            quaDate2: $('#r2QuaDate').val(),
            qualificationName3: $('#r3QuaName').val(),
            qualification3: $('#r3QuaQualification').val(),
            quaSpecilization3: $('#r3QuaSp').val(),
            quaInstitute3: $('#r3QuaIns').val(),
            quaDate3: $('#r3QuaDate').val(),
            qualificationName4: $('#r4QuaName').val(),
            qualification4: $('#r4QuaQualification').val(),
            quaSpecilization4: $('#r4QuaSp').val(),
            quaInstitute4: $('#r4QuaIns').val(),
            quaDate4: $('#r4QuaDate').val(),
            qualificationName5: $('#r5QuaName').val(),
            qualification5: $('#r5QuaQualification').val(),
            quaSpecilization5: $('#r5QuaSp').val(),
            quaInstitute5: $('#r5QuaIns').val(),
            quaDate5: $('#r5QuaDate').val(),
            alSubject1: $('#alSubject1').val(),
            alSubject2: $('#alSubject2').val(),
            alSubject3: $('#alSubject3').val(),
            alSubject4: $('#alSubject4').val(),
            alIndexNo1: $('#alIndexNo1').val(),
            alIndexNo2: $('#alIndexNo2').val(),
            alIndexNo3: $('#alIndexNo3').val(),
            alIndexNo4: $('#alIndexNo4').val(),
            alResult1: $('#alResult1').val(),
            alResult2: $('#alResult2').val(),
            alResult3: $('#alResult3').val(),
            alResult4: $('#alResult4').val(),
            alYear1: $('#alYear1').val(),
            alYear2: $('#alYear2').val(),
            alYear3: $('#alYear3').val(),
            alYear4: $('#alYear4').val(),
            olIndexNo1: $('#olIndexNo1').val(),
            olIndexNo2: $('#olIndexNo2').val(),
            olIndexNo3: $('#olIndexNo3').val(),
            olIndexNo4: $('#olIndexNo4').val(),
            olIndexNo5: $('#olIndexNo5').val(),
            olIndexNo6: $('#olIndexNo6').val(),
            olIndexNo7: $('#olIndexNo7').val(),
            olIndexNo8: $('#olIndexNo8').val(),
            olIndexNo9: $('#olIndexNo9').val(),
            olIndexNo10: $('#olIndexNo10').val(),
            olSubject1: $('#olSubject1').val(),
            olSubject2: $('#olSubject2').val(),
            olSubject3: $('#olSubject3').val(),
            olSubject4: $('#olSubject4').val(),
            olSubject5: $('#olSubject5').val(),
            olSubject6: $('#olSubject6').val(),
            olSubject7: $('#olSubject7').val(),
            olSubject8: $('#olSubject8').val(),
            olSubject9: $('#olSubject9').val(),
            olSubject10: $('#olSubject10').val(),
            olResult1: $('#olResult1').val(),
            olResult2: $('#olResult2').val(),
            olResult3: $('#olResult3').val(),
            olResult4: $('#olResult4').val(),
            olResult5: $('#olResult5').val(),
            olResult6: $('#olResult6').val(),
            olResult7: $('#olResult7').val(),
            olResult8: $('#olResult8').val(),
            olResult9: $('#olResult9').val(),
            olResult10: $('#olResult10').val(),

            empNo: $('#empNoal').val(),
            jobDesignation: $('#jobDesignation').val(),
            dateOfDesignation: $('#dateOfDesignation').val(),
            department: $('#department').val(),
            epfNo: $('#EPFNo').val(),
            etfNo: $('#ETFNo').val(),
            contractperiod: $('#contractPeriod').val(),
            contractExpireDate: $('#contractExpireDate').val(),
            trainingPeriod: $('#trainingPeriod').val(),
            trainingFinishDate: $('#trainingFinishedDate').val(),
            trainingInstituteName: $('#trainingInstituteName').val(),

            accNo: $('#accNo').val(),
            bankName: $('#bankName').val(),
            branchName: $('#branchName').val(),
            accType: $('#accType').val(),
            childName1: $('#childName1').val(),
            childDOB1: $('#childDOB1').val(),
            childNIC1: $('#childNIC1').val(),
            childName2: $('#childName2').val(),
            childDOB2: $('#childDOB2').val(),
            childNIC2: $('#childNIC2').val(),
            childName3: $('#childName3').val(),
            childDOB3: $('#childDOB3').val(),
            childNIC3: $('#childNIC3').val(),
            childName4: $('#childName4').val(),
            childDOB4: $('#childDOB4').val(),
            childNIC4: $('#childNIC4').val(),
            hwName: $('#hwName').val(),
            hwNICNo: $('#hwNICNo').val(),
            hwRelation: $('#hwRelation').val(),
            parentsName1: $('#parentsName1').val(),
            parentsRelation1: $('#parentsRelation1').val(),
            parentsNIC1: $('#parentsNIC1').val(),
            parentsName2: $('#parentsName2').val(),
            parentsRelation2: $('#parentsRelation2').val(),
            parentsNIC2: $('#parentsNIC2').val(),


        }
        //alert(JSON.stringify(param));
        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/EmployeeDetailEdit", param, function(
        data) {

        	console.log(data)
            var response = JSON.parse(data);
        	console.log(response)
             if (response.status) {
        		Swal.fire(
        		'Good job!',
        		'You clicked the button!',
        		'success'
        		)

        		window.location.href = "employeeDetailView";
             } else {
        			Swal.fire({
        			icon: 'error',
        			title: 'Oops...',
        			text: 'Something went wrong!',
        			footer: '<a href>Why do I have this issue?</a>'
        			})

         }

        });


    });

	//----------------------------------delete--------------------------------
	$('#submit2').click(function() {
      var  params2 = {
			empId: empId,
            empStatus: 1
        }
        $.post("<?php echo base_url(); ?>index.php/Admin/deleteEmployee", params2, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes")

                window.location.href = "home";
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                })
            }
        });
	});

    </script>
</body>

</html>
