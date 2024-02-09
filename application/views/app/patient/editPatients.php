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
        <!DOCTYPE html>
<html>

<head>

    <head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />

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

            .input-box {
                width: 48vw !important;
            }

            textarea.form-control {
                width: 48% !important;
            }

            #ptn_spo2 {
                width: 48% !important;
            }

            #ptn_temp {
                width: 48% !important;
            }

            #ptn_pulse {
                width: 48% !important;
            }

            #ptn_bp {
                width: 48% !important;
            }


            /* Media query for devices with a maximum width of 768px */
            @media (max-width: 768px) {
                .col-md-4 {
                    width: 100% !important;
                    margin-bottom: 20px;
                    /* Add some spacing between columns on smaller screens */
                }

                .input-box {
                    width: 100% !important;
                }

                textarea.form-control {
                    width: 100% !important;
                }

                #ptn_spo2 {
                    width: 100% !important;
                }

                #ptn_temp {
                    width: 100% !important;
                }

                #ptn_pulse {
                    width: 100% !important;
                }

                #ptn_bp {
                    width: 100% !important;
                }

                input#ptn_cvs {
                    width: 100% !important;
                }

                input#ptn_cns {
                    width: 100% !important;
                }

                .section3 {
                    margin-top: 14px !important;
                }
            }

            /* Media query for devices with a maximum width of 300px */
            @media (max-width: 300px) {
                .col-md-4 {
                    width: 100% !important;
                    margin-bottom: 20px;
                    /* Add some spacing between columns on smaller screens */
                }

                .input-box {
                    width: 100% !important;
                }

                textarea.form-control {
                    width: 100% !important;
                }

                #ptn_spo2 {
                    width: 100% !important;
                }

                #ptn_temp {
                    width: 100% !important;
                }

                #ptn_pulse {
                    width: 100% !important;
                }

                #ptn_bp {
                    width: 100% !important;
                }

                input#ptn_cvs {
                    width: 100% !important;
                }

                input#ptn_cns {
                    width: 200% !important;
                }

                .section3 {
                    margin-top: 14px !important;
                }
            }
        </style>
        <?php require_once(APPPATH . 'views/include/responsive_design.php'); ?>

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
        <?php require_once(APPPATH . 'views/include/responsive_design.php'); ?>
    </head>

