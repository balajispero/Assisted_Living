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
        
        <!------------ bootstrap timepicker ---------------------------------->
    	<link href="<?php echo base_url();?>public/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    	<!-------------------------------------------------------------------->
        
        
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
                    <?php if($this->session->userdata('emr_viewing') == "opd_emr_viewing"){?>	
                   <h1>In Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">EMR sheet</a></li>
                        <li><a href="<?php echo base_url()?>app/emr/opd">IN-Member Master</a></li>
                    </ol>
                    <?php }else{?>
                    <h1>In Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Doctor Module</a></li>
                        <li><a href="<?php echo base_url()?>app/doctor/ipd">IN-Member Master</a></li>
                        <li class="active">In Member Information</li>
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
                                    </td>
                                    <td> -->
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
                                 	<li><a href="<?php echo base_url()?>app/ipd/individual_care_plan/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Individual Care Plan</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/complain/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Complaint</a></li> -->
                                  
                                 	<li><a href="<?php echo base_url()?>app/ipd/diagnosis/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Diagnosis</a></li>
                                 	
                                 	<li><a href="<?php echo base_url()?>app/ipd/medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Medication</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li> -->
                                    <li><a href="<?php echo base_url()?>app/ipd/intake_output/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intake/Output Record</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li>
                                    <li class="active"><a href="<?php echo base_url()?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Vital Sign</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/room_transfer/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> IP Room Transfer</a></li>
                                    
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/bed_side_procedure/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Bed Side Procedure</a></li> -->
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/operation_theater/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Operation Theater</a></li> -->
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/patientHistory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Patient History</a></li>-->
                                	<li><a href="<?php echo base_url()?>app/ipd/laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intervention</a></li>
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/discharge_summary/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Discharge Summary</a></li>-->
                                    <!--<li><a href="<?php echo base_url()?>app/opd/billing/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Admission Billing</a></li>-->
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                	<ul class="nav nav-tabs">
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Vital Sign</a></li>
                                        
                                	</ul>
                                    <div class="tab-content">
                                    	<div class="tab-pane active" id="tab_1">
                                        
                                        	<?php echo $message;?>
                                            <?php //if($this->session->userdata('emr_viewing') == ""){?>	
                                       
                                           <button type="button" class="btn btn-primary bg_color" data-toggle="modal" data-target="#OpenModal"><i class="fa fa-plus"></i> Add Vital Parameters</button>
                                     
                                           <a href="<?php echo base_url()?>app/ipd_print/print_vital/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
                                           <!-- <a href="<?php echo base_url()?>app/ipd_print/pdf_vital/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> PDF</a> -->
                                           <table class="table table-hover table-striped">
                                           <thead>
                                           		<tr>
                                                	<th>Date Time</th>
                                                	<th>Pulse rate</th>
                                                    <th>Temperature</th>
                                                    <!-- <th>Height</th> -->
                                                    <th>Blood Pressure</th>
                                                    <th>Resprition Rate </th>
                                                     <th>Bsl</th>
                                                     <th>SPO2</th> 
                                                    <th>Prepared by</th>
                                                    <th></th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                           <?php foreach($getVital as $rows){?>
                                           <tr>
                                           		<td><?php echo date("d M, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                           		<td><?php echo $rows->pulse_rate?>/min</td>
                                                <td><?php echo $rows->temperature?> F</td>
                                                <!-- <td><?php echo $rows->height?> Cm</td> -->
                                                <td><?php echo $rows->bp?> mm of Hg</td>
                                                <td><?php echo $rows->respiration?>/min</td>
                                                 <td><?php echo $rows->bsl?><?php echo $rows->bsl_type?></td>
                                                 <td><?php echo $rows->spo2?></td> 
                                                <td><?php 
												$ci_obj = & get_instance();
												$ci_obj->load->model('app/general_model');
												$pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
												
												echo $pages->cPreparedBy?></td>
                                                <td>
                                                <?php if($this->session->userdata('emr_viewing') == ""){?>	
                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                <!--<a href="<?php echo base_url()?>app/ipd/delete_vital/<?php echo $rows->vital_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>-->
                                                <?php }}?>
                                                </td>
                                           </tr>
                                           <?php }?> 
                                           </tbody>
                                           </table>
                                        	
                                            
                                            
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
        
        
        
        <!-- Modal -->
                            <form method="post" action="<?php echo base_url()?>app/ipd/vitalSign" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="OpenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Vital Parameters</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                        	<td>Date</td>
                                            <td><input type="text" name="dDate" id="dDate" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Time</td>
                                            <td>
                                             <div class="bootstrap-timepicker">
                                        	<div class="form-group">
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker" name="cTime" id="cTime" value="<?php echo date("h:i:s A");?>"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                        	</div><!-- /.form group -->
                                    		</div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BSL type</td>
                                            <td>
                                           <select name="bsl_type" style="width: 100%;" class="form-control input-sm">
                                                                <!-- <option value="">- Select BSL type -</option> -->
                                                                <option value="F">F</option>
                                                                <option value="PP">PP</option>
                                                                <option value="R">R</option>
                                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                                <td>BSL</td>
                                                <td><input type="text" name="bsl" id="bsl"  style="width: 100px;" >&nbsp;&nbsp;</td>
                                           </tr>
                                        <tr>
                                           		<td>Pulse Rate</td>
                                                <td><input type="text" name="pulse_rate" id="pulse_rate" style="width: 100px;" >&nbsp;&nbsp;/min</td>
                                           </tr>
                                           <tr>
                                           		<td>Blood Pressure</td>
                                                <td><input type="text" name="bp" id="bp"  style="width: 100px;" >&nbsp;&nbsp;mm of Hg</td>
                                           </tr>
                                           <tr>
                                           		<td>Temperature</td>
                                                <td><input type="text" name="temperature" id="temperature" style="width: 100px;" >&nbsp;&nbsp;F</td>
                                           </tr>
                                           <tr>
                                                <td>SPO2</td>
                                                <td><input type="text" name="spo2" style="width: 100px;" >&nbsp;&nbsp;</td>
                                           </tr>
                                           <tr>
                                           		<td>RR</td>
                                                <td><input type="text" name="respiration" id="respiration"  style="width: 100px;" >&nbsp;&nbsp;/min</td>
                                           </tr>
                                           
                                           <tr>
                                           		<td>Height</td>
                                                <td><input type="text" name="height" id="height"  style="width: 100px;">&nbsp;&nbsp;Cm</td>
                                           </tr>
                                           <tr>
                                           		<td>Weight</td>
                                                <td><input type="text" name="weight" id="weight"  style="width: 100px;">&nbsp;&nbsp;Kg</td>
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
                            <!-- /.modal -->        
        
  
        
         <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>public/timepicker/js/bootstrap.min.js" type="text/javascript"></script>

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
                
                $('#dDate').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });
        </script>
        <!-- END DATE -->
        
        <?php require_once(APPPATH . 'views/include/footer.php'); ?>
    </body>
</html>