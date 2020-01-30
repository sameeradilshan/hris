<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('executiveViews/components/css'); ?>

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
                            <h1>Wel Come</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                              
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3  class="card-title">Sri Lanka Triposha Ltd</h3>

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
				
						Human Resource Management System
						
					<div class="row">
						<div class="col-lg-3 col-6">
							<!-- small card -->
							<div class="small-box bg-info">
							<div class="inner">
								<h3>150</h3>

								<p>Attendance</p>
							</div>
							<div class="icon">
								<i class=" fa fa-check-circle-o"></i>
							</div>
							<a href="<?php echo base_url(); ?>application\views\executiveViews\report1.html"class="small-box-footer">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
							</div>
						</div>

						<div class="col-lg-3 col-6">
							<!-- small card -->
							<div class="small-box bg-info">
							<div class="inner">
								<h3><?php echo $leave ? $leave : '0';?></h3>

								<p>Leave</p>
							</div>
							<div class="icon">
								<i class="fa fa-user-times"></i>
							</div>
							<a href="<?php echo base_url(); ?>index.php/HrExecutive/approvedLeaveDatalView" class="small-box-footer">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
							</div>
						</div>

						<div class="col-lg-3 col-6">
							<!-- small card -->
							<div class="small-box bg-info">
							<div class="inner">
							<h3><?php echo $resignation ? $resignation : '0';?></h3>

								<p>Resignation</p>
							</div>
							<div class="icon">
								<i class="fa fa-money"></i>
							</div>
							<a href="<?php echo base_url(); ?>index.php/HrExecutive/approvedResignationDatalView" class="small-box-footer">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
							</div>
						</div>

						<div class="col-lg-3 col-6">
							<!-- small card -->
							<div class="small-box bg-info">
							<div class="inner">
								<h3>150</h3>

								<p>Proformance</p>
							</div>
							<div class="icon">
								<i class="fa fa-line-chart"></i>
							</div>
							<a href="#" class="small-box-footer">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
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

        <?php $this->load->view('executiveViews/components/footer'); ?>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('executiveViews/components/js'); ?>

</body>

</html>
