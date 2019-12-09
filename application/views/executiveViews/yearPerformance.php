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
                        <h3 class="card-title">Yearly Proformance Evaluation</h3>

                        <div class="card-tools">
						<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addPromotion">
                                <i class="fa fa-plus"></i> Add Yearly Proformance
                            </button>
						</div>
						
						 <!-- The Modal -->
						 <form action="<?php echo base_url(); ?>index.php/Admin/yearPerformanceManagement"
                                method="post">
						 <div class="modal" id="addPromotion">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Yearly Proformance Evaluation</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->                                        
										<div class="modal-body">
												<div class="form-group">
                                                    <label>Year</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="evaluationYear">
												</div>
												
                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="ymEmpName">
                                                </div>
                                                <div class="form-group">
                                                    <label>Employee No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="yEempNo">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="yEempNicNo">
												</div>
												<div class="form-group">
                                                    <label></label>
                                                    <select class="form-control  form-control-sm" name="evaluationAgree">
                                                        <option  value="Not Now">Not Now</option>
                                                        <option  value="Agree">Agree</option>
                                                        <option  value="Disagree">Disagree</option>
                                                        
                                                    </select>
												</div>
												<div class="form-group">
                                                    <label>1st Quarter</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="term1">
                                                </div>
                                                <div class="form-group">
                                                    <label>2nd Quarter</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="term2">
                                                </div>
                                                <div class="form-group">
                                                    <label>3rd Quarter</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="term3">
                                                </div>
                                                <div class="form-group">
                                                    <label>Grand Total</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="yearTotal">
												</div>
												<div class="form-group">
                                                    <label>Approve</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="approve">
                                                </div>
												<div class="form-group">
                                                    <label>Approved By</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="evaApprovedBy">
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
                            <div class="col-md-12">
                                <br><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Emp No</th>
                                            <th>Employee Name</th>
                                            <th>Department</th>
											<th>1st Quarter</th>
											<th>2nd Quarter</th>
											<th>3rd Quarter</th>
											<th>Grand Total</th>
											<th>Total Presantage</th>
											<th>Overall Evaluation</th>
											<th>Approval</th>
											<th>Approved By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										
										foreach($yearPerformanceDataView as $yearEvaData){
											var_dump($yearPerfomDataView);
											
											echo'  
																																										
												<tr role="row" class="odd">
													<th scope="row"></th>	
													<td>'.$yearEvaData->empNo.'</td>
													<td>'.$yearEvaData->empName	.'</td>
													<td>'.$yearEvaData->empNicNo.'</td>
													<td>'.$yearEvaData->term1.'</td>
													<td>'.$yearEvaData->term2.'</td>
													<td>'.$yearEvaData->term3.'</td>
													<td>'.$yearEvaData->yearTotal.'</td>												
													<td>'.$yearEvaData->yearTotalPresantage.'</td>
													<td>'.$yearEvaData->overAllEvaluation.'</td>
													<td>'.$yearEvaData->approvedBy.'</td>
													
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
    <script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
    </script>

</body>

</html>
