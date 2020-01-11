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
                            <h1>User Management</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a>
                                </li>
                                <li class="breadcrumb-item active">User Managenent</li>
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
                        <h3 class="card-title">User Management</h3>

                        <!-- Modal Button -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addNewUser">
                                <i class="fa fa-plus"></i> Add New User
                            </button>
                            <!-- The Modal -->
                            <form >
                                <div class="modal" id="addNewUser">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New User</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="userName" id="userName" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="userEmail" id="userEmail" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="userNIC" id="userNIC" placeholder="Jhon Doe">
                                                </div>

                                                <div class="form-group">
                                                    <label>Emp No</label>
                                                    <input type="text" class="form-control form-control-sm" name="empId"
                                                        id="empId" placeholder="Jhon Doe">
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Type</label>
                                                        <select class="form-control  form-control-sm" name="userType"
                                                            id="userType">
                                                            <option>Admin</option>
                                                            <option>Executive</option>
                                                            <option>Staff</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Add Date</label>
                                                    <input type="date" class="form-control form-control-sm"
                                                        name="userAddDate" id="userAddDate" placeholder="Jhon Doe">
                                                </div>

                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    id="formSubmit">Submit</button>

                                                <button type="" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="card-body">


				<div class="row" style="background-color:#efefef; padding:20px;   border-radius: 25px;">
                            
                               
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" target="_blank" onclick="window.open('approvedLeaveDatalView')">
                                        <i class="fa fa-check-circle-o"></i> Approved Leave
                                    </button>
                                </div>
							</div>
							      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#DeclineLeave" onclick="window.open('declineLeaveDatalView')">
                                        <i class="fa fa-minus-circle"></i> Decline Leave
                                    </button>
                                </div>
							</div>
							      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AllLeaves" onclick="window.open('reportLeaveDatalView')">
                                        <i class="fa fa-search"></i> All Leaves
                                    </button>
                                </div>
                            </div>
						
					</div>

                    <div class="card-body">
                        <!-- row start -->
                        <div class="row">
                            <div class="table-responsive">
                                <div style="overflow-x :auto; min-width:800px; ">
                                    <div class="col-md-12">
                                        <br><br>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">EMP No</th>
                                                    <th scope="col">NIC No</th>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">User Type</th>
                                                    <th scope="col">Add Date</th>




                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
												foreach($userManagementDataView as $usermanageData){
													
													//var_dump($resignationDataView);
													
													echo'  
														<tr role="row" class="odd">
														
															<td>'.$usermanageData->empNo.'</td>
															<td>'.$usermanageData->empName.'</td>
															<td>'.$usermanageData->empNic.'</td>
															<td>'.$usermanageData->resigDate.'</td>
															<td>'.$usermanageData->resigDetails.'</td>
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
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
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
                            <!-- /.card-body -->
                            <div class="card-footer">

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
    //-------------------------data Table----------------------------------------------------
    $(function() {

        $("#example1").DataTable({
            "scrollX": true
        });
    });
</script>
    //-----------------------form Handling --------------------------------------------------
<script>
    $('#formSubmit').click(function() {
                //alert($('#evaluationYear').val())
                var param = {

                    userName: $('#userName').val(),
                    userEmail: $('#userEmail').val(),
                    userNIC: $('#userNIC').val(),
                    empId: $('#empId').val(),
                    userType: $('#userType').val(),
                    userAddDate: $('#userAddDate').val(), 



                }
                console.log(param);
                $.post("<?php echo base_url(); ?>index.php/Admin/UserManagementHandler", param, function(
                            data1) {

				console.log(data1)
				var response = JSON.parse(data1);
				window.alert(response)

             if (response.status) {
				alert("succes");

				window.location.href = "userManagementDataView";
             } else {
					alert("fail");

         }
							
        });
	
    })

             
    </script>
</body>

</html>
