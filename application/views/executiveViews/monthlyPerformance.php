<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Promotion</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('executiveViews/components/css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('executiveViews/components/topBar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('executiveViews/components/sideBar'); ?>






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
						 <form action="<?php echo base_url(); ?>index.php/HrExecutive/monthlyPerformanceManagement" method="post">
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
                                                        placeholder="Jhon Doe" name="promotionYear">
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
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empName">
                                                </div>
                                                <div class="form-group">
                                                    <label>Employee No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empNo">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empNICNo">
												</div>
												<div class="form-group">
                                                    <label></label>
                                                    <select class="form-control  form-control-sm" name="promotionAgree">
                                                        <option  value="Not Now">Not Now</option>
                                                        <option  value="Agree">Agree</option>
                                                        <option  value="Disagree">Disagree</option>
                                                        
                                                    </select>
												</div>
												<div class="form-group">
                                                    <label>Knowledge of work & Application</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="knowledgeOfWork">
                                                </div>
                                                <div class="form-group">
                                                    <label>Achievements of targets</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="achievements">
                                                </div>
                                                <div class="form-group">
                                                    <label>Quality & Accuracy of work</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="quality">
                                                </div>
                                                <div class="form-group">
                                                    <label>Cooparation & motivation of the work</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="motivationOfTheWork">
												</div>
												<div class="form-group">
                                                    <label>Relationship with subordiante, peer & supervisors</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="relationship">
                                                </div>
                                                <div class="form-group">
                                                    <label>Attendence & punctuality</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="attendence">
                                                </div>
                                                <div class="form-group">
                                                    <label>Discipline</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="discipline">
                                                </div>
                                                <div class="form-group">
                                                    <label>Team Work</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="teamWork">
												</div>
												<div class="form-group">
                                                    <label>Adhearance to company rules & regulation</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="adhearance">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ability to work with minimum supervision</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="abilityToWork">
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
                        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">

                                    <div class="row">
										<div class="table-responsive">
                                        <div class="col-md-12" style="overflow-x:auto; min-width:1000px; ">
                                            <table id="example1" class="table table-bordered table-striped dataTable"
                                                role="grid" aria-describedby="example1_info">
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
												<th scope="row"></th>
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
                                    <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </tfoot>
									</table>
                                        </div>
									</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="example1_info" role="status"
                                                aria-live="polite">
                                                Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="example1_previous">
                                                        <a href="#" aria-controls="example1" data-dt-idx="0"
                                                            tabindex="0" class="page-link">Previous</a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="example1" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="2"
                                                            tabindex="0" class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="3"
                                                            tabindex="0" class="page-link">3</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="4"
                                                            tabindex="0" class="page-link">4</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="5"
                                                            tabindex="0" class="page-link">5</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="6"
                                                            tabindex="0" class="page-link">6</a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="example1_next">
                                                        <a href="#" aria-controls="example1" data-dt-idx="7"
                                                            tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
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








        <?php $this->load->view('executiveViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('executiveViews/components/js'); ?>
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
