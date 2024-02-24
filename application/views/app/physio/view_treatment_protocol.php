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

            <aside class="right-side">                
             

                <section class="content">
                    <!-- <?php echo $message;?> -->
                     <!-- <form action="<?php echo base_url()?>app/physio/treatment_protocol_update" method="post" enctype="multipart/form-data"> --> 
                     
                        <input type="hidden" name="eval_no" value="<?php echo $this->uri->segment("6");?>">
                        <input type="hidden" name="treat_protocol_id" value="<?php echo $this->uri->segment("7");?>">

                         <input type="hidden" name="opd_no" value="<?php echo $getOPDPatient->IO_ID?>">
                        <input type="hidden" name="patient_no" value="<?php echo $getOPDPatient->patient_no?>"> 
                        <h3>Treatment Protocol</h3><hr>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Date of Evaluation</label><span class="text-danger">*</span></br>
                                    <input type="text" class="form-control" name="eval_date" value="<?php echo date("Y-m-d",strtotime($ptnEvalInfo->added_date)); ?>" readonly required> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Evaluated by</label><span class="text-danger">*</span></br>
                                    <input type="text" class="form-control" name="eval_by" value="<?php echo @$patientInfo->middlename; ?>" required> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Subjective</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="subjective" value="<?php echo $treatment_protocol_info[0]->subjective?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Objective</label><span class="text-danger"></span></br>
                                    
                                    <textarea name="objective" class="form-control"><?php echo $treatment_protocol_info[0]->objective?></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Assessments</label><span class="text-danger"></span></br>
                                    
                                    <textarea name="assessment" class="form-control"><?php echo $treatment_protocol_info[0]->assessment?></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->
                        <hr style="border-top: 2px solid #2B48B0;"/>

                        <h3>Plan</h3><hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Goals</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="treatment_goal" value="<?php echo $ptnEvalInfo->treatment_goal; ?>"> 

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

                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Start Date</label><span class="text-danger">*</span></br>
                                    <input type="date" class="form-control" name="start_date" value="<?php echo $treatment_protocol_info[0]->start_date?>" required>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>End Date</label><span class="text-danger">*</span></br>
                                    <input type="date" class="form-control" name="end_date" value="<?php echo $treatment_protocol_info[0]->end_date?>" required>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                        </div><!-- / row -->

                        <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group wrapper-class" >
                                                        <label></label><span class="text-danger"></span></br>
                                                            <!-- <button type="button" name="add" id="add" class="btn btn-primary bg_color">Add Week Plan</button> -->
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
                                                     <?php
      if(!empty($physio_treatment_weekly_plan)){

      foreach($physio_treatment_weekly_plan as $key => $weekly_plan){ $key1 = $key+1; ?>
        <tr id="row<?=$key1?>">
           <td>week <?=$key1?></td><td><input type="text" class="form-control" id="datePick<?=$key1?>" name="week_date[]" value="<?php  $selected_dates = implode(',', explode(',', $weekly_plan->week_date)); echo $selected_dates; ?>"></td><td><textarea name="week_treatment_line[]" class="form-control"><?=$weekly_plan->week_treatment_line?></textarea></td><td><input type="text" class="form-control" name="week_remark[]" value="<?=$weekly_plan->week_remark?>"></td><td><select name="week_frequency[]" class="form-control"><option value="">-Select Frequency-</option><option value="Daily Once" <?php if($weekly_plan->week_frequency=="Daily Once"){ echo "selected"; } ?>>Daily Once</option><option value="Daily Twice" <?php if($weekly_plan->week_frequency=="Daily Twice"){ echo "selected"; } ?>>Daily Twice</option><option value="Thrice Daily" <?php if($weekly_plan->week_frequency=="Thrice Daily"){ echo "selected"; } ?>>Thrice Daily</option><option value="Twice a Week" <?php if($weekly_plan->week_frequency=="Twice a Week"){ echo "selected"; } ?>>Twice a Week</option><option value="Thrice a Week" <?php if($weekly_plan->week_frequency=="Thrice a Week"){ echo "selected"; } ?>>Thrice a Week</option><option value="Once a Week" <?php if($weekly_plan->week_frequency=="Once a Week"){ echo "selected"; } ?>>Once a Week</option></select></td><td><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="<?=$key1?>"><span class="glyphicon glyphicon-minus"></span></button></td>
        </tr>
        <?php } }?> 
         <input type="hidden" value="<?php if(!empty($key1)){ print($key1);}else{ echo '0';}?>" id="weekplancuont"></input> 
                                                    </tbody>
                                             </table>
                                            </div>

                    
                
                

                <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Follow up Evaluation Date</label><span class="text-danger"></span></br>
                                    <input type="date" class="form-control" name="first_followup_eval_date" value="<?php echo $treatment_protocol_info[0]->first_followup_eval_date?>">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Comments</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="first_followup_eval_date_remark" value="<?php echo $treatment_protocol_info[0]->first_followup_eval_date_remark?>">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                                                        <div class="form-group wrapper-class" >
                                                                            <label>Therapist</label><span class="text-danger">*</span></br>
                                                                            <select name="consultant_therapist" class="form-control input-sm" required>
                                                                               <option value="">- Consultant Therapist -</option>
                                                                <?php 
                                                                foreach($normalPhysioList as $normalPhysioList){
                                                                    if($treatment_protocol_info[0]->assign_therapist == $normalPhysioList->user_id){
                                                                    $selected = "selected='selected'";
                                                                }else{
                                                                    $selected = "";
                                                                }
                                                                ?>
                                                                <option value="<?php echo $normalPhysioList->user_id;?>" <?php echo $selected;?>><?php echo $normalPhysioList->name;?></option>
                                                                <?php }?>
                                                                            </select>

                                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                                        </div><!-- /.form-group wrapper-class -->
                                                                    </div><!-- /.col-md-3 -->
                                                                

                        </div><!-- / row -->
                        
                        <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group wrapper-class" >
                                                        <label></label><span class="text-danger"></span></br>
                                                         <?php if($treatment_protocol_info[0]->first_followup_eval_date<=date("Y-m-d")){ ?>
                                                            <!-- <button type="button" name="add1" id="add1" class="btn btn-primary bg_color">Add Review</button> -->
                                                        <?php } ?>
                                                            <span class="text-danger error-text type_category_err"></span>                           
                                                    </div><!-- /.form-group wrapper-class -->
                                                </div><!-- /.col-md-3 -->
                                             </div><!-- / row -->
                                            <div class="table-responsive">
                                             <table class="table table-striped">
                                                <?php 
                                                if($treatment_protocol_info[0]->first_followup_eval_date<=date("Y-m-d")){
                                                    ?>
                                                <tr>
                                                  <th></th><th>Date</th><th>Review Note</th><th>Frequency</th><th>Next Follow up Evaluation Date</th><th>Action</th>
                                                </tr>
                                            <?php } ?>
                                                 <tbody id="dynamic_field1">
                                                     <?php
                                                     if($treatment_protocol_info[0]->first_followup_eval_date<=date("Y-m-d")){
      if(!empty($physio_treatment_review)){

      foreach($physio_treatment_review as $key => $weekly_plan){ $key2 = $key+1; ?>
        <tr id="row1<?=$key2?>">
           <td><?=$key2?></td><td><input type="text" class="form-control" id="datePick<?=$key2?>" name="review_date[]" value="<?php  $selected_review_dates = implode(',', explode(',', $weekly_plan->review_date)); echo $selected_review_dates; ?>"></td><td><input type="text" class="form-control" name="review_note[]" value="<?=$weekly_plan->review_note?>"></td><td><select name="review_frequency[]" class="form-control"><option value="">-Select Frequency-</option><option value="Daily Once" <?php if($weekly_plan->review_frequency=="Daily Once"){ echo "selected"; } ?>>Daily Once</option><option value="Daily Twice" <?php if($weekly_plan->review_frequency=="Daily Twice"){ echo "selected"; } ?>>Daily Twice</option><option value="Thrice Daily" <?php if($weekly_plan->review_frequency=="Thrice Daily"){ echo "selected"; } ?>>Thrice Daily</option><option value="Twice a Week" <?php if($weekly_plan->review_frequency=="Twice a Week"){ echo "selected"; } ?>>Twice a Week</option><option value="Thrice a Week" <?php if($weekly_plan->review_frequency=="Thrice a Week"){ echo "selected"; } ?>>Thrice a Week</option><option value="Once a Week" <?php if($weekly_plan->review_frequency=="Once a Week"){ echo "selected"; } ?>>Once a Week</option></select></td><td><input type="text" class="form-control" name="review_next_followup_eval_date[]" value="<?=$weekly_plan->review_next_followup_eval_date?>"></td><td><button type="button" class="btn_remove1 btn btn-danger btn-circle btn-sm" name="remove" id="<?=$key2?>"><span class="glyphicon glyphicon-minus"></span></button></td>
        </tr>
        <?php } } }?> 
         <input type="hidden" value="<?php if(!empty($key2)){ print($key2);}else{ echo '0';}?>" id="reviewcnt"></input> 
                                                    </tbody>
                                             </table>
                                            </div>

                <!-- <input type="submit" class="btn btn-primary bg_color" name="btnSave" value="submit"> -->
            <!-- </form> -->

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
        var j1 = 1; 
        /*$('#add1').click(function() {
            i1++;
            $('#dynamic_field1').append('<div id="row1'+i1+'"> <label" for="member_'+ i1 +'">  '+ i1 +' </label> <input type="text" class="form-control dis_inline" name="mult" id="datePickssd' + i1 + '"><button type="button" class="btn_remove1 btn btn-danger btn-circle btn-sm" name="remove" id="'+ i1 +'"><span class="glyphicon glyphicon-minus"></span></button></div>')
            $('#datePickssd' + i1).multiDatesPicker();

        });*/

        $('#add1').click(function() {
                    var reviewcnt = $('#reviewcnt').val();
                    //console.log(diagcount);
                var i1 = j1+ + +reviewcnt;
                    
                    
      $('#dynamic_field1').append('<tr id="row1'+i1+'"><td>'+ i1 +'</td><td><input type="date" name="review_date[]" id="datePick1' + i1 + '" autocomplete="off" class="form-control" /></td><td><input type="text" class="form-control" name="review_note[]"></td><td><select name="review_frequency[]" class="form-control"><option value="">-Select Frequency-</option><option value="Daily Once" <?php if($ptnEvalInfo->exp_session=="Daily Once"){ echo "selected"; } ?>>Daily Once</option><option value="Daily Twice" <?php if($ptnEvalInfo->exp_session=="Daily Twice"){ echo "selected"; } ?>>Daily Twice</option><option value="Thrice Daily" <?php if($ptnEvalInfo->exp_session=="Thrice Daily"){ echo "selected"; } ?>>Thrice Daily</option><option value="Twice a Week" <?php if($ptnEvalInfo->exp_session=="Twice a Week"){ echo "selected"; } ?>>Twice a Week</option><option value="Thrice a Week" <?php if($ptnEvalInfo->exp_session=="Thrice a Week"){ echo "selected"; } ?>>Thrice a Week</option><option value="Once a Week" <?php if($ptnEvalInfo->exp_session=="Once a Week"){ echo "selected"; } ?>>Once a Week</option></select></td><td><input type="date" class="form-control" name="review_next_followup_eval_date[]"></td><td><button type="button" class="btn_remove1 btn btn-danger btn-circle btn-sm" name="remove" id="'+ i1 +'"><span class="glyphicon glyphicon-minus"></span></button></td></tr>')
      //$('#datePick' + i1).multiDatesPicker({ dateFormat: 'yy-mm-dd' });
             j1++;
                });

        $(document).on('click', '.btn_remove1', function() {
            var button_id1 = $(this).attr("id");
            $('#row1' + button_id1 + '').remove();
        });
    });


