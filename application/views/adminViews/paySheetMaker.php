<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('adminViews/components/css'); ?>
	
	<style type="text/css">
    .true_input {
        visibility: hidden;
    }

    .error {
        color: red;
        font-size: 12px;
    }
	#editModal{
		max-height: 100%;
		overflow-y: auto;
	}
    </style>

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
                            <h1>PaySheet Maker</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
			</section>

			<!-- generated numbers -->
			<input type="hidden" id='noOfGenerated' value="<?php echo sizeof($paySheetDataView);?>" /> 
			<!--  -->

			             <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">PaySheet Maker</h3>

                            <div class="card-tools">
							<a href="<?php echo base_url(); ?>index.php/Admin/getempData"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="" id="generatebtn" disabled>
                                    <i class="fa fa-plus"></i> Generate 
								</button></a>
								
                               
                            </div>
                            <!---------------------------------------------------  -->
                            <div class="modal" id="addSalarysheet2">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">PayRoll Sheet Details</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

										<!-- Modal body -->
										<form action="<?php echo base_url(); ?>index.php/Admin/paySeetInformation" method="post">
                                        <div class="modal-body">
                                            <h5>Employee Number</h5>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Add Employee Number</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNo" id="empNo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" value="submit">Make
                                                PaySheet</button>

                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
										</div>
										</form>
                                    </div>
                                </div>
                            </div>




                            /////////////////////////////////////////////////////////////////////////
                            <!-- The Modal -->
                            <form action="<?php echo base_url(); ?>index.php/Admin/payRollInformationMgt" method="post">
                                <div class="modal" id="editModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">PayRoll Sheet Details</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal" onclick="closeStop()">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <h5>Employee Information</h5>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Employee Name</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="empName" id="empName" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Employee No</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="empNo" id="empNo1" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>NIC No</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="empNICNo" id="empNICNo" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Department</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="department"
                                                                id="department" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h5>Basic Salary Information </h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Basic Salary</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="bsal" id="bsal" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>B R Allowance</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="brallowance"
                                                                id="brallowance" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>EPF</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="total1" id="totalEPF" disabled>
                                                        </div>
													</div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>ETF</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="total1" id="totalETF" disabled>
                                                        </div>
													</div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>EPF Employee</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="total1" id="totalEPFCom" disabled>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>OT</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="ot" id="ot" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Variable Allowance</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="variableallowance"
                                                                id="variableallowance" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Increments</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="attbonous" id="increments" disabled>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label><b>Gross Salary</b></label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="grossalary"
                                                                id="grossalary" disabled>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr>
                                                <h5>Deduction</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Deduction</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="deduction" id="deduction" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>PAYE</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Jhon Doe" name="paye" id="paye" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Net Salary</b></label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Jhon Doe" name="netsal" id="netsal" disabled>
                                                </div>



                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-danger" name="submit" value="Save">
                                                <button type="button" class="btn btn-info"
                                                    data-dismiss="modal">Print</button>
                                                <button type="button" class="btn btn-info"
                                                    data-dismiss="modal">PDF</button>
													<button type="button" onclick="closeStop()" class="close_btn btn btn-default pull-left"
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
                                <div class="col-md-12">
                                    <br><br>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
												<th>Year</th>
                                                <th>Month</th>
                                                <th>EMP No</th>
                                                <th>Emp Name</th>
                                                <th>Department</th>
                                                <th>Basic Salary</th>
                                                <th>B R Allowance</th>
                                                <th>Increments</th>
                                                <th>OT Rate</th>
												<th>EPF</th>
												<th>EPF Company</th>
                                                <th>ETF</th>
                                                <th>NoPay </th>
                                                <th>Absent</th>
												<th>Loan</th>
												<th>Gross Salary </th>
                                                <th>Deduction</th>
												<th>Present Date</th>
												<th>Net Salary</th>
												<th>Approval</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
										
									//---------------viw

									foreach ($paySheetDataView as $employee) {
										echo'
										<tr role="row" class="odd">
										<td>'.$employee->year.'</td>
										<td>'.$employee->month.'</td>
										<td>'.$employee->empNo.'</td>
										<td>'.$employee->empName.'</td>
										<td>'.$employee->departmentName.'</td>
										<td>'.$employee->basicSalary.'</td>
										<td>'.$employee->brAllowance.'</td>
										<td>'.$employee->increment.'</td>
										<td>'.$employee->ot.'</td>
										<td>'.$employee->EPF.'</td>
										<td>'.$employee->EPFCompany.'</td>
										<td>'.$employee->ETF.'</td>
										<td>'.$employee->Nopay.'</td>
										<td>'.$employee->absent.'</td>
										<td>'.$employee->loan.'</td>
										<td>'.$employee->grossSalary.'</td>
										
										<td>'.$employee->deduction.'</td>
										<td>'.$employee->datecame.'</td>
										<td>'.$employee->NetSalary.'</td>
										<td><div class="btn-group">';
										if($employee->approvalStatus==0){
											echo '<button type="button" onclick="approvalFunction('.$employee->payid.')" class="btn btn-info">Approve</button>
											
											<button type="button" data-toggle="modal"  class="btn btn-success" onclick="editFunction({
												approvalStatus:`'.$employee->approvalStatus.'`,
												payid:`'.$employee->payid.'`,
												year:`'.$employee->year.'`,
												month:`'.$employee->month.'`,
												empNo:`'.$employee->empNo.'`,
												empName:`'.$employee->empName.'`,
												departmentName:`'.$employee->departmentName.'`,
												basicSalary:`'.$employee->basicSalary.'`,
												brAllowance:`'.$employee->brAllowance.'`,
												increment:`'.$employee->increment.'`,
												ot:`'.$employee->ot.'`,
												EPF:`'.$employee->EPF.'`,
												EPFCompany:`'.$employee->EPFCompany.'`,
												ETF:`'.$employee->ETF.'`,
												Nopay:`'.$employee->Nopay.'`,
												absent:`'.$employee->absent.'`,
												grossSalary:`'.$employee->grossSalary.'`,
												deduction:`'.$employee->deduction.'`,
												NetSalary:`'.$employee->NetSalary.'`,
												paye:`'.$employee->paye.'`,
												
												})"><i class="fa fa-edit"></i> View</button>';
										
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
                            <!-- row end -->





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

    <?php $this->load->view('adminViews/components/js'); ?>

    <script>
    $(function() {

        $("#example1").DataTable({
                "scrollX": true
            }

        );

    });
   


