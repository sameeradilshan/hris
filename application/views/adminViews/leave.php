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
                            <h1>Leaves Management</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee Leaves Management </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#leave">
                                <i class="fa fa-plus"></i> Add Leaves
                            </button>
                            <!-- The Modal -->
                            <form action="<?php echo base_url(); ?>index.php/Admin/leaveRequestManagement"
                                method="post">
                                <div class="modal" id="leave">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Employee Leaves</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="leaveEmpName">
                                                </div>
                                                <div class="form-group">
                                                    <label>Employee No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="leaveEmpNo">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="leaveEmpNICNo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Departmant</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="leaveEmpDeprtment">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Range</label>
                                                    <input type="date" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="leaveDate">
                                                </div>
                                                <div class="form-group">
                                                    <label>Leave Type</label>
                                                    <select class="form-control  form-control-sm" name="leaveType">
                                                        <option  value="Annual">Annual</option>
                                                        <option  value="Casual">Casual</option>
                                                        <option  value="Matenityr">Matenityr</option>
                                                        <option  value="Stduy">Stduy</option>
                                                        <option  value="Lieu">Lieu</option>
                                                        <option  value="Medical">Medical</option>
                                                        <option  value="Short">Short</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Reason</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="leaveReason">
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
                        <div class="row" style="background-color:#efefef; padding:20px;   border-radius: 25px;">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Employee Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIC</label>
                                    <input type="text" class="form-control  form-control-sm" placeholder="Jhon Doe">
                                </div>
                            </div>
                            <div class="col-md-2">
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
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Leave Type</label>
                                    <select class="form-control  form-control-sm">
                                        <option>Annual</option>
                                        <option>Casual</option>
                                        <option>Matenityr</option>
                                        <option>Stduy</option>
                                        <option>Lieu</option>
                                        <option>Medical</option>
                                        <option>Short</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Leave Status</label>
                                    <select class="form-control  form-control-sm">
                                        <option>New</option>
                                        <option>Pending</option>
                                        <option>Approved</option>
                                        <option>Declined</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-2">
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
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
											<thead>
                                                <tr>
                                                    <th scope="col">Emp No</th>
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Leave Type</th>
                                                    <th scope="col">Date From</th>
                                                    <th scope="col">Date To</th>
                                                    <th scope="col">No Of Date</th>
                                                    <th scope="col">Reason</th>
                                                    <th scope="col">Approved By</th>
                                                    <th scope="col">Action</th>
                                                   
                                            </thead>
                                            <tbody>
											<?php
										
										foreach($leaveDataView as $leaveData){
										//var_dump($leaveDataView);
											
											echo'  
											<tr role="row" class="odd">
										
											<td>'.$leaveData->empNo.'</td>
											<td>'.$leaveData->empName.'</td>
											<td>'.$leaveData->department.'</td>
											<td>'.$leaveData->leaveType.'</td>
											<td>'.$leaveData->date.'</td>
											<td>'.$leaveData->noOfDate.'</td>												
											<td>'.$leaveData->leaveStatus.'</td>
											<td>'.$leaveData->action.' </td>
											<td>sameera </td>
											<td> <div class="btn-group">
											<button type="button" class="btn btn-info">Approve</button>
											<button type="button" class="btn btn-danger">Decline</button>
										
										  	</div>
											
											</td>
											
											
										</tr>
																																				
													
											';
										}
											
											?>

                                              
                                            </tbody>
                                           
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status"
                                            aria-live="polite">
                                            <!-- Showing 1 to 10 of 57 entries --></div> 
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

        $("#example1").DataTable();
    });
    </script>

</body>

</html>
