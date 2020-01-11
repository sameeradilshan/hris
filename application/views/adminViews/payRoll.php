<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payroll</title>
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
                            <h1>Payroll Management</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
                                <li class="breadcrumb-item active">Payroll Reports</li>
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
                        <h3 class="card-title">Payroll Reports</h3>

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
					   Select a month:
					////////
					
					</div>
					<div class="row">
						<div class="col-3">
							<button type="button" class="btn btn-block btn-success btn-lg">Bank</button>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-block btn-success btn-lg">Total Salary</button>
						</div>
						<div class="col-3">
							<button type="button" class="btn btn-block btn-success btn-lg">EPF</button>
						</div>
						<div class="col-3">
							<button type="button" class="btn btn-block btn-success btn-lg">ETF</button>
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
