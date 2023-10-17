<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
 

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <?php require_once(APPPATH.'views/include/responsive_design.php');?>
    </head>
    <body class="skin-blue" >
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php require_once(APPPATH.'views/include/sidebar.php');?>
 <!-- <script language="javascript">
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
				 }
                 </script> -->
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Modify Patient</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Member Management</a></li>
                        <li class="active">Modify Patient</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="row">
                 	<div class="col-md-12">
                    <form role="form" method="post" action="<?php echo base_url()?>app/patient/edits" onSubmit="return validate()" enctype="multipart/form-data">    
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
                                                <li><a href="#tab_5" data-toggle="tab">Ongoing Medication</a></li>
                                                <li><a href="#tab_6" data-toggle="tab">Upload Assesment Form</a></li> -->
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
                                                    
                          													
                                                    <input type="hidden" name="id" value="<?php echo $patientInfo->patient_no;?>">
                                                    <tr>
                                                    	<td width="12%">Member No.</td>
                                                        <td width="88%"><input class="form-control input-sm" name="patientID" id="patientID" type="text" style="width: 100px;"  readonly value="<?php echo $patientInfo->patient_no;?>"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Title <font color="#FF0000">*</font></td>
                                                        <td width="88%">
                                                        <select name="title" id="title" class="form-control input-sm" style="width: 100px;" required>
                                                            	<option value="">- Title -</option>
																<?php 
																foreach($UserTitles as $UserTitles){
																if($_POST['title'] == $UserTitles->param_id || $patientInfo->title == $UserTitles->param_id){
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
                                                    	<td>Member's Name </td>
                                                        <td>
                                                        <?php echo form_input('middlename',set_value('middlename',$patientInfo->middlename),'id="middlename" class="form-control input-sm alphaonly" placeholder="Last Name" style="width: 250px;" required');?>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                                    	<td>Relative's Name </td>
                                                        <td>
                                                        <?php echo form_input('relative_name',set_value('relative_name',$patientInfo->relative_name),'id="fathers_name" class="form-control input-sm" placeholder="Relative`s Name" style="width: 250px;" required');?> 
                                                        </td>
                                                    </tr> -->
                                                    <tr>
                                                        <td>From Hospital/Walk In<font color="#FF0000"></font></td>
                                                        <td>
                                                        <?php echo form_input('from_hospital_walkin',set_value('from_hospital_walkin',$patientInfo->from_hospital_walkin),'id="relation_with" class="form-control input-sm" placeholder="From Hospital/Walk In" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discharge Summary<font color="#FF0000"></font></td>
                                                        <td>
                                                        <input type="file" name="dischargefile" class="form-control input-sm" style="width: 250px;"/> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Email Address</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('email',set_value('email',$patientInfo->email_address),'id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>Birthday <font color="#FF0000"></font></td>
                                                        <td>
                                                        <input class="form-control input-sm" name="birthday" id="birthday" type="date" value="<?php echo $patientInfo->birthday?>" placeholder="Birthday" style="width:150px;">
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                   <td width="12%">Age<font color="#FF0000"></font></td>
                                   <td width="88%"><input class="form-control input-sm numberonly" name="age" style="width: 250px;" value="<?php echo $patientInfo->age?>" type="text" placeholder="Age" style="width: 100px;"  value=""></td>
                               </tr>
                                                    <tr>
                                                    	<td width="12%">Gender</td>
                                                        <td width="88%">
                                                        <select name="gender" id="gender" class="form-control input-sm" style="width: 100px;">
                                                            	<option value="">- Gender -</option>
                                                                <?php 
																foreach($gender as $gender){
																if($_POST['gender'] == $gender->param_id || $patientInfo->gender == $gender->param_id){
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
                                                        <select name="civil_status" id="civil_status" class="form-control input-sm" style="width: 140px;">
                                                            	<option value="">- Civil Status -</option>
                                                                <?php 
																foreach($civilStatus as $civilStatus){
																if($_POST['civil_status'] == $civilStatus->param_id || $patientInfo->civil_status == $civilStatus->param_id){
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
																if($_POST['religion'] == $religion->param_id || $patientInfo->religion == $religion->param_id){
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
                                                    	<td width="12%">Blood Group </td>
                                                        <td width="88%">
                                                        <select name="bloodGroup" id="bloodGroup" class="form-control input-sm" style="width: 125px;">
                                                            	<option value="">- Blood Group -</option>
                                                            	<?php 
																foreach($bloodGroup as $bloodGroup){
																if($_POST['bloodGroup'] == $bloodGroup->param_id || $patientInfo->blood_group == $bloodGroup->param_id){
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
                                                            <input type="file" name="previous_dischargefile[]" class="form-control input-sm" style="width: 250px;" multiple> 
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
                                                    	<td width="14%">Address</td>
                                                        <td width="86%">
                                                        <textarea class="form-control input-sm" style="width: 250px;" name="noofhouse" id="noofhouse"><?php echo $patientInfo->street;?></textarea>
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
                                                    	<td width="14%">City</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('province',set_value('province',$patientInfo->province),'id="province" class="form-control input-sm" placeholder="City/Province" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Office)</td>
                                                        <td width="86%">
                                                        <?php echo form_input('phone_relative',set_value('phone_relative',$patientInfo->phone_no_office),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Home)</td>
                                                        <td width="86%">
                                                        <?php echo form_input('phone_home',set_value('phone_home',$patientInfo->phone_no),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Mobile)</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('phone_mobi',set_value('phone_mobi',$patientInfo->mobile_no),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    
                                                    <!-- <tr>
                                                    	<td width="14%">Email Address</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('email',set_value('email',$patientInfo->email_address),'id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;"');?>
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
                                                            <?php echo form_input('rel_name1',set_value('rel_name1',$patientInfo->rel_name1),' class="form-control input-sm alphaonly" placeholder="Name" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Relation With<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('relation_with',set_value('relation_with',$patientInfo->relation_with),'id="relation_with" class="form-control input-sm" placeholder="relation with" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input type="email" name="rel_email1" class="form-control input-sm" value="<?php echo $patientInfo->rel_email1; ?>"> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Address<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_add',set_value('rel_add',$patientInfo->rel_add),'id="noofhouse" class="form-control input-sm" placeholder="Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">City<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('rel_city',set_value('rel_city',$patientInfo->rel_city),'id="province" class="form-control input-sm" placeholder="City" style="width: 250px;"'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Phone No<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_phone',set_value('rel_phone',$patientInfo->rel_phone),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" style="width: 250px;"');?>
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
                                                            <?php echo form_input('rel_name2',set_value('rel_name2',$patientInfo->rel_name2),' class="form-control input-sm 00029" placeholder="Name" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Relation With<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('relation_with2',set_value('relation_with2',$patientInfo->relation_with2),'id="relation_with" class="form-control input-sm" placeholder="relation with" style="width: 250px;"');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email<font color="#FF0000"></font></td>
                                                        <td>
                                                            <input type="email" name="rel_email2" class="form-control input-sm" value="<?php echo $patientInfo->rel_email2; ?>"> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Address<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_add2',set_value('rel_add2',$patientInfo->rel_add2),'id="noofhouse" class="form-control input-sm" placeholder="Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">City<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('rel_city2',set_value('rel_city2',$patientInfo->rel_city2),'id="province" class="form-control input-sm" placeholder="City" style="width: 250px;"'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Phone No<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_phone2',set_value('rel_phone2',$patientInfo->rel_phone2),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" style="width: 250px;"');?>
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
                                                        <?php echo form_input('aadhar_no',set_value('aadhar_no',$patientInfo->aadhar_no),'class="form-control input-sm numberonly" placeholder="Aadhar Number" style="width: 250px;"');?>
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
																if($_POST['insurance_comp'] == $insuranceCompList->in_com_id || $patientInfo->Insurance_comp == $insuranceCompList->in_com_id){
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
                                                        <?php echo form_input('insurance_id',set_value('insurance_id',$patientInfo->insurance_no),'id="insurance_id" class="form-control input-sm" placeholder="Insurance ID Number" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="18%">TPA Name</td>
                                                        <td width="82%">
                                                        <?php echo form_input('tpa_name',set_value('tpa_name',$patientInfo->tpa_name),'class="form-control input-sm" placeholder="TPA Name" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="18%">TPA No.</td>
                                                        <td width="82%">
                                                        <?php echo form_input('tpa_no',set_value('tpa_no',$patientInfo->tpa_no),'class="form-control input-sm" placeholder="TPA No." style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="18%" valign="top">Member's Identifiers</td>
                                                        <td width="82%">
                                                        <textarea class="form-control input-sm" style="width: 250px;" name="patient_iden" id="patient_iden"><?php echo $patientInfo->id_identifiers;?></textarea>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td width="12%">Upload Assesment Form </td>
                                                        <td width="88%"><input class="form-control input-sm" type="File" style="width: 250px;margin-right: 400px;" name="ptn_asses_form" id="ptn_asses_form"></td>
                                                    </tr> -->
                                                    </table>
                                                </div>
                                                <!-- <div class="tab-pane" id="tab_4">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tR>
                                                    	<td colspan="2">
                                                        <?php echo validation_errors(); ?>     
                                                        </td>
                                                    </tR>
                                                    <input type="hidden" name="userID2" value="<?php echo $patientInfo->patient_no;?>">
                                                    <tr>
                                                    	<td width="12%">KCO</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_kco" id="ptn_kco"><?php echo $patientInfo->ptn_kco ?></textarea></td>
                                                        <td width="12%">Chief Complaint</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_chf_comp" id="ptn_chf_comp"><?php echo $patientInfo->ptn_chf_comp ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Family History</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_fam_his" id="ptn_fam_his"><?php echo $patientInfo->ptn_fam_his ?></textarea></td>
                                                        <td width="12%">Past History(Surgical/Medical)</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_past_his" id="ptn_past_his"><?php echo $patientInfo->ptn_past_his  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Pulse</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_pulse" style="width: 250px;" id="ptn_pulse" type="text" style="width: 100px;"   value="<?php echo $patientInfo->ptn_pulse  ?>"></td>
                                                        <td width="12%">CVS</td>
                                                        <td width="88%"> <input class="form-control input-sm" type="text" style="width: 250px;margin-right: 400px;" name="ptn_cvs" id="ptn_cvs" value="<?php echo $patientInfo->ptn_cvs  ?>"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">B.P</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_bp" style="width: 250px;" id="ptn_bp" type="text" style="width: 100px;"   value="<?php echo $patientInfo->ptn_bp  ?>"></td>
                                                        <td width="12%">CNS</td>
                                                        <td width="88%"> <input class="form-control input-sm" type="text" style="width: 250px;margin-right: 400px;" name="ptn_cns" id="ptn_cns" value="<?php echo $patientInfo->ptn_cns  ?>"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">SPO2</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_spo2" style="width: 250px;" id="ptn_spo2" type="text" style="width: 100px;"   value="<?php echo $patientInfo->ptn_spo2  ?>"></td>
                                                        <td width="12%">Local Examination</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_localex" id="ptn_localex"><?php echo $patientInfo->ptn_localex  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Temp</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_temp" style="width: 250px;" id="ptn_temp" type="text" style="width: 100px;"   value="<?php echo $patientInfo->ptn_temp  ?>"></td>
                                                        <td width="12%">Urine/Motion</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_um" id="ptn_um"><?php echo $patientInfo->ptn_um  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">pa</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_pa" id="ptn_pa"><?php echo $patientInfo->ptn_pa  ?></textarea></td>
                                                        <td width="12%">RS</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_rs" id="ptn_rs"><?php echo $patientInfo->ptn_rs  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="12%">Food Intake </td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_foodin" id="ptn_foodin"><?php echo $patientInfo->ptn_foodin  ?></textarea></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	
                                                    </tr>
                                                    </table>
                                                </div> -->
                                                <!-- <div class="tab-pane" id="tab_5">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                        <td width="20%"><button type="button" name="add" id="add">Add Medicine</button>
                                                        <?php $medicine = explode(',',$patientInfo->ptn_sugess_medi); foreach($medicine as $key => $medicine1){ $key1 = $key+1; ?>
                                                        <div id="dynamic_field">
                                                            <div id="row<?=$key1?>"> 
                                                                <label" for="member_<?=$key1?>"> </label> 
                                                                <input type="text" name="medicine[].." value="<?=$medicine1?>">
                                                                <button type="button" class="btn_remove" name="remove" id="<?=$key1?>">-</button>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="medicinecuont"></input>
                                                    </td>
                                                    </tr>
                                                    <tr> 
                                                        <td width="12%">Additional Note</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_addtnl_note" id="ptn_addtnl_note"><?php echo $patientInfo->ptn_addtnl_note  ?></textarea></td>
                                                    </tr>
                                                </table>
                                                </div> -->
                                                <div class="tab-pane" id="tab_6">
                                                     <tr>
                                                       <td width="12%">Upload Assesment Form </td>
                                                       <div class="tab-pane" id="tab_4">
                                                        <iframe width="100%" frameborder="0" height="400" src="<?php echo base_url()?>app/patient/attachment/<?php echo $patientInfo->patient_no?>"></iframe>
                                                        </div>
                                                    </tr>
                                                </div>
                                            </div>
                                            <div class="box-footer clearfix">
                                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                            <a href="<?php echo base_url();?>app/patient" class="btn btn-default">Cancel</a>
                                 
                            </div>
                                        </div>  
                            </div>
                            
                        </div>
                    </div>
                     </form>
                 </div>
                 
                 <!-- <div class="row">
                 	<div class="col-md-12">
                    <form role="form" method="post" action="<?php echo base_url()?>app/patient/edit" onSubmit="return validate()">    
                    	 <input type="hidden" name="id" value="<?php echo $patientInfo->patient_no;?>">
                         <div class="box">
                         		
                         		 <div class="box-footer clearfix">
                            	
                                            <a href="<?php echo base_url();?>app/patient" class="btn btn-default">Cancel</a>
                                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                 
                            </div>
                            
                        	<div class="box-body table-responsive">
                            	
                                
                                		<div class="nav-tabs-custom">
                                        	<ul class="nav nav-tabs">
                                				<li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                                    			<li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                                                <li><a href="#tab_4" data-toggle="tab">Other Information</a></li>
                                                <li><a href="#tab_3" data-toggle="tab">General Examination</a></li>
                                                <li><a href="#tab_5" data-toggle="tab">Ongoing Medication</a></li>
                                                <li><a href="#tab_6" data-toggle="tab">Upload Assesment Form</a></li>

                                			</ul>
                                            <div class="tab-content">
                                            	
                                                
                                                
                                            	<div class="tab-pane active" id="tab_1">
                                                	<table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                    	<td colspan="2">Required fields = <font color="#FF0000">*</font></td>
                                                    </tr>
                                                    <tR>
                                                    	<td colspan="2">
                                                        <?php echo validation_errors(); ?>    
                                                        </td>
                                                    </tR>
                                                    <tr>
                                                    	<td width="12%">Patient ID</td>
                                                        <td width="88%"><input class="form-control input-sm" name="patientID" id="patientID" type="text" style="width: 100px;" required readonly value="<?php echo $patientInfo->patient_no;?>"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Title <font color="#FF0000">*</font></td>
                                                        <td width="88%">
                                                        	<select name="title" id="title" class="form-control input-sm" style="width: 100px;" required>
                                                            	<option value="">- Title -</option>
																<?php 
																foreach($UserTitles as $UserTitles){
																if($_POST['title'] == $UserTitles->param_id || $patientInfo->title == $UserTitles->param_id){
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
                                                    	<td width="12%">Last Name <font color="#FF0000">*</font></td>
                                                        <td width="88%">
                                                        <?php echo form_input('lastname',set_value('lastname',$patientInfo->lastname),'id="lastname" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" required');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>First Name <font color="#FF0000">*</font></td>
                                                        <td>
                                                        <?php echo form_input('firstname',set_value('firstname',$patientInfo->firstname),'id="firstname" class="form-control input-sm" placeholder="First Name" style="width: 250px;" required');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>Middle Name <font color="#FF0000">*</font></td>
                                                        <td>
                                                        <?php echo form_input('middlename',set_value('middlename',$patientInfo->middlename),'id="middlename" class="form-control input-sm" placeholder="Middle Name" style="width: 250px;" required');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>Birthday <font color="#FF0000">*</font></td>
                                                        <td>
                                                        <input class="form-control input-sm" name="birthday" id="birthday" type="text" value="<?php echo $patientInfo->birthday?>" placeholder="From Date" style="width:150px;" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>Birth Place</td>
                                                        <td>
                                                        <?php echo form_input('birthplace',set_value('birthplace',$patientInfo->birthplace),'id="birthplace" class="form-control input-sm" placeholder="Birth Place" style="width: 380px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Gender</td>
                                                        <td width="88%">
                                                        	<select name="gender" id="gender" class="form-control input-sm" style="width: 100px;">
                                                            	<option value="">- Gender -</option>
                                                                <?php 
																foreach($gender as $gender){
																if($_POST['gender'] == $gender->param_id || $patientInfo->gender == $gender->param_id){
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
                                                        	<select name="civil_status" id="civil_status" class="form-control input-sm" style="width: 140px;">
                                                            	<option value="">- Civil Status -</option>
                                                                <?php 
																foreach($civilStatus as $civilStatus){
																if($_POST['civil_status'] == $civilStatus->param_id || $patientInfo->civil_status == $civilStatus->param_id){
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
                                                    <tr>
                                                    	<td width="12%">Religion</td>
                                                        <td width="88%">
                                                        	<select name="religion" id="religion" class="form-control input-sm" style="width: 140px;">
                                                            	<option value="">- Religion -</option>
                                                                <?php 
																foreach($religionList as $religion){
																if($_POST['religion'] == $religion->param_id || $patientInfo->religion == $religion->param_id){
																	$selected = "selected='selected'";
																}else{
																	$selected = "";
																}
																?>
                                                            	<option value="<?php echo $religion->param_id;?>" <?php echo $selected;?>><?php echo $religion->cValue;?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Blood Group <font color="#FF0000">*</font></td>
                                                        <td width="88%">
                                                        	<select name="bloodGroup" id="bloodGroup" class="form-control input-sm" style="width: 125px;" required>
                                                            	<option value="">- Blood Group -</option>
                                                            	<?php 
																foreach($bloodGroup as $bloodGroup){
																if($_POST['bloodGroup'] == $bloodGroup->param_id || $patientInfo->blood_group == $bloodGroup->param_id){
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
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="tab_2">
                                                	<table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                    	<td colspan="2"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">No. of House</td>
                                                        <td width="86%">
                                                        <?php echo form_input('noofhouse',set_value('noofhouse',$patientInfo->street),'id="noofhouse" class="form-control input-sm" placeholder="No. of House" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Brgy./Subd.</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('brgy',set_value('brgy',$patientInfo->subd_brgy),'id="brgy" class="form-control input-sm" placeholder="Brgy./Subd." style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">City/Province</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('province',set_value('province',$patientInfo->province),'id="province" class="form-control input-sm" placeholder="City/Province" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Office)</td>
                                                        <td width="86%">
                                                        <?php echo form_input('phone_office',set_value('phone_office',$patientInfo->phone_no_office),'id="phone_office" class="form-control input-sm" placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No. (Home)</td>
                                                        <td width="86%">
                                                        <?php echo form_input('phone',set_value('phone',$patientInfo->phone_no),'id="phone" class="form-control input-sm" placeholder="Phone No (Home)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Mobile)</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('mobile',set_value('mobile',$patientInfo->mobile_no),'id="mobile" class="form-control input-sm" placeholder="Phone No (Mobile)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td width="14%">Email Address <font color="#FF0000">*</font></td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('email',set_value('email',$patientInfo->email_address),'id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    </table>
                                                </div>
                                                
                                                <div class="tab-pane" id="tab_4">
                                               		<table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                    	<td colspan="2"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="18%">Insurance Company</td>
                                                        <td width="82%">
                                                        <select name="insurance_comp" id="insurance_comp" class="form-control input-sm" style="width: 250px;">
                                                            	<option value="">- None -</option>
                                                            	<?php 
																foreach($insuranceCompList as $insuranceCompList){
																if($_POST['insurance_comp'] == $insuranceCompList->in_com_id || $patientInfo->Insurance_comp == $insuranceCompList->in_com_id){
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
                                                        <?php echo form_input('insurance_id',set_value('insurance_id',$patientInfo->insurance_no),'id="insurance_id" class="form-control input-sm" placeholder="Insurance ID Number" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="18%" valign="top">Member's Identifiers</td>
                                                        <td width="82%">
                                                        <textarea class="form-control input-sm" style="width: 250px;" name="patient_iden" id="patient_iden"><?php echo $patientInfo->id_identifiers;?></textarea>
                                                        </td>
                                                    </tr>
                                                    </table>
                                                </div>
                                                
                                                <div class="tab-pane" id="tab_3">
                                                
                                                	<iframe width="100%" frameborder="0" height="400" src="<?php echo base_url()?>app/patient/upload_picture/<?php echo $patientInfo->patient_no?>"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                               
                                
                            </div>
                            
                        </div>
                    </div>
                     </form>
                 </div> -->
                 
                 
                </section><!-- /.content -->pa
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
         <!-- BDAY -->
         <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url();?>public/js/validation.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
               /* $('#birthday').datepicker({
                    format: "dd/mm/yyyy"
                  //format: "yyyy-mm-dd"
                });  */
            
            });
            $(document).ready(function () {
                
                /*$('#birthday').datepicker({
                    format: "dd/mm/yyyy"
          //format: "yyyy-mm-dd"
                }); */ 
            
            });
            $(document).ready(function() {
            var i=0; 
            var j = 1;
            $('#add').click(function() {
                var medicinecuont = $('#medicinecuont').val();
				// console.log(diagcount);
				var i = j+ + +medicinecuont;
                // i++;
                $('#dynamic_field').append('<div id="row'+i+'"> <label" for="member_'+ i +'"> </label> <input type="text" name="medicine[]" value=""><button type="button" class="btn_remove" name="remove" id="'+ i +'">-</button></div>')
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