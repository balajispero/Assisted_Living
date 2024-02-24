<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Assisted Living</title></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
 

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <!----------BOOTSTRAP DATEPICKER----------------------------->
        <link rel="stylesheet" href="<?php echo base_url();?>public/datepicker/css/datepicker.css">
        <!---------------------------------------------------------->
        
        
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
                    <?php if($this->session->userdata('emr_viewing') == "ipd_emr_viewing"){?>   
                   <h1>IPD Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">EMR sheet</a></li>
                        <li><a href="<?php echo base_url()?>app/emr/ipd">In-Member</a></li>
                    </ol>
                    <?php }else{?>
                    <h1>IPD Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Doctor Module</a></li>
                        <li><a href="<?php echo base_url()?>app/doctor/ipd">In-Member Master</a></li>
                        <li><a href="#">In-Member Information</a></li>
                    </ol>
                    <?php }?>
                </section>

                <!-- Main content -->
                <section class="content">
                 
        
                 
                 
               
                 <div class="row">
                    
                     <div class="col-md-3">
                         <div class="box">
                             <div class="box-header"></div>
                            <div class="box-body table-responsive no-padding">
                                <table width="100%" cellpadding="3" cellspacing="3">
                                <tr>
                                    <!-- <td width="15%" valign="top" align="center">
                                    <?php
                                    if(!$patientInfo->picture){
                                        $picture = "avatar.png";    
                                    }else{
                                        $picture = $patientInfo->picture;
                                    }
                                    ?>
                                    <img src="<?php echo base_url();?>public/patient_picture/<?php echo $picture;?>" class="img-rounded" width="86" height="81">
                                    </td> -->
                                    <td>
                                        <table width="100%">
                                        <tr>
                                            <td><u>Member No.</u></td>
                                            <td><?php echo $patientInfo->patient_no?></td>
                                        </tr>
                                        <tr>
                                            <td><u>Member Name</u></td>
                                            <td><?php echo $patientInfo->middlename?></td>
                                        </tr>
                                        </table>
                                    </td>
                                </tr>
                                </table>
                            </div>
                            <div class="box-footer clearfix">
                                <div style="margin-top: 15px;">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li><a href="<?php echo base_url()?>app/ipd/view/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> General Information</a></li>
                                    <li class="active"><a href="<?php echo base_url()?>app/ipd/individual_care_plan/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Individual Care Plan</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/complain/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Complaint</a></li> -->
                                    <li><a href="<?php echo base_url()?>app/ipd/diagnosis/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Diagnosis</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Medication</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li> -->
                                    <li><a href="<?php echo base_url()?>app/ipd/intake_output/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Input/Output Record</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Vital Sign</a></li>

                                    <li><a href="<?php echo base_url()?>app/ipd/room_transfer/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> IP Room Transfer</a></li>
                                    
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/bed_side_procedure/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Bed Side Procedure</a></li> -->
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/operation_theater/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Operation Theater</a></li> -->
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/patientHistory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Patient History</a></li>-->
                                    <li><a href="<?php echo base_url()?>app/ipd/laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intervention</a></li>
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/discharge_summary/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Discharge Summary</a></li>-->
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab">Individual Care Plan</a></li>
                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <?php //if($this->session->userdata('emr_viewing') == ""){?>    
                                            <?php  if($getOPDPatient->nStatus == "Pending"){?>
                                            <a href="#" class="btn btn-outline-primary hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Individual Care Plan</a>
                                            <?php } ?>
                                            <a href="<?php echo base_url()?>app/ipd_print/print_individual_care_plan/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
                                             <!-- <a href="<?php echo base_url()?>app/ipd_print/pdf_diagnosis/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> PDF</a> -->
                                             <div class="alt2" dir="ltr" style="
                                    margin: 0px;
                                    padding: 0px;
                                    border: 0px solid #919b9c;
                                    width: 100%;
                                    height: 300px;
                                    text-align: left;
                                    overflow: auto"> 
                                           <table class="table table-hover table-striped">
                                           <thead>
                                           <tr>
                                            <th>Date Time</th>
                                            <th>To Date</th>
                                                    <th>Co-morbid Condition</th>
                                                    <th>Goal</th>
                                                    <th>Plan of Action</th>
                                                    <th>Action Taken</th>
                                                    <th>Review</th>
                                                    <th>Prepared by</th>
                                                    <th></th>
                                           </tr>
                                           </thead>
                                           <tbody>
                                           <?php foreach($getProgressNote as $rows){?>
                                           <tr>
                                                <td><?php echo date("d M, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td><?php echo date("d M, Y",strtotime($rows->to_date));?></td>
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
                                                <td>
                                                <?php if($this->session->userdata('emr_viewing') == ""){?>  
                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                <?php if(strtotime($rows->to_date) <= strtotime(date("Y-m-d"))) { ?> <a href="#" class="btn-review" data-id="<?php echo $rows->ind_care_plan_id;?>" data-review="<?php echo $rows->review;?>" data-io_id="<?php echo $getOPDPatient->IO_ID;?>" data-patient_no="<?php echo $getOPDPatient->patient_no;?>" data-comorbid_cond="<?php echo $rows->comorbid_cond;?>" data-goal="<?php echo $rows->goal;?>" data-plan_action="<?php echo $rows->plan_action;?>" data-action_taken="<?php echo $rows->action_taken;?>">Review</a><!--&nbsp;|&nbsp;--> <?php } else{ } ?>
                                                <!--<a class="" href="<?php echo base_url()?>app/ipd/delete_ind_care_plan/<?php echo $rows->ind_care_plan_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>&nbsp;|&nbsp;-->
                                                <!--<a href="#" class="btn-edit" data-id="<?php echo $rows->ind_care_plan_id;?>" data-io_id="<?php echo $getOPDPatient->IO_ID;?>" data-patient_no="<?php echo $getOPDPatient->patient_no;?>" data-comorbid_cond="<?php echo $rows->comorbid_cond;?>" data-goal="<?php echo $rows->goal;?>" data-plan_action="<?php echo $rows->plan_action;?>" data-action_taken="<?php echo $rows->action_taken;?>">Edit</a>-->
                                                <?php }}?>
                                                </td>
                                           </tr>
                                           <?php }?> 
                                           </tbody>
                                           </table>
                                       </div>
                                            
                                            <br><br><br><br><br><br><br>
                                            <br><br><br><br><br><br><br>
                                            <br><br><br><br><br><br><br>
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
        
        
        <!-- Edit Modal -->
                            <form method="post" action="<?php echo base_url()?>app/ipd/edit_individual_care_plan">
                            <input type="text" name="opd_no" class="opd_no">
                            <input type="text" name="patient_no" class="patient_no">
                            <input type="hidden" name="ind_care_plan_id" class="ind_care_plan_id">
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Individual Care Plan</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>Date</td>
                                            <td><input type="text" name="dDate" id="dDate1" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="dDate form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Time</td>
                                            <td>
                                             <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker" name="cTime" id="cTime"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                            </div><!-- /.form group -->
                                            </div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Co-morbid Condition <font color="#FF0000">*</font></td>
                                            <td><input type="text" name="comorbid_cond" placeholder="Co-morbid Condition" class="form-control input-sm comorbid_cond" style="width: 250px;" required>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Goal</td>
                                            <td><input type="text" name="goal" placeholder="Goal" class="form-control input-sm goal" style="width: 250px;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Plan of action</td>
                                            <td><textarea name="plan_action" placeholder="Plan of action" class="form-control input-sm plan_action" style="width: 250px;"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Action Taken</td>
                                            <td><textarea name="action_taken" placeholder="Action Taken" class="form-control input-sm action_taken" style="width: 250px;"></textarea></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSave">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            <!-- /.modal -->
        
        <!-- Edit Modal -->
        <!-- Review Modal -->
                            <form method="post" action="<?php echo base_url()?>app/ipd/review_individual_care_plan">
                            <input type="text" name="opd_no" class="opd_no">
                            <input type="text" name="patient_no" class="patient_no">
                            <input type="hidden" name="ind_care_plan_id" class="ind_care_plan_id">
                            <div class="modal fade" id="reviewmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Individual Care Plan</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>Date</td>
                                            <td><input type="text" name="dDate" id="dDate2" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Time</td>
                                            <td>
                                             <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker" name="cTime" id="cTime"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                            </div><!-- /.form group -->
                                            </div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Co-morbid Condition</td>
                                            <td><input type="text" name="comorbid_cond" placeholder="Co-morbid Condition" class="form-control input-sm comorbid_cond" style="width: 250px;" required>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Goal</td>
                                            <td><input type="text" name="goal" placeholder="Goal" class="form-control input-sm goal" style="width: 250px;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Plan of action</td>
                                            <td><textarea name="plan_action" placeholder="Plan of action" class="form-control input-sm plan_action" style="width: 250px;"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Action Taken</td>
                                            <td><textarea name="action_taken" placeholder="Action Taken" class="form-control input-sm action_taken" style="width: 250px;"></textarea></td>
                                        </tr>
                                        <tr id="review">
                                            <td>Review</td>
                                            <td><input type="text" name="review" placeholder="Review" class="form-control input-sm review" style="width: 250px;"></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSave">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            <!-- /.modal -->
        
        <!-- Review Modal -->
                            <form method="post" action="<?php echo base_url()?>app/ipd/individual_care_plan" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Individual Care Plan</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>Date</td>
                                            <td><input type="text" name="dDate" id="dDate" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="dDate form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Time</td>
                                            <td>
                                             <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker" name="cTime" id="cTime"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                            </div><!-- /.form group -->
                                            </div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>To Date</td>
                                            <td><input type="text" name="todDate" id="dDate3" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="dDate form-control input-sm" style="width: 100%;" required></td>
                                        </tr> 
                                        <tr>
                                            <td>Co-morbid Condition <font color="#FF0000">*</font></td>
                                            <td><input type="text" name="comorbid_cond" placeholder="Co-morbid Condition" class="form-control input-sm" style="width: 250px;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Goal</td>
                                            <td><input type="text" name="goal" placeholder="Goal" class="form-control input-sm" style="width: 250px;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Plan of action</td>
                                            <td><textarea name="plan_action" placeholder="Plan of action" class="form-control input-sm" style="width: 250px;"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Action Taken</td>
                                            <td><textarea name="action_taken" placeholder="Action Taken" class="form-control input-sm" style="width: 250px;"></textarea></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSave">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            <!-- /.modal -->        
        
        
        
        
        
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- bootstrap time picker -->
        <script src="<?php echo base_url();?>public/timepicker/js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url();?>public/timepicker/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(function() {

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>
        
         <!-- DATE -->
         <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('.dDate').datepicker({
                    //format: "dd/mm/yyyy"
                    format: "yyyy-mm-dd"
                });  
            
            });
        </script>
        <!-- END DATE -->
        <!-- End bootstrap time picker -->
        <script>
                
                    $(document).ready(function() {
                        $('.btn-edit').on('click',function() {

                            var id=$(this).data('id');
                            /*if(id){
                                document.getElementById("review").style.display = 'block';
                            }*/
                            //var id1=$(this).data('IO_ID');
                            //alert(id1);
                            $('.ind_care_plan_id').val(id);
                             //console.log(imge);
                            $('.opd_no').val($(this).data('io_id'));
                            $('.patient_no').val($(this).data('patient_no'));
                            $('.comorbid_cond').val($(this).data('comorbid_cond'));
                            $('.goal').val($(this).data('goal'));
                            $('.plan_action').val($(this).data('plan_action'));
                            $('.action_taken').val($(this).data('action_taken'));
                            $('#editmodal').modal('show');

                        });
                        $('.btn-review').on('click',function() {

                            var id=$(this).data('id');
                           
                            $('.ind_care_plan_id').val(id);
                            $('.opd_no').val($(this).data('io_id'));
                            $('.patient_no').val($(this).data('patient_no'));
                            $('.review').val($(this).data('review'));
                            $('.comorbid_cond').val($(this).data('comorbid_cond'));
                            $('.goal').val($(this).data('goal'));
                            $('.plan_action').val($(this).data('plan_action'));
                            $('.action_taken').val($(this).data('action_taken'));
                            $('#reviewmodal').modal('show');

                        });
                        
                    });
                </script>
        
        <?php require_once(APPPATH . 'views/include/footer.php'); ?> 
    </body>
</html>