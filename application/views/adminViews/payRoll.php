<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payroll</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('adminViews/components/css'); ?>

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
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
                            <h1>Payroll Management</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Payroll Reports</li>
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
                        <h3 class="card-title">Payroll Reports</h3>

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



                    </div>
                    <div class="row">
                        <div class="col-3">
                            <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                data-target="#Bank">Bank</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                data-target="#Salary">Total Salary</button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                data-target="#EPF">EPF</button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                data-target="#ETF1">ETF</button>
                        </div>
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

        <!-- modal view -->
        <!-- The Modal  Bank details -->
        <form id="bankReportForm" action="<?php echo base_url(); ?>index.php/Admin/bankreport" method="post">
            <div class="modal" id="Bank">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Employee Bank Details</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Bank</label>
                                <select class="form-control  form-control-sm" name="bankName"
                                    id="bankName">
                                    <option value="All">All</option>
                                    <option value="BOC">Bank Of Ceylon</option>
                                    <option value="PEOPLES">Peoples' Bank</option>
                                    <option value="NSB">National Savings Bank</option>


                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="Year" id="Year">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Month</label>
                                        <select class="form-control  form-control-sm" name="bankReportMonth"
											id="bankReportMonth">
											<option value="">Select a Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Modal footer -->

                        <div class="modal-footer">

                            <input type="submit" class="btn btn-danger" name="submit" value="Generate" id="formSubmit"  onclick="window.open('')" >

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <!-- Salary Reports -->
        <form id="SalaryReportForm" action="<?php echo base_url(); ?>index.php/Admin/salaryreport" method="post">
            <div class="modal" id="Salary">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Employee Salary Report</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control  form-control-sm" name="Department" id="Department">
                                    <option value="All">All</option>
                                    <option value="humanResource">Human Resource</option>
                                    <option value="Operation">Operation</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Production">Production</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="QualityAssurance">Quality Assurance</option>


                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="Year" id="Year">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Month</label>
                                        <select class="form-control  form-control-sm" name="salaryMonth"
											id="salaryMonth">
											<option value="">Select a Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Modal footer -->

                        <div class="modal-footer">

                            <input type="submit" class="btn btn-danger" name="submit" value="Generate" id="formSubmit" >

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <!--Epf Report  -->
        <form id="EPFReportForm" action="<?php echo base_url(); ?>index.php/Admin/EPFreport" method="post">
            <div class="modal" id="EPF">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Employee/Employeer ETF Report</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="radio">
                                <label>Select the Type</label>
                                <br>
                                <div class="center">
                                    <input type="radio" name="ETF" id="ETF" value="EPF">Employee
                                    <input type="radio" name="ETF" id="ETF" value="EPFCompany">Employer
                                </div>
                                <br>
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control  form-control-sm" name="Department" id="Department">
                                    <option value="all">All</option>
                                    <option value="humanrResource">Human Resource</option>
                                    <option value="Operation">Operation</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Production">Production</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="QualityAssurance">Quality Assurance</option>


                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="Year" id="Year">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Month</label>
                                        <select class="form-control  form-control-sm" name="epfMonth" id="epfMonth">
											<option value="">Select a Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Modal footer -->

                        <div class="modal-footer">

                            <input type="submit" class="btn btn-danger" name="submit" value="Generate" id="formSubmit" >

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <!-- ETF Report -------------------------------------------------------------------------------->

        <form id="ETFReportForm" action="<?php echo base_url(); ?>index.php/Admin/ETFreport" method="post">
            <div class="modal" id="ETF1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Employee ETF Report</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control  form-control-sm" name="Department" id="Department">
                                    <option value="All">All</option>
                                    <option value="humanrResource">Human Resource</option>
                                    <option value="Operation">Operation</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Production">Production</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="QualityAssurance">Quality Assurance</option>


                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="etfYear" id="etfYear">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Month</label>
                                        <select class="form-control  form-control-sm" name="etfMonth" id="etfMonth">
										<option value="">Select a Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Modal footer -->

                        <div class="modal-footer">

                            <input type="submit" class="btn btn-danger" name="submit" value="Generate" id="formSubmit" >

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

        <?php $this->load->view('adminViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('adminViews/components/js'); ?>

</body>

</html>
