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
        <?php require_once(APPPATH.'views/include/responsive_design.php');?>
        <style>
         textarea.form-control{
         height: 34px !important;
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
                    <?php if($this->session->userdata('emr_viewing') == "ipd_emr_viewing"){?>   
                   <h1>Physio Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">EMR sheet</a></li>
                        <li><a href="<?php echo base_url()?>app/emr/opd">In-Member</a></li>
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
                 
                <?php   
                 ?>
                
                    <!-- <form action="<?php echo base_url()?>app/physio/update_patient_type/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" method="post"> -->
                <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">

                <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                 
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
                                            <td><?php echo  $patientInfo->patient_no?></td>
                                        </tr>
                                        <tr>
                                            <td><u>Member Name</u></td>
                                            <td><?php echo @$patientInfo->middlename?></td>
                                        </tr>
                            
                                        </table>
                                    </td>
                                </tr>
                                </table>
                            </div>
                            <div class="box-footer clearfix">
                                <div style="margin-top: 15px;">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li><a href="<?php echo base_url()?>app/physio/view/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Physio Evaluation</a></li>
                                 <li><a href="<?php echo base_url()?>app/physio/treatment_protocol/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Treatment Protocol</a></li>
                                
                                 <li><a href="<?php echo base_url()?>app/physio/physio_daily_notes/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>"> Daily Notes</a></li> 
                                    <li  class="active"><a href="<?php echo base_url()?>app/physio/physio_discharge_summary_list/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Discharge Summary</a></li>
                                    <!-- <li  class=""><a href="<?php echo base_url()?>app/physio/physio_deceased_patient_information/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Deceased Patient Information</a></li> -->

                                    
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab">Discharge Summary</a></li>
                                        <!-- <li class="active"><a href="#tab_2" data-toggle="tab">Deceased Patient Information</a></li> -->

                                        
                                    </ul>
                                    
                        <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <?php echo $message;?>
                                            <?php if($this->session->userdata('user_role') == 11) {?>
                                            <?php  if($getOPDPatient->nStatus == "Pending"){?>
                                            <a href="<?php echo base_url();?>app/physio/physio_discharge_summary/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>" class="btn btn-sm btn-primary bg_color"><i class="fa fa-plus"></i>Add Discharge Summary</a>
                                            <?php } ?>
                                            <?php } ?>
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
                                            <th>Evaluation No.</th>
                                            <th>Member No.</th>
                                            <th>Name</th>
                                            <!-- <th>Date</th> -->
                                                    <!-- <th>Treatment Duration</th> -->
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Added by</th>
                                                    <?php if($this->session->userdata('user_role') == 11 || $this->session->userdata('physio_expert') == "Yes" || $this->session->userdata('physio_expert') == "No"){ ?>
                                                    <th>Action</th>
                                                <?php } ?>
                                                    
                                           </tr>
                                           </thead>
                                           <tbody>
                                           <?php
                                           //$eval_list_arr=$eval_no_list; 
                                           foreach($physioDischargeList as $key => $rows){?>
                                            <tr>
                                            <td>
                                                <a href="<?php echo base_url();?>app/physio/view_evaluation/<?php echo $rows->eval_no;?>"><?php echo $rows->eval_no?></a>
                                        </td>
                                                <td><?php echo $rows->patient_no?></td>
                                                <td><?php echo $rows->ptn_name?></td>
                                                <td><?php echo $rows->start_date?></td>
                                                <td><?php echo $rows->end_date?></td>
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
                                                    <a href="<?php echo base_url();?>app/physio/evaluation_pdf/<?php echo $rows->eval_no;?>">PDF | </a>
                                                        <a href="<?php echo base_url();?>app/physio/edit_treatment_protocol/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>/<?php echo $rows->eval_no;?>/<?php echo $rows->treat_protocol_id;?>">Edit</a>
                                                </td>
                                            <?php } ?>

                                           </tr> 
                                           <?php }?> 
                                           </tbody>
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
                 <!-- </form> -->
                 
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
        
        
    </body>
</html>