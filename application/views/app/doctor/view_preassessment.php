<!DOCTYPE html>
<html>
<head><meta charset="euc-kr">
    <head>


        <title>Rehabilitation Center</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/Discharge Summarys, pharmaceutical management, billing and report generation and more. " name="description">
        <meta content="free live demo hms,free live demo Assisted Living,live demo,demo,live,Assisted Living live demo,Assisted Living free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,Assisted Living,hospital,management,system,solution,online demo,demo Assisted Living,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
        <meta content="Jayson Sarino" name="author">

        <meta property="og:site_name" content="Assisted Living Free Trial Demo">
        <meta property="og:title" content="Assisted Living">
        <meta property="og:description" content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/Discharge Summarys, pharmaceutical management, billing and report generation and more.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
        <meta property="og:url" content="http://hms-demo.jaysonsarino.com/">

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
        <!--------------------------------Start Custom css style-------------------------------------->    
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <!-- <link href="<?php echo base_url();?>public/css/custom.css" rel="stylesheet" type="text/css" /> -->
        <!--------------------------------End Custom css style-------------------------------------->
        <style>
            textarea{
                height: 34px !important;
            }
            .onlypreasses{
                display:block !important;
            }
            .btn.btn-circle {
                width: 23px !important;
                height: 23px !important;
                line-height: 23px !important;
                padding: 0;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
            }
            input.form-control.dis_inline {
                display: inline-block;
                width: 85%;
                margin: 2px;
            }
        </style>
        <?php /*require_once(APPPATH.'views/include/responsive_design.php');*/?>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <?php require_once(APPPATH.'views/include/sidebar.php');?>


            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>View Preassessment</h1>
                    <ol class="breadcrumb">
                       <!--  <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Member Management</a></li>
                        <li class="active">Member Registration</li> -->
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                 <script language="javascript">
                     function validate(){
                      if(document.getElementById("email").value == ""){
                       alert('You did not enter a valid Email Address');
                       return false;
                   }else{
                       if(confirm('Are you sure you want to save?')){
                        return true;
                    }else{
                        return false;
                    }
                }

                if(confirm('Are you sure you want to save?')){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        <div class="row">
          <div class="col-md-12">
            <!-- <form action="<?php echo base_url()?>app/doctor/preassessment_update" method="post" id="preassessment_form" enctype="multipart/form-data"> -->
      <input type="hidden" name="id" value="<?php echo $patientInfo[0]->preasses_id;?>">    
              <div class="box">

                        <div class="box-body">

                          <div class="nav-tabs-custom">
                             <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Personal Details</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Medications</a></li>
                                <li><a href="#tab_3" data-toggle="tab">General Examination</a></li>
                                                  <li><a href="#tab_4" data-toggle="tab">Psychological & Behavioural</a></li>
                                                    <li><a href="#tab_5" data-toggle="tab">Fall Risk Assessment</a></li>  
                                                    <!-- <li><a href="#tab_6" data-toggle="tab">Upload Assesment Form</a></li> --> 
                                                </ul>
                                                <div class="tab-content">
                                                 <div class="tab-pane active" id="tab_1">
                                                     <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tR>
                                                        <td colspan="2">
                                                            <?php echo validation_errors(); ?>    
                                                        </td>
                                                    </tR>
                                                    <?php echo $message;?>

                                                        <?php
                                                        /*$userID = $lastPreassesID->cValue;
                                                        $userID2 = $lastPreassesID->cValue;
                                                        if(strlen($userID) == 1){
                                                            $userID = "PREASSES0000".$userID;
                                                        }else if(strlen($userID) == 2){
                                                            $userID = "PREASSES000".$userID;
                                                        }else if(strlen($userID) == 3){
                                                            $userID = "PREASSES00".$userID;
                                                        }else if(strlen($userID) == 4){
                                                            $userID = "PREASSES0".$userID;
                                                        }else if(strlen($userID) == 5){
                                                            $userID = $userID;
                                                        }*/
                                                        ?>
                                                        <!-- <input type="hidden" name="userID2" value="<?php echo $userID2;?>"> -->
                                
                                                        <div class="panel panel-default">
                                                            <!-- <div class="panel-heading">
                                                                Panel Heading Container
                                                            </div> -->
                                                            <div class="panel-body">
                                                                <label>PERSONAL DETAILS OF APPLICANT</label>
                                                                <div class="row">
                                                                    <div class="row container form-group text-danger" >
                                                                        <div class="col-md-12">
                                                                            <label>Note :* (Marked Fields are Compulsory to fill)</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Preassessment No.</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control" name="preasses_no" required readonly value="<?php echo $patientInfo[0]->preasses_no;?>">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Applicant</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control alphaonly" name="applicant_name" value="<?php echo $patientInfo[0]->preasses_name?>" required>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email</label><span class="text-danger"></span></br>
                                                                            <input type="email" class="form-control" name="applicant_email" value="<?php echo $patientInfo[0]->preasses_email?>">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Date of Birth</label><span class="text-danger"></span></br>
                                                                            <input type="date" class="form-control" name="applicant_dob" value="<?php echo $patientInfo[0]->birthday?>" id="birthday" onchange = "calAge()">
                                                                    
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Age</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="applicant_age" value="<?php echo $patientInfo[0]->preasses_age?>" id="age">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Gender</label><span class="text-danger">*</span></br>
                                                                            <select name="applicant_gender" class="form-control" required>
                                                                              <option value="">- Gender -</option>
                                                                              <option value="Male" <?php if($patientInfo[0]->preasses_gender=="Male"){ echo "selected"; } ?>>Male</option>
                                                                              <option value="Female" <?php if($patientInfo[0]->preasses_gender=="Female"){ echo "selected"; } ?>>Female</option>
                                                                              <option value="Any Other" <?php if($patientInfo[0]->preasses_gender=="Any Other"){ echo "selected"; } ?>>Any Other</option>
                                                                            </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Permanent Address</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="applicant_add"> -->
                                                                             <textarea name="applicant_add" class="form-control"><?php echo $patientInfo[0]->preasses_add?></textarea> 
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Religion</label><span class="text-danger"></span></br>
                                                                            <select name="applicant_religion" id="religion" class="form-control">
                                                       
                                                  
                                                       <option value="Hindu" <?php if($patientInfo[0]->preasses_religion=="Hindu"){ echo "selected"; } ?>>Hindu</option>
                                                  
                                                      

                                                       <option value="Hindu">Hindu</option>
                                                       
                                                       <option value="Sikh">Sikh</option>
                                             
                                                       <option value="Buddha">Buddha</option>
                                                   
                                                       <option value="Islam">Islam</option>
                                                   
                                                       <option value="Christian">Christian</option>
                                                       
                                                       <option value="Jain">Jain</option>

                                             </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="applicant_mobile" value="<?php echo $patientInfo[0]->preasses_mobile?>">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Aadhar Number</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="applicant_aadhar" value="<?php echo $patientInfo[0]->preasses_aadhar?>" maxlength="12">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Marital Status</label><span class="text-danger"></span></br>
                                                                            <select name="applicant_marital" class="form-control input-sm">
                                                                               <option value="">- Marital Status -</option>
                                                                         
                                                                               <option value="Divorced" <?php if($patientInfo[0]->preasses_marital_status=="Divorced"){ echo "selected"; } ?>>Divorced</option>
                                                                          
                                                                               <option value="Legal Seperated" <?php if($patientInfo[0]->preasses_marital_status=="Legal Seperated"){ echo "selected"; } ?>>Legal Seperated</option>
                                                                         
                                                                               <option value="Married" <?php if($patientInfo[0]->preasses_marital_status=="Married"){ echo "selected"; } ?>>Married</option>
                                                                          
                                                                               <option value="Single" <?php if($patientInfo[0]->preasses_marital_status=="Single"){ echo "selected"; } ?>>Single</option>
                                                                           
                                                                               <option value="Widow" <?php if($patientInfo[0]->preasses_marital_status=="Widow"){ echo "selected"; } ?>>Widow</option>
                                                                          
                                                                               <option value="Widower" <?php if($patientInfo[0]->preasses_marital_status=="Widower"){ echo "selected"; } ?>>Widower</option>
                                                                            </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                <hr style="border-top: 2px solid #3B4BDF;"/>
                                                                <label>Family</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Father</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="father_name" value="<?php echo $patientInfo[0]->father?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Mother</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control alphaonly" name="mother_name" value="<?php echo $patientInfo[0]->mother?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Siblings</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="sublings_name" value="<?php echo $patientInfo[0]->sublings?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Spouse</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control alphaonly" name="spouse_name" value="<?php echo $patientInfo[0]->spouse_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact number of spouse</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" name="spouse_mobile" value="<?php echo $patientInfo[0]->spouse_mobile?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Permanent Address</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="family_add"> -->
                                                                                        <textarea name="family_add" class="form-control"><?php echo $patientInfo[0]->family_add?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <!--Start preasses common row structure-->
                                                                <label>DETAILS OF CHILDREN</label>

                                                                <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group wrapper-class" >
                                                                        <label></label><span class="text-danger"></span>
                                                               <!--  <button type="button" name="chl_add" id="chl_add" class="btn btn-primary">Add Child</button> -->
                                                                </div>
                                                            </div>
        
                                                            </div><!-- / row -->
                                                            <div id="chl_dynamic_field">

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div><!--/row-->
                                                                <?php
                                                                if(!empty($preasses_child)){

                                                                    foreach($preasses_child as $key_chl => $child){ $key_chl1 = $key_chl+1; ?>
                                                                <div class="row" id="rowchl<?=$key_chl1?>">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <input type="text" class="form-control" name="chl_name[]" value="<?=$child->chl_name?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <textarea name="chl_add[]" class="form-control"><?=$child->chl_add?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <input type="text" class="form-control" name="chl_mobile[]" value="<?=$child->chl_mobile?>">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-2">
                                                                        <div class="form-group wrapper-class" >
                                                                            <input type="email" class="form-control" name="chl_email[]" value="<?=$child->chl_email?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-1">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label><button type="button" class="btn_removechl btn btn-danger btn-circle btn-sm" name="remove" id="<?=$key_chl1?>"><span class="glyphicon glyphicon-minus"></span></button>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                            </div><!-- /row-->
                                                            <?php } }?>
                                                            <input type="hidden" value="<?php if(!empty($key_chl1)){ print($key_chl1);}else{ echo '0';}?>" id="chlcuont"></input>
                                                            </div><!--close chl_dynamic_field id div-->

                                                                
                                    <!--End preasses common row structure-->                            
                                                                <hr style="border-top: 2px solid #3B4BDF;"/>    

                                                                <label>Local Guardian</label>
                                                                <div class="row">                                          
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Local Guardian 1</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="guardian_name" value="<?php echo $patientInfo[0]->local_guardian_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                           <!-- <input type="text" class="form-control" name="guardian_add"> -->
                                                                             <textarea name="guardian_add" class="form-control"><?php echo $patientInfo[0]->guardian_add?></textarea> 
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" name="guardian_mobile" value="<?php echo $patientInfo[0]->guardian_mobile?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                           <input type="email" class="form-control" name="guardian_email" value="<?php echo $patientInfo[0]->guardian_email?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label> Name of Local Guardian 2</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="guardian_name2" value="<?php echo $patientInfo[0]->local_guardian_name2?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                             <textarea name="guardian_add2" class="form-control"><?php echo $patientInfo[0]->guardian_add2?></textarea> 
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" name="guardian_mobile2" value="<?php echo $patientInfo[0]->guardian_mobile2?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                           <input type="email" class="form-control" name="guardian_email2" value="<?php echo $patientInfo[0]->guardian_email2?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                
                                                                <hr style="border-top: 2px solid #3B4BDF;"/>
                                                                <label>Have you appointed a Power of Attorney (POA) and/or Health Care Proxy (HCP)</label>
                                                                <select name="appointment_poa" class="form-control">
                                                                    <option value=""> Select POA & HCP</option>
                                                                  <option value="Yes" <?php if($patientInfo[0]->appointment_poa=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                  <option value="No" <?php if($patientInfo[0]->appointment_poa=="No") { echo "selected"; } ?>>No</option>
                                                                </select><br>
                                                                <div class="row">                                          
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of POA /HCP holder</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="poa_name" value="<?php echo $patientInfo[0]->poa_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" name="poa_mobile" value="<?php echo $patientInfo[0]->poa_mobile?>"> 
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                            <input type="email" class="form-control" name="poa_email" value="<?php echo $patientInfo[0]->poa_email?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                           <!-- <input type="text" class="form-control" name="poa_add"> -->
                                                                            <textarea name="poa_add" class="form-control"><?php echo $patientInfo[0]->poa_add?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                
                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <label>TREATING DOCTOR</label>
                                                                <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group wrapper-class" >
                                                                        <label></label><span class="text-danger"></span>
                                                                <!-- <button type="button" name="add2" id="td_add" class="btn btn-primary">Add Doctor</button> -->
                                                                </div>
                                                            </div>
        
                                                            </div><!-- / row -->
                                                               
                                                            <div id="td_dynamic_field">

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Doctor</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Clinic/Hospital Name</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div><!--/row-->
                                                                <?php
                                                                if(!empty($preasses_doctor)){

                                                                    foreach($preasses_doctor as $key_dr => $doctor){ $key_dr1 = $key_dr+1; ?>
                                                                <div class="row" id="rowdr<?=$key_dr1?>">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <input type="text" class="form-control" name="doctor_name[]" value="<?=$doctor->tdoctor_name?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <input type="text" class="form-control" name="doctor_mobile[]" value="<?=$doctor->tdoctor_mobile?>">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <input type="email" class="form-control" name="doctor_email[]" value="<?=$doctor->tdoctor_email?>">
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-md-2">
                                                                        <div class="form-group wrapper-class" >
                                                                            <input type="text" class="form-control" name="hospital_name[]" value="<?=$doctor->hospital_name?>">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-1">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label><button type="button" class="btn_removedr btn btn-danger btn-circle btn-sm" name="remove" id="<?=$key_dr1?>"><span class="glyphicon glyphicon-minus"></span></button></label>
                                                                        </div>
                                                                    </div>
                                                            </div><!-- /row-->
                                                            <?php } }?>
                                                            <input type="hidden" value="<?php if(!empty($key_dr1)){ print($key_dr1);}else{ echo '0';}?>" id="doctorcuont"></input>
                                                            </div><!--close td_dynamic_field id div-->



                                                                <hr style="border-top: 2px solid #3B4BDF;"/>
                                                                 

                                                                <div class="row">
                                                                   
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>DIAGNOSIS</label><span class="text-danger"></span></br>
                                                                            <!-- <button type="button" required name="add1" id="add1" class="btn btn-primary">Add Diagnosis</button> -->
                                                                            <?php $diagnosis = @explode(',',$patientInfo[0]->diagnosis); foreach($diagnosis as $key_dg => $diagnosis1){ $key_dg1 = $key_dg+1; ?>
                                                                            <div id="dynamic_field1">

                                                                                <div id="row1<?=$key_dg1?>"> 
                                                                <label" for="member_<?=$key_dg1?>"> </label> 
                                                                <input type="text" class="form-control dis_inline" name="diagnosis[].." value="<?=$diagnosis1?>">
                                                                <button type="button" class="btn_remove1 btn btn-danger btn-circle btn-sm" name="remove" id="<?=$key_dg1?>"><span class="glyphicon glyphicon-minus"></span></button>
                                                            </div>
                                                                            </div><!--close dynamic_field1 id-->
                                                                            <?php }?>
                                                                            <input type="hidden" value="<?php if(!empty($key_dg1)){ print($key_dg1);}else{ echo '0';}?>" id="diagnosiscuont"></input>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <label>CASE HISTORY</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Present Complaints</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                                                            <textarea name="present_complaints" class="form-control"><?php echo $patientInfo[0]->present_complaints?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Past History</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="past_history"> -->
                                                                              <textarea name="past_history" class="form-control"><?php echo $patientInfo[0]->past_history?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>
    

                                                            </div>

            <!-- <div class="panel-footer">
                Panel Footer Container
            </div> -->
        </div>
        
                            </table>
                        </div>
                        <div class="tab-pane" id="tab_2">
                                             <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group wrapper-class" >
                                                        <label>DETAILS OF CURRENT MEDICATIONS</label><span class="text-danger"></span></br>
                                                            <!-- <button type="button" name="add" id="add" class="btn btn-primary">Add Medicine</button> -->
                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                    </div><!-- /.form-group wrapper-class -->
                                                </div><!-- /.col-md-3 -->
                                             </div><!-- / row -->
                                            <div class="table-responsive">
                                             <table class="table table-striped">
                                                <tr>
                                                   <!-- <th>No.</th> --> <th>Name of Medicine</th><th>Dose</th><th>Frequency</th><th>Duration</th><th>Action</th>
                                                </tr>
                                                 <tbody id="dynamic_field">
                                                    <?php
      if(!empty($preasses_medicine)){

      foreach($preasses_medicine as $key => $medicine){ $key1 = $key+1; ?>
        <tr id="row<?=$key1?>">
          <!-- <td></td> --><td><input type="text" class="form-control" name="medicine_name[]" value="<?=$medicine->medicine?>"></td><td><input type="text" class="form-control" name="dose[]" value="<?=$medicine->dose?>"></td><td><input type="text" class="form-control" name="frequency[]" value="<?=$medicine->frequency?>"></td><td><input type="text" class="form-control" name="duration[]" value="<?=$medicine->duration?>"></td><td><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="<?=$key1?>"><span class="glyphicon glyphicon-minus"></span></button></td>
        </tr>
        <?php } }?>
        <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="medicinecuont"></input>
                                                    </tbody>
                                             </table>
                                            </div>

                                            <hr style="border-top: 2px solid #3B4BDF;"/>

                                            <label>ALLERGIES</label>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Drug</label><span class="text-danger"></span></br>
                                                                           <select name="drug" id="drug" class="form-control drug_menu">
                                                                            <option value="">Select Drug</option>
                                                                              <option value="Yes" <?php if($patientInfo[0]->drug_name=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->drug_name=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3" id="drugfld" style="display: none;">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label></label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="drugfld" value="<?php echo $patientInfo[0]->drug_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->


                                                                    <!-- <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Drug</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="drug" value="<?php echo $patientInfo[0]->drug_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span> 
                                                                        </div>
                                                                    </div> --><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Food</label><span class="text-danger"></span></br>
                                                                           <select name="food" id="food" class="form-control food_menu">
                                                                            <option value="">Select Food</option>
                                                                              <option value="Yes" <?php if($patientInfo[0]->food=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->food=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3" id="foodfld" style="display: none;">
                                                                        <div class="form-group wrapper-class" id="foodfld">
                                                                            <label></label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="foodfld" value="<?php echo $patientInfo[0]->food?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <!-- <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Food</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="food" value="<?php echo $patientInfo[0]->food?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div>
                                                                    </div> --><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Any Other</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="any_other" value="<?php echo $patientInfo[0]->any_other?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Deworming medicine last taken on Date</label><span class="text-danger"></span></br>
                                                                            <input type="date" class="form-control" name="last_taken_medicine_date" value="<?php echo $patientInfo[0]->last_taken_medicine_date?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <div class="row">

                                                                    <div class="col-md-12">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>IMMUNIZATION HISTORY</label></br>                         
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                 </div><!-- / row -->

                                                                <div class="table-responsive">      
                                                                <table class="table table-striped">
                                                                <tr>
                                                                  <th>Type of Vaccine</th><th>Name of vaccine</th><th>Date given</th><th>Next due date </th>
                                                                </tr>
                                                                <?php
      if(!empty($preasses_immunization_his)){

      foreach($preasses_immunization_his as $immunze_key => $immunize_his){  
        if($immunze_key=='0')
        { ?>
        <tr>
          <td>Tetanus</td><td><input type="text" name="tetanus_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>"></td><td><input type="date" name="tetanus_date" class="form-control" value="<?php echo $immunize_his->given_date?>"></td><td><input type="date" name="tetanus_due_date" class="form-control" value="<?php echo $immunize_his->due_date?>"></td>
          <input type="hidden" value="<?php echo $immunize_his->id ?>" name="tetanus_id">
        </tr>
      <?php }
      if($immunze_key=='1')
        { ?>
         <tr>
      <td>Influenza</td><td><input type="text" name="influenza_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>"></td><td><input type="date" name="influenza_date" class="form-control" value="<?php echo $immunize_his->given_date?>"></td><td><input type="date" name="influenza_due_date" class="form-control" value="<?php echo $immunize_his->due_date?>"></td>
      <input type="hidden" value="<?php echo $immunize_his->id ?>" name="influenza_id">
    </tr>
      <?php }
      if($immunze_key=='2')
        { ?>
        <tr>
      <td>Pneumococcal</td><td><input type="text" name="pneumococcal_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>"></td><td><input type="date" name="pneumococcal_date"class="form-control" value="<?php echo $immunize_his->given_date?>"></td><td><input type="date" name="pneumococcal_due_date"class="form-control" value="<?php echo $immunize_his->due_date?>"></td>
       <input type="hidden" value="<?php echo $immunize_his->id ?>" name="pneumococcal_id">
    </tr>
      <?php } 
      if($immunze_key=='3')
        { ?>
        <tr>
      <td>Typhoid</td><td><input type="text" name="typhoid_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>"></td><td><input type="date" name="typhoid_date" class="form-control" value="<?php echo $immunize_his->given_date?>"></td><td><input type="date" name="typhoid_due_date" class="form-control" value="<?php echo $immunize_his->due_date?>"></td>
       <input type="hidden" value="<?php echo $immunize_his->id ?>" name="typhoid_id">
    </tr>    
      <?php }
      if($immunze_key=='4')
        { ?>
        <tr>
      <td>COVID19</td><td></td><td class="row">
                                                                <label class="col-sm-2" style="margin-top:3px;">1<sup>st</sup></label><input type="text" name="covid_vac_1" value="<?php echo $immunize_his->covid_vac_1;?>" class="form-control col-sm-2" style="width:450px;margin-top:3px;">
                                                                        <label class="col-sm-2" style="margin-top:3px;">2<sup>nd</sup></label><input type="text" name="covid_vac_2" value="<?php echo $immunize_his->covid_vac_2;?>" class="form-control col-sm-2" style="width:450px;margin-top:3px;">
                                                                        <label class="col-sm-2" style="margin-top:3px;">3<sup>rd</sup></label><input type="text" name="covid_vac_3" value="<?php echo $immunize_his->covid_vac_3;?>" class="form-control col-sm-2" style="width:450px;margin-top:3px;">

        </td><td></td>
       <input type="hidden" value="<?php echo $immunize_his->id ?>" name="covid_id">
    </tr>    
      <?php } ?>
        
        <?php } }?>    
                                                              </table>
                                                            </div>

                                                                 <hr style="border-top: 2px solid #3B4BDF;"/>

                         </div>
                                            <div class="tab-pane" id="tab_3">
                                                <label>GENERAL EXAMINATION</label>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Head</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="head" value="<?php echo $patientInfo[0]->head?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Neck</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="neck" value="<?php echo $patientInfo[0]->neck?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Ears</label>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Hearing</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="hearing" value="<?php echo $patientInfo[0]->hearing; ?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Hearing Aid</label><span class="text-danger"></span></br>
                                                                           <select name="hearaid" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->hearing_aid=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->hearing_aid=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Nose</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="nose" value="<?php echo $patientInfo[0]->nose?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Throat</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="throat" value="<?php echo $patientInfo[0]->throat?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Eye</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Vision</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="vision" value="<?php echo $patientInfo[0]->vision?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Spectacles</label><span class="text-danger"></span></br>
                                                                           <select name="spectacles" class="form-control">
                                                                           <option value="">Select Spectacles</option>
                                                                              <option value="Yes" <?php if($patientInfo[0]->spectacles=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->spectacles=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Cataract</label><span class="text-danger"></span></br>
                                                                            <select name="cataract" class="form-control">
                                                                            <option value="">Select Cataract</option>
                                                                              <option value="Right" <?php if($patientInfo[0]->cataract=="Right") { echo "selected"; } ?>>Right</option>
                                                                              <option value="Left" <?php if($patientInfo[0]->cataract=="Left") { echo "selected"; } ?>>Left</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Glaucoma</label><span class="text-danger"></span></br>
                                                                           <select name="glaucoma" class="form-control">
                                                                           <option value="">Select Glaucoma</option>
                                                                              <option value="Yes" <?php if($patientInfo[0]->glaucoma=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->glaucoma=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Oral Exam</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="oral" value="<?php echo $patientInfo[0]->oral_exam?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Ulcers / Tumour</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="tumour" value="<?php echo $patientInfo[0]->tumour?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dental exam</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="dental" value="<?php echo $patientInfo[0]->dental_exam?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dentures</label><span class="text-danger"></span></br>
                                                                            <select name="dentures" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->dentures=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->dentures=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Tongue</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="tongue" value="<?php echo $patientInfo[0]->tongue?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Skin</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="skin" value="<?php echo $patientInfo[0]->skin?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Petechial Haemorrhages</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="potechial" value="<?php echo $patientInfo[0]->potenchial?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bruises</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="bruises" value="<?php echo $patientInfo[0]->bruises?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Rashes</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="rashes" value="<?php echo $patientInfo[0]->rashes?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bed sore</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="bed_sore" value="<?php echo $patientInfo[0]->bed_sore?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Pedal Oedema</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="pedal_oedema" value="<?php echo $patientInfo[0]->pedal_oedema?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>DVT</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="dvt" value="<?php echo $patientInfo[0]->dvt?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Varicose Veins</label><span class="text-danger"></span></br>
                                                                          <input type="text" class="form-control" name="varicose_veins" value="<?php echo $patientInfo[0]->varicose_veins?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Foot Examination</label><span class="text-danger"></span></br>
                                                                         <!-- <input type="text" class="form-control" name="foot"> -->
                                                                         <textarea name="foot" class="form-control"><?php echo $patientInfo[0]->foot_exam?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <label>PERSONAL HISTORY</label>
                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Diet</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="diet" value="<?php echo $patientInfo[0]->diet?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Habits</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="habits" value="<?php echo $patientInfo[0]->habits?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Exercise</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="exercise" value="<?php echo $patientInfo[0]->exercise?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Does the patient is recommended physiotherapy or rehabilitation services?</label><span class="text-danger"></span></br>
                                                                            <select name="physiotherapy" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->physiotherapy_service=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->physiotherapy_service=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <label>PHYSICAL EXAMINATION</label><br>
                                                                <label>Vitals</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Temp</label><span class="text-danger"></span></br>
                                                                           <input type="number" class="form-control" name="temp" value="<?php echo $patientInfo[0]->temp?>" placeholder="Enter 82 to 110">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Pulse</label><span class="text-danger"></span></br>
                                                                            <input type="number" class="form-control" name="pulse" value="<?php echo $patientInfo[0]->pulse?>" placeholder="Enter 60 to 100">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>BP</label><span class="text-danger"></span></br>
                                                                            <input type="number" class="form-control" name="bp" value="<?php echo $patientInfo[0]->bp?>" placeholder="Enter 100 to 300">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>RR</label><span class="text-danger"></span></br>
                                                                           <input type="number" class="form-control" name="rr" value="<?php echo $patientInfo[0]->rr?>" placeholder="Enter 12 to 18">
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>SPO2</label><span class="text-danger"></span></br>
                                                                           <input type="number" class="form-control" name="spo2" value="<?php echo $patientInfo[0]->spo2?>" placeholder="Enter 95 to 100">
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Appearance</label><span class="text-danger"></span></br>
                                                                            <select name="appearance" class="form-control">
                                                                            <option value="">Select Appearance</option>
                                                                              <option value="Normal">Normal</option>
                                                                              <option value="Obese">Obese</option>
                                                                              <option value="Frail">Frail</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                 <label>SYSTEMIC EXAMINATION</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Respiratory System</label><span class="text-danger"></span></br>
                                                                           <textarea name="respirate_sys" class="form-control"><?php echo $patientInfo[0]->rs?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Cardiovascular system</label><span class="text-danger"></span></br>
                                                                             <textarea name="cardiovascular_sys" class="form-control"><?php echo $patientInfo[0]->cardiovascular_sys?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Gastrointestinal System</label><span class="text-danger"></span></br>
                                                                            <textarea name="gastrointestinal_sys" class="form-control"><?php echo $patientInfo[0]->gastrointestinal_sys?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Genito Urinary System</label><span class="text-danger"></span></br>
                                                                          <textarea name="genito_urinary_sys" class="form-control"><?php echo $patientInfo[0]->genito_urinary_sys?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Neurological System</label><span class="text-danger"></span></br>
                                                                          <textarea name="neurological_sys" class="form-control"><?php echo $patientInfo[0]->neurological_sys?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Musculoskeletal system</label><span class="text-danger"></span></br>
                                                                             <textarea name="musculoskeletal_sys" class="form-control"><?php echo $patientInfo[0]->musculoskeletal_sys?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>
                                            
                </div>
                <div class="tab-pane" id="tab_4">
                        <label>PSYCHOLOGICAL & BEHAVIOURAL CONDITION</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Agitation & Aggression</label><span class="text-danger">*</span></br>
                                                                             <select name="aggression" class="form-control" required>
                                                                                <option value=""> Select Agitation & Aggression</option>
                                                                              <option value="NA" <?php if($patientInfo[0]->aggression=="NA") { echo "selected"; } ?>>NA</option>
  <option value="Occasionally" <?php if($patientInfo[0]->aggression=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Frequent" <?php if($patientInfo[0]->aggression=="Frequent") { echo "selected"; } ?>>Frequent</option>
  <option value="Always" <?php if($patientInfo[0]->aggression=="Always") { echo "selected"; } ?>>Always</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Violence</label><span class="text-danger">*</span></br>
                                                                            <select name="Violence" class="form-control" required>
                                                                                <option value=""> Select Violence</option>
                                                                              <option value="No" <?php if($patientInfo[0]->violence=="No") { echo "selected"; } ?>>No</option>
  <option value="May Self Inflict" <?php if($patientInfo[0]->violence=="May Self Inflict") { echo "selected"; } ?>>May Self Inflict</option>
  <option value="Verbally Abusive" <?php if($patientInfo[0]->violence=="Verbally Abusive") { echo "selected"; } ?>>Verbally Abusive</option>
  <option value="Physically Abusive" <?php if($patientInfo[0]->violence=="Physically Abusive") { echo "selected"; } ?>>Physically Abusive</option>
  <option value="Has Suicidal Ideation" <?php if($patientInfo[0]->violence=="Has Suicidal Ideation") { echo "selected"; } ?>>Has Suicidal Ideation</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Need of Bed Restrain</label><span class="text-danger">*</span></br>
                                                                            <select name="bed_restrain" class="form-control" required>
                                                                                <option value=""> Select Need of Bed Restrain</option>
                                                                              <option value="No" <?php if($patientInfo[0]->bed_restrain=="No") { echo "selected"; } ?>>No</option>
  <option value="Required Temporarily" <?php if($patientInfo[0]->bed_restrain=="Required Temporarily") { echo "selected"; } ?>>Required Temporarily</option>
  <option value="Occasionally" <?php if($patientInfo[0]->bed_restrain=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Permanent" <?php if($patientInfo[0]->bed_restrain=="Permanent") { echo "selected"; } ?>>Permanent</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Wandering</label><span class="text-danger">*</span></br>
                                                                            <select name="wandering" class="form-control" required>
                                                                                <option value=""> Select Wandering</option>
                                                                              <option value="No" <?php if($patientInfo[0]->wandering=="No") { echo "selected"; } ?>>No</option>
  <option value="Occasionally" <?php if($patientInfo[0]->wandering=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Always" <?php if($patientInfo[0]->wandering=="Always") { echo "selected"; } ?>>Always</option>
  <option value="Day Time" <?php if($patientInfo[0]->wandering=="Day Time") { echo "selected"; } ?>>Day Time</option>
  <option value="Night Time" <?php if($patientInfo[0]->wandering=="Night Time") { echo "selected"; } ?>>Night Time</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Sleep</label><span class="text-danger">*</span></br>
                                                                            <select name="sleep" class="form-control" required>
                                                                                <option value=""> Select Sleep</option>
                                                                              <option value="Able to sleep" <?php if($patientInfo[0]->sleep=="Able to sleep") { echo "selected"; } ?>>Able to sleep</option>
  <option value="Relies on sleeping pills" <?php if($patientInfo[0]->sleep=="Relies on sleeping pills") { echo "selected"; } ?>>Relies on sleeping pills</option>
  <option value="Required sedation" <?php if($patientInfo[0]->sleep=="Required sedation") { echo "selected"; } ?>>Required sedation</option>
  <option value="Chronic sleep issues" <?php if($patientInfo[0]->sleep=="Chronic sleep issues") { echo "selected"; } ?>>Chronic sleep issues</option>
</select>

                                                                            
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Inappropriate Behaviour with Care</label><span class="text-danger">*</span></br>
                                                                           <select name="giver_care" class="form-control" required>
                                                                            <option value="">Select Inappropriate Behaviour with Care</option>
                                                                              <option value="NA" <?php if($patientInfo[0]->giver_care=="NA") { echo "selected"; } ?>>NA</option>
  <option value="Occasionally" <?php if($patientInfo[0]->giver_care=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Always" <?php if($patientInfo[0]->giver_care=="Always") { echo "selected"; } ?>>Always</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                    <!--End preasses common row structure-->                            
                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Diagnostic Tests</label><span class="text-danger"></span></br>
                                                                             <textarea name="diagnostic_test" class="form-control"><?php echo $patientInfo[0]->diagnostic_test?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <label>TYPICAL DAY OF APPLICANT</label><br>
                                                                <label>Morning hours</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Wake up time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="wake_up_time" value="<?php echo $patientInfo[0]->wake_up_time?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Washroom</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="washroom" value="<?php echo $patientInfo[0]->washroom?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Breakfast time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="breakfast_time" value="<?php echo $patientInfo[0]->breakfast_time?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Exercises</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="exercises" value="<?php echo $patientInfo[0]->exercises?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Social</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="morning_social" value="<?php echo $patientInfo[0]->morning_social?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Afternoon hours</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Lunch</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="lunch" value="<?php echo $patientInfo[0]->lunch?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Afternoon nap</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="afternoon_nap" value="<?php echo $patientInfo[0]->afternoon_nap?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Evening hours</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Walk/sitting outside</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="walk_sitting_outside" value="<?php echo $patientInfo[0]->walk_sitting_outside?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Tea/coffee/snacks time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="tea_snacks_time" value="<?php echo $patientInfo[0]->tea_snacks_time?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Social</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="eve_social" value="<?php echo $patientInfo[0]->eve_social?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Any other</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="eve_any_other" value="<?php echo $patientInfo[0]->eve_any_other?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    
                                                                </div><!-- / row -->
                                                                <label>Late evening/night</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Recreational</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="recreational" value="<?php echo $patientInfo[0]->recreational?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Reading</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="reading" value="<?php echo $patientInfo[0]->reading?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dinner</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="dinner" value="<?php echo $patientInfo[0]->dinner?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Any other</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="night_any_other" value="<?php echo $patientInfo[0]->night_any_other?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Light off time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="light_off_time" value="<?php echo $patientInfo[0]->light_off_time?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Describe any other activities</label><span class="text-danger"></span></br>
                                                                             <textarea name="describe_any_other_activity" class="form-control"><?php echo $patientInfo[0]->describe_any_other_activity?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                            <label>Short portable mental status questionnaire(SPMSQ) Test</label><br><br>
                                                            <div class="table-responsive">      
                                                                <table class="table table-striped">
                                                                <tr>
                                                                  <th>0-2 errors = Intact intellectual functioning</th><th>5-7 errors = Moderate intellectual impairment</th>
                                                                </tr>
                                                                <tr>
                                                                  <td>3-4 errors = Mild intellectual impairment</td><td>8-10 errors = Severe intellectual impairment</td>
                                                                </tr>
                                                                </table>
                                                            </div>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Total no. of error</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="total_no_error" value="<?php echo $patientInfo[0]->total_no_of_error?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                            <label>CLOCK DRAWING TEST</label>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Score</label><span class="text-danger"></span></br>
                                                                              <input type="text" class="form-control numberonly" name="clock_score" value="<?php echo $patientInfo[0]->clock_score?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Remark</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="clock_remark" value="<?php echo $patientInfo[0]->clock_remark?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <label>GERIATRIC DEPRESSION SCALE</label><br><br>
                                                                <div class="table-responsive">      
                                                                    <table class="table table-striped">
                                                                    <tr>
                                                                      <th class="text-center">Score 1 point for each positive answer</th>
                                                                    </tr>
                                                                    <tr>
                                                                      <td class="text-center">Cut-off: normal 0-5,&nbsp;&nbsp;above 5 suggests depression</td>
                                                                    </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Score</label><span class="text-danger"></span></br>
                                                                              <input type="text" class="form-control numberonly" name="geriatric_score" value="<?php echo $patientInfo[0]->geriatric_score?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Remark</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="geriatric_remark" value="<?php echo $patientInfo[0]->geriatric_remark?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                <label>BARTHEL INDEX</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bowels Score</label><span class="text-danger">*</span></br>
                                                                              <input type="text" class="form-control numberonly bi1number" name="bowels_score" value="<?php echo $patientInfo[0]->bowels_score?>" id="bowels_score" onkeyup="barthelFunc()" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bladder Score</label><span class="text-danger">*</span></br>
                                                                             <input type="text" class="form-control numberonly bi1number" name="bladder_score" value="<?php echo $patientInfo[0]->bladder_score?>" id="bladder_score" onkeyup="barthelFunc()" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Toilet Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi1number" name="toilet_score" value="<?php echo $patientInfo[0]->toilet_score?>" onkeyup="barthelFunc()" id="toilet_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bathing Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi2number" name="bathing_score" value="<?php echo $patientInfo[0]->bathing_score?>" onkeyup="barthelFunc()" id="bathing_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Grooming Score</label><span class="text-danger">*</span></br>
                                                                           <input type="text" class="form-control numberonly bi2number" name="grooming_score" value="<?php echo $patientInfo[0]->grooming_score?>" onkeyup="barthelFunc()" id="grooming_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dressing Score</label><span class="text-danger">*</span></br>
                                                                          <input type="text" class="form-control numberonly bi1number" name="dressing_score" value="<?php echo $patientInfo[0]->dressing_score?>" onkeyup="barthelFunc()" id="dressing_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Feeding Score</label><span class="text-danger">*</span></br>
                                                                             <input type="text" class="form-control numberonly bi1number" name="feeding_score" value="<?php echo $patientInfo[0]->feeding_score?>" onkeyup="barthelFunc()" id="feeding_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Transfer Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi3number" name="transfer_score" value="<?php echo $patientInfo[0]->transfer_score?>" onkeyup="barthelFunc()" id="transfer_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Mobility Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi3number" name="mobility_score" value="<?php echo $patientInfo[0]->mobility_score?>" onkeyup="barthelFunc()" id="mobility_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Stairs Score</label><span class="text-danger">*</span></br>
                                                                           <input type="text" class="form-control numberonly bi1number" name="stairs_score" value="<?php echo $patientInfo[0]->stairs_score?>" onkeyup="barthelFunc()" id="stairs_score" required maxlength="1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Total Score</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="barthel_total_score" value="<?php echo $patientInfo[0]->total_barthel_score?>" id="barthel_total_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                 <hr style="border-top: 2px solid #3B4BDF;"/>
                   
                                                </div>
                                                <div class="tab-pane" id="tab_5">
                                                    <label><h4>Fall Risk Assessment</h4></label>
                                                    <div class="table-responsive">      
        <table class="table table-striped">
        <tr>
          <th>Questions<?php /*print_r($preasses_fallrisk_quest);*/ ?></th><th>Answer</th>
        </tr>
        <?php
        for($qtn=0;$qtn<count($preasses_fallrisk_quest);$qtn++)
        {

            if($qtn=="0")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="past_year_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio past_year" name="past_year" value="2" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="past_year" class="chkradio past_year" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="1")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="use_stick_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio use_stick" name="use_stick" value="2" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="use_stick" class="chkradio use_stick" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="2")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="feel_stable_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="feel_stable" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="feel_stable" class="chkradio past_year" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="3")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="steady_holding_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="steady_holding" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="steady_holding" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="4")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="worry_fall_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="worry_fall" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="worry_fall" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="5")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="from_chair_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="from_chair" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="from_chair" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="6")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="curb_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="curb" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="curb" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="7")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="toilet_rush_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="toilet_rush" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="toilet_rush" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="8")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="lost_feet_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="lost_feet" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="lost_feet" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="9")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="light_headed_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="light_headed" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="light_headed" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="10")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="take_medicine_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="take_medicine" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="take_medicine" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="11")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="feel_sad_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="feel_sad" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="feel_sad" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="12")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="fall_total_score_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td>
                  <input type="text" name="fall_total_score" id="fall_total_score" class="form-control" placeholder="Enter Total Score" value="<?php echo $preasses_fallrisk_quest[$qtn]->answer; ?>"> 
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
             
        } ?>
            
      </table>
    </div>
                                            <hr style="border-top: 2px solid #3B4BDF;"/>
                                                    <label>TIME UP AND GO TEST</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Test Score</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="time_test_score" value="<?php echo $patientInfo[0]->time_up_go_score?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                            <label><h3>30 Second Chair Stand Test</h3></label><br>
                                                            <label>Chair Stand Below Average Scores</label>
                                                            <div class="table-responsive">      
        <table class="table table-striped">
        <tr>
          <th>AGE</th><th>MEN</th><th>WOMEN</th>
        </tr>
        <tr>
          <td>60-64</td><td>&lt;14</td><td>&lt;12</td>
        </tr>
        <tr>
          <td>65-69</td><td>&lt;12</td><td>&lt;11</td>
        </tr>
        <tr>
          <td>70-74</td><td>&lt;12</td><td>&lt;10</td>
        </tr>
        <tr>
          <td>75-79</td><td>&lt;11</td><td>&lt;10</td>
        </tr>
        <tr>
          <td>80-84</td><td>&lt;10</td><td>&lt;9</td>
        </tr>
        <tr>
          <td>85-89</td><td>&lt;8</td><td>&lt;8</td>
        </tr>
        <tr>
          <td>90-94</td><td>&lt;7</td><td>&lt;4</td>
        </tr>
      </table>
    </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Score</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="chair_stand_score" value="<?php echo $patientInfo[0]->chair_stand_score?>">
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    
                                                                </div><!-- / row -->

                                                                 <hr style="border-top: 2px solid #3B4BDF;"/>

                                                                 <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Observation by Doctor</label><span class="text-danger"></span></br>
                                                                            <textarea name="doctor_observation" class="form-control"><?php echo $patientInfo[0]->doctor_observation?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Recommendation</label><span class="text-danger"></span></br>
                                                                            <textarea name="recommendation" class="form-control"><?php echo $patientInfo[0]->recommendation; ?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    
                                                                </div><!-- / row -->

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <?php
                                                                            /*if($this->session->userdata('user_role') == 5)
                                                                            {*/
                                                                        ?>
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Eligible for ALF<?php /*print_r($patientInfo);*/?></label><span class="text-danger"></span>&nbsp;
                                                                            <input type="radio" class="" name="ptn_eligible" value="Yes"
                                                                            <?php 
                                                                            if($patientInfo[0]->ptn_eligible=="Yes"){
                                                                                 echo "checked=checked";
                                                                                }
                                                                            ?>>Yes &nbsp;
                                                                            <input type="radio" name="ptn_eligible" class="" value="No"
                                                                            <?php 
                                                                            if($patientInfo[0]->ptn_eligible=="No"){
                                                                                 echo "checked=checked";
                                                                                }
                                                                            ?>>No
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    <?php /*}*/ ?>
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                 <hr style="border-top: 2px solid #3B4BDF;"/>
                                                    
                                                </div>

                                            </div>
                                            <div class="box-footer clearfix">
                                                <!-- <button class="btn btn-primary" name="submit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button> -->
                                                
                                                 <!-- <input type="submit" class="btn btn-primary" name="submit" value="submit"> -->
                                                <!-- <a href="<?php echo base_url();?>app/patient" class="btn btn-default">Cancel</a> -->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <!-- <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script> -->

        
        <!-- BDAY -->
        <!-- <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script> -->
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url();?>public/js/validation.js"></script>
        <!-------------------------jquery cdn for work radio button------------------------>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-------------------------jquery cdn for work radio button------------------------>

<script type="text/javascript">
            // When the document is ready
    $(document).ready(function () {

                /*$('#birthday').datepicker({
                    format: "dd/mm/yyyy"
          //format: "yyyy-mm-dd"
                });*/  

    });
    $(document).ready(function() {
        var i1=0;
        var j1=1; 
        $('#add1').click(function() {
            var diagnosiscuont = $('#diagnosiscuont').val();
                
                 i1 = j1+ + +diagnosiscuont;
            $('#dynamic_field1').append('<div id="row1'+i1+'"> <label" for="member_'+ i1 +'">   </label> <input type="text" class="" name="diagnosis[]" value=""><button type="button" class="btn_remove1 btn btn-danger btn-circle btn-sm" name="remove" id="'+ i1 +'"><span class="glyphicon glyphicon-minus"></span></button></div>')
            j1++;

        });
        $(document).on('click', '.btn_remove1', function() {
            var button_id = $(this).attr("id");
            $('#row1' + button_id + '').remove();
        });
    });

     $(document).ready(function() {
                var i=0; 
                var j = 1;
                $('#add').click(function() {
                    var medicinecuont = $('#medicinecuont').val();
                // console.log(diagcount);
                var i = j+ + +medicinecuont;
                    //i++;
                    
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" name="medicine_name[]"></td><td><input type="text" class="form-control" name="dose[]"></td><td><input type="text" class="form-control" name="frequency[]"></td><td><input type="text" class="form-control" name="duration[]"></td><td><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="'+ i +'"><span class="glyphicon glyphicon-minus"></span></button></td></tr>')
            j++;
                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });
            });

     /**************************Start treating doctor code****************************/
      $(document).ready(function() {
                var td_i=0;
                var td_j = 1; 
                $('#td_add').click(function() {
                    var doctorcuont = $('#doctorcuont').val();
                // console.log(doctorcuont);
                var td_i = td_j+ + +doctorcuont;
                    //td_i++;

      $('#td_dynamic_field').append('<div class="row" id="rowdr'+td_i+'"><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="doctor_name[]"></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="doctor_mobile[]"></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><input type="email" class="form-control" name="doctor_email[]"></div></div><div class="col-md-2"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="hospital_name[]"></div></div><div class="col-md-1"> <div class="form-group wrapper-class" ><label><button type="button" class="btn_removedr btn btn-danger btn-circle btn-sm" name="remove" id="'+ td_i +'"><span class="glyphicon glyphicon-minus"></span></button></label></div></div></div>') 
            td_j++;             

                });
                $(document).on('click', '.btn_removedr', function() {
                    var button_id = $(this).attr("id");
                    $('#rowdr' + button_id + '').remove();
                });
            });
      /**************************End treating doctor code****************************/

      /**************************Start child code****************************/
      $(document).ready(function() {
                var chl_i=0; 
                var chl_j = 1; 
                $('#chl_add').click(function() {
                    var chlcuont = $('#chlcuont').val();
                // console.log(doctorcuont);
                var chl_i = chl_j+ + +chlcuont;
                    //chl_i++;

      $('#chl_dynamic_field').append('<div class="row" id="rowchl'+chl_i+'"><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="chl_name[]"></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><textarea name="chl_add[]" class="form-control"></textarea></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="chl_mobile[]"></div></div><div class="col-md-2"><div class="form-group wrapper-class" ><input type="email" class="form-control" name="chl_email[]"></div></div><div class="col-md-1"> <div class="form-group wrapper-class" ><label><button type="button" class="btn_removechl btn btn-danger btn-circle btn-sm" name="remove" id="'+ chl_i +'"><span class="glyphicon glyphicon-minus"></span></button></label></div></div></div>')   

        chl_j++;            

                });
                $(document).on('click', '.btn_removechl', function() {
                    var button_id = $(this).attr("id");
                    $('#rowchl' + button_id + '').remove();
                });
            });
      /**************************End child code****************************/
</script>
<!-- END BDAY -->
        <script>
        /*****************Start fall risk question calculate**********************/

        $(".chkradio") // select the radio by its id
            .change(function(){ // bind a function to the change event
                if( $(this).is(":checked") ){ // check if the radio is checked
                    //var val = $(this).val(); // retrieve the value
                    var val=Number($("input[name='past_year']:checked").val())+ Number($("input[name='use_stick']:checked").val())+ Number($("input[name='feel_stable']:checked").val())+ Number($("input[name='steady_holding']:checked").val())+ Number($("input[name='worry_fall']:checked").val())+ Number($("input[name='from_chair']:checked").val())+ Number($("input[name='curb']:checked").val())+ Number($("input[name='toilet_rush']:checked").val())+ Number($("input[name='lost_feet']:checked").val())+ Number($("input[name='light_headed']:checked").val())+ Number($("input[name='take_medicine']:checked").val())+ Number($("input[name='feel_sad']:checked").val());
                     
                     $("#fall_total_score").val(val);
                }
            });
        /*****************End fall risk question calculate**********************/    

          function barthelFunc() {
            var grandTotal;
            grandTotal = Number($("#bowels_score").val()) + Number($("#bladder_score").val())+ Number($("#toilet_score").val())+ Number($("#bathing_score").val())+ Number($("#grooming_score").val())+ Number($("#dressing_score").val())+ Number($("#feeding_score").val())+ Number($("#transfer_score").val())+ Number($("#mobility_score").val())+ Number($("#stairs_score").val());
            $("#barthel_total_score").val(grandTotal);
          }

          /*********************Start Calculate Age**********************/
          
          /*********************Start allergies section**********************/
          $(".drug_menu") // select the radio by its id
            .change(function(){ // bind a function to the change event
                
                     var drug_menu = $('#drug').val();
                        if(drug_menu == 'Yes')
                        {
                            document.getElementById("drugfld").style.display = "block";
                        }
                        else{
                            document.getElementById("drugfld").style.display = "none";   
                        }
                    //var val = $(this).val(); // retrieve the value
                   
            });

            $(".food_menu") // select the radio by its id
            .change(function(){ // bind a function to the change event
                
                     var food_menu = $('#food').val();
                        if(food_menu == 'Yes')
                        {
                            document.getElementById("foodfld").style.display = "block";
                        }
                        else{
                            document.getElementById("foodfld").style.display = "none";   
                        }
                    //var val = $(this).val(); // retrieve the value
                   
            });
        /*********************End allergies section**********************/
        </script>
<script>
  $(function(){
    var dtToday = new Date();
    
        var month = dtToday.getMonth() + 1;// jan=0; feb=1 .......
        var day = dtToday.getDate();
        var year = dtToday.getFullYear() - 18;
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        var minDate = year + '-' + month + '-' + day;
        var maxDate = year + '-' + month + '-' + day;
        $('#birthday').attr('max', maxDate);
    });
</script>

<?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>