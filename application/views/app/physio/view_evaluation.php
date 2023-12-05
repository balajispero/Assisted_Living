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
         textarea{
            height: 34px !important;

         }

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
                    <!-- <form action="<?php echo base_url()?>app/physio/evaluation_update" method="post" enctype="multipart/form-data"> -->
                     
                        <input type="hidden" name="id" value="<?php echo $ptnEvalInfo->id;?>">
        
                        <input type="hidden" name="opd_no" value="<?php echo $ptnEvalInfo->iop_no?>">
                        <input type="hidden" name="patient_no" value="<?php echo $ptnEvalInfo->patient_no?>"> 
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Evaluation No.</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="eval_no" value="<?php echo $ptnEvalInfo->eval_no; ?>" readonly> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Name</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_name" value="<?php echo $ptnEvalInfo->ptn_name; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Age</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_age" value="<?php echo $ptnEvalInfo->ptn_age; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->


                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Medical Diagnosis</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <textarea name="ptn_diagnosis" class="form-control"><?php echo $ptnEvalInfo->ptn_diagnosis; ?></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Present Complaints</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <textarea name="ptn_complain" class="form-control"><?php echo $ptnEvalInfo->ptn_complain; ?></textarea>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->
                        
                        <label>Assessments</label>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Tightness</label><span class="text-danger"></span></br>
                                    <select name="ptn_tightness" class="form-control">
                                      <option value="">- Select Tightness -</option>
                                      
                                      <option value="Restricted ROM" <?php if($ptnEvalInfo->ptn_tightness=="Restricted ROM"){ echo "selected"; } ?>>Restricted ROM</option>
                                      
                                      <option value="Hyperlaxed ROM" <?php if($ptnEvalInfo->ptn_tightness=="Hyperlaxed ROM"){ echo "selected"; } ?>>Hyperlaxed ROM</option>
                                      
                                      <option value="Hip Flexors" <?php if($ptnEvalInfo->ptn_tightness=="Hip Flexors"){ echo "selected"; } ?>>Hip Flexors</option>
                                      
                                      <option value="Calf" <?php if($ptnEvalInfo->ptn_tightness=="Calf"){ echo "selected"; } ?>>Calf</option>
                                      
                                    </select>
                                    
                                    <span class="text-danger error-text type_category_err"></span>                           
                                  </div><!-- /.form-group wrapper-class -->
                                </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Tightness</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_tightness_remark" value="<?php echo $ptnEvalInfo->ptn_tightness_remark; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Upper body</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="ptn_upper_body">  -->
                                    <select name="ptn_upper_body" class="form-control input-sm">
                                      <option value="">- Select Upper Body -</option>
                                      
                                      <option value="Tightness" <?php if($ptnEvalInfo->ptn_upper_body=="Tightness"){ echo "selected"; } ?>>Tightness</option>
                                      
                                      <option value="Increased Tone" <?php if($ptnEvalInfo->ptn_upper_body=="Increased Tone"){ echo "selected"; } ?>>Increased Tone</option>
                                      
                                      <option value="Decreased Tone" <?php if($ptnEvalInfo->ptn_upper_body=="Decreased Tone"){ echo "selected"; } ?>>Decreased Tone</option>
                                      
                                      <option value="Deformity" <?php if($ptnEvalInfo->ptn_upper_body=="Deformity"){ echo "selected"; } ?>>Deformity</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Upper body</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ptn_upper_body" value="<?php echo $ptnEvalInfo->ptn_upper_body; ?>"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Lower body</label><span class="text-danger"></span></br>
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <!-- <textarea name="lower_body" class="form-control"></textarea> -->
                                    <select name="lower_body" class="form-control input-sm">
                                      <option value="">-Select Lower body-</option>
                                      
                                      <option value="Tightness" <?php if($ptnEvalInfo->lower_body=="Tightness"){ echo "selected"; } ?>>Tightness</option>
                                      
                                      <option value="Increased tone" <?php if($ptnEvalInfo->lower_body=="Increased tone"){ echo "selected"; } ?>>Increased Tone</option>
                                      
                                      <option value="Decreased tone" <?php if($ptnEvalInfo->lower_body=="Decreased tone"){ echo "selected"; } ?>>Decreased Tone</option>
                                      
                                      <option value="Deformity" <?php if($ptnEvalInfo->lower_body=="Deformity"){ echo "selected"; } ?>>Deformity</option>
                                      
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
                                      
                                      <option value="0" <?php if($ptnEvalInfo->ptn_pain=="0"){ echo "selected"; } ?>>0</option>
                                      
                                      <option value="1" <?php if($ptnEvalInfo->ptn_pain=="1"){ echo "selected"; } ?>>1</option>
                                      
                                      <option value="2" <?php if($ptnEvalInfo->ptn_pain=="2"){ echo "selected"; } ?>>2</option>
                                      
                                      <option value="3" <?php if($ptnEvalInfo->ptn_pain=="3"){ echo "selected"; } ?>>3</option>
                                      
                                      <option value="4" <?php if($ptnEvalInfo->ptn_pain=="4"){ echo "selected"; } ?>>4</option>
                                      
                                      <option value="5" <?php if($ptnEvalInfo->ptn_pain=="5"){ echo "selected"; } ?>>5</option>
                                      <option value="6" <?php if($ptnEvalInfo->ptn_pain=="6"){ echo "selected"; } ?>>6</option>
                                      <option value="7" <?php if($ptnEvalInfo->ptn_pain=="7"){ echo "selected"; } ?>>7</option>
                                      <option value="8" <?php if($ptnEvalInfo->ptn_pain=="8"){ echo "selected"; } ?>>8</option>
                                      <option value="9" <?php if($ptnEvalInfo->ptn_pain=="9"){ echo "selected"; } ?>>9</option>
                                      <option value="10" <?php if($ptnEvalInfo->ptn_pain=="10"){ echo "selected"; } ?>>10</option>


                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <!-- <div class="col-md-3"> -->
                                <!-- <div class="form-group wrapper-class" > -->
                                    <!-- <label>Lower body</label><span class="text-danger"></span></br> -->
                                    <!-- <input type="text" class="form-control" name="present_complaints"> -->
                                    <!-- <textarea name="lower_body" class="form-control"><?php echo $ptnEvalInfo->lower_body; ?></textarea> -->
                                    <!-- <span class="text-danger error-text type_category_err"></span>                            -->
                                <!-- </div>/.form-group wrapper-class -->
                            <!-- </div>/.col-md-3 -->
                            <!-- <div class="col-md-3"> -->
                                <!-- <div class="form-group wrapper-class" > -->
                                    <!-- <label>Pain (Site, VAS, Nature)</label><span class="text-danger"></span></br> -->
                                    <!-- <input type="text" class="form-control" name="past_history"> -->
                                    <!-- <textarea name="ptn_pain" class="form-control"><?php echo $ptnEvalInfo->ptn_pain; ?></textarea> -->
                                    <!-- <span class="text-danger error-text type_category_err"></span>                            -->
                                <!-- </div>/.form-group wrapper-class -->
                            <!-- </div>/.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Nature</label><span class="text-danger"></span></br>
                        
                                    <select name="nature" class="form-control">
                                      <option value="">-Select Nature-</option>
                                      
                                      <option value="Throbbing" <?php if($ptnEvalInfo->nature=="Throbbing"){ echo "selected"; } ?>>Throbbing</option>
                                      
                                      <option value="Dull Pain" <?php if($ptnEvalInfo->nature=="Dull Pain"){ echo "selected"; } ?>>Dull Pain</option>
                                      
                                      <option value="Pricking" <?php if($ptnEvalInfo->nature=="Pricking"){ echo "selected"; } ?>>Pricking</option>
                                     
                                    </select>
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
                              <td>Total Assistance 1</td><td><input type="date" name="mobility_assist1_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist1_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist1_rolling" value="Yes" <?php if($ptnEvalInfo->mobility_assist1_rolling=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist1_rolling" class="" value="No" <?php if($ptnEvalInfo->mobility_assist1_rolling=="No" ){
                            echo "checked=checked";
                        } ?>>No -->

                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist1_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist1_supine" value="Yes" <?php if($ptnEvalInfo->mobility_assist1_supine=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist1_supine" class="" value="No" <?php if($ptnEvalInfo->mobility_assist1_supine=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                         <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist1_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist1_stand" value="Yes" <?php if($ptnEvalInfo->mobility_assist1_stand=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist1_stand" class="" value="No" <?php if($ptnEvalInfo->mobility_assist1_stand=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist1_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><td><input type="date" name="mobility_assist2_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist2_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist2_rolling" value="Yes" <?php if($ptnEvalInfo->mobility_assist2_rolling=="Yes"){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist2_rolling" class="" value="No" <?php if($ptnEvalInfo->mobility_assist2_rolling=="No"){
                            echo "checked=checked";
                        } ?>>No -->

                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist2_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist2_supine" value="Yes" <?php if($ptnEvalInfo->mobility_assist2_supine=="Yes"){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist2_supine" class="" value="No" <?php if($ptnEvalInfo->mobility_assist2_supine=="No"){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist2_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist2_stand" value="Yes" <?php if($ptnEvalInfo->mobility_assist2_stand=="Yes"){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist2_stand" class="" value="No" <?php if($ptnEvalInfo->mobility_assist2_stand=="No"){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist2_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><td><input type="date" name="mobility_assist3_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist3_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist3_rolling" value="Yes" <?php if($ptnEvalInfo->mobility_assist3_rolling=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist3_rolling" class="" value="No" <?php if($ptnEvalInfo->mobility_assist3_rolling=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist3_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist3_supine" value="Yes" <?php if($ptnEvalInfo->mobility_assist3_supine=="Yes"){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist3_supine" class="" value="No" <?php if($ptnEvalInfo->mobility_assist3_supine=="No"){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist3_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist3_stand" value="Yes" <?php if($ptnEvalInfo->mobility_assist3_stand=="Yes"){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist3_stand" class="" value="No" <?php if($ptnEvalInfo->mobility_assist3_stand=="No"){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist3_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><td><input type="date" name="mobility_assist4_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist4_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist4_rolling" value="Yes" <?php if($ptnEvalInfo->mobility_assist4_rolling=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist4_rolling" class="" value="No" <?php if($ptnEvalInfo->mobility_assist4_rolling=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist4_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist4_supine" value="Yes" <?php if($ptnEvalInfo->mobility_assist4_supine=="Yes"){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist4_supine" class="" value="No" <?php if($ptnEvalInfo->mobility_assist4_supine=="No"){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist4_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist4_stand" value="Yes" <?php if($ptnEvalInfo->mobility_assist4_stand=="Yes"){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist4_stand" class="" value="No" <?php if($ptnEvalInfo->mobility_assist4_stand=="No"){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist4_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 A</td><td><input type="date" name="mobility_assist5a_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist5a_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist5a_rolling" value="Yes" <?php echo ($ptnEvalInfo->mobility_assist5a_rolling=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_assist5_rolling" class="" value="No" <?php echo ($ptnEvalInfo->mobility_assist5a_rolling=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist5a_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist5a_supine" value="Yes" <?php echo ($ptnEvalInfo->mobility_assist5a_supine=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_assist5_supine" class="" value="No" <?php echo ($ptnEvalInfo->mobility_assist5a_supine=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist5a_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist5a_stand" value="Yes" <?php echo ($ptnEvalInfo->mobility_assist5a_stand=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_assist5a_stand" class="" value="No" <?php echo ($ptnEvalInfo->mobility_assist5a_stand=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist5a_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 B</td><td><input type="date" name="mobility_assist5b_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist5a_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist5b_rolling" value="Yes" <?php echo ($ptnEvalInfo->mobility_assist5b_rolling=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_assist5b_rolling" class="" value="No" <?php echo ($ptnEvalInfo->mobility_assist5b_rolling=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist5b_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist5b_supine" value="Yes" <?php echo ($ptnEvalInfo->mobility_assist5b_supine=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_assist5b_supine" class="" value="No" <?php echo ($ptnEvalInfo->mobility_assist5b_supine=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist5b_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist5b_stand" value="Yes" <?php echo ($ptnEvalInfo->mobility_assist5b_stand=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_assist5b_stand" class="" value="No" <?php echo ($ptnEvalInfo->mobility_assist5b_stand=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist5b_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><td><input type="date" name="mobility_assist6_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist6_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist6_rolling" value="Yes" <?php if($ptnEvalInfo->mobility_assist6_rolling=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist6_rolling" class="" value="No" <?php if($ptnEvalInfo->mobility_assist6_rolling=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist6_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist6_supine" value="Yes" <?php if($ptnEvalInfo->mobility_assist6_supine=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist6_supine" class="" value="No" <?php if($ptnEvalInfo->mobility_assist6_supine=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist6_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist6_stand" value="Yes" <?php if($ptnEvalInfo->mobility_assist6_stand=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist6_stand" class="" value="No" <?php if($ptnEvalInfo->mobility_assist6_stand=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist6_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Complete Independence 7</td><td><input type="date" name="mobility_assist7_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_assist7_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist7_rolling" value="Yes" <?php if($ptnEvalInfo->mobility_assist7_rolling=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist7_rolling" class="" value="No" <?php if($ptnEvalInfo->mobility_assist7_rolling=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_rolling" class="mobility_assist_rolling" <?php echo ($ptnEvalInfo->mobility_assist7_rolling == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist7_supine" value="Yes" <?php if($ptnEvalInfo->mobility_assist7_supine=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist7_supine" class="" value="No" <?php if($ptnEvalInfo->mobility_assist7_supine=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_supine" class="mobility_assist_supine" <?php echo ($ptnEvalInfo->mobility_assist7_supine == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="mobility_assist7_stand" value="Yes" <?php if($ptnEvalInfo->mobility_assist7_stand=="Yes" ){
                            echo "checked=checked";
                        } ?>>Yes &nbsp;<input type="radio" name="mobility_assist7_stand" class="" value="No" <?php if($ptnEvalInfo->mobility_assist7_stand=="No" ){
                            echo "checked=checked";
                        } ?>>No -->
                        <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_stand" class="mobility_assist_stand" <?php echo ($ptnEvalInfo->mobility_assist7_stand == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <!-- <tr>
                              <td>Not Applicable</td><td><input type="date" name="mobility_notappl_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->mobility_notappl_evaldate; ?>"></td>
                              <td>
                                <input type="radio" class="" name="mobility_notappl_rolling" value="Yes" <?php echo ($ptnEvalInfo->mobility_notappl_rolling=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_notappl_rolling" class="" value="No" <?php echo ($ptnEvalInfo->mobility_notappl_rolling=="No") ? 'checked' : '';  ?>>No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_notappl_supine" value="Yes" <?php echo ($ptnEvalInfo->mobility_notappl_supine=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_notappl_supine" class="" value="No" <?php echo ($ptnEvalInfo->mobility_notappl_supine=="No") ? 'checked' : '';  ?>>No
                              </td>
                              <td>
                                <input type="radio" class="" name="mobility_notappl_stand" value="Yes" <?php echo ($ptnEvalInfo->mobility_notappl_stand=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="mobility_notappl_stand" class="" value="No" <?php echo ($ptnEvalInfo->mobility_notappl_stand=="No") ? 'checked' : '';  ?>>No
                              </td>
                          </tr> -->    
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
                              <td>Total Assistance 1</td><td><input type="date" name="transfer_assist1_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist1_evaldate; ?>"></td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist1_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist1_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist1_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist1_wheelchair=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist1_wheelchair" class="transfer_assist_wheelchair" <?php echo ($ptnEvalInfo->transfer_assist1_wheelchair == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="" name="transfer_assist1_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_assist1_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_assist1_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_assist1_car=="No") ? 'checked' : '';  ?>>No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist1_car" class="transfer_assist_car" <?php echo ($ptnEvalInfo->transfer_assist1_car == 'Yes') ? 'checked' : '';  ?>>
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><td><input type="date" name="transfer_assist2_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist2_evaldate; ?>"></td>
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
                              <td>Moderate Assistance 3</td><td><input type="date" name="transfer_assist3_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist3_evaldate; ?>"></td>
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
                              <td>Minimal Assistance 4</td><td><input type="date" name="transfer_assist4_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist4_evaldate; ?>"></td>
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
                              <td>Contact  Guarding 5 B</td><td><input type="date" name="transfer_assist5b_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist5b_evaldate; ?>"></td>
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
                              <td>Supervision or setup 5 A</td><td><input type="date" name="transfer_assist5a_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist5a_evaldate; ?>"></td>
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
                              <td>Modified Independence 6</td><td><input type="date" name="transfer_assist6_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist6_evaldate; ?>"></td>
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
                              <td>Complete Independence 7</td><td><input type="date" name="transfer_assist7_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_assist7_evaldate; ?>"></td>
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
                          <!-- <tr>
                              <td>Not Applicable</td><td><input type="date" name="transfer_notappl_evaldate" class="form-control" value="<?php echo $ptnEvalInfo->transfer_notappl_evaldate; ?>"></td>
                              <td>
                                <input type="radio" class="" name="transfer_notappl_wheelchair" value="Yes" <?php echo ($ptnEvalInfo->transfer_notappl_wheelchair=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_notappl_wheelchair" class="" value="No" <?php echo ($ptnEvalInfo->transfer_notappl_wheelchair=="No") ? 'checked' : '';  ?>>No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_notappl_car" value="Yes" <?php echo ($ptnEvalInfo->transfer_notappl_car=="Yes") ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_notappl_car" class="" value="No" <?php echo ($ptnEvalInfo->transfer_notappl_car=="No") ? 'checked' : '';  ?>>No
                              </td> 
                          </tr>     -->
                      </table>
                  </div>


                <div class="row">
                  <div class="col-sm-4">Recommendation for physiotherapy</div>
                  <div class="col-sm-4">
                    <input type="radio" class="" name="ptn_rec" value="Yes" checked>Yes &nbsp;
                    <input type="radio" name="ptn_rec" class="" value="No">No</div>
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
<script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
<!-------------------------jquery cdn for work radio button------------------------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
        <!-------------------------jquery cdn for work radio button------------------------>

<script>
     /********************Start check one radio button allowed column wise************************/
  
     $(document).ready(function () {
          $('input.mobility_assist_rolling, input.mobility_assist_supine, input.mobility_assist_stand, input.transfer_assist_wheelchair, input.transfer_assist_car').click(function () {
            // Find all radio buttons in the clicked column and reset them
            var columnClass = $(this).attr('class');
            $('.' + columnClass).not(this).prop('checked', false);
          });
        });

       /***********************End check one radio button allowed column wise*************************/  
</script>

</body>
</html>