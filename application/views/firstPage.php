<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
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
    #wrap {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button {
        padding-left: 100px;
        width: 400px;
        height: 65px;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        color: #000;
        background-color: rgb(255, 209, 0);
        border: none;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        padding-top: 20px;
    }

    .button:hover {
        background-color: #339b03;
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.7);
        color: #fff;
        transform: translateY(-10px);
    }

    @media only screen and (max-width: 600px) {
        #header_font {
            font-size: 40px !important;
        }
    }
    </style>
</head>

<body class="hold-transition login-page">




    <div>

        <section class="welcome p-t-10" style="  background-image: url'(<?php echo base_url();?>assets/dist/img/photo1.png);
                 no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <br><br><br><br>
                        <h1 id="header_font" class="pb-2 display-4"
                            style="color: white;  font-size:75px; text-align:center">Welcome to Human Resource Managment
                            System</h1>
                        <br><br>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4">
                    </div>

                    <div id="wrap" class="col-md-4 col-lg-4 col-sm-12">
                        <a href="<?php echo base_url();?>index.php/login" class="button">Loging to system</a>
                    </div>


                    <div class="col-md-1 col-lg-1 col-sm-12">
                        <br><br><br><br><br><br><br><br><br>
                    </div>



                </div>
            </div>
        </section>

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
</body>

</html>
