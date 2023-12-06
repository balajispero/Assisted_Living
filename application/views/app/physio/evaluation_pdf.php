<!DOCTYPE html>
<html>
<head>
    <head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
        <style>
            /*Start toggle button css*/
                .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2196F3;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

     
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
    /*End toggle button css*/
         
        </style>
    </head>
    
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->

                
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                

                <section class="content">
                    <?php echo $message;?>
                    <!-- <form action="<?php echo base_url()?>app/physio/evaluation_update" method="post" enctype="multipart/form-data"> -->
                     
                        <input type="hidden" name="id" value="<?php echo $ptnEvalInfo->id;?>">
        
                        <input type="hidden" name="opd_no" value="<?php echo $ptnEvalInfo->iop_no?>">
                        <input type="hidden" name="patient_no" value="<?php echo $ptnEvalInfo->patient_no?>"> 

                        <div class="row text-center">
                          <div class="col-md-12 ">
                            <h2>Evaluation</h2>
                           </div>
                        </div>
                        

          <div class="row" style="margin-top: 30px;">
            <div class="col-md-12 mt-5">
                <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                <b style="margin-left: 50px;">Evaluation No. :</b> :<?php echo $ptnEvalInfo->eval_no; ?> 
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Name : </b>  <?php echo $ptnEvalInfo->ptn_name; ?>
                </td>
                </tr>
                <br>
                <tr>
                <td width="50%" >
                <b style="margin-left: 50px;">Age : </b><?php echo $ptnEvalInfo->ptn_age; ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Medical Diagnosis : </b><?php echo $ptnEvalInfo->ptn_diagnosis; ?>
                </td>
                </tr><br>
                <tr>
                <td width="50%">         
                <b style="margin-left: 50px;">Present Complaints : </b><?php echo $ptnEvalInfo->ptn_complain; ?>
                </td>
                </tr>
            </table>
          </div>
        </div>



        <div class="row">
         <h4 style="margin-left: 62px; margin-top:30px;"><u>Assessments</u></h4><br>
         <table width="100%" cellpadding="5">
         <tr>
                <td width="50%">         
                <b style="margin-left:63px;">Intensity : </b><?php echo $ptnEvalInfo->ptn_pain_intensity; ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 53px;">Nature </b><?php echo $ptnEvalInfo->nature; ?>
                </td>
            </tr><br>
            <tr>
                <td width="50%">         
                <b style="margin-left:63px;">Mobility : </b><?php echo $ptnEvalInfo->mobility; ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 53px;">Remark : </b><?php echo $ptnEvalInfo->mobility_remark; ?>
                </td>
            </tr><br>
            <tr>
                <td width="50%">         
                <b style="margin-left:63px;">Tightness : </b><?php echo $ptnEvalInfo->ptn_tightness;?>
                </td>
                <td width="50%">         
                <b style="margin-left: 53px;">Muscle Strength : </b><?php echo $ptnEvalInfo->muscle_strength; ?>
                </td>
             </tr><br>
            <tr>
                <td width="50%">         
                <b style="margin-left:63px;">Remark : </b><?php echo $ptnEvalInfo->muscle_strength_remark;?>
                </td>
                <td width="50%">         
                <b style="margin-left: 53px;">Muscle Tone</b><?php echo $ptnEvalInfo->muscle_tone; ?>
                </td>
             </tr><br>
             <tr>
                <td width="50%">         
                <b style="margin-left:63px;">Special Tests : </b><?php echo $ptnEvalInfo->ortho_special_test;?>
                </td>
                <td width="50%">         
                <b style="margin-left: 53px;">Breathlessness</b><?php echo $ptnEvalInfo->breathlessness; ?>
                </td>
             </tr><br>
             <tr>
                <td width="50%">         
                <b style="margin-left:63px;">Fatigue : </b><?php echo $ptnEvalInfo->fatigue;?>
                </td>
             </tr>
         </table>
        </div>

        
        <div class="row">
          <h4 style="margin-left: 61px; margin-top:30px;"><u>Bed Mobility</u></h4><br>
          
          <div class="container">
                     <table class="table table-striped">
                            <tr>
                              <th>FIM score / Activity</th><th>Date of eval</th><th>Rolling</th><th>Supine to sit</th><th>Sit to stand</th>
                          </tr>
                          <tr>
                              <td>Total Assistance 1</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                                

                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist1_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                
                         <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist1_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist1_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                          <td>Maximal Assistance 2</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist2_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist2_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist2_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                          <td>Moderate Assistance 3</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist3_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist3_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist3_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                          <td>Minimal Assistance 4</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist4_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist4_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist4_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                          <td>Contact  Guarding 5 A</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist5a_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              
                                
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist5a_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist5a_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                          <td>Supervision or setup 5 B</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist5b_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist5b_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist5b_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                          <td>Modified Independence 6</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist6_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist6_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist6_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                          <td>Complete Independence 7</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist7_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist7_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                              <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist7_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          </table>
                        </div>
                      </div>
                         <br>



                         <div class="container">
                          <div class="row">
                          <h4 style="margin-left: 62px; margin-top:30px;"><u>B. Transfers</u></h4>
                          <h5 style="margin-left: 62px;">Transfer to wheelchair</h5><br>
                       
                          <table class="table table-striped">
                            <tr>
                            <th>FIM Levels</th><th>Date of eval</th><th>wheelchair/comode Chair</th><th>Car transfer</th>
                              
                          </tr>
                          <tr>
                              <td>Total Assistance 1</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                                

                              <label class="switch">
                                  <input type="checkbox" name="transfer_assist1_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist1_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                
                              <label class="switch">
                                  <input type="checkbox" name="transfer_assist1_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist1_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                                
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><td><?php /*echo $ptnEvalInfo->mobility_assist2_evaldate;*/ ?>date</td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist2_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist2_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist2_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist2_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist2_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist2_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist2_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist2_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist2_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist2_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist2_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist2_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><td><?php /*echo $ptnEvalInfo->mobility_assist3_evaldate;*/ ?>date</td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist3_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist3_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist3_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist3_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist3_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist3_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                               <!--  <input type="radio" class="" name="transfer_assist3_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist3_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist3_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist3_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist3_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist3_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><td><?php /*echo $ptnEvalInfo->mobility_assist4_evaldate;*/ ?>date</td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist4_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist4_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist4_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist4_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist4_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist4_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist4_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist4_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist4_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist4_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist4_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist4_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 B</td><td><?php /*echo $ptnEvalInfo->mobility_assist5_evaldate;*/ ?>date</td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist5b_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist5b_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist5b_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist5b_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist5b_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist5b_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist5b_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist5b_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist5b_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist5b_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist5b_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist5b_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 A</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist5a_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist5a_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist5a_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist5a_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox"name="transfer_assist5a_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist5a_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist5a_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist5a_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist5a_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist5a_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist5a_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist5a_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist6_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist6_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist6_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist6_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist6_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist6_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist6_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist6_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist6_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist6_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist6_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist6_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                            <tr>
                              <td>Complete Independence 7</td><td><?php /*echo $ptnEvalInfo->mobility_assist1_evaldate;*/ ?>date</td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist7_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist7_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist7_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist7_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox"name="transfer_assist7_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist7_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist7_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist7_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist7_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist7_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist7_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist7_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                             </tr>
                          </table>
                        </div>
                       </div>


                       <div class="row">
                       <h4 style="margin-left: 62px; margin-top:30px;"><u>Balance Assessment</u></h4>
                       <h5 style="margin-left: 62px;">Berg Balance Scale</h5><br>
                       <table class="table table-striped">
                            <tr>
                              <th>Balance Item</th><th>Score (0-4)</th>
                          </tr>
                          <tr>
                              <td>Sitting unsupported</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_sit_unsupport; ?></td>
                           </tr>
                           <tr>
                              <td>sitting to standing</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_sit_tostand ?></td>
                           </tr>
                           <tr>
                              <td>standing to sitting</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_stand_tosit; ?></td>
                           </tr>
                           <tr>
                              <td>Transfers</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_transfer; ?></td>
                           </tr>
                           <tr>
                              <td>Standing with eyes close</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_stand_witheye; ?></td>
                           </tr>
                           <tr>
                              <td>Standing with feet together</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_stand_withfeet; ?></td>
                           </tr>
                           <tr>
                              <td>Tandem standing</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_tendem_stand ?></td>
                           </tr>
                           <tr>
                              <td>Standing on one leg</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_stand_oneleg; ?></td>
                           </tr>
                           <tr>
                              <td>Turning trunk (feet fixed)</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_turning_trunk; ?></td>
                           </tr>
                           <tr>
                              <td>Retrieving objects from floor</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_object_fromfloor; ?></td>
                           </tr>
                           <tr>
                              <td>Turning 360 degrees</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_turning_360_deg; ?></td>
                           </tr>
                           <tr>
                              <td>Stool stepping</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_stool; ?></td>
                           </tr>
                           <tr>
                              <td>Reaching forward while standing</td>
                              <td><?php echo $ptnEvalInfo->berg_bal_reaching_forward; ?></td>
                           </tr>
                           <tr>
                              <td>Total Score</td>
                              <td><?php echo$ptnEvalInfo->berg_bal_total_score; ?></td>
                           </tr>
                          
                          </table>


                       </div>


                         


                  
               

                <div class="row">
                  <div class="col-sm-4">Recommendation for physiotherapy</div>
                  <div class="col-sm-4">
                    <input type="radio" class="form-control" name="ptn_rec" value="Yes" checked>Yes &nbsp;
                    <input type="radio" name="ptn_rec" class="form-control" value="No">No</div>
                </div><br>

                <div class="row" id="treatment_section" style="display: <?php echo ($ptnEvalInfo->expert_recommendation=="No") ? "none" : "block";?>">
                <div class="row">
                <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Gait speed</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="gait_speed" value="<?php echo $ptnEvalInfo->gait_speed;?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Treatment Goals </label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="RECOMMENDATION" value="">  -->
                                    <select name="treatment_goal" class="form-control input-sm">
                                      <option value="">- Select Treatment Goals -</option>
                                      
                                      <option value="Pain Relief" <?php if($ptnEvalInfo->treatment_goal=="Pain Relief"){ echo "selected"; } ?>>Pain Relief</option>
                                      
                                      <option value="Independent Mobility" <?php if($ptnEvalInfo->treatment_goal=="Independent Mobility"){ echo "selected"; } ?>>Independent Mobility</option>
                                      
                                      <option value="Muscle Strengthen" <?php if($ptnEvalInfo->treatment_goal=="Muscle Strengthen"){ echo "selected"; } ?>>Muscle Strengthen</option>
                                      
                                      <option value="Ambulation" <?php if($ptnEvalInfo->treatment_goal=="Ambulation"){ echo "selected"; } ?>>Ambulation</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Remark</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="treatment_goal_remark" value="<?php echo $ptnEvalInfo->treatment_goal_remark;?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Therapy Time</label><span class="text-danger"></span></br>
                                   
                                    <select name="therapy_time" class="form-control input-sm">
                                      <option value="">-Select Therapy Time -</option>
                                      
                                      <option value="20" <?php if($ptnEvalInfo->therapy_time=="20"){ echo "selected"; } ?>>20 min</option>
                                      
                                      <option value="30" <?php if($ptnEvalInfo->therapy_time=="30"){ echo "selected"; } ?>>30 </option>
                                      
                                      <option value="45" <?php if($ptnEvalInfo->therapy_time=="45"){ echo "selected"; } ?>>45</option>
                                      
                                      <option value="60" <?php if($ptnEvalInfo->therapy_time=="60"){ echo "selected"; } ?>>60</option>
                                      
                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Expected sessions </label><span class="text-danger"></span></br>
                                   
                                    <select name="exp_session" class="form-control input-sm">
                                      <option value="">-Select Expected sessions-</option>
                                      
                                      <option value="Daily Once" <?php if($ptnEvalInfo->exp_session=="Daily Once"){ echo "selected"; } ?>>Daily Once</option>
                                      
                                      <option value="Daily Twice" <?php if($ptnEvalInfo->exp_session=="Daily Twice"){ echo "selected"; } ?>>Daily Twice</option>
                                      
                                      <option value="Thrice Daily" <?php if($ptnEvalInfo->exp_session=="Thrice Daily"){ echo "selected"; } ?>>Thrice Daily</option>
                                      
                                      <option value="Twice a Week" <?php if($ptnEvalInfo->exp_session=="Twice a Week"){ echo "selected"; } ?>>Twice a Week</option>
                                      
                                      <option value="Thrice a Week" <?php if($ptnEvalInfo->exp_session=="Thrice a Week"){ echo "selected"; } ?>>Thrice a Week</option>
                                      
                                      <option value="Once a Week" <?php if($ptnEvalInfo->exp_session=="Once a Week"){ echo "selected"; } ?>>Once a Week</option>
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Next Evaluation Date</label><span class="text-danger"></span></br>
                                    <input type="date" class="form-control" name="next_eval_date" value="<?php echo $ptnEvalInfo->next_eval_date; ?>">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->
                        </div><!--/treatment section div-->

               
           <!--  </form> -->

        </section>


    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<!-- <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script> -->

<!-------------------------jquery cdn for work radio button------------------------>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
        <!-------------------------jquery cdn for work radio button------------------------>

</body>
</html>