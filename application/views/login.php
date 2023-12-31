<!DOCTYPE html>
<html lang="en" >

  
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport" />
<style>
    body, html {
      height: 100%;
    }
    #background{
    background-image: url("./public/img/new/ogin_image1.png");
    background-size: 100% 100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    /*background-size: contain;*/
    overflow: hidden;
    padding:30px;
    }
	.account-container{
		margin: 50px 60px 0 auto !important;
	}
	 @media only screen and (min-width: 300px) and (max-width: 500px)
	{ 
		.account-container {
    margin: 2px 0px 0 auto !important;
	}
	h1{
		font-size:25px !important;
		line-height:15px !important;
	 }
	 .username-field{
	 	margin-top:-22px !important;
	 }
	 .button {
	 	margin-top:10px !important;
	 }
	 .content {
    	padding: 16px 28px 0px !important;
	} 
	}
	@media only screen and (min-width: 500px) and (max-width: 1400px)
	{ 
		.account-container {
    margin-top: -10px !important;
	}
	
	}
	.bg_color{
            background: linear-gradient(90deg, #09A3D5 0.58%, #3B4BDF 100.03%) !important;

        }
	
</style>

    <meta charset="utf-8">
    <title>Assisted Living</title>
    
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <meta content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
	 <meta content="free live demo hms,free live demo Assisted Living,live demo,demo,live,Assisted Living live demo,Assisted Living free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,Assisted Living,hospital,management,system,solution,online demo,demo Assisted Living,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
	  <meta content="Jayson Sarino" name="author">

	  <meta property="og:site_name" content="Assisted Living Free Trial Demo">
	  <meta property="og:title" content="Assisted Living">
	  <meta property="og:description" content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
	  <meta property="og:type" content="website">
	  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
	 <!-- <meta property="og:url" content="http://hms-demo.jaysonsarino.com/"> -->
    
	<link href="<?php echo base_url()?>public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url()?>public/login/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="<?php echo base_url()?>public/login/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/login/css/pages/signin.css" rel="stylesheet" type="text/css">






<body id="background">
	<script src="<?php echo base_url()?>public/login/js/jquery-1.7.2.min.js"></script>
	<script language="javascript">
    $(document).ready(function(){
		
	});
    </script>
    


<div class="container" >



	
<br /><br /><br /><br /><br /><br /><br />
<div class="row">
	<div class="col-md-12">

				
				<div class="account-container">
					
					<div class="content clearfix" >
						
						
						<form action="<?php echo base_url()?>login/validate_login" method="post" id="frmLogin" name="frmLogin">

							<h1>Login</h1>		

							<div class="login-fields">
								
								<p>Please enter your username and passward</p>
				                <br>
				                <?php echo validation_errors(); ?>    

				                <?php 

				                if(isset($usernamelogin))
				                {
				                	$usernamelogin = $usernamelogin;
				                }else{
				                	$usernamelogin = "";
				                }

				                if(isset($passwordlogin))
				                {
				                	$passwordlogin = $passwordlogin;
				                }else{
				                	$passwordlogin = "";
				                }

				                ?>

								
								<div class="field">
									<label for="username">Username</label>
									
									<?php
										echo form_input("username",$usernamelogin,"class='login username-field' placeholder='Username' required");
										?>
				                </div> <!-- /field -->
								
								<div class="field">
									<label for="password">Password:</label>
				                    <input type="password" name="password" class="login password-field" placeholder="Password" required value="<?php echo $passwordlogin;?>" />
								</div> <!-- /password -->
								
							</div>
							<div class="login-actions">
								<button class="button btn btn-primary btn-large bg_color" >Log In</button>
							</div> <!-- .actions -->
						</form>
						
					</div> <!-- /content -->
					
				</div> <!-- /account-container -->
	</div>
</div>

</div>


</body>

</html>

