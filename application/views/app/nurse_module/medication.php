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
        
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
            .icheckbox_minimal {
            margin: 3px !important;
            }
            .onlynurse_module{
                display:block !important;
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
                    <h1>IPD Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Nurse Module</a></li>
                        <li><a href="#">In-Member Information</a></li>
                    </ol>
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
                                    <?php
									if(!$patientInfo->picture){
										$picture = "avatar.png";	
									}else{
										$picture = $patientInfo->picture;
									}
									?>
									<img src="<?php echo base_url();?>public/patient_picture/<?php echo $picture;?>" class="img-rounded" width="86" height="81">
                                    </td>
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
                                        <tr>
                                			<td><?php $fname = $patientInfo->firstname;
                                                      $lname = $patientInfo->lastname;
                                            $name = $fname." ".$lname;  echo $name;?></td>
                                		</tr>
                                        </table>
                                    </td>
                                </tr>
                                </table>
                            </div>
                            <div class="box-footer clearfix">
                            	<table class="table">
                                <tr>
                                	<td><u>IOP No.</u></td>
                                    <td><?php echo $getOPDPatient->IO_ID;?></td>
                                </tr>
                                <tr>
                                	<td><u>Date Time Admit</u></td>
                                    <td><?php echo date("M d, Y", strtotime($getOPDPatient->date_visit));?>&nbsp;<?php echo date("H:i:s A", strtotime($getOPDPatient->time_visit));?></td>
                                </tr>
                                <tr>
                                	<td><u>In-Charge Doctor</u></td>
                                    <td><?php echo $getOPDPatient->con_doctor;?></td>
                                </tr>
                                <tr>
                                	<td><u>Department</u></td>
                                    <td><?php echo $getOPDPatient->dept_name;?></td>
                                </tr>
                                <tr>
                                	<td><u>Room</u></td>
                                    <td><?php echo $getOPDPatient->room_name;?></td>
                                </tr>
                                <tr>
                                	<td><u>Bed No.</u></td>
                                    <td><?php echo $getOPDPatient->bed_name;?></td>
                                </tr>
                                </table>
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
                                           <!--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Medication</a>-->
                                          
                                           <!--<a href="<?php echo base_url()?>app/ipd_print/print_medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>-->
                                           <!-- <table class="table table-hover table-striped">
                                           <thead>
                                           		<tr>
                                                	<th>Medicine Name</th>
                                                    <th>Instruction</th>
                                                    <th>Advice</th>
                                                    <th>Days</th>
                                                    <th>Qty</th>
                                                    <th>Prepared by</th>
                                                    <th></th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                           <?php foreach($patientMedication as $rows){?>
                                           <tr>
                                           		<td><?php echo $rows->drug_name?></td>
                                                <td><?php echo $rows->instruction?></td>
                                                <td><?php echo $rows->advice?></td>
                                                <td><?php echo $rows->days?></td>
                                                <td><?php echo $rows->total_qty?></td>
                                                <td><?php echo $rows->name?></td>
                                                <td>
                                                <a href="<?php echo base_url()?>app/nurse_module/delete_medication/<?php echo $rows->iop_med_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>
                                          		</td>
                                           </tr>
                                           <?php }?> 
                                           </tbody>
                                           </table> -->
                                            
                                             <br><br><br><br>
                                            <form method="post" action="<?php echo base_url()?>app/nurse_module/save_medication_chart">
                                                <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                                                    <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                                                <div class="well">Today prepared medicine by doctor</div>
                                            <table class="table table-hover table-striped">
                                           <thead>
                                                <tr>
                                                    <th>Medicine Name<?php 
                                                    /*echo "<pre>";
                                                    var_dump($medicine_chart)*/ ?></th>
                                                    <th><?php echo date("d/m/Y");?></th>
                                                </tr>
                                           </thead>
                                           <tbody>

                                           <?php foreach($medicine_chart as $key =>$rows3){
                                        if($rows3->to_date>=date("Y-m-d")) {
                                            ?>

                                           <tr>
                                                <td><?php echo $rows3->medicine_name?>
                                                    <input type="hidden" name="medicine_id[]" value="<?php echo $rows3->iop_med_id?>">
                                                    <input type="hidden" name="iop_id[]" value="<?php echo $rows3->iop_id?>">
                                                    <input type="hidden" name="medicine_name[]" value="<?php echo $rows3->medicine_name?>">
                                                </td>
                                                <td>
                                                    <?php 
                                                    $daily_dose=explode(',',$rows3->dose);
                                                    /*print_r($daily_dose);*/
                                                    for($i=0;$i<count($daily_dose);$i++) {
                                                ?><input class="checkbox_margin" type ="checkbox" name ="dose[<?=$key?>][]" value ="<?php echo $daily_dose[$i]; ?>"><?php echo $daily_dose[$i]; ?>
                                                    <?php } ?></td>
                                                
                                           </tr>
                                           <?php } }?>

                                           </tbody>
                                           </table>
                                           <table>
                                               <?php
                                            if(!empty($medicine_chart)){ ?>
                            <tr>
                                <td>
                                    <input type="submit" class="btn btn-outline-primary hvr-shutter-in-vertical" value="Save Changes" name="save">
                                </td>   
                        </tr> 
                        <?php } ?>
                        </table>
                    </form>
                                            <br><br><br><br><br><br><br>
  <div class="well">Today given medicine by nurse</div>
                                            <table class="table table-hover table-striped">
                                           <thead>
                                                <tr>
                                                    <th>Medicine Name</th>
                                                    <th><?php echo date("d/m/Y");?></th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                           </thead>
                                           <tbody>
                                            <?php /*echo "<pre>"; print_r($given_medicine_chart);*/ ?>
                                           <?php foreach($given_medicine_chart as $key =>$rows3){
                                          if($rows3->given_date==date("Y-m-d")) {
                                            ?>

                                           <tr>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getMedicineById($rows3->iop_med_id);
                                                
                                                echo $pages->medicine_name; 
                                                ?>
                                                    <input type="hidden" name="medicine_id[]" value="<?php echo $rows3->iop_med_id?>">
                                                    <input type="hidden" name="iop_id[]" value="<?php echo $rows3->iop_id?>">
                                                </td>
                                                <td>
                                                    <?php 
                                                    $daily_dose=explode(',',$rows3->dose);
                                                    for($i=0;$i<count($daily_dose);$i++) {
                                                ?><input class=checkbox_margin type = checkbox name ="dose[<?=$key?>][]" value ="<?php echo $daily_dose[$i]; ?>" checked><?php echo $daily_dose[$i]; ?>
                                                    <?php } ?></td>
                                                    <!-- <td><a href="#" class="btn-review" data-nurse_med_id="<?php echo $rows3->iop_med_id;?>" data-med_id="<?php echo $rows3->iop_med_id;?>" data-single_dose="<?php echo $rows3->dose;?>" data-iop_id="<?php echo $rows3->iop_id;?>">Edit</a></td> -->
                                                
                                           </tr>
                                           <?php } }?>

                                           </tbody>
                                           </table>
                                           <!-- <h2>Weekly Dose Chart</h2>
                                           
                                           <span>5</span><span>6</span><span>7</span><br>
    <?php  foreach ($weeklyDoseChart as $date => $doses): ?>
        <span><?php if(date('Y-m-d', strtotime('wednesday this week'))==$date){ echo implode(', ', $doses); }?></span><span><?php if(date('Y-m-d', strtotime('thursday this week'))==$date){ echo implode(', ', $doses); }?></span><span><?php if(date('Y-m-d', strtotime('friday this week'))==$date){ echo implode(', ', $doses); }?></span><span><?php if(date('Y-m-d', strtotime('saturday this week'))==$date){ echo implode(', ', $doses); }?></span>
         <span>Date: <?php echo $date; ?></span>
        <span>Doses: <?php echo implode(', ', $doses); ?></span> 
    <?php endforeach; ?> -->
                                            <br><br><br><br><br><br><br>
                                                                                        
                    <form action="<?php echo base_url()?>app/nurse_module/edit_medication_chart" method="post">
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
                                            <td>Medicine Name</td>
                                            <td>
                                                <input type="hidden" name="nurse_med_id" class="nurse_med_id">
                                                <input type="hidden" name="iop_id" class="iop_id">
                                                <input type="hidden" name="med_id" class="med_id">
                                                <input type="text" name="medicine_name" placeholder="Medicine name" class="form-control input-sm med_id" style="width: 250px;" required>
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
                                            <button type="submit" class="btn btn-primary" name="btnSave">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </form>
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
                            <form method="post" action="<?php echo base_url()?>app/nurse_module/save_medication" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Medication</h4>
                                        </div>

<script language="javascript">
function showDrugName(category_id)
{
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
    document.getElementById("showCategories").innerHTML=xmlhttp.responseText;
    }
  }
  var supp;

