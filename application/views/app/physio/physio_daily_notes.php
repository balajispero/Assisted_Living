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
                   <h1>Physio Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">EMR sheet</a></li>
                        <li><a href="<?php echo base_url()?>app/emr/ipd">In-Member</a></li>
                    </ol>
                    <?php }else{?>
                    <h1>Physio Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Physio Module</a></li>
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
                                    <li ><a href="<?php echo base_url()?>app/physio/view/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Physio Evaluation</a></li>
                                 <li><a href="<?php echo base_url()?>app/physio/treatment_protocol/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Treatment Protocol</a></li>
                                
                                 <li class="active"><a href="<?php echo base_url()?>app/physio/physio_daily_notes/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Daily Notes</a></li> 
                                    <li><a href="<?php echo base_url()?>app/physio/physio_discharge_summary_list/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Discharge Summary</a></li> 
                                    
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                	<ul class="nav nav-tabs">
                                		<li class="active"><a href="#tab_1" data-toggle="tab">Daily Notes</a></li>
                                        
                                	</ul>
                                    <div class="tab-content">
                                    	<div class="tab-pane active" id="tab_1">
                                        	
                                             <?php echo $message;?> 
                                            <?php if($this->session->userdata('emr_viewing') == ""){?>	
                                           <?php if($getOPDPatient->nStatus == "Pending"){?>
                                           <a href="#" class="add_physio_notes btn btn-outline-primary hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Daily Notes</a>
                                           <?php }}?>
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
                                          
                                            <th>Date</th>
                                            <th>Evaluation No.</th>
                                            <th>Note</th>
                                            
                                                    <th>Added by</th>
                                                    <?php if($this->session->userdata('user_role') == 11 || $this->session->userdata('physio_expert') == "Yes" || $this->session->userdata('physio_expert') == "No"){ ?>
                                                        <th>Action</th>
                                                    <?php } ?>
                                                    
                                           </tr>
                                           </thead>
                                           <tbody>
                                           <?php
                                           
                                           foreach($physioNotes as $key => $rows){?>
                                            <tr>
                                            <td><?php echo $rows->session_date?></a></td>
                                                <td><?php echo $rows->eval_no?></td>
                                                <td><?php echo $rows->notes; ?></td>
                                               
                                                <td>
                                                    <?php
                                                        $ci_obj = & get_instance();
                                                        $ci_obj->load->model('app/general_model');
                                                        $pages = $ci_obj->general_model->getPreparedBy($rows->added_by);
                                                         echo $pages->cPreparedBy;
                                                     ?>    
                                                    </td>
                                               <?php if($this->session->userdata('user_role') == 11 || $this->session->userdata('physio_expert') == "Yes" || $this->session->userdata('physio_expert') == "No"){ ?>
                                                <td>
                                                        <a href="#" class="edit_physio_notes" data-physio_notes_id="<?php echo $rows->physio_notes_id; ?>" data-toggle="modal" data-target="#editModal" type="button">Edit</a>
                                                        <!-- <a href="<?php echo base_url()?>app/physio/delete_physio_daily_notes/<?php echo $rows->physio_notes_id?>/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" onClick="return confirm('Are you sure you want to remove?');">Remove</a> -->
                                                </td>
                                            <?php } ?>

                                           </tr> 
                                           <?php }?> 
                                           </tbody>
                                           </table>
                                       </div>

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
                             <form method="post" id="addForm" action="<?php echo base_url()?>app/physio/physio_daily_notes" onSubmit="return confirm('Are you sure you want to save?');"> 
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <input type="hidden" name="eval_no" value="EVAL00001">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Daily Notes</h4>
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

xmlhttp.open("GET","<?php echo base_url();?>app/billing/getItem/"+category_id,true);
xmlhttp.send();

}

function getData(category_id)
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
	
    document.getElementById("showroom_name").innerHTML=xmlhttp2.responseText;
    }
  }
  var supp;

xmlhttp2.open("GET","<?php echo base_url();?>general/getRoomName/"+category_id,true);
xmlhttp2.send();

}

function showBedLists(category_id){
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
  if (xmlhttp3.readyState==4 && xmlhttp2.status==200)
    {
	
    document.getElementById("bedname").innerHTML=xmlhttp3.responseText;
    }
  }
  var supp;

xmlhttp3.open("GET","<?php echo base_url();?>general/getBedList/"+category_id,true);
xmlhttp3.send();
}
</script>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td width="100">Evaluation No.<span class="text-danger">*</span></td>
                                           <td width="250">   <select name="eval_no" onChange="show_treatment_line_data(this.value);" class="form-control input-sm" required>
                                                                <option value="">-Select Evaluation No-</option>
                                                                <?php 
                                                                foreach($eval_no_list as $eval_no_list){
                                                                    if($eval_no_list->therapy_status!="Completed" && $eval_no_list->therapy_status!="Deceased") {
                                                                ?>
                                                                <option value="<?php echo $eval_no_list->eval_no;?>"><?php echo $eval_no_list->eval_no;?></option>
                                                                <?php } }?>
                                                                            </select></td>
                                        </tr>
                                           <tr>
                                        	<td width="98">Date</td>
                                            <td width="250"><input type="text" value="<?php echo date("Y-m-d");?>" name="dDate" id="dDate" placeholder="Date" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Time</td>
                                            <td>
                                            <div class="bootstrap-timepicker">
                                        	<div class="form-group">
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker" value="<?php echo date("h:i:s A");?>"  name="dTime" id="dTime"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                        	</div><!-- /.form group -->
                                    		</div>
                                            </td>
                                        </tr>
                                      
                                      
                                        <tr>
                                        	<td>Note<span class="text-danger">*</span></td>
                                            <td><textarea name="notes" placeholder="Note" class="form-control input-sm" style="width: 100%;" rows="3" required></textarea></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSave" id="btnSave">Save</button>
                                        </div>
                                       
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </form>
                            <!-- /.modal -->  
                            
                            
                            							<!-- Modal -->
                                                        <form method="post" action="<?php echo base_url()?>app/physio/update_physio_daily_notes" onSubmit="return confirm('Are you sure you want to update?');"> 
                            <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                            <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                            <input type="hidden" name="physio_notes_id" value="">
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Daily Notes</h4>
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

