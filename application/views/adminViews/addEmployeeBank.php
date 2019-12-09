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
						<!-- Page 4 Employee Bank & Family Detailes----------------------------------- -->
					
						<div class="col-md-12" id="page4">
                                <label>Bank Detailes</label>

                                <div class="form-group test3" id="">
                                    <label>Account No </label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                </div>
                                <div class="form-group test3" id="">
                                    <label>Bank Name </label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                </div>
                                <div class="form-group test3" id="">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                </div>
                                <div class="form-group test3" id="">
                                    <label>Account Type</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe">
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="page4">
                                        <label>Family Detailes</label>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Children Detailes</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <table class="table table-bordered">

                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Birth Day</th>
                                                        <th>NIC No</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                </table>
                                            </div>


                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <label>Parents Detailes</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <table class="table table-bordered">

                                                    <tr>
                                                        <th>Name</th>
                                                        <th>NIC No</th>
                                                        <th>Relation</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>

                                                </table>
                                            </div>

                                            </table>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <label>Wife/Husband Detailes</label>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <table class="table table-bordered">

                                                    <tr>
                                                        <th>Name</th>
                                                        <th>NIC No</th>
                                                        <th>Relation</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm">
                                                        </td>

                                                    </tr>



                                                    </tr>
                                                </table>
                                            </div>

                                            </table>
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
