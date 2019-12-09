<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Promotion</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('adminViews/components/css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css">
	
	

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
                            <h1>Monthly Proformance Evaluation</h1> 
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Monthly Proformance Evaluation</h3>

                        <div class="card-tools">
						<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addPromotion">
                                <i class="fa fa-plus"></i> Add Monthly Proformance
                            </button>
						</div>
						
						 <!-- The Modal -->
						 <form action="<?php echo base_url(); ?>index.php/Admin/monthlyPerformanceManagement" method="post" id="monthPerformance">
						 <div class="modal" id="addPromotion">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Monthly Proformance Evaluation</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->                                        
										<div class="modal-body">
												<div class="form-group">
                                                    <label>Year</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="promotionYear" id="promotionYear" >
												</div>
												<div class="form-group">
                                                    <label>Month</label>
                                                    <select class="form-control  form-control-sm" name="promotionMonth">
                                                        <option  value="January">January</option>
                                                        <option  value="February">February</option>
														<option  value="March">March</option>
														<option  value="April">April</option>
                                                        <option  value="May">May</option>
														<option  value="June">June</option>
														<option  value="July">July</option>
                                                        <option  value="August">August</option>
														<option  value="September">September</option>
														<option  value="October">October</option>
                                                        <option  value="November">November</option>
                                                        <option  value="December">December</option>
                                                        
                                                    </select>
												</div>
                                                <div class="form-group">
                                                    <label>1st Quarter</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empName" id="empName">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empNo" id="empNo">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empNICNo" id="empNICNo">
												</div>
												<div class="form-group">
                                                    <label></label>
                                                    <select class="form-control  form-control-sm" name="promotionAgree" id="promotionAgree">
                                                        <option  value="Not Now">Not Now</option>
                                                        <option  value="Agree">Agree</option>
                                                        <option  value="Disagree">Disagree</option>
                                                        
                                                    </select>
												</div>
												<div class="form-group">
                                                    <label>Knowledge of work & Application</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="knowledgeOfWork" id="knowledgeOfWork">
                                                </div>
                                                <div class="form-group">
                                                    <label>Achievements of targets</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="achievements" id="achievements">
                                                </div>
                                                <div class="form-group">
                                                    <label>Quality & Accuracy of work</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="quality" id="quality">
                                                </div>
                                                <div class="form-group">
                                                    <label>Cooparation & motivation of the work</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="motivationOfTheWork" id="motivationOfTheWork">
												</div>
												<div class="form-group">
                                                    <label>Relationship with subordiante, peer & supervisors</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="relationship" id="relationship">
                                                </div>
                                                <div class="form-group">
                                                    <label>Attendence & punctuality</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="attendence" id="attendence">
                                                </div>
                                                <div class="form-group">
                                                    <label>Discipline</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="discipline" id="discipline">
                                                </div>
                                                <div class="form-group">
                                                    <label>Team Work</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="teamWork" id="teamWork">
												</div>
												<div class="form-group">
                                                    <label>Adhearance to company rules & regulation</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="adhearance" id="adhearance">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ability to work with minimum supervision</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="abilityToWork" id="abilityToWork">
                                                </div>
                                                
												

                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
											<input type="submit" class="btn btn-danger" name="submit"
                                                    value="Submit">
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
						<div class="table-responsive">
						<div  style="overflow-x :auto; min-width:800px; ">
                            <div class="col-md-12">
                                <br><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NIC No</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Promotion Detailes</th>
											<th scope="col">Date</th>
											<th scope="col">NIC No</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Promotion Detailes</th>
											<th scope="col">Date</th>
											<th scope="col">Date</th>
											<th scope="col">NIC No</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Promotion Detailes</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										
										foreach($monthlyPerfomDataView as $mProfData){
											//var_dump($MonthlyPerfomDataView);
											
											echo'  
												<tr role="row" class="odd">
											
													<td>'.$mProfData->empNo.'</td>
													<td>'.$mProfData->empName.'</td>
													<td>'.$mProfData->empNICNo.'</td>
													<td>'.$mProfData->promotionYear.'</td>
													<td>'.$mProfData->promotionMonth.'</td>
													<td>'.$mProfData->knowledgeOfWork.'</td>
													<td>'.$mProfData->achievements.'</td>
													<td>'.$mProfData->quality.'</td>
													<td>'.$mProfData->motivationOfTheWork.'</td>
													<td>'.$mProfData->relationship.'</td>
													<td>'.$mProfData->attendence.'</td>
													<td>'.$mProfData->discipline.'</td>
													<td>'.$mProfData->teamWork.'</td>
													<td>'.$mProfData->adhearance.'</td>
													<td>'.$mProfData->abilityToWork.'</td>
													<td>'.$mProfData->promotionTotal.'</td>
												
													
												
												</tr>
												
										
													
											';
										}
									
									?>



									
                                    </tbody>
                                   
                                </table>
                            </div>
						</div>
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
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
	</script>




    $(function() {

        $("#example1").DataTable({
			"scrollX" : true
		});
    });

	
<script>
	
		$(document).ready(function () {
			$("#monthPerformance").validate({
				rules: { 
					
					"empName": {
						required:true, 
						number: true,
						
						 
					},
					"empNo": {
						required:true, 
						 
					}, 

					 
				}
			});
		});
</script>


    

</body>

</html>
