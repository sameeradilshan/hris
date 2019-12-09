<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/HrUserLTELogo.png"
           alt="HrUserLTE Logo"
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
          <a href="#" class="d-block">HrUser Name</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
							 

           
          <!-- <li class="nav-header">MISCELLANEOUS</li> -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/employeeDetails" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>Emplyee Details</p>
            </a>
					</li>

					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/addEmploye" class="nav-link">
              <i class="nav-icon fa fa-user-plus" aria-hidden="true"></i>
              <p>Add Employee</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/yearplanning" class="nav-link">
              <i class="nav-icon fa fa-pencil-square-o"></i>
              <p>Year Plaining</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/leaveDataView" class="nav-link">
              <i class="nav-icon fa fa-user-times"></i>
              <p>Leave</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/leaveManagement" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>Leave Management</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/attendance" class="nav-link">
              <i class="nav-icon fa fa-check-circle-o"></i>
              <p>Attendance</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/timeSheet" class="nav-link">
              <i class="nav-icon fa fa-hourglass-end"></i>
              <p>Time Sheet</p>
            </a>
					</li>

				

					<li class="nav-item has-treeview">
              <a href="<?php echo base_url(); ?>index.php/HrUser/promotion" class="nav-link">
                <i class="nav-icon fa fa-line-chart"></i>
                <p>
                Proformance 
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/HrUser/monthlyPerfomDataView" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Monthly </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/HrUser/yearPerformanceDataView" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Year </p>
                </a>
              </li>                            
            </ul>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/trainingDataView" class="nav-link">
              <i class="nav-icon fa fa-level-up"></i>
              <p>Training</p>
            </a>
					</li>

					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/progress" class="nav-link">
              <i class="nav-icon fa fa-tachometer"></i>
              <p>Employee progress</p>
            </a>
					</li>

					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/payRoll" class="nav-link">
              <i class="nav-icon fa fa-money"></i>
              <p>PayRoll</p>
            </a>
					</li>
					
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/PayRollInformation" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>PayRoll Information</p>
            </a>
					</li>

					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/PaySheetMaker" class="nav-link">
              <i class="nav-icon fa fa-file-o"></i>
              <p>PaySheet Maker</p>
            </a>
					</li>
											
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/resignationDataView" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>Resignation</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/departments" class="nav-link">
              <i class="nav-icon fa fa-object-group"></i>
              <p>Departments</p>
            </a>
					</li>
					<li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/HrUser/userManagement" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>User Management</p>
            </a>
					</li>

          <!-- <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Informational</p>
            </a>
					</li> -->
					


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
