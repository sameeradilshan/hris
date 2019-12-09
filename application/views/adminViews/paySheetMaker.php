<!DOCTYPE html>
<html>

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
                            <h1>PaySheet Maker</h1>
                        </div>
                      
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            < <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">PaySheet Maker</h3>

                        <div class="card-tools">
						<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addSalarysheet">
                                <i class="fa fa-plus"></i> Add New Details
                            </button>
						</div>
						
						 <!-- The Modal -->
						 <form action="<?php echo base_url(); ?>index.php/Admin/payRollInformationMgt" method="post">
						 <div class="modal" id="addSalarysheet">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">PayRoll Sheet Details</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->                                        
										<div class="modal-body">
											<h5>Employee Information</h5>
											<div class="row">
												
												<div class="col-md-6">	
													<div class="form-group">
														<label>Employee Name</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="empName" id="empName">
													</div>
												</div>
												<div class="col-md-6">	
													<div class="form-group">
														<label>Employee No</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="empNo" id="empNo">
													</div>
												</div>	
											</div>
											<div class="row">
												<div class="col-md-6">	
													<div class="form-group">
														<label>NIC No</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="empNICNo" id="empNICNo">
													</div>
												</div>
												<div class="col-md-6">		
													<div class="form-group">
														<label>Department</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="department" id="department">
													</div>
												</div>
											</div>	
											<hr>
											<h5>Basic Salary Information </h5>
											<div class="row">
												<div class="col-md-6">	
													<div class="form-group">
														<label>Basic Salary</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="bsal" id="bsal">
													</div>
												</div>
												<div class="col-md-6">		
													<div class="form-group">
														<label>B R Allowance</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="brallowance" id="brallowance">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">	
													<div class="form-group">
														<label>Total For EPF, ETF</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="total1" id="total1">
													</div>
												</div>
												
											</div>
											<hr>	
											<div class="row">
												<div class="col-md-6">	
													<div class="form-group">
														<label>OT</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="ot" id="ot">
													</div>
												</div>
												<div class="col-md-6">		
													<div class="form-group">
														<label>Variable Allowance</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="variableallowance" id="variableallowance">
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">	
													<div class="form-group">
														<label>Attendance Bonous</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="attbonous" id="attbonous">
													</div>
												</div>
												
											</div>	
											<div class="row">
												<div class="col-md-12">	
													<div class="form-group">
														<label><b>Gross Salary</b></label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="grossalary" id="grossalary">
													</div>
												</div>
												
											</div>
											<hr>	
											<h5>Deduction</h5>
											<div class="row">
												<div class="col-md-6">	
													<div class="form-group">
														<label>EPF</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="epf" id="epf">
													</div>
												</div>
												<div class="col-md-6">		
													<div class="form-group">
														<label>PAYE</label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="paye" id="paye">
													</div>
												</div>
											</div>		
											<div class="form-group">
														<label><b>Net Salary</b></label>
														<input type="text" class="form-control form-control-sm"
															placeholder="Jhon Doe" name="netsal" id="netsal">
													</div>	
                                               
												

                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
											<input type="submit" class="btn btn-danger" name="submit"
													value="Save">
													<button type="button" class="btn btn-info"
												data-dismiss="modal">Print</button>
												<button type="button" class="btn btn-info"
                                                data-dismiss="modal">PDF</button>
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
							</div>
						 </form>
                    </div>
                    <div class="card-body">

                        <!-- row start -->
                        <div class="row" style="background-color:#efefef; padding:20px;   border-radius: 25px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Employee Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIC</label>
                                    <input type="text" class="form-control  form-control-sm" placeholder="Jhon Doe">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control  form-control-sm">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:100px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->

                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <br><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NIC No</th>
                                            <th>Employee Name</th>
                                            <th>Department</th>
                                            <th>Basic Salary</th>
											<th>B R Allowance</th>
											<th>Increments</th>
                                            <th>OT Rate</th>
                                            <th>EPF</th>
                                            <th>ETF</th>
											<th>NoPay Rate</th>
											<th>Absent</th>
											<th>Loan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										
									//	foreach($monthlyPerfomDataView as $mProfData){
											//var_dump($MonthlyPerfomDataView);
											
										// 	echo'  
										// 		<tr role="row" class="odd">
										// 		<th scope="row"></th>
										// 			<td>'.$mProfData->empNo.'</td>
										// 			<td>'.$mProfData->empName.'</td>
										// 			<td>'.$mProfData->empNICNo.'</td>
										// 			<td>'.$mProfData->promotionYear.'</td>
										// 			<td>'.$mProfData->promotionMonth.'</td>
										// 			<td>'.$mProfData->knowledgeOfWork.'</td>
										// 			<td>'.$mProfData->achievements.'</td>
										// 			<td>'.$mProfData->quality.'</td>
										// 			<td>'.$mProfData->motivationOfTheWork.'</td>
										// 			<td>'.$mProfData->relationship.'</td>
										// 			<td>'.$mProfData->attendence.'</td>
										// 			<td>'.$mProfData->discipline.'</td>
													
												
													
												
										// 		</tr>
												
										
													
										// 	';
										// }
									
									?>



									
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                        <!-- row end -->





                    </div>
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
    $(function() {

        $("#example1").DataTable({
			"scrollX" : true
		}		
			
		);
		
    });
    </script>


</body>

</html>
