<!DOCTYPE html>
<html>
<head>
    <head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo base_url();?>public/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
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
                    <h1>Dashboard</h1>
                    <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>-->
                </section>

                <section class="content">
                    <?php echo $message;?>
                    <form action="<?php echo base_url()?>app/physio/evaluation_save" method="post" enctype="multipart/form-data">
                      <?php
                          $userID = $lastPreassesID->cValue;
                          $userID2 = $lastPreassesID->cValue;
                          if(strlen($userID) == 1){
                            $userID = "EVAL0000".$userID;
                          }else if(strlen($userID) == 2){
                            $userID = "EVAL000".$userID;
                          }else if(strlen($userID) == 3){
                            $userID = "EVAL00".$userID;
                          }else if(strlen($userID) == 4){
                            $userID = "EVAL0".$userID;
                          }else if(strlen($userID) == 5){
                            $userID = $userID;
                        }
                        ?>
                        <input type="hidden" name="userID2" value="<?php echo $userID2;?>">
                        
                         <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                        <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>"> 
                        
                    <input type="hidden" name="mail_to" value="<?php echo @$patientInfo->rel_email1; ?>">
                    <input type="hidden" name="rel_email2" value="<?php echo @$patientInfo->rel_email2; ?>">
                    <input type="hidden" name="rel_name" value="<?php echo @$patientInfo->rel_name1; ?>">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Evaluation No.</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="eval_no" value="<?php echo $userID;?>" readonly> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Name</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name" value="<?php echo @$patientInfo->middlename; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Age</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age" value="<?php echo @$patientInfo->age; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Medical Diagnosis</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <textarea name="ptn_diagnosis" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Present Complaints</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <textarea name="ptn_complain" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->
                        <label><h3>Assessments</h3></label>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Tightness</label><span class="text-danger"></span></br>
                                    <select name="ptn_tightness" class="form-control">
                                      <option value="">- Select Tightness -</option>
                                      
                                      <option value="Restricted ROM">Restricted ROM</option>
                                      
                                      <option value="Hyperlaxed ROM">Hyperlaxed ROM</option>
                                      
                                      <option value="Hip flexors">Hip Flexors</option>
                                      
                                      <option value="Calf">Calf</option>
                                      
                                    </select>
                                    
                                    
                                    <span class="text-danger error-text type_category_err"></span>                           
                                  </div><!-- /.form-group wrapper-class -->
                                </div><!-- /.col-md-3 -->
                                
                                <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label></label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_tightness_remark"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Upper body</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="ptn_upper_body">  -->
                                    <select name="ptn_upper_body" class="form-control input-sm">
                                      <option value="">- Select Upper Body -</option>
                                      
                                      <option value="Tightness">Tightness</option>
                                      
                                      <option value="Increased Tone">Increased Tone</option>
                                      
                                      <option value="Decreased Tone">Decreased Tone</option>
                                      
                                      <option value="Deformity">Deformity</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            
                                <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label></label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_upper_body_remark"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                        </div><!-- / row -->

                           <div class="row">
                            
                           <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Lower body</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <!-- <textarea name="lower_body" class="form-control"></textarea> -->
                                    <select name="lower_body" class="form-control input-sm">
                                      <option value="">-Select Lower body-</option>
                                      
                                      <option value="Tightness">Tightness</option>
                                      
                                      <option value="Increased tone">Increased Tone</option>
                                      
                                      <option value="Decreased tone">Decreased Tone</option>
                                      
                                      <option value="Deformity">Deformity</option>
                                      
                                      <!-- <option value="Widow">T5</option>
                                      
                                      <option value="Widower">T6</option> -->
                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Pain (Site, VAS, Nature)</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <!-- <textarea name="ptn_pain" class="form-control"></textarea> -->
                                    <select name="ptn_pain" class="form-control">
                                      <option value="">-Select Pain-</option>
                                      
                                      <option value="0">0</option>
                                      
                                      <option value="1">1</option>
                                      
                                      <option value="2">2</option>
                                      
                                      <option value="3">3</option>
                                      
                                      <option value="4">4</option>
                                      
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>


                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Nature</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <!-- <textarea name="ptn_pain" class="form-control"></textarea> -->
                                    <select name="ptn_pain" class="form-control">
                                      <option value="">-Select Nature-</option>
                                      
                                      <option value="Throbbing">Throbbing</option>
                                      
                                      <option value="Dull Pain">Dull Pain</option>
                                      
                                      <option value="Pricking">Pricking</option>
                                     
                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                           </div>

                        <div class="row">
                          <div class="col-sm-12">
                            <label><h3>Bed Mobility</h3></label>
                            <p>Rolling</p>
                        </div>
                    </div><br>
                    <div class="table-responsive">      
                        <table class="table table-striped">
                            <tr>
                              <th>FIM score / Activity</th><th>Date of eval</th><th>Rolling</th><th>Supine to sit</th><th>Sit to stand</th>
                          </tr>
                          <tr>
                              <td>Total Assistance 1</td><td><input type="date" name="mobility_assist1_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist1_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist1_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist1_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist1_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist1_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist1_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><td><input type="date" name="mobility_assist2_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist2_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist2_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist2_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist2_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist2_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist2_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><td><input type="date" name="mobility_assist3_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist3_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist3_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist3_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist3_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist3_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist3_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><td><input type="date" name="mobility_assist4_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist4_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist4_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist4_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist4_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist4_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist4_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 A</td><td><input type="date" name="mobility_assist5a_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist5a_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5a_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist5a_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5a_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist5a_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5a_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 B</td><td><input type="date" name="mobility_assist5b_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist5b_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5b_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist5b_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5b_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist5b_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5b_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><td><input type="date" name="mobility_assist6_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist6_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist6_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist6_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist6_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist6_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist6_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Complete Independence 7</td><td><input type="date" name="mobility_assist7_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_assist7_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist7_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist7_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist7_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_assist7_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist7_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Not Applicable</td><td><input type="date" name="mobility_notappl_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="mobility_notappl_rolling" value="Yes" <?php $a=5; echo ($a == 5) ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_notappl_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_notappl_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_notappl_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_notappl_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_notappl_stand" class="" value="No">No
                              </td>
                          </tr>    
                      </table>
                  </div>

                  <div class="row">
                          <div class="col-sm-12">
                            <label><h3>B. Transfers</h3></label>
                            <p>Transfer to wheelchair</p>
                        </div>
                    </div><br>
                    <div class="table-responsive">      
                        <table class="table table-striped">
                            <tr>
                              <th>FIM Levels</th><th>Date of eval</th><th>wheelchair/comode Chair</th><th>Car transfer</th>
                          </tr>
                          <tr>
                              <td>Total Assistance 1</td><td><input type="date" name="transfer_assist1_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist1_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist1_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist1_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist1_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><td><input type="date" name="transfer_assist2_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist2_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist2_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist2_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist2_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><td><input type="date" name="transfer_assist3_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist3_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist3_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist3_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist3_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><td><input type="date" name="transfer_assist4_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist4_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist4_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist4_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist4_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 B</td><td><input type="date" name="transfer_assist5b_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist5b_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5b_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist5b_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5b_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 A</td><td><input type="date" name="transfer_assist5a_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist5a_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5a_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist5a_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5a_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><td><input type="date" name="transfer_assist6_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist6_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist6_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist6_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist6_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Complete Independence 7</td><td><input type="date" name="transfer_assist7_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_assist7_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist7_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_assist7_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist7_car" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Not Applicable</td><td><input type="date" name="transfer_notappl_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_notappl_wheelchair" value="Yes" <?php $a=5; echo ($a == 5) ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_notappl_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_notappl_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_notappl_car" class="" value="No">No
                              </td>
                              
                          </tr>    
                      </table>
                  </div>


                <div class="row mt-5">
                  <div class="col-sm-4">Recommendation for physiotherapy</div>
                  <div class="col-sm-4">
                    <input type="radio" class="chkradio" name="expert_rec" value="Yes">Yes &nbsp;
                    <input type="radio" name="ptn_rec" class="chkradio" value="No">No</div>
                </div><br>
                
                <div class="row">
                          <div class="col-sm-12">
                            <label><h3>Balance Assessment</h3></label>
                        </div>
                    </div><br>
                <div class="row" id="treatment_section" style="display:none;">
                <div class="row">
                          
                            <!-- <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Therapy Time</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="therapy_time"> 
                                    <span class="text-danger error-text type_category_err"></span>           </div>
                            </div> --><!-- /.col-md-3 -->
                            <!-- <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>From Date</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="physio_service_from_date"> 
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>To Date</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="physio_service_to_date"> 
                                    <span class="text-danger error-text type_category_err"></span>          </div>
                            </div> --><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Gait speed</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="gait_speed" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                           
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Treatment Goals </label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="RECOMMENDATION" value="">  -->
                                    <select name="treatment_goal" class="form-control input-sm">
                                      <option value="">- Select Treatment Goals -</option>
                                      
                                      <option value="Pain Relief">Pain Relief</option>
                                      
                                      <option value="Independent Mobility">Independent Mobility</option>
                                      
                                      <option value="Muscle Strengthen">Muscle Strengthen</option>
                                      
                                      <option value="Ambulation">Ambulation</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Remark</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="treatment_goal_remark" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Therapy Time</label><span class="text-danger"></span></br>
                                   
                                    <select name="therapy_time" class="form-control input-sm">
                                      <option value="">-Select Therapy Time -</option>
                                      
                                      <option value="20">20 min</option>
                                      
                                      <option value="30">30 </option>
                                      
                                      <option value="45">45</option>
                                      
                                      <option value="60">60</option>
                                      
                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                        </div>
                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>EXPECTED sessions </label><span class="text-danger"></span></br>
                                   
                                    <select name="exp_session" class="form-control input-sm">
                                      <option value="">-Select EXPECTED sessions-</option>
                                      
                                      <option value="Daily Once">Daily Once</option>
                                      
                                      <option value="Daily Twice">Daily Twice</option>
                                      
                                      <option value="Thrice Daily">Thrice Daily</option>
                                      
                                      <option value="Twice a Week">Twice a Week</option>
                                      
                                      <option value="Thrice a Week">Thrice a Week</option>
                                      
                                      <option value="Once a Week">Once a Week</option>
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                        
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Next Evaluation Date</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->

                <input type="submit" class="btn btn-primary bg_color" name="btnSave" value="submit">
            </form>

        </section>


    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

 <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>   
