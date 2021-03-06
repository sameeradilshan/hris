<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('userViews/components/css'); ?>
	
	<style type="text/css">
    .true_input {
        visibility: hidden;
    }

    .error {
        color: red;
        font-size: 12px;
    }

    #editModal {
        max-height: 100%;
        overflow-y: auto;
    }
    </style>

</head>


<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('userViews/components/sideBar'); ?>






        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Departmanet</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Departmanet</li>
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
                        <h3 class="card-title">Departments & Detailes</h3>

                        <div class="card-tools">
                            <div class="row">
                                <!-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#addDepartments" disabled>
                                    <i class="fa fa-plus"></i> Add Departments -->
                                </button>
                                <!-- The Modal -->
                                <form id="departmentform">
                                    <div class="modal" id="addDepartments">
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
                                                        <label>Department Name</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="departmentName" id="departmentName"
                                                            placeholder="Jhon Doe">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Department Id</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="departmentId" id="departmentId"
                                                            placeholder="Jhon Doe">
                                                    </div>


                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-info" name="submit"
                                                        value="Submit" id="formSubmit">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>


<!-- 
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#addDesignations" disabled> -->
                                    <i class="fa fa-plus"></i> 
                                </button>
                                <!-- The Modal -->
                                <form id="designation">
                                    <div class="modal" id="addDesignations">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add New Employee Designation</h4>
                                                    <!-- <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button> -->
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Department Name</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="departmentName" id="departmentName1"
                                                            placeholder="Jhon Doe">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Designation Name</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="designationName" id="designationName"
                                                            placeholder="Jhon Doe">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Designation No</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="designationId" id="designationNo"
                                                            placeholder="Jhon Doe">
                                                    </div>


                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" name="submit"
                                                        value="Submit" id="formSubmit2">
                                                    <button type="button" class="btn btn-danger"
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

                        <!-- row start -->
                        <div class="row" style="background-color:#efefef; padding:20px;   border-radius: 25px;">


                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#departmentReport">
                                        <i class="fa fa-check-circle-o"></i> Departmental Employee
                                    </button>
                                </div>
                            </div>

                            <!-- <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#DeclineLeave" onclick="window.open('reportDeptEmpDataView')" onclick="window.open('desgnationEmpDatalView')">
                                        <i class="fa fa-minus-circle"></i> Designation Employee
                                    </button>
                                </div>
							</div> -->

                            <!-- <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AllLeaves" onclick="window.open('reportLeaveDatalView')">
                                        <i class="fa fa-search"></i> Employee Designation & Dept 
                                    </button>
                                </div>
                            </div> -->

                        </div>
                        <!-- row end -->
                        <br>
                        <!-- row start -->
                        <div class="row">
                            <div class="table-responsive">
                                <div style="overflow-x :auto; min-width:800px; ">
                                    <div class="col-md-12">
                                        <br><br>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Dept ID</th>
                                                    <th scope="col">Department Name</th>
                                                    <th scope="col">Designation(s)</th>
                                                    <th scope="col">Designation No</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
												foreach($departmentDataView as $departmentData){
													
													//svar_dump($resignationDataView);
													
													echo'  
														<tr role="row" class="odd">
														
															<td>'.$departmentData->deptId.'</td>
															<td>'.$departmentData->departmentName.'</td>
															<td>'.$departmentData->designationName.'</td>
															<td>'.$departmentData->designationNo.'</td>
															
															
														</tr>
														
												
														   
													';
												}
												?>


                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="example1_previous">
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

        <!-- ---------------------------------------------------------------------- -->
        <!-- The Modal  Department details -->
        <form id="bankReportForm" action="<?php echo base_url(); ?>index.php/HrUser/reportDeptEmpDataView" method="post">
            <div class="modal" id="departmentReport">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Employee Department Details</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control  form-control-sm" name="Department" id="Department">
                                        <option value="All">All</option>
                                        <option value="humanResource">Human Resource</option>
                                        <option value="Operation">Operation</option>
                                        <option value="Finance">Finance</option>
                                        <option value="HrUser">HrUser</option>
                                        <option value="Production">Production</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="QualityAssurance">Quality Assurance</option>


                                    </select>
                                </div>
                            </div>
                            
                                <div class="radio">
                                    <label>Select the Type</label>

									<div class="row">
                                    <div class="col-4">
                                        <input type="radio" name="type" id="type" value="Permanent">Permanent
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" name="type" id="type" value="Contract">Contract
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" name="type" id="type" value="Training">Training
                                    </div>
                                </div>



                            </div>

                        </div>

                        <!-- Modal footer -->

                        <div class="modal-footer">

                            <input type="submit" class="btn btn-danger" name="submit" value="Generate" id="formSubmit"
                               >

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

        <!-- ---------------------------------------- -->
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








    <?php $this->load->view('userViews/components/footer'); ?>

    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

	<?php $this->load->view('userViews/components/js'); ?>
	
    <script>
    $(document).ready(function() {
        $("#departmentform").validate({
            rules: {

                "departmentName": {
                    required: true,
                },
                "departmentId": {
                    required: true,
                }

            }
        });
		$("#designation").validate({
            rules: {

                "departmentName1": {
                    required: true,
                },
                "designationName": {
                    required: true,
                },
				"designationNo": {
                    required: true,
                }

            }
        });
    });
    </script>

    <script>
    $(function() {

        $("#example1").DataTable({
                "scrollX": true
            }

        );
    });

    $('#formSubmit').click(function() {
        //alert($('#evaluationYear').val())
        var param1 = {


            departmentName: $('#departmentName').val(),
            departmentId: $('#departmentId').val(),


        }

        console.log(param1);
		if (param.departmentName !== '' && param.departmentId !== '') {
        $.post("<?php echo base_url(); ?>index.php/HrUser/departmentManagement", param1, function(
            data1) {

            //window.alert(data1)
            var response = JSON.parse(data1);
            console.log(response)

            if (response.status) {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )

                window.location.href = "departmentDataView";
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

    //designation--------------------------------------------------------------------------

    $('#formSubmit2').click(function() {
        //alert($('#departmentName1').val())
        var param2 = {


            departmentName: $('#departmentName1').val(),
            designationName: $('#designationName').val(),
            designationNo: $('#designationNo').val(),


        }

        console.log(param2);
		if (param2.departmentName !== '' && param2.designationName !== ''&& param2.designationNo !== '') {
        $.post("<?php echo base_url(); ?>index.php/HrUser/designationManagement", param2, function(
            data2) {

			console.log(data2)
            var response = JSON.parse(data2);
            console.log(response)

            if (response.status) {
                alert("success")
                // Swal.fire(
                // 'Good job!',
                // 'You clicked the button!',
                // 'success'
                // 			)

                window.location.href = "departmentDataView";
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
    </script>

</body>

</html>
