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
                               
                                 	<li><a href="<?php echo base_url()?>app/ipd/diagnosis/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Diagnosis</a></li>
                                 	
                                 	<li class="active"><a href="<?php echo base_url()?>app/ipd/medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Medication</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/complain/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Complaint</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li> -->
                                    <li><a href="<?php echo base_url()?>app/ipd/intake_output/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Input/Output Record</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Vital Sign</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/individual_care_plan/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Individual Care Plan</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/room_transfer/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> IP Room Transfer</a></li>
                                    
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/bed_side_procedure/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Bed Side Procedure</a></li> -->
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/operation_theater/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Operation Theater</a></li> -->
                                    <!--<li ><a href="<?php echo base_url()?>app/ipd/patientHistory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Patient History</a></li>-->
                                 	<li><a href="<?php echo base_url()?>app/ipd/laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intervention</a></li>
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/discharge_summary/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Discharge Summary</a></li>-->
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
                                           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Medication</a>
                                           <?php }}?>
                                           <a href="<?php echo base_url()?>app/ipd_print/print_medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
                                           <!-- <a href="<?php echo base_url()?>app/ipd_print/pdf_medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> PDF</a> -->
                                           <table class="table table-hover table-striped">
                                           <thead>
                                           		<tr>
                                                	<th>Date</th>
                                                    <!-- <th>Prepared Time</th> -->
                                                    <!--<th>Advice</th>
                                                    <th>Days</th>
                                                    <th>Qty</th> -->
                                                    <th>Prepared by</th>
                                                    <th>View Record</th>
                                                    <th>Action</th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                               
                                           <?php foreach($patientMedication as $rows){?>
                                            <?php ?>
                                           <tr>
                                           		<td><?php echo date("d M, Y h:i:s A",strtotime($rows->dDate)); ?></td>
                                                <td><?php echo $rows->cPreparedBy?></td>
                                                <td><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-eye"></i> View Record</a></td> 
                                                <td>
                                                <?php if($this->session->userdata('emr_viewing') == ""){?>	
                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                <a href="<?php echo base_url()?>app/ipd/delete_medication/<?php echo $patientMedication[0]->iop_med_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>
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
                            <form method="post" action="<?php echo base_url()?>app/ipd/save_medication" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: max-content;"> 
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Medication</h4>
                                        </div>                             <div class="modal-body">
                                        <table class="table table-hover">
                                        <table class="table table-bordered" id="item_table">
                                            <tr id="bold">
                                            <td>Date/Day(for)</td>
                                            <td>Quantity</td>
                                            <td>Medicines</td>
                                            <td>Advice</td>
                                            <!-- <td>Mobilization</td> -->
                                            <!-- <td>prepared by</td> -->
                                            <td><button type="button" id="add" name="add" class="fa fa-plus btn-success btn-sm add" style="background-color: #00bbc7;"></button></td>
                                            </tr>
                                            </tr>
                                            <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="prescuont"></input>
                                            </table>
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
                                                                    <th>Date/Day(for)</th>
                                                                    <th>Quantitiy</th>
                                                                    <th>Medicine</th>
                                                                    <th>Advice</th>
                                                                    <th>Prepared By</th>
                                                                    <!-- <th>View Report</th> -->
                                                                    <th></th>
                                                                </tr>
                                                        </thead>
                                                        <?php  $getIntake1 = json_decode($this->data['patientMedication'][0]->instruction); if(!empty($getIntake1)){ foreach($getIntake1 as $getIntake){?>
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
                                                        <?php   }}?> 
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
             $(document).ready(function(){
			var i = 0;
			var j = 1;
            $(document).on('click', '.add', function(){
                var prescuont = $('#prescuont').val();
				// console.log(diagcount);
				var i = j+ + +prescuont;
                
                var html = '';
                var date = 'date';
                var qty = 'qty';
                var medic = 'medic';
                var adv = 'adv';
                // var mobi = 'mobi';
                // var prepared = 'prepared';
                html += '<tr>';
                html += '<td><input type="datetime-local"  name="medi['+i+']['+date+'][]" class="form-control input-sm4" ></td>';
                html += '<td><input type="number" name="medi['+i+']['+qty+'][]" class="form-control input-sm4" style="width: 200px;"></td>';
                html += '<td><select  class="form-control input-sm4" style="width: 200px;" name="medi['+i+']['+medic+'][0]"><?php foreach ($medicines1  as $medicines) {?><option value="<?=$medicines?>"><?=$medicines?></option><?php } ?></select></td>';
                html += '<td><textarea name="medi['+i+']['+adv+'][]" class="form-control input-sm4"></textarea></td>';
                // html += '<td><input type="text" name="inout['+i+']['+mobi+'][]" class="form-control input-sm4"></td></td>';
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
    <?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>