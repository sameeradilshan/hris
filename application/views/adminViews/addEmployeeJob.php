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
                            <h1>Blank Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
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
                            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
						
					  <!-- Permanate employee Detailes--------------------------------------- -->


					  <div class="col-md-12" id="page3">
                                <div class="col-md-12" id="PermanateEmpDetailes">
                                    <label>Job Detailes</label> <br>
                                    <div class="form-group test3" id="test1">
                                        <label>Employee Number</label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="1999xxxxxx">
                                    </div>

                                    <div class="form-group">
                                        <label>Job Designation</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="">
                                        <label>Date of Designation</label>
                                        <input type="date" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="">
                                        <label>Department</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="">
                                        <label>EPF No</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="">
                                        <label>ETF No</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                </div>
                                <!-- Contract employee Detailes--------------------------------------- -->



                                <div class="form-group" id="contract">
                                    <label>Daily Employee Detailes</label><br>
                                    <label>Contact Period</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservation">
                                    </div>



                                    <div class="form-group test3" id="contract">
                                        <label>Contact Expire Date </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>

                                    <div class="form-group test3" id="contract">
                                        <label>Department</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="contract">
                                        <label>EPF No</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="contract">
                                        <label>ETF No</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                </div>
                                <!-- Tranining Students------------------------------------------ -->
                                <div class="form-group" id="training">
                                    <label>Training Period</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right active" id="reservation">
                                    </div>


                                    <div class="form-group test3" id="training">
                                        <label>Training Finished Date </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="training">
                                        <label>Training Institute Name </label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>
                                    <div class="form-group test3" id="training">
                                        <label>Department</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <button type="button" id="#page3PrevtBtn"
                                                    class="btn btn-block btn-primary btn-sm">Prev</button>
                                            </div>
                                            <div class="col-md-2 pull-right">
                                                <button type="button" id="page3NextBtn"
                                                    class="btn btn-block btn-primary btn-sm">NEXT</button>
                                            </div>
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
