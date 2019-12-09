<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AddEmployee</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('components/css'); ?>
	<style>
			@import url(https://fonts.googleapis.com/css?family=Montserrat);
			/* css class for the registration form generated errors */

			.profilepress-reg-status {
			border-radius: 6px;
			font-size: 17px;
			line-height: 1.471;
			padding: 10px 19px;
			background-color: #e74c3c;
			color: #ffffff;
			font-weight: normal;
			display: block;
			text-align: center;
			vertical-align: middle;
			margin: 5px 0;
			}
			/*form styles*/

			#msform {
			width: 400px;
			margin: 50px auto 550px;
			text-align: center;
			position: relative;
			}

			#msform fieldset {
			background: white;
			border: 0 none;
			border-radius: 3px;
			box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
			padding: 20px 30px;
			box-sizing: border-box;
			width: 187%;
			margin: 0 -44%;
			/*stacking fieldsets above each other*/
			
			position: absolute;
			}
			/*Hide all except first fieldset*/

			#msform fieldset:not(:first-of-type) {
			display: none;
			}
			/*inputs*/

			#msform input,
			#msform textarea {
			padding: 15px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-bottom: 10px;
			width: 306%;
			box-sizing: border-box;
			font-family: montserrat;
			color: #2C3E50;
			font-size: 13px;
			}
			/*buttons*/

			#msform .action-button {
			width: 100px;
			background: #27AE60;
			font-weight: bold;
			color: white;
			border: 0 none;
			border-radius: 1px;
			cursor: pointer;
			padding: 10px 5px;
			margin: 10px 5px;
			}

			#msform .action-button:hover,
			#msform .action-button:focus {
			box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
			}
			/*headings*/

			.fs-title {
			font-size: 15px;
			text-transform: uppercase;
			color: #2C3E50;
			margin-bottom: 10px;
			}

			.fs-subtitle {
			font-weight: normal;
			font-size: 13px;
			color: #666;
			margin-bottom: 20px;
			}
			/*progressbar*/

			#progressbar {
			margin-left: -45px;
			margin-bottom: 30px;
			overflow: hidden;
			/*CSS counters to number the steps*/
			
			counter-reset: step;
			}

			#progressbar li {
			list-style-type: none;
			color: #616161;
			text-transform: uppercase;
			font-size: 9px;
			width: 25%;
			float: left;
			position: relative;
			}

			#progressbar li:before {
			content: counter(step);
			counter-increment: step;
			width: 20px;
			line-height: 20px;
			display: block;
			font-size: 15px;
			color: #333;
			background: white;
			border-radius: 3px;
			margin: 0 auto 5px auto;
			}

			#progressbar li:first-child:after {
			/*connector not needed before the first step*/
			
			content: none;
			}
			/*marking active/completed steps green*/
			/*The number of the step and the connector before it = green*/

			#progressbar li.active:before,
			#progressbar li.active:after {
			background: #27AE60;
			color: white;
			}
	</style>

	

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('components/topBar'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('components/sideBar'); ?>






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Employee</h1>
          </div>
         				 <div class="col-sm-6">
          				  <ol class="breadcrumb float-sm-right">
          				    <li class="breadcrumb-item"><a href="#">Home</a></li>
              
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
          <h3  class="card-title">Select the type of employee</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
				<!--Employee details adiing buttons -->
				<!-- Prmanente Employee------------------------------------------------------------------------->
				<div class="row">
					<div class="col-md-4">
						<h4>Premanent Employee</h4> 
							<button style="width:200px;" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
							Add Employee
							</button>  
					</div>
					<div class="col-md-4">
						<h4>Contract Employee</h4>
						<button style="width:200px;" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal2">
							Add Contract Employee
						</button>	
					</div>
					<div class="col-md-4">
						<h4 >Trainees</h4>
						<button style="width:200px;" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal3">
							Add Trainees
						</button> 
					</div> 
				</div>
			 
			  

							<!-- Premanent Employee The Modal -->
							<div class="modal" id="myModal">
								<div class="modal-dialog modal-lg">
								<div class="modal-content" style="height:2500px">

									<!-- Modal Header -->
										<div class="modal-header">
										<h4 class="modal-title">Add Employee Form</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

									<!-- Modal body -->
									<div class="modal-body">




									<form method="post" novalidate >
										<div id="msform">
											<!-- progressbar -->
											<ul id="progressbar">
											<li class="active">Account Setup</li>
											<li>Social Profiles</li>
											<li>Personal Details</li>
											<li>Personal Details 2</li>

											</ul>
											<!-- fieldsets -->
											<fieldset>
											<h2 class="fs-title">Create your account</h2>
											<h3 class="fs-subtitle">This is step 1</h3>
										
											

 

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="Full Name">Full Name</label>  
										<div class="col-md-4">
										<input id="Full Name" name="Full Name" type="text" placeholder="Full Name" class="form-control" required="">
											
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="NameWithInitials">Name With Initials</label>  
										<div class="col-md-4">
										<input id="NameWithInitials" name="NameWithInitials" type="text" placeholder="Name With Initials" class="form-control input-md" required="">
											
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="Name2">Other Names</label>  
										<div class="col-md-4">
										<input id="Name2" name="Name2" type="text" placeholder="Other Names" class="form-control input-md">
											
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="Address1">Address(premantant)</label>  
										<div class="col-md-4">
										<input id="Address1" name="Address1" type="text" placeholder="Address(premantant)" class="form-control input-md">
											
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="Address2">Address(tempary)</label>  
										<div class="col-md-4">
										<input id="Address2" name="Address2" type="text" placeholder="Address(temp)" class="form-control input-md">
											
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="Distric">Distric</label>  
										<div class="col-md-4">
										<input id="Distric" name="Distric" type="text" placeholder="Distric" class="form-control input-md">
											
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="AG office area">AG office area</label>  
										<div class="col-md-4">
										<input id="AG office area" name="AG office area" type="text" placeholder="AG office area" class="form-control input-md">
											
										</div>
										</div>

										<!-- Prepended text-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="contactOffice">Contact No (Office)</label>
										<div class="col-md-4">
											<div class="input-group">
											<span class="input-group-addon">+94</span>
											<input id="contactOffice" name="contactOffice" class="form-control" placeholder="Contact No " type="text">
											</div>
											
										</div>
										</div>

										<!-- Prepended text-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="contactNohome ">Contact No(Home)</label>
										<div class="col-md-4">
											<div class="input-group">
											<span class="input-group-addon">+94</span>
											<input id="contactNohome " name="contactNohome " class="form-control" placeholder="Contact No Home" type="text">
											</div>
											
										</div>
										</div>

										<!-- Prepended text-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="contactNomobile ">Contact No(Mobile) </label>
										<div class="col-md-4">
											<div class="input-group">
											<span class="input-group-addon">+94</span>
											<input id="contactNomobile " name="contactNomobile " class="form-control" placeholder="Contact No(Mobile) " type="text">
											</div>
											
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="nicNo">National Identitity Card Number</label>  
										<div class="col-md-4">
										<input id="nicNo" name="nicNo" type="text" placeholder="National Identitity Card Number" class="form-control input-md" required="">
											
										</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<div class="form-group" style="text-align: left;">
										<label class="col-md-4 control-label" for="natinality">Nationality</label>
										<div class="col-md-4"> 
											<label class="radio-inline" for="natinality-0">
											<input type="radio" name="natinality" id="natinality-0" value="0" checked="checked">
											Sihnalees
											</label> 
											<label class="radio-inline" for="natinality-1">
											<input type="radio" name="natinality" id="natinality-1" value="1">
											Tamil
											</label> 
											<label class="radio-inline" for="natinality-2">
											<input type="radio" name="natinality" id="natinality-2" value="2">
											Musllum
											</label> 
											<label class="radio-inline" for="natinality-3">
											<input type="radio" name="natinality" id="natinality-3" value="3">
											Barger
											</label> 
											<label class="radio-inline" for="natinality-4">
											<input type="radio" name="natinality" id="natinality-4" value="4">
											Other
											</label>
										</div>
										</div>

										<!-- Multiple Radios -->
										<div class="form-group">
										<label class="col-md-4 control-label" for="sex">Sex</label>
										<div class="col-md-4">
										<div class="radio">
											<label for="sex-0">
											<input type="radio" name="sex" id="sex-0" value="0" checked="checked">
											Male
											</label>
											</div>
										<div class="radio">
											<label for="sex-1">
											<input type="radio" name="sex" id="sex-1" value="1">
											Female
											</label>
											</div>
										</div>
										</div>

										<!-- Multiple Radios -->
										<div class="form-group">
										<label class="col-md-4 control-label" for="civilState">Civil State</label>
										<div class="col-md-4">
										<div class="radio">
											<label for="civilState-0">
											<input type="radio" name="civilState" id="civilState-0" value="0" checked="checked">
											Married
											</label>
											</div>
										<div class="radio">
											<label for="civilState-1">
											<input type="radio" name="civilState" id="civilState-1" value="1">
											Unmarried
											</label>
											</div>
										</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										<label class="col-md-4 control-label" for="barcodeNo">Barcode No</label>  
										<div class="col-md-4">
										<input id="barcodeNo" name="barcodeNo" type="text" placeholder="Barcode No" class="form-control input-md">
											
										</div>
										</div>

										<!-- File Button --> 
										<div class="form-group">
										<label class="col-md-4 control-label" for="ProfilePic">Profile Picture</label>
										<div class="col-md-4">
											<input id="ProfilePic" name="ProfilePic" class="input-file" type="file">
										</div>
										</div>

										<!-- Button -->
										<div class="form-group">
										<label class="col-md-4 control-label" for="next"></label>
										<div class="col-md-4">
											<button id="next" name="next" class="btn btn-primary">Next</button>
										</div>
										</div>
 




















											<input type="button" name="next" class="next action-button" value="Next" />
											</fieldset>

											<fieldset>
											<h2 class="fs-title">Social Profiles</h2>
											<h3 class="fs-subtitle">Your presence on the social network</h3>
											<input type="text" name="twitter" placeholder="Twitter" />
											<input type="text" name="facebook" placeholder="Facebook" />
											<input type="text" name="gplus" placeholder="Google Plus" />
											<input type="button" name="previous" class="previous action-button" value="Previous" />
											<input type="button" name="next" class="next action-button" value="Next" />
											</fieldset>

											<fieldset>
											<h2 class="fs-title">Personal Detail</h2>
											<h3 class="fs-subtitle">We will never sell it</h3>
											<input type="text" name="fname" placeholder="First Name" />
											<input type="text" name="lname" placeholder="Last Name" />
											<input type="text" name="phone" placeholder="Phone" />
											<textarea name="address" placeholder="Address"></textarea>
											<input type="button" name="previous" class="previous action-button" value="Previous" />
											<input type="button" name="next" class="next action-button" value="Next" />
											</fieldset>

											
											<fieldset>
											<h2 class="fs-title">Personal Detail 2</h2>
											<h3 class="fs-subtitle">We will never sell it 2</h3>
											<input type="text" name="fname" placeholder="First Name" />
											<input type="text" name="lname" placeholder="Last Name" />
											<input type="text" name="phone" placeholder="Phone" />
											<textarea name="address" placeholder="Address"></textarea>
											<input type="button" name="previous" class="previous action-button" value="Previous" />
											<input type="submit" name="submit" class="submit action-button" value="Submit" />
											</fieldset>

										</div>
									</form>




									</div>

									<!-- Modal footer --> 
								</div>
								</div>
							</div>
							<!-- Premanent Employee The Modal -->
				

							<!-- Contract Employee  The Modal -->
							<div class="modal" id="myModal2">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Add Employee Form</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											Modal body..
										</div>

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>

									</div>
								</div>
							</div>
							<!-- Contract Employee  The Modal -->


							<!-- Trainees The Modal -->
							<div class="modal" id="myModal3">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Add Employee Form</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											Modal body........................
										</div>

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>

									</div>
								</div>
							</div>
							<!-- Trainees The Modal -->






					
				</div>
				
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
	<!-- /.content-wrapper -->
	





	

	<?php $this->load->view('components/footer'); ?>

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> 
  </aside> -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('components/js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>
//jQuery time
(function($) {
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  $(".next").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = (now * 50) + "%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'transform': 'scale(' + scale + ')'
        });
        next_fs.css({
          'left': left,
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

  $(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        //2. take current_fs to the right(50%) - from 0%
        left = ((1 - now) * 50) + "%";
        //3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'left': left
        });
        previous_fs.css({
          'transform': 'scale(' + scale + ')',
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

})(jQuery);

</script>
</body>
</html>
