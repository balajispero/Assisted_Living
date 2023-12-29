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
           body{
            border: 2px solid #2196F3;
        }

            
         
        </style>
    </head>
    
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->

                
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                

                <section class="content">
                  
                    <!-- <form action="<?php echo base_url()?>app/physio/evaluation_update" method="post" enctype="multipart/form-data"> -->
                      

            <div class="row" style="margin-top: 30px;">
            <div class="col-md-12 mt-5">
                <table width="100%" cellpadding="5">
                <tr>
                <td width="80%">
                <h3 style="margin-left: 250px;">Treatment Protocol</h3>
                </td>
                <td width="20%">         
                <img src="<?=base_url()?>/public/company_logo/c.png" alt="" style="height:40px; ">
                </td>
                </tr>
                <br>
            </table>
          </div>
        </div>

        <hr style="border-top:2px solid #D3D3D3; margin-top:5px; width:650px;">      

                        

          <div class="row" style="margin-top: 30px;">
            <div class="col-md-12 mt-5">
                <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                <b style="margin-left: 50px;">Date of Evaluation :</b> :<?php echo date("Y-m-d",strtotime($ptnEvalInfo->added_date)); ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Evaluated by : </b> <?php echo @$patientInfo->middlename; ?>
                </td>
                </tr>
                <br>
                <tr>
                <td width="50%" >
                <b style="margin-left: 50px;">Subjective : </b><?php echo $treatment_protocol_info[0]->subjective?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Objective : </b><?php echo $treatment_protocol_info[0]->objective?>
                </td>
                </tr><br>
                <tr>
                <td width="50%">         
                <b style="margin-left: 50px;">Assessments : </b><?php echo $treatment_protocol_info[0]->assessment?>
                </td>
                </tr>
            </table>
          </div>
        </div>

        <hr style="border-top:2px solid #D3D3D3; margin-top:20px; width:650px; ">   
        
        <div class="row">
        <h3 style="margin-left: 62px;"><u>Plan</u></h3><br>
            <div class="col-md-12 mt-5">
                <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                <b style="margin-left: 50px;">Goals:</b> :<?php echo $ptnEvalInfo->treatment_goal; ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">No of Session(for each day) : </b> <?php echo @$ptnEvalInfo->exp_session; ?>
                </td>
                </tr>
                <br>
                <tr>
                <td width="50%" >
                <b style="margin-left: 50px;">Start Date : </b><?php echo $treatment_protocol_info[0]->start_date?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">End Date : </b><?php echo $treatment_protocol_info[0]->end_date?>
                </td>
                </tr>
            </table>
          </div>
        </div>

        <hr style="border-top:2px solid #D3D3D3; margin-top:20px; width:650px; ">   




      
  
 
        <div class="row">
            <div class="col-sm-10">
            <h3 style="margin-left: 35px;"><u> Weekly Plan</u></h3><br>
                
            </div>
            <div class="container">
           <table class="table table-striped" style="margin-left:40px; width:90%;">
                                                <tr>
                                                   <th>Week</th><th>Date</th><th>Line of Treatment</th><th>Remark</th><th>Frequency</th>
                                                </tr>
                                                
                                                    <?php
      if(!empty($physio_treatment_weekly_plan)){

      foreach($physio_treatment_weekly_plan as $key => $weekly_plan){ $key1 = $key+1; ?>
        <tr class="border_bottom" id="row<?=$key1?>">
           <td>week <?=$key1?></td><td><?=implode(',', explode(',', $weekly_plan->week_date)); ?></td><td><?=$weekly_plan->week_treatment_line; ?></td><td><?=$weekly_plan->week_remark?></td><td><?=$weekly_plan->week_frequency?></td>
        </tr>
        <?php } }?>
                                                   
     </table>
      </div>
    
    </div>
    <br><br>


    <div class="row">
    <div class="col-md-12 mt-5">
                <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                <b style="margin-left: 50px;">Follow up Evaluation Date:</b> :<?php echo $treatment_protocol_info[0]->first_followup_eval_date?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Comments : </b> <?php echo $treatment_protocol_info[0]->first_followup_eval_date_remark?>
                </td>
                </tr>
                <br><br>
                <tr>
                <td width="50%" >
                <b style="margin-left: 50px;">Therapist : </b>
               
                                                                <?php 
                                                                foreach($normalPhysioList as $normalPhysioList){
                                                                    
                                                                ?>
                                                              <?php echo $normalPhysioList->name;?>
                                                                
                                                                <?php }?>
                </td>
                </tr>
            </table>
          </div>
    </div>

    

    <div class="row">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
            <h3 style="margin-left: 35px; margin-top:50px;"><u> Review Details</u></h3><br>
                
            </div>
        </div>
    <table class="table table-striped" style="margin-left:40px; width:90%;">
                                                <tr>
                                                   <th>Date</th><th>Review Note</th><th>Frequency</th><th>Next Follow up Evaluation Date</th>
                                                </tr>
                                                
                                                    <?php
      if($treatment_protocol_info[0]->first_followup_eval_date<=date("Y-m-d")){
      if(!empty($physio_treatment_review)){

      foreach($physio_treatment_review as $key => $weekly_plan){ $key2 = $key+1; ?>
        <tr class="border_bottom" id="row1<?=$key2?>">
           <td><?=implode(',', explode(',', $weekly_plan->review_date)); ?></td><td><?=$weekly_plan->review_note; ?></td><td><?=$weekly_plan->review_frequency?></td><td><?=$weekly_plan->review_next_followup_eval_date?></td>
        </tr>
        <?php } } }?>
       
                                                   
     </table>
    
    </div>

    </div>
                      
    
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