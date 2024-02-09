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
                <h1><a href="<?= base_url() ?>app/patient/index"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 20px; color:black;"></i></a>&nbsp;&nbsp;&nbsp;Modify Patient</h1>
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
                                                            <label>From Hospital/Walk In:</label>
                                                            <?php echo form_input('from_hospital_walkin', set_value('from_hospital_walkin', $patientInfo->from_hospital_walkin), 'id="relation_with" class="form-control input-sm" placeholder="From Hospital/Walk In"'); ?>
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
                                                            <label>Admission Date:</label>
                                                            <input onchange="deateval();" class="form-control" name="admission_date" type="date" value="<?php echo $patientInfo->date_entry; ?>" placeholder="Admission Date">
                                                        </div>
                                                        <!-- <div class="form-group input-box">
                                                            <label for="firstName">Preassessment No:</label>
                                                            <select name="preassessment_no" onChange="showPreassesData(this.value);" class="form-control">
                                                                <option value="">- Select Preassessment No -</option>
                                                                <?php
                                                                foreach ($preassesNoList as $preassesNoList) {
                                                                    if ($patientInfo->preassessment_no == $preassesNoList->preasses_no) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                    

                                                                ?>
                                                                    <option value="<?php echo $preassesNoList->preasses_no; ?>"><?php echo $preassesNoList->preasses_no; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div> -->
                                                        <div class="form-group input-box">
                                                            <label>Member's Name:</label>
                                                            <font color="#FF0000">*</font>
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

                                                        <!-- <div class="form-group input-box">
                                                            <label>Admission Date:</label>
                                                            <input onchange="deateval();" class="form-control" name="admission_date" type="date" value="<?php echo $patientInfo->date_entry; ?>" placeholder="Admission Date">
                                                        </div> -->

                                                        <div class="form-group input-box">
                                                            <label>Birthday:</label>
                                                            <input class="form-control" name="birthday" id="birthday" type="date" value="<?php echo $patientInfo->birthday ?>" placeholder="Birthday" onchange="calAge()">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Age:</label>
                                                            <input class="form-control numberonly" name="age" value="<?php echo $patientInfo->age ?>" type="text" placeholder="Age" value="" id="age">
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
                                                            <?php echo form_input('address2', set_value('address2'), 'id="address2" class="form-control input-sm" placeholder="Address2"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>City:</label>
                                                            <?php echo form_input('province', set_value('province', $patientInfo->province), 'id="province" class="form-control input-sm" placeholder="City/Province"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No (Relative's)</label>
                                                            <?php echo form_input('phone_relative', set_value('phone_relative', $patientInfo->phone_no_office), 'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No (Mobile):</label>
                                                            <?php echo form_input('phone_home', set_value('phone_home', $patientInfo->phone_no), 'id="phone_office" class="form-control input-sm numberonly" maxlength="10" placeholder="Phone No (Office)"'); ?>
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

                                            <div class="tab-pane" id="tab_4">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box ">
                                                            <label>KCO:</label>
                                                            <textarea class="form-control input-sm" name="ptn_kco" id="ptn_kco"><?php echo $patientInfo->ptn_kco ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Chief Complaint:</label>
                                                            <textarea class="form-control input-sm" name="ptn_chf_comp" id="ptn_chf_comp"><?php echo $patientInfo->ptn_chf_comp ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Family History</label>
                                                            <textarea class="form-control input-sm" name="ptn_fam_his" id="ptn_fam_his"><?php echo $patientInfo->ptn_fam_his ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Past History(Surgical/Medical):</label>
                                                            <textarea class="form-control input-sm" name="ptn_past_his" id="ptn_past_his"><?php echo $patientInfo->ptn_past_his  ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Pulse:</label>
                                                            <input class="form-control input-sm" name="ptn_pulse" style="width: 250px;" id="ptn_pulse" type="text" value="<?php echo $patientInfo->ptn_pulse  ?>">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>Food Intake</label>
                                                            <textarea class="form-control input-sm" name="ptn_foodin" id="ptn_foodin"><?php echo $patientInfo->ptn_foodin  ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Urine/Motion:</label>
                                                            <textarea class="form-control input-sm" name="ptn_um" id="ptn_um"><?php echo $patientInfo->ptn_um  ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>P/A:</label>
                                                            <textarea class="form-control input-sm" name="ptn_pa" id="ptn_pa"><?php echo $patientInfo->ptn_pa  ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>R/S:</label>
                                                            <textarea class="form-control input-sm" name="ptn_rs" id="ptn_rs"><?php echo $patientInfo->ptn_rs  ?></textarea>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Temp:</label>
                                                            <input class="form-control input-sm" name="ptn_temp" style="width: 250px;" id="ptn_temp" type="text" value="<?php echo $patientInfo->ptn_temp  ?>">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>CVS:</label>
                                                            <input class="form-control input-sm" type="text" name="ptn_cvs" id="ptn_cvs" value="<?php echo $patientInfo->ptn_cvs  ?>">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>B.P:</label>
                                                            <input class="form-control input-sm" name="ptn_bp" style="width: 250px;" id="ptn_bp" type="text" value="<?php echo $patientInfo->ptn_bp  ?>">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>CNS:</label>
                                                            <input class="form-control input-sm" type="text" name="ptn_cns" id="ptn_cns" value="<?php echo $patientInfo->ptn_cns  ?>">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>SPO2:</label>
                                                            <input class="form-control input-sm" name="ptn_spo2" style="width: 250px;" id="ptn_spo2" type="text" value="<?php echo $patientInfo->ptn_spo2  ?>">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab_5">
                                                <table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                        <td width="20%"><button type="button" name="add" id="add" class="btn btn-outline-primary hvr-shutter-in-vertical">Add Medicine</button><br><br>
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
                                                        <td width="88%"> <textarea class="form-control input-sm" style="width: 250px;" name="ptn_addtnl_note" id="ptn_addtnl_note"><?php echo $patientInfo->ptn_addtnl_note  ?></textarea></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab_6">
                                                <tr>
                                                    <td width="12%">Upload Assesment Form </td>
                                                    <div class="tab-pane" id="tab_4">
                                                        <iframe width="100%" frameborder="0" height="400" src="<?php echo base_url() ?>app/patient/attachment/<?php echo $patientInfo->patient_no ?>"></iframe>
                                                    </div>
                                                </tr>
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
    <script>
        function showPreassesData(preasses_id, laboratory_id = 0) {

            if (preasses_id == "") {
                $('#admission_form').each(function() {
                    this.reset();
                });

            } else {

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var result = JSON.parse(xmlhttp.responseText);

                        var gender = "";
                        var marital_status = "";

                        if (result[0].preasses_gender == "Male") {
                            gender = "1";
                        } else if (result[0].preasses_gender == "Female") {
                            gender = "2";
                        } else if (result[0].preasses_gender == "Any Other") {
                            gender = "72";
                        }

                        if (result[0].preasses_marital_status == "Single") {
                            marital_status = "3";
                        } else if (result[0].preasses_marital_status == "Married") {
                            marital_status = "4";
                        } else if (result[0].preasses_marital_status == "Legal Seperated") {
                            marital_status = "5";
                        } else if (result[0].preasses_marital_status == "Divorced") {
                            marital_status = "6";
                        } else if (result[0].preasses_marital_status == "Widow") {
                            marital_status = "74";
                        } else if (result[0].preasses_marital_status == "Widower") {
                            marital_status = "75";
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

                xmlhttp.open("GET", "<?php echo base_url(); ?>app/patient/get_preasses_id_data/" + preasses_id, true);
                xmlhttp.send();
            }

        }

        function showMedicineName(preasses_id) {
            if (preasses_id == "") {

            } else {

                if (window.XMLHttpRequest) {
                    xmlhttp1 = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp1.onreadystatechange = function() {
                    if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
                        var res = JSON.parse(xmlhttp1.responseText);
                        //console.log(res);                     
                        var sub_cat = "";
                        var preassesmed_cnt = "";


                        for (var preasses_i = 0; preasses_i < res.length; preasses_i++) {
                            preassesmed_cnt = preasses_i + 1;

                            sub_cat += '<div id="row' + preassesmed_cnt + '" class="dis_flex">';
                            sub_cat += '<label for="member_' + preassesmed_cnt + '"> </label><input type="text" name="member[]" class="form-control dis_inline" value="' + res[preasses_i].medicine + '">';
                            sub_cat += '<button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="' + preassesmed_cnt + '"><span class="glyphicon glyphicon-minus"></span></button></div>';

                        }

                        $("#dynamic_field").html(sub_cat);
                        $("#medicinecuont").val(preassesmed_cnt);
                        //console.log(preassesmed_cnt);

                    }
                }

                xmlhttp1.open("GET", "<?php echo base_url(); ?>app/patient/getpreassesmedicine/" + preasses_id, true);
                xmlhttp1.send();
            }

        }
    </script>
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