<body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <?php require_once(APPPATH . 'views/include/header.php'); ?>

    <div class="wrapper row-offcanvas row-offcanvas-left">

        <?php require_once(APPPATH . 'views/include/sidebar.php'); ?>
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
                <h1><a href="<?=base_url()?>app/patient/index"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 20px; color:black;"></i></a>&nbsp;&nbsp;&nbsp;Modify Patient</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Member Management</a></li>
                    <li class="active">Modify Patient</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="post" action="<?php echo base_url() ?>app/patient/edit" onSubmit="return validate()" enctype="multipart/form-data">
                            <div class="box">

                                <!-- <div class="box-footer clearfix">
                            	
                                            <a href="<?php echo base_url(); ?>app/patient" class="btn btn-default">Cancel</a>
                                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                 
                                </div> -->

                                <div class="box-body table-responsive">


                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                                            <li><a href="#tab_3" data-toggle="tab">Other Information</a></li>
                                            <!-- <li><a href="#tab_4" data-toggle="tab">General Examination</a></li> -->
                                            <!-- <li><a href="#tab_5" data-toggle="tab">Ongoing Medication</a></li> -->
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
                                                            <select name="title" id="title" class="form-control" required>
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
                                                            <input class="form-control numberonly" name="age" value="<?php echo $patientInfo->age ?>" type="text" placeholder="Age" value="" id="age">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Blood Group:</label>
                                                            <select name="bloodGroup" id="bloodGroup" class="form-control">
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
                                                            <input type="file" name="dischargefile" class="form-control" />

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
                                                            <?php echo form_input('middlename', set_value('middlename', $patientInfo->middlename), 'id="middlename" class="form-control alphaonly" placeholder="Last Name" required'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Email Address:</label>
                                                            <?php echo form_input('email', set_value('email', $patientInfo->email_address), 'id="email" class="form-control" placeholder="Email Address"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Gender:</label>
                                                            <font color="#FF0000">*</font>
                                                            <select name="gender" id="gender" class="form-control">
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
                                                            <input type="file" name="previous_dischargefile[]" class="form-control" multiple>
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
                                                                                <input onchange="deateval();" class="form-control" name="admission_date" type="date" placeholder="Admission Date">
                                                                            </div>
                                                                            <div class="form-group input-box">
                                                                                <label>From Hospital/Walk In:</label>
                                                                                <?php echo form_input('from_hospital_walkin', set_value('from_hospital_walkin', $patientInfo->from_hospital_walkin), 'id="relation_with" class="form-control input-sm" placeholder="From Hospital/Walk In"'); ?>
                                                                            </div>
                                                                            <div class="form-group input-box">
                                                                                <label>Birthday:</label>
                                                                                <input class="form-control" name="birthday" id="birthday" type="date" value="<?php echo $patientInfo->birthday ?>" placeholder="Birthday" onchange="calAge()">
                                                                            </div>
                                                                            <div class="form-group input-box">
                                                                                <label>Civil Status:</label>
                                                                                <select name="civil_status" id="civil_status" class="form-control">
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

                                                <div class="tab-pane" id="tab_2" style="margin-top: 10px;">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12">
                                                            <div class="form-group input-box ">
                                                                <h3>Gardian First</h3>
                                                            </div>
                                                            <div class="form-group input-box ">
                                                                <label>Name:</label>
                                                                <?php echo form_input('rel_name1', set_value('rel_name1', $patientInfo->rel_name1), ' class="form-control input-sm alphaonly" placeholder="Name"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Relation With:</label>
                                                                <?php echo form_input('relation_with', set_value('relation_with', $patientInfo->relation_with), 'id="relation_with" class="form-control input-sm" placeholder="relation with"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Email</label>
                                                                <input type="email" name="rel_email1" class="form-control input-sm" value="<?php echo $patientInfo->rel_email1; ?>">
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Address:</label>
                                                                <?php echo form_input('rel_add', set_value('rel_add', $patientInfo->rel_add), 'id="noofhouse" class="form-control input-sm" placeholder="Address"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>City:</label>
                                                                <?php echo form_input('rel_city', set_value('rel_city', $patientInfo->rel_city), 'id="province" class="form-control input-sm" placeholder="City"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Phone No:</label>
                                                                <?php echo form_input('rel_phone', set_value('rel_phone', $patientInfo->rel_phone), 'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No"'); ?>
                                                            </div>
                                                        </div>
                                                        <!-- <h3>Gardian Secound</h3> -->
                                                        <div class="col-md-4 col-sm-12">
                                                            <div class="form-group input-box">
                                                                <h3>Gardian Second</h3>
                                                            </div>
                                                            <div class="form-group input-box ">
                                                                <label>Name:</label>
                                                                <?php echo form_input('rel_name2', set_value('rel_name2', $patientInfo->rel_name2), ' class="form-control input-sm alphaonly" placeholder="Name"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Relation With:</label>
                                                                <?php echo form_input('relation_with2', set_value('relation_with2', $patientInfo->relation_with2), 'id="relation_with" class="form-control input-sm" placeholder="relation with"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Email</label>
                                                                <input type="email" name="rel_email2" class="form-control input-sm" value="<?php echo $patientInfo->rel_email2; ?>">
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Address:</label>
                                                                <?php echo form_input('rel_add2', set_value('rel_add2', $patientInfo->rel_add2), 'id="noofhouse" class="form-control input-sm" placeholder="Address"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>City</label>
                                                                <?php echo form_input('rel_city2', set_value('rel_city2', $patientInfo->rel_city2), 'id="province" class="form-control input-sm" placeholder="City"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Phone No:</label>
                                                                <?php echo form_input('rel_phone2', set_value('rel_phone2', $patientInfo->rel_phone2), 'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No"'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                                <h3>Address</h3>
                                                            </div>
                                                        <div class="form-group input-box ">
                                                            <label>Address:</label>
                                                            <?php echo form_input('address2',set_value('address2'),'id="address2" class="form-control input-sm" placeholder="Address2"');?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>City:</label>
                                                            <?php echo form_input('province',set_value('province',$patientInfo->province),'id="province" class="form-control input-sm" placeholder="City/Province"');?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No (Relative's)</label>
                                                            <?php echo form_input('phone_relative',set_value('phone_relative',$patientInfo->phone_no_office),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)"');?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No (Mobile):</label>
                                                            <?php echo form_input('phone_home',set_value('phone_home',$patientInfo->phone_no),'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)"');?>
                                                        </div>
                                                    </div>

                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="tab_3">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12">
                                                            <div class="form-group input-box">
                                                                <label>Aadhar No.:</label>
                                                                <?php echo form_input('aadhar_no', set_value('aadhar_no', $patientInfo->aadhar_no), 'class="form-control numberonly" placeholder="Aadhar Number"'); ?>
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
                                                                <label>Insurance ID Number:</label>
                                                                <?php echo form_input('insurance_id', set_value('insurance_id', $patientInfo->insurance_no), 'id="insurance_id" class="form-control" placeholder="Insurance ID Number"'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-sm-12">
                                                            <div class="form-group input-box">
                                                                <label>TPA Name:</label>
                                                                <?php echo form_input('tpa_name', set_value('tpa_name', $patientInfo->tpa_name), 'class="form-control" placeholder="TPA Name"'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>TPA No.:</label>
                                                                <?php echo form_input('tpa_no', set_value('tpa_no', $patientInfo->tpa_no), 'class="form-control" placeholder="TPA No."'); ?>
                                                            </div>
                                                            <div class="form-group input-box">
                                                                <label>Member's Identifiers:</label>
                                                                <textarea class="form-control input-sm" name="patient_iden" id="patient_iden"><?php echo $patientInfo->id_identifiers; ?></textarea>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>


                                             
                                                <!-- </div> -->
                                                <div class="box-footer clearfix">
                                                    <button class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSubmit" id="btnSubmit" type="submit" value="save"><i class="fa fa-save"></i> Save</button>
                                                    <a href="<?php echo base_url(); ?>app/patient" class="btn btn-default">Cancel</a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                        </form>
                    </div>
                </div>


            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->


    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>public/js/AdminLTE/app.js" type="text/javascript"></script>

    <!-- BDAY -->
    <script src="<?php echo base_url(); ?>public/datepicker/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/validation.js"></script>
    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function() {

            /*$('#birthday').datepicker({
                format: "dd/mm/yyyy"
              //format: "yyyy-mm-dd"
            });  */

        });
        $(document).ready(function() {

            /* $('#birthday').datepicker({
                    format: "dd/mm/yyyy"
          //format: "yyyy-mm-dd"
                });*/

        });
        $(document).ready(function() {
            var i = 0;
            var j = 1;
            $('#add').click(function() {
                var medicinecuont = $('#medicinecuont').val();
                // console.log(diagcount);
                var i = j + + +medicinecuont;
                // i++;
                $('#dynamic_field').append('<div id="row' + i + '" class="dis_flex"> <label for="member_' + i + '"> </label> <input type="text" name="medicine[]" value="" class="form-control dis_inline"><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="' + i + '"><span class="glyphicon glyphicon-minus"></span></button></div>')
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
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1; // jan=0; feb=1 .......
            var day = dtToday.getDate();
            var year = dtToday.getFullYear() - 18;
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();
            var minDate = year + '-' + month + '-' + day;
            var maxDate = year + '-' + month + '-' + day;
            $('#birthday').attr('max', maxDate);
        });
    </script>

</body>

</html>
       