<script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script> 
        <!-------------------------jquery cdn for work radio button------------------------>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
        <!-------------------------jquery cdn for work radio button------------------------>

    <script>
    
        /*****************Start recommendation yes**********************/
            $(".chkradio") // select the radio by its id
                .change(function(){ // bind a function to the change event
                    if( $(this).is(":checked") ){ // check if the radio is checked
                        //var val = $(this).val(); // retrieve the value
                        var val=$("input[name='ptn_rec']:checked").val();
                        if(val != '')
                          {
                            if(val == 'Yes'){
                                $('#treatment_section').show();
                            }
                            if(val == 'No'){
                              $('#treatment_section').hide(); 
                          } 
                        }
                            
                    }
                });

                /*var radioButtons = document.querySelectorAll('.chkradio');

                function handleRadioChange() {
                  if (this.checked) {
                    var val = this.value;

                    if (val != '') {
                      if (val == 'Yes') {
                        document.getElementById('treatment_section').style.display = 'block';
                      }
                      if (val == 'No') {
                        document.getElementById('treatment_section').style.display = 'none';
                      }
                    }
                  }
                }

                // Attach the event listener to each radio button
                radioButtons.forEach(function (radio) {
                  radio.addEventListener('change', handleRadioChange);
                });*/
        /*document.querySelectorAll('.chkradio').forEach(function(radio) {
    radio.addEventListener('change', function() {
      var val = this.value;
      var treatmentSection = document.getElementById('treatment_section');

      if (val != '') {
        treatmentSection.style.display = (val == 'Yes') ? 'block' : 'none';
      }
    });
  });*/
        /*****************End recommendation yes**********************/  
    </script>

</body>
</html>