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

            <aside class="right-side">                
             

                <section class="content">
                    <!-- <?php echo $message;?> -->
                    <form action="<?php echo base_url()?>app/physio/preassessment_save1" method="post" enctype="multipart/form-data">
                      <!-- <?php
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
                        ?> -->
                        <input type="hidden" name="userID2" value="<?php echo $userID2;?>">
                        
                        <!-- <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                        <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>"> -->
                        <h3>Treatment Protocol</h3><hr>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Date of Evaluation</label><span class="text-danger">*</span></br>
                                    <input type="text" class="form-control" name="ptn_name" value="<?php echo $userID;?>" required> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Evaluated by</label><span class="text-danger">*</span></br>
                                    <input type="text" class="form-control" name="ptn_name" required> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Subjective</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-5">
                                <div class="form-group wrapper-class" >
                                    <label>Objective</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <textarea name="present_complaints" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-5">
                                <div class="form-group wrapper-class" >
                                    <label>Assessments</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <textarea name="past_history" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->
                        <h3>Plan</h3><hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Goals</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Freqvency</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Duaration</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <!-- <textarea name="present_complaints" class="form-control"></textarea> -->
                                    <input type="text" class="form-control" name="ptn_age"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                        </div><!-- / row -->

                    
                
                

                <div class="row">
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Week 1</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="treatment_goal"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Line of Treatment</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="therapy_time"> 
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Expected Sessions</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="exp_session">
                                    
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                <div class="form-group wrapper-class">
                                    <label>Remarks</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                <div class="form-group wrapper-class">
                                    <label>Follow up Evauation Date</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                <div class="form-group wrapper-class">
                                    <label>Cumments</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-4">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Therapist</label><span class="text-danger"></span></br>
                                                                            <select name="applicant_marital" class="form-control input-sm">
                                                                               <option value="">- Therapist -</option>
                                                                         
                                                                               <option value="Divorced">T1</option>
                                                                          
                                                                               <option value="Legal Seperated">T2</option>
                                                                         
                                                                               <option value="Married">T3</option>
                                                                          
                                                                               <option value="Single">T4</option>
                                                                           
                                                                               <option value="Widow">T5</option>
                                                                          
                                                                               <option value="Widower">T6</option>
                                                                            </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                

                        </div><!-- / row -->

                <input type="submit" class="btn btn-primary bg_color" name="btnSave" value="submit">
            </form>

        </section>


    </aside>

</div><!-- ./wrapper -->
<script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>

</body>
</html>