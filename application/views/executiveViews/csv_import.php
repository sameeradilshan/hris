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
                        Start creating your amazing application!



                        <form method="post" id="import_csv" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Select CSV File</label>
                                <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
                            </div>
                            <br />
                            <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import
                                CSV</button>
                        </form>
                        <br />
                        <div id="imported_csv_data"></div>



                        Start creating your amazing application!




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

    <script>
    $(document).ready(function() {

        load_data();

        function load_data() {
            $.ajax({
                url: "<?php echo base_url(); ?>csv_import/load_data",
                method: "POST",
                success: function(data) {
                    $('#imported_csv_data').html(data);
                }
            })
        }

        $('#import_csv').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>csv_import/import",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#import_csv_btn').html('Importing...');
                },
                success: function(data) {
                    $('#import_csv')[0].reset();
                    $('#import_csv_btn').attr('disabled', false);
                    $('#import_csv_btn').html('Import Done');
                    load_data();
                }
            })
        });

    });
    </script>




</body>

</html>
