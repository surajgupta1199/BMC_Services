<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BMC Service</title>
    <meta name="description" content="BMC Services">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url()?>/apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url()?>/favicon.ico">


    <link rel="stylesheet" href="<?php echo base_url()?>/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <h4 style="color: #fff;font-weight: 600;font-size: 35px;">Wars No. 51</h4>
                        <!-- <img class="align-content" src="<?php echo base_url()?>/images/logo.png" alt=""> -->
                    </a>
                </div>
                <div class="login-form">
                    <form id="login-form" method="POST">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                <div id="response"></div>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url()?>/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/main.js"></script>
     <script src="<?php echo base_url()?>/assets/jquery/jquery.min.js"></script>

</body>

</html>

    <script type="text/javascript">
		$('#login-form').submit(function(e){
            e.preventDefault();
	      var formData = new FormData(this);
        $.ajax({
           url:"<?php echo base_url(); ?>admin_login/login", 
            type: "POST",
            data: formData,
            beforeSend: function(){
                  $("#response").html("<div class='progress'> <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width:100%'> Proccessing.. </div></div>");
            },
            success: function(response){
                if(response == 1) {
                    $("#response").html("<div class='alert bg-teal alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>Shortly you will redirect to your dashbard.</div>");
                    window.open('<?php echo base_url('Userdashboard') ?>', '_self');
                }
                else{
                   $("#response").html("<div class='alert bg-red alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>Email or Password is invalid </div>"); 
                }
                return false;
                
                
                // }
            },
            error: function(error){
                console.log(error);
            },
            cache: false,
            contentType: false,
             processData: false

         }); 

	    });
    </script>

