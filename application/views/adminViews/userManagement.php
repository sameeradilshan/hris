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
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
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
							<form action="<?php echo base_url(); ?>index.php/Admin/UserManagementHandler" method="post">
                            <div class="modal" id="addNewUser">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New User</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text" class="form-control form-control-sm" name="userName" id="userName"
                                                    placeholder="Jhon Doe">
											</div>
											<div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control form-control-sm" name="userEmail" id="userEmail"
                                                    placeholder="Jhon Doe">
                                            </div>
                                            <div class="form-group">
                                                <label>NIC No</label>
                                                <input type="text" class="form-control form-control-sm" name="userNIC" id="userNIC"
                                                    placeholder="Jhon Doe">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Emp No</label>
                                                <input type="text" class="form-control form-control-sm" name="empId" id="empId"
                                                    placeholder="Jhon Doe">
											</div>
											

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <select class="form-control  form-control-sm" name="userType" id="userType">
                                                        <option>Admin</option>
                                                        <option>Executive</option>
                                                        <option>Staff</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Add Date</label>
                                                <input type="date" class="form-control form-control-sm" name="userAddDate" id="userAddDate"
                                                    placeholder="Jhon Doe">
                                            </div>

                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
										<button type="submit" class="btn btn-primary"
                                                >Submit</button>
                                           
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
                                <label>Type</label>
                                <select class="form-control  form-control-sm">
                                    <option>Admin</option>
                                    <option>Executive</option>
                                    <option>Staff</option>

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

                    <div class="row">
                        <div class="col-md-12">
                            <br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NIC No</th>
                                        <th>Employee Name</th>
                                        <th>Type</th>
                                        <th>Date</th>

                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td>963240V</td>
                                        <td>amail
                                        </td>
                                        <td>Admin</td>
                                        <td> 4/2/2019</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>123458V</td>
                                        <td>saman
                                        </td>
                                        <td>Staff</td>
                                        <td>5/2/2019</td>
                                       
                                    </tr>
                                    <tr>
                                    <td>1234668V</td>
                                        <td>kasun
                                        </td>
                                        <td>Execuitive</td>
                                        <td>5/2/2019</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td>-</td>
                                      
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
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

</body>

</html>
