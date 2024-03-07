<!DOCTYPE html>
<html>
<head><meta charset="euc-kr">
    <head>


        <title>Assisted Living</title>
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
                    <h1>Member Registration</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Member Management</a></li>
                        <li class="active">Member Registration</li>
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
            <form action="<?php echo base_url()?>app/doctor/preassessment_update" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $patientInfo[0]->preasses_id;?>">    
              <div class="box">

                        <div class="box-body table-responsive">

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
                                                                            <input type="text" class="form-control" name="applicant_name" value="<?php echo $patientInfo[0]->preasses_name?>" required>

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
                                                                            <input type="date" class="form-control" name="applicant_dob" value="<?php /*echo $patientInfo[0]->preasses_dob*/?>" id="birthday" onchange = "calAge()">
                                                                    
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Age</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="applicant_age" value="<?php echo $patientInfo[0]->preasses_age?>" id="age">

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
                                                       <option value="">- Religion -</option>
                                                       
                                                       <option value="Aglipayan">Aglipayan</option>
                                                  
                                                       <option value="Ang Dating Daan">Ang Dating Daan</option>
                                                   
                                                       <option value="Assemblies of God (Ilocos Norte)">Assemblies of God (Ilocos Norte)</option>
                                                  
                                                       <option value="Born Again">Born Again</option>
                                                   
                                                       <option value="Chinese">Chinese</option>
                                                  
                                                       <option value="Church of God">Church of God</option>
                                                  
                                                       <option value="Church of the Nazarene">Church of the Nazarene</option>
                                                 
                                                       <option value="El Shaddai">El Shaddai</option>
                                                 
                                                       <option value="Evangelical">Evangelical</option>
                                                  
                                                       <option value="Hindu" <?php if($patientInfo[0]->preasses_religion=="Hindu"){ echo "selected"; } ?>>Hindu</option>
                                                  
                                                       <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                                  
                                                       <option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                                  
                                                       <option value="Judaism">Judaism</option>
                                                 
                                                       <option value="Muslim">Muslim</option>
                                             
                                                       <option value="Roman Catholic">Roman Catholic</option>
                                                   
                                                       <option value="Seventh-Day Adventists">Seventh-Day Adventists</option>
                                                   
                                                       <option value="Unitarian">Unitarian</option>
                                             </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="applicant_mobile" value="<?php echo $patientInfo[0]->preasses_mobile?>">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Aadhar Number</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="applicant_aadhar" value="<?php echo $patientInfo[0]->preasses_aadhar?>">

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
                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>
                                                                <label>Family</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Father</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="father_name" value="<?php echo $patientInfo[0]->father?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Mother</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="mother_name" value="<?php echo $patientInfo[0]->mother?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Siblings</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="sublings_name" value="<?php echo $patientInfo[0]->sublings?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Spouse</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="spouse_name" value="<?php echo $patientInfo[0]->spouse_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact number of spouse</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="spouse_mobile" value="<?php echo $patientInfo[0]->spouse_mobile?>">
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
                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <!--Start preasses common row structure-->
                                                                <label>DETAILS OF CHILDREN</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="chl_name" value="<?php echo $patientInfo[0]->chl_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                           <!-- <input type="text" class="form-control" name="chl_add"> -->
                                                                            <textarea name="chl_add" class="form-control"><?php echo $patientInfo[0]->chl_add?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="chl_mobile" value="<?php echo $patientInfo[0]->chl_mobile?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                            <input type="email" class="form-control" name="chl_email" value="<?php echo $patientInfo[0]->chl_email?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    </div><!-- / row -->
                                    <!--End preasses common row structure-->                            
                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>    

                                                                <label>Local Guardian</label>
                                                                <div class="row">                                          
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Local Guardian</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="guardian_name" value="<?php echo $patientInfo[0]->local_guardian_name?>">
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
                                                                           <input type="text" class="form-control" name="guardian_mobile" value="<?php echo $patientInfo[0]->guardian_mobile?>">
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
                                                                </div><!-- / row -->
                                                                
                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>
                                                                <label>Have you appointed a Power of Attorney (POA) and/or Health Care Proxy (HCP)</label>
                                                                <select name="appointment_poa" class="form-control">
                                                                  <option value="Yes" <?php if($patientInfo[0]->appointment_poa=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                  <option value="No" <?php if($patientInfo[0]->appointment_poa=="No") { echo "selected"; } ?>>No</option>
                                                                </select><br>
                                                                <div class="row">                                          
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of POA /HCP holder</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="poa_name" value="<?php echo $patientInfo[0]->poa_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="poa_mobile" value="<?php echo $patientInfo[0]->poa_mobile?>"> 
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
                                                                
                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <label>TREATING DOCTOR</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Doctor</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="doctor_name" value="<?php echo $patientInfo[0]->tdoctor_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="doctor_mobile" value="<?php echo $patientInfo[0]->tdoctor_mobile?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                            <input type="email" class="form-control" name="doctor_email" value="<?php echo $patientInfo[0]->tdoctor_email?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Clinic/Hospital Name</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="hospital_name" value="<?php echo $patientInfo[0]->hospital_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>
                                                                 

                                                                <div class="row">
                                                                    <!-- <table cellpadding="3" cellspacing="3" width="100%">
                                                        <tr>
                                                            <td width="20%"><button type="button" required name="add1" id="add1" class="btn btn-primary">Add Diagnosis</button><div id="dynamic_field1"></div></td>
                                                        </tr>
                                                        
                                                    </table> -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>DIAGNOSIS</label><span class="text-danger"></span></br>
                                                                            <button type="button" required name="add1" id="add1" class="btn btn-primary">Add Diagnosis</button>
                                                                            <?php $diagnosis = @explode(',',$patientInfo[0]->diagnosis); foreach($diagnosis as $key_dg => $diagnosis1){ $key_dg1 = $key_dg+1; ?>
                                                                            <div id="dynamic_field1">

                                                                                <div id="row1<?=$key_dg1?>"> 
                                                                <label" for="member_<?=$key_dg1?>"> </label> 
                                                                <input type="text" name="diagnosis[].." value="<?=$diagnosis1?>">
                                                                <button type="button" class="btn_remove1" name="remove" id="<?=$key_dg1?>">-</button>
                                                            </div>
                                                                            </div><!--close dynamic_field1 id-->
                                                                            <?php }?>
                                                                            <input type="hidden" value="<?php if(!empty($key_dg1)){ print($key_dg1);}else{ echo '0';}?>" id="diagnosiscuont"></input>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

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

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>
    

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
                                                            <button type="button" name="add" id="add" class="btn btn-primary">Add Medicine</button>
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
          <!-- <td></td> --><td><input type="text" class="form-control" name="medicine_name[]" value="<?=$medicine->medicine?>"></td><td><input type="text" class="form-control" name="dose[]" value="<?=$medicine->dose?>"></td><td><input type="text" class="form-control" name="frequency[]" value="<?=$medicine->frequency?>"></td><td><input type="text" class="form-control" name="duration[]" value="<?=$medicine->duration?>"></td><td><button type="button" class="btn_remove" name="remove" id="<?=$key1?>">-</button></td>
        </tr>
        <?php } }?>
        <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="medicinecuont"></input>
                                                    </tbody>
                                             </table>
                                            </div>

                                            <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                            <label>ALLERGIES</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Drug</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="drug" value="<?php echo $patientInfo[0]->drug_name?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Food</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="food" value="<?php echo $patientInfo[0]->food?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Any Other</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="any_other" value="<?php echo $patientInfo[0]->any_other?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>DEWORMING medicine last taken on Date</label><span class="text-danger"></span></br>
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
      <?php } ?>
        
        <?php } }?>    
                                                              </table>
                                                            </div>

                                                                 <hr style="border-top: 2px solid rgb(255 193 7);"/>

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
                                                                            <input type="text" class="form-control" name="hearing" value="<?php echo $patientInfo[0]->ears?>">
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

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <label>PERSONAL HISTORY</label>
                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Diet</label><span class="text-danger">*</span></br>
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

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <label>PHYSICAL EXAMINATION</label><br>
                                                                <label>Vitals</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Temp</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="temp" value="<?php echo $patientInfo[0]->temp?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Pulse</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="pulse" value="<?php echo $patientInfo[0]->pulse?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>BP</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="bp" value="<?php echo $patientInfo[0]->bp?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>RR</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="rr" value="<?php echo $patientInfo[0]->rr?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>SPO2</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="spo2" value="<?php echo $patientInfo[0]->spo2?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Appearance</label><span class="text-danger"></span></br>
                                                                            <select name="appearance" class="form-control">
                                                                              <option value="Normal">Normal</option>
                                                                              <option value="Obese">Obese</option>
                                                                              <option value="Frail">Frail</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

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

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>
                                            
                </div>
                <div class="tab-pane" id="tab_4">
                        <label>PSYCHOLOGICAL & BEHAVIOURAL CONDITION</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Agitation & Aggression</label><span class="text-danger"></span></br>
                                                                             <select name="aggression" class="form-control">
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
                                                                            <label>Violence</label><span class="text-danger"></span></br>
                                                                            <select name="Violence" class="form-control">
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
                                                                            <label>Need of Bed Restrain</label><span class="text-danger"></span></br>
                                                                            <select name="bed_restrain" class="form-control">
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
                                                                            <label>Wandering</label><span class="text-danger"></span></br>
                                                                            <select name="wandering" class="form-control">
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
                                                                            <label>Sleep</label><span class="text-danger"></span></br>
                                                                            <select name="sleep" class="form-control">
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
                                                                            <label>Inappropriate Behaviour with Care</label><span class="text-danger"></span></br>
                                                                           <select name="giver_care" class="form-control">
                                                                              <option value="NA" <?php if($patientInfo[0]->giver_care=="NA") { echo "selected"; } ?>>NA</option>
  <option value="Occasionally" <?php if($patientInfo[0]->giver_care=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Always" <?php if($patientInfo[0]->giver_care=="Always") { echo "selected"; } ?>>Always</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                    <!--End preasses common row structure-->                            
                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Diagnostic Tests</label><span class="text-danger"></span></br>
                                                                             <textarea name="diagnostic_test" class="form-control"><?php echo $patientInfo[0]->diagnostic_test?></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>TYPICAL DAY OF APPLICANT</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="typical_day_appl" value="<?php echo $patientInfo[0]->typical_day_appl?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                            <label>SPMSQ Test</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Total no. of error</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="total_no_error" value="<?php echo $patientInfo[0]->total_no_of_error?>">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                            <label>CLOCK DRAWING TEST</label>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Score</label><span class="text-danger"></span></br>
                                                                              <input type="text" class="form-control" name="clock_score" value="<?php echo $patientInfo[0]->clock_score?>">
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

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <label>GERIATRIC DEPRESSION SCALE</label>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Score</label><span class="text-danger"></span></br>
                                                                              <input type="text" class="form-control" name="geriatric_score" value="<?php echo $patientInfo[0]->geriatric_score?>">
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

                                                                <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                <label>BARTHEL INDEX</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bowels Score</label><span class="text-danger"></span></br>
                                                                              <input type="text" class="form-control numberonly" name="bowels_score" value="<?php echo $patientInfo[0]->bowels_score?>" id="bowels_score" onkeyup="barthelFunc()">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bladder Score</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control numberonly" name="bladder_score" value="<?php echo $patientInfo[0]->bladder_score?>" id="bladder_score" onkeyup="barthelFunc()">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Toilet Score</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="toilet_score" value="<?php echo $patientInfo[0]->toilet_score?>" onkeyup="barthelFunc()" id="toilet_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bathing Score</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="bathing_score" value="<?php echo $patientInfo[0]->bathing_score?>" onkeyup="barthelFunc()" id="bathing_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Grooming Score</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" name="grooming_score" value="<?php echo $patientInfo[0]->grooming_score?>" onkeyup="barthelFunc()" id="grooming_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dressing Score</label><span class="text-danger"></span></br>
                                                                          <input type="text" class="form-control numberonly" name="dressing_score" value="<?php echo $patientInfo[0]->dressing_score?>" onkeyup="barthelFunc()" id="dressing_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Feeding Score</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control numberonly" name="feeding_score" value="<?php echo $patientInfo[0]->feeding_score?>" onkeyup="barthelFunc()" id="feeding_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Transfer Score</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="transfer_score" value="<?php echo $patientInfo[0]->transfer_score?>" onkeyup="barthelFunc()" id="transfer_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Mobility Score</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="mobility_score" value="<?php echo $patientInfo[0]->mobility_score?>" onkeyup="barthelFunc()" id="mobility_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Stairs Score</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" name="stairs_score" value="<?php echo $patientInfo[0]->stairs_score?>" onkeyup="barthelFunc()" id="stairs_score">
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

                                                                 <hr style="border-top: 2px solid rgb(255 193 7);"/>
                   
                                                </div>
                                                <div class="tab-pane" id="tab_5">
                                                    <label><h4>Fall Risk Assessment</h4></label>
                                                    <div class="table-responsive">      
        <table class="table table-striped">
        <tr>
          <th>Questions</th><th>Answer</th>
        </tr>
       <tr>
          <td>You have fallen in the past year?<input type="hidden" name="past_year_qtn" class="form-control" value="you have fallen in the past year?"></td><td><!-- <input type="text" name="past_year" class="form-control"> --><input type="radio" class="chkradio past_year" name="past_year" value="2">Yes &nbsp;
    <input type="radio" name="past_year" class="chkradio past_year" value="0" checked>No</td>

        </tr>
        <tr>
          <td>Do you use or have been advised to use a stick or walker to move around safely?<input type="hidden" name="use_stick_qtn" value="Do you use or have been advised to use a stick or walker to move around safely?"></td><td><!-- <input type="text" name="use_stick" class="form-control"> --><input type="radio" class="chkradio use_stick" name="use_stick" value="2">Yes &nbsp;
    <input type="radio" name="use_stick" class="chkradio use_stick" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Do you feel unsteady while you are walking<input type="hidden" name="feel_stable_qtn" class="form-control" value="Do you feel unsteady while you are walking"></td><td><!-- <input type="text" name="feel_stable" class="form-control"> --><input type="radio" class="chkradio" name="feel_stable" value="1">Yes &nbsp;
    <input type="radio" name="feel_stable" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Do you steady yourself by holding onto furniture while walking at home?<input type="hidden" name="steady_holding_qtn" class="form-control" value="Do you steady yourself by holding onto furniture while walking at home?"></td><td><!-- <input type="text" name="steady_holding" class="form-control"> --><input type="radio" class="chkradio" name="steady_holding" value="1">Yes &nbsp;
    <input type="radio" name="steady_holding" class="chkradio" value="0" checked>No</td>
        </tr>

        <tr>
          <td>You are worried about falling?<input type="hidden" name="worry_fall_qtn" class="form-control" value="You are worried about falling?"></td><td><!-- <input type="text" name="worry_fall" class="form-control"> --><input type="radio" class="chkradio" name="worry_fall" value="1">Yes &nbsp;
    <input type="radio" name="worry_fall" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Do You need to push with your hands to stand up from a chair?<input type="hidden" name="from_chair_qtn" class="form-control" value="Do You need to push with your hands to stand up from a chair?"></td><td><!-- <input type="text" name="from_chair" class="form-control"> --><input type="radio" class="chkradio" name="from_chair" value="1">Yes &nbsp;
    <input type="radio" name="from_chair" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Do You have some trouble to stepping up onto a curb?<input type="hidden" name="curb_qtn" class="form-control" value="Do You have some trouble to stepping up onto a curb?"></td><td><!-- <input type="text" name="curb" class="form-control"> --><input type="radio" class="chkradio" name="curb" value="1">Yes &nbsp;
    <input type="radio" name="curb" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Do you often have to rush to the toilet?<input type="hidden" name="toilet_rush_qtn" class="form-control" value="Do you often have to rush to the toilet?"></td><td><!-- <input type="text" name="toilet_rush" class="form-control"> --><input type="radio" class="chkradio" name="toilet_rush" value="1">Yes &nbsp;
    <input type="radio" name="toilet_rush" class="chkradio" value="0" checked>No</td>
        </tr>

        <tr>
          <td>Have lost some feeling in your feet?<input type="hidden" name="lost_feet_qtn" class="form-control" value="Have lost some feeling in your feet?"></td><td><!-- <input type="text" name="lost_feet" class="form-control"> --><input type="radio" class="chkradio" name="lost_feet" value="1">Yes &nbsp;
    <input type="radio" name="lost_feet" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Do you take medicine that sometimes make you feel light- headed or more tired than usual?<input type="hidden" name="light_headed_qtn" class="form-control" value="Do you take medicine that sometimes make you feel light- headed or more tired than usual?"></td><td><!-- <input type="text" name="light_headed" class="form-control"> --><input type="radio" class="chkradio" name="light_headed" value="1">Yes &nbsp;
    <input type="radio" name="light_headed" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Do you take medicine to help you sleep or improve your mood?<input type="hidden" name="take_medicine_qtn" class="form-control" value="Do you take medicine to help you sleep or improve your mood?"></td><td><!-- <input type="text" name="take_medicine" class="form-control"> --><input type="radio" class="chkradio" name="take_medicine" value="1">Yes &nbsp;
    <input type="radio" name="take_medicine" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>I often feel sad or depressed<input type="hidden" name="feel_sad_qtn" class="form-control" value="I often feel sad or depressed"></td><td><!-- <input type="text" name="feel_sad" class="form-control"> --><input type="radio" class="chkradio" name="feel_sad" value="1">Yes &nbsp;
    <input type="radio" name="feel_sad" class="chkradio" value="0" checked>No</td>
        </tr>
        <tr>
          <td>Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling<input type="hidden" name="fall_total_score_qtn" class="form-control" value="Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling"></td><td><input type="text" name="fall_total_score" id="fall_total_score" class="form-control" placeholder="Enter Total Score"></td>
        </tr>    
      </table>
    </div>
                                            <hr style="border-top: 2px solid rgb(255 193 7);"/>
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
                                                                            <label>Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control" name="chair_stand_score" value="<?php echo $patientInfo[0]->chair_stand_score?>">
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    
                                                                </div><!-- / row -->

                                                                 <hr style="border-top: 2px solid rgb(255 193 7);"/>

                                                                 <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Observation by Doctor</label><span class="text-danger"></span></br>
                                                                            <textarea name="doctor_observation" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Recommendation</label><span class="text-danger"></span></br>
                                                                            <textarea name="recommendation" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    
                                                                </div><!-- / row -->

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Eligible for ALF<?php /*print_r($patientInfo);*/?></label><span class="text-danger"></span>&nbsp;
                                                                            <input type="radio" class="" name="ptn_eligible" value="Yes" checked>Yes &nbsp;
                                                                            <input type="radio" name="ptn_eligible" class="" value="No">No
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                 <hr style="border-top: 2px solid rgb(255 193 7);"/>
                                                    
                                                </div>

                                            </div>
                                            <div class="box-footer clearfix">
                                                <!-- <button class="btn btn-primary" name="submit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button> -->
                                                 <input type="submit" class="btn btn-primary" name="submit" value="submit">
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
            $('#dynamic_field1').append('<div id="row1'+i1+'"> <label" for="member_'+ i1 +'">   </label> <input type="text" name="diagnosis[]" value=""><button type="button" class="btn_remove1" name="remove" id="'+ i1 +'">-</button></div>')
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
                    
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" name="medicine_name[]"></td><td><input type="text" class="form-control" name="dose[]"></td><td><input type="text" class="form-control" name="frequency[]"></td><td><input type="text" class="form-control" name="duration[]"></td><td><button type="button" class="btn_remove" name="remove" id="'+ i +'">-</button></td></tr>')
            j++;
                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });
            });
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
          
          /*********************End Calculate Age**********************/
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