// edit function-----------------------------------------------------------------------------
	function editFunction(object) {
        //var type=type;
        // alert(JSON.stringify(object));
		

		
        $('#empName').val(object.empName);
        $('#empNo1').val(object.empNo);
        $('#empNICNo').val(object.empNic);
        $('#department').val(object.departmentName);
        $('#bsal').val(object.basicSalary);
        $('#brallowance').val(object.brAllowance);
		$('#totalEPF').val(object.EPF);
        $('#totalETF').val(object.ETF);
        $('#totalEPFCom').val(object.EPFCompany);
        $('#ot').val(object.ot);
        $('#variableallowance').val(object.resigDetails);
        $('#increments').val(object.increment);
		$('#grossalary').val(object.grossSalary);
        $('#deduction').val(object.deduction);
        $('#paye').val(object.paye);
        $('#netsal').val(object.NetSalary);
      


        var modal = document.getElementById('editModal');



        modal.style.display = "block";


    }
	// modal close button-----------------------------------
	
    function closeStop() {
        var modal = document.getElementById('editModal');

        modal.style.display = "none";

    }
</script>
<!-- generate button -->
<script>
   
	// -----------------------------------approval /rejection function--------


    function approvalFunction(payid) {
		//var_dump('payid');
        params = {
            payid: payid,
            approvalStatus: 1
        }
		
        $.post("<?php echo base_url(); ?>index.php/Admin/approvalPaysheet", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes")

                window.location.href = "paySheetDataView";
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
	//------------------------generate button disabled-------------
	$(document).ready(function(){
		
    var countofgenerated = $('#noOfGenerated').val();
	
	var d = new Date()
	var month = (d.getMonth() + 1);
	var day =  d.getDate();
	var year = d.getFullYear();
    
	if (month.length < 2) 
		month = '0' + month;
	if (day.length < 2) 
		day = '0' + day;
	
	
	
	if(countofgenerated==0){
		if(1<day<10){
			$("#generatebtn").attr("disabled", false);
	
		}
	}
});

</script>

</body>

</html>
