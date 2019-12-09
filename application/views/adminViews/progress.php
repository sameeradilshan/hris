<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
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
                            <h1>Employee Performance & Evaluation</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
                                <li class="breadcrumb-item active">Employee Performance & Evaluation</li>
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
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#training">
                                <i class="fa fa-plus"></i> Add Training
                            </button>
                        </div>
                    </div>
                    <div class="card-body">


                        <!-- The Modal -->
                        <div class="modal fade" id="training">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Training </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input type="text" class="form-control form-control-sm" name="userName" id="userName"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Emp No</label>
                                            <input type="text" class="form-control form-control-sm" name="userEmail" id="userEmail"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>NIC No</label>
                                            <input type="text" class="form-control form-control-sm" name="userNIC" id="userNIC"
                                                placeholder="Jhon Doe">
                                        </div>

                                        <div class="form-group">
                                            <label>Knowledge of work & application</label>
                                            <input type="text" class="form-control form-control-sm" name="knowledgeOfwork" id="knowledgeOfwork"
                                                placeholder="Jhon Doe">
                                        </div>

                                        <div class="form-group">
                                            <label>Achievement of targets</label>
                                            <input type="text" class="form-control form-control-sm" name="achivement" id="achivement"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Quality & Acuracy Of Workc</label>
                                            <input type="text" class="form-control form-control-sm" name="quality&acurace" id="quality&acurace"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Co-opration & motivation Of Workc</label>
                                            <input type="text" class="form-control form-control-sm" name="motivation" id="motivation"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship with subordinate, peers & supervisors</label>
                                            <input type="text" class="form-control form-control-sm" name="relationship" id="relationship" 
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Attendanc & punctuality</label>
                                            <input type="text" class="form-control form-control-sm" name="attendance" id="attendance"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Discipline</label>
                                            <input type="text" class="form-control form-control-sm" name="discipline" id="discipline"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Team Work</label>
                                            <input type="text" class="form-control form-control-sm" name="teamwork" id="teamwork"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Adhearance to company rules & regulations</label>
                                            <input type="text" class="form-control form-control-sm" name="regulation" id="regulation"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Ability to work with minimum supervision</label>
                                            <input type="text" class="form-control form-control-sm" name="workwmsupervision" id="workwmsupervision"
                                                placeholder="Jhon Doe">
                                        </div>
                                        <div class="form-group">
                                            <label>Month</label>
                                            <input type="date" class="form-control form-control-sm" name="month" id="month"
                                                placeholder="Jhon Doe">
                                        </div>

                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="Submit" class="btn btn-secondary" data-="modal"
                                            value="submit">Submit</button>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Progress bars</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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

</body>

</html>
