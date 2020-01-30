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

    #editModal {
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
        <?php $this->load->view('adminViews/components/topBar'); ?>
        <!-- Main Sidebar Container -->
        <?php $this->load->view('adminViews/components/sideBar'); ?>






        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>PayRoll Information</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">PayRoll Information Management</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addPromotion">
                                <i class="fa fa-plus"></i> Add New Details
                            </button>
                        </div>

                        <!-- The Modal -->
                        <form id="pyrollinfo">
                            <div class="modal" id="addPromotion">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">PayRoll Information Management Sheet</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
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
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Employee Name</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empName" id="empName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Department</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="department" id="department">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Basic Salary</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="bsalary" id="bsalary">
                                            </div>
                                            <div class="form-group">
                                                <label>B R Allowance</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="brallowance" id="brallowance">
                                            </div>
                                            <div class="form-group">
                                                <label>Increments</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="increments" id="increments">
                                            </div>
                                            <div class="form-group">
                                                <label>OT Rate</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="otRate" id="otRate">
                                            </div>
                                            <div class="form-group">
                                                <label>EPF Percentage</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder=" 8" name="epf" id="epf">
                                            </div>
                                            <div class="form-group">
                                                <label>EPF Percentage Company</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder=" 12" name="epfcomp" id="epfcomp">
                                            </div>
                                            <div class="form-group">
                                                <label>ETF Percentage</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder=" 3" name="etf" id="etf">
                                            </div>
                                            <div class="form-group">
                                                <label>NoPay Rate</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="1.5 " name="noPayRate" id="noPayRate">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>Absent</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder=" " name="absents" id="absents">
                                            </div>
                                            <div class="form-group">
                                                <label>Loan</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="lone" id="lone">
                                            </div> -->
                                            <div class="form-group">
                                                <label>Leaving Expenses</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="living" id="living">
                                            </div>



                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-danger" name="submit" value="Submit"
                                                id="formSubmit">
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
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" target="_blank"
                                        onclick="window.open('approvedLeaveDatalView')">
                                        <i class="fa fa-check-circle-o"></i> Approved Payroll
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#DeclineLeave"
                                        onclick="window.open('declineLeaveDatalView')">
                                        <i class="fa fa-minus-circle"></i> Decline Payroll
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AllLeaves"
                                        onclick="window.open('reportLeaveDatalView')">
                                        <i class="fa fa-search"></i> All Payroll
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- row end -->

                        <!-- row start -->
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
                                                    <th scope="col">Basic Salary</th>
                                                    <th scope="col">B R Allowance</th>
                                                    <th scope="col">Increments</th>
                                                    <th scope="col">OT Rate</th>
                                                    <th scope="col">EPF% </th>
                                                    <th scope="col">EPF</th>
                                                    <th scope="col">EPF Company</th>
                                                    <th scope="col">ETF%</th>

                                                    <th scope="col">ETF</th>

                                                    <th scope="col">NoPay Rate</th>
                                                    
                                                    <!-- <th scope="col">Loan</th>
                                                   -->
                                                    <th scope="col">Living Expenses</th>
                                                    <th scope="col">Edit </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
										$basicTotal=0;
										$brAllowanceTotal=0;
										$incrementsTotal=0;
										$epfTotal=0;
										$epfCompanyTotal=0;
										$etfTotal=0;
										$livingExpensesTotal=0;

										foreach($payRollInfoDataView as $payRollData){
											//var_dump($payRollInfoDataView);
											$basicTotal=$basicTotal +$payRollData->basicSalary;
											$brAllowanceTotal=$brAllowanceTotal +$payRollData->brAllowance;
											$incrementsTotal=$incrementsTotal +$payRollData->increments;
											$epfTotal=$epfTotal +$payRollData->epf;
											$etfTotal=$etfTotal +$payRollData->etf;
											$epfCompanyTotal=$epfCompanyTotal +$payRollData->epfCompany;
											$livingExpensesTotal=$livingExpensesTotal +$payRollData->livingExpenses;
											
											echo'  
											 	<tr role="row" class="odd">
											 	
											 		<td>'.$payRollData->empNo.'</td>
											 		<td>'.$payRollData->empName.'</td>
											 		<td>'.$payRollData->empNicNo.'</td>
											 		<td>'.$payRollData->department.'</td>
											 		<td>'.$payRollData->basicSalary.'</td>
											 		<td>'.$payRollData->brAllowance.'</td>
											 		<td>'.$payRollData->increments.'</td>
											 		<td>'.$payRollData->OTrate.'</td>
													 <td>'.$payRollData->epfPresantage.'</td>
													 <td>'.$payRollData->epf.'</td>
													 <td>'.$payRollData->epfCompany.'</td>
													 <td>'.$payRollData->etfPresantage.'</td>
													 <td>'.$payRollData->etf.'</td>
													 
											 		<td>'.$payRollData->noPayRate.'</td>
											 	
													<td>'.$payRollData->livingExpenses.'</td>
													<td><div class="btn-group">';
													echo'
													<button type="button" data-toggle="modal"  class="btn btn-info" onclick="editFunction({

														empPayId:`'.$payRollData->empPayId.'`,
														empNo:`'.$payRollData->empNo.'`,
														empName:`'.$payRollData->empName.'`,
														department:`'.$payRollData->department.'`,
														empNic:`'.$payRollData->empNicNo.'`,
														basicSalary:`'.$payRollData->basicSalary.'`,
														brAllowance:`'.$payRollData->brAllowance.'`,
														increments:`'.$payRollData->increments.'`,
														OTrate:`'.$payRollData->OTrate.'`,
														etfPresantage:`'.$payRollData->epfPresantage.'`,
														etfPresantage:`'.$payRollData->etfPresantage.'`,
														etfCompany:`'.$payRollData->epfCompany.'`,
														noPayRate:`'.$payRollData->noPayRate.'`,
													
														livingExpenses:`'.$payRollData->livingExpenses.'`,
														})"><i class="fa fa-edit"></i> Edit</button>';
												
														echo '</div></td>
													
														</tr>
														 <tr>
														 <th scope="col"> </th>
														 <th scope="col"> </th>
														 <th scope="col"> </th>
														 <th scope="col"></th>
														 <th scope="col">'.$basicTotal.'</th>
														 <th scope="col">'.$brAllowanceTotal.'</th>
														 <th scope="col">'.$incrementsTotal.'</th>
														 <th scope="col"> </th>
														 <th scope="col"> </th>
														 <th scope="col">'.$epfTotal.'</th>
														 <th scope="col">'.$epfCompanyTotal.'</th>
														 <th scope="col"> </th>
														 <th scope="col">'.$etfTotal.'</th>
														 <th scope="col"> </th>
														
														
														
														 <th scope="col"> '.$livingExpensesTotal.'</th>
														 <th scope="col"> </th>
													 </tr>
														
													';

											
												 
											}

											echo '
											</tbody>
                                            <tfoot>
                                                
                                            </tfoot>';
											?>



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
        <!--Edit modal-----------------------------------------------------------------  -->

        <div id="editModal" class="modal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Payroll Information Edit</h4>
                        <button type="button" class="close" data-dismiss="modal" onclick="closeStop()">&times;</button>

                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Employee Name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="empName" id="editempName">
                        </div>
                        <div class="form-group">
                            <label>Employee No</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="empNo"
                                id="editempNo">
                        </div>
                        <div class="form-group">
                            <label>NIC No</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="empNICNo" id="editempNICNo">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="department" id="editdepartment">
                        </div>

                        <div class="form-group">
                            <label>Basic Salary</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="bsalary" id="editbsalary">
                        </div>
                        <div class="form-group">
                            <label>B R Allowance</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="brallowance" id="editbrallowance">
                        </div>
                        <div class="form-group">
                            <label>Increments</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="increments" id="editincrements">
                        </div>
                        <div class="form-group">
                            <label>OT Rate</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="otRate"
                                id="editotRate">
                        </div>
                        <div class="form-group">
                            <label>EPF </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="epf"
                                id="editepfPresantage">
                        </div>
                        <div class="form-group">
                            <label>ETF</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="etf"
                                id="editetfPresantage">
                        </div>
                        <div class="form-group">
                            <label>ETF Company</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="etf"
                                id="editetfCompany">
                        </div>
                        <!-- <div class="form-group">
                            <label>NoPay Rate</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="noPayRate" id="editnoPayRate">
                        </div>
                        
                        <div class="form-group">
                            <label>Loan</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe" name="lone"
                                id="editlone">
                        </div> -->
                        <div class="form-group">
                            <label>Living Expenses</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                name="editliving" id="editliving">
                        </div>
                        <div class="form-group">

                            <input type="hidden" class="form-control form-control-sm" placeholder="Jhon Doe" name="lone"
                                id="editempPayId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="closeStop()" class="close_btn btn btn-default pull-left"
                            data-dismiss="modal">Close</button>
                        <button type="button" id="stopModelAdd" onclick="addStop()" class="btn btn-primary"
                            data-dismiss="modal">ADD</button>
                    </div>
                </div>
            </div>
        </div>



        <?php $this->load->view('adminViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('adminViews/components/js'); ?>
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>


    <!-- data table------------------ -->
    <script>
      $(function() {

$("#example1").DataTable({
		"scrollX": true,
		

	}

);
});
    </script>
    <script>
    // Simply get the sum of a column
	
	
	//--------------------------form data fill---------
    $('#empNICNo').click(function() {
        //alert($('#empNo').val())
        var param = {
            empNo: $('#empNo').val(),
        }
        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/EmpformData", param, function(
            data) {
		var response = JSON.parse(data);
		response=response.result[0];

            console.log(response.nameInitials);
			$('#empName').val(response.nameInitials);
			$('#department').val(response.department);
			$('#empNICNo').val(response.empNic);
		alert(result);
			
            
            //bageta wada?

        });



    });

    
    // form sunmission----------------------------------
	</script>
    <script>
    $('#formSubmit').click(function() {
        //alert($('#epf').val())
        var param = {

            payinfoEmpName: $('#empName').val(),
            payEmpNo: $('#empNo').val(),
            payEmpNICNo: $('#empNICNo').val(),
            payDepartment: $('#department').val(),
            payBsalary: $('#bsalary').val(),
            payBRallowance: $('#brallowance').val(),
            payIncrements: $('#increments').val(),
            payOTRate: $('#otRate').val(),
            payEPFPresantage: $('#epf').val(),
            payETFPresantage: $('#etf').val(),
            payNoPayRate: $('#noPayRate').val(),
          
            payLone: $('#lone').val(),
            payEFTComp: $('#epfcomp').val(),
            payLiving: $('#living').val(),



        }
        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/payRollInformationMgt", param, function(
            data) {

            console.log(data);
            var response = JSON.parse(data)
            console.log(response)
            if (response.status) {
                alert("succes");


                window.location.href = "<?php echo base_url(); ?>index.php/Admin/payRollInfoDataView";
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

    //-----------------------Edit function---------------------------------------

    function editFunction(object) {
        //var type=type;
        // alert(JSON.stringify(object))

        $('#editempPayId').val(object.empPayId);
        $('#editempNo').val(object.empNo);
        $('#editempName').val(object.empName);
        $('#editdepartment').val(object.department);
        $('#editempNICNo').val(object.empNic);
        $('#editbsalary').val(object.basicSalary);
        $('#editbrallowance').val(object.brAllowance);
        $('#editincrements').val(object.increments);
        $('#editotRate').val(object.OTrate);
        $('#editepfPresantage').val(object.epfPresantage);
        $('#editetfPresantage').val(object.etfPresantage);
       
        $('#editabsents').val(object.absent);
        $('#editlone').val(object.lone);
        $('#editempleave').val(object.empleave);
        $('#editetfCompany').val(object.etfCompany);
        $('#editliving').val(object.livingExpenses);


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



            editempPayId: $('#editempPayId').val(),
            payEmpNo: $('#editempNo').val(),
            payEmpName: $('#editempName').val(),
            payDepartment: $('#editdepartment').val(),
            payEmpNICNo: $('#editempNICNo').val(),
            payBsalary: $('#editbsalary').val(),
            payBRallowance: $('#editbrallowance').val(),
            payIncrements: $('#editincrements').val(),
            payOTRate: $('#editotRate').val(),
            payEPF: $('#editepf').val(),
            payETF: $('#editetf').val(),
           
            payAbsents: $('#editabsents').val(),
            payLone: $('#editlone').val(),
            payEPFComp: $('#editetfCompany').val(),
            payLiving: $('#editliving').val(),


        }
        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/payRollInformationEdit", param, function(
            data) {

            console.log(data);
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes");

                window.location.href = "payRollInfoDataView";
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
