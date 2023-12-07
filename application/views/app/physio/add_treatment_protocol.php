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
        <style>
            .ui-state-highlight a, .ui-widget-content .ui-state-highlight a, .ui-widget-header .ui-state-highlight a {
    background: red !important;
    color: #363636;
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
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Date of Evaluation</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name" value="<?php echo $ptnEvalInfo->eval_no; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Evaluated by</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name" value="<?php echo @$patientInfo->middlename; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Subjective</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Objective</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <textarea name="present_complaints" class="form-control"></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
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
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Goals</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name" value="<?php echo $ptnEvalInfo->eval_no; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>No of Session(for each day)</label><span class="text-danger"></span></br>
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


                            <!-- <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Duaration</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div> --><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Start Date</label><span class="text-danger"></span></br>
                                    <input type="date" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>End Date</label><span class="text-danger"></span></br>
                                    <input type="date" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                        </div><!-- / row -->

                        <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group wrapper-class" >
                                                        <label></label><span class="text-danger"></span></br>
                                                            <button type="button" name="add" id="add" class="btn btn-primary bg_color">Add Week Plan</button>
                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                    </div><!-- /.form-group wrapper-class -->
                                                </div><!-- /.col-md-3 -->
                                             </div><!-- / row -->
                                            <div class="table-responsive">
                                             <table class="table table-striped">
                                                <tr>
                                                  <th>Week</th><th>Date</th><th>Line of Treatment</th><th>Remark</th><th>Frequency</th><th>Action</th>
                                                </tr>
                                                 <tbody id="dynamic_field">
                                                    </tbody>
                                             </table>
                                            </div>

                    
                
                

                <div class="row">
                            <!-- <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Week 1</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="treatment_goal"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Line of Treatment</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="therapy_time"> 
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group wrapper-class" >
                                    <label>Expected Sessions</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="exp_session">
                                    
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group wrapper-class">
                                    <label>Remarks</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div> --><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Follow up Evaluation Date</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Comments</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Therapist</label><span class="text-danger"></span></br>
                                                                            <select name="applicant_marital" class="form-control input-sm">
                                                                               <option value="">- Consultant Therapist -</option>
                                                                <?php 
                                                                foreach($normalPhysioList as $normalPhysioList){
                                                                ?>
                                                                <option value="<?php echo $normalPhysioList->user_id;?>"><?php echo $normalPhysioList->name;?></option>
                                                                <?php }?>
                                                                            </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                

                        </div><!-- / row -->
                        <!-- <div class="row">
                                                                    
                                                                    <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>DIAGNOSIS</label><span class="text-danger"></span></br>
                                                                            <button type="button" required name="add1" id="add1" class="btn btn-primary bg_color">Add Diagnosis</button><br><br><div id="dynamic_field1"></div>
                                                                            
                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div>// /.form-group wrapper-class -
                                                                    </div>
                                                                </div> --><!-- / row -->

                <input type="submit" class="btn btn-primary bg_color" name="btnSave" value="submit">
            </form>

        </section>


    </aside>

</div><!-- ./wrapper -->

<script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>

 <!-------------------------jquery cdn for work multiple date selection------------------------>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/gh/dubrox/Multiple-Dates-Picker-for-jQuery-UI@master/jquery-ui.multidatespicker.js"></script>
 
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css"> 
  
   <!-------------------------jquery cdn for work multiple date selection------------------------>

<script type="text/javascript">
    $(document).ready(function() {
        var i1=0; 
        $('#add1').click(function() {
            i1++;
            $('#dynamic_field1').append('<div id="row1'+i1+'"> <label" for="member_'+ i1 +'">  '+ i1 +' </label> <input type="text" class="form-control dis_inline" name="mult" id="datePickssd' + i1 + '"><button type="button" class="btn_remove1 btn btn-danger btn-circle btn-sm" name="remove" id="'+ i1 +'"><span class="glyphicon glyphicon-minus"></span></button></div>')
            $('#datePickssd' + i1).multiDatesPicker();

        });
        $(document).on('click', '.btn_remove1', function() {
            var button_id = $(this).attr("id");
            $('#row1' + button_id + '').remove();
        });
    });

$(document).ready(function() {
                var i=0; 
                $('#add').click(function() {
                    i++;
                    
      $('#dynamic_field').append('<tr id="row'+i+'"><td>Week '+ i +'</td><td><input type="text" name="mult_date" id="datePick' + i + '" autocomplete="off" class="form-control" /></td><td><input type="text" class="form-control" name="medicine_name[]"></td><td><input type="text" class="form-control" name="dose[]"></td><td><input type="text" class="form-control" name="frequency[]"></td><td><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="'+ i +'"><span class="glyphicon glyphicon-minus"></span></button></td></tr>')
      $('#datePick' + i).multiDatesPicker();

                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });
            });
            </script>

  <script>
    /*$(document).ready(function () {
      $('#datePickss').multiDatesPicker();
    });*/
  </script>          


</body>
</html>