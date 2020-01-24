<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Approved Training DatalView</title>
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
                            <h1>Approved Training Report</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Approved Training</li>
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
                        <h3 class="card-title">Approved Training</h3>

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
                            <div class="table-responsive">
                                <div style="overflow-x :auto; min-width:800px; ">
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
                                                    <th scope="col"> Approved</th>
                                                    <th scope="col"> Approved By</th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
										
										foreach($approvedTrainingDatalView as $trainingData){
													
											//var_dump($resignationDataView);
											
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
																<td>Admin</td>
																
																<td><div class="btn-group">';
													if($trainingData->trainingStatus==0){
														echo '<button type="button" onclick="approvalFunction('.$trainingData->trainingId.')" class="btn btn-success">Approve</button>
														<button type="button" onclick="rejectFucntion('.$trainingData->trainingId.')" class="btn btn-danger">Decline</button>
														<button type="button" data-toggle="modal"  class="btn btn-info" onclick="editFunction({

															trainingId:`'.$trainingData->trainingId.'`,
															empNo:`'.$trainingData->empNo.'`,
															empName:`'.$trainingData->empName.'`,
															department:`'.$trainingData->department.'`,
															courseName:`'.$trainingData->courseName.'`,
															venue:`'.$trainingData->venue.'`,
															date:`'.$trainingData->date.'`,
															courseContent:`'.$trainingData->courseContent.'`,
															courseDuration:`'.$trainingData->courseDuration.'`,
															courseFee:`'.$trainingData->courseFee.'`,
															empNicNo:`'.$trainingData->empNicNo.'`,}	
														)"><i class="fa fa-edit"></i> Edit</button>';
													}
													

												
													  echo '</div></td>
														
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
                                        <!-- Showing 1 to 10 of 57 entries -->
                                    </div>
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

        <?php $this->load->view('adminViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  	</aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('adminViews/components/js'); ?>



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
