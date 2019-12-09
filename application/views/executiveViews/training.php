<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('executiveViews/components/css'); ?>

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
       
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
                            <h1>Training Management</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/HrExecutive">Home</a></li>
                                <li class="breadcrumb-item active">Training Management</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Training And Development</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#training">
                                    <i class="fa fa-plus"></i> Add Training
                                </button>
                            </div>
                            <!-- The Modal -->
                            <form action="<?php echo base_url(); ?>index.php/HrExecutive/monthlyPerformanceManagement" method="post">
                                <div class="modal fade" id="training">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Training </h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingEmpName" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Emp No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingEmpNo" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingEmpNIC" placeholder="Jhon Doe">
                                                </div>

                                                <div class="form-group">
                                                    <label>Course/Programe Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingProgrameName" placeholder="Jhon Doe">
                                                </div>

                                                <div class="form-group">
                                                    <label>Course Content</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="courseContent" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Institute/Venue</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingVenue" placeholder="Jhon Doe">
                                                </div>

                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" class="form-control form-control-sm"
                                                        name="trainingDate" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Duration</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingDuration" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Course/Programe Fee(Rs)</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="courseFee" placeholder="Jhon Doe">
                                                </div>



                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-danger" name="submit"
                                                    value="Submit">
                                                <button type="button" class="btn btn-secondary"
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
							<br>
                            <!-- row start -->
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">

                                    <div class="row">
                                        <div class="col-sm-12">
										<div class="table-responsive">
										<div  style="overflow-x :auto; min-width:800px; ">
                                            <table id="example1" class="table table-bordered table-striped dataTable"
                                                role="grid" aria-describedby="example1_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Rendering engine: activate to sort column ascending"
                                                            style="width: 166px;">EMP No
                                                        </th>
                                                        <th scope="col" class="sorting_asc" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Browser: activate to sort column descending"
                                                            aria-sort="ascending" style="width: 215px;">Employee Name
                                                        </th>
                                                        <th scope="col" class="sorting_asc" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Browser: activate to sort column descending"
                                                            aria-sort="ascending" style="width: 215px;">Emp NIC No
                                                        </th>
                                                        <th scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Platform(s): activate to sort column ascending"
                                                            style="width: 190px;">Department
                                                        </th>
                                                        <th scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending"
                                                            style="width: 100px;">Programe Name
                                                        </th>
                                                        <th scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Engine version: activate to sort column ascending"
                                                            style="width: 141px;">Instute/Venue
                                                        </th>
                                                        <th  scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending"
                                                            style="width: 100px;">Date
                                                        </th>

                                                        <th scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending"
                                                            style="width: 100px;">Course Content
                                                        </th>
                                                        <th scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending"
                                                            style="width: 100px;">Course Duration
                                                        </th>
                                                        <th scope="col" class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending"
                                                            style="width: 100px;">Course Fee(Rs)
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
												
													foreach($trainingDataView as $trainingData){
														//var_dump($trainingDataView);
														
														echo'  
															<tr role="row" class="odd">
																<th scope="row"></th>
																<td>'.$trainingData->empNo.'</td>
																<td>'.$trainingData->empName.'</td>
																<td>'.$trainingData->empNicNo.'</td>
																<td>'.$trainingData->departmentId.'</td>
																<td>'.$trainingData->programmeName.'</td>
																<td>'.$trainingData->venue.'</td>
																<td>'.$trainingData->date.'</td>
																<td>'.$trainingData->courseContent.'</td>
																<td>'.$trainingData->courseDuration.'</td>
																<td>'.$trainingData->CourseFee.'</td>
																
															
															</tr>
															
													
                                                   			
														';
													}
												
												?>




                                                </tbody>
                                                <!-- <tfoot>
                                                    <tr>
														<th rowspan="1" colspan="1">Emp No</th>
                                                        <th rowspan="1" colspan="1">Employee Name</th>
                                                        <th rowspan="1" colspan="1">Department</th>
                                                        <th rowspan="1" colspan="1">Instute/Venue</th>
                                                        <th rowspan="1" colspan="1">Date</th>
                                                        <th rowspan="1" colspan="1">Course Content</th>
                                                        <th rowspan="1" colspan="1">Course Duration</th>
                                                        <th rowspan="1" colspan="1">Course Fee(Rs)</th>
                                                    </tr>
                                                </tfoot> -->
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
                                </div>
                                <!-- row end -->





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
