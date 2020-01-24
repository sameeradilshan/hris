<!DOCTYPE html>

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
                        <h3 class="card-title">Employee Details</h3>



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
                        <form action="<?php echo base_url(); ?>index.php/Admin/employeeDetailView" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Employee No</label>
                                        <input type="text" class="form-control form-control-sm" name="SearchEmpNo"
                                            id="SearchEmpNo" placeholder="120">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button style="margin-top:32px; width:100px;" type="submit" onclick="editFunction"
                                        class="btn btn-sm btn-primary" name="search" id="search" value="submit" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>

                            </div>
						</form>
						

							<?php
						foreach($employeeDetail as $employeeDetails){
							var_dump($employeeDetails);
							echo'<button type="button" data-toggle="modal"  class="btn btn-info" onclick="editFunction({
													
														
								empNo:`'.$employeeDetails->empNo.'`;
								fullName:`'.$employeeDetails->fullName.'`;
								nameInitials:`'.$employeeDetails->nameInitials.'`;
								otherName:`'.$employeeDetails->otherName.'`;
								address1:`'.$employeeDetails->address1.'`;
								address2:`'.$employeeDetails->address2.'`;
								contactOffice:`'.$employeeDetails->contactOffice.'`;
								contactMobile:`'.$employeeDetails->contactMobile.'`;
								contactHome:`'.$employeeDetails->contactHome.'`;
								gender:`'.$employeeDetails->gender.'`;
								empEmail:`'.$employeeDetails->empEmail.'`;
								dateOfBirth:`'.$employeeDetails->dateOfBirth.'`;
								civilState:`'.$employeeDetails->civilState.'`;
								nationality:`'.$employeeDetails->nationality.'`;
								religious:`'.$employeeDetails->religious.'`; })"><i class="fa fa-edit"></i> Edit</button>';

							}

						?>

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
<script>
	function editFunction(object) {
        //var type=type;
       // alert(JSON.stringify(object))
		alert(sussce);
      
      


        var modal = document.getElementById('editModal');



        modal.style.display = "block";


    }

</script>
</body>

</html>
