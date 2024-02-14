<!DOCTYPE html>
<html lang="en" >

  
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport" />
<style>
    body, html {
      height: 100%;
    }
    #background{
    background-image: url("./public/img/new/login_img.png");
    background-size: 100% 100% !important;
    height: 100%  !important;
    background-position: center;
    background-repeat: no-repeat;
    /*background-size: contain;*/
    overflow: hidden;
    padding:30px;
    }
	.account-container{
		/* margin: 50px 60px 0 auto !important;	 */
		
	}
	.clearfix{
		background: linear-gradient(rgba(0, 110, 211, 1),rgba(0, 0, 0, 0.25));
        width: 30%;
        height: 550px;
		position: fixed;
		left: 68%;
		top: 5%;
       border-radius: 30px;
       border: 2px; 
  
}
.layout1{
	position: fixed;
	top:85%;
	left:-3%;
}
.layout2{
	position: fixed;
	top: 40%;
	left:2%;
}

.head1{
font-family: 'Roboto';
font-size: 25px;
font-weight: 50px;
line-height: 113px;
letter-spacing: 0em;
margin-left: 60px;
/* text-align: left; */


}
.head2{
	font-family:'Montserrat';
font-size: 84px;
font-weight: 100px;
line-height: 44p;
text-align: left;


}
.img{
	position: fixed;
	top:10%;
	left:78%;
	
}
.head3{
	position: fixed;
	top:30%;
	left:79%;
	color: white;
}
.login-content{
	position: fixed;
	top: 40%;
	left: 73%;
	line-height: 70px;
}
.login-btn{
	position:fixed;
	top:75%;
	left:79%;
	
}
input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background: rgba(255,255,255,0.4);
  outline: none;
  /* background-color: white; */
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}

	
	 @media only screen and (min-width: 300px) and (max-width: 500px)
	{ 
	.clearfix {
    width: 80%; /* Adjust the width for smaller screens */
    left: 10%; /* Reset the left position for full width */
	top: 30%;
	height: 450px;
	margin-bottom: 50px;
    }
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
<form action="<?php echo base_url()?>login/validate_login" method="post" id="frmLogin" name="frmLogin">
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
<div class="row">
	<div class="col-md-12">
		<div class="layout1">
		<h3 class="head1" style="color: white;">Spero Healthcare Innovations Pvt. Ltd.</h3>
        </div>
		<div class="layout2">
         <h2 style="color: white;" class="head2">Assisted Living Facility</h2>
		</div>
<div class="clearfix">
<div class="img">
	<img src="<?=base_url()?>public/img/new/Spero.png" alt="Spero" height="28px" width="125px">
</div>
<div>
	<h3 class="head3">USER LOGIN</h3>
	<div class="login-content">
	<div class="col-xs-12 col-md-auto">
    <label>Username</label>
    <input type="text" placeholder="Username"  name="username">
    
</div>
<div class="col-xs-12 col-md-auto">
    <label class="sr-only" for="inlineFormInputGroup">Password</label>
    <div class="input-group mb-2">
        <span class="input-group-addon">@</span>
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
</div>

</div>
<div class="login-btn">
	<button type="submit" class="btn form-control btn-warning rounded submit px-3" name="login">LOGIN</button>
</div>
</div>
</div>
	</div>
</div>
</form>

</div>


</body>

</html>

