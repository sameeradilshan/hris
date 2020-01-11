<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resignation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('executiveViews/components/css'); ?>

	<!-- form validation-------------------------------- -->
	<style type="text/css">
      .true_input{
        visibility: hidden;
      }

      .error{
        color: red;  
        font-size: 12px;
      }
   
   </style>
	

</head>

<body class="hold-transition sidebar-mini">
  
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
                            <h1>Employee Resignation</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/HrExecutive">Home</a></li>
                                <li class="breadcrumb-item active">Employee Resignation</li>
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
                        <h3 class="card-title">Employee Resignation</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#Resignation">
                                <i class="fa fa-plus"></i> Add Resignation
                            </button>
                            <!-- The Modal -->
                            <form id="resignationForm">
                                <div class="modal" id="Resignation">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Resignation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" required  name="empName" id="empName">
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
                                                    <label>Departmant</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="department" id="department">
                                                </div>
                                                <div class="form-group">
                                                    <label>Resignation Detailes</label>
                                                    <textarea class="form-control" rows="3" placeholder="Enter ..."
                                                        name="resignationDetails" id="resignationDetails"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Resignation Data</label>
                                                    <input type="date" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="resignationDate" id="resignationDate">
                                                </div>
                                            </div>

                                            <!-- Modal footer -->

                                            <div class="modal-footer">

                                                <input type="submit" class="btn btn-danger" name="submit"
                                                    value="Submit" id="formSubmit">

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
                                        class="btn btn-sm btn-primary" data-toggle="modal" target="_blank" onclick="window.open('approvedLeaveDatalView')">
                                        <i class="fa fa-check-circle-o"></i> Approved Leave
                                    </button>
                                </div>
							</div>
							      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#DeclineLeave" onclick="window.open('declineLeaveDatalView')">
                                        <i class="fa fa-minus-circle"></i> Decline Leave
                                    </button>
                                </div>
							</div>
							      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AllLeaves" onclick="window.open('reportLeaveDatalView')">
                                        <i class="fa fa-search"></i> All Leaves
                                    </button>
                                </div>
                            </div>
						
					</div>
                        <!-- row start -->
						<div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">

                                <div class="row">
                                    <div class="col-sm-12">
										<div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
											role="grid" aria-describedby="example1_info">
											<br>
											<thead>
                                        <tr>
                                            <th scope="col">EMP No</th>
											<th scope="col">Employee Name</th>
											<th scope="col">Emp NIC</th>
                                            <!-- <th scope="col">Department</th> -->
                                            <th scope="col">Resignation Date</th>
											<th scope="col">Resignation Details</th>
											<th scope="col">Edit Details</th> 
											<th scope="col">Approved By</th>
											<th scope="col">Approel</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                           
                                            <tbody>
												<?php
												foreach($resignationDataView as $resignationData){
													
												//	var_dump($resignationDataView);
													
													echo'  
														<tr role="row" class="odd">
														
															<td>'.$resignationData->empNo.'</td>
															<td>'.$resignationData->empName.'</td>
															<td>'.$resignationData->empNic.'</td>
															<td>'.$resignationData->resigDate.'</td>
															<td>'.$resignationData->resigDetails.'</td>
															<td><div class="btn-group">';
															echo '<button type="button" onclick="editFunction('.$resignationData->empResigId.')" class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
															</td>
															<td>Admin</td>
															<td><div class="btn-group">';
													if($resignationData->empStatus==0){
														echo '<button type="button" onclick="approvalFunction('.$resignationData->empResigId.')" class="btn btn-info">Approve</button>
														<button type="button" onclick="rejectFucntion('.$resignationData->empResigId.')" class="btn btn-danger">Decline</button>';
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
                                            <!-- Showing 1 to 10 of 57 entries</div> -->
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
                            <!-- row end -->



                        </div>
                    </div>


                    <!-- /.card -->



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

	
	
<script>
 $(document).ready(function () {
      $("#resignationForm").validate({
          rules: { 
               
              "empName": {
                required:true, 
              }, 
			  "empNo":	{
				  required : true,
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

<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

    <script>
    $(function() {

		$("#example1").DataTable({
			"scrollX" : true,
			"lengthChange":false,
			dom: 'Bfrtip',
        	buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
           
		}		
			
		);
    });

	$('#formSubmit').click(function() {
		//alert($('#evaluationYear').val())
        var param = {

            empName: 			$('#empName').val(),
            empNo: 				$('#empNo').val(),
            empNICNo: 			$('#empNICNo').val(),
            department: 		$('#department').val(),
            resignationDetails: $('#resignationDetails').val(),
            resignationDate: 	$('#resignationDate').val(),
         


        }
		console.log(param);
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/resignationHandler", param, function(
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

				window.location.href = "resignationDataView";
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
// -----------------------------------approval /rejection function--------


function approvalFunction(empResigId) {
		params ={
			empResigId:empResigId,
			empStatus:1
		}
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/updateResignation", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
               alert("succes")

                window.location.href = "resignationDataView";
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

	function rejectFucntion(empResigId) {
		params ={
			empResigId:empResigId,
			empStatus:2
		}
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/updateResignation", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
               alert("succes")

                window.location.href = "resignationDataView";
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