xmlhttp.open("GET","<?php echo base_url();?>app/opd/getDrugName/"+category_id,true);
xmlhttp.send();

}
</script>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                        	<td>Category</td>
                                            <td>
                                            				<select name="category" onChange="showDrugName(this.value);" id="category" class="form-control input-sm" style="width: 100%;" required>
                                                            	<option value="">- Category Name -</option>
																<?php 
																foreach($medicineCategory as $medicineCategory){?>
                                                            	<option value="<?php echo $medicineCategory->cat_id;?>"><?php echo $medicineCategory->med_category_name;?></option>
                                                                <?php }?>
                                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>Drug Name</td>
                                            <td>
                                            <label id="showCategories">
                        					<select name="drug_name" id="drug_name" class="form-control input-sm" style="width: 100%;" required>
                        						<option value="">- select -</option>
                        					</select>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>Days</td>
                                            <td><input type="text" name="nDays" placeholder="Days" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Qty</td>
                                            <td><input type="text" name="qty" placeholder="Qty" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Instruction</td>
                                            <td><textarea name="instruction" placeholder="Instruction" class="form-control input-sm" style="width: 100%;"></textarea></td>
                                        </tr>
                                        <tr>
                                        	<td>Advice</td>
                                            <td><textarea name="advice" placeholder="Advice" class="form-control input-sm" style="width: 100%;"></textarea></td>
                                        </tr>
                                        </tbody>
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
                            <!-- /.modal -->        
        <script>
            $(document).ready(function() {
            $('.btn-review').on('click',function() {

                            $('.iop_id').val($(this).data('iop_id'));
                            $('.nurse_med_id').val($(this).data('nurse_med_id'));
                            $('.med_id').val($(this).data('med_id'));

                            $('#reviewmodal').modal('show');

                        });
            });
        </script>
        <!-- Start check one checkbox allowed -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <script>
        $(document).on('click', 'input[type="checkbox"]', function() {      
        // $('input[type="checkbox"]').not(this).prop('checked', false);
        $(this).closest('tr').find('input[type="checkbox"]').not(this).prop('checked', false);      
        });
        </script>
        <!-- End check one checkbox allowed -->

        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>