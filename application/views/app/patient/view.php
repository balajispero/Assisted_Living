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
    </head><div style="position:fixed; bottom: 0; right: 0; width: 67%; border: 2px solid #CCC; top:200px; z-index:1001; background-color: #FFF; display:none;" id="ad2">
    <span style="right: 0; position: fixed; cursor: pointer; z-index:1002" onclick="closeAd('ad2')" >CLOSE</span>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Payroll Management System -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3182624105910612"
     data-ad-slot="4635770289"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Assisted Living -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3182624105910612"
     data-ad-slot="3101991489"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Grading System -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3182624105910612"
     data-ad-slot="6132191885"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HMS Website -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3182624105910612"
     data-ad-slot="1562391480"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php require_once(APPPATH.'views/include/sidebar.php');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Member Information Details</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Member Management</a></li>
                        <li><a href="<?php echo base_url()?>app/patient">Member Master</a></li>
                        <li class="active">Member Information Details</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div class="box">
                         		
                         		<div class="box-header">
                                    <h3 class="box-title">
                                    <a href="<?php echo base_url();?>app/patient/" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>	
                                    <!-- <a href="<?php echo base_url();?>app/patient/edit/<?php echo $patientInfo->patient_no?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Information</a> -->
                                    </h3>
                                    
                                    <div class="box-tools">
                                        <div class="input-group">
                                            
                                        </div>
                                    </div>
                                    
                                </div><!-- /.box-header -->
								
                        	<!-- <div class="box-body table-responsive">
                            
                            	<div class="nav-tabs-custom">
                                	<ul class="nav nav-tabs">
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                                    	<li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                                    	<li><a href="#tab_3" data-toggle="tab">Other Information</a></li>
                                    	<li><a href="#tab_4" data-toggle="tab">Attachment</a></li>
                                	</ul>
                                    
                                    <div class="tab-content">
                                    	<div class="tab-pane active" id="tab_1">
                                        	<table cellpadding="3" cellspacing="3" align="center" width="100%">
                                	<tr>
                                		<td width="15%">Patient ID</td>
                                        <td width="40%"><?php echo $patientInfo->patient_no?></td>
                                        <td width="45%" rowspan="6" align="center">
    									<?php
											if(!$patientInfo->picture){
												$picture = "avatar.png";	
											}else{
												$picture = $patientInfo->picture;
											}
										?>
										<img src="<?php echo base_url();?>public/patient_picture/<?php echo $picture;?>" class="img-rounded" width="150" height="150">
    									</td>
                                	</tr>
                                    <tr>
                                		<td width="15%">Member Name</td>
                                        <td width="40%"><?php echo $patientInfo->name?></td>
                                	</tr>
                                    <tr>
                                    	<td width="15%">Gender</td>
                                        <td width="40%"><?php echo $patientInfo->gender?></td>
                                    </tr>
                                    <tr>
                                    	<td width="15%">Age</td>
                                        <td width="40%"><?php echo $patientInfo->age?></td>
                                    </tr>
                                    <tr>
                                		<td width="15%">Adddress</td>
                                        <td><?php echo $patientInfo->address?></td>
                                	</tr>
                                    <tr>
                                		<td width="15%">Civil Status</td>
                                        <td width="40%"><?php echo $patientInfo->civil_status?></td>
                                	</tr>
                                    <tr>
                                    	<td width="15%">Religion</td>
                                        <td width="40%"><?php echo $patientInfo->religion?></td>
                                    </tr>
                                    <tr>
                                		<td width="15%">Birthday</td>
                                        <td width="40%"><?php echo date('M d, Y',strtotime($patientInfo->birthday));?></td>
                                        
                                	</tr>
                                    <tr>
                                    	<td width="15%">Birth Place</td>
                                        <td width="40%"><?php echo $patientInfo->birthplace?></td>
                                    </tr>
                                    <tr>
                                    	<td>Blood Group</td>
                                        <td><?php echo $patientInfo->blood_group?></td>
                                    </tr>
                                	</table>
                                        </div>
                                        <div class="tab-pane" id="tab_2">
                                        	<table cellpadding="3" cellspacing="3" align="center" width="100%">
                                     <tr>
                                     	<td width="21%">Phone No (Home).</td>
                                        <td width="79%"><?php echo $patientInfo->phone_no?></td>
                                     </tr>
                                     <tr>
                                     	<td>Phone No (Office).</td>
                                        <td><?php echo $patientInfo->phone_no_office?></td>
                                     </tr>
                                     <tr>
                                     	<td>Phone No (Mobile)</td>
                                        <td><?php echo $patientInfo->mobile_no?></td>
                                     </tr>
                                     <tr>
                                     	<td>Email Address</td>
                                        <td><?php echo $patientInfo->email_address?></td>
                                     </tr>
                                     </table>
                                        </div>
                                        <div class="tab-pane" id="tab_3">
                                        	<table cellpadding="3" cellspacing="3" align="center" width="100%">
                                     <tr>
                                     	<td width="21%">Company Insurance</td>
                                        <td width="79%"><?php echo $patientInfo->company_name?></td>
                                     </tr>
                                     <tr>
                                     	<td>Isurance ID No.</td>
                                        <td><?php echo $patientInfo->insurance_no?></td>
                                     </tr>
                                     <tr>
                                     	<td>Patient Identifiers</td>
                                        <td><?php echo $patientInfo->id_identifiers?></td>
                                     </tr>
                                     </table>
                                        </div>
                                        <div class="tab-pane" id="tab_4">
                                        	<iframe width="100%" frameborder="0" height="400" src="<?php echo base_url()?>app/patient/attachment/<?php echo $patientInfo->patient_no?>"></iframe>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> -->
                            <div class="box-body table-responsive">
                            	
                                
                                		<div class="nav-tabs-custom">
                                        	<ul class="nav nav-tabs">
                                				<li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                                    			<li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                                                <li><a href="#tab_3" data-toggle="tab">Other Information</a></li>
                                                <li><a href="#tab_4" data-toggle="tab">General Examination</a></li>
                                                <li><a href="#tab_5" data-toggle="tab">Ongoing Medication</a></li>
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
                                                    
                                                    <input type="hidden" name="id" value="<?php echo $patientInfo->patient_no;?>">
                                                    <tr>
                                                    	<td width="12%">Member No.</td>
                                                        <td width="88%"><input class="form-control input-sm" name="patientID" id="patientID" type="text" style="width: 100px;"  readonly value="<?php echo $patientInfo->patient_no;?>"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Title <font color="#FF0000">*</font></td>
                                                        <td width="88%">
                                                        <select name="title" id="title" class="form-control input-sm" style="width: 100px;pointer-events: none;" readonly>
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
                                                        <?php echo form_input('middlename',set_value('middlename',$patientInfo->middlename),'id="middlename" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" readonly');?>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                                    	<td>Father's Name </td>
                                                        <td>
                                                        <?php echo form_input('relative_name',set_value('relative_name',$patientInfo->relative_name),'id="relative_name" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" readonly');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>Relation With </td>
                                                        <td>
                                                        <?php echo form_input('relation_with',set_value('relation_with',$patientInfo->relation_with),'id="relative_name" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" readonly');?> 
                                                        </td>
                                                    </tr> -->
                                                    <tr>
                                                        <td>From Hospital/Walk In<font color="#FF0000"></font></td>
                                                        <td>
                                                        <?php echo form_input('from_hospital_walkin',set_value('from_hospital_walkin',$patientInfo->from_hospital_walkin),'id="relation_with" class="form-control input-sm" placeholder="From Hospital/Walk In" style="width: 250px;" readonly');?> 
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                    if(!empty($patientInfo->discharge_report)){
                                                        ?>
                                                      <tr>
                                                        <td>Discharge Summary<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php
                                                        $ext = pathinfo($patientInfo->discharge_report, PATHINFO_EXTENSION);
                                                                 
                                                        if($ext=="pdf")
                                                        {
                                                            ?>
                                                            
                                                              <iframe src="<?php echo base_url('public/on_admission_discharge_report/');?><?php echo $patientInfo->discharge_report;?>" width="160" height="200" scrolling="no"></iframe><br>
                                                              <a href="<?php echo base_url('public/on_admission_discharge_report/'); ?><?php echo $patientInfo->discharge_report; ?>" target="_blank">Download PDF</a>  
                                                            
                                                        <?php }elseif($ext=="png" || $ext=="jpeg" || $ext=="jpg"){ ?>
                                                            
                                                                <img src="<?php echo base_url('public/on_admission_discharge_report/');?><?php echo $patientInfo->discharge_report;?>" alt="not found" style="width:160px;height:200px;">
                                                            

                                                      <?php 
                                                        }
                                                            else{
                                                                  echo $patientInfo->discharge_report;
                                                                 } 
                                                        ?>

                                                     
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <tr>
                                                    	<td>Birthday <font color="#FF0000">*</font></td>
                                                        <td>
                                                        <input class="form-control input-sm" name="birthday" id="birthday" type="text" value="<?php echo $patientInfo->birthday?>" placeholder="From Date" style="width:150px;" readonly>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Gender</td>
                                                        <td width="88%">
                                                        <select name="gender" id="gender" class="form-control input-sm" style="width: 100px;pointer-events: none;" readonly>
                                                            	<option value="" readonly>- Gender -</option>
                                                                <?php 
																foreach($gender as $gender){
																if($_POST['gender'] == $gender->param_id || $patientInfo->gender == $gender->param_id){
																	$selected = "selected='selected'";
																}else{
																	$selected = "";
																}
																?>
                                                            	<option value="<?php echo $gender->param_id;?>" <?php echo $selected;?>readonly><?php echo $gender->cValue;?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Civil Status</td>
                                                        <td width="88%">
                                                        <select name="civil_status" id="civil_status" class="form-control input-sm" style="width: 140px;pointer-events: none;"readonly>
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
                                                        <select name="religion" id="religion" class="form-control input-sm" style="width: 140px;pointer-events: none;"readonly>
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
                                                        <select name="bloodGroup" id="bloodGroup" class="form-control input-sm" style="width: 125px;pointer-events: none;" readonly>
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
                                                    <div class="row">
                                                        
                                        <?php
                                        if(!empty($patientInfo->previous_discharge_report)){
                                            $str =$patientInfo->previous_discharge_report;
                                                    $arrayd=explode(",",$str);
                                                    
                                                    $cnt=count($arrayd);
                                                    
                                                    for($i=0;$i<$cnt;$i++)
                                                    {
                                                
                                                ?>
                                                <div class="col-md-3">
                                                  <div class="thumbnail" style="width:fit-content;margin-bottom: 2px;"> 
                                                    
                                                        <?php
                                                        $ext = pathinfo($arrayd[$i], PATHINFO_EXTENSION);
                                                                // print_r($ext);
                                                        if($ext=="pdf")
                                                        {
                                                            ?>
                                                            
                                                              <iframe src="<?php echo base_url('public/previous_discharge_report/');?><?php echo $arrayd[$i];?>" width="160" height="200" scrolling="no"></iframe><br>
                                                              <a href="<?php echo base_url('public/previous_discharge_report/'); ?><?php echo $arrayd[$i]; ?>" target="_blank">Download PDF</a>
                                                            
                                                        <?php }elseif($ext=="png" || $ext=="jpeg" || $ext=="jpg"){ ?>
                                                            <a href="<?php echo base_url('public/previous_discharge_report/'); ?><?php echo $arrayd[$i]; ?>" download>
                                                                <img src="<?php echo base_url('public/previous_discharge_report/');?><?php echo $arrayd[$i];?>" alt="not found" style="width:160px;height:180px;">
                                                            </a>

                                                      <?php 
                                                        }
                                                            else{
                                                                  echo $arrayd[$i];
                                                                 } 
                                                        ?>
                                                         
                                                
                                                
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }

                                ?>
                            </div>            
                                                    

                                                    
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
                                                        <textarea class="form-control input-sm" style="width: 250px;" name="noofhouse" id="noofhouse"readonly><?php echo $patientInfo->street;?></textarea>
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
                                                        <?php echo form_input('province',set_value('province',$patientInfo->province),'id="province" class="form-control input-sm" placeholder="City/Province" style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Office)</td>
                                                        <td width="86%">
                                                        <?php echo form_input('phone_relative',set_value('phone_relative',$patientInfo->phone_no_office),'id="phone_office" readonly class="form-control input-sm" placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Home)</td>
                                                        <td width="86%">
                                                        <?php echo form_input('phone_home',set_value('phone_home',$patientInfo->phone_no),'id="phone_office" class="form-control input-sm" readonly placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Phone No (Mobile)</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('phone_mobi',set_value('phone_mobi',$patientInfo->mobile_no),'id="phone_office" class="form-control input-sm" readonly placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="14%">Email Address</td>
                                                        <td width="86%"> 
                                                        <?php echo form_input('email',set_value('email',$patientInfo->email_address),'id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
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
                                                            <?php echo form_input('rel_name1',set_value('rel_name1',$patientInfo->rel_name1),' class="form-control input-sm" placeholder="Name" style="width: 250px;"readonly');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Relation With<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('relation_with',set_value('relation_with',$patientInfo->relation_with),'id="relation_with" class="form-control input-sm" placeholder="relation with" style="width: 250px;"readonly');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Address<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_add',set_value('rel_add',$patientInfo->rel_add),'id="noofhouse" class="form-control input-sm" placeholder="Address" style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">City<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('rel_city',set_value('rel_city',$patientInfo->rel_city),'id="province" class="form-control input-sm" placeholder="City" style="width: 250px;"readonly'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Phone No<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_phone',set_value('rel_phone',$patientInfo->rel_phone),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" style="width: 250px;"readonly');?>
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
                                                            <?php echo form_input('rel_name2',set_value('rel_name2',$patientInfo->rel_name2),' class="form-control input-sm" placeholder="Name" style="width: 250px;"readonly');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Relation With<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php echo form_input('relation_with2',set_value('relation_with2',$patientInfo->relation_with2),'id="relation_with" class="form-control input-sm" placeholder="relation with" style="width: 250px;"readonly');?> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Address<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_add2',set_value('rel_add2',$patientInfo->rel_add2),'id="noofhouse" class="form-control input-sm" placeholder="Address" style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">City<font color="#FF0000"></font></td>
                                                        <td width="86%"> 
                                                            <?php echo form_input('rel_city2',set_value('rel_city2',$patientInfo->rel_city2),'id="province" class="form-control input-sm" placeholder="City" style="width: 250px;"readonly'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="14%">Phone No<font color="#FF0000"></font></td>
                                                        <td width="86%">
                                                            <?php echo form_input('rel_phone2',set_value('rel_phone2',$patientInfo->rel_phone2),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" style="width: 250px;"readonly');?>
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
                                                        <?php echo form_input('aadhar_no',set_value('aadhar_no',$patientInfo->aadhar_no),'class="form-control input-sm" placeholder="Aadhar Number" style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                    if(!empty($patientInfo->upload_aadhar)){
                                                        ?>
                                                      <tr>
                                                        <td>Uploaded Aadhar<font color="#FF0000"></font></td>
                                                        <td>
                                                            <?php
                                                        $ext = pathinfo($patientInfo->upload_aadhar, PATHINFO_EXTENSION);
                                                                 
                                                        if($ext=="pdf")
                                                        {
                                                            ?>
                                                            
                                                              <iframe src="<?php echo base_url('public/aadhar/');?><?php echo $patientInfo->upload_aadhar;?>" width="160" height="200" scrolling="no"></iframe><br>
                                                              <a href="<?php echo base_url('public/aadhar/'); ?><?php echo $patientInfo->upload_aadhar; ?>" target="_blank">Download PDF</a>  
                                                            
                                                        <?php }elseif($ext=="png" || $ext=="jpeg" || $ext=="jpg"){ ?>
                                                            
                                                                <img src="<?php echo base_url('public/aadhar/');?><?php echo $patientInfo->upload_aadhar;?>" alt="not found" style="width:160px;height:200px;">
                                                            

                                                      <?php 
                                                        }
                                                            else{
                                                                  echo $patientInfo->upload_aadhar;
                                                                 } 
                                                        ?>

                                                     
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <!-- <tr>
                                                        <td>Upload Aadhar<font color="#FF0000"></font></td>
                                                        <td>
                                                        <input type="file" name="aadharfile" class="form-control input-sm" style="width: 250px;"/> 
                                                        </td>
                                                    </tr> -->
                                                    <tr>
                                                        <td width="18%">Insurance Company</td>
                                                        <td width="82%">
                                                        <select name="insurance_comp" id="insurance_comp" class="form-control input-sm" style="width: 250px;" readonly>
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
                                                        <?php echo form_input('insurance_id',set_value('insurance_id',$patientInfo->insurance_no),'id="insurance_id" class="form-control input-sm" placeholder="Insurance ID Number" style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="18%">TPA Name</td>
                                                        <td width="82%">
                                                        <?php echo form_input('tpa_name',set_value('tpa_name',$patientInfo->tpa_name),'class="form-control input-sm" placeholder="TPA Name" style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="18%">TPA No.</td>
                                                        <td width="82%">
                                                        <?php echo form_input('tpa_no',set_value('tpa_no',$patientInfo->tpa_no),'class="form-control input-sm" placeholder="TPA No." style="width: 250px;"readonly');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="18%" valign="top">Member's Identifiers</td>
                                                        <td width="82%">
                                                        <textarea class="form-control input-sm" style="width: 250px;" name="patient_iden" id="patient_iden"readonly><?php echo $patientInfo->id_identifiers;?></textarea>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td width="12%">Upload Assesment Form </td>
                                                        <td width="88%"><input class="form-control input-sm" type="File" style="width: 250px;margin-right: 400px;" name="ptn_asses_form" id="ptn_asses_form"></td>
                                                    </tr> -->
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="tab_4">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tR>
                                                    	<td colspan="2">
                                                        <?php echo validation_errors(); ?>     
                                                        </td>
                                                    </tR>
                                                    <input type="hidden" name="userID2" value="<?php echo $patientInfo->patient_no;?>">
                                                    <tr>
                                                    	<td width="12%">KCO</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_kco" id="ptn_kco"readonly><?php echo $patientInfo->ptn_kco ?></textarea></td>
                                                        <td width="12%">Chief Complaint</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_chf_comp" id="ptn_chf_comp"readonly><?php echo $patientInfo->ptn_chf_comp ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Family History</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_fam_his" id="ptn_fam_his"readonly><?php echo $patientInfo->ptn_fam_his ?></textarea></td>
                                                        <td width="12%">Past History(Surgical/Medical)</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_past_his" id="ptn_past_his"readonly><?php echo $patientInfo->ptn_past_his  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Pulse</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_pulse" style="width: 250px;" readonly id="ptn_pulse" type="text" style="width: 100px;"   value="<?php echo $patientInfo->ptn_pulse  ?>"></td>
                                                        <td width="12%">CVS</td>
                                                        <td width="88%"> <input class="form-control input-sm" type="text" style="width: 250px;margin-right: 400px;" readonly name="ptn_cvs" id="ptn_cvs" value="<?php echo $patientInfo->ptn_cvs  ?>"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">B.P</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_bp" style="width: 250px;" id="ptn_bp" type="text" readonly style="width: 100px;"   value="<?php echo $patientInfo->ptn_bp  ?>"></td>
                                                        <td width="12%">CNS</td>
                                                        <td width="88%"> <input class="form-control input-sm" type="text" style="width: 250px;margin-right: 400px;" readonly name="ptn_cns" id="ptn_cns" value="<?php echo $patientInfo->ptn_cns  ?>"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">SPO2</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_spo2" style="width: 250px;" id="ptn_spo2" readonly type="text" style="width: 100px;"   value="<?php echo $patientInfo->ptn_spo2  ?>"></td>
                                                        <td width="12%">Local Examination</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_localex" id="ptn_localex"readonly><?php echo $patientInfo->ptn_localex  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">Temp</td>
                                                        <td width="88%"><input class="form-control input-sm" name="ptn_temp" style="width: 250px;" id="ptn_temp" readonly type="text" style="width: 100px;"   value="<?php echo $patientInfo->ptn_temp  ?>"></td>
                                                        <td width="12%">Urine/Motion</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_um" id="ptn_um"readonly><?php echo $patientInfo->ptn_um  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<td width="12%">pa</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_pa" id="ptn_pa"readonly><?php echo $patientInfo->ptn_pa  ?></textarea></td>
                                                        <td width="12%">RS</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_rs" id="ptn_rs"readonly><?php echo $patientInfo->ptn_rs  ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                    	<!-- <td width="12%">Mobilization</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_mobi" id="ptn_mobi"readonly><?php echo $patientInfo->ptn_mobi  ?></textarea></td> -->
                                                        <td width="12%">Food Intake </td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_foodin" id="ptn_foodin"readonly><?php echo $patientInfo->ptn_foodin  ?></textarea></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	
                                                    </tr>
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="tab_5">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                        <td width="20%">
                                                            <!-- <button type="button" name="add" id="add">Add Medicine</button> -->
                                                        <?php $medicine = explode(',',$patientInfo->ptn_sugess_medi); foreach($medicine as $key => $medicine1){ $key1 = $key+1; ?>
                                                        <div id="dynamic_field">
                                                            <div id="row<?=$key1?>"> 
                                                                <label" for="member_<?=$key1?>"> </label> 
                                                                <input type="text" readonly name="medicine[].." value="<?=$medicine1?>" >
                                                                <!-- <button type="button" class="btn_remove" name="remove" id="<?=$key1?>">-</button> -->
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <input  type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="medicinecuont"></input>
                                                    </td>
                                                    </tr>
                                                    <tr> 
                                                        <td width="12%">Additional Note</td>
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" readonly name="ptn_addtnl_note" id="ptn_addtnl_note"><?php echo $patientInfo->ptn_addtnl_note  ?></textarea></td>
                                                    </tr>
                                                </table>
                                                </div>
                                                <div class="tab-pane" id="tab_6">
                                        	        <iframe width="100%" frameborder="0" height="400" src="<?php echo base_url()?>app/patient/addAssesForm/<?php echo $userID2;?>"></iframe>
                                                </div>
                                            </div>
                                        </div>  
                            </div>
                            	<div class="box-footer clearfix">
                                	
                                </div>
                        </div>
                    </div>
                 </div>
                 
                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
        
    </body>
</html>