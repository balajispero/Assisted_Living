<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>mail view</title>
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" href="../email-templates/img/favicon.ico" type="image/x-icon">
  <style type="text/css">
  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
    body[yahoo] .buttonwrapper { background-color: transparent !important; }
    body[yahoo] .button { padding: 0 !important; }
    body[yahoo] .button a { background-color: #9b59b6; padding: 15px 25px !important; }
  }
  @media only screen and (min-device-width: 601px) {
    .content { width: 600px !important; }
    .col387 { width: 387px !important; }
  }
</style>
</head>
<body bgcolor="#dddddd" style="margin: 0; padding: 0;" yahoo="fix">
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
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">

    <p>Respected <?php echo @$patientInfo->rel_name1; ?>,</p>

    <p>Greetings from Team Spero at Aastha!</p>

    <p>Thank you for choosing Aastha for the stay of <?php echo @$patientInfo->middlename; ?>.  We ensure you the best care for <?php echo ($patientInfo->gender==1) ? 'him' : 'her'; ?>. We would like to update you that we conduct physiotherapy evaluation of our each member after admission. It aims at assessing their physical wellbeing and designing a tailored physiotherapy plan. Our expert physiotherapist has conducted the evaluation for <?php echo @$patientInfo->middlename; ?> on <?php echo date("Y-m-d", strtotime($ptnEvalInfo->added_date));?>.</p>
    <p>As per evaluation, <?php echo @$patientInfo->middlename; ?> has been recommended for regular physiotherapy with a treatment goal of <?php echo @$ptnEvalInfo->treatment_goal;?>.</p>
    <p>We have a team of physiotherapists at Aastha and upon receiving approval from your end, the physiotherapy can be started for <?php echo ($patientInfo->gender==1) ? 'him' : 'her'; ?>.</p>

    <p>The charges per physiotherapy session will be Rs. 450/-</p>
    <p>We will raise a bill for all sessions at the end of the month if approved from your end.</p>
    <p>Kindly provide us your directives for the same.</p><br>

    <p>Please go on link for confirmation.<br><a href="<?php echo base_url(); ?>app/relative_agree/conform/<?php echo $ptnEvalInfo->eval_no; ?>/<?php echo md5($ptnEvalInfo->eval_no); ?>">click here</a></p>

    </td>

  </tr>
  
  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
       <p>Regards,</p>

    <p>Dr. Avinash Mitkari<br>Facility Coordinator <br>Aastha</p>
  
    </td>
  </tr>

  <!-- <tr>
    <td align="center" bgcolor="#eee" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
      <center><b>ALF</b><br/></center>
      </td>
    </tr> -->
  </table>

</body>
</html>