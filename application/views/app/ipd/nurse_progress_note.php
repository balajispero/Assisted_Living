<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
 <meta content="free live demo hms,free live demo Assisted Living,live demo,demo,live,Assisted Living live demo,Assisted Living free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,Assisted Living,hospital,management,system,solution,online demo,demo Assisted Living,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
  <meta content="Jayson Sarino" name="author">

  <meta property="og:site_name" content="Assisted Living Free Trial Demo">
  <meta property="og:title" content="Assisted Living">
  <meta property="og:description" content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
  <meta property="og:url" content="http://hms-demo.jaysonsarino.com/">

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
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>rem
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
                                    <li class="active"><a href="<?php echo base_url()?>app/ipd/nurse_progress_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Progress Note</a></li>
                                    <li><a href="<?php echo base_url()?>app/ipd/vitalSign/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Vital Sign</a></li>
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
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Progress Note</a></li>
                                        
                                	</ul>
                                    <div class="tab-content">
                                    	<div class="tab-pane active" id="tab_1">
                                        	
                                            <?php echo $message;?>
                                            <?php //if($this->session->userdata('emr_viewing') == ""){?>	
                                           <?php if($getOPDPatient->nStatus == "Pending"){?>
                                           <a href="#" class="btn btn-primary bg_color" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Notes</a>
                                          <?php } ?>
                                           <a href="<?php echo base_url()?>app/ipd_print/print_nurse_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
                                           <!-- <a href="<?php echo base_url()?>app/ipd_print/pdf_nurse_note/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> PDF</a> -->
                                           <table class="table table-hover table-striped">
                                           <thead>
                                           		<tr>
                                                	<th>Date Time</th>
                                                    <th>Complain</th>
                                                    <th>Clinical Notes</th>
                                                    <th>Prepared by</th>
                                                    <th></th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                           <?php foreach($getNurseProgressNote as $rows){?>
                                           <tr>
                                           		<td><?php echo date("M d, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td>
                                                    <?php
                                                    if(!empty($rows->complain_id))
                                                    {
                                                        $ci_obj = & get_instance();
                                                        $ci_obj->load->model('app/general_model');
                                                        $compl = $ci_obj->general_model->getComplainById($rows->complain_id);
                                                        
                                                        echo $compl->complain_name;
                                                    }
                                                    ?>
                                                    
                                                </td>
                                                <td><?php echo $rows->notes?></td>
                                                <td><?php 
												$ci_obj = & get_instance();
												$ci_obj->load->model('app/general_model');
												$pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
												
												echo $pages->cPreparedBy?></td>
                                                <td>
                                                <?php if($this->session->userdata('emr_viewing') == ""){?>	
                                                <?php if($getOPDPatient->nStatus == "Pending"){?>
                                                <a href="<?php echo base_url()?>app/ipd/delete_nurse_progress/<?php echo $rows->nurse_notes_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a>&nbsp;|&nbsp;
                                                <a href="#" class="btn-review" data-ddate="<?php echo $rows->dDate;?>" data-note="<?php echo $rows->notes;?>" data-id="<?php echo $rows->nurse_notes_id;?>" data-compl_id="<?php echo $rows->complain_id;?>">Edit</a>
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
				minDate: new Date(1999, 10 - 1, 25),
				$('#cTo').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });
        </script>
        <!-- END BDAY -->
        
							<!-- Modal -->
                            <form method="post" action="<?php echo base_url()?>app/ipd/nurse_progress_note" onSubmit="return confirm('Are you sure you want to save?');">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Progress Note</h4>
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
                                        	<td>Date</td>
                                            <td><input type="text" name="dDate" id="dDate" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="form-control input-sm" style="width: 100%;" required></td>
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
                                       <!-- <tr>
                                        	<td>Focus</td>
                                            <td><input type="text" name="focus" placeholder="Focus" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>-->
                                        <tr>
                                            <td>Complaints</td>
                                            <td>
                                            <select name="complain" id="complain" style="width: 100%;" class="form-control input-sm">
                                                                <option value="">- Complaints -</option>
                                                                <?php 
                                                                foreach($ComplainList as $ComplainList){?>
                                                                <option value="<?php echo $ComplainList->complain_id;?>"><?php echo $ComplainList->complain_name;?></option>
                                                                <?php }?>
                                                            </select> 
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>Notes</td>
                                            <td><textarea name="notes" placeholder="Notes" class="form-control input-sm" style="width: 100%;" rows="3"></textarea></td>
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
                            
                            <form action="<?php echo base_url()?>app/ipd/edit_nurse_progress_note" method="post" id="updateForm">
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <input type="hidden" name="nurse_notes_id" class="nurse_notes_id">
                            
                    <div class="modal fade" id="reviewmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Progress Note</h4>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>Date</td>
                                            <td><input type="date" name="dDate" id="dDate" value="<?php echo date("Y-m-d");?>" placeholder="Date" class="ddate form-control input-sm" style="width: 100%;" required></td>
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
                                            <td>Complaints</td>
                                            <td>
                                           <select name="complain" id="editcompl" style="width: 100%;"  class="form-control input-sm editcompl">
                                                                <option value="">- Complaints -</option>
                                                                <?php 
                                                                foreach($ComplainList1 as $ComplainList1){
                                                                ?>
                                                                <option value="<?php echo $ComplainList1->complain_id;?>"><?php echo $ComplainList1->complain_name;?></option>
                                                                <?php }?>
                                                            </select>

                                                            
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td>Notes</td>
                                            <td><textarea name="notes" placeholder="Notes" class="note form-control input-sm" style="width: 100%;" rows="3"></textarea></td>
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
        
        
        
        
        
        
        
        
        
        
       <!-- jQuery 2.0.2 -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <!-- Strat script for open modal for user logout on header section -->
        <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- End script for open modal for user logout on header section -->
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
        <script>
            /*$(document).ready(function() {
            $('.btn-review').on('click',function() {
                            $('.nurse_notes_id').val($(this).data('id'));
                            $('.ddate').val($(this).data('ddate'));
                            $('.note').val($(this).data('note'));
                            var complid=$(this).data('compl_id');

                            $('#reviewmodal').modal('show');
                            $("#editcompl option[value='" + complid + "']").attr('selected', 'selected');

                        });
            });*/
            
        </script>
        
        <script>
$(document).ready(function() {
    // Edit functionality start
    $(document).on('click', '.btn-review', function (event) {
        event.preventDefault(); // Prevent the default link behavior

        const nurse_notes_id = $(this).data("id");

        if (window.XMLHttpRequest) {
            xmlhttp6 = new XMLHttpRequest();
        } else {
            // Code for IE6, IE5
            xmlhttp6 = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp6.onreadystatechange = function() {
            if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200) {
                $('#updateForm').each(function() {
                    this.reset();
                });
                var res = JSON.parse(xmlhttp6.responseText);
                console.log(res);

                $('#reviewmodal').modal('show');

                // Assuming that res[0].complain_id contains the value you want to select in the dropdown
                var selectedValue = res[0].complain_id;

                // Set the selected option based on the selectedValue
                $(".editcompl").val(selectedValue);
                            $('.nurse_notes_id').val(res[0].nurse_notes_id);
                            $('.ddate').val(res[0].dDate);
                            $('.note').val(res[0].notes);
            }
        }

        xmlhttp6.open("GET", "<?php echo base_url();?>app/ipd/get_progressnote_id_data/" + nurse_notes_id, true);
        xmlhttp6.send();
    });
});
</script>

    </body>
</html>