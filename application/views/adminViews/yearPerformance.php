<!DOCTYPE html>


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
                            <h1>Year Proformance Evaluation</h1>
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
                        <form>
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
                                                    placeholder="Jhon Doe" name="evaluationYear" id="evaluationYear">
                                            </div>

                                            <div class="form-group">
                                                <label>Employee Name</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="ymEmpName" id="ymEmpName">
                                            </div>
                                            <div class="form-group">
                                                <label>Employee No</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="yEempNo" id="yEempNo">
                                            </div>
                                            <div class="form-group">
                                                <label>NIC No</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="yEempNicNo" id="yEempNicNo">
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <select class="form-control  form-control-sm" name="evaluationAgree"
                                                    id="evaluationAgree">
                                                    <option value="Not Now">Not Now</option>
                                                    <option value="Agree">Agree</option>
                                                    <option value="Disagree">Disagree</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>1st Quarter</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="term1" id="term1">
                                            </div>
                                            <div class="form-group">
                                                <label>2nd Quarter</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="term2" id="term2">
                                            </div>
                                            <div class="form-group">
                                                <label>3rd Quarter</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="term3" id="term3">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Approve</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="approve" id="approve">
                                            </div>
                                            <div class="form-group">
                                                <label>Approveds By</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="evaApprovedBy" id="evaApprovedBy">
                                            </div>



                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                           <button id='formSubmit' type='button' class="btn btn-info" >SUBMIT</button>
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

                        <!-- row start Data Table -->
                        <div class="row">
                            <div class="table-responsive">
                                <div style="overflow-x :auto; min-width:800px; ">
                                    <div class="col-md-12">
                                        <br><br>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Emp No</th>
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">1st Quarter</th>
                                                    <th scope="col">2nd Quarter</th>
                                                    <th scope="col">3rd Quarter</th>
                                                    <th scope="col">Grand Total</th>
                                                    
                                                    <th scope="col">Overall Evaluation</th>
                                                    <th scope="col">Approval</th>
                                                    <th scope="col">Approved By</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
										
										foreach($yearPerformanceDataView as $yearEvaData){
										//	var_dump($yearPerformanceDataView);
											
											echo'  
																																										
												<tr role="row" class="odd">
												
													<td>'.$yearEvaData->empNo.'</td>
													<td>'.$yearEvaData->empName	.'</td>
													<td>'.$yearEvaData->empNicNo.'</td>
													<td>'.$yearEvaData->term1.'</td>
													<td>'.$yearEvaData->term2.'</td>
													<td>'.$yearEvaData->term3.'</td>
													<td>'.$yearEvaData->yearTotal.'</td>												
													
													<td>'.$yearEvaData->overAllEvaluation.'</td>
													<td>Sameera</td>
													<td><div class="btn-group">
													<button type="button" class="btn btn-info">Approve</button>
													<button type="button" class="btn btn-danger">Decline</button>
												
													  </div></td>
													
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
                        <!-- data table row end -->





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
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
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
	
	<script>
    $('#formSubmit').click(function() {
		//alert($('#evaluationYear').val())
        var param = {

            evaluationYear: $('#evaluationYear').val(),
            ymEmpName: $('#ymEmpName').val(),
            yEempNo: $('#yEempNo').val(),
            yEempNicNo: $('#yEempNicNo').val(),
            evaluationAgree: $('#evaluationAgree').val(),
            term1: $('#term1').val(),
            term2: $('#term2').val(),
            term3: $('#term3').val(),
            approve: $('#approve').val(),
            approvedBy: $('#evaApprovedBy').val(),


        }
		console.log(param);
		$.post("<?php echo base_url(); ?>index.php/Admin/yearPerformanceManagement", param, function(
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

				window.location.href = "yearPerformanceDataView";
             } else {
					Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
					footer: '<a href>Why do I have this issue?</a>'
					})

         }

        });
	
    })
    </script>

</body>

</html>
