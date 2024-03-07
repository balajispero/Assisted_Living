<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
         <!----------BOOTSTRAP DATEPICKER----------------------------->
    	<link rel="stylesheet" href="<?php echo base_url();?>public/datepicker/css/datepicker.css">
		<!---------------------------------------------------------->
        
        <!------------ bootstrap timepicker ---------------------------------->
    	<link href="<?php echo base_url();?>public/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
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
                                	<td width="15%" valign="top" align="center">
                                    <!-- <?php
									if(!$patientInfo->picture){
										$picture = "avatar.png";	
									}else{
										$picture = $patientInfo->picture;
									}
									?>
									<img src="<?php echo base_url();?>public/patient_picture/<?php echo $picture;?>" class="img-rounded" width="86" height="81"> -->
                                    </td>
                                    <td>
                                    	<table width="100%">
                                        <tr>
                                        	<td><u>Member No.</u></td>
                                        </tr>
                                        <tr>
                                			<td><?php echo $patientInfo->patient_no?></td>
                                		</tr>
                                        <tr>
                                        	<td><u>Member Name</u></td>
                                        </tr>
                                        <tr>
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
                                 	
                                 	<li><a href="<?php echo base_url()?>app/ipd/medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Medication</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/complain/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Complain</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li>
                                    <li class="active"><a href="<?php echo base_url()?>app/ipd/intake_output/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Input/Output Record</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Nurse Progress Note</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Vital Sign</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/room_transfer/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> IP Room Transfer</a></li>
                                    
                                    <li><a href="<?php echo base_url()?>app/ipd/bed_side_procedure/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Bed Side Procedure</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/operation_theater/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Operation Theater</a></li> -->
                                    <li ><a href="<?php echo base_url()?>app/ipd/patientHistory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Patient History</a></li>
                                 	<li><a href="<?php echo base_url()?>app/ipd/laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intervention</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/discharge_summary/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Discharge Summary</a></li>
                                    <!--<li><a href="<?php echo base_url()?>app/opd/billing/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Billing</a></li>-->
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                	<ul class="nav nav-tabs">
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Input/Output Records</a></li>
                                        
                                	</ul>
                                    <div class="tab-content">
                                    	<div class="tab-pane active" id="tab_1">
                                        	
                                            <?php echo $message;?>
                                            <?php //if($this->session->userdata('emr_viewing') == ""){?>	
                                           <?php //if($getOPDPatient->nStatus == "Pending"){?>
                                           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Intake Record</a>
                                           
                                           <!-- <a href="<?php echo base_url()?>app/ipd_print/print_intake/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a> -->
                                           <!-- <a href="<?php echo base_url()?>app/ipd_print/pdf_intake/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> PDF</a> -->
                                        <div class="alt2" dir="ltr" style="
                                                margin: 0px;
                                                padding: 0px;
                                                border: 0px solid #919b9c;
                                                width: 100%;
                                                text-align: left;
                                                overflow: auto">
                                                    <table class="table table-hover table-striped">
                                                        <thead>
                                                                <tr>
                                                                    <!--<th>Date</th>
                                                                    <th>Urinary Output</th>
                                                                    <th>Motions</th>
                                                                    <th>Feeding & Water Intake</th>
                                                                    <th>Mobilization</th> -->
                                                                    
                                                                    <th>Date/Time</th>
                                                                    <th>Prepared By</th>
                                                                    <th>View Report</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                        </thead>
                                                       
                                                        <tbody>
                                                        <?php foreach($prepare as $prepare) {?>
                                                            <tr>
                                                                <td><?php print_r($prepare->dDateTime)?></td>
                                                                <td><?php 
                                                                    $ci_obj = & get_instance();
                                                                    $ci_obj->load->model('app/general_model');
                                                                    $pages = $ci_obj->general_model->getPreparedBy($prepare->cPreparedBy);
                                                                    echo $pages->cPreparedBy?></td>
                                                                <td><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-eye"></i> View Record</a></td> 
                                                                <td>
                                                                <?php if($this->session->userdata('emr_viewing') == ""){?>	
                                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                                <a  href="<?php echo base_url()?>app/ipd/delete_intake/<?php echo $prepare->intake_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');"><i class="fa fa-trash-o"></i>Remove</a>
                                                                <?php }}?>
                                                                </td>
                                                            </tr>
                                                        <?php }?>

                                                        </tbody>
                                                    </table>
                                            </div>
                                           
                                           
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
        
							<!-- Modal -->
                            <form method="post" action="<?php echo base_url()?>app/ipd/save_intake" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="trfalseue" >
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width:100%;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Intake Record</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered" id="item_table">
                                            <tr id="bold">
                                            <td>Date</td>
                                            <td>Urinary Output</td>
                                            <td>Motions</td>
                                            <td>Feeding and Water Intake</td>
                                            <td>Mobilization</td>
                                            <!-- <td>prepared by</td> -->
                                            <td><button type="button" id="add" name="add" class="fa fa-plus btn-success btn-sm add" style="background-color: #00bbc7;"></button></td>
                                            </tr>
                                            </tr>
                                            <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="prescuont"></input>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            
                            <form method="post" action="<?php echo base_url()?>app/ipd/save_output" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: max-content;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Input/Output Records</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover table-striped">
                                                        <thead>
                                                                <tr>
                                                                    <!-- <th>Date</th> -->
                                                                    <th>Urinary Output</th>
                                                                    <th>Motions</th>
                                                                    <th>Feeding & Water Intake</th>
                                                                    <th>Mobilization</th>
                                                                    <th>Date(for)</th>
                                                                    <!-- <th>Prepared Date/Time</th> -->
                                                                    <th>Prepared By</th>
                                                                    <!-- <th>View Report</th> -->
                                                                    <th></th>
                                                                </tr>
                                                        </thead>
                                                        <?php $getIntake1 = json_decode($this->data['prepare'][0]->particulars); if(!empty($getIntake1)) {foreach($getIntake1 as $getIntake){?>
                                                        <tbody>
                                                        <tr>
                                                                <!-- <td><?php echo($getIntake->date[0]);?></td> -->
                                                                <td><?php echo($getIntake->uop[0])?></td>
                                                                <td><?php echo($getIntake->motion[0])?></td>
                                                                <td><?php echo($getIntake->fiwi[0])?></td>
                                                                <td><?php echo($getIntake->mobi[0])?></td>
                                                                <td> <?php echo($getIntake->date[0]);?></td>
                                                                <!-- <td><?php print_r($prepare->dDateTime)?></td> -->
                                                                <td><?php 
                                                                    $ci_obj = & get_instance();
                                                                    $ci_obj->load->model('app/general_model');
                                                                    $pages = $ci_obj->general_model->getPreparedBy($prepare->cPreparedBy);
                                                                    echo $pages->cPreparedBy?></td>
                                                                <!-- <td> <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><i class="fa fa-plus"></i> View Record</a></td>  -->
                                                        </tr>
                                                        <?php }}?> 
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
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: max-content;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Output Record</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                        	<td>Date</td>
                                            <td><input type="text" name="dDate2" id="dDate2" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Time</td>
                                            <td>
                                             <div class="bootstrap-timepicker">
                                        	<div class="form-group">
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker" name="cTime2" id="cTime2"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                        	</div><!-- /.form group -->
                                    		</div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>Urine(ml)</td>
                                            <td><input type="text" name="urine" placeholder="Urine(ml)" class="form-control input-sm" style="width: 250px;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Feaces(ml)</td>
                                            <td><input type="text" name="feaces" placeholder="Feaces(ml)" class="form-control input-sm" style="width: 250px;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Respitation(ml)</td>
                                            <td><input type="text" name="respitation" placeholder="Respitation(ml)" class="form-control input-sm" style="width: 250px;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Skin(ml)</td>
                                            <td><input type="text" name="skin" placeholder="Skin(ml)" class="form-control input-sm" style="width: 250px;" required></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="btnSave">Save</button>
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
				$('#dDate2').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });
            $(document).ready(function(){
			var i = 0;
			var j = 1;
            $(document).on('click', '.add', function(){
                var prescuont = $('#prescuont').val();
				// console.log(diagcount);
				var i = j+ + +prescuont;
                
                var html = '';
                var date = 'date';
                var uop = 'uop';
                var motion = 'motion';
                var fiwi = 'fiwi';
                var mobi = 'mobi';
                var prepared = 'prepared';
                html += '<tr>';
                html += '<td width="15%"><input type="datetime-local" name="inout['+i+']['+date+'][]" class="form-control input-sm4"></td>';
                html += '<td width="88%"><input type="text" name="inout['+i+']['+uop+'][]" class="form-control input-sm4"></td></td>';
                html += '<td><input type="text" name="inout['+i+']['+motion+'][]" class="form-control input-sm4"></td></td>';
                html += '<td><input type="text" name="inout['+i+']['+fiwi+'][]" class="form-control input-sm4"></td></td>';
                html += '<td><input type="text" name="inout['+i+']['+mobi+'][]" class="form-control input-sm4"></td></td>';
                // html += '<td><input type="hidden" name="inout['+i+']['+prepared+'][]" class="form-control input-sm4" value=" value="<?php ?>"></td></td>';
                html += '<td><button type="button" name="remove" class="fa fa-minus btn-danger btn-sm remove" style="background-color: #00bbc7;"></button></td></tr>';
                $('#item_table').append(html);
                j++;
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
        <!-- END DATE -->
        
        
        
    <?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>