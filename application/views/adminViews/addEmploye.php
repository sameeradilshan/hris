<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('adminViews/components/css'); ?>



</head>

<body class="hold-transition sidebar-mini" data-spy="scroll" data-target="#myScrollspy" data-offset="100">
    <!-- Site wrapper -->
    <div class="wrapper">


        <!-- Main Sidebar Container -->
        <?php $this->load->view('adminViews/components/sideBar'); ?>






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

                        <form >


                            <h1>Personal Details</h1>



                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empFullName" id="empFullName" required>
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Name With Initial</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="initialName" id="initialName" required>
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Other Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="otherName" id="otherName">
                            </div>
                            <div class="form-group test3" id="test1">
                                <label>Address(Permanent)</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="empAddress1" id="empAddress1" required>
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
                                        name="empNicNo" id="empNicNo" required>
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
                                                placeholder="1999xxxxxx" name="empNo" id="empNo" required>
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

                            <input name="Submit" id="submit" class="btn btn-primary" type="submit" value="submit">
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
            empFullName: 		$('#empFullName').val(),
            empInitialName: 	$('#initialName').val(),
            empNameEmail: 		$('#empEmail').val(),
            otherName:			$('#otherName').val(),
            empAdress1: 		$('#empAddress1').val(),
            empAdress2: 		$('#empAddress2').val(),
            empNicNo: 			$('#empNicNo').val(),
            officeNo: 			$('#officeNo').val(),
            mobileNo: 			$('#mobileNo').val(),
            homeNo: 			$('#homeNo').val(),
            gender: 			$('#gender').val(),
            dob: 				$('#dob').val(),
            civil: 				$('#civil').val(),
            nationality: 		$('#nationality').val(),
            religious: 			$('#religious').val(),
            qualificationName1: $('#r1QuaName').val(),
			qualification1: 	$('#r1QuaQualification').val(),
            quaSpecilization1: 	$('#r1QuaSp').val(),
            quaInstitute1: 		$('#r1QuaIns').val(),
            quaDate1: 			$('#r1QuaDate').val(),
            qualificationName2: $('#r2QuaName').val(),
            qualification2: 	$('#r2QuaQualification').val(),
            quaSpecilization2: 	$('#r2QuaSp').val(),
            quaInstitute2: 		$('#r2QuaIns').val(),
            quaDate2: 			$('#r2QuaDate').val(),
            qualificationName3: $('#r3QuaName').val(),
            qualification3: 	$('#r3QuaQualification').val(),
            quaSpecilization3: 	$('#r3QuaSp').val(),
            quaInstitute3: 		$('#r3QuaIns').val(),
            quaDate3: 			$('#r3QuaDate').val(),
            qualificationName4: $('#r4QuaName').val(),
            qualification4: 	$('#r4QuaQualification').val(),
            quaSpecilization4: 	$('#r4QuaSp').val(),
            quaInstitute4: 		$('#r4QuaIns').val(),
            quaDate4: 			$('#r4QuaDate').val(),
            qualificationName5: $('#r5QuaName').val(),
            qualification5: 	$('#r5QuaQualification').val(),
            quaSpecilization5: 	$('#r5QuaSp').val(),
            quaInstitute5: 		$('#r5QuaIns').val(),
            quaDate5: 			$('#r5QuaDate').val(),
            alSubject1: 		$('#alSubject1').val(),
            alSubject2: 		$('#alSubject2').val(),
            alSubject3: 		$('#alSubject3').val(),
            alSubject4: 		$('#alSubject4').val(),
            alIndexNo1: 		$('#alIndexNo1').val(),
            alIndexNo2: 		$('#alIndexNo2').val(),
            alIndexNo3: 		$('#alIndexNo3').val(),
            alIndexNo4: 		$('#alIndexNo4').val(),
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

            empNo: 				$('#empNoal').val(),
            jobDesignation: 	$('#jobDesignation').val(),
            dateOfDesignation: 	$('#dateOfDesignation').val(),
            department: 		$('#department').val(),
            epfNo: 				$('#EPFNo').val(),
            etfNo: 				$('#ETFNo').val(),
            contractperiod: 	$('#contractPeriod').val(),
            contractExpireDate: $('#contractExpireDate').val(),
            trainingPeriod: 	$('#trainingPeriod').val(),
            trainingFinishDate: $('#trainingFinishedDate').val(),
            trainingInstituteName: $('#trainingInstituteName').val(),

            accNo: 		$('#accNo').val(),
            bankName: 	$('#bankName').val(),
            branchName: $('#branchName').val(),
            accType: 	$('#accType').val(),
            childName1: $('#childName1').val(),
            childDOB1: 	$('#childDOB1').val(),
            childNIC1: 	$('#childNIC1').val(),
            childName2: $('#childName2').val(),
            childDOB2: 	$('#childDOB2').val(),
            childNIC2: 	$('#childNIC2').val(),
            childName3: $('#childName3').val(),
            childDOB3: 	$('#childDOB3').val(),
            childNIC3: 	$('#childNIC3').val(),
            childName4: $('#childName4').val(),
            childDOB4: 	$('#childDOB4').val(),
            childNIC4: 	$('#childNIC4').val(),
            hwName: 	$('#hwName').val(),
            hwNICNo: 	$('#hwNICNo').val(),
            hwRelation: $('#hwRelation').val(),
            parentsName1: $('#parentsName1').val(),
            parentsRelation1: $('#parentsRelation1').val(),
            parentsNIC1: $('#parentsNIC1').val(),
            parentsName2: $('#parentsName2').val(),
            parentsRelation2: $('#parentsRelation2').val(),
            parentsNIC2: $('#parentsNIC2').val(),
           

        }
		console.log(param);
		$.post("<?php echo base_url(); ?>index.php/Admin/EmployeeDetailshandler", param, function(
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
				
             } else {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
					footer: '<a href>Why do I have this issue?</a>'
				})


        $.post("<?php echo base_url(); ?>index.php/Admin/EmployeeDetailshandler", param, function(
        data) {
            var response = JSON.parse(data);

            if (response.status) {

            } else {

            }

        });
    })
    </script>


</body>

</html>
