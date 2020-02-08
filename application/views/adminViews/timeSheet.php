<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Time Sheet</title>
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
                            <h1>Time Sheet</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Time Sheet</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- generated numbers -->
            <input type="hidden" id='noOfGenerated' value="<?php echo sizeof($timeDataView);?>" />
            <!--  -->

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Time Sheet</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addTimesheet" id="generatebtn">
                                <i class="fa fa-plus"></i> Add New TimeSheet
                            </button>
                        </div>


                        <!-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
						</div> -->
                        <!-- The Modal -->

                        <form id="form_action" action="<?php echo base_url();?>index.php/Admin/upload" method="post"
                            enctype="multipart/form-data" accept-charset="utf-8">
                            <div class="modal" id="addTimesheet">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add TimeSheet </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <h5>Time Sheet</h5>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Time Sheet (CSV file)</label>
                                                        <div class="row">
                                                            <div class="col -8">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    placeholder="Jhon Doe" name="fileName"
                                                                    id="fileName">
                                                            </div>
                                                            <input type="button" value="submit" id="checkbtn">
                                                        </div>
                                                        <input type="file" name="csv_file" id="csv_file" required
                                                            accept=".csv" id="Checkbtn" />
                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" name="upload" class="upload" id="upload"
                                                value="upload" disabled>Import CSV</button>
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                        <div id="imported_csv_data"></div>

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
                            <div class="col-md-12">
                                <br><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Emp No</th>
                                            <th>Employee Name</th>

                                            <th>Date</th>
                                            <th>In Time</th>
                                            <th>Out Time</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
												
													foreach($timeDataView as $timeData){
														//var_dump($timeDataView);
														
														echo'  
															<tr role="row" class="odd">
																
																<td>'.$timeData->empNo.'</td>
																<td>'.$timeData->empName.'</td>
																<td>'.$timeData->date.'</td>
																<td>'.$timeData->in_time.'</td>
																<td>'.$timeData->out_time.'</td>
																
																
																
															
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


                        <!-- row end -->





                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
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
    $(function() {

        $("#example1").DataTable({
                scrollX: true,
                scrollCollapse: true,
            }

        );
    });
    //--------------------------------button diesable---------------------
    $('#checkbtn').click(function() {
        var param2 = {

            fileName: $('#fileName').val(),


        }
        //window.alert(param2);
        $.post("<?php echo base_url(); ?>index.php/Admin/timeSheetChecker", param2, function(
            data1) {

            //window.alert(data1)
            var response = JSON.parse(data1);
           // window.alert(response)
            if (response.status) {
				$("#upload").attr("disabled", ture);

               
            } else {
				$("#upload").attr("disabled", false);
               
            }



        });
    });
    </script>


</body>

</html>
