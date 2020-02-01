<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Promotion</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('userViews/components/css'); ?>


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
                        <form id="yearperformance" name="yearperformance">
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
                                                    placeholder="Jhon Doe" name="ymEmpName" id="ymEmpName" required>
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
                                            <button id='formSubmit' type='button' class="btn btn-info"
                                                value="submit">SUBMIT</button>
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
                            <div class="col-md-12">
                                <br><br>
                                <div id="example1_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="example1_length"><label>Show <select
                                                        name="example1_length" aria-controls="example1"
                                                        class="form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input
                                                        type="search" class="form-control form-control-sm"
                                                        placeholder="" aria-controls="example1"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="dataTables_scroll">
                                                <div class="dataTables_scrollHead"
                                                    style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                    <div class="dataTables_scrollHeadInner"
                                                        style="box-sizing: content-box; width: 1046px; padding-right: 0px;">
                                                        <table
                                                            class="table table-bordered table-striped dataTable no-footer"
                                                            role="grid" style="margin-left: 0px; width: 1046px;">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th scope="col">Overall Evaluation</th>
                                                                    <th scope="col">Emp No</th>
                                                                    <th scope="col">Employee Name</th>
                                                                    <th scope="col">Department</th>
                                                                    <th scope="col">1st Quarter</th>
                                                                    <th scope="col">2nd Quarter</th>
                                                                    <th scope="col">3rd Quarter</th>
                                                                    <th scope="col">Grand Total</th>
                                                                    <th scope="col">Approval</th>
                                                                    <th scope="col">Approved By</th>
                                                                </tr>

                                                            </thead>

                                                    </div>
                                                </div>


                                                <tbody>
                                                    <?php
										
										foreach($yearPerformanceDataView as $yearEvaData){
											//var_dump($yearPerformanceDataView);
											
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
													<td><div class="btn-group">';
													if($yearEvaData->yearPromoStatus==0){
														echo '<button type="button" onclick="approvalFunction('.$yearEvaData->yearPromoId.')" class="btn btn-info">Approve</button>
														<button type="button" onclick="rejectFucntion('.$yearEvaData->yearPromoId.')" class="btn btn-danger">Decline</button>';
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
                                                aria-live="polite">Showing 0 to 0 of 0 entries</div>
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
                                                    <li class="paginate_button page-item next disabled"
                                                        id="example1_next">
                                                        <a href="#" aria-controls="example1" data-dt-idx="1"
                                                            tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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








        <?php $this->load->view('userViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  	</aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('userViews/components/js'); ?>
 <!-- DataTables -->
 	<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>



   <!-- DataTables -->

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
           
        });
    });
    </script>



    <!-- ---------------------form handling-------------------------------------------------- -->

    <script>
    $('#formSubmit').click(function() {
       // alert($('#ymEmpName').val())
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
        window.alert(param);
        $.post("<?php echo base_url(); ?>index.php/HrUser/yearPerformanceManagement", param, function(
            data) {

				window.alert(data)
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


    //approvel button function-----------------------------

    function myFunction() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, Approve it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                swalWithBootstrapButtons.fire(
                    'Approved!',
                    'Your Request has been Approved.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })




    }

	

    function myFunction2() {


        // const swalWithBootstrapButtons = Swal.mixin({
        // customClass: {
        // 	confirmButton: 'btn btn-success',
        // 	cancelButton: 'btn btn-danger'
        // },
        // buttonsStyling: false
        // })

        // swalWithBootstrapButtons.fire({
        // title: 'Are you sure?',
        // text: "You won't be able to revert this!",
        // icon: 'warning',
        // showCancelButton: true,
        // confirmButtonText: 'Yes, decline it!',
        // cancelButtonText: 'No, cancel!',
        // reverseButtons: true
        // }).then((result) => {
        // if (result.value) {
        // 	swalWithBootstrapButtons.fire(
        // 	'Declined!',
        // 	'Your Request has been declined.',
        // 	'success'
        // 	)
        // } else if (
        // 	/* Read more about handling dismissals below */
        // 	result.dismiss === Swal.DismissReason.cancel
        // ) {
        // 	swalWithBootstrapButtons.fire(
        // 	'Cancelled',
        // 	'Your imaginary file is safe :)',
        // 	'error'
        // 	)
        // }
        // })

        //makan okkoma red wenawa---------------------
        // $(document).ready(function(){
        // $("button").click(function(){
        // 	$("tr").css("color", "red");
        // });
        // });



    }

//approval function----------------------------------------------------

	function approvalFunction(yearPromoId) {
		params ={
			yearPromoId:yearPromoId,
			yearPromoStatus:1
		}
		$.post("<?php echo base_url(); ?>index.php/HrUser/updateyearPerformance", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
               alert("succes")

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
	}

	// rejection function-----------------------------------------------------------------------------------------

	function rejectFucntion(yearPromoId) {
		params ={
			yearPromoId:yearPromoId,
			yearPromoStatus:2
		}
		$.post("<?php echo base_url(); ?>index.php/HrUser/updateyearPerformance", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
               alert("succes")

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
	}


    </script>

</body>

</html>
