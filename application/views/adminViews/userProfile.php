<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Profile Manage</title>
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
                            <h1>User Profile Manage Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile Page</li>
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
                        <h3 class="card-title">User Profile Management</h3>

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
                        <div class="row">
                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                    data-target="#view">View User Profile</button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                    data-target="#edit">Edit User Profile</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                    data-target="#pwchange">Change Password</button>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>


                        <!-- The Modal -->
                        <form id="resignationForm">
                            <div class="modal" id="view">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">User Profile View</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" required name="empName" id="empName">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>User Type</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNo" id="empNo">
                                                    </div>
                                                </div>

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
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNo" id="empNo">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Add Date</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNICNo" id="empNICNo">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Modal footer -->

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--  -->

                        <!-- The Modal -->
                        <form id="resignationForm">
                            <div class="modal" id="edit">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">User Profile Edit</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" required name="empName" id="empName">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>User Type</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNo" id="empNo">
                                                    </div>
                                                </div>

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
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNo" id="empNo">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Add Date</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNICNo" id="empNICNo">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Modal footer -->

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-danger" name="submit" value="Save"
                                                id="formSubmit">

                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--  -->

                        <!-- The Modal -->
                        <form id="changePassword">
                            <div class="modal" id="pwchange">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">User Password Change</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Emp No</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" required name="userEmpNo" id="userEmpNo">
                                            </div>
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" required name="currentPasswd" id="currentPasswd">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="newPasswd" id="newPasswd">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Re Type Password</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="reNewPasswd" id="reNewPasswd">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Modal footer -->

                                        <div class="modal-footer">

                                            <input type="button" class="btn btn-danger" name="submit" value="Change"
                                                id="changePasswordBtn">

                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
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
    $('#changePasswordBtn').click(function() {
        //alert($('#evaluationYear').val())

        var param = {

            userEmpNo: $('#userEmpNo').val(),
            currentPasswd: $('#currentPasswd').val(),
            newPasswd: $('#newPasswd').val(),
            reNewPasswd: $('#reNewPasswd').val(),
            



        }
        if (param.userEmpNo !== '') {
            $.post("<?php echo base_url(); ?>index.php/Admin/resignationHandler", param, function(
                data) {

                console.log(data)
                var response = JSON.parse(data);
                console.log(response)
                if (response.status) {
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    )

                    window.location.href = "resignationDataView";
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: '<a href>Why do I have this issue?</a>'
                    })

                }

            });
        }
        console.log(param);


    })
    </script>
</body>

</html>