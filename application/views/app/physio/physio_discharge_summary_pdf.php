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
                      

                        <!-- <div class="row text-center" >
                        <div class="col-md-12"  >
                        <h2 style="margin-top:30px;">Physio Discharge Summary</h2><span><img src="<?=base_url()?>/public/company_logo/c.png" alt="" style="margin-left:550px; height:40px; "></span>
                        
                         
                           </div>
                        </div> -->
                        <div class="row" style="margin-top: 30px;">
            <div class="col-md-12 mt-5">
                <table width="100%" cellpadding="5">
                <tr>
                <td width="80%">
                <h3 style="margin-left: 50px;">Physio Discharge Summary</h3>
                </td>
                <td width="20%">         
                <img src="<?=base_url()?>/public/company_logo/c.png" alt="" style="height:40px; ">
                </td>
                </tr>
                <br>
            </table>
          </div>
        </div>
        <hr style="border-top:2px solid #D3D3D3; margin-top:10px; width:650px;">

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-12 mt-5">
                <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                <b style="margin-left: 50px;">Evaluation No. :</b> <?php echo $discharge_summary_info[0]->eval_no; ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Diagnosis : </b>  <?php echo $discharge_summary_info[0]->diagnosis; ?>
                </td>
                </tr>
                <br><br><br>
                <tr>
                <td width="50%" >
                <b style="margin-left: 50px;">FIM Score Evaluation Date : </b><?php echo $discharge_summary_info[0]->fim_score1_eval_date; ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Start Date : </b><?php echo $discharge_summary_info[0]->start_date; ?>
                </td>
                </tr><br><br><br>
                <tr>
                <td width="50%">         
                <b style="margin-left: 50px;">End Date : </b><?php echo $discharge_summary_info[0]->start_date; ?>
                </td>
                <td width="50%">         
                <b style="margin-left: 50px;">Goal Achieved : </b><?php echo $discharge_summary_info[0]->goal_achieved; ?>
                </td>
                </tr><br><br><br>
                <tr>
                <td width="50%">         
                <b style="margin-left: 50px;">Further Recommendations : </b><?php echo $discharge_summary_info[0]->further_recommendation; ?>
                </td>
                
                </tr>
                
            </table>
          </div>
        </div>


                        

         <!--  <div class="row" style="margin-top: 30px;">
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
        </div> -->

  

        
               
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