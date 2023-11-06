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
                    <form action="<?php echo base_url()?>app/doctor/preassessment_save" method="post" enctype="multipart/form-data">
                      <?php
                          /*$userID = $lastPreassesID->cValue;
                          $userID2 = $lastPreassesID->cValue;
                          if(strlen($userID) == 1){
                            $userID = "PREASSES0000".$userID;
                          }else if(strlen($userID) == 2){
                            $userID = "PREASSES000".$userID;
                          }else if(strlen($userID) == 3){
                            $userID = "PREASSES00".$userID;
                          }else if(strlen($userID) == 4){
                            $userID = "PREASSES0".$userID;
                          }else if(strlen($userID) == 5){
                            $userID = $userID;
                        }*/
                        ?>
                        <input type="hidden" name="userID2" value="<?php /*echo $userID2;*/?>">
                        <label>CASE HISTORY</label>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Name</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Age</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Medical Diagnosis</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <textarea name="present_complaints" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Present Complaints</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <textarea name="past_history" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->
                        <label>Assessments</label>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Tightness</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Upper body</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Lower body</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <textarea name="present_complaints" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Pain (Site, VAS, Nature)</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <textarea name="past_history" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->

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
                                <input type="radio" class="" name="assist1_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist1_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist1_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist1_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist1_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist1_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><td><input type="date" name="mobility_assist2_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist2_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist1_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist2_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist1_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist2_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist1_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><td><input type="date" name="mobility_assist3_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist3_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist3_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist3_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist3_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist3_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist3_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><td><input type="date" name="mobility_assist4_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist4_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist4_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist4_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist4_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist4_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist4_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 A</td><td><input type="date" name="mobility_assist5a_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist5a_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist5_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist5a_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist5_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist5a_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist5a_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 B</td><td><input type="date" name="mobility_assist5b_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist5b_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist5b_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist5b_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist5b_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist5b_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist5b_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><td><input type="date" name="mobility_assist6_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist6_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist6_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist6_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist6_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist6_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist6_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Complete Independence 7</td><td><input type="date" name="mobility_assist7_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist7_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist7_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist7_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist7_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist7_stand" value="Yes">Yes &nbsp;<input type="radio" name="assist7_stand" class="" value="No">No
                              </td>
                          </tr>
                          <tr>
                              <td>Not Applicable</td><td><input type="date" name="mobility_notappl_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="notappl_rolling" value="Yes" <?php $a=5; echo ($a == 5) ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="notappl_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="notappl_supine" value="Yes">Yes &nbsp;<input type="radio" name="notappl_supine" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="notappl_stand" value="Yes">Yes &nbsp;<input type="radio" name="notappl_stand" class="" value="No">No
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
                                <input type="radio" class="" name="assist1_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist1_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist1_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist1_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><td><input type="date" name="transfer_assist2_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist2_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist1_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist2_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist1_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><td><input type="date" name="transfer_assist3_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist3_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist3_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist3_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist3_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><td><input type="date" name="transfer_assist4_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist4_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist4_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist4_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist4_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 B</td><td><input type="date" name="transfer_assist5b_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist5a_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist5_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist5a_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist5_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 A</td><td><input type="date" name="transfer_assist5a_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist5b_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist5b_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist5b_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist5b_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><td><input type="date" name="transfer_assist6_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist6_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist6_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist6_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist6_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Complete Independence 7</td><td><input type="date" name="transfer_assist7_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="assist7_rolling" value="Yes">Yes &nbsp;<input type="radio" name="assist7_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="assist7_supine" value="Yes">Yes &nbsp;<input type="radio" name="assist7_supine" class="" value="No">No
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Not Applicable</td><td><input type="date" name="transfer_notappl_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="notappl_rolling" value="Yes" <?php $a=5; echo ($a == 5) ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="notappl_rolling" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="notappl_supine" value="Yes">Yes &nbsp;<input type="radio" name="notappl_supine" class="" value="No">No
                              </td>
                              
                          </tr>    
                      </table>
                  </div>

                <div class="row">
                  <div class="col-sm-2">Recommendation for physiotherapy</div>
                  <div class="col-sm-4">
                    <input type="radio" class="form-control" name="ptn_eligible" value="Yes" checked>Yes &nbsp;
                    <input type="radio" name="ptn_eligible" class="form-control" value="No">No</div>
                </div><br>

                <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Treatment Goals</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="treatment_goal"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Therapy Time</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="therapy_time"> 
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Expected Sessions</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="exp_session">
                                    
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

                <input type="submit" class="btn btn-primary bg_color" name="submit" value="submit">
            </form>

        </section>


    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>

</body>
</html>