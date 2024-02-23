<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url()?>public/login/css/bootstrap3.4.1.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url()?>public/login/js/jquery3.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>public/login/js/bootstrap3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Assisted Living</title>
	<style>
		body, html { 
			height: 100%; margin: 0; 
		}
		#background { 
			background: url(./public/img/new/login_img.png) no-repeat center center fixed; 
			-webkit-background-size: cover; 
			-moz-background-size: cover; 
			-o-background-size: cover; 
			background-size: cover; 
		}
		.login-wrap {
			width: 80%;
			position: relative;
			background: linear-gradient(rgba(0, 110, 211, 1), rgba(0, 0, 0, 0.25));
			border-radius: 15px;
			padding: 30px; -webkit-box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
			-moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24); 
			box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%); 
			margin-top: 70px;
		}
		.login-wrap .img {
			width: 150px; 
			height: 100px; 
			border-radius: 25%; 
			margin: 0 auto; 
			margin-bottom: 20px; 
			background-size: cover; 
			background-repeat: no-repeat; 
			background-position: center center; 
		}
		.head2, .head3 { 
			font-family: 'Montserrat'; 
			font-weight: 100px; 
			color: white; 

		}
		.head2 {
			font-size: 58px !important; 
			line-height: 14%; 
			text-align: left; 
			margin-top: 100px; 
			
		}
		.head3 { 
			font-size: 25px !important; 
			line-height: 44p; 
			text-align: left; 
			margin-top: -20px !important; 
		}
		.input-group-addon {
			padding: 6px 12px;
			font-size: 14px;
			font-weight: 400;
			line-height: 1; 
			color: #555; 
			text-align: center; 
			background-color: #eee; 
			border: 1px solid #ccc; 
			border-radius: 4px; 
			background: linear-gradient(rgba(0, 110, 211, 1), rgba(0, 0, 0, 0.25)); 
		}
		.input-group .form-control {
			position: relative; 
			z-index: 2; 
			float: left; 
			width: 100%; 
			margin-bottom: 0; 
			border-left: none !important; 
			background: linear-gradient(rgba(0, 110, 211, 1), rgba(0, 0, 0, 0.25)); 
		}

@media screen and (min-width: 320px) and (max-width: 400px) {
  #background {
    background: url(./public/img/new/login_img.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  .login-wrap {
    width: 100%; /* Adjust the width as needed */
    margin-top: 40px; /* Adjust the margin-top as needed */
  }

  .head2 {
    font-size: 25px !important; /* Adjust the font size as needed */
    margin-top: 30px; /* Adjust the margin-top as needed */
	margin-left: 30px;
  }

  .head3 {
    font-size: 18px !important; /* Adjust the font size as needed */
    margin-top: 15px !important; /* Adjust the margin-top as needed */
  }

  .input-group-addon {
    font-size: 12px; /* Adjust the font size as needed */
  }
}
@media only screen and (min-width: 420px) and (max-width: 770px) {
   .login-wrap{ width: 100%;}
	h1 { font-size: 25px !important; line-height: 15px !important; } 
	.head2 { font-size: 35px !important; line-height: 44p; text-align: center !important; margin-top: 0px !important; } 
	.head3 { font-size: 20px !important; line-height: 44p; text-align: center !important; margin-top: 0px !important; } 
}
@media only screen and (min-width: 1024px) {
	#background { overflow: hidden !important;}
	.head2 { font-size: 58px !important; line-height: 44px; margin-top: 170px; }
	.head3 { font-size: 30px; line-height: 44px; margin-top: 0px; } 
}
       /* @media only screen and (min-width: 1320px) {
			#background { overflow: hidden !important;}
			.head2 { font-size: 65px; line-height: 44p; margin-top: 130px; } 
			.head3 { font-size: 23px; line-height: 44p; margin-top: -50px; } 
		} */

	</style>
</head>
<body id="background">
	<script src="<?php echo base_url()?>public/login/js/jquery-1.7.2.min.js"></script>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-md-7">
				<h1 class="heading-section head2">Assisted Living Facility</h1>
			</div>
			<div class="col-md-5">
				<div class="login-wrap py-5">
					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?=base_url()?>public/img/new/Spero.png); width: 150px;"></div>
					<h3 class="text-center mb-0" style="color: #fff; font-size: 15px;font-weight: bold;">USER LOGIN</h3>
					<form action="<?php echo base_url()?>login/validate_login" method="post" id="frmLogin" name="frmLogin">
						<?php 
						echo validation_errors(); 
						?>    
						<?php 
						$usernamelogin=isset($usernamelogin) ? $usernamelogin :''; 
						$passwordlogin=isset($passwordlogin) ? $passwordlogin :''; 
						?>
						<label style="color:#fff;">Username</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user" style="color:#fff;"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required value="<?php echo $usernamelogin;?>"/>
						</div>
						<p id="p3" style="color:red;"></p>
						<label style="color:#fff;">Password</label> 
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock" style="color:#fff;"></i></span>
							<input id="password" type="password" class="form-control" name="password" placeholder="Password" required value="<?php echo $passwordlogin;?>" />
						</div>
						<p style="color:red;"></p>
						<div class="form-group text-center ">
							<button type="submit" class="btn  rounded submit px-3 mt-3" name="login" style="background:rgba(32, 215, 194, 1); padding: 5px; width:140px; margin-top:30px;">LOGIN</button>
						</div>
					</form>
					<div class="w-100 text-center mt-4 text">
						<p class="mb-0"><br></p>
						<br>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-7">	
				<h1 class="heading-section head3">Spero Healthcare Innovations Pvt. Ltd.</h1>
			</div>
			<div class="col-md-5"></div>
		</div>
		<br /><br /><br /><br />
	</div>
</body>
</html>
