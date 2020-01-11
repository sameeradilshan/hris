<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('executiveViews/components/css'); ?>
	
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
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('executiveViews/components/topBar'); ?>
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
                            <h1>Leaves Management</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"></li>
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

                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" required id="leaveEmpName" name="leaveEmpName">
                                                </div>
                                                <div class="form-group">
                                                    <label>Employee No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" required id="leaveEmpNo" name="leaveEmpNo">
                                                </div>
                                                <div class="form-group">
                                                    <label>NIC No</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" id="leaveEmpNICNo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Departmant</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" id="leaveEmpDeprtment">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Range</label>
                                                    <input type="date" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" id="leaveDate">
                                                </div>
                                                <div class="form-group">
                                                    <label>Leave Type</label>
                                                    <select class="form-control  form-control-sm" id="leaveType">
                                                        <option  value="Annual">Annual</option>
                                                        <option  value="Casual">Casual</option>
                                                        <option  value="Matenityr">Matenityr</option>
                                                        <option  value="Stduy">Stduy</option>
                                                        <option  value="Lieu">Lieu</option>
                                                        <option  value="Medical">Medical</option>
                                                        <option  value="Short">Short</option>
                                                    </select>
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
												

						<!-- row end -->
					<br>
						
						
                        <!-- row start -->
                        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">

                                <div class="row">
                                    <div class="col-sm-12">
										<div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
											<thead>
                                                <tr>
                                                    <th scope="col">Emp No</th>
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Leave Type</th>
                                                    <th scope="col">Date From</th>
                                                    <th scope="col">Date To</th>
                                                    <th scope="col">No Of Date</th>
                                                    <th scope="col">Reason</th>
                                                    <th scope="col">Approved By</th>
                                                    <th scope="col">Action</th>
                                                   
                                            </thead>
                                            <tbody>
											<?php
										
										foreach($leaveDataView as $leaveData){
										//var_dump($leaveDataView);
											
											echo'  
											<tr role="row" class="odd">
										
											<td>'.$leaveData->empNo.'</td>
											<td>'.$leaveData->empName.'</td>
											<td>'.$leaveData->department.'</td>
											<td>'.$leaveData->leaveType.'</td>
											<td>'.$leaveData->date.'</td>
											<td>'.$leaveData->noOfDate.'</td>												
											<td>'.$leaveData->leaveStatus.'</td>
											<td>'.$leaveData->action.' </td>
											<td>sameera </td>
											<td><div class="btn-group">';
											if($leaveData->leaveStatus==0){
												echo '<button type="button" onclick="approvalFunction('.$leaveData->leaveId.')" class="btn btn-info">Approve</button>
												<button type="button" onclick="rejectFucntion('.$leaveData->leaveId.')" class="btn btn-danger">Decline</button>';
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








        <?php $this->load->view('executiveViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

	<?php $this->load->view('executiveViews/components/js'); ?>


<!-- form Validation -->
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script> 
   <!-------------------------for validation part----------------------- -->
	<script>
 	$(document).ready(function () {
      $("#leaveform").validate({
          rules: { 
               
              "leaveEmpName": {
                required:true, 
              }, 
			  "leaveEmpNo":	{
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

	<script>
		
	$(function() {

	$("#example1").DataTable({
	"scrollX" : true ,

	dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});
	});
		$('#formSubmit').click(function() {
			//alert($('#evaluationYear').val())
			// alert("leaveEmpName");
			var param1 = {

            leaveEmpName: 		$('#leaveEmpName').val(),
            leaveEmpNo: 		$('#leaveEmpNo').val(),
            leaveEmpNICNo: 		$('#leaveEmpNICNo').val(),
            leaveEmpDeprtment: 	$('#leaveEmpDeprtment').val(),
            leaveDate: 			$('#leaveDate').val(),
            leaveType: 			$('#leaveType').val(),
			leaveReason: 		$('#leaveReason').val(),
			


        }
		// alert(JSON.stringify(param));
		window.alert(param1);
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/leaveRequestManagement", param1, function(
        data1) {

			window.alert(data1)
            var response = JSON.parse(data1);
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
	
    })


//---------------------------------Approval Function----------------------------------------------------------------------

function approvalFunction(leaveId) {
		params ={
			leaveId:leaveId,
			leaveStatus:1
		}
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/updateLeave", params, function(
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
		params ={
			leaveId:leaveId,
			leaveStatus:2
		}
		$.post("<?php echo base_url(); ?>index.php/HrExecutive/updateLeave", params, function(
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













    </script>

</body>

</html>