<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HRIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url(); ?>index.php/Admin/userProfileData" class="d-block"> <?php echo $this->session->userdata['loggedHRAdmin']['adminName']; ?> </a>  
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
							 

           
          <!-- <li class="nav-header">MISCELLANEOUS</li> -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/Admin/employeeDetails" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>Emplyee Details</p>
            </a>
					</li>
					<li class="nav-item">
           
					</li>

					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/Admin/addEmploye" class="nav-link">
              <i class="nav-icon fa fa-user-plus" aria-hidden="true"></i>
              <p>Add Employee</p>
            </a>
					</li>
					<li class="nav-item">
           
					</li>


				
					<li class="nav-item has-treeview">
					<a href="<?php echo base_url(); ?>index.php/Admin/leaveDataView" class="nav-link">
					<i class="nav-icon fa fa-user-times"></i>
                <p>
                Leave 
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>index.php/Admin/leaveDataView" class="nav-link">
							<i class="nav-icon fa fa-user-times"></i>
                  <p>Leave </p>
                </a>
              </li>
              <li class="nav-item">
							<!-- <a href="<?php echo base_url(); ?>index.php/Admin/leaveManagement" class="nav-link">
							<i class="nav-icon fa fa-tasks"></i>
                  <p>Leave Management </p>
                </a> -->
              </li>
                                         
            </ul>
					</li>


					<li class="nav-item has-treeview">
					<a href="<?php echo base_url(); ?>index.php/Admin/attendance" class="nav-link">
					<i class="nav-icon fa fa-check-circle-o"></i>
                <p>
                Attendance 
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
							<li class="nav-item">
							
								</li>
              <li class="nav-item">
								<a href="<?php echo base_url(); ?>index.php/Admin/timeDataView" class="nav-link">
								<i class="nav-icon fa fa-hourglass-end"></i>
										<p>Time Sheet </p>
									</a>
              </li>
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>index.php/Admin/overTime" class="nav-link">
								<i class="nav-icon fa fa-hourglass-end"></i>
										<p>Over Time </p>
									</a>
              </li>                       
            </ul>
					</li>

					

					<li class="nav-item has-treeview">
              <a href="<?php echo base_url(); ?>index.php/Admin/incrementDataView" class="nav-link">
                <i class="nav-icon fa fa-line-chart"></i>
                <p>
                Proformance 
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
						<li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/Admin/incrementDataView" class="nav-link">
							<i class="nav-icon fa fa-line-chart"></i>
                  <p>Promotions </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/Admin/monthlyPerfomDataView" class="nav-link">
							<i class="nav-icon fa fa-calendar"></i>
                  <p>Monthly </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/Admin/yearPerformanceDataView" class="nav-link">
							<i class="nav-icon fa fa-calendar"></i>
                  <p>Year </p>
                </a>
              </li>                            
            </ul>
					</li>





					<li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>index.php/Admin/trainingDataView" class="nav-link">
              <i class="nav-icon fa fa-level-up"></i>
              <p>Training</p>
						</a>
						<ul class="nav nav-treeview">		
						<li class="nav-item">
								<a href="<?php echo base_url(); ?>index.php/Admin/trainingDataView" class="nav-link">
								<i class="nav-icon fa fa-level-up"></i>
									<p>Training</p>
								</a>
							</li>					
							<li class="nav-item">
								
							</li>
						</ul>
					</li>

				
					<li class="nav-item has-treeview">
					<a href="<?php echo base_url(); ?>index.php/Admin/payRoll" class="nav-link">
					<i class="nav-icon fa fa-money"></i>
                <p>
                PayRoll 
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>index.php/Admin/payRoll" class="nav-link">
								<i class="nav-icon fa fa-money"></i>
										<p>PayRoll  </p>
									</a>
								</li>
              <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/Admin/payRollInfoDataView" class="nav-link">
							<i class="nav-icon fa fa-list-alt"></i>
                  <p>PayRoll Information </p>
                </a>
              </li>
              <li class="nav-item">
							<a href="<?php echo base_url(); ?>index.php/Admin/paySheetDataView" class="nav-link">
							<i class="nav-icon fa fa-file-o"></i>
                  <p>PaySheet Maker </p>
                </a>
              </li>                            
            </ul>
					</li>
											
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/Admin/resignationDataView" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>Resignation</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/Admin/departmentDataView" class="nav-link">
              <i class="nav-icon fa fa-object-group"></i>
              <p>Departments</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/Admin/userManagementDataView" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>User Management</p>
            </a>
					</li>

          
					


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

	<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>

