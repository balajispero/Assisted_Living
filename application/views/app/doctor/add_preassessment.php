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
            .onlypreasses{
                display:block !important;
            }
            hr {
                border-top: 2px solid #2B48B0 !important;  
            }
            #add1{
                 margin-top: 20px;
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
            .dis_inline {
                display: inline-block;
                width: 80%;
                margin: 2px;
            }

            .loader {
                  border: 16px solid #f3f3f3; /* Light grey */
                  border-top: 16px solid #3498db; /* Blue */
                  border-radius: 50%;
                  width: 120px;
                  height: 120px;
                  animation: spin 2s linear infinite;
                  position: fixed;
                  top: 50%;
                  left: 62%;
                }
                @keyframes spin {
                  0% { transform: rotate(0deg); }
                  100% { transform: rotate(360deg); }
                }
        </style>
        <?php /*require_once(APPPATH.'views/include/responsive_design.php');*/?>

    </head>
    <body class="skin-blue ">

        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <?php require_once(APPPATH.'views/include/sidebar.php');?>


            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Add Preassessment</h1>
                    <ol class="breadcrumb">
                        <!-- <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url()?>app/dashboard">Member Management</a></li>
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
            <form action="<?php echo base_url()?>app/doctor/preassessment_save" method="post" id="preassessment_form" enctype="multipart/form-data">    
              <div class="box">

                        <div class="box-body">

                          <div class="nav-tabs-custom">
                             <ul class="nav nav-tabs">
                                <li class="active" id="point_1"><a href="#" data-toggle="tab1">Personal Details</a></li>
                                <li id="point_2"><a href="#" data-toggle="tab1">Medications</a></li>
                                <li id="point_3"><a href="#" data-toggle="tab1">General Examination</a></li>
                                                  <li id="point_4"><a href="#" data-toggle="tab1">Psychological & Behavioural</a></li>
                                                    <li id="point_5"><a href="#" data-toggle="tab1">Fall Risk Assessment</a></li>  
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
                                                        $userID = $lastPreassesID->cValue;
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
                                                        }
                                                        ?>
                                                        <input type="hidden" name="userID2" value="<?php echo $userID2;?>">
                                
                                                        <div class="panel panel-default">
                                                            <!-- <div class="panel-heading">
                                                                Panel Heading Container
                                                            </div> -->
                                                            <div class="panel-body">
                                                                <label>PERSONAL DETAILS OF APPLICANT</label>
                                                                <div class="row">
                                                                    <div class="loader" style="display:none;"></div>
                                                                    <div class="row container form-group text-danger" >
                                                                        <div class="col-md-12">
                                                                            <label class="compulsory">Note :* (Marked Fields are Compulsory to fill)</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Preassessment No.</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control" name="preasses_no" required readonly value="<?php echo $userID;?>">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Applicant</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control alphaonly" name="applicant_name" required>

                                                                            <!-- <span class="text-danger error-text type_category_err" id="applicant_name"></span> -->                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email</label><span class="text-danger"></span></br>
                                                                            <input type="email" class="form-control" name="applicant_email">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Date of Birth</label><span class="text-danger"></span></br>
                                                                            <input type="date" class="form-control" name="applicant_dob" id="birthday" onchange = "calAge()">
                                                                    
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Age</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="applicant_age" id="age">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Gender</label><span class="text-danger">*</span></br>
                                                                            <select name="applicant_gender" class="form-control" required>
                                                                              <option value="">- Gender -</option>
                                                                              <option value="Male">Male</option>
                                                                              <option value="Female">Female</option>
                                                                              <option value="Any Other">Any Other</option>
                                                                            </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Permanent Address</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="applicant_add"> -->
                                                                            <textarea name="applicant_add" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Religion</label><span class="text-danger"></span></br>
                                                                            <select name="applicant_religion" id="religion" class="form-control">
                                                       <!-- <option value="">- Religion -</option> -->
                                                       
                                                       <!-- <option value="Aglipayan">Aglipayan</option>
                                                  
                                                       <option value="Ang Dating Daan">Ang Dating Daan</option> -->
                                                   
                                                       <!-- <option value="Assemblies of God (Ilocos Norte)">Assemblies of God (Ilocos Norte)</option>
                                                  
                                                       <option value="Born Again">Born Again</option>
                                                    -->
                                                       <!-- <option value="Chinese">Chinese</option>
                                                  
                                                       <option value="Church of God">Church of God</option>
                                                   -->
                                                       <!-- <option value="Church of the Nazarene">Church of the Nazarene</option>
                                                 
                                                       <option value="El Shaddai">El Shaddai</option>
                                                 
                                                       <option value="Evangelical">Evangelical</option> -->
                                                  
                                                       
                                                       <!-- <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                                       
                                                       <option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                                       
                                                       <option value="Judaism">Judaism</option> -->
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
                                                                            <input type="text" class="form-control numberonly" maxlength="15" name="applicant_mobile">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Aadhar Number</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control numberonly" name="applicant_aadhar" maxlength="12">

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Marital Status</label><span class="text-danger"></span></br>
                                                                            <select name="applicant_marital" class="form-control input-sm">
                                                                               <option value="">- Marital Status -</option>
                                                                         
                                                                               <option value="Divorced">Divorced</option>
                                                                          
                                                                               <option value="Legal Seperated">Legal Seperated</option>
                                                                         
                                                                               <option value="Married">Married</option>
                                                                          
                                                                               <option value="Single">Single</option>
                                                                           
                                                                               <option value="Widow">Widow</option>
                                                                          
                                                                               <option value="Widower">Widower</option>
                                                                            </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                <hr style="border-top: 2px solid #2B48B0;"/>
                                                                <label>Family</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Father</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="father_name">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Mother</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control alphaonly" name="mother_name">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Siblings</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="sublings_name">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Spouse</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control alphaonly" maxlength="10" name="spouse_name">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact number of spouse</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" maxlength="15" name="spouse_mobile">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Permanent Address</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="family_add"> -->
                                                                                        <textarea name="family_add" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                <!--Start preasses common row structure-->
                                                                <label>DETAILS OF CHILDREN</label>

                                                                <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group wrapper-class" >
                                                                        <label></label><span class="text-danger"></span>
                                                                <button type="button" name="chl_add" id="chl_add" class="btn btn-outline-primary hvr-shutter-in-vertical">Add Child</button>
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
                                                                        <div class="form-group wrapper-class">
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                                                       
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div><!--/row-->

                                                                   
                                                            </div><!--close chl_dynamic_field id div-->



                                                                
                                    <!--End preasses common row structure-->                            
                                                                 <hr style="border-top: 1px solid #2B48B0;"/>     

                                                                <label>Local Guardian</label>
                                                                <div class="row">                                          
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of Local Guardian 1</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="guardian_name">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                             <textarea name="guardian_add" class="form-control"></textarea> 
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" maxlength="15" name="guardian_mobile">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                           <input type="email" class="form-control" name="guardian_email">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->


                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label> Name of Local Guardian 2</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control alphaonly" name="guardian_name2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                             <textarea name="guardian_add2" class="form-control"></textarea> 
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" maxlength="15" name="guardian_mobile2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                           <input type="email" class="form-control" name="guardian_email2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                
                                                                <hr style="border-top: 2px solid #2B48B0;"/>
                                                                <label>Have you appointed a Power of Attorney (POA) and/or Health Care Proxy (HCP)</label>
                                                                <select name="appointment_poa" class="form-control">
                                                                    <option value=""> Select POA & HCP</option>
                                                                  <option value="Yes">Yes</option>
                                                                  <option value="No">No</option>
                                                                </select><br>
                                                                <div class="row">                                          
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Name of POA /HCP holder</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="poa_name">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Contact Number</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control numberonly" maxlength="15" name="poa_mobile"> 
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Email id</label><span class="text-danger"></span></br>
                                                                            <input type="email" class="form-control" name="poa_email">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Address</label><span class="text-danger"></span></br>
                                                                           <!-- <input type="text" class="form-control" name="poa_add"> -->
                                                                            <textarea name="poa_add" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                
                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                <label>TREATING DOCTOR</label>
                                                               <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group wrapper-class" >
                                                                        <label></label><span class="text-danger"></span>
                                                                <button type="button" name="add2" id="td_add" class="btn btn-outline-primary hvr-shutter-in-vertical">Add Doctor</button>
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

                                                                   
                                                            </div><!--close td_dynamic_field id div-->
                                                                                                                                   
                                                                

                                                                <hr style="border-top: 2px solid #2B48B0;"/>
                                                                 

                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>DIAGNOSIS</label><span class="text-danger"></span></br>
                                                                            <button type="button" required name="add1" id="add1" class="btn btn-outline-primary hvr-shutter-in-vertical">Add Diagnosis</button><br><br><div id="dynamic_field1"></div>
                                                                            
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                <label>CASE HISTORY</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Present Complaints</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                                                            <textarea name="present_complaints" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Past History</label><span class="text-danger"></span></br>
                                                                            <!-- <input type="text" class="form-control" name="past_history"> -->
                                                                              <textarea name="past_history" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                </div><!-- / row -->
                                                                <!-- <input type="submit" class="submit_btn btn btn-primary bg_color" id="next1" name="submit" value="Next"> -->
                                                                <button type="submit" class="submit_btn btn btn-outline-primary hvr-shutter-in-vertical" id="next1" name="submit" value="Next">Next</button>
                                                                <hr style="border-top: 2px solid #2B48B0;"/>
    

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
                                                            <button type="button" name="add" id="add" class="btn btn-outline-primary hvr-shutter-in-vertical">Add Medicine</button>
                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                    </div><!-- /.form-group wrapper-class -->
                                                </div><!-- /.col-md-3 -->
                                             </div><!-- / row -->
                                            <div class="table-responsive">
                                             <table class="table table-striped">
                                                <tr>
                                                  <th>Name of Medicine</th><th>Dose</th><th>Frequency</th><th>Duration</th><th>Action</th>
                                                </tr>
                                                 <tbody id="dynamic_field">
                                                    </tbody>
                                             </table>
                                            </div>

                                            <hr style="border-top: 2px solid #2B48B0;"/>

                                            <label>ALLERGIES</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Drug</label><span class="text-danger"></span></br>
                                                                           <select name="drug" id="drug" class="form-control drug_menu">
                                                                            <option value="">Select Drug</option>
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3" id="drugfld" style="display: none;">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label></label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="drugfld">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Food</label><span class="text-danger"></span></br>
                                                                           <select name="food" id="food" class="form-control food_menu">
                                                                            <option value="">Select Food</option>
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3" id="foodfld" style="display: none;">
                                                                        <div class="form-group wrapper-class" id="foodfld">
                                                                            <label></label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="foodfld">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Any Other</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="any_other">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Deworming medicine last taken on Date</label><span class="text-danger"></span></br>
                                                                            <input type="date" class="form-control" name="last_taken_medicine_date">
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
                                                                <tr>
                                                                  <td>Tetanus</td><td><input type="text" name="tetanus_vac" class="form-control"></td><td><input type="date" name="tetanus_date" class="form-control"></td><td><input type="date" name="tetanus_due_date" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td>Influenza</td><td><input type="text" name="influenza_vac" class="form-control"></td><td><input type="date" name="influenza_date" class="form-control"></td><td><input type="date" name="influenza_due_date" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td>Pneumococcal</td><td><input type="text" name="pneumococcal_vac" class="form-control"></td><td><input type="date" name="pneumococcal_date"class="form-control"></td><td><input type="date" name="pneumococcal_due_date"class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td>Typhoid</td><td><input type="text" name="typhoid_vac" class="form-control"></td><td><input type="date" name="typhoid_date" class="form-control"></td><td><input type="date" name="typhoid_due_date" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td>COVID19</td><td></td><td class="row">
                                                                        <label class="col-sm-2" style="margin-top:3px;">1<sup>st</sup></label><input type="text" name="covid_vac_1" class="form-control col-sm-2" style="width:450px;margin-top:3px;">
                                                                        <label class="col-sm-2" style="margin-top:3px;">2<sup>nd</sup></label><input type="text" name="covid_vac_2" class="form-control col-sm-2" style="width:450px;margin-top:3px;">
                                                                        <label class="col-sm-2" style="margin-top:3px;">3<sup>rd</sup></label><input type="text" name="covid_vac_3" class="form-control col-sm-2" style="width:450px;margin-top:3px;">
                                                                        
                                                                    </td><td></td>
                                                                </tr>    
                                                              </table>
                                                            </div>
                                                            <!-- <input type="submit" class="submit_btn btn btn-primary bg_color" id="next2" name="submit" value="Next"> -->
                                                             <button type="submit" class="submit_btn btn btn-outline-primary hvr-shutter-in-vertical" id="next2" name="submit" value="Next">Next</button>

                                                                 <hr style="border-top: 2px solid #2B48B0;"/>

                         </div>
                                            <div class="tab-pane" id="tab_3">
                                                <label>GENERAL EXAMINATION</label>
                                                
                                                                <div class="row">
                                                                    
                                                                    <div class="row container form-group text-danger" >
                                                                        <div class="col-md-12">
                                                                            <label class="compulsory"></label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Head</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="head">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Neck</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="neck">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Ears</label>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Hearing</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="hearing">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Hearing Aid</label><span class="text-danger"></span></br>
                                                                           <select name="hearaid" class="form-control">
                                                                           <option value="">Select Hearing Aid</option>
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Nose</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="nose">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Throat</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="throat">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Eye</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Vision</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="vision">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Spectacles</label><span class="text-danger"></span></br>
                                                                           <select name="spectacles" class="form-control">
                                                                           <option value="">Select Spectacles</option>
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Cataract</label><span class="text-danger"></span></br>
                                                                            <select name="cataract" class="form-control">
                                                                            <option value="">Select Cataract</option>
                                                                              <option value="Right">Right</option>
                                                                              <option value="Left">Left</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Glaucoma</label><span class="text-danger"></span></br>
                                                                           <select name="glaucoma" class="form-control">
                                                                           <option value="">Select Glaucoma</option>
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Oral Exam</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="oral">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Ulcers / Tumour</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="tumour">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dental exam</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="dental">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dentures</label><span class="text-danger"></span></br>
                                                                            <select name="dentures" class="form-control">
                                                                            <option value="">Select Dentures</option>
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Tongue</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="tongue">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Skin</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="skin">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Petechial Haemorrhages</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="potechial">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bruises</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="bruises">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Rashes</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="rashes">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bed sore</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="bed_sore">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Pedal Oedema</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="pedal_oedema">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>DVT</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="dvt">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                     <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Varicose Veins</label><span class="text-danger"></span></br>
                                                                          <input type="text" class="form-control" name="varicose_veins">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Foot Examination</label><span class="text-danger"></span></br>
                                                                         <input type="text" class="form-control" name="foot">
                                                                         <!-- <textarea name="foot" class="form-control"></textarea> -->
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                <label>PERSONAL HISTORY</label>
                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Diet</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="diet">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Habits</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="habits">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Exercise</label><span class="text-danger"></span></br>
                                                                            <input type="text" class="form-control" name="exercise">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Does the patient is recommended physiotherapy or rehabilitation services?</label><span class="text-danger"></span></br>
                                                                            <select name="physiotherapy" class="form-control">
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                <label>PHYSICAL EXAMINATION</label><br>
                                                                <label>Vitals</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Temp</label><span class="text-danger"></span></br>
                                                                           <input type="number" class="form-control" name="temp" placeholder="Enter 82 to 110">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Pulse</label><span class="text-danger"></span></br>
                                                                            <input type="number" class="form-control" name="pulse" placeholder="Enter 60 to 100">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>BP</label><span class="text-danger"></span></br>
                                                                            <input type="number" class="form-control" name="bp" placeholder="Enter 100 to 300">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>RR</label><span class="text-danger"></span></br>
                                                                           <input type="number" class="form-control" name="rr" placeholder="Enter 12 to 18">
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>SPO2</label><span class="text-danger"></span></br>
                                                                           <input type="number" class="form-control" name="spo2" placeholder="Enter 95 to 100">
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

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                 <label>SYSTEMIC EXAMINATION</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Respiratory System</label><span class="text-danger"></span></br>
                                                                           <textarea name="respirate_sys" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Cardiovascular system</label><span class="text-danger"></span></br>
                                                                             <textarea name="cardiovascular_sys" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Gastrointestinal System</label><span class="text-danger"></span></br>
                                                                            <textarea name="gastrointestinal_sys" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Genito Urinary System</label><span class="text-danger"></span></br>
                                                                          <textarea name="genito_urinary_sys" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Neurological System</label><span class="text-danger"></span></br>
                                                                          <textarea name="neurological_sys" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Musculoskeletal system</label><span class="text-danger"></span></br>
                                                                             <textarea name="musculoskeletal_sys" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                       
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                <!-- <input type="submit" class="submit_btn btn btn-primary bg_color" id="next3" name="submit" value="Next"> -->
                                                                <button type="submit" class="submit_btn btn btn-outline-primary hvr-shutter-in-vertical" id="next3" name="submit" value="Next">Next</button>
                                                                <hr style="border-top: 2px solid #2B48B0;"/>
                                            
                </div>
                <div class="tab-pane" id="tab_4">
                        <label>PSYCHOLOGICAL & BEHAVIOURAL CONDITION</label>
                                                                <div class="row">
                                                                    <div class="row container form-group text-danger" >
                                                                        <div class="col-md-12">
                                                                            <label class="compulsory"></label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Agitation & Aggression</label><span class="text-danger">*</span></br>
                                                                             <select name="aggression" class="form-control" required>
                                                                                <option value=""> Select Agitation & Aggression</option>
                                                                              <option value="NA">NA</option>
                                                                              <option value="Occasionally">Occasionally</option>
                                                                              <option value="Frequent">Frequent</option>
                                                                              <option value="Always">Always</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Violence</label><span class="text-danger">*</span></br>
                                                                            <select name="Violence" class="form-control" required>
                                                                                <option value=""> Select Violence</option>
                                                                              <option value="No">No</option>
                                                                              <option value="May Self Inflict">May Self Inflict</option>
                                                                              <option value="Verbally Abusive">Verbally Abusive</option>
                                                                              <option value="Physically Abusive">Physically Abusive</option>
                                                                              <option value="Has Suicidal Ideation">Has Suicidal Ideation</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Need of Bed Restrain</label><span class="text-danger">*</span></br>
                                                                            <select name="bed_restrain" class="form-control" required>
                                                                                <option value=""> Select Need of Bed Restrain</option>
                                                                              <option value="No">No</option>
                                                                              <option value="Required Temporarily">Required Temporarily</option>
                                                                              <option value="Occasionally">Occasionally</option>
                                                                              <option value="Permanent">Permanent</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Wandering</label><span class="text-danger">*</span></br>
                                                                            <select name="wandering" class="form-control" required>
                                                                                <option value=""> Select Wandering</option>
                                                                              <option value="No">No</option>
                                                                              <option value="Occasionally">Occasionally</option>
                                                                              <option value="Always">Always</option>
                                                                              <option value="Day Time">Day Time</option>
                                                                              <option value="Night Time">Night Time</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Sleep</label><span class="text-danger">*</span></br>
                                                                            <select name="sleep" class="form-control" required>
                                                                                <option value=""> Select Sleep</option>
                                                                              <option value="Able to sleep">Able to sleep</option>
                                                                              <option value="Relies on sleeping pills">Relies on sleeping pills</option>
                                                                              <option value="Required sedation">Required sedation</option>
                                                                              <option value="Chronic sleep issues">Chronic sleep issues</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Inappropriate Behaviour with Care</label><span class="text-danger">*</span></br>
                                                                           <select name="giver_care" class="form-control" required>
                                                                            <option value="">Select Inappropriate Behaviour with Care</option>
                                                                              <option value="NA">NA</option>
                                                                              <option value="Occasionally">Occasionally</option>
                                                                              <option value="Always">Always</option>
                                                                            </select>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                    <!--End preasses common row structure-->                            
                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Diagnostic Tests</label><span class="text-danger"></span></br>
                                                                             <textarea name="diagnostic_test" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>
                                                                <label>TYPICAL DAY OF APPLICANT</label><br>
                                                                <label>Morning hours</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Wake up time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="wake_up_time">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Washroom</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="washroom">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Breakfast time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="breakfast_time">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Exercises</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="exercises">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Social</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="morning_social">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Afternoon hours</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Lunch</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="lunch">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Afternoon nap</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="afternoon_nap">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <label>Evening hours</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Walk/sitting outside</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="walk_sitting_outside">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Tea/coffee/snacks time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="tea_snacks_time">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Social</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="eve_social">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Any other</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="eve_any_other">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    
                                                                </div><!-- / row -->
                                                                <label>Late evening/night</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Recreational</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="recreational">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Reading</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="reading">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dinner</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="dinner">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Any other</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="night_any_other">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Light off time</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="light_off_time">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Describe any other activities</label><span class="text-danger"></span></br>
                                                                             <textarea name="describe_any_other_activity" class="form-control"></textarea>
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

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
                                                                             <input type="text" class="form-control" name="total_no_error">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                            <label>CLOCK DRAWING TEST</label>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Score</label><span class="text-danger"></span></br>
                                                                              <input type="text" class="form-control numberonly" name="clock_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Remark</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="clock_remark">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

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
                                                                              <input type="text" class="form-control numberonly" name="geriatric_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Remark</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control" name="geriatric_remark">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <hr style="border-top: 2px solid #2B48B0;"/>

                                                                <label>BARTHEL INDEX</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bowels Score</label><span class="text-danger">*</span></br>
                                                                              <input type="text" class="form-control numberonly bi1number" name="bowels_score" id="bowels_score" onkeyup="barthelFunc()" required maxlength="1" placeholder="Enter 0 to 2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bladder Score</label><span class="text-danger">*</span></br>
                                                                             <input type="text" class="form-control numberonly bi1number" name="bladder_score" id="bladder_score" onkeyup="barthelFunc()" required maxlength="1" placeholder="Enter 0 to 2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Toilet Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi1number" name="toilet_score" onkeyup="barthelFunc()" id="toilet_score" required maxlength="1" placeholder="Enter 0 to 2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Bathing Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi2number" name="bathing_score" onkeyup="barthelFunc()" id="bathing_score" required maxlength="1" placeholder="Enter 0 to 1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Grooming Score</label><span class="text-danger">*</span></br>
                                                                           <input type="text" class="form-control numberonly bi2number" name="grooming_score" onkeyup="barthelFunc()" id="grooming_score" required maxlength="1" placeholder="Enter 0 to 1">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Dressing Score</label><span class="text-danger">*</span></br>
                                                                          <input type="text" class="form-control numberonly bi1number" name="dressing_score" onkeyup="barthelFunc()" id="dressing_score" required maxlength="1" placeholder="Enter 0 to 2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Feeding Score</label><span class="text-danger">*</span></br>
                                                                             <input type="text" class="form-control numberonly bi1number" name="feeding_score" onkeyup="barthelFunc()" id="feeding_score" required maxlength="1" placeholder="Enter 0 to 2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Transfer Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi3number" name="transfer_score" onkeyup="barthelFunc()" id="transfer_score" required maxlength="1" placeholder="Enter 0 to 3">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Mobility Score</label><span class="text-danger">*</span></br>
                                                                            <input type="text" class="form-control numberonly bi3number" name="mobility_score" onkeyup="barthelFunc()" id="mobility_score" required maxlength="1" placeholder="Enter 0 to 3">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Stairs Score</label><span class="text-danger">*</span></br>
                                                                           <input type="text" class="form-control numberonly bi1number" name="stairs_score" onkeyup="barthelFunc()" id="stairs_score" required maxlength="1" placeholder="Enter 0 to 2">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Total Score</label><span class="text-danger"></span></br>
                                                                           <input type="text" class="form-control" name="barthel_total_score" id="barthel_total_score">
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->
                                                                <!-- <input type="submit" class="submit_btn btn btn-primary bg_color" id="next4" name="submit" value="Next"> -->
                                                                <button type="submit" class="submit_btn btn btn-outline-primary hvr-shutter-in-vertical" id="next4" name="submit" value="Next">Next</button>
                                                                 <hr style="border-top: 2px solid #2B48B0;"/>
                   
                                                </div>
                                                <div class="tab-pane" id="tab_5">
                                                    <label><h4>Fall Risk Assessment</h4></label>
                                                    <div class="table-responsive">      
        <table class="table table-striped">
        <tr>
          <th>Questions</th><th>Answer</th>
        </tr>
       <tr>
          <td>Have you fallen in the past year?<input type="hidden" name="past_year_qtn" class="form-control" value="Have you fallen in the past year?"></td><td><!-- <input type="text" name="past_year" class="form-control"> --><input type="radio" class="chkradio past_year" name="past_year" value="2">Yes &nbsp;
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
                                            <hr style="border-top: 2px solid #2B48B0;"/>
                                                    <label>TIME UP AND GO TEST</label>
                                                                <div class="row">

                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Test Score</label><span class="text-danger"></span></br>
                                                                             <input type="text" class="form-control numberonly" name="time_test_score">
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
                                                                            <input type="text" class="form-control numberonly" name="chair_stand_score" placeholder="Enter 1 to 13">
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                    
                                                                </div><!-- / row -->

                                                                 <hr style="border-top: 2px solid #2B48B0;"/>

                                                                 <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class">
                                                                            <label>Observation by Doctor</label><span class="text-danger">*</span></br>
                                                                            <textarea name="doctor_observation" class="form-control" required></textarea>
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
                                                                            <label>Eligible for ALF</label><span class="text-danger"></span>&nbsp;
                                                                            <input type="radio" class="" name="ptn_eligible" value="Yes" checked>Yes &nbsp;
                                                                            <input type="radio" name="ptn_eligible" class="" value="No">No
                                                                            <span class="text-danger error-text type_category_err"></span>
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                </div><!-- / row -->

                                                                <!-- <input type="submit" class="submit_btn btn btn-primary bg_color" id="next5" name="submit" value="Submit"> -->
                                                                <button type="submit" class="submit_btn btn btn-outline-primary hvr-shutter-in-vertical" id="next5" name="submit" value="Submit">Next</button>
                                                                 <hr style="border-top: 2px solid #2B48B0;"/>
                                                    
                                                </div>

                                            </div>
                                            <div class="box-footer clearfix">
                                                 <!-- <input type="submit" class="submit_btn btn btn-primary" id="next1" name="submit" value="submit"> -->
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
         <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>


        
        <!-- BDAY -->
        <!-- <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script> -->

        <!-- <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script> -->
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
        $('#add1').click(function() {
            i1++;
            $('#dynamic_field1').append('<div id="row1'+i1+'"> <label" for="member_'+ i1 +'"> </label> <input type="text" class="form-control dis_inline" name="diagnosis[]" value=""><button type="button" class="btn_remove1 btn btn-danger btn-circle btn-sm" name="remove" id="'+ i1 +'"><span class="glyphicon glyphicon-minus"></span></button></div>')

        });
        $(document).on('click', '.btn_remove1', function() {
            var button_id = $(this).attr("id");
            $('#row1' + button_id + '').remove();
        });
    });

     $(document).ready(function() {
                var i=0; 
                $('#add').click(function() {
                    i++;
                    
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" name="medicine_name[]"></td><td><input type="text" class="form-control" name="dose[]"></td><td><input type="text" class="form-control" name="frequency[]"></td><td><input type="text" class="form-control" name="duration[]"></td><td><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="'+ i +'"><span class="glyphicon glyphicon-minus"></span></button></td></tr>')

                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });
            });

     /**************************Start treating doctor code****************************/
      $(document).ready(function() {
                var td_i=0; 
                $('#td_add').click(function() {
                    td_i++;

      $('#td_dynamic_field').append('<div class="row" id="rowdr'+td_i+'"><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="doctor_name[]"></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control numberonly" maxlength="15" name="doctor_mobile[]"></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><input type="email" class="form-control" name="doctor_email[]"></div></div><div class="col-md-2"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="hospital_name[]"></div></div><div class="col-md-1"> <div class="form-group wrapper-class" ><label><button type="button" class="btn_removedr btn btn-danger btn-circle btn-sm" name="remove" id="'+ td_i +'"><span class="glyphicon glyphicon-minus"></span></button></label></div></div></div>')              

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
                $('#chl_add').click(function() {
                    chl_i++;

      $('#chl_dynamic_field').append('<div class="row" id="rowchl'+chl_i+'"><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control" name="chl_name[]"></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><textarea name="chl_add[]" class="form-control"></textarea></div></div><div class="col-md-3"><div class="form-group wrapper-class" ><input type="text" class="form-control numberonly" maxlength="15" name="chl_mobile[]"></div></div><div class="col-md-2"><div class="form-group wrapper-class" ><input type="email" class="form-control" name="chl_email[]"></div></div><div class="col-md-1"> <div class="form-group wrapper-class" ><label><button type="button" class="btn_removechl btn btn-danger btn-circle btn-sm" name="remove" id="'+ chl_i +'"><span class="glyphicon glyphicon-minus"></span></button></label></div></div></div>')              

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

/*$(document).ready(function() {
    if(name.length == 0){
        $('#Name').after('<div class="red">Name is Required</div>');
    }
    $('form').submit(function(event) {
        $('#bowels_score').after('<div class="red">Name is Required</div>');
            var isValid = true;
  $('input[required]').each(function() {
                if ($(this).val() == '') {
                    isValid = false;
                    $('#bowels_score').after('<div class="red">Name is Required</div>');
                    $(this).addClass('is-invalid');
                }
            });
   });
});*/
  
</script>
<!-----------Start Jquery validation CDN----------->
<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->
<!-----------End Jquery validation CDN----------->
<script>

          $(document).ready(function(){

            $("#next1").click(function(){
                    var applicant_gender = $("select[name='applicant_gender']").find('option:selected').val();
                    var applicant_name=$("input[name='applicant_name']").val();
                
                    if (applicant_name == "" || applicant_gender == "")
                    {

                    }
                    else{
                          $("#tab_1").hide();
                          $("#tab_2").show();
                          $("li#point_1").removeClass("active");
                          $("li#point_2").addClass("active");
                        }
            });
            $("#next2").click(function(){
                    
                          $("#tab_2").hide();
                          $("#tab_3").show();
                          $("li#point_2").removeClass("active");
                          $("li#point_3").addClass("active");
                    
            });
            $("#next3").click(function(){
                    
                          $("#tab_3").hide();
                          $("#tab_4").show();
                          $("li#point_3").removeClass("active");
                          $("li#point_4").addClass("active");
                    
            });
            $("#next4").click(function(){
                    var aggression = $("select[name='aggression']").find('option:selected').val();
                    var Violence = $("select[name='Violence']").find('option:selected').val();
                    var bed_restrain = $("select[name='bed_restrain']").find('option:selected').val();
                    var wandering = $("select[name='wandering']").find('option:selected').val();
                    var sleep = $("select[name='sleep']").find('option:selected').val();
                    var giver_care = $("select[name='giver_care']").find('option:selected').val();

                    var bowels_score=$("input[name='bowels_score']").val();
                    var bladder_score=$("input[name='bladder_score']").val();
                    var toilet_score=$("input[name='toilet_score']").val();
                    var bathing_score=$("input[name='bathing_score']").val();
                    var grooming_score=$("input[name='grooming_score']").val();
                    var dressing_score=$("input[name='dressing_score']").val();
                    var feeding_score=$("input[name='feeding_score']").val();
                    var transfer_score=$("input[name='transfer_score']").val();
                    var mobility_score=$("input[name='mobility_score']").val();
                    var stairs_score=$("input[name='stairs_score']").val();
                
                    if (bowels_score == "" || bladder_score == "" || toilet_score == "" || bathing_score == "" || grooming_score == "" || dressing_score == "" || feeding_score == "" || transfer_score == "" || mobility_score == "" || stairs_score == "")
                    {

                    }
                    else{
                          $("#tab_4").hide();
                          $("#tab_5").show();
                          $("li#point_4").removeClass("active");
                          $("li#point_5").addClass("active");
                        }
            });
            
        });

           
            $('#next5').on( "click", function() {
                
                setInterval(function(){
                $('#next5').attr('disabled', true); 
                },100)
                $('.loader').show();
            });
        

    </script>
<?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>