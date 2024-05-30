<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Rehabilitation Center</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  

 <!-- <meta content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
 <meta content="free live demo hms,free live demo Assisted Living,live demo,demo,live,Assisted Living live demo,Assisted Living free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,Assisted Living,hospital,management,system,solution,online demo,demo Assisted Living,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
  <meta content="Jayson Sarino" name="author">

  <meta property="og:site_name" content="Assisted Living Free Trial Demo">
  <meta property="og:title" content="Assisted Living">
  <meta property="og:description" content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
  <!--<meta property="og:url" content="http://hms-demo.jaysonsarino.com/"> -->

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo base_url();?>public/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
                    <h1>Dashboard</h1>
                    <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>-->
                </section>

                <section class="content">
                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                    
                        <!--Start of Patient Visited-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Personal Details</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Member No.</th>
                                            <th>Member Name</th>
                                            <th>Email</th>
                                            <th>Birthday</th>
                                            <th>Gender</th>
                                            <th>Religion</th>
                                            <th>Blood Group</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getTodayAppointment)){ ?>
                                        <tr>
                                           <td><?php echo $patientInfo->patient_no;?></td>
                                           <td><?php echo !empty($patientInfo->middlename) ? $patientInfo->middlename : ''?></td>
                                           <td><?php echo !empty($patientInfo->email_address) ? $patientInfo->email_address : ''?></td>
                                            <td><?php echo !empty($patientInfo->birthday) ? $patientInfo->birthday : ''?></td>
                                           <td><?php /*echo $patientInfo->gender*/?>
                                               <?php
                                                 $ci_obj = & get_instance();
                                        $ci_obj->load->model('app/general_model');
                                        $pages = $ci_obj->general_model->getname($patientInfo->gender);
                                        
                                         echo !empty($pages->cValue) ? $pages->cValue : '';
                                        ?>
                                           </td>
                                           <td>
                                           <?php
                                               $ci_obj = & get_instance();
                                        $ci_obj->load->model('app/general_model');
                                        $pages = $ci_obj->general_model->getname($patientInfo->religion);
                                        echo !empty($pages->cValue) ? $pages->cValue : '';
                                        ?>
                                           </td>
                                           <td>
                                               <?php
                                                 $ci_obj = & get_instance();
                                        $ci_obj->load->model('app/general_model');
                                        $pages = $ci_obj->general_model->getname($patientInfo->blood_group);
                                        echo !empty($pages->cValue) ? $pages->cValue : '';
                                        ?>
                                           </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                             <div class="box-footer">
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                    </section>
                </div>

                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                    
                        <!--Start of Patient Visited-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Contact Information</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Address</th>
                                            <th>city</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getTodayAppointment)){ ?>
                                        <tr>
                                           <td><?php echo $patientInfo->street;?></td>
                                           <td><?php echo $patientInfo->province?></td>
                                           <td><?php echo $patientInfo->email_address?></td>
                                            <td><?php echo $patientInfo->phone_no_office?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                             <div class="box-footer">
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                    </section>
                </div>

                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                    
                        <!--Start of Patient Visited-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">General Examination</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>KCO</th>
                                            <th>Chief Complaint</th>
                                            <th>Family History</th>
                                            <th>Past History</th>
                                            <th>Pulse</th>
                                            <th>CVS</th>
                                            <th>B.P</th>
                                            <th>CNS</th>
                                            <th>SPO2</th>
                                            <th>Local Examination</th>
                                            <th>Temp</th>
                                            <th>Urine/Motion</th>
                                            <th>pa</th>
                                            <th>RS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getTodayAppointment)){ ?>
                                        <tr>
                                           <td><?php echo $patientInfo->ptn_kco;?></td>
                                           <td><?php echo $patientInfo->ptn_chf_comp?></td>
                                           <td><?php echo $patientInfo->ptn_fam_his?></td>
                                            <td><?php echo $patientInfo->ptn_past_his?></td>
                                           <td><?php echo $patientInfo->ptn_pulse?></td>
                                           <td><?php echo $patientInfo->ptn_cvs?></td>
                                           <td><?php echo $patientInfo->ptn_bp?></td>
                                           <td><?php echo $patientInfo->ptn_cns;?></td>
                                           <td><?php echo $patientInfo->ptn_spo2?></td>
                                           <td><?php echo $patientInfo->ptn_localex?></td>
                                            <td><?php echo $patientInfo->ptn_temp?></td>
                                           <td><?php echo $patientInfo->ptn_um?></td>
                                           <td><?php echo $patientInfo->ptn_pa?></td>
                                           <td><?php echo $patientInfo->ptn_rs?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                             <div class="box-footer">
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                    </section>
                </div>

                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                    
                        <!--Start of Patient Visited-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Individual care Plan</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date Time</th>
                                                    <th>Co-morbid Condition</th>
                                                    <th>Goal</th>
                                                    <th>Plan of Action</th>
                                                    <th>Action Taken</th>
                                                    <th>Review</th>
                                                    <th>Prepared by</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getProgressNote)){ ?>
                                        <?php foreach($getProgressNote as $rows){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td><?php echo $rows->comorbid_cond?></td>
                                                <td><?php echo $rows->goal?></td>
                                                <td><?php echo $rows->plan_action?></td>
                                                <td><?php echo $rows->action_taken?></td>
                                                <td><?php echo $rows->review?></td>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                             <div class="box-footer">
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                    </section>
                </div>
                </section>


                <!-- Main content -->
                 
                 <div class="row">
                 	<section class="col-lg-6 connectedSortable">
                    
                    	<!--Start of New Member-->
                    	<div class="box box-primary" id="loading-example">
                        	<div class="box-header">
                            	<div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
								<h3 class="box-title">Diagnosis</h3>
                            </div>
                            <div class="box-body no-padding">
                            	<div class="table-responsive">
                                	<table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Diagnosis</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($patientDiagnosis)){ ?>
                                        <?php foreach($patientDiagnosis as $diagnosisList4){?>
                                        <tr>
                                           <td><?php echo $diagnosisList4->diagnosis_name;?></td>
                                           <td><?php echo $diagnosisList4->remarks?></td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer">
                            </div>
                        </div>
                        <!--End of New Member-->
                        
                    </section>
                    
                    <section class="col-lg-6 connectedSortable">
                    
                    	<!--Start of Patient Visited-->
                    	<div class="box box-primary" id="loading-example">
                        	<div class="box-header">
                            	<div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
								<h3 class="box-title">Complain</h3>
                            </div>
                            <div class="box-body no-padding">
                            	<div class="table-responsive">
                                	<table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Complain</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($patientComplain)){ ?>
                                        <?php foreach($patientComplain as $patientComplain){?>
                                        <tr>
                                           <td><?php echo $patientComplain->complain_name;?></td>
                                           <td><?php echo $patientComplain->remarks?></td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                             <div class="box-footer">
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                        
                    </section>
                 </div>

                 <div class="row">
                    <section class="col-lg-6 connectedSortable">
                    
                        <!--Start of New Member-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Progress Note</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date Time</th>
                                            <th>Focus</th>
                                            <th>Notes</th>
                                            <th>Prepared by</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getNurseProgressNote)){ ?>
                                        <?php foreach($getNurseProgressNote as $rows){?>
                                        <tr>
                                           <td><?php echo date("M d, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td><?php echo $rows->focus?></td>
                                                <td><?php echo $rows->notes?></td>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                <td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer clearfix">
                                <?php echo $pagination5; ?>
                            </div>
                        </div>
                        <!--End of New Member-->
                        
                    </section>
                    
                    <section class="col-lg-6 connectedSortable">
                    
                        <!--Start of Patient Visited-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Vital Sign</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                                    <th>Date Time</th>
                                                    <th>Pulse rate</th>
                                                    <th>Temperature</th>
                                                    <th>SPO2</th>
                                                    <th>Blood Pressure</th>
                                                    <th>Resprition Rate </th>
                                                    <th>Prepared by</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getVital)){ ?>
                                        <?php foreach($getVital as $rows){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td><?php echo $rows->pulse_rate?>/min</td>
                                                <td><?php echo $rows->temperature?> F</td>
                                                <td><?php echo $rows->spo2?></td>
                                                <td><?php echo $rows->bp?> mm of Hg</td>
                                                <td><?php echo $rows->respiration?>/min</td>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                <td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                             <div class="box-footer clearfix">
                                <?php echo $pagination2; ?>
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                        
                    </section>
                 </div>

                 <div class="row">
                    <section class="col-lg-6 connectedSortable">
                    
                        <!--Start of New Member-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Intake Record</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                                    <th>Date & Time</th>
                                                     <th>Particulars</th> 
                                                    <th>I/V Fluids(ml)</th>
                                                    <th>Oral(ml)</th>
                                                    <th>Prepared By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getIntake)){ ?>
                                        <?php foreach($getIntake as $getIntake){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($getIntake->dDateTime));?></td>
                                                 <td><?php echo $getIntake->particulars?></td> 
                                                <td><?php echo $getIntake->IV_fluids?></td>
                                                <td><?php echo $getIntake->oral?></td>
                                                <td><?php 
                                                                        $ci_obj = & get_instance();
                                                                        $ci_obj->load->model('app/general_model');
                                                                        $pages = $ci_obj->general_model->getPreparedBy($getIntake->cPreparedBy);
                                                                        
                                                                        echo $pages->cPreparedBy?></td>
                                                <td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer clearfix">
                                <?php echo $pagination3; ?>
                            </div>
                        </div>
                        <!--End of New Member-->
                        
                    </section>
                    
                    <section class="col-lg-6 connectedSortable">
                    
                        <!--Start of Patient Visited-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Output Record</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                                    <th>Date & Time</th>
                                                    <th>Urine(ml)</th>
                                                    <th>Stool</th>
                                                    <th>Remark</th>
                                                    <!--<th>skin(ml)</th>-->
                                                    <th>Prepared By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($getOutput)){ ?>
                                        <?php foreach($getOutput as $getOutput){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($getOutput->dDateTime));?></td>
                                                <td><?php echo $getOutput->urine?></td>
                                                <td><?php echo $getOutput->stool?></td>
                                                <td><?php echo $getOutput->remark?></td>
                                                <!--<td><?php echo $getOutput->skin?></td>-->
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($getOutput->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                <td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                             <div class="box-footer clearfix">
                                <?php echo $pagination4; ?>
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                        
                    </section>
                 </div>


                  <div class="row">
                    <section class="col-lg-6 connectedSortable">
                    
                        <!--Start of Patient Medicines-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-male"></i>
                                <h3 class="box-title">Medicine Record</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                                    <th>Date & Time</th>
                                                    <th>Medicine Name</th>
                                                    <th>Dose</th>
                                                    <th>Prepared By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($given_medicine)){ ?>
                                        <?php foreach($given_medicine as $given_medicine){?>
                                        <tr>
                                           <td><?php echo date("d M, Y",strtotime($given_medicine->added_date));?></td>
                                                <td><?php
                                                $pages = $ci_obj->general_model->getMedicineById($given_medicine->iop_med_id);
                                                 echo $pages->medicine_name;
                                             ?></td>
                                                <td><?php echo $given_medicine->dose?></td>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($given_medicine->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                <td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                              <div class="box-footer clearfix">
                                <?php echo $pagination; ?>
                            </div> 
                            
                        </div>
                        <!--End of Patient Medicines-->
                        
                    </section>
                    
                    <section class="col-lg-6 connectedSortable">
                    
                    </section>
                </div> 
                 

                                <!-- Main content -->
                 <?php if($hasAccesstoDoctorAvail){?>   
                 <div class="row">
                    <section class="col-lg-6 connectedSortable">
                    
                        <!--Start of New Member-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-user-md"></i>
                                 
                                <h3 class="box-title">Doctor's IN</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive" style="height:350px; overflow-y:scroll;">
                                    <div id="doctorIN"></div>
                                </div>
                            </div>
                            <div class="box-footer">
                            </div>
                        </div>
                        <!--End of New Member-->
                        
                    </section>
                    
                    <section class="col-lg-6 connectedSortable">
                    
                        <!--Start of Patient Visited-->
                        <div class="box box-primary" id="loading-example">
                            <div class="box-header">
                                <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                 </div>
                                 <i class="fa fa-user-md"></i>
                                <h3 class="box-title">Doctor's OUT</h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive" style="height:350px; overflow-y:scroll;">
                                    <div id="doctorOUT"></div>
                                </div>
                            </div>
                             <div class="box-footer">
                            </div>
                        </div>
                        <!--End of Patient Visited-->
                        
                    </section>
                 </div>
                 <?php }?>

                 





            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
         <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>

         <script type="text/javascript">
         $(document).ready(function(){
            
            doctorOUTF();
            doctorINF();

         });

         function doctorOUTF()
         {
            $.ajax({
                url: "<?php echo base_url()?>general/getDoctorOUT",
                type: "POST",
                success: function(result){
                    $('#doctorOUT').html(result);
                },beforeSend: function(){
                    $('#doctorOUT').html("<center><img src='../public/img/ajax-loader.gif'></center>");
                }
            });
         }

         function doctorINF()
         {
            $.ajax({
                url: "<?php echo base_url()?>general/getDoctorIN",
                type: "POST",
                success: function(result){
                    $('#doctorIN').html(result);
                },beforeSend: function(){
                    $('#doctorIN').html("<center><img src='../public/img/ajax-loader.gif'></center>");
                }
            });
         }

         function doctorProcess(id,status)
         {
            if(confirm('Are you sure you want the doctor ' + status + '?'))
            {
                $.ajax({
                    url: "<?php echo base_url()?>general/procDocAvail/" + id + "/" + status,
                    type: "POST",
                    success: function()
                    {
                        alert('Doctor is ' + status);
                        doctorINF()
                        doctorOUTF()
                    },
                    beforeSend: function(){
                        $('#doctor' + status).html("<center><img src='../public/img/ajax-loader.gif'></center>");
                    }
                });
                return true;
            }
            else
            {
                return false;
            }

         }
         </script>
         
    </body>
</html>