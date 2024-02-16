<!DOCTYPE html>
<html lang="en">


<head>
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<style>
		body,
		html {
			height: 100%;

		}


		#background {
			background-image: url("./public/img/new/login_img.png");
			background-size: 100% 100% !important;
			height: 100% !important;
			background-position: center;
			background-repeat: no-repeat;
			/*background-size: contain;*/
			/* overflow: auto; */
			padding: 30px;
		}


		.clearfix {
			background: linear-gradient(rgba(0, 110, 211, 1), rgba(0, 0, 0, 0.25));
			width: 30%;
			height: 450px;
			position: fixed;
			left: 67%;
			top: 13%;
			border-radius: 15px;
			border: 2px;
		}

		.layout1 {
			position: fixed;
			top: 82%;
			left: -3%;
		}

		.layout2 {
			position: fixed;
			top: 40%;
			left: 2%;
		}

		.head1 {
			font-family: 'Roboto';
			font-size: 23px;
			line-height: 113px;
			margin-left: 60px;
		}

		.head2 {
			font-family: 'Montserrat';
			font-size: 87px;
			font-weight: 100px;
			line-height: 44p;
			text-align: left;
		}

		.img {
			position: fixed;
			top: 12%;
			left: 77%;

		}

		.head3 {
			position: fixed;
			top: 27%;
			left: 78%;
			color: white;
			font-size: 15px;
			font-weight: bold;
		}

		.login-content {
			position: fixed;
			top: 33%;
			left: 74%;
			line-height: 70px;
		
		}

		.login-btn {
			position: fixed;
			top: 76%;
			left: 77%;

		}

		input[type=text] {
			width: 60% !important;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 12px;
			background: linear-gradient(rgba(0, 110, 211, 1), rgba(0, 0, 0, 0.25));
			color: #fff !important;
			outline: none;
			background-image: url('searchicon.png');
			border-left: none;

		}

		input[type=password] {
			width: 60% !important;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 12px;
			background: linear-gradient(rgba(0, 110, 211, 1), rgba(0, 0, 0, 0.25));
			color: #fff !important;
			outline: none;
			background-image: url('searchicon.png');
			border-left: none;
		}

		.input-group-addon {
			background: linear-gradient(rgba(0, 110, 211, 0.3), rgba(0, 0, 0, 0.25)) !important;

		}

		label {
			color: #fff;
		}

		.user-img {
			background-image: url("./public/img/new/user.png");
			width: 40px;


		}

		.input-group .input-group-addon {
			border-right: none;
		}



		@media only screen and (min-width: 300px) and (max-width: 500px) {
			.clearfix {
				width: 80%;
				left: 10%;
				top: 20%;
				height: 450px;
				margin-bottom: 50px;

			}

			.layout1 {
				/* position: absolute;
				top: 150%;
				left: -3%; */
				margin-top: 100px;
			}

			.layout2 {
				position: fixed;
				top: 5%;
				left: 12%;
			}

			.head1 {
				font-family: 'Roboto';
				font-size: 15px;
				line-height: 113px;
				margin-left: 60px;

			}

			.head2 {
				font-family: 'Montserrat';
				font-size: 25px;
				font-weight: bold;

				text-align: left;
			}

			.img {
				/* position: absolute;
				top: 21%;
				left: 35%; */
				margin-top: 30px;
				margin-left: -140px;
			}

			.spero_img {
				height: 55px;
				width: 100px;
			}

			.head3 {
				position: fixed;
				top: 34%;
				left: 36%;
				color: white;
				font-size: 12px;
			}

			input[type=text] {
				width: 73% !important;
			}

			input[type=password] {

				width: 73% !important;
			}

			.login-content {
				position:fixed;
				top: 41%;
				left: 21%;
				line-height: 70px;
				overflow: scroll !important;
			}

			.login-btn {
				position: fixed;
				top: 95%;
				left: 30%;

			}

		}


		@media screen and (min-width: 768px) and (max-width: 1240px) {

			.clearfix {
				background: linear-gradient(rgba(0, 110, 211, 1), rgba(0, 0, 0, 0.25));
				width: 37%;
				height: 400px !important;
				position: fixed;
				left: 60%;
				top: 6%;
				border-radius: 15px;
				border: 2px;
			}

			.layout1 {
				position: fixed;
				top: 78%;
				left: -2%;
			}

			.layout2 {
				position: fixed;
				top: 40%;
				left: 2%;
			}

			.head1 {
				font-family: 'Roboto';
				font-size: 20px;
				line-height: 90px;
				margin-left: 30px;
			}

			.head2 {
				font-family: 'Montserrat';
				font-size: 61px;
				font-weight: 100;
				line-height: 30px;
				text-align: left;
			}

			.img {
				position: fixed;
				top: 10%;
				left: 72%;
			}

			.head3 {
				position: fixed;
				top: 27%;
				left: 74%;
				color: white;
				font-size: 14px;
				font-weight: bold;
			}

			.login-content {
				position: fixed;
				top: 35%;
				left: 65%;
				line-height: 60px;
			}

			.login-btn {
				position: fixed;
				top: 85%;
				left: 71%;
			}

			input[type=text] {
				width: 80% !important;
				font-size: 10px;
			}

			input[type=password] {
				width: 80% !important;
				font-size: 10px;
			}

			.input-group-addon {
				background: linear-gradient(rgba(0, 110, 211, 0.3), rgba(0, 0, 0, 0.25)) !important;
				border-right: none;
			}

		}

		@media screen and (max-width: 768px) and (min-width: 700px) {
			.head2 {
				font-family: 'Montserrat';
				font-size: 47px;
				font-weight: 100;
				line-height: 30px;
				text-align: left;
			}
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

	<link href="<?php echo base_url() ?>public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url() ?>public/login/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	<link href="<?php echo base_url() ?>public/login/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>public/login/css/pages/signin.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>


<body id="background">
	<script src="<?php echo base_url() ?>public/login/js/jquery-1.7.2.min.js"></script>
	<script language="javascript">
		$(document).ready(function() {

		});
	</script>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="layout2">
					<h2 style="color: white;" class="head2">Assisted Living Facility</h2>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<form action="<?php echo base_url() ?>login/validate_login" method="post" id="frmLogin" name="frmLogin">
					<div class="clearfix">
						<div class="img">
							<img src="<?= base_url() ?>public/img/new/Spero.png" alt="Spero" height="28px" width="125px" class="spero_img">
						</div>
						<div>
							<h3 class="head3">USER LOGIN</h3>
							<?php

							if (isset($usernamelogin)) {
								$usernamelogin = $usernamelogin;
							} else {
								$usernamelogin = "";
							}

							if (isset($passwordlogin)) {
								$passwordlogin = $passwordlogin;
							} else {
								$passwordlogin = "";
							}

							?>
							<div class="login-content">
								<label style="color: #fff;">User Name</label>
								<div class="input-group">

									<span class="input-group-addon"><i class="glyphicon glyphicon-user" style="color:#fff;"></i></span>
									<input type="text" class="form-control" name="username" placeholder="Enter User ID" value="<?php echo $usernamelogin; ?>">

								</div>

								<label style="color: #fff;">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" style="color:#fff;"></i></span>
									<input id="password" type="password" class="form-control" name="password" placeholder=" Enter Password" required value="<?php echo $passwordlogin; ?>">
								</div>

							</div>
							<div class="login-btn">
								<button class="btn btn-outline-light" style="padding: 5px; width:140px; background:rgba(32, 215, 194, 1); font-weight:bold;">Submit</button>

							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="layout1">
					<h3 class="head1" style="color: white;">Spero Healthcare Innovations Pvt. Ltd.</h3>
				</div>
			</div>

		</div>
	</div>

</body>

</html>