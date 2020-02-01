<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Over Time</title>
    <!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<?php $this->load->view('userViews/components/css'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('userViews/components/topBar'); ?>
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
						<h1>Over Time</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Over Time</li>
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
                        <h3 class="card-title">Employee Over Time</h3>

                        <div class="card-tools">
						<div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#OT">
                                <i class="fa fa-plus"></i> Generate OT
                            </button>
                            <!-- The Modal -->
                            <form id="overTimeForm" action="<?php echo base_url(); ?>index.php/HrUser/overTime" method="post">
                                <div class="modal" id="OT">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">OverTime Generator</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Start Date</label>
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="startDate" id="startDate">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>End Date</label>
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="endDate" id="endDate">
                                                        </div>
                                                    </div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Emp No</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="empNo" id="empNo">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <!-- Modal footer -->

                                            <div class="modal-footer">

                                                <input type="submit" class="btn btn-danger" name="submit" value="Generate"
                                                    id="formSubmit">

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
										<th scope="col">Date</th>
										<!-- <th scope="col">Department</th> -->
										<th scope="col"> Over Time Hours</th>
										<!-- <th scope="col">Resignation Details</th> -->
										<!-- <th scope="col">Edit Details</th> -->
										<!-- <th scope="col">Approved By</th>
										<th scope="col">Approel</th> -->
							
                                            
                                        </tr>
                                    </thead>
                                   
									<tbody>
											<?php
										
										foreach($overTime as $resignationData){
													
											//var_dump($resignationData);
											// $empNo=$othours->empNo;
											// $empName=$othours->empName;
											// $date=$othours->date;
											$workedHours=8;
											$totalHours=0;
											$dattTime = new DateTime($resignationData->in_time);
											$dateTime2 = new DateTime($resignationData->out_time);
											$interval = $dateTime2->diff($dattTime);
											$hours=$interval->h;
											$otHourswork=$hours-$workedHours;
											// $totalHours=+$otHourswork;
											$totalHours=+$otHourswork ;
											echo'  
											
											<tr role="row" class="odd">
												
													<td>'.$resignationData->empNo.'</td>
													<td>'.$resignationData->empName.'</td>
													<td>'.$resignationData->date.'</td>
																					
													<td>'.$otHourswork.'</td>
													
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

        <?php $this->load->view('userViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  	</aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

	<?php $this->load->view('userViews/components/js'); ?>



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
	</script>

</body>

</html>
