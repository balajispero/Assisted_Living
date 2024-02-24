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
                                 	<li><a href="<?php echo base_url()?>app/ipd/individual_care_plan/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Individual Care Plan</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/complain/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Complaint</a></li> -->
                                 	<li><a href="<?php echo base_url()?>app/ipd/diagnosis/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Diagnosis</a></li>
                                 	<li><a href="<?php echo base_url()?>app/ipd/medication/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Medication</a></li>
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li> -->
                                    <li><a href="<?php echo base_url()?>app/ipd/intake_output/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intake/Output Record</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Vital Sign</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/room_transfer/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> IP Room Transfer</a></li>
                                    
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/bed_side_procedure/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Bed Side Procedure</a></li>-->
                                    <!-- <li><a href="<?php echo base_url()?>app/ipd/operation_theater/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Operation Theater</a></li> -->
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/patientHistory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Patient History</a></li>-->
                                    <li class="active"><a href="<?php echo base_url()?>app/ipd/laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Intervention</a></li>
                                    <!--<li><a href="<?php echo base_url()?>app/ipd/discharge_summary/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Discharge Summary</a></li>-->
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                	<ul class="nav nav-tabs">
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Intervention</a></li>
                                        
                                	</ul>
                                    <div class="tab-content">
                                    	<div class="tab-pane active" id="tab_1">
                                        	<?php //if($this->session->userdata('emr_viewing') == ""){?>	
                                        	<?php //if($getOPDPatient->nStatus == "Pending"){?>
                                            <a href="#" class="btn btn-outline-primary hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Intervention</a>
                                            
                                            <?php // }}?>
                                            <a href="<?php echo base_url()?>app/ipd_print/print_laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
                                            <!-- <a href="<?php echo base_url()?>app/ipd_print/pdf_laboratory/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> PDF</a> -->
                                           <table class="table table-hover table-striped">
                                           <thead>
                                           <tr>
                                           		<th>Date</th>
                                                <th>Intervention</th>
                                                <th>Doctor In-Charge</th>
                                                <th>Findings</th>
                                                <!--<th>Results</th>-->
                                                <th></th>
                                           </tr>
                                           </thead>
                                           <tbody>
                                           <?php foreach($patient_lab as $patient_lab){?>
                                           <tr>
                                           		<td><?php echo date("M d, Y h:i:s A",strtotime($patient_lab->dDateTime));?></td>
                                                <td><?php if($patient_lab->group_name=="LAB"){ /*echo $patient_lab->laboratory_id;*/
                                                    
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getLabSampleById($patient_lab->laboratory_id);
                                                echo @$pages->test_name;

                                                 }else{ echo $patient_lab->particular_name; }?></td>
                                                <td><?php echo $patient_lab->doctor?></td>
                                                <td><?php echo $patient_lab->findings?></td>
                                                <!--<td><?php echo $patient_lab->result?></td>-->
                                                <td>
                                                <?php if($this->session->userdata('emr_viewing') == ""){?>	
                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                <!--<a href="<?php echo base_url()?>app/ipd/delete_lab/<?php echo $patient_lab->io_lab_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>-->
                                                <a href="#" class="editlaboratory" data-io_lab_id="<?php echo $patient_lab->io_lab_id; ?>" data-toggle="modal" data-target="#edit" type="button">Reopen</a>
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
                                                        <form method="post" action="<?php echo base_url()?>app/ipd/save_laboratory" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Intervention</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td>Particular Category <font color="#FF0000">*</font></td>
                                                <td>
                                                                <select name="category" onChange="showDrugName(this.value);" id="category" class="form-control input-sm" style="width: 100%; " required>
                                                                    <option value="">- Particular Category -</option>
                                                                    <?php 
                                                                    foreach($particular_cat as $particular_cat){?>
                                                                    <option value="<?php echo $particular_cat->group_id;?>"><?php echo $particular_cat->group_name;?></option>
                                                                    <?php }?>
                                                                </select>
                                                </td>
                                            </tr>
                                            <tr>
                                        	<td>Particular Item<font color="#FF0000">*</font></td>
                                            <td>
                                            <span id="showCategories" class="showCategories">
                                                <input type="text" name="test_name" id="test_name" class="test_name form-control" style="display:none;">
                        					<select name="item" id="item" class="particularitem form-control input-sm" style="width: 100%;" required>
                        						<option value="">- Particular Item -</option>
                                                <!-- <?php 
                                                                    foreach($particular_cat as $particular_cat){?>
                                                                    <option value="<?php echo $particular_cat->group_id;?>"><?php echo $particular_cat->group_name;?></option>
                                                                    <?php }?> -->
                        					</select>
                                            </span>
                                            </td>
                                        </tr>
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
                                        	<td>Doctor <font color="#FF0000">*</font></td>
                                            <td>
                                            <select name="doctor" id="doctor" class="form-control input-sm" style="width: 100%;" required>
                                                            	<option value="">- Consultant Doctor -</option>
                                                            	<?php 
																foreach($doctorList2 as $doctorList2){
																?>
                                                            	<option value="<?php echo $doctorList2->user_id;?>"><?php echo $doctorList2->name;?></option>
                                                                <?php }?>
                                                            </select>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                        	<td>Findings</td>
                                            <td><textarea name="findings" placeholder="Findings" class="form-control input-sm" style="width: 100%;" rows="3"></textarea></td>
                                        </tr> -->
                                        <!-- <tr>
                                        	<td>Results</td>
                                            <td><textarea name="results" placeholder="Results" class="form-control input-sm" style="width: 100%;" rows="3"></textarea></td>
                                        </tr> -->
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                             <button name="btnSubmit" class="btn btn-outline-primary hvr-shutter-in-vertical" id="btnSubmit" type="submit" style="font-size:12px;">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            
                            <!-- edit The Modal -->
<div class="modal" id="edit">
  <div class="modal-dialog" style="max-width:80%;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo base_url()?>app/ipd/edit_laboratory" id="updateForm" method="post">
            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <input type="hidden" name="io_lab_id" id="lab_id">
            <div class="row align-items-center">
              <div class="col-md-4">
                <h4>Particular Category<font color="#FF0000">*</font></h4>
              </div>
              <div class="col-md-8">
                <input type="hidden" name="editio_lab_id" id="editio_lab_id">
                <select name="category" onChange="showDrugName(this.value);" id="editcat" class="editcat form-control input-sm" required>
                                                                    <option value="">- Paricular Category -</option>
                                                                    <?php 
                                                                    foreach($particular_cat1 as $particular_cat){?>
                                                                    <option value="<?php echo $particular_cat->group_id;?>"><?php echo $particular_cat->group_name;?></option>
                                                                    <?php }?>
                                                                </select>
              </div>
            </div>
            <hr class="mx-n3">

             <div class="row align-items-center">
              <div class="col-md-4">
                <h4 class="mb-0">Particular Item<font color="#FF0000">*</font></h4>
              </div>
              <div class="col-md-8">

               <span id="showCategories1" class="showCategories">
                <input type="text" name="test_name" id="test_name1" class="test_name form-control" style="display:none;">
                                            <select name="item" id="particularitem" class="particularitem form-control input-sm" required>
                                                <option value="">- Paricular Item -</option>
                                                
                                            </select>
                                            </span>

              </div>
            </div>
            <hr class="mx-n3">

             <div class="row align-items-center">
              <div class="col-md-4">
                <h4 class="mb-0">Date</h4>
              </div>
              <div class="col-md-8">

               <input type="text" name="dDate" id="dDate" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="dDate form-control input-sm" style="width: 100%;" required>

              </div>
            </div>
            <hr class="mx-n3">

             <div class="row align-items-center">
              <div class="col-md-4">
                <h4 class="mb-0">Time</h4>
              </div>
              <div class="col-md-8">

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

              </div>
            </div>
            <hr class="mx-n3">

             <div class="row align-items-center">
              <div class="col-md-4">
                <h4 class="mb-0">Doctor<font color="#FF0000">*</font></h4>
              </div>
              <div class="col-md-8">
<select name="doctor" id="editdoctor" class="form-control input-sm" style="width: 100%;" required>
                                                                <option value="">- Consultant Doctor -</option>
                                                                <?php 
                                                                foreach($doctorList as $doctorList2){
                                                                ?>
                                                                <option value="<?php echo $doctorList2->user_id;?>"><?php echo $doctorList2->name;?></option>
                                                                <?php }?>
                                                            </select>

              </div>
            </div>
            <hr class="mx-n3">

             <div class="row align-items-center">
              <div class="col-md-4">
                <h4 class="mb-0">Finding</h4>
              </div>
              <div class="col-md-8">
                <!-- <input type="text" name="findings" id="findings"> -->
                 <textarea name="findings" placeholder="Findings" class="form-control input-sm" style="width: 100%;" rows="3"></textarea> 
              </div>
            </div>
           

        
            <div class="row justify-content-center">
                <div class="col-6 text-center" id="errors111"></div>

            </div>
        
            </div>

      <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" id="editBtn" class="btn btn-sm btn-outline-primary hvr-shutter-in-vertical"  tabindex="11">Update</button>
                                        </div>
                                        </form>

    </div>
  </div>
</div>
<!-- edit modal ends here -->
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
        
        <script>
            $(document).ready(function() {
            //edit functionality start//
$(document).on('click', '.editlaboratory', function (event) {
    //event.preventDefault();

const io_lab_id = $(this).data("io_lab_id"); 
// alert(io_lab_id)

if (window.XMLHttpRequest)
  {
  xmlhttp6=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp6=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp6.onreadystatechange=function()
  {
  if (xmlhttp6.readyState==4 && xmlhttp6.status==200)
    {
        var res = JSON.parse(xmlhttp6.responseText);
        console.log(res);
        //alert(res[0].laboratory_id);
        var docid=res[0].doctor;
        //var docid='000'+res[0].doctor;
        $('#lab_id').val(res[0].io_lab_id)

        if(res[0].category_id=="790")
    {
         
         //$(".test_name").show();
         //$("input[name='test_name']").val(res[0].laboratory_id);
         //$(".particularitem").hide();
    }
    else {

         $(".test_name").hide();
         $(".particularitem").show();
        showDrugName(res[0].category_id,res[0].laboratory_id);
        $("input[name='test_name']").val('');
       
    }

        //showDrugName(res[0].category_id);
        $(".editcat option[value=" + res[0].category_id + "]").attr('selected', 'selected');
        $("textarea[name='findings']").val(res[0].findings);
        
        $("input[name='dDate']").val(res[0].dDate);
        $("input[name='editio_lab_id']").val(res[0].io_lab_id);

         $("#editdoctor option[value='" + docid + "']").attr('selected', 'selected');
         $(".particularitem option[value=" + res[0].laboratory_id + "]").attr('selected', 'selected');
        
    }
  }

xmlhttp6.open("GET","<?php echo base_url();?>app/ipd/view_patient_lab/"+io_lab_id,true);
xmlhttp6.send();
});
            });
        </script>
        
        
        <script language="javascript">

function showDrugList(category_id)
{
if (window.XMLHttpRequest)
  {
  xmlhttp3=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp3=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp3.onreadystatechange=function()
  {
  if (xmlhttp3.readyState==4 && xmlhttp3.status==200)
    {
	
    document.getElementById("showDrugListItem").innerHTML=xmlhttp3.responseText;
    }
  }
  var supp;
xmlhttp3.open("GET","<?php echo base_url();?>app/billing/drug_list/"+category_id,true);
xmlhttp3.send();

}

function getDrugRate(category_id)
{
if (window.XMLHttpRequest)
  {
  xmlhttp5=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp5=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp5.onreadystatechange=function()
  {
  if (xmlhttp5.readyState==4 && xmlhttp5.status==200)
    {
	
    document.getElementById("showDrugRate").innerHTML=xmlhttp5.responseText;
    }
  }

xmlhttp5.open("GET","<?php echo base_url();?>app/billing/getDrugRate/"+category_id,true);
xmlhttp5.send();

}


function showDrugName(category_id,laboratory_id=0)
{
    if(category_id=="790")
    {
        //$(".test_name").show();
        //$(".particularitem").hide();
        
    }
    else {
        $(".test_name").hide();
         $(".particularitem").show();
         $("input[name='test_name']").val('');
         $(".particularitem option").remove();

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
        var result = JSON.parse(xmlhttp.responseText);
        var sub_cat="";

        for (var i = 0; i < result.length; i++) {  
                   sub_cat += '<option value="' + result[i].particular_id + '">' + result[i].particular_name + '</option>';  
               }
      
    // document.getElementById("showCategories").innerHTML=xmlhttp.responseText;
               $(".particularitem").html(sub_cat);

               $(".particularitem option[value=" + laboratory_id + "]").attr('selected', 'selected');

    }
  }
  var supp;

xmlhttp.open("GET","<?php echo base_url();?>app/billing/getparticularname/"+category_id,true);
xmlhttp.send();
}

}

function getItemRate(category_id)
{
if (window.XMLHttpRequest)
  {
  xmlhttp2=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp2.onreadystatechange=function()
  {
  if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
    {
	
    document.getElementById("showRate").innerHTML=xmlhttp2.responseText;
    }
  }

xmlhttp2.open("GET","<?php echo base_url();?>app/billing/getRate/"+category_id,true);
xmlhttp2.send();

}



												// function showBills(val){
												// 	if(val == "particular"){
												// 		document.getElementById("particular").style.display = "inline";
												// 		document.getElementById("particular_item").style.display = "inline";
												// 		document.getElementById("category").style.display = "inline";
												// 		document.getElementById("showCategories").style.display = "inline";
												// 		document.getElementById("showRate").style.display = "inline";
												// 		document.getElementById("medicine").style.display = "none";
												// 		document.getElementById("drug_name").style.display = "none";
												// 		document.getElementById("medicine_cat").style.display = "none";
												// 		document.getElementById("showDrugListItem").style.display = "none";
												// 		document.getElementById("showDrugRate").style.display = "none";
												// 		document.getElementById("buttonMedication").style.display = "none";
												// 	}else if(val == "medicine"){
												// 		document.getElementById("particular").style.display = "none";
												// 		document.getElementById("particular_item").style.display = "none";
												// 		document.getElementById("category").style.display = "none";
												// 		document.getElementById("showCategories").style.display = "none";
												// 		document.getElementById("showRate").style.display = "none";
												// 		document.getElementById("medicine").style.display = "inline";
												// 		document.getElementById("drug_name").style.display = "inline";
												// 		document.getElementById("medicine_cat").style.display = "inline";
												// 		document.getElementById("showDrugListItem").style.display = "inline";
												// 		document.getElementById("showDrugRate").style.display = "inline";
												// 		document.getElementById("buttonMedication").style.display = "inline";
												// 	}
												// }
</script>
        
<?php require_once(APPPATH . 'views/include/footer.php'); ?>
    </body>
</html>