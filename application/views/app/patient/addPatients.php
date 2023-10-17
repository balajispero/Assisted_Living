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
                                                    <tr>
                                                        <td width="12%"><font color="#FF0000">Note:</font></td>
                                                        <td width="88%"><font color="#FF0000">* (Marked Fields are Compulsory to fill)</font></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Member No.</td>
                                                        <td width="88%"><input class="form-control input-sm" name="patientID" id="patientID" type="text" style="width: 100px;"  readonly value="<?php echo $userID;?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="12%">Preassessment No <font color="#FF0000"></font></td>
                                                        <td width="88%">
                                                            <select name="preassessment_no" onChange="showPreassesData(this.value);" class="form-control input-sm" style="width: 100px;">
                                                               <option value="">- Select Preassessment No  -</option>
                                                               <?php 
                                                               foreach($preassesNoList as $preassesNoList){
                                                                  
                                                                 ?>
                                                                 <option value="<?php echo $preassesNoList->preasses_no;?>"><?php echo $preassesNoList->preasses_no;?></option>
                                                             <?php }?>
                                                         </select>
                                                         
                                                     </td>
                                                 </tr>x
                                                    <tr>
                                                        <td>Admission Date<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input onchange="deateval();" class="form-control input-sm" name="admission_date" type="date" placeholder="Admission Date" style="width:150px;" >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Title <font color="#FF0000">*</font></td>
                                                        <td width="88%">
                                                        	<select name="title" id="title" class="form-control input-sm" style="width: 100px;" required >
                                                               <option value="">- Title -</option>
                                                               <?php 
                                                               foreach($UserTitles as $UserTitles){
                                                                  if($_POST['title'] == $UserTitles->param_id){
                                                                     $selected = "selected='selected'";
                                                                 }else{
                                                                     $selected = "";
                                                                 }
                                                                 ?>
                                                                 <option value="<?php echo $UserTitles->param_id;?>" <?php echo $selected;?>><?php echo $UserTitles->cValue;?></option>
                                                             <?php }?>
                                                         </select>

                                                     </td>
                                                 </tr>
                                                 <tr>
                                                   <td>Member's Name<font color="#FF0000">*</font></td>
                                                   <td>
                                                    <?php echo form_input('name',set_value('name'),'id="name" class="form-control input-sm alphaonly" placeholder="Name" style="width: 250px;"required');?>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                               <td>Relative's Name<font color="#FF0000">*</font></td>
                                               <td>
                                                <?php echo form_input('relative_name',set_value('relative_name'),'id="fathers_name" class="form-control input-sm" placeholder="Relative`s Name" style="width: 250px;"required');?> 
                                            </td>
                                        </tr> -->
                                                    <!-- <tr>
                                                    	<td>Relation With<font color="#FF0000">*</font></td>
                                                        <td>
                                                        <?php echo form_input('relation_with',set_value('relation_with'),'id="relation_with" class="form-control input-sm" placeholder="relation_with" style="width: 250px;"required');?> 
                                                        </td>
                                                    </tr> -->
                                                    <tr>
                                                        <td>From Hospital/Walk In<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('from_hospital_walkin',set_value('relation_with'),'id="relation_with" class="form-control input-sm" placeholder="From Hospital/Walk In" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discharge Summary<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input type="file" name="dischargefile" class="form-control input-sm" style="width: 250px;"/> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Email Address<font color="#FF0000">*</font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('email',set_value('email'),'id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>Birthday<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input class="form-control input-sm" name="birthday" id="birthday" type="date" placeholder="Birthday" onchange = "calAge()" style="width:150px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                   <td width="12%">Age<font color="#FF0000"></font></td>
                                   <td width="88%"><input class="form-control input-sm numberonly" name="age" style="width: 250px;" id="age" type="text" placeholder="Age" style="width: 100px;"  value=""></td>
                               </tr>
                                                    <tr>
                                                    	<td width="12%">Gender<font color="#FF0000">*</font></td>
                                                        <td width="88%">
                                                        	<select name="gender" id="gender" class="form-control input-sm" style="width: 140px;" required>
                                                               <option value="">- Gender -</option>
                                                               <?php 
                                                               foreach($gender as $gender){
                                                                if($_POST['gender'] == $gender->param_id){
                                                                   $selected = "selected='selected'";
                                                               }else{
                                                                   $selected = "";
                                                               }
                                                               ?>
                                                               <option value="<?php echo $gender->param_id;?>" <?php echo $selected;?>><?php echo $gender->cValue;?></option>
                                                           <?php }?>
                                                       </select>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td width="12%">Civil Status</td>
                                                   <td width="88%">
                                                       <select name="civil_status" id="civil_status" class="form-control input-sm" style="width: 140px;" >
                                                           <option value="">- Civil Status -</option>
                                                           <?php 
                                                           foreach($civilStatus as $civilStatus){
                                                            if($_POST['civil_status'] == $civilStatus->param_id){
                                                               $selected = "selected='selected'";
                                                           }else{
                                                               $selected = "";
                                                           }
                                                           ?>
                                                           <option value="<?php echo $civilStatus->param_id;?>" <?php echo $selected;?>><?php echo $civilStatus->cValue;?></option>
                                                       <?php }?>
                                                   </select>
                                               </td>
                                           </tr>
                                           <!--<tr>
                                               <td width="12%">Religion</td>
                                               <td width="88%">
                                                   <select name="religion" id="religion" class="form-control input-sm" style="width: 140px;">
                                                       <option value="">- Religion -</option>
                                                       <?php 
                                                       foreach($religionList as $religion){
                                                        if($_POST['religion'] == $religion->param_id){
                                                           $selected = "selected='selected'";
                                                       }else{
                                                           $selected = "";
                                                       }
                                                       ?>
                                                       <option value="<?php echo $religion->param_id;?>" <?php echo $selected;?>><?php echo $religion->cValue;?></option>
                                                   <?php }?>
                                               </select>
                                           </td>
                                       </tr>-->
                                       <tr>
                                           <td width="12%">Blood Group<font color="#FF0000"></font></td>
                                           <td width="88%">
                                               <select name="bloodGroup" id="bloodGroup" class="form-control input-sm" style="width: 140px;">
                                                   <option value="">- Blood Group -</option>
                                                   <?php 
                                                   foreach($bloodGroup as $bloodGroup){
                                                    if($_POST['bloodGroup'] == $bloodGroup->param_id){
                                                       $selected = "selected='selected'";
                                                   }else{
                                                       $selected = "";
                                                   }
                                                   ?>
                                                   <option value="<?php echo $bloodGroup->param_id;?>" <?php echo $selected;?>><?php echo $bloodGroup->cValue;?></option>
                                               <?php }?>
                                           </select>
                                       </td>
                                   </tr>
                                   <tr>
                                                        <td>Previous Discharge Reports<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input type="file" name="previous_dischargefile[]" class="form-control" style="width: 250px;" multiple="multiple"> 
                                                        </td>
                                                    </tr>
                               </table>
                           </div>
                           <div class="tab-pane" id="tab_2">
                               <table cellpadding="3" cellspacing="3" width="100%">
                                <tr>
                                   <td colspan="2"></td>
                               </tr>
                               <tr>
                                   <td width="14%">Address<font color="#FF0000"></font></td>
                                   <td width="86%">
                                    <?php echo form_input('noofhouse',set_value('noofhouse'),'id="noofhouse" class="form-control input-sm" placeholder="Address" style="width: 250px;"');?>
                                    <?php echo form_hidden('brgy',set_value('brgy'),'id="brgy" class="form-control input-sm" placeholder="Brgy./Subd." style="width: 250px;"');?>
                                </td>
                            </tr>
                                                    <!-- <tr>
                                                    	<td width="14%">Address2</td>
                                                        <td width="86%">
                                                        <?php echo form_input('address2',set_value('address2'),'id="address2" class="form-control input-sm" placeholder="Address2" style="width: 250px;"');?>
                                                        </td>
                                                    </tr> -->
                                                    <tr>
                                                    	<td width="14%">City<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('province',set_value('province'),'id="province" class="form-control input-sm" placeholder="City" style="width: 250px;"'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Relative's)<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('phone_office',set_value('phone_office'),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Home)<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('phone',set_value('phone'),'id="phone" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Work)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Mobile)<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('mobile',set_value('mobile'),'id="mobile" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Mobile)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    
                                                    <!-- <tr>
                                                    	<td width="14%">Email Address<font color="#FF0000">*</font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('email',set_value('email'),'id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr> -->
                                                </table>
                                                  <div class="row">
                                <div class="col-lg-6">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                        <td colspan="2"></td>
                                                    </tr>
                                                    <div class="form-group row">
                                                        <div class="col-sm-5 text-center"><h3>Guardian 1</h3>
                                                        </div>
                                                    </div>
                                                    <tr>
                                                        <td>Name<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('rel_name1',set_value('relation_name1'),' class="form-control input-sm alphaonly" placeholder="Name" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Relation With<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('relation_with',set_value('relation_with'),'id="relation_with" class="form-control input-sm" placeholder="relation with" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input type="email" name="rel_email1" class="form-control input-sm"> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Address<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_add',set_value('noofhouse'),'id="noofhouse" class="form-control input-sm" placeholder="Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">City<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('rel_city',set_value('province'),'id="province" class="form-control input-sm" placeholder="City" style="width: 250px;"'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Phone No<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_phone',set_value('phone_office'),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                <div class="col-lg-6">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                        <td colspan="2"></td>
                                                    </tr>
                                                    <div class="form-group row">
                                                        <div class="col-sm-5 text-center"><h3>Guardian 2</h3>
                                                        </div>
                                                    </div>
                                                    <tr>
                                                        <td>Name<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('rel_name2',set_value('relation_name2'),' class="form-control input-sm alphaonly" placeholder="Name" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Relation With<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('relation_with2',set_value('relation_with'),'id="relation_with" class="form-control input-sm" placeholder="relation with" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input type="email" name="rel_email2" class="form-control input-sm"> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Address<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_add2',set_value('noofhouse'),'id="noofhouse" class="form-control input-sm" placeholder="Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">City<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('rel_city2',set_value('province'),'id="province" class="form-control input-sm" placeholder="City" style="width: 250px;"'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Phone No<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_phone2',set_value('phone_office'),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="tab-pane" id="tab_3">
                                               <table cellpadding="3" cellspacing="3" width="100%">
                                                <tr>
                                                   <td colspan="2"></td>
                                               </tr>
                                               <tr>
                                           <td width="18%">Aadhar No.</td>
                                           <td width="82%">
                                            <?php echo form_input('aadhar_no',set_value('aadhar_no'),'class="form-control input-sm numberonly" id="aadhar_no" placeholder="Aadhar Number" style="width: 250px;"');?>
                                        </td>
                                    </tr>
                                    <tr>
                                                        <td>Upload Aadhar<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input type="file" name="aadharfile" class="form-control input-sm" style="width: 250px;"/> 
                                                        </td>
                                                    </tr>
                                               <tr>
                                                   <td width="18%">Insurance Company</td>
                                                   <td width="82%">
                                                    <select name="insurance_comp" id="insurance_comp" class="form-control input-sm" style="width: 250px;">
                                                       <option value="">- None -</option>
                                                       <?php 
                                                       foreach($insuranceCompList as $insuranceCompList){
                                                        if($_POST['insurance_comp'] == $insuranceCompList->in_com_id){
                                                           $selected = "selected='selected'";
                                                       }else{
                                                           $selected = "";
                                                       }
                                                       ?>
                                                       <option value="<?php echo $insuranceCompList->in_com_id;?>" <?php echo $selected;?>><?php echo $insuranceCompList->company_name;?></option>
                                                   <?php }?>
                                               </select>

                                           </td>
                                       </tr>
                                       <tr>
                                           <td width="18%">Insurance ID Number</td>
                                           <td width="82%">
                                            <?php echo form_input('insurance_id',set_value('insurance_id'),'id="insurance_id" class="form-control input-sm" placeholder="Insurance ID Number" style="width: 250px;"');?>
                                        </td>
                                    </tr>
                                    <tr>
                                           <td width="18%">TPA Name</td>
                                           <td width="82%">
                                            <?php echo form_input('tpa_name',set_value('tpa_name'),'class="form-control input-sm" placeholder="TPA Name" style="width: 250px;"');?>
                                        </td>
                                    </tr>
                                    <tr>
                                           <td width="18%">TPA No.</td>
                                           <td width="82%">
                                            <?php echo form_input('tpa_no',set_value('tpa_no'),'class="form-control input-sm" placeholder="TPA No." style="width: 250px;"');?>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td width="18%" valign="top">Member's Identifiers</td>
                                       <td width="82%">
                                        <textarea class="form-control input-sm" style="width: 250px;" name="patient_iden" id="patient_iden"></textarea>
                                    </td>
                                </tr>
                                <!--<tr>-->
                                    <!--    <td width="12%">Upload Assesment Form </td>-->
                                    <!--    <td width="88%"><input class="form-control input-sm" type="File" style="width: 250px;margin-right: 400px;" name="ptn_asses_form" id="ptn_asses_form"></td>-->
                                    <!--</tr>-->
                                    <!--     -->
                                </table>
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
                                                <button class="btn btn-primary bg_color" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
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

                            sub_cat +='<div id="row'+preassesmed_cnt+'">';
                            sub_cat +='<label for="member_'+preassesmed_cnt+'"> </label><input type="text" name="member[]" value="'+res[preasses_i].medicine+'">';
                            sub_cat +='<button type="button" class="btn_remove" name="remove" id="'+preassesmed_cnt+'">-</button></div>';   
                                
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
                    $('#dynamic_field').append('<div id="row'+i+'"> <label" for="member_'+ i +'">  </label> <input type="text" name="member[]" value=""><button type="button" class="btn_remove" name="remove" id="'+ i +'">-</button></div>')
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
        
    </body>
    </html>