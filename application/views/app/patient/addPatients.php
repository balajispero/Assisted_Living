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
        <style>
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
                display: inline-block !important;
                width: 80%;
                margin: 2px;
            }
            
        </style>
      <?php require_once(APPPATH.'views/include/responsive_design.php');?>
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
                    <form role="form" method="post" action="<?php echo base_url()?>app/patient/save" onSubmit="return validate()">    
                      <div class="box">

                        <!-- <div class="box-footer clearfix">

                            <a href="<?php echo base_url();?>app/patient" class="btn btn-default">Cancel</a>
                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>

                        </div> -->

                        <div class="box-body table-responsive">


                          <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                            <li><a href="#tab_3" data-toggle="tab">Other Information</a></li>
                                                 <!-- <li><a href="#tab_4" data-toggle="tab">General Examination</a></li>
                                                    <li><a href="#tab_5" data-toggle="tab">Ongoing Medication</a></li> --> 
                                                    <!-- <li><a href="#tab_6" data-toggle="tab">Upload Assesment Form</a></li> --> 
                                                </ul>
                                                <div class="tab-content">
                                                   <div class="tab-pane active" id="tab_1">
                                                       <table cellpadding="3" cellspacing="3" width="100%">
                                                    <!-- <tr>
                                                        <td colspan="2"> fields = <font color="#FF0000">*</font></td>
                                                    </tr> -->
                                                    <tR>
                                                        <td colspan="2">
                                                            <?php echo validation_errors(); ?>    
                                                        </td>
                                                    </tR>
                                                    <?php
                                                    $userID = $lastPatientID->patient_no;
                                                    $userID2 = $lastPatientID->patient_no;
                                                    if(strlen($userID) == 1){
                                                        $userID = "SSAL0000".$userID;
                                                    }else if(strlen($userID) == 2){
                                                        $userID = "SSAL0000".$userID;
                                                    }else if(strlen($userID) == 3){
                                                        $userID = "SSAL000".$userID;
                                                    }else if(strlen($userID) == 4){
                                                        $userID = "SSAL00".$userID;
                                                    }else if(strlen($userID) == 5){
                                                        $userID = "SSAL0".$userID;
                                                    }else if(strlen($userID) == 6){
                                                        $userID = $userID;
                                                    }
                                                    ?>
                                                    
                                                    <input type="hidden" name="userID2" value="<?php echo $userID2;?>">
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <font color="#FF0000">Note:</font>
                                                        <font color="#FF0000">* (Marked Fields are Compulsory to fill)</font>
                                                    </div><br><br>
                                                    <div class="col-md-4 col-sm-12">

                                                        <div class="form-group input-box">
                                                            <label>Member No.:</label>
                                                            <input type="text" class="form-control" name="patientID" id="patientID" readonly value="<?php echo $userID; ?>">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Title:</label><font color="#FF0000">*</font>
                                                            <select name="title" id="title" class="form-control" required>
                                                                <option value="">- Title -</option>
                                                                <?php
                                                                foreach ($UserTitles as $UserTitles) {
                                                                    if ($_POST['title'] == $UserTitles->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $UserTitles->param_id; ?>" <?php echo $selected; ?>><?php echo $UserTitles->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Discharge Summary:</label>
                                                            <input type="file" name="dischargefile" class="form-control">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Age:</label>
                                                            <input class="form-control numberonly" name="age" id="age" type="text" placeholder="Age" value="">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Blood Group:</label>
                                                            <select name="bloodGroup" id="bloodGroup" class="form-control">
                                                                <option value="">- Blood Group -</option>
                                                                <?php
                                                                foreach ($bloodGroup as $bloodGroup) {
                                                                    if ($_POST['bloodGroup'] == $bloodGroup->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $bloodGroup->param_id; ?>" <?php echo $selected; ?>><?php echo $bloodGroup->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">

                                                        <div class="form-group input-box">
                                                            <label for="firstName">Preassessment No:</label>
                                                            <select name="preassessment_no" onChange="showPreassesData(this.value);" class="form-control">
                                                                <option value="">- Select Preassessment No -</option>
                                                                <?php
                                                                foreach ($preassesNoList as $preassesNoList) {

                                                                ?>
                                                                    <option value="<?php echo $preassesNoList->preasses_no; ?>"><?php echo $preassesNoList->preasses_no; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Member's Name:</label>
                                                            <?php echo form_input('name', set_value('name'), 'id="name" class="form-control alphaonly" placeholder="Name" required'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Email Address:</label>
                                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Gender:</label><font color="#FF0000">*</font>
                                                            <select name="gender" id="gender" class="form-control" required>
                                                                <option value="">- Gender -</option>
                                                                <?php
                                                                foreach ($gender as $gender) {
                                                                    if (@$_POST['gender'] == @$gender->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $gender->param_id; ?>" <?php echo $selected; ?>><?php echo $gender->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Previous Discharge Reports:</label>
                                                            <input type="file" name="previous_dischargefile[]" class="form-control" multiple="multiple">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">

                                                        <div class="form-group input-box">
                                                            <label>Admission Date:</label>
                                                            <input onchange="deateval();" class="form-control" name="admission_date" type="date" placeholder="Admission Date">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>From Hospital/Walk In:</label>
                                                            <?php echo form_input('from_hospital_walkin', set_value('relation_with'), 'id="relation_with" class="form-control" placeholder="From Hospital/Walk In"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Birthday:</label>
                                                            <input class="form-control" name="birthday" id="birthday" type="date" placeholder="Birthday" onchange="calAge()">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Civil Status:</label>
                                                            <select name="civil_status" id="civil_status" class="form-control">
                                                                <option value="">- Civil Status -</option>
                                                                <?php
                                                                foreach ($civilStatus as $civilStatus) {
                                                                    /*if($_POST['civil_status'] == $civilStatus->param_id){
                                                               $selected = "selected='selected'";
                                                           }else{
                                                               $selected = "";
                                                           }*/
                                                                ?>
                                                                    <option value="<?php echo $civilStatus->param_id; ?>"><?php echo $civilStatus->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                           </div>
                           <div class="tab-pane" id="tab_2">
                               <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                    <div class="form-group input-box ">
                                                            <h3>Guardian First</h3>
                                                        </div>
                                                        <div class="form-group input-box ">
                                                            <label>Name:</label>
                                                            <?php echo form_input('rel_name1', set_value('relation_name1'), ' class="form-control alphaonly" placeholder="Name"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Relation With:</label>
                                                            <?php echo form_input('relation_with', set_value('relation_with'), 'id="relation_with" class="form-control" placeholder="relation with"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Email</label>
                                                            <input type="email" name="rel_email1" class="form-control input-sm">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Address:</label>
                                                            <?php echo form_input('rel_add', set_value('noofhouse'), 'id="noofhouse" class="form-control" placeholder="Address"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>City:</label>
                                                            <?php echo form_input('rel_city', set_value('province'), 'id="province" class="form-control" placeholder="City"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No:</label>
                                                            <?php echo form_input('rel_phone', set_value('phone_office'), 'id="phone_office" class="form-control numberonly" maxlength="10" placeholder="Phone No"'); ?>
                                                        </div>
                                                    </div>
                                                    <!-- <h3>Gardian Secound</h3> -->
                                                    <div class="col-md-4 col-sm-12">
                                                    <div class="form-group input-box">
                                                            <h3>Guardian Second</h3>
                                                        </div>
                                                        <div class="form-group input-box ">
                                                            <label>Name:</label>
                                                            <?php echo form_input('rel_name2', set_value('relation_name2'), ' class="form-control alphaonly" placeholder="Name"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Relation With:</label>
                                                            <?php echo form_input('relation_with2', set_value('relation_with'), 'id="relation_with" class="form-control" placeholder="relation with"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Email</label>
                                                            <input type="email" name="rel_email2" class="form-control input-sm">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Address:</label>
                                                            <?php echo form_input('rel_add2', set_value('noofhouse'), 'id="noofhouse" class="form-control" placeholder="Address"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>City</label>
                                                            <?php echo form_input('rel_city2', set_value('province'), 'id="province" class="form-control" placeholder="City"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No:</label>
                                                            <?php echo form_input('rel_phone2', set_value('phone_office'), 'id="phone_office" class="form-control numberonly" maxlength="10" placeholder="Phone No"'); ?>
                                                        </div>
                                                    </div>
                                                    <!-- <h3>Address</h3> -->
                                                    <div class="col-md-4 col-sm-12">
                                                    <div class="form-group input-box">
                                                            <h3><spanAddress>Address</h3>
                                                        </div>
                                                        <div class="form-group input-box ">
                                                            <label>Address:</label>
                                                            <?php echo form_input('noofhouse', set_value('noofhouse'), 'id="noofhouse" class="form-control" placeholder="Address" '); ?>
                                                            <?php echo form_hidden('brgy', set_value('brgy'), 'id="brgy" class="form-control input-sm" placeholder="Brgy./Subd." style="width: 250px;"'); ?>

                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>City:</label>
                                                            <?php echo form_input('province', set_value('province'), 'id="province" class="form-control" placeholder="City"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No (Relative's)</label>
                                                            <?php echo form_input('phone_office',set_value('phone_office'),'id="phone_office" class="form-control input-sm numberonly" maxlength="10"  placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No (Mobile):</label>
                                                            <?php echo form_input('mobile', set_value('mobile'), 'id="mobile" class="form-control numberonly" maxlength="10" placeholder="Phone No (Mobile)"'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_3">
                                               <div class="row">
                                                    <div class="col-md-5 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>Aadhar No.:</label>
                                                            <?php echo form_input('aadhar_no', set_value('aadhar_no'), 'class="form-control numberonly" id="aadhar_no" placeholder="Aadhar Number"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Upload Aadhar:</label>
                                                            <input type="file" name="aadharfile" class="form-control" />
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Insurance Company:</label>
                                                            <select name="insurance_comp" id="insurance_comp" class="form-control">
                                                                <option value="">- None -</option>
                                                                <?php
                                                                foreach ($insuranceCompList as $insuranceCompList) {
                                                                    if ($_POST['insurance_comp'] == $insuranceCompList->in_com_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $insuranceCompList->in_com_id; ?>" <?php echo $selected; ?>><?php echo $insuranceCompList->company_name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Insurance ID Number:</label>
                                                            <?php echo form_input('insurance_id', set_value('insurance_id'), 'id="insurance_id" class="form-control" placeholder="Insurance ID Number"'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>TPA Name:</label>
                                                            <?php echo form_input('tpa_name', set_value('tpa_name'), 'class="form-control" placeholder="TPA Name"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>TPA No.:</label>
                                                            <?php echo form_input('tpa_no', set_value('tpa_no'), 'class="form-control input-sm" placeholder="TPA No."'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Member's Identifiers:</label>
                                                            <textarea class="form-control input-sm"  name="patient_iden" id="patient_iden"></textarea>
                                                        </div>

                                                    </div>

                                                </div>
                            </div>
                            <div class="tab-pane" id="tab_4">
                                <table cellpadding="3" cellspacing="3" width="100%">
                                    <tR>
                                       <td colspan="2">
                                        <?php echo validation_errors(); ?>     
                                    </td>
                                </tR>
                                <input type="hidden" name="userID2" value="<?php echo $userID2;?>">
                                <tr>
                                   <td width="12%">KCO<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_kco" id="ptn_kco"></textarea></td>
                                   <td width="12%">Chief Complaint<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_chf_comp" id="ptn_chf_comp"></textarea></td>
                               </tr>
                               <tr>
                                   <td width="12%">Family History<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_fam_his" id="ptn_fam_his"></textarea></td>
                                   <td width="12%">Past History(Surgical/Medical)<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_past_his" id="ptn_past_his"></textarea></td>
                               </tr>
                               <tr>
                                   <td width="12%">Pulse<font color="#FF0000">*</font></td><td><input class="form-control input-sm" name="ptn_pulse" style="width: 250px;" placeholder="/min" id="ptn_pulse" type="number"></td>
                                   <td width="12%">CVS<font color="#FF0000">*</font></td>
                                   <td width="88%"> <input class="form-control input-sm" type="text" style="width: 250px;margin-right: 400px;" name="ptn_cvs" id="ptn_cvs"></td>
                               </tr>
                               <tr>
                                   <td width="12%">B.P<font color="#FF0000">*</font></td>
                                   <td width="88%"><input class="form-control input-sm" name="ptn_bp" style="width: 250px;" id="ptn_bp" type="number" placeholder="mmhg" style="width: 100px;"  value=""></td>
                                   <td width="12%">CNS<font color="#FF0000">*</font></td>
                                   <td width="88%"> <input class="form-control input-sm" type="text" style="width: 250px;margin-right: 400px;" name="ptn_cns" id="ptn_cns"></td>
                               </tr>
                               <tr>
                                   <td width="12%">SPO2<font color="#FF0000">*</font></td>
                                   <td width="88%"><input class="form-control input-sm" name="ptn_spo2" style="width: 250px;" id="ptn_spo2" placeholder="%" type="number" style="width: 100px;"  value=""></td>
                                   <td width="12%">Local Examination<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_localex" id="ptn_localex"></textarea></td>
                               </tr>
                               <tr>
                                   <td width="12%">Temp<font color="#FF0000">*</font></td>
                                   <td width="88%"><input class="form-control input-sm" name="ptn_temp" style="width: 250px;" id="ptn_temp" type="number" placeholder="Fahrenheit(°F)" style="width: 100px;"   value=""></td>
                                   <td width="12%">Urine/Motion<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_um" id="ptn_um"></textarea></td>
                               </tr>
                               <tr>
                                   <td width="12%">P/A<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_pa" id="ptn_pa"></textarea></td>
                                   <td width="12%">R/S<font color="#FF0000">*</font></td>
                                   <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_rs" id="ptn_rs"></textarea></td>
                               </tr>
                               <tr>
                                                    	<!-- <td width="12%">Mobilization</td>
                                                            <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_mobi"  id="ptn_mobi"></textarea></td> -->
                                                            <td width="12%">Food Intake<font color="#FF0000">*</font></td>
                                                            <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_foodin" id="ptn_foodin"></textarea></td>
                                                        </tr>

                                                        <tr>

                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="tab_5">
                                                    <table cellpadding="3" cellspacing="3" width="100%">
                                                        <tr>
                                                            <td width="20%"><button type="button" required name="add" id="add">Add Medicine</button><div id="dynamic_field"></div></td>
                                                        </tr>
                                                        <input type="hidden" value="0" id="medicinecuont"></input>
                                                        <tr> 
                                                            <td width="12%">Additional Note</td>
                                                            <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_addtnl_note" id="ptn_addtnl_note"></textarea></td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="box-footer clearfix">
                                                <button class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSubmit" id="btnSubmit" type="submit" value="save"><i class="fa fa-save"></i> Save</button>
                                                <a href="<?php echo base_url();?>app/patient" class="btn btn-default">Cancel</a> 
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
        <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url();?>public/js/validation.js"></script>
        <script>
            function showPreassesData(preasses_id,laboratory_id=0)
            {
                
                if(preasses_id=="")
                {
                    $( '#admission_form' ).each(function(){
                    this.reset();
                        });
                    
                }
                else {

            if (window.XMLHttpRequest)
              {
              xmlhttp=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function()
              {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    var result = JSON.parse(xmlhttp.responseText);
                    
                    var gender="";
                    var marital_status="";
                    
                    if(result[0].preasses_gender=="Male")
                    {
                        gender="1";
                    }else if(result[0].preasses_gender=="Female"){
                        gender="2";
                    }else if(result[0].preasses_gender=="Any Other"){
                        gender="72";
                    }

                    if(result[0].preasses_marital_status=="Single")
                    {
                        marital_status="3";
                    }else if(result[0].preasses_marital_status=="Married"){
                        marital_status="4";
                    }else if(result[0].preasses_marital_status=="Legal Seperated"){
                        marital_status="5";
                    }
                    else if(result[0].preasses_marital_status=="Divorced"){
                        marital_status="6";
                    }else if(result[0].preasses_marital_status=="Widow"){
                        marital_status="74";
                    }else if(result[0].preasses_marital_status=="Widower"){
                        marital_status="75";
                    }
                
                    $("#name").val(result[0].preasses_name);
                    $("#email").val(result[0].preasses_email);
                    $("#birthday").val(result[0].birthday);
                    $("#age").val(result[0].preasses_age);
                    $("#gender").val(gender);
                    $("#civil_status").val(marital_status);
                     /*$("#gender option[value=" + gender + "]").attr('selected', 'selected');
                    $("#civil_status option[value=" + marital_status + "]").attr('selected', 'selected');*/
                    $("#aadhar_no").val(result[0].preasses_aadhar);
                    $("#noofhouse").val(result[0].preasses_add);
                    $("#mobile").val(result[0].preasses_mobile);

                     $("input[name='rel_name1']").val(result[0].local_guardian_name);
                    $("input[name='rel_email1']").val(result[0].guardian_email);
                    $("input[name='rel_add']").val(result[0].guardian_add);
                    $("input[name='rel_phone']").val(result[0].guardian_mobile);

                    $("input[name='rel_name2']").val(result[0].local_guardian_name2);
                    $("input[name='rel_email2']").val(result[0].guardian_email2);
                    $("input[name='rel_add2']").val(result[0].guardian_add2);
                    $("input[name='rel_phone2']").val(result[0].guardian_mobile2);
                    showMedicineName(preasses_id);

                }
              }

            xmlhttp.open("GET","<?php echo base_url();?>app/patient/get_preasses_id_data/"+preasses_id,true);
            xmlhttp.send();
            }

            }

            function showMedicineName(preasses_id)
            {
                if(preasses_id=="")
                {
                         
                }
                else {

            if (window.XMLHttpRequest)
              {
              xmlhttp1=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp1.onreadystatechange=function()
              {
              if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
                {
                    var res = JSON.parse(xmlhttp1.responseText);
                    //console.log(res);                     
                    var sub_cat="";
                    var preassesmed_cnt="";


                    for (var preasses_i = 0; preasses_i < res.length; preasses_i++) {
                            preassesmed_cnt=preasses_i+1;

                            sub_cat +='<div id="row'+preassesmed_cnt+'" class="dis_flex">';
                            sub_cat +='<label for="member_'+preassesmed_cnt+'"> </label><input type="text" name="member[]" class="form-control dis_inline" value="'+res[preasses_i].medicine+'">';
                            sub_cat +='<button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="'+preassesmed_cnt+'"><span class="glyphicon glyphicon-minus"></span></button></div>';   
                                
                           }
                  
                           $("#dynamic_field").html(sub_cat);
                           $("#medicinecuont").val(preassesmed_cnt);
                           //console.log(preassesmed_cnt);

                }
              }

            xmlhttp1.open("GET","<?php echo base_url();?>app/patient/getpreassesmedicine/"+preasses_id,true);
            xmlhttp1.send();
            }

            }
         </script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {

                /*$('#birthday').datepicker({
                    format: "dd/mm/yyyy"
          //format: "yyyy-mm-dd"
                });*/  

            });
            $(document).ready(function() {
                 var i=0; 
                var j = 1;
                $('#add').click(function() {
                    var medicinecuont = $('#medicinecuont').val();
                    var i = j+ + +medicinecuont;
                    //i++;
                    $('#dynamic_field').append('<div id="row'+i+'" class="dis_flex"> <label for="member_'+ i +'">  </label> <input type="text" name="member[]" value="" class="form-control dis_inline"><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="'+ i +'"><span class="glyphicon glyphicon-minus"></span></button></div>')
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