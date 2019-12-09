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
                            <h1>Employee Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
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
                    <div class="card-body">
					<div class="row">
						<form action="<?php echo base_url(); ?>index.php/Admin/employeeDetailView" method="post">
							<div class="form-group">
                                <label>NIC No</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jhon Doe"
									name="SearchNicNo" id="SearchNicNo" >
							</div>
							<div class="form-group">		
									<input name="Submit" id="submit" class="btn btn-primary" type="submit" value="submit">
                                   
							</div>
						</form>
								
					</div>	
                        <div class="row">
						<div class="table-responsive">
                                <div style="overflow-x :auto; min-width:800px; ">
                                    <div class="col-md-12">
                                        <br><br>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Emp No</th>
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">EPF No</th>
                                                    <th scope="col">Bsalry</th>
													<th scope="col">EPF(8%) </th>
													<th scope="col">EPF(12%) </th>
                                                    <th scope="col">ETF </th>
                                                    <th scope="col">Net Salary</th>
                                                   
                                                    <th scope="col">Company Contribution</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
											
												<tr role="row" class="odd">
														
															<td>121</td>
															<td>Sameera</td>
															<td>IT</td>
															<td>001</td>
															<td>52360.00</td>
															<td>4188.80</td>
															<td>6283.20</td>
															<td>1570.80</td>
															<td>41888.20</td>
															<td>7854.00</td>
													
												</tr>
												<tr role="row" class="odd">
														
															<td>122</td>
															<td>Lasindu</td>
															<td>IT</td>
															<td>002</td>
															<td>38950.00</td>
															<td>3116.00</td>
															<td>4674.00</td>
															<td>1168.50</td>
															<td>31160.00</td>
															<td>5842.50</td>
												</tr>
												<tr role="row" class="odd">
														
															<td>12</td>
															<td>Induwara</td>
															<td>HR</td>
															<td>003</td>
															<td>95575.00</td>
															<td>764600.</td>
															<td>11469.00</td>
															<td>2867.25</td>
															<td>76460.00</td>
															<td>14336.25</td>
												</tr>
												<tr role="row" class="odd">
														
															<td>121</td>
															<td>thevin</td>
															<td>IT</td>
															<td>004</td>
															<td>70580.00</td>
															<td>5646.40</td>
															<td>8469.60</td>
															<td>2117.40</td>
															<td>56464.00</td>
															<td>10587.00</td>
												</tr>
												<tr role="row" class="odd">
														
															<td>121</td>
															<td>dewaka</td>
															<td>IT</td>
															<td>005</td>
															<td>47668.00</td>
															<td>3813.44</td>
															<td>5720.16</td>
															<td>1430.04</td>
															<td>38134.40</td>
															<td>7150.20</td>
												</tr>
										

											</tbody>
											

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.card-body -->
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
