<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('adminViews/components/css'); ?>

    <!-- form validation css -->
    <style type="text/css">
    .true_input {
        visibility: hidden;
    }

    .error {
        color: red;
        font-size: 12px;
    }
    </style>

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
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Leaves</li>
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
                            <?php echo validation_errors(); ?>
                            <form id="leaveform">
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
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Employee No</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" id="leaveEmpNo"
                                                                name="leaveEmpNo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>NIC No</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" id="leaveEmpNICNo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" id="leaveEmpName" name="leaveEmpName">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Departmant</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" id="leaveEmpDeprtment">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Leave Type</label>
                                                            <select class="form-control  form-control-sm"
                                                                id="leaveType">
                                                                <option value="Annual">Annual</option>
                                                                <option value="Casual">Casual</option>
                                                                <option value="Matenityr">Matenityr</option>
                                                                <option value="Stduy">Stduy</option>
                                                                <option value="Lieu">Lieu</option>
                                                                <option value="Medical">Medical</option>
                                                                <option value="Short">Short</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Date form</label>
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" id="leaveDateForm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Date To</label>
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" id="leaveDateTo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>No of Date </label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" id="leaveDate">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Reason</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" id="leaveReason">
                                                </div>




                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-danger" id="formSubmit"
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


                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" target="_blank"
                                        onclick="window.open('approvedLeaveDatalView')">
                                        <i class="fa fa-check-circle-o"></i> Approved Leave
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#DeclineLeave"
                                        onclick="window.open('declineLeaveDatalView')">
                                        <i class="fa fa-minus-circle"></i> Decline Leave
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AllLeaves"
                                        onclick="window.open('reportLeaveDatalView')">
                                        <i class="fa fa-search"></i> All Leaves
                                    </button>
                                </div>
                            </div>

                        </div>


                        <!-- row end -->
                        <br>


                        <!-- row start -->
                    </div>
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

    <!-- edit leave data----------------------------------------------------------------------->
    <!-- Modal -->
    <div id="editModal" class="modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Resignation Edit</h4>
                    <button type="button" onclick="closeStop()" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body" style="min-height:400px;">
                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Employee Name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" required
                                id="editleaveEmpName" name="leaveEmpName">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employee No</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        required id="editleaveEmpNo" name="leaveEmpNo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIC No</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        id="editleaveEmpNICNo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Departmant</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        id="editleaveEmpDeprtment">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Leave Type</label>
                                    <select class="form-control  form-control-sm" id="editleaveType">
                                        <option value="Annual">Annual</option>
                                        <option value="Casual">Casual</option>
                                        <option value="Matenityr">Matenityr</option>
                                        <option value="Stduy">Stduy</option>
                                        <option value="Lieu">Lieu</option>
                                        <option value="Medical">Medical</option>
                                        <option value="Short">Short</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date form</label>
                                    <input type="date" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        id="editleaveDateForm">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date To</label>
                                    <input type="date" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        id="editleaveDateTo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No of Date </label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                        id="editleaveDate">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Reason</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                id="editleaveReason">
                        </div>
                        <div class="form-group">

                            <input type="hidden" class="form-control form-control-sm" placeholder="Jhon Doe"
                                id="leaveId">
                        </div>



                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" onclick="closeStop()" class="close_btn btn btn-default pull-left"
                        data-dismiss="modal">Close</button>
                    <button type="button" id="stopModelAdd" onclick="addStop()" class="btn btn-primary"
                        data-dismiss="modal">ADD</button>
                </div>
            </div>
        </div>
    </div>








    <?php $this->load->view('adminViews/components/footer'); ?>

    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('adminViews/components/js'); ?>



    <script>
    // alert($('#leaveEmpName').val());
    $(document).ready(function() {
        $("#leaveform").validate({
            rules: {

                "leaveEmpName": {
                    required: true,
                },
                "leaveEmpNo": {
                    required: true,
                }

            }
        });
    });
    </script>

    <!-- pdf ganaration -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js "></script>

    <script>
    $(function() {

        $("#example1").DataTable({
            "scrollX": true,
            scrollCollapse: true,

            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    //--------------------------form data fill---------
    $('#leaveEmpNICNo').click(function() {
        //alert($('#empNo').val())
        var param = {
            empNo: $('#leaveEmpNo').val(),
        }
        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/EmpformData", param, function(
            data) {
            var response = JSON.parse(data);
            response = response.result[0];

            console.log(response.nameInitials);
            $('#leaveEmpName').val(response.nameInitials);
            $('#leaveEmpDeprtment').val(response.department);
            $('#leaveEmpNICNo').val(response.empNic);
            alert(result);


            //bageta wada?

        });



    });

    // form submission----------------------------------
    $('#formSubmit').click(function() {

        // alert($('#leaveEmpName').val());
        var param = {

            leaveEmpName: $('#leaveEmpName').val(),
            leaveEmpNo: $('#leaveEmpNo').val(),
            leaveEmpNICNo: $('#leaveEmpNICNo').val(),
            leaveEmpDeprtment: $('#leaveEmpDeprtment').val(),
            leaveDateForm: $('#leaveDateForm').val(),
            leaveType: $('#leaveType').val(),
            leaveDateTo: $('#leaveDateTo').val(),
            leaveDate: $('#leaveDate').val(),
            leaveReason: $('#leaveReason').val(),



        }
        // alert(JSON.stringify(param));

        if (param.leaveEmpName !== '' && param.leaveEmpNo !== '') {
            console.log(param);
            $.post("<?php echo base_url(); ?>index.php/Admin/leaveRequestManagement", param, function(
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

                    window.location.href = "leaveDataView";
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
    })


    //---------------------------------Approval Function----------------------------------------------------------------------

    function approvalFunction(leaveId) {
        params = {
            leaveId: leaveId,
            leaveStatus: 1
        }
        $.post("<?php echo base_url(); ?>index.php/Admin/updateLeave", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes")

                window.location.href = "leaveDataView";
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

    // rejection function-----------------------------------------------------------------------------------------

    function rejectFucntion(leaveId) {
        params = {
            leaveId: leaveId,
            leaveStatus: 2
        }
        $.post("<?php echo base_url(); ?>index.php/Admin/updateLeave", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes")

                window.location.href = "leaveDataView";
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

    //-------------------edit functions-----------------------------------------

    function editFunction(object) {
        //var type=type;
        alert(JSON.stringify(object))

        $('#leaveId').val(object.leaveId);
        $('#editleaveEmpNo').val(object.empNo);
        $('#editleaveEmpName').val(object.empName);
        $('#editleaveEmpDeprtment').val(object.department);
        $('#editleaveDateForm').val(object.dateFrom);
        $('#editleaveDateTo').val(object.dateTo);
        $('#editleaveDate').val(object.noOfDate);
        $('#editleaveReason').val(object.reason);
        $('#editleaveType').val(object.leaveType);
        $('#editleaveEmpNICNo').val(object.leaveEmpNICNo);



        var modal = document.getElementById('editModal');

        modal.style.display = "block";


    }

    // modal close button-----------------------------------

    function closeStop() {
        var modal = document.getElementById('editModal');

        modal.style.display = "none";

    }
    //------------add button-----------------------------

    function addStop() {

        alert($('#editleaveEmpNo').val());

        var param = {

            leaveId: $('#leaveId').val(),
            leaveEmpNo: $('#editleaveEmpNo').val(),
            leaveEmpName: $('#editleaveEmpName').val(),
            leaveEmpDeprtment: $('#editleaveEmpDeprtment').val(),
            leaveDateForm: $('#editleaveDateForm').val(),
            leaveDateTo: $('#editleaveDateTo').val(),
            leaveDate: $('#editleaveDate').val(),
            leaveReason: $('#editleaveReason').val(),
            leaveType: $('#editleaveType').val(),
            leaveEmpNICNo: $('#editleaveEmpNICNo').val(),

        }
        window.alert(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/leaveUpdate", param, function(
            data) {

            console.log(data);
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("successssss");

                window.location.href = "leaveDataView";
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
