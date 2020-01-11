<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Promotion</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('executiveViews/components/css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css">

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
                            <h1>Promotions And Increments</h1> 
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
                        <h3 class="card-title">Promotion And Increments</h3>

                        <div class="card-tools">
						<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addPromotion">
                                <i class="fa fa-plus"></i> Add Promotion
                            </button>
						</div>
						
						 <!-- The Modal -->
						 <div class="modal" id="addPromotion">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Employee Promotion & Increments</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->                                        
										<div class="modal-body">
												
											<form id="incrementdataform">	
                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="empName" id="empName">
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
												<div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="department" id="department">
												</div>
												<div class="form-group">
                                                    <label>Promotion/Increment </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="increment" id="increment">
                                                </div>
                                                <div class="form-group">
                                                    <label>Promotion/Increment Date</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="date" id="date">
                                                </div>
                                                <div class="form-group">
                                                    <label>Promotion/ Increment Details</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="incrementDetails" id="incrementDetails">
                                                </div>
                                                
												
											</form>      
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
											<input type="button" class="btn btn-info" name="submit"
                                                    value="Submit" id="formSubmit">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-body">

                        <!-- row start -->
                        <div class="row" style="background-color:#efefef; padding:20px;   border-radius: 25px;">
                         <div class="row col-12">   
						<div class="col-md-4">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal" onclick="window.open('approvedPromotionDatalView')">
                                        <i class="fa fa-search"></i> Approved Promotions
                                    </button>
                                </div>
                            </div>
							<div class="col-md-4">
									<div class="form-group">
										<button style="margin-top:32px; width:200px;" type="button"
											class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal" onclick="window.open('declinePromotionDatalView')">
											<i class="fa fa-search"></i> Declined Promotions
										</button>
									</div>
								</div>
                           
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal" onclick="window.open('reportPromotionDatalView')">
                                        <i class="fa fa-search"></i>All Promotions 
                                    </button>
                                </div>
                            </div>
						</div>
                        </div>
                        <!-- row end -->

                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-12">
								<br><br>
								<div class="table-responsive">
								<div  style="overflow-x :auto; min-width:800px; ">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Emp No</th>
											<th scope="col">Employee Name</th>
											<th scope="col">Department</th>
                                            <th scope="col">Promotion Detailes</th>
											<th scope="col">Date</th>
											<th scope="col">Promotion/Increment</th>
											<th scope="col">Approval</th>
											<th scope="col">Approved By</th>
                                        </tr>
                                    </thead>
									<tbody>
												<?php
												foreach($incrementDataView as $incrementData){
													
												//	var_dump($resignationDataView);
													
													echo'  
														<tr role="row" class="odd">
														
															<td>'.$incrementData->empNo.'</td>
															<td>'.$incrementData->empName.'</td>
															<td>'.$incrementData->departmentName.'</td>
															<td>'.$incrementData->incrementDetails.'</td>
															<td>'.$incrementData->date.'</td>
															<td>'.$incrementData->increment.'</td>
															
															<td><div class="btn-group">';
													if($incrementData->incrementStatus	==0){
														echo '<button type="button" onclick="approvalFunction('.$incrementData->IncrementId.')" class="btn btn-info">Approve</button>
														<button type="button" onclick="rejectFucntion('.$incrementData->IncrementId.')" class="btn btn-danger">Decline</button>';
													}
													

												
													  echo '</div></td>
													  <td>HrExecutive</td>
														</tr>
														 
													';
												}
												?>
                                                
                                                
                                            </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
											<th>CSS grade</th>
											<th>CSS grade</th>
                                        </tr>
                                    </tfoot> -->
								</table>
								</div>
								</div>
                            </div>
                        </div>
                        <!-- row end -->


                    </div>
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

	$('#formSubmit').click(function() {
		alert($('#empName').val())
        var param2 = {

            empName: 		$('#empName').val(),
            empNo: 			$('#empNo').val(),
            empNICNo: 		$('#empNICNo').val(),
            incrementDetails:	$('#incrementDetails').val(),
            date: 			$('#date').val(),
            increment:		$('#increment').val(),
			department:		$('#department').val(),
           


        }
		console.log(param2);
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/incrementManagement", param2, function(
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

				window.location.href = "incrementDataView";
             } else {
					Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
					footer: '<a href>Why do I have this issue?</a>'
					})
					window.location.href = "incrementDataView";
         }



        });
	
    })
//---------------------------------Approval Function----------------------------------------------------------------------

function approvalFunction(IncrementId) {
		params ={
			IncrementId:IncrementId,
			incrementStatus:1
		}
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/updateincrement", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
               alert("succes")

                window.location.href = "incrementDataView";
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

	function rejectFucntion(IncrementId) {
		params ={
			IncrementId:IncrementId,
			incrementStatus:2
		}
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/updateincrement", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
               alert("succes")

                window.location.href = "incrementDataView";
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
