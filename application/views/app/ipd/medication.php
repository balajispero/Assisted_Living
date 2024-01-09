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
        
           <!----------BOOTSTRAP DATEPICKER----------------------------->
    	<link rel="stylesheet" href="<?php echo base_url();?>public/datepicker/css/datepicker.css">
		<!---------------------------------------------------------->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
                      <?php if($this->session->userdata('emr_viewing') == "bipd_emr_viewing"){?>	
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
                               
                                 	<li><a href="<?php echo base_url()?>app/ipd/diagnosis/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Diagnosis</a></li>
                                 	
                                 	<li class="active"><a href="<?php echo base_url()?>app/ipd/medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Medication</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/complain/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Complaint</a></li> -->
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li> -->
                                    <li><a href="<?php echo base_url()?>app/ipd/intake_output/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Input/Output Record</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Vital Sign</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/individual_care_plan/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Individual Care Plan</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/room_transfer/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> IP Room Transfer</a></li>
                                    
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/bed_side_procedure/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Bed Side Procedure</a></li> -->
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/operation_theater/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Operation Theater</a></li> -->
                                    <!-- <li ><a href="<?php echo base_url()?>app/ipd/patientHistory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Patient History</a></li> -->
                                 	<li><a href="<?php echo base_url()?>app/ipd/laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intervention</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/discharge_summary/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Discharge Summary</a></li> -->
                                    <!--<li><a href="<?php echo base_url()?>app/opd/billing/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Billing</a></li>-->
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                	<ul class="nav nav-tabs">
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Medication</a></li>
                                        
                                	</ul>
                                    <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        	
                                            <?php echo $message;?>
                                            <?php if($this->session->userdata('emr_viewing') == ""){?>	
                                           <?php if($getOPDPatient->nStatus == "Pending"){?>
                                           <a href="#" class="btn btn-primary add_medication bg_color" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Medication</a>
                                           <?php }}?>
                                            
                                 <input type="hidden" value="<?php echo $med_cnt ?>" name="mm" id="medcnt"> 
                                           <a href="<?php echo base_url()?>app/ipd_print/print_medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
                                           <!-- <a href="<?php echo base_url()?>app/ipd_print/pdf_medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> PDF</a> -->
                                           <?php if($getOPDPatient->nStatus == "Pending"){?>
                                           <a href="#" class="btn btn-primary bg_color" style="float: right;" data-toggle="modal" data-target="#myModalemerg"><i class="fa fa-plus"></i> Add Emergency Medication</a>
                                           <?php }?>
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
                                                    <th>Medicine Name</th>
                                                    <th>From Date</th>
                                                    <th>To Date</th>
                                                    <th>Dose</th> 
                                                    <th>Prepared by</th>
                                                     <th>Action</th> 
                                                </tr>
                                           </thead>
                                           <tbody>
                                               
                                           <?php foreach($patient_Medication as $rows){?>
                                            <?php ?>
                                           <tr>
                                                <td><?php echo $rows->medicine_name?></td>
                                                <td><?php echo date("d M, Y",strtotime($rows->from_date));
                                                /*echo $rows->from_date*/?></td>
                                                <td><?php echo date("d M, Y",strtotime($rows->to_date));?></td>
                                                <td><?php echo $rows->dose?></td>
                                                <td><?php echo $rows->cPreparedBy?></td> 
                                                 <td> 
                                                <?php if($this->session->userdata('emr_viewing') == ""){?>  
                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                <a href="<?php echo base_url()?>app/ipd/delete_medication/<?php echo $rows->iop_med_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>&nbsp;|&nbsp;
                                                <a href="#" class="btn-review" data-from_date="<?php echo $rows->from_date;?>" data-to_date="<?php echo $rows->to_date;?>" data-medicine_name="<?php echo $rows->medicine_name;?>" data-iop_med_id="<?php echo $rows->iop_med_id;?>" data-single_dose="<?php echo $rows->dose;?>" data-iop_id="<?php echo $rows->iop_id;?>">Edit</a>
                                                <?php }}?>
                                                </td> 
                                           </tr>
                                           <?php }?> 
                                           </tbody>
                                           </table>
                                           </div> 
                                            <br><br><br><br><br><br><br>
                                            <div class="well">Weekly Medicine chart given by nurse</div>
                                            <?php /*echo "<pre>";
        print_r($this->data['results_data']);*/ ?>
                                            <div class="alt2" dir="ltr" style="
                                    margin: 0px;
                                    padding: 0px;
                                    border: 0px solid #919b9c;
                                    width: 100%;
                                    height: 300px;
                                    text-align: left;
                                    overflow: auto">
                                            <table class="table table-hover table-striped">
                                                <tr>
                                                    <th>Medicine Name</th>
                                                     <th>Mon<br><?php echo date("d/m/Y", strtotime("this week"));?></th>
                                                    <th>Tue<br><?php echo date("d/m/Y", strtotime('tuesday', strtotime('this week')));?></th>
                                                    <th>Wed<br><?php echo date("d/m/Y", strtotime('wednesday', strtotime('this week')));?></th>
                                                    <th>Thu<br><?php echo date("d/m/Y", strtotime('thursday', strtotime('this week')));?></th>
                                                    <th>Fri<br><?php echo date("d/m/Y", strtotime('friday', strtotime('this week')));?></th>
                                                    <th>sat<br><?php echo date("d/m/Y", strtotime('saturday', strtotime('this week')));?></th>
                                                    <th>Sun<br><?php echo date("d/m/Y", strtotime('sunday', strtotime('this week')));?></th>
                                                </tr>
                                                <?php
                                               if(!empty($results_data)) 
                                               {
                                                foreach ($results_data as $key=>$res):  
                                                    ?>
                                                    <tr>
                                                    <td><?php
                                                    $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getMedicineById($res['iop_med_id']);
                                                
                                                echo $pages->medicine_name; 
                                                    /*echo $res['iop_med_id'];*/ ?></td>
                                                        <?php if($res['given_date1']==date("Y-m-d", strtotime("this week"))) { ?><td><?php echo $res['dose1']; ?></td><?php }else{ ?><td><?php echo '0'; ?> </td> <?php } ?>
                                                        <?php if($res['given_date2']==date("Y-m-d", strtotime('tuesday', strtotime('this week')))) { ?><td><?php echo $res['dose2']; ?></td><?php }else{ ?><td><?php echo '0'; ?> </td> <?php } ?>
                                                        <?php if($res['given_date3']==date("Y-m-d", strtotime('wednesday', strtotime('this week')))) { ?><td><?php echo $res['dose3']; ?></td><?php }else{ ?><td><?php echo '0'; ?> </td> <?php } ?>
                                                        <?php if($res['given_date4']==date("Y-m-d", strtotime('thursday', strtotime('this week')))) { ?><td><?php echo $res['dose4']; ?></td><?php }else{ ?><td><?php echo '0'; ?> </td> <?php } ?>
                                                        <?php if($res['given_date5']==date("Y-m-d", strtotime('friday', strtotime('this week')))) { ?><td><?php echo $res['dose5']; ?></td><?php }else{ ?><td><?php echo '0'; ?> </td> <?php } ?>
                                                        <?php if($res['given_date6']==date("Y-m-d", strtotime('saturday', strtotime('this week')))) {  ?><td><?php echo $res['dose6']; ?></td><?php }else{ ?><td><?php echo '0'; ?> </td> <?php } ?>
                                                        <?php if($res['given_date6']==date("Y-m-d", strtotime('sunday', strtotime('this week')))) {  ?><td><?php echo $res['dose6']; ?></td><?php }else{ ?><td><?php echo '0'; ?> </td> <?php } ?>

                                                        <?php
                                                    //}
                                                    
                                                    ?>
                                                    </tr>
                       
     </div>
     <?php endforeach; } ?> 
                                            </table>
                                            </div>
                                            <br>
                                            <div class="well">Daily Medicine given by nurse</div>
                                            
                                            <div class="alt2" dir="ltr" style="
                                    margin: 0px;
                                    padding: 0px;
                                    border: 0px solid #919b9c;
                                    width: 100%;
                                    height: 300px;
                                    text-align: left;
                                    overflow: auto">
                                            <table class="table table-hover table-striped">
                                                <tr>
                                                   
                                                     <th>Date</th>
                                                       <th>Medicine Name</th>
                                                    <th>Dose</th>
                                                    <th>Action</th> 
                                                    
                                                </tr>
                                                <?php
                                               if(!empty($given_medicine)) 
                                               {
                                                foreach ($given_medicine as $key=>$res):  
                                                    ?>
                                                    <tr>
                                                     <td><?php echo date("d M, Y",strtotime($res->given_date));?></td>   
                                                     <td><?php
                                                    $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getMedicineById($res->iop_med_id);
                                                
                                                echo $pages->medicine_name; 
                                                     ?></td>
                                                    <td><?php echo @$res->dose; ?></td>
                                                    <td><?php if($this->session->userdata('emr_viewing') == ""){?>  
                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                 <a href="<?php echo base_url()?>app/ipd/delete_given_medication/<?php echo $res->iop_nurse_med_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>&nbsp;|&nbsp;
                                                <a href="#" class="btn-edit" data-given_date="<?php echo $res->given_date;?>" data-given_medicine_name="<?php echo $pages->medicine_name;?>" data-iop_nurse_med_id="<?php echo $res->iop_nurse_med_id;?>" data-given_single_dose="<?php echo $res->dose;?>">Edit</a>
                                                <?php }}?></td> 
                                                        
                                                    </tr>
                       
     </div>
     <?php endforeach; } ?> 
                                            </table>
                                            </div>
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
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
         <!-- BDAY -->
         <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#cFrom').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
				
				$('#cTo').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });
        </script>
        <!-- END BDAY -->
        <form action="<?php echo base_url()?>app/ipd/edit_medication" method="post">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                    <div class="modal fade" id="reviewmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Daily Medicine Chart</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>From date</td>
                                            <td>
                                                <input type="date" name="from_date" id="dDate2" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="from_date dDate form-control input-sm" style="width: 100%;" required>
                                                
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>To Date</td>
                                            <td>
                                                <input type="date" name="to_date" placeholder="To Date" class="to_date form-control input-sm" style="width: 250px;" required>
                                            </td>
                                            
                                        </tr>        
                                        <tr>
                                            <td>Medicine Name</td>
                                            <td>
                                                <input type="hidden" name="iop_med_id" class="iop_med_id">
                                                <input type="hidden" name="iop_id" class="iop_id">
                                                <input type="text" name="medicine_name" placeholder="Medicine name" class="form-control input-sm medicine_name" style="width: 250px;" required>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Dose</td>
                                            <td>
                                            <input type="checkbox" name="dose[]" class="input-sm4" value="M">M
                                            <input type="checkbox" name="dose[]" class="input-sm4" value="A">A
                                            <input type="checkbox" name="dose[]" class="input-sm4" value="N">N
                                            </td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary bg_color" name="btnSave">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </form>
                        
                        <form action="<?php echo base_url()?>app/ipd/edit_given_medication" method="post">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Update Medicine</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>date</td>
                                            <td>
                                                <input type="date" name="given_date" id="dDate2" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="given_date dDate form-control input-sm" style="width: 100%;" required>
                                                
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Medicine Name</td>
                                            <td>
                                                <input type="hidden" name="iop_nurse_med_id" class="iop_nurse_med_id">
                                                <input type="hidden" name="iop_id" class="iop_id">
                                                <input type="text" name="medicine_name" placeholder="Medicine name" class="medicine_name form-control input-sm medicine_name" style="width: 250px;" required>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Dose</td>
                                            <td>
                                            <input type="checkbox" name="dose[]" class="input-sm4" value="M">M
                                            <input type="checkbox" name="dose[]" class="input-sm4" value="A">A
                                            <input type="checkbox" name="dose[]" class="input-sm4" value="N">N
                                            </td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary bg_color" name="btnSave">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </form>
        
							<!-- Modal -->
                            <form method="post" action="<?php echo base_url()?>app/ipd/save_medication" onSubmit="return confirm('Are you sure you want to save?');">
                               
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="width: max-content;"> 
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Medication</h4>
                                        </div>                             <div class="modal-body">
                                        <table class="table table-hover">
                                        <table class="table table-bordered" id="item_table">
                                            <tr id="bold">
                                            <td>Date/Day(for)</td>
                                            <td>To Date</td>
                                            <!-- <td>Quantity</td> -->
                                            <td>Medicines</td>
                                            <td>Dose</td>
                                            <!-- <td>Advice</td> -->
                                            <!-- <td>Mobilization</td> -->
                                            <!-- <td>prepared by</td> -->
                                            <td><button type="button" id="add" name="add" class="fa fa-plus btn-light btn-sm add bg_color" ></button></td>
                                            </tr>
                                            </tr>
                                            <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="prescuont"></input>
                                            </table>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary bg_color">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            <form method="post" action="<?php echo base_url()?>app/ipd/save_emerg_medication" onSubmit="return confirm('Are you sure you want to save?');">
                               
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModalemerg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="width: max-content;"> 
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Medication</h4>
                                        </div>                             <div class="modal-body">
                                        <table class="table table-hover">
                                        <table class="table table-bordered" id="emerg_item_table">
                                            <tr id="bold">
                                            <td>Date/Day(for)</td>
                                            <td>To Date</td>
                                            <!-- <td>Quantity</td> -->
                                            <td>Medicines</td>
                                            <td>Dose</td>
                                            <!-- <td>Advice</td> -->
                
                                            <td><button type="button" name="add" class="fa fa-plus  btn-sm emerg_add bg_color" style="background-color: #00bbc7;"></button></td>
                                            </tr>
                                            </tr>
                                            <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="prescuont"></input>
                                            </table>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary bg_color">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: max-content;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Input/Output Records <?php print_r(count($this->data['patientMedication']))?></h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover table-striped">
                                                        <thead>
                                                                <tr>
                                                                    <!-- <th>Date</th> -->
                                                                    <th>Date/Day(for)</th>
                                                                    <th>Quantitiy</th>
                                                                    <th>Medicine</th>
                                                                    <th>Advice</th>
                                                                    <th>Prepared By</th>
                                                                    <!-- <th>View Report</th> -->
                                                                    <th></th>
                                                                </tr>
                                                        </thead>
                                                        <?php
                                                        for($medcnt=0;$medcnt<count($this->data['patientMedication']);$medcnt++) {
                                                          $getIntake1 = json_decode($this->data['patientMedication'][$medcnt]->instruction); if(!empty($getIntake1)){
                                                             foreach($getIntake1 as $getIntake){?>
                                                        <tbody>
                                                        <tr>
                                                                
                                                                <td><?php echo ($getIntake->date[0]);?></td>
                                                                <td><?php echo($getIntake->qty[0])?></td>
                                                                <td><?php echo($getIntake->medic[0])?></td>
                                                                <td><?php echo($getIntake->adv[0])?></td>
                                                                <td><?php 
                                                                    $ci_obj = & get_instance();
                                                                    $ci_obj->load->model('app/general_model');
                                                                    $pages = $ci_obj->general_model->getPreparedBy($patientMedication[0]->cPreparedBy);
                                                                    echo $pages->cPreparedBy?></td>
                                                                <!-- <td> <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><i class="fa fa-plus"></i> View Record</a></td>  -->
                                                        </tr>
                                                        <?php   } } }?> 
                                                        </tbody>
                                                    </table>
                                                    
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <!-- <button type="submit" class="btn btn-primary" name="btnSave">Save</button> -->
                                        </div> -->
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- <td></td> -->
                            <!-- /.modal -->     
                            <script>
            $(document).ready(function() {
            $('.btn-review').on('click',function() {

                            $('.iop_id').val($(this).data('iop_id'));
                            $('.iop_med_id').val($(this).data('iop_med_id'));
                            $('.medicine_name').val($(this).data('medicine_name'));
                            $('.from_date').val($(this).data('from_date'));
                            $('.to_date').val($(this).data('to_date'));
                            $('#reviewmodal').modal('show');

                        });
                        
            $('.btn-edit').on('click',function() {

                            $('.iop_nurse_med_id').val($(this).data('iop_nurse_med_id'));
                            $('.given_date').val($(this).data('given_date'));
                            $('.medicine_name').val($(this).data('given_medicine_name'));
                            $('#editmodal').modal('show');

                        });             
            });
        </script>
        <script>
             $(document).ready(function(){
            var emerg_i = 0;
            var emerg_j = 1;
            var dose_cnt=0;
            
            $(document).on('click', '.emerg_add', function(){
        
                var emerg_html = '';
                var emerg_date = 'date';
                var emerg_qty = 'qty';
                var emerg_medic = 'medic';
                var emerg_adv = 'adv';
                emerg_html += '<tr>';
                emerg_html += '<td><input type="datetime-local"  name="med_from_date[]" class="form-control input-sm4" ></td>';
                emerg_html += '<td><input type="datetime-local"  name="med_to_date[]" class="form-control input-sm4" ></td>';
                /*emerg_html += '<td><input type="number" name="qty[]" class="form-control input-sm4" style="width: 200px;"></td>';*/
                emerg_html += '<td><input type="text" name="drug_name[]" placeholder="Medicine Name" class="form-control"></td>';
                emerg_html += '<td><input type="checkbox" name="dose['+dose_cnt+'][]" class="input-sm4" value="M">M<input type="checkbox" name="dose['+dose_cnt+'][]" class="input-sm4" value="A">A<input type="checkbox" name="dose['+dose_cnt+'][]" class="input-sm4" value="N">N</td>';
                emerg_html += '<td><button type="button" name="remove" class="fa fa-minus btn-danger btn-sm remove" style="background-color: #00bbc7;"></button></td></tr>';
                $('#emerg_item_table').append(emerg_html);
                emerg_j++;
                dose_cnt++;
            });
            });
        </script>
        <script>
          $(document).ready(function(){
            var med_cnt=document.getElementById('medcnt').value;
            if(med_cnt=='2'){
        $(document).on('click', '.add', function(){
            var med_cnt=document.getElementById('medcnt').value;
            if(med_cnt=='2'){
                alert("Please add medicine first");
            }
        });
    }
        });
    </script>
        <script>
             $(document).ready(function(){
			var i = 0;
			var j = 1;
            var dose_cnt=0;
            //var ss = $('#medcnt').val();
                // alert(ss)
            $(document).on('click', '.add', function(){
                
                var prescuont = $('#prescuont').val();

				// console.log(diagcount);
				var i = j+ + +prescuont;
            //var ss = $('#medcnt').val();
               //alert(ss)
           
                var html = '';
                var date = 'date';
                var qty = 'qty';
                var medic = 'medic';
                var adv = 'adv';
                // var mobi = 'mobi';
                // var prepared = 'prepared';
                html += '<tr>';
                html += '<td><input type="datetime-local"  name="med_from_date[]" class="form-control input-sm4" ></td>';
                html += '<td><input type="datetime-local"  name="med_to_date[]" class="form-control input-sm4" ></td>';
                /*html += '<td><input type="number" name="qty[]" class="form-control input-sm4" style="width: 200px;"></td>';*/
                html += '<td><select  class="form-control input-sm4" style="width: 200px;" name="drug_name[]"><?php foreach ($medicines1  as $medicines) {?><option value="<?=$medicines?>"><?=$medicines?></option><?php } ?></select></td>';
                html += '<td><input type="checkbox" name="dose['+dose_cnt+'][]" class="input-sm4" value="M">M<input type="checkbox" name="dose['+dose_cnt+'][]" class="input-sm4" value="A">A<input type="checkbox" name="dose['+dose_cnt+'][]" class="input-sm4" value="N">N</td>';
               /* html += '<td><textarea name="advice[]" class="form-control input-sm4"></textarea></td>';*/
                // html += '<td><input type="text" name="inout['+i+']['+mobi+'][]" class="form-control input-sm4"></td></td>';
                // html += '<td><input type="hidden" name="inout['+i+']['+prepared+'][]" class="form-control input-sm4" value=" value="<?php ?>"></td></td>';
                html += '<td><button type="button" name="remove" class="fa fa-minus btn-danger btn-sm remove" style="background-color: #00bbc7;"></button></td></tr>';
                $('#item_table').append(html);
                j++;
                dose_cnt++;
            });
            
            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
            });
            
            $('#insert_form').on('submit', function(event){
                event.preventDefault();
                var error = '';
                $('.item_name').each(function(){
                    var count = 1;
                    if($(this).val() == '')
                    {
                        error += "<p>Enter Item Name at "+count+" Row</p>";
                        return false;
                    }
                    count = count + 1;
                });
            });
            
            $('.item_quantity').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter Item Quantity at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });
            
            $('.item_unit').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Select Unit at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });
            var form_data = $(this).serialize();
            if(error == '')
            {
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                    if(data == 'ok')
                    {
                    $('#item_table').find("tr:gt(0)").remove();
                    // $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
                    }
                    }
                });
            }else
            {
                // $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }
        });
        </script>
    </body>
</html>