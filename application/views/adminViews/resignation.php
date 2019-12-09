<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resignation</title>
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
                            <h1>Employee Resignation</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
                                <li class="breadcrumb-item active">Employee Resignation</li>
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
                        <h3 class="card-title">Employee Resignation</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#Resignation">
                                <i class="fa fa-plus"></i> Add Resignation
                            </button>
                            <!-- The Modal -->
                            <form action="<?php echo base_url(); ?>index.php/Admin/resignationHandler" method="post">
                                <div class="modal" id="Resignation">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Resignation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empName" id="empName">
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Employee No</label>
															<input type="text" class="form-control form-control-sm"
																placeholder="Jhon Doe" name="empNo" id="empNo">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>NIC No</label>
															<input type="text" class="form-control form-control-sm"
																placeholder="Jhon Doe" name="empNICNo" id="empNICNo">
														</div>
													</div>	
												</div>
                                                <div class="form-group">
                                                    <label>Departmant</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="department" id="department">
                                                </div>
                                                <div class="form-group">
                                                    <label>Resignation Detailes</label>
                                                    <textarea class="form-control" rows="3" placeholder="Enter ..."
                                                        name="resignationDetails" id="resignationDetails"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Resignation Data</label>
                                                    <input type="date" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="resignationDate" id="resignationDate">
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
                    </div>
                    <div class="card-body">
                        <!-- row start -->
                        <div class="row">
						<div class="table-responsive">
						<div  style="overflow-x :auto; min-width:800px; ">
                            <div class="col-md-12">
                                <br><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">EMP No</th>
											<th scope="col">Employee Name</th>
											<th scope="col">Emp NIC</th>
                                            <!-- <th scope="col">Department</th> -->
                                            <th scope="col">Resignation Date</th>
											<th scope="col">Resignation Details</th>
											<th scope="col">Approved By</th>
                                          
                                            
                                            
                                        </tr>
                                    </thead>
                                           
                                            <tbody>
												<?php
												foreach($resignationDataView as $resignationData){
													
												//	var_dump($resignationDataView);
													
													echo'  
														<tr role="row" class="odd">
														
															<td>'.$resignationData->empNo.'</td>
															<td>'.$resignationData->empName.'</td>
															<td>'.$resignationData->empNic.'</td>
															<td>'.$resignationData->resigDate.'</td>
															<td>'.$resignationData->resigDetails.'</td>
															<td>Admin</td>
															
														
														</tr>
														 
													';
												}
												?>
                                                
                                                
                                            </tbody>
                                            
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status"
                                            aria-live="polite">
                                            <!-- Showing 1 to 10 of 57 entries</div> -->
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous">
                                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0"
                                                        class="page-link">6</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="example1_next">
                                                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0"
                                                        class="page-link">Next</a>
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
    $(function() {

        $("#example1").DataTable({
			"scrollX" : true
		});
    });
    </script>


</body>

</html>
