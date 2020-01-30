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

                    <!-- db get data------------------------------------------------>


                    <div class="card-body">
                        <div class="row">
                            <?php 
							foreach($userProfileData as $userData){

							echo'
                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                    data-target="" onclick="viewFunction({
										adminId:`'.$userData->adminId.'`,
										empNo:`'.$userData->empNo.'`,
										adminName:`'.$userData->adminName.'`,
										adminEmail:`'.$userData->adminEmail.'`,
										adminAddData:`'.$userData->adminAddData.'`,
										type:`'.$userData->type.'`,
										adminNIC:`'.$userData->adminNIC.'`,})">View User Profile</button>
							</div>
							';
							echo'
                            <div class="col-md-3">
                                <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
								data-target="" onclick="editFunction({
									EditadminId:`'.$userData->adminId.'`,
									EditempNo:`'.$userData->empNo.'`,
									EditadminName:`'.$userData->adminName.'`,
									EditadminEmail:`'.$userData->adminEmail.'`,
									EditadminAddData:`'.$userData->adminAddData.'`,
									Edittype:`'.$userData->type.'`,
									EditadminNIC:`'.$userData->adminNIC.'`,})">Edit User Profile</button>
							</div>
							';
							echo'
                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal"
                                    data-target="#pwchange">Change Password</button>
							</div>
							
							
                            <div class="col-3">

                            </div>
						</div>
						';
					}
					?>
                            <!-- The Modal -->
                            <form id="resignationForm">
                                <div class="modal" id="view">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">User Profile View</h4>
                                                <button type="button" class="close" onclick="closeStopview()"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label>User Name</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" required name="empName"
                                                                id="empName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>User Type</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="userType" id="userType">
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
                                                                placeholder="Jhon Doe" name="email" id="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Add Date</label>
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="userAddDate"
                                                                id="userAddDate">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Modal footer -->

                                            <div class="modal-footer">

                                                <button type="button" onclick="closeStopview()"
                                                    class="close_btn btn btn-default pull-left"
                                                    data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!--  -->

                            <!-- The Modal -->
                            <form id="resignationForm">
                                <div class="modal" id="edituser">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">User Profile Edit</h4>
                                                <button type="button" class="close" onclick="closeStop()"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label>User Name</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" required name="EditempName"
                                                                id="EditempName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>User Type</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="EdituserType"
                                                                id="EdituserType">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Employee No</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="EditempNo" id="EditempNo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>NIC No</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="EditempNICNo"
                                                                id="EditempNICNo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="Editemail" id="Editemail">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Add Date</label>
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="EdituserAddDate"
                                                                id="EdituserAddDate">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Modal footer -->

                                            <div class="modal-footer">

                                                <!-- <input type="submit" class="btn btn-danger" name="submit" value="Save"
                                                id="formSubmit"> -->
                                                <button type="button" id="stopModelAdd" onclick="addStop()"
                                                    class="btn btn-primary" data-dismiss="modal">ADD</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"
                                                    onclick="closeStop()">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- User Password Change -->

                            <!-- The Modal -->
                            <form id="changePassword">
                                <div class="modal" id="pwchange">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">User Password Change</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" required name="currentPasswd"
                                                        id="currentPasswd">
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
                                                                placeholder="Jhon Doe" name="reNewPasswd"
                                                                id="reNewPasswd">
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
        //alert($('#trainingEmpName').val())
        var param2 = {


            currentPasswd: $('#currentPasswd').val(),
            newPasswd: $('#newPasswd').val(),
            reNewPasswd: $('#reNewPasswd').val(),



        }
        console.log(param2);
        $.post("<?php echo base_url(); ?>index.php/Admin/passwordChange", param2, function(
            data1) {

            window.alert(data1)
            var response = JSON.parse(data1);
            window.alert(response)
            if (response.status) {
                Swal.fire(
                    'Your Password Changed!',
                    'You clicked the Ok button and Login again.',
                    'success'
                )

                window.location.href = "userProfile";
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                })
                window.location.href = "trainingDataView";
            }

        });

    })

    // view function-----------------------------------------------------------------------------
    function viewFunction(object) {
        //var type=type;
        // alert(JSON.stringify(object))

        $('#empName').val(object.adminName);
        $('#empNo').val(object.empNo);
        $('#empNICNo').val(object.adminNIC);
        $('#userAddDate').val(object.adminAddData);
        $('#email').val(object.adminEmail);
        $('#empResigId').val(object.adminId);
        $('#userType').val(object.type);


        var modal = document.getElementById('view');



        modal.style.display = "block";


    }
    // modal close button-----------------------------------

    function closeStopview() {
        var modal = document.getElementById('view');

        modal.style.display = "none";

    }

    //------------------edit function------------
    function editFunction(object) {
        //var type=type;
        // alert(JSON.stringify(object))

        $('#EditempName').val(object.EditadminName);
        $('#EditempNo').val(object.EditempNo);
        $('#EditempNICNo').val(object.EditadminNIC);
        $('#EdituserAddDate').val(object.EditadminAddData);
        $('#Editemail').val(object.EditadminEmail);
        $('#EditadminId').val(object.EditadminId);
        $('#EdituserType').val(object.Edittype);


        var modal = document.getElementById('edituser');



        modal.style.display = "block";


    }
    // modal close button-----------------------------------

    function closeStop() {
        var modal = document.getElementById('edituser');

        modal.style.display = "none";

    }
    //------------add button-----------------------------

    function addStop() {

        //alert($('#editempName').val());

        var param = {

            EditempName: $('#EditempName').val(),
            EditempNo: $('#EditempNo').val(),
            EditempNICNo: $('#EditempNICNo').val(),
            Editemail: $('#Editemail').val(),
            EdituserAddDate: $('#EdituserAddDate').val(),
            EdituserType: $('#EdituserType').val(),

        }
        //window.alert(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/admindataEdit", param, function(
            data) {

            window.alert(data);
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes");

                window.location.href = "userProfileData";
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
    </script>
</body>

</html>
