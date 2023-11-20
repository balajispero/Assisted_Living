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
                .loader {
                  border: 16px solid #f3f3f3; /* Light grey */
                  border-top: 16px solid #3498db; /* Blue */
                  border-radius: 50%;
                  width: 120px;
                  height: 120px;
                  animation: spin 2s linear infinite;
                  position: fixed;
                  top: 50%;
                  left: 62%;
                }
                @keyframes spin {
                  0% { transform: rotate(0deg); }
                  100% { transform: rotate(360deg); }
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
                   <h1>IPD Member Information</h1>
                   <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">EMR sheet</a></li>
                        <li><a href="<?php echo base_url()?>app/emr/opd">In-Member</a></li>
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
                 
                <?php   
                // $this->data['patient_no'] = $id;
                // $patientInfo = $this->patient_model->getPatientInfo($id);
                //   echo $patientInfo; ?>
                 <!-- <form method="post" action="<?php echo base_url();?>app/opd/save_opd" onSubmit="return confirm('Are you sure you want to save?');"> -->
                    <form action="<?php echo base_url()?>app/physio/mail_view/<?php echo $getOPDPatient->IO_ID?>/<?php echo $getOPDPatient->patient_no?>/<?php echo $ptnEvalInfo->eval_no; ?>" method="post">
                <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>">
                 
                  <input type="hidden" name="mail_to" value="<?php echo @$patientInfo->rel_email1; ?>">
                  <input type="hidden" name="rel_email2" value="<?php echo @$patientInfo->rel_email2; ?>">
                  <input type="hidden" name="rel_name" value="<?php echo @$patientInfo->rel_name1; ?>">
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
                                  <li class="active"><a href="<?php echo base_url()?>app/physio/view/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Physio Evaluation</a></li>
                                 <li><a href="<?php echo base_url()?>app/physio/treatment_protocol/<?php echo $getOPDPatient->IO_ID;?>/<?php echo $getOPDPatient->patient_no;?>">Treatment Protocol</a></li>
                                   
                                    
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-md-9"> 
                                <div class="nav-tabs-custom">
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Mail Information</a></li>
                                        
                                  </ul>
                                    <div class="tab-content">
                                      <div class="tab-pane active" id="tab_1">
                                            <div class="loader" style="display:none;"></div>
                                
                                            <div class="box-body table-responsive no-padding">
                                <?php echo $message;?>
                                                                
                            </div>


                                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="table content"> 
  <!-- <tr>
    <td align="center" bgcolor="#0F0F0F" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold; ">
      <div  style="padding: 10px; height: 120px;width: 120px;border-radius: 50%;background: #fff; display: table-cell !important;vertical-align: middle !important;text-align: center !important;">
        <center>
           <img src="<?php echo base_url(); ?>/uploads/logo.png" alt="Logo" style="display:block; max-height: 100px; max-width: 100px;"/> 
        </center>
      </div>
      <div style="margin-top: 15px">
        <span style="margin: 8px">ALF</span>
      </div>
    </td> 
  </tr>  -->

  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 1px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #FFFFFF;">
       <p>To &nbsp;<?php  
       echo @$patientInfo->rel_email1; ?> </p>

    </td>
  </tr> 
  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
       <p>Cc &nbsp;<?php  
        echo "kaushikpanditrao@ahpl.in" .", ". @$patientInfo->rel_email2; 
        ?> 
    </p>

    </td>

  </tr>
  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">

    <p>Respected <?php echo @$patientInfo->rel_name1; ?>,</p>

    <p>Greetings from Team Spero at Aastha!</p>

    <p>Thank you for choosing Aastha for the stay of <?php echo @$patientInfo->middlename; ?>.  We ensure you the best care for <?php echo ($patientInfo->gender==1) ? 'him' : 'her'; ?>. We would like to update you that we conduct physiotherapy evaluation of our each member after admission. It aims at assessing their physical wellbeing and designing a tailored physiotherapy plan. Our expert physiotherapist has conducted the evaluation for <?php echo @$patientInfo->middlename; ?> on <?php echo date("Y-m-d", strtotime($ptnEvalInfo->added_date));?>.</p>
    <p>As per evaluation, <?php echo @$patientInfo->middlename; ?> has been recommended for regular physiotherapy with a treatment goal of <?php echo @$ptnEvalInfo->treatment_goal;?>.</p>
    <p>We have a team of physiotherapists at Aastha and upon receiving approval from your end, the physiotherapy can be started for <?php echo ($patientInfo->gender==1) ? 'him' : 'her'; ?>.</p>

    <p>The charges per physiotherapy session will be Rs. 450/-</p>
    <p>We will raise a bill for all sessions at the end of the month if approved from your end.</p>
    <p>Kindly provide us your directives for the same.</p><br>

    <p>Please go on link for confirmation.<br><a href="<?php echo base_url(); ?>app/relative_agree/conform/<?php echo $ptnEvalInfo->eval_no; ?>">click here</a></p>

    </td>

  </tr>
  
  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
       <p>Regards,</p>

    <p>Dr. Avinash Mitkari<br>Facility Coordinator <br>Aastha</p>
  
    </td>
  </tr>
  <tr>
    <td align="center" bgcolor="#eee" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
      <center><?php if($getOPDPatient->nStatus == "Pending"){?>
                                                              <button class="disable_btn btn btn-primary bg_color" name="submit" type="submit" value="sent_mail">Send Mail</button>
                                                         <?php } ?><br/></center>
      </td>
    </tr>

  </table>
                                        </div>
                                </div>
                            <div class="box-footer clearfix">
                                  
                            </div>
                        </div>
                    </div>
                 </div>
                 </form>
                 
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
        <script>
            $('.disable_btn').on( "click", function() {
                setInterval(function(){
                $('.disable_btn').attr('disabled', true); 
                },1000)
                $('.loader').show();
            });
        </script>
        
        
    </body>
</html>