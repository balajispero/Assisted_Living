<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Rehabilitation Center</title>
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
                width: 80% !important;
                margin: 2px;
            }
            

        </style>
        <?php require_once(APPPATH.'views/include/responsive_design.php');?>
        <style>
            input#ptn_cvs {
                width: 48% !important;
            }

            input#ptn_cns {
                width: 48% !important;
            }

            .col-md-3 {
                width: 51%;
            }

            .section3 {
                margin-top: 1px;
            }
        </style>
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

                                                    <input type="hidden" name="id" value="<?php echo $patientInfo->patient_no; ?>">
                                                </table>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <font color="#FF0000">Note:</font>
                                                        <font color="#FF0000">* (Marked Fields are Compulsory to fill)</font>
                                                    </div><br><br>
                                                    <div class="col-md-4 col-sm-12">

                                                        <div class="form-group input-box">
                                                            <label>Member No.:</label>
                                                            <input class="form-control" name="patientID" id="patientID" type="text" readonly value="<?php echo $patientInfo->patient_no; ?>">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Title:</label>
                                                            <font color="#FF0000">*</font>
                                                            <select name="title" id="title" class="form-control" required readonly>
                                                                <option value="">- Title -</option>
                                                                <?php
                                                                foreach ($UserTitles as $UserTitles) {
                                                                    if ($_POST['title'] == $UserTitles->param_id || $patientInfo->title == $UserTitles->param_id) {
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
                                                            <label>Age:</label>
                                                            <input class="form-control numberonly" name="age" value="<?php echo $patientInfo->age ?>" type="text" placeholder="Age" value="" id="age" readonly>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Blood Group:</label>
                                                            <select name="bloodGroup" id="bloodGroup" class="form-control" readonly>
                                                                <option value="">- Blood Group -</option>
                                                                <?php
                                                                foreach ($bloodGroup as $bloodGroup) {
                                                                    if ($_POST['bloodGroup'] == $bloodGroup->param_id || $patientInfo->blood_group == $bloodGroup->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $bloodGroup->param_id; ?>" <?php echo $selected; ?>><?php echo $bloodGroup->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Discharge Summary:</label>
                                                            <input type="file" name="dischargefile" class="form-control" readonly />

                                                        </div>
                                                        <div class="form-group input-box">
                                                            <?php
                                                            if (!empty($patientInfo->discharge_report)) {
                                                            ?>
                                                                <tr>
                                                                    <td>
                                                                        <font color="#FF0000"></font>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        $ext = pathinfo($patientInfo->discharge_report, PATHINFO_EXTENSION);

                                                                        if ($ext == "pdf") {
                                                                        ?>

                                                                            <iframe src="<?php echo base_url('public/on_admission_discharge_report/'); ?><?php echo $patientInfo->discharge_report; ?>" width="160" height="200" scrolling="no"></iframe><br>
                                                                            <a href="<?php echo base_url('public/on_admission_discharge_report/'); ?><?php echo $patientInfo->discharge_report; ?>" target="_blank">Download PDF</a>

                                                                        <?php } elseif ($ext == "png" || $ext == "jpeg" || $ext == "jpg") { ?>

                                                                            <img src="<?php echo base_url('public/on_admission_discharge_report/'); ?><?php echo $patientInfo->discharge_report; ?>" alt="not found" style="width:160px;height:200px;">


                                                                        <?php
                                                                        } else {
                                                                            echo $patientInfo->discharge_report;
                                                                        }
                                                                        ?>
                                                                    <?php } ?>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-4 col-sm-12">

                                                        <div class="form-group input-box">
                                                            <label for="firstName">Preassessment No:</label>
                                                            <select name="preassessment_no" onChange="showPreassesData(this.value);" class="form-control" readonly>
                                                                <option value=""><?php echo ($patientInfo->preassessment_no) ? $patientInfo->preassessment_no : "No Preassessment";?></option>
                                                                <?php
                                                                foreach ($preassesNoList as $preassesNoList) {

                                                                ?>
                                                                    <option value="<?php echo $preassesNoList->preasses_no; ?>"><?php echo $preassesNoList->preasses_no; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Member's Name:</label>
                                                            <?php echo form_input('middlename', set_value('middlename', $patientInfo->middlename), 'id="middlename" class="form-control alphaonly" placeholder="Last Name" required readonly'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Email Address:</label>
                                                            <?php echo form_input('email', set_value('email', $patientInfo->email_address), 'id="email" class="form-control" placeholder="Email Address" readonly'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Gender:</label>
                                                            <font color="#FF0000">*</font>
                                                            <select name="gender" id="gender" class="form-control" readonly>
                                                                <option value="">- Gender -</option>
                                                                <?php
                                                                foreach ($gender as $gender) {
                                                                    if ($_POST['gender'] == $gender->param_id || $patientInfo->gender == $gender->param_id) {
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
                                                            <input type="file" name="previous_dischargefile[]" class="form-control" multiple readonly>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <?php
                                                            if (!empty($patientInfo->previous_discharge_report)) {
                                                                $str = $patientInfo->previous_discharge_report;
                                                                $arrayd = explode(",", $str);

                                                                $cnt = count($arrayd);

                                                                for ($i = 0; $i < $cnt; $i++) {

                                                            ?>

                                                                    <?php
                                                                    $ext = pathinfo($arrayd[$i], PATHINFO_EXTENSION);
                                                                    // print_r($ext);
                                                                    if ($ext == "pdf") {
                                                                    ?>

                                                                        <iframe src="<?php echo base_url('public/previous_discharge_report/'); ?><?php echo $arrayd[$i]; ?>" width="160" height="200" scrolling="no"></iframe><br>
                                                                        <a href="<?php echo base_url('public/previous_discharge_report/'); ?><?php echo $arrayd[$i]; ?>" target="_blank">Download PDF</a>

                                                                    <?php } elseif ($ext == "png" || $ext == "jpeg" || $ext == "jpg") { ?>
                                                                        <a href="<?php echo base_url('public/previous_discharge_report/'); ?><?php echo $arrayd[$i]; ?>" download>
                                                                            <img src="<?php echo base_url('public/previous_discharge_report/'); ?><?php echo $arrayd[$i]; ?>" alt="not found" style="width:160px;height:180px;">
                                                                        </a>

                                                                    <?php
                                                                    } else {
                                                                        echo $arrayd[$i];
                                                                    }
                                                                    ?>
                                                            <?php
                                                                }
                                                            }

                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 section3">

                                                        <div class="form-group input-box">
                                                            <label>Admission Date:</label>
                                                            <input onchange="deateval();" class="form-control" name="admission_date" type="date" value="<?php echo $patientInfo->date_entry; ?>" placeholder="Admission Date" readonly>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>From Hospital/Walk In:</label>
                                                            <?php echo form_input('from_hospital_walkin', set_value('from_hospital_walkin', $patientInfo->from_hospital_walkin), 'id="relation_with" class="form-control input-sm" placeholder="From Hospital/Walk In"readonly'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Birthday:</label>
                                                            <input class="form-control" name="birthday" id="birthday" type="date" value="<?php echo $patientInfo->birthday ?>" placeholder="Birthday" onchange="calAge()" readonly>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Civil Status:</label>
                                                            <select name="civil_status" id="civil_status" class="form-control" readonly>
                                                                <option value="">- Civil Status -</option>
                                                                <?php
                                                                foreach ($civilStatus as $civilStatus) {
                                                                    if ($_POST['civil_status'] == $civilStatus->param_id || $patientInfo->civil_status == $civilStatus->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $civilStatus->param_id; ?>" <?php echo $selected; ?>><?php echo $civilStatus->cValue; ?></option>
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
                                                    <?php echo form_input('rel_name1', set_value('rel_name1', $patientInfo->rel_name1), ' class="form-control input-sm alphaonly" placeholder="Name" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Relation With:</label>
                                                    <?php echo form_input('relation_with', set_value('relation_with', $patientInfo->relation_with), 'id="relation_with" class="form-control input-sm" placeholder="relation with" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Email</label>
                                                    <input type="email" name="rel_email1" class="form-control input-sm" value="<?php echo $patientInfo->rel_email1; ?>" readonly>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Address:</label>
                                                    <?php echo form_input('rel_add', set_value('rel_add', $patientInfo->rel_add), 'id="noofhouse" class="form-control input-sm" placeholder="Address" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>City:</label>
                                                    <?php echo form_input('rel_city', set_value('rel_city', $patientInfo->rel_city), 'id="province" class="form-control input-sm" placeholder="City" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Phone No:</label>
                                                    <?php echo form_input('rel_phone', set_value('rel_phone', $patientInfo->rel_phone), 'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" readonly'); ?>
                                                </div>
                                            </div>
                                            <!-- <h3>Gardian Secound</h3> -->
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group input-box">
                                                    <h3>Guardian Second</h3>
                                                </div>
                                                <div class="form-group input-box ">
                                                    <label>Name:</label>
                                                    <?php echo form_input('rel_name2', set_value('rel_name2', $patientInfo->rel_name2), ' class="form-control input-sm alphaonly" placeholder="Name" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Relation With:</label>
                                                    <?php echo form_input('relation_with2', set_value('relation_with2', $patientInfo->relation_with2), 'id="relation_with" class="form-control input-sm" placeholder="relation with" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Email</label>
                                                    <input type="email" name="rel_email2" class="form-control input-sm" value="<?php echo $patientInfo->rel_email2; ?>" readonly>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Address:</label>
                                                    <?php echo form_input('rel_add2', set_value('rel_add2', $patientInfo->rel_add2), 'id="noofhouse" class="form-control input-sm" placeholder="Address" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>City</label>
                                                    <?php echo form_input('rel_city2', set_value('rel_city2', $patientInfo->rel_city2), 'id="province" class="form-control input-sm" placeholder="City" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Phone No:</label>
                                                    <?php echo form_input('rel_phone2', set_value('rel_phone2', $patientInfo->rel_phone2), 'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No" readonly'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group input-box">
                                                    <h3>Address</h3>
                                                </div>
                                                <div class="form-group input-box ">
                                                    <label>Address:</label>
                                                    <?php echo form_input('noofhouse',set_value('noofhouse',$patientInfo->street), 'id="noofhouse" class="form-control" placeholder="Address" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>City:</label>
                                                    <?php echo form_input('province', set_value('province', $patientInfo->province), 'id="province" class="form-control input-sm" placeholder="City/Province" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Phone No (Relative's)</label>
                                                    <?php echo form_input('phone_relative', set_value('phone_relative', $patientInfo->phone_no_office), 'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Phone No (Mobile):</label>
                                                    <?php echo form_input('phone_mobi',set_value('phone_mobi',$patientInfo->mobile_no),'id="phone_office" class="form-control input-sm" readonly placeholder="Phone No (Office)" style="width: 250px;"');?>
                                                </div>
                                            </div>

                                        </div>
                                                </div>
                                                <div class="tab-pane" id="tab_3">
                                              <div class="row">
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group input-box">
                                                    <label>Aadhar No.:</label>
                                                    <?php echo form_input('aadhar_no', set_value('aadhar_no', $patientInfo->aadhar_no), 'class="form-control numberonly" placeholder="Aadhar Number" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Insurance Company:</label>
                                                    <select name="insurance_comp" id="insurance_comp" class="form-control" readonly>
                                                        <option value="">- None -</option>
                                                        <?php
                                                        foreach ($insuranceCompList as $insuranceCompList) {
                                                            if ($_POST['insurance_comp'] == $insuranceCompList->in_com_id || $patientInfo->Insurance_comp == $insuranceCompList->in_com_id) {
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
                                                    <label>Upload Aadhar:</label>
                                                    <input type="file" name="aadharfile" class="form-control" readonly />
                                                </div>
                                                <div class="form-group input-box">
                                                    <?php
                                                    if (!empty($patientInfo->upload_aadhar)) {
                                                    ?>
                                                        <?php
                                                        $ext = pathinfo($patientInfo->upload_aadhar, PATHINFO_EXTENSION);

                                                        if ($ext == "pdf") {
                                                        ?>

                                                            <iframe src="<?php echo base_url('public/aadhar/'); ?><?php echo $patientInfo->upload_aadhar; ?>" width="160" height="200" scrolling="no"></iframe><br>
                                                            <a href="<?php echo base_url('public/aadhar/'); ?><?php echo $patientInfo->upload_aadhar; ?>" target="_blank">Download PDF</a>

                                                        <?php } elseif ($ext == "png" || $ext == "jpeg" || $ext == "jpg") { ?>

                                                            <img src="<?php echo base_url('public/aadhar/'); ?><?php echo $patientInfo->upload_aadhar; ?>" alt="not found" style="width:160px;height:200px;">


                                                        <?php
                                                        } else {
                                                            echo $patientInfo->upload_aadhar;
                                                        }
                                                        ?>

                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group input-box">
                                                    <label>Insurance ID Number:</label>
                                                    <?php echo form_input('insurance_id', set_value('insurance_id', $patientInfo->insurance_no), 'id="insurance_id" class="form-control" placeholder="Insurance ID Number" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>TPA Name:</label>
                                                    <?php echo form_input('tpa_name', set_value('tpa_name', $patientInfo->tpa_name), 'class="form-control" placeholder="TPA Name" readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>TPA No.:</label>
                                                    <?php echo form_input('tpa_no', set_value('tpa_no', $patientInfo->tpa_no), 'class="form-control" placeholder="TPA No." readonly'); ?>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Member's Identifiers:</label>
                                                    <textarea class="form-control input-sm" name="patient_iden" id="patient_iden" readonly><?php echo $patientInfo->id_identifiers; ?></textarea>
                                                </div>

                                            </div>

                                        </div>
                                                </div>
                                                <div class="tab-pane" id="tab_4">
                                                <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group input-box ">
                                                    <label>KCO:</label>
                                                    <textarea class="form-control input-sm" name="ptn_kco" id="ptn_kco" readonly><?php echo $patientInfo->ptn_kco ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Chief Complaint:</label>
                                                    <textarea class="form-control input-sm" name="ptn_chf_comp" id="ptn_chf_comp" readonly><?php echo $patientInfo->ptn_chf_comp ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Family History</label>
                                                    <textarea class="form-control input-sm" name="ptn_fam_his" id="ptn_fam_his" readonly><?php echo $patientInfo->ptn_fam_his ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Past History(Surgical/Medical):</label>
                                                    <textarea class="form-control input-sm" name="ptn_past_his" id="ptn_past_his" readonly><?php echo $patientInfo->ptn_past_his  ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Pulse:</label>
                                                    <input class="form-control input-sm" name="ptn_pulse" style="width: 250px;" id="ptn_pulse" type="text" value="<?php echo $patientInfo->ptn_pulse  ?>" readonly>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group input-box">
                                                    <label>Food Intake</label>
                                                    <textarea class="form-control input-sm" name="ptn_foodin" id="ptn_foodin" readonly><?php echo $patientInfo->ptn_foodin  ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Urine/Motion:</label>
                                                    <textarea class="form-control input-sm" name="ptn_um" id="ptn_um" readonly><?php echo $patientInfo->ptn_um  ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>P/A:</label>
                                                    <textarea class="form-control input-sm" name="ptn_pa" id="ptn_pa" readonly><?php echo $patientInfo->ptn_pa  ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>R/S:</label>
                                                    <textarea class="form-control input-sm" name="ptn_rs" id="ptn_rs" readonly><?php echo $patientInfo->ptn_rs  ?></textarea>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>Temp:</label>
                                                    <input class="form-control input-sm" name="ptn_temp" style="width: 250px;" id="ptn_temp" type="text" value="<?php echo $patientInfo->ptn_temp  ?>" readonly>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group input-box">
                                                    <label>CVS:</label>
                                                    <input class="form-control input-sm" type="text" name="ptn_cvs" id="ptn_cvs" value="<?php echo $patientInfo->ptn_cvs  ?>" readonly>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>B.P:</label>
                                                    <input class="form-control input-sm" name="ptn_bp" style="width: 250px;" id="ptn_bp" type="text" value="<?php echo $patientInfo->ptn_bp  ?>" readonly>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>CNS:</label>
                                                    <input class="form-control input-sm" type="text" name="ptn_cns" id="ptn_cns" value="<?php echo $patientInfo->ptn_cns  ?>" readonly>
                                                </div>
                                                <div class="form-group input-box">
                                                    <label>SPO2:</label>
                                                    <input class="form-control input-sm" name="ptn_spo2" style="width: 250px;" id="ptn_spo2" type="text" value="<?php echo $patientInfo->ptn_spo2  ?>" readonly>
                                                </div>

                                            </div>
                                        </div>
                                                </div>
                                                <div class="tab-pane" id="tab_5">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                            <tr>
                                                <td width="20%"><!-- <button type="button" name="add" id="add" class="btn btn-outline-primary hvr-shutter-in-vertical">Add Medicine</button> --><br><br>
                                                    <?php $medicine = explode(',', $patientInfo->ptn_sugess_medi);
                                                    foreach ($medicine as $key => $medicine1) {
                                                        $key1 = $key + 1; ?>
                                                        <div id="dynamic_field">
                                                            <div id="row<?= $key1 ?>" class="dis_flex">
                                                                <label for="member_<?= $key1 ?>"> </label>
                                                                <input type="text" name="medicine[].." class="form-control dis_inline" value="<?= $medicine1 ?>">
                                                                <button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="<?= $key1 ?>"><span class="glyphicon glyphicon-minus"></span></button>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <input type="hidden" value="<?php if (!empty($key1)) {
                                                                                    print($key1);
                                                                                } else {
                                                                                    echo '0';
                                                                                } ?>" id="medicinecuont"></input>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="12%">Additional Note</td>
                                                <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_addtnl_note" id="ptn_addtnl_note" readonly><?php echo $patientInfo->ptn_addtnl_note  ?></textarea></td>
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
        
    <?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>