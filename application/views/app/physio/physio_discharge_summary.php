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
        input.form-control {
        width: 100% !important;
        }
        select.form-control {
            width: 100% !important;
        }
        </style>
        <?php require_once(APPPATH.'views/include/responsive_design.php');?>
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
                
                    <form action="<?php echo base_url()?>app/physio/physio_dis_summ_add/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>" method="post">
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
                                            <td><?php echo  @$patientInfo->patient_no?></td>
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
                                    <li class="active"><a href="<?php echo base_url()?>app/physio/physio_discharge_summary_list/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Discharge Summary</a></li> 
                                    
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab">Discharge Summary</a></li>
                                         </ul>
                         <div class="row" style="margin-top:30px; margin-left:5px; margin-right:5px;">
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Evaluation No.</label><span class="text-danger">*</span>
                                    <!-- <input type="text" class="form-control" name="eval_no" value="">  -->
                                    
                                    <select name="eval_no" class="form-control input-sm" required>
                                                                <option value="">-Select Evaluation No-</option>
                                                                <?php 
                                                                foreach($eval_no_list as $eval_no_list){
                                                                ?>
                                                                <option value="<?php echo $eval_no_list->eval_no;?>"><?php echo $eval_no_list->eval_no;?></option>
                                                                <?php }?>
                                                                            </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <!-- <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Iop_id</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="iop_id"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>/.form-group wrapper-class
                            </div>/.col-md-3 -->
                            <!-- <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Patient No.</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="patient_no"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>/.form-group wrapper-class
                            </div>/.col-md-3 -->

                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Diagnosis</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="Diagnosis">
                                    <!-- <textarea name="goals_achived" class="form-control"></textarea> -->
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <!-- <div class="col-sm-4"> -->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>FIM Score Evaluation Date</label><span class="text-danger"></span></br>
                                    <input type="date" class="form-control" name="fim_score_eval_date">
                                    <!-- <textarea name="goals_achived" class="form-control"></textarea> -->
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Start Date</label><span class="text-danger"></span></br>
                                    <input type="date" class="form-control" name="start_date">
                                    <!-- <textarea name="goals_achived" class="form-control"></textarea> -->
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>End Date</label><span class="text-danger"></span></br>
                                    <input type="date" class="form-control" name="end_date">
                                    <!-- <textarea name="goals_achived" class="form-control"></textarea> -->
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Goal Achieved</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <textarea name="goal_achieved" class="form-control" style="width:100% !important"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Further Recommendations</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <textarea name="further_recommendation" class="form-control" style="width:100% !important"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                <label>Status</label><span class="text-danger"></span></br>
                                <select name="therapy_status" class="form-control" >
                                 <option value="">- Status -</option>
                                 <option value="Completed" name="Completed" class="select">Completed</option>
                                 <option value="Deceased" name="Deceased" class="select">Deceased</option>
                                 </select>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                          
                        </div>
                        <br>
                        
                        <!-- <div class="container"> -->
                            <div class="row" id="deceased_section" style=" margin-left:5px; margin-right:5px; display:none;">
                                    <div class="col-sm-4">
                                        <div class="form-group wrapper-class" >
                                            <label>Date of Admission</label><span class="text-danger"></span></br>
                                            
                                            <input type="date" class="form-control" name="date_of_admission" style=" width: 100% !important;">
                                            <span class="text-danger error-text type_category_err"></span>                           
                                        </div><!-- /.form-group wrapper-class -->
                                    </div><!-- /.col-md-4-->
                                    <div class="col-sm-4">
                                        <div class="form-group wrapper-class" >
                                            <label>Date of Death</label><span class="text-danger"></span></br>
                                            <input type="date" class="form-control" name="date_of_death">
                                            <span class="text-danger error-text type_category_err"></span>                           
                                        </div><!-- /.form-group wrapper-class -->
                                    </div><!-- /.col-md-4-->
                                    <div class="col-sm-4">
                                        <div class="form-group wrapper-class" >
                                            <label>Time of Death</label><span class="text-danger"></span></br>
                                            <input type="text" class="form-control" name="time_of_death">
                                            <span class="text-danger error-text type_category_err"></span>                           
                                        </div><!-- /.form-group wrapper-class -->
                                    </div><!-- /.col-md-4-->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Causes of Date</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="causes_of_death">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-4-->
                            <div class="col-sm-4">
                                <div class="form-group wrapper-class" >
                                    <label>Contact No.</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="contact_no">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-4-->
                        </div>

                        <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary bg_color btn-sm" name="btnSave" value="Submit" style="margin-left: 5px;">Submit</button>
                        </div>
                            
                                                        
                            <br><br>

                        </div>
                    </form>
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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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

       $(document).ready(function(){
       // Function to handle the change event of the select element
       $("select[name='therapy_status']").change(function() {
        var selectedValue = $(this).val();
        
        // Check if the selected option is 'Deceased'
        if(selectedValue === 'Deceased') {
            // Show the deceased section
            $('#deceased_section').show();
        } else {
            // Hide the deceased section
            $('#deceased_section').hide();
        }
    });
});
       
</script>



        
        <!-- END BDAY -->
        
        
    </body>
</html>