xmlhttp.open("GET","<?php echo base_url();?>app/billing/getItem/"+category_id,true);
xmlhttp.send();

}

function getData(category_id)
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
	
    document.getElementById("showroom_name").innerHTML=xmlhttp2.responseText;
    }
  }
  var supp;

xmlhttp2.open("GET","<?php echo base_url();?>general/getRoomName/"+category_id,true);
xmlhttp2.send();

}

function showBedLists(category_id){
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
  if (xmlhttp3.readyState==4 && xmlhttp2.status==200)
    {
	
    document.getElementById("bedname").innerHTML=xmlhttp3.responseText;
    }
  }
  var supp;

xmlhttp3.open("GET","<?php echo base_url();?>general/getBedList/"+category_id,true);
xmlhttp3.send();
}
</script>
                                        <div class="modal-body">
                                        <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td width="100">Evaluation No.<span class="text-danger">*</span></td>

                                           <td width="250">   <select name="eval_no" class="eval_no form-control input-sm" required>
                                                                <option value="">-Select Evaluation No-</option>
                                                                <?php 
                                                                foreach($eval_no_list1 as $eval_no_list1){ 

                                                                ?>
                                                                <option value="<?php echo $eval_no_list1->eval_no;?>"><?php echo $eval_no_list1->eval_no;?></option>
                                                                <?php } ?>
                                                                            </select></td>
                                        </tr>
                                           <tr>
                                        	<td width="98">Date</td>
                                            <td width="250"><input type="text" value="<?php echo date("Y-m-d");?>" name="dDate" id="dDate1" placeholder="Date" class="form-control input-sm" style="width: 100%;" required></td>
                                        </tr>
                                        <tr>
                                        	<td>Time</td>
                                            <td>
                                            <div class="bootstrap-timepicker">
                                        	<div class="form-group">
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker" value="<?php echo date("h:i:s A");?>"  name="dTime" id="dTime"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                        	</div><!-- /.form group -->
                                    		</div>
                                            </td>
                                        </tr>
                                      
                                      
                                        <tr>
                                        	<td>Note<span class="text-danger">*</span></td>
                                            <td><textarea name="notes" placeholder="Note" class="form-control input-sm" style="width: 100%;" rows="3" required></textarea></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSave" id="btnSave">Save</button>
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
                $('#dDate1').datepicker({
                    //format: "dd/mm/yyyy"
                    format: "yyyy-mm-dd"
                });  
				$('#dDate_to').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });
        </script>
        <!-- END DATE -->
        <script>
            $(document).ready(function() {
                $(document).on('click', '.add_physio_notes', function (event) {
                    $('#addForm').each(function() {
                        this.reset();
                    });
				});

            //edit functionality start//
$(document).on('click', '.edit_physio_notes', function (event) {
    //event.preventDefault();
//alert("kadarlo");
const physio_notes_id = $(this).data("physio_notes_id"); 
 //alert(physio_notes_id);

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
        //var docid=res[0].doctor;
        //var docid='000'+res[0].doctor;
        //$('#lab_id').val(res[0].io_lab_id)

        //showDrugName(res[0].category_id);
        //$(".editcat option[value=" + res[0].category_id + "]").attr('selected', 'selected');
        //$("textarea[name='findings']").val(res[0].findings);
        $(".eval_no option[value=" + res[0].eval_no + "]").attr('selected', 'selected');
        $("input[name='physio_notes_id']").val(physio_notes_id);
        $("input[name='dDate']").val(res[0].session_date);
        $("input[name='dTime']").val(res[0].session_time);
        $("textarea[name='notes']").val(res[0].notes);


        //$("input[name='editio_lab_id']").val(res[0].io_lab_id);

         //$("#editdoctor option[value='" + docid + "']").attr('selected', 'selected');
         //$(".particularitem option[value=" + res[0].laboratory_id + "]").attr('selected', 'selected');
        
    }
  }

xmlhttp6.open("GET","<?php echo base_url();?>app/physio/view_physio_notes/"+physio_notes_id,true);
xmlhttp6.send();
});
            });

 function show_treatment_line_data(eval_no)
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
        var result = JSON.parse(xmlhttp.responseText);
    
        $("textarea[name='notes']").val(result[0].week_treatment_line); 

    }
  }
  

xmlhttp.open("GET","<?php echo base_url();?>app/physio/get_treatment_line_data/"+eval_no,true);
xmlhttp.send();

}

        </script>
        
    
    </body>
</html>