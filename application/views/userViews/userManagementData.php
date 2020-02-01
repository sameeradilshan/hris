<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>System Admin Informtion</title>
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
                            <h1>System Admin Informtion</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
                                <li class="breadcrumb-item active">Admin Informtion</li>
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
                        <h3 class="card-title">System Admin Informtion</h3>

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
							<div  style="overflow-x :auto; min-width:800px; ">
                            <div class="col-md-12">
                                <br><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
										<th scope="col">EMP No</th>
										<th scope="col">Admin Name</th>
										<th scope="col">AdminNIC No</th>
										<!-- <th scope="col">Department</th> -->
										<th scope="col">Admin Email </th>
										<th scope="col">Admin Add Data </th>
										<th scope="col">Edit /Remove</th>
										
							
                                            
                                        </tr>
                                    </thead>
                                   
									<tbody>
											<?php
										
										foreach($userManagementData as $AdminData){
													
											//var_dump($resignationDataView);
											
											echo'  
												<tr role="row" class="odd">
												
													<td>'.$AdminData->empNo.'</td>
													<td>'.$AdminData->adminName.'</td>
													<td>'.$AdminData->adminNIC.'</td>
													<td>'.$AdminData->adminEmail.'</td>
													<td>'.$AdminData->adminAddData.'</td>
													<td><div class="btn-group">';
													if($AdminData->Status==0){
														echo '
														<button type="button" onclick="rejectFucntion('.$AdminData->adminId.')" class="btn btn-danger">Remove</button>
														<button type="button" data-toggle="modal"  class="btn btn-info" onclick="editFunction({
															adminId:`'.$AdminData->adminId.'`,
															empNo:`'.$AdminData->empNo.'`,
															adminNIC:`'.$AdminData->adminNIC.'`,
															adminEmail:`'.$AdminData->adminEmail.'`,
															adminAddData:`'.$AdminData->adminAddData.'`,
															adminName:`'.$AdminData->adminName.'`,
															})"><i class="fa fa-edit"></i> Edit</button>';
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
<!-- edit modal -->
 <!-- The Modal -->

				<div class="modal" id="editModal">
					<div class="modal-dialog">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Edit Admin Details</h4>
								<button type="button" class="close"
									data-dismiss="modal" onclick="closeStop()">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="form-group">
									<label>Admin Name</label>
									<input type="text" class="form-control form-control-sm"
										name="userName" id="userName" placeholder="Jhon Doe">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control form-control-sm"
										name="userEmail" id="userEmail" placeholder="Jhon Doe">
								</div>
								<div class="form-group">
									<label>NIC No</label>
									<input type="text" class="form-control form-control-sm"
										name="userNIC" id="userNIC" placeholder="Jhon Doe">
								</div>

								<div class="form-group">
									<label>Emp No</label>
									<input type="text" class="form-control form-control-sm" name="empId"
										id="empId" placeholder="Jhon Doe">
								</div>

<!-- 
								<div class="col-md-3">
									<div class="form-group">
										<label>Type</label>
										<select class="form-control  form-control-sm" name="userType"
											id="userType">
											<option>Admin</option>
											<option>Executive</option>
											<option>Staff</option>

										</select>
									</div>
								</div> -->
								<div class="form-group">
									<label>Add Date</label>
									<input type="date" class="form-control form-control-sm"
										name="userAddDate" id="userAddDate" placeholder="Jhon Doe">
								</div>
								<div class="form-group">
									
									<input type="hidden" class="form-control form-control-sm"
										name="adminId" id="adminId" placeholder="Jhon Doe">
								</div>
							</div>

							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-primary"
									id="formSubmit"  onclick="addStop()">Submit</button>

								<button type="" class="btn btn-danger"
									data-dismiss="modal" onclick="closeStop()">Close</button>
							</div>

						</div>
					</div>
				</div>
<!-- edit modal finished -->
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
//-------------------------------reject function------------------------------
function rejectFucntion(adminId) {
        params = {
            adminId: adminId,
            Status: 2
        }
        $.post("<?php echo base_url(); ?>index.php/Admin/RemoveAdmin", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes")

                window.location.href = "userManagementData";
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
//-------------------------------edit function--------------------------
// edit function-----------------------------------------------------------------------------
function editFunction(object) {
        //var type=type;
        // alert(JSON.stringify(object))

        $('#userName').val(object.adminName);
        $('#empId').val(object.empNo);
        $('#userNIC').val(object.adminNIC);
        $('#userAddDate').val(object.adminAddData);
        $('#userEmail').val(object.adminEmail);
        $('#adminId').val(object.adminId);


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

        //alert($('#editempName').val());

        var param = {

            EditempName: $('#userName').val(),
            EditempNo: $('#empId').val(),
            EditempNICNo: $('#userNIC').val(),
            EdituserAddDate: $('#userAddDate').val(),
            Editemail: $('#userEmail').val(),
            adminId: $('#adminId').val(),

        }
        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/editAdmindata", param, function(
            data) {

            //console.log(data);
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes");

                window.location.href = "userManagementData";
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
