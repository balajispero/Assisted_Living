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

    <p>Respected Sir/Madam<?php /*echo $patientInfo->rel_name1;*/ ?>,</p>

    <p>Greetings from Team Spero at Aastha!</p>

    <p>Hope you are doing well. This is the health update about <?php echo $ptn_title->cValue; ?> <?php echo $patientInfo->middlename; ?>.</p>

    <p><?php echo $ptn_gen; ?> today’s vitals are as below…</p>
      <table class="table" border="1">
        <tr>
            <th>Blood pressure</th>
            <th>Spo2</th>
            <th>Pulse</th>
            <th>Temperature</th>
           <!--  <th>Weight</th>
            <th>BSL</th> -->
        </tr>
        <?php foreach($getvitalsign as $rows){?>
        <tr>
            <td><?php echo !empty($rows->bp) ? $rows->bp : 'NA'; ?></td>
            <td><?php echo !empty($rows->spo2) ? $rows->spo2 : 'NA'; ?></td>
            <td><?php echo !empty($rows->pulse_rate) ? $rows->pulse_rate : 'NA'; ?></td>
            <td><?php echo !empty($rows->temperature) ? $rows->temperature : 'NA'; ?></td>
            <!-- <td><?php echo !empty($rows->weight) ? $rows->weight : 'NA'; ?></td>
            <td><?php echo !empty($rows->bsl) ? $rows->bsl : 'NA'; ?></td> -->
        </tr>
        <?php }?>
        
    </table>

    <p>Currently, <?php if($ptn_gender->cValue=="Male"){ echo "he"; }else{ echo "she"; } ?> is taking the following medications:</p>
          <ul>
            <?php foreach($patient_Medication as $rows){?>
                <li><?php echo $rows->medicine_name; ?></li>
            <?php }?>
          </ul>
    <p></p>
    <p><?php echo $doctor_comments; ?></p><br>

    <p>For any further information, feel free to revert.</p>

    </td>

  </tr>
  
  <tr>
    <td bgcolor="#ffffff" style="padding:5px 20px 20px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
       <p>Warm regards,</p>

    <p>Dr. <?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($this->session->userdata('user_id'));
                                                
                                                echo $pages->cPreparedBy?></p>
    <p>Medical Consultant</p>
    </td>
  </tr>

  <tr>
    <td align="center" bgcolor="#eee" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
      <center><b>ALF</b><br/></center>
      </td>
    </tr>
  </table>

</body>
</html>