$(document).ready(function() {
                var i=0; 
                 var j = 1;
                $('#add').click(function() {
                    var weekplancuont = $('#weekplancuont').val();
                    //console.log(diagcount);
                var i = j+ + +weekplancuont;
                    
                    
      $('#dynamic_field').append('<tr id="row'+i+'"><td>Week '+ i +'</td><td><input type="text" name="week_date[]" id="datePick' + i + '" autocomplete="off" class="form-control" /></td><td><input type="text" class="form-control" name="week_treatment_line[]"></td><td><input type="text" class="form-control" name="week_remark[]"></td><td><select name="week_frequency[]" class="form-control"><option value="">-Select Frequency-</option><option value="Daily Once" <?php if($ptnEvalInfo->exp_session=="Daily Once"){ echo "selected"; } ?>>Daily Once</option><option value="Daily Twice" <?php if($ptnEvalInfo->exp_session=="Daily Twice"){ echo "selected"; } ?>>Daily Twice</option><option value="Thrice Daily" <?php if($ptnEvalInfo->exp_session=="Thrice Daily"){ echo "selected"; } ?>>Thrice Daily</option><option value="Twice a Week" <?php if($ptnEvalInfo->exp_session=="Twice a Week"){ echo "selected"; } ?>>Twice a Week</option><option value="Thrice a Week" <?php if($ptnEvalInfo->exp_session=="Thrice a Week"){ echo "selected"; } ?>>Thrice a Week</option><option value="Once a Week" <?php if($ptnEvalInfo->exp_session=="Once a Week"){ echo "selected"; } ?>>Once a Week</option></select></td><td><button type="button" class="btn_remove btn btn-danger btn-circle btn-sm" name="remove" id="'+ i +'"><span class="glyphicon glyphicon-minus"></span></button></td></tr>')
      $('#datePick' + i).multiDatesPicker({ dateFormat: 'yy-mm-dd' });
             j++;
                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });
            });
            </script>

  <script>
    $(document).ready(function () {
        <?php
        if(!empty($physio_treatment_weekly_plan)){
         for($wp_cnt=1; $wp_cnt<=count($physio_treatment_weekly_plan); $wp_cnt++) { ?>

            $("#datePick<?= $wp_cnt?>").multiDatesPicker({
          dateFormat: 'yy-mm-dd',
        defaultDates: <?php echo json_encode($selected_dates); ?>
      });

        <?php } } ?>
           
    });
  </script> 


<?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>