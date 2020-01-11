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
                            <form  id="trainingform">
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
                                                       required name="trainingEmpName" id="trainingEmpName" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Emp No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingEmpNo"  id="trainingEmpNo" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingEmpNIC" id="trainingEmpNIC" placeholder="Jhon Doe">
                                                </div>

                                                <div class="form-group">
                                                    <label>Course/Programe Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingProgrameName" id="trainingProgrameName" placeholder="Jhon Doe">
                                                </div>

                                                <div class="form-group">
                                                    <label>Course Content</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="courseContent" id="courseContent" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Institute/Venue</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingVenue" id="trainingVenue" placeholder="Jhon Doe">
                                                </div>

                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" class="form-control form-control-sm"
                                                        name="trainingDate" id="trainingDate" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Duration</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="trainingDuration" id="trainingDuration" placeholder="Jhon Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Course/Programe Fee(Rs)</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="courseFee" id="courseFee" placeholder="Jhon Doe">
                                                </div>



                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                 <button id='formSubmit' type='button' class="btn btn-info" value="submit" >SUBMIT</button>
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
                                            <th scope="col">Department</th>
                                            <th scope="col">Programe Name</th>
											<th scope="col">Venue</th>
											<th scope="col">Date</th>
                                            <th scope="col">Course Content</th>
                                            <th scope="col">Course Duration</th>
                                            <th scope="col">Course Fee</th>
											<!-- <th scope="col"> Approved</th>
											<th scope="col"> Approved By</th> -->
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                                    <?php
												
													foreach($trainingDataView as $trainingData){
														//var_dump($trainingDataView);
														
														echo'  
															<tr role="row" class="odd">
															
																<td>'.$trainingData->empNo.'</td>
																<td>'.$trainingData->empName.'</td>
																<td>'.$trainingData->empNicNo.'</td>
																<td>'.$trainingData->department.'</td>
																<td>'.$trainingData->courseName.'</td>
																<td>'.$trainingData->venue.'</td>
																<td>'.$trainingData->date.'</td>
																<td>'.$trainingData->courseContent.'</td>
																<td>'.$trainingData->courseDuration.'</td>
																<td>'.$trainingData->courseFee.'</td>
																
															
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
			"scrollX" : true,
			dom: 'Bfrtip',
        	buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
           
		}		
			
		);
    });

	$('#formSubmit').click(function() {
		//alert($('#trainingEmpName').val())
        var param2 = {


            trainingEmpName: 	$('#trainingEmpName').val(),
            trainingEmpNo: 		$('#trainingEmpNo').val(),
            trainingEmpNICNo: 	$('#trainingEmpNIC').val(),
            trainingProgrameName: 	$('#trainingProgrameName').val(),
            courseContent: 		$('#courseContent').val(),
            trainingVenue: 		$('#trainingVenue').val(),
            trainingDate: 		$('#trainingDate').val(),
            trainingDuration:	$('#trainingDuration').val(),
            courseFee: 			$('#courseFee').val(),


        }
		console.log(param2);
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/trainingManagementData", param2, function(
        data1) {

			console.log(data1)
            var response = JSON.parse(data1);
			console.log(response)
             if (response.status) {
				Swal.fire(
				'Good job!',
				'You clicked the button!',
				'success'
							)

				window.location.href = "trainingDataView";
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

    </script>

</body>

</html>
