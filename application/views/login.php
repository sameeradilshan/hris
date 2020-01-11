<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR Management Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
    <!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	
	<style type="text/css">
      .round_div{
      border: 2px solid #839192 !important;
      border-radius:25px !important;
      } 
      body {
      background-image: url("<?php echo base_url();?>assets\dist\img\human-resources-1.jpg") ; 
     
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover; 
      }
      
  </style>
  
    
    <style type="text/css">.true_input {
        visibility: hidden;
    }

    .error {
        color: red;
        font-size: 12px;
    }
	</style>
	
</head>

<body class="hold-transition login-page">
    <?php if ($this->session->flashdata('errmsg')){
	echo "<h3>$this->session->flashdata('errmsg')</h3>";
} ?>


    <div class="login-box">
        <div class="login-logo">

        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"></p>


                <?php echo validation_errors(); ?>
                <?php echo form_open('Login/LoginUser'); ?>

                <div class="form-group has-feedback">

                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>
                <div class="form-group has-feedback">

                    <input type="password" class="form-control" placeholder="Password" name="password" required>

                </div>
                <br>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                <?php echo form_close(); ?>
                <!-- /.social-auth-links -->
                </form>

                <p class="mb-1">
                    <a href="#">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center"></a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
    </script>

    <!-------------------------for validation part----------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script></script>


<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    
    <!-- -----------------------for validation part----------------------- -->

<script type="text/javascript">
  $(document).ready(function () {
      $("#form_action").validate({
          rules: {
              "email": {
                  required: true,
                  minlength: 1
                   }, 
              "password":{
                required:true, 
              }, 


          }
      });
  });
             



</script>  


</body>

</html>

