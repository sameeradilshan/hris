<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monthly Performance</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('adminViews/components/css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css">


    <style type="text/css">
    .true_input {
        visibility: hidden;
    }

    .error {
        color: red;
        font-size: 12px;
        font: right;
    }

    #editModal {
        max-height: 100%;
        overflow-y: auto;
    }
    </style>

    <!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->




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
                            <h1>Monthly Proformance Evaluation</h1>
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
                        <h3 class="card-title">Monthly Proformance Evaluation</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addPromotion">
                                <i class="fa fa-plus"></i> Add Monthly Proformance
                            </button>
                        </div>

                        <!-- The Modal -->
                        <form id="monthPerformance" name="monthPerformance">
                            <div class="modal" id="addPromotion">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Monthly Proformance Evaluation</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">


                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Emp No</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNo" id="empNo">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>NIC No</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="empNICNo" id="empNICNo">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Year</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Jhon Doe" name="promotionYear"
                                                            id="promotionYear">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Month</label>
                                                        <select class="form-control  form-control-sm"
                                                            name="promotionMonth" id="promotionMonth">
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Employee Name</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="empName" id="empName">
                                            </div>




                                            <div class="form-group">
                                                <label>Knowledge of work & Application</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="knowledgeOfWork" id="knowledgeOfWork">
                                            </div>
                                            <div class="form-group">
                                                <label>Achievements of targets</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="achievements" id="achievements">
                                            </div>
                                            <div class="form-group">
                                                <label>Quality & Accuracy of work</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="quality" id="quality">
                                            </div>
                                            <div class="form-group">
                                                <label>Cooparation & motivation of the work</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="motivationOfTheWork"
                                                    id="motivationOfTheWork">
                                            </div>
                                            <div class="form-group">
                                                <label>Relationship with subordiante, peer & supervisors</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="relationship" id="relationship">
                                            </div>
                                            <div class="form-group">
                                                <label>Attendence & punctuality</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="attendence" id="attendence">
                                            </div>
                                            <div class="form-group">
                                                <label>Discipline</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="discipline" id="discipline">
                                            </div>
                                            <div class="form-group">
                                                <label>Team Work</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="teamWork" id="teamWork">
                                            </div>
                                            <div class="form-group">
                                                <label>Adhearance to company rules & regulation</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="adhearance" id="adhearance">
                                            </div>
                                            <div class="form-group">
                                                <label>Ability to work with minimum supervision</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Jhon Doe" name="abilityToWork" id="abilityToWork">
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
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" target="_blank"
                                        onclick="window.open('approvedMonthlyProDatalView')">
                                        <i class="fa fa-check-circle-o"></i> Approved Performance
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#DeclineLeave"
                                        onclick="window.open('declineMonthlyProDatalView')">
                                        <i class="fa fa-minus-circle"></i> Decline Performance
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button style="margin-top:32px; width:200px;" type="button"
                                        class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AllLeaves"
                                        onclick="window.open('reportMonthlyProDatalView')">
                                        <i class="fa fa-search"></i> All Performance
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
                                                    <th scope="col">Epm No</th>
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">NIC No</th>
                                                    <th scope="col">Promotion Year</th>
                                                    <th scope="col">Promotion Month</th>
                                                    <th scope="col">Knowledge Of Work</th>
                                                    <th scope="col">Achievements</th>
                                                    <th scope="col">Quality </th>
                                                    <th scope="col">Motivation Of The Work</th>
                                                    <th scope="col">Relationship</th>
                                                    <th scope="col">Attendence</th>
                                                    <th scope="col">Discipline</th>
                                                    <th scope="col">Team Work </th>
                                                    <th scope="col">Adhearance</th>
                                                    <th scope="col">Ability To Work</th>
                                                    <th scope="col">Promotion Total</th>
                                                    <th scope="col">Approval</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
										
										foreach($monthlyPerfomDataView as $mProfData){
											//var_dump($MonthlyPerfomDataView);
											
											echo'  
												<tr role="row" class="odd">
											
													<td>'.$mProfData->empNo.'</td>
													<td>'.$mProfData->empName.'</td>
													<td>'.$mProfData->empNICNo.'</td>
													<td>'.$mProfData->promotionYear.'</td>
													<td>'.$mProfData->promotionMonth.'</td>
													<td>'.$mProfData->knowledgeOfWork.'</td>
													<td>'.$mProfData->achievements.'</td>
													<td>'.$mProfData->quality.'</td>
													<td>'.$mProfData->motivationOfTheWork.'</td>
													<td>'.$mProfData->relationship.'</td>
													<td>'.$mProfData->attendence.'</td>
													<td>'.$mProfData->discipline.'</td>
													<td>'.$mProfData->teamWork.'</td>
													<td>'.$mProfData->adhearance.'</td>
													<td>'.$mProfData->abilityToWork.'</td>
													<td>'.$mProfData->promotionTotal.'</td>
													<td><div class="btn-group">';
													if($mProfData->promotionStatus==0){
														echo '<button type="button" onclick="approvalFunction('.$mProfData->promotionId.')" class="btn btn-success">Approve</button>
														<button type="button" onclick="rejectFucntion('.$mProfData->promotionId.')" class="btn btn-danger">Decline</button>
														<button type="button"  data-toggle="modal"  class="btn btn-info" onclick="editFunction({
															
															promotionId:`'.$mProfData->promotionId.'`,
															empNo:`'.$mProfData->empNo.'`,
															empName:`'.$mProfData->empName.'`,
															empNICNo:`'.$mProfData->empNICNo.'`,
															promotionYear:`'.$mProfData->promotionYear.'`,
															promotionMonth:`'.$mProfData->promotionMonth.'`,
															knowledgeOfWork:`'.$mProfData->knowledgeOfWork.'`,
															achievements:`'.$mProfData->achievements.'`,
															quality:`'.$mProfData->quality.'`,
															relationship:`'.$mProfData->relationship.'`,
															attendence:`'.$mProfData->attendence.'`,
															discipline:`'.$mProfData->discipline.'`,
															teamWork:`'.$mProfData->teamWork.'`,
															adhearance:`'.$mProfData->adhearance.'`,
															abilityToWork:`'.$mProfData->abilityToWork.'`,
															motivationOfTheWork:`'.$mProfData->motivationOfTheWork.'`,})">Edit</button>';
													}
													
		
												
													  echo '</div></td>
													
													
												</tr>
																																						
															
													';
												}
													
													?>


                                                </tr>






                                            </tbody>

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
        <!-- edit button modal----------------------------------------------- -->


        <div id="editModal" class="modal">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Performance Edit</h4>
                        <button type="button" class="close" data-dismiss="modal" onclick="closeStop()">&times;</button>

                    </div>
                    <div class="modal-body" style="min-height:400px;">

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Emp No</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="empId" id="editempNo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee Name</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="empName" id="editempName">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="promotionYear" id="editpromotionYear">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Month</label>
                                        <select class="form-control  form-control-sm" name="editpromotionMonth"
                                            id="promotionMonth">
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>NIC No</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="empNICNo" id="editempNICNo">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Knowledge of work & Application</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="knowledgeOfWork" id="editknowledgeOfWork">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Achievements of targets</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="achievements" id="editachievements">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Quality & Accuracy of work</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="quality" id="editquality">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Cooparation & motivation of the work</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="motivationOfTheWork" id="editmotivationOfTheWork">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Relationship with subordiante, peer & supervisors</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="relationship" id="editrelationship">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Attendence & punctuality</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="attendence" id="editattendence">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Discipline</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="discipline" id="editdiscipline">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Team Work</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="teamWork" id="editteamWork">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Adhearance to company rules & regulation</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="adhearance" id="editadhearance">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Ability to work with minimum supervision</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
                                            name="abilityToWork" id="editabilityToWork">
                                    </div>
                                </div>


                            </div>



                            <div class="form-group">

                                <input type="hidden" class="form-control form-control-sm" placeholder="Jhon Doe"
                                    name="promotionId" id="promotionId">
                            </div>

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
    </div>
    <?php $this->load->view('adminViews/components/footer'); ?>

    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('adminViews/components/js'); ?>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

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

    <!-- form validation---------------------------------------------------------- -->




    <!-- form handling------------------------------------------------------------------------- -->

    <script>
    $('#formSubmit').click(function() {
        //alert($('#promotionYear').val())
        var param = {

            empid: $('#empId').val(),
            promotionYear: $('#promotionYear').val(),
            promotionMonth: $('#promotionMonth').val(),
            empName: $('#empName').val(),
            empNo: $('#empNo').val(),
            empNICNo: $('#empNICNo').val(),
            knowledgeOfWork: $('#knowledgeOfWork').val(),
            achievements: $('#achievements').val(),
            quality: $('#quality').val(),
            motivationOfTheWork: $('#motivationOfTheWork').val(),
            relationship: $('#relationship').val(),
            attendence: $('#attendence').val(),
            discipline: $('#discipline').val(),
            teamWork: $('#teamWork').val(),
            adhearance: $('#adhearance').val(),
            abilityToWork: $('#abilityToWork').val(),

        }


        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/monthlyPerformanceManagement", param, function(
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

                window.location.href = "monthlyPerfomDataView";
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
    //----------------------------------------------Edit function--------------------------------
    function editFunction(object) {
        //var type=type;
        //alert(JSON.stringify(object))


        $('#editpromotionYear').val(object.promotionYear);
        $('#editpromotionMonth').val(object.promotionMonth);
        $('#editempName').val(object.empName);
        $('#editempNo').val(object.empNo);
        $('#editempNICNo').val(object.empNICNo);
        $('#editknowledgeOfWork').val(object.knowledgeOfWork);
        $('#editachievements').val(object.achievements);
        $('#editquality').val(object.quality);
        $('#editmotivationOfTheWork').val(object.motivationOfTheWork);
        $('#editrelationship').val(object.relationship);
        $('#editattendence').val(object.attendence);
        $('#editdiscipline').val(object.discipline);
        $('#editteamWork').val(object.teamWork);
        $('#editadhearance').val(object.adhearance);
        $('#editabilityToWork').val(object.abilityToWork);
        $('#promotionId').val(object.promotionId);

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

            empNo: $('#editempNo').val(),
            empName: $('#editempName').val(),
            promotionYear: $('#editpromotionYear').val(),
            promotionMonth: $('#editpromotionMonth').val(),
            empNICNo: $('#editempNICNo').val(),
            knowledgeOfWork: $('#editknowledgeOfWork').val(),
            achievements: $('#editachievements').val(),
            quality: $('#editquality').val(),
            motivationOfTheWork: $('#editmotivationOfTheWork').val(),
            relationship: $('#editrelationship').val(),
            attendence: $('#editattendence').val(),
            discipline: $('#editdiscipline').val(),
            teamWork: $('#editteamWork').val(),
            adhearance: $('#editadhearance').val(),
            abilityToWork: $('#editabilityToWork').val(),
            promotionId: $('#promotionId').val(),


        }
        console.log(param);
        $.post("<?php echo base_url(); ?>index.php/Admin/maonthPerformaceEdit", param, function(
            data) {

            console.log(data);
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes");

                window.location.href = "monthlyPerfomDataView";
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

    //----------------------------------Approval/decline -----------------------------------

    function approvalFunction(promotionId) {
        params = {
            promotionId: promotionId,
            promotionStatus: 1
        }
        $.post("<?php echo base_url(); ?>index.php/Admin/apporvelMonthPerformance", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("successsss")

                window.location.href = "monthlyPerfomDataView";
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

    function rejectFucntion(promotionId) {
        params = {
            promotionId: promotionId,
            promotionStatus: 2
        }
        $.post("<?php echo base_url(); ?>index.php/Admin/dclineMonthPerformance", params, function(
            data) {

            console.log(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                alert("succes")

                window.location.href = "monthlyPerfomDataView";
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
    <!-- finished handling------------------------------------- -->

</body>

</html>
