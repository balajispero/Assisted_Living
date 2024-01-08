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
        <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

	      <link href="<?php echo base_url()?>public/css/hover-min.css" rel="stylesheet"  type="text/css" />

        
       <style>
         textarea.form-control{
            height: 34px !important;
            border-radius: 25px !important;
           }
           
         
          th.berg_bal {
          text-align: center;
           }
           .onlyphysio_eval{
                display:block !important;
            }

    /*Start toggle button css*/
    .switch {
            position: relative;
            display: inline-block;
            width: 40px; /* Adjust the width */
            height: 20px; /* Adjust the height */
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
            border-radius: 10px; /* Adjust the border-radius */
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px; /* Adjust the height */
            width: 16px; /* Adjust the width */
            left: 2px; /* Adjust the left position */
            bottom: 2px; /* Adjust the bottom position */
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(16px);
            -ms-transform: translateX(16px);
            transform: translateX(16px);
        }
    /*End toggle button css*/

     input.form-control{
      border-radius: 25px !important;
     }
     select.form-control{
      border-radius: 25px !important;
      color: black;

     }
     
        /*Start multiple select dropdown css*/
        .btn-group, .btn-group-vertical {
        position: relative;
        width: 245%;
        display: inline-block;
        vertical-align: middle;
    }
    .btn.btn-default {
        background-color: #fafafa;
        color: #666;
        border-color: #ddd;
        border-bottom-color: #ddd;
        width: 100%;
        text-align: left;
        border-radius: 25px !important;
    }
    .btn .caret {
        margin-left: 150px;
        display: none;
    }
    .multiselect-container {
        position: absolute;
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 40%;
    }
    /*End multiple select dropdown css*/
    
      .bg_color1{
            background: linear-gradient(90deg, #09A3D5 0.58%, #3B4BDF 100.03%) !important;
            color: #FFF;
        }

    .btn-light {
    border-color: 1px solid dodgerblue;
    background-color: white;
    }
    .info:hover {
     background: white;
    color: white;
}
    /*Start highlight bullet point on body*/
    .shoulder-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 93px; /* Adjust the top position based on your needs */
      left: 90px; /* Adjust the left position based on your needs */
    }

    .elbow-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 710px; /* Adjust the top position based on your needs */
      left: 70px; /* Adjust the left position based on your needs */
    }

    .knee-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 328px; /* Adjust the top position based on your needs */
      left: 139px; /* Adjust the left position based on your needs */
    }
    .wrist-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 770px; /* Adjust the top position based on your needs */
      left: 170px; /* Adjust the left position based on your needs */
    }
    .cervical_spine-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 612px; /* Adjust the top position based on your needs */
      left: 115px; /* Adjust the left position based on your needs */
    }
    .thoracic_spine-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 675px; /* Adjust the top position based on your needs */
      left: 116px; /* Adjust the left position based on your needs */
    }
    .lumbar_spine-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 726px; /* Adjust the top position based on your needs */
      left: 116px; /* Adjust the left position based on your needs */
    }
    .pelvis-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 201px; /* Adjust the top position based on your needs */
      left: 126px; /* Adjust the left position based on your needs */
    }
    .hip-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 274px; /* Adjust the top position based on your needs */
      left: 145px; /* Adjust the left position based on your needs */
    }
    .ankle-bullet {
      position: absolute;
      width: 11px;
      height: 11px;
      border: 2px solid white;
      border-radius: 50%;
      background-color: rgba(44, 223, 170, 1);
      cursor: pointer;
      top: 415px; /* Adjust the top position based on your needs */
      left: 139px; /* Adjust the left position based on your needs */
      transition: transform 0.5s ease;
    }
    .ankle-bullet:hover img{
      transform: scale(2.2); /* Increase the scale on hover to create a zoom effect */
    }
    /*End highlight bullet point on body*/
    /*#container {
      position: relative;
      overflow: hidden;
      width: 100%; 
      height: 400px; 
    }

    #container img {
      width: 100%;
      height: auto;
      transition: transform 0.5s ease; // Add a smooth transition effect 
    }

    #container:hover img {
      transform: scale(1.2); // Increase the scale on hover to create a zoom effect 
    }*/
    .hvr-rectangle-out{
      border-color: #2B48B0;
      color: #2B48B0;
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

                     <input type="hidden" name="therapy_type" value="<?php echo ($therapy_type) ? $therapy_type : 'general'; ?>">

                         <br>   
                        <!-- <div class="container"> -->
                        <div class="row text-center">
                          <div class="col-xs-12 col-sm-6 col-md-3">
                            <a href="<?php echo base_url()?>app/physio/add_evaluation/<?php echo $this->uri->segment("4");?>/<?php echo $this->uri->segment("5");?>/general" class="btn <?php if($this->uri->segment("6")=="general" or $this->uri->segment("6")=="") { echo "hvr-rectangle-out"; }else{ echo "bg_color1"; } ?> btn-block" style="margin-top: 5px;  border-color: dodgerblue;">General Evaluation</a>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-3">
                            <a href="<?php echo base_url()?>app/physio/add_evaluation/<?php echo $this->uri->segment("4");?>/<?php echo $this->uri->segment("5");?>/ortho" class="btn <?php echo ($this->uri->segment("6")=="ortho") ? 'hvr-rectangle-out' : 'bg_color1';?> btn-block" style="margin-top: 5px;  border-color: dodgerblue;">Ortho</a>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-3">
                            <a href="<?php echo base_url()?>app/physio/add_evaluation/<?php echo $this->uri->segment("4");?>/<?php echo $this->uri->segment("5");?>/neuro" class="btn <?php echo ($this->uri->segment("6")=="neuro") ? 'hvr-rectangle-out' : 'bg_color1';?> btn-block" style="margin-top: 5px;  border-color: dodgerblue;">Neuro</a>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-3">
                            <a href="<?php echo base_url()?>app/physio/add_evaluation/<?php echo $this->uri->segment("4");?>/<?php echo $this->uri->segment("5");?>/respi" class="btn <?php echo ($this->uri->segment("6")=="respi") ? 'hvr-rectangle-out' : 'bg_color1';?> btn-block" style="margin-top: 5px;  border-color: dodgerblue;">Respiratory</a>
                          </div>
                        </div>
                    <!-- </div> -->
                         <br><br>
                         
    <div class="row">
                <div class="col-sm-3">
                    <?php if(@$patientInfo->gender=="1"){ ?>
                  <div class="row">
                    <!-- <div id="container">
            <img src="https://images.unsplash.com/photo-1582769923195-c6e60dc1d8dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="purple kitty"/>
        </div> -->
                    <div class="col-sm-12" id="container"><img src="<?=base_url()?>/public/company_logo/male-body-front.jpg" alt="" style="height:513px;width: 100%; "></div>
                    <div class="shoulder-bullet"></div>
                    <div class="knee-bullet"></div>
                    <div class="pelvis-bullet"></div>
                    <div class="hip-bullet"></div>
                    <div class="ankle-bullet"></div>
                  </div><br>
                  <div class="row">
                      <div class="col-sm-12"><img src="<?=base_url()?>/public/company_logo/male-body-back.jpg" alt="" style="height:513px;width: 100%; "></div>
                      <div class="elbow-bullet"></div>
                      <div class="wrist-bullet"></div>
                      <div class="cervical_spine-bullet"></div>
                      <div class="thoracic_spine-bullet"></div>
                      <div class="lumbar_spine-bullet"></div>
                  </div>
              <?php }else{ ?>
                <div class="row">
                    <div class="col-sm-12"><img src="<?=base_url()?>/public/company_logo/female-body-front.jpg" alt="" style="height:513px;width: 100%; "></div>
                    
                  </div><br>
                  <div class="row">
                      <div class="col-sm-12"><img src="<?=base_url()?>/public/company_logo/female-body-back.jpg" alt="" style="height:513px;width: 100%; "></div>

                  </div>
              <?php } ?>
                </div>
        <div class="col-sm-9">
            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Evaluation No.</label><span class="text-danger">*</span></br>
                                    <input type="text" class="form-control" name="eval_no" value="<?php echo $userID;?>" readonly required>  

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Name</label><span class="text-danger">*</span></br>
                                    <input type="text" class="form-control alphaonly" name="ptn_name" value="<?php echo @$patientInfo->middlename; ?>" required> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Age</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control numberonly" name="ptn_age" value="<?php echo @$patientInfo->age; ?>"> 

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
            <hr style="border-top: 2px solid #2B48B0;"/>
                        <label><h3><b>Assessments</b></h3></label>
                        <div class="row">
                            <?php if($this->uri->segment("6")=="general" || $this->uri->segment("6")=="ortho" || $this->uri->segment("6")=="neuro" || $this->uri->segment("6")=="respi"  || $this->uri->segment("6")==""){ ?>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Pain Intensity</label><span class="text-danger"></span></br>
                                    <select name="ptn_pain_intensity" class="form-control">
                                      <option value="">-Select Intensity-</option>
                                      
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
                                    <label>Nature of Pain</label><span class="text-danger"></span></br>
                                    <select name="nature" class="form-control">
                                      <option value="">-Select Nature-</option>
                                      
                                      <option value="Throbbing">Throbbing</option>
                                      
                                      <option value="Dull Pain">Dull Pain</option>
                                      
                                      <option value="Pricking">Pricking</option>
                                      <option value="None">None</option>

                                     
                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Mobility</label><span class="text-danger"></span></br>
                                    <select name="mobility" class="form-control">
                                      <option value="">- Select Mobility -</option>
                                      
                                      <option value="Restricted ROM">Restricted ROM</option>
                                      
                                      <option value="Hyperlaxed ROM">Hyperlaxed ROM</option>
                                                                            
                                    </select>
                                         
                                    <span class="text-danger error-text type_category_err"></span>                           
                                  </div><!-- /.form-group wrapper-class -->
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Remark</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="mobility_remark"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                             
                        </div><!-- / row -->
                        <div class="row">
                               
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Muscle Strength</label><span class="text-danger"></span></br>
                                    <select name="muscle_strength" class="form-control input-sm">
                                      <option value="">- Select Muscle Strength -</option>
                                      
                                      <option value="Grade 1">Grade 1</option>
                                      <option value="Grade 2">Grade 2</option>
                                      <option value="Grade 3">Grade 3</option>
                                      <option value="Grade 4">Grade 4</option>
                                      <option value="Grade 5">Grade 5</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Remark</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="muscle_strength_remark"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            
                        <?php } ?>
                        <?php if($this->uri->segment("6")=="neuro" || $this->uri->segment("6")=="general" || $this->uri->segment("6")==""){ ?>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Muscle Tone</label><span class="text-danger"></span></br>
                                    <select name="muscle_tone" class="form-control input-sm">
                                      <option value="">-Select Muscle Tone-</option>
                                      
                                      <option value="Increased Tone Upper Body Left">Increased Tone Upper Body Left</option>
                                      
                                      <option value="Increased Tone Lower Body Left">Increased Tone Lower Body Left</option>
                                      
                                      <option value="Increased Tone Upper Body Right">Increased Tone Upper Body Right</option>
                                      <option value="Increased Tone Lower Body Right">Increased Tone Lower Body Right</option>

                                      <option value="Decreased Tone Upper Body Left">Decreased Tone Upper Body Left</option>

                                      <option value="Decreased Tone Lower Body Left">Decreased Tone Lower Body Left</option>

                                      <option value="Decreased Tone Upper Body Right">Decreased Tone Upper Body Right</option>

                                      <option value="Decreased Tone Lower Body Right">Decreased Tone Lower Body Right</option>

                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                        <?php } ?>

                        <?php if($this->uri->segment("6")=="ortho"){ ?>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Special Tests</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="ortho_special_test"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div> <!-- /.col-md-3 -->
                        <?php } ?>
                                                <?php if($this->uri->segment("6")=="ortho" || $this->uri->segment("6")=="general" || $this->uri->segment("6")==""){ ?>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Tightness</label><span class="text-danger"></span></br>
                                      
                                     <select class="form-control" name="ptn_tightness" id="multiple-checkboxes" multiple="multiple">
                                
                                        <?php
                                          if (!empty($tightness_list))
                                          {
                                           
                                            foreach ($tightness_list as $key => $val)
                                            { 
                                                 
                                                ?>
                                                <option value="<?= !empty($val['pvalue']) ? ($val['pvalue']) : ''; ?>">
                                                    <?= !empty($val['pvalue']) ? ucwords($val['pvalue']) : ''; ?></option>
                                        <?php }
                                          } ?>
                                    </select>  
        
                                    <span class="text-danger error-text type_category_err"></span>                           
                                  </div><!-- /.form-group wrapper-class -->
                                </div><!-- /.col-md-3 -->
                            <?php } ?>
                            <?php if($this->uri->segment("6")!="respi"){ ?>
                    </div>
                         <div class="row">
                         <?php } ?>


                             <?php if($this->uri->segment("6")=="ortho" || $this->uri->segment("6")=="general" || $this->uri->segment("6")==""){ ?>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Tightness Side</label><span class="text-danger"></span></br>
                                    <select name="tightness_side" class="form-control input-sm">
                                      <option value="">- Tightness Side -</option>
                                      
                                      
                                      <option value="Left">Left</option>
                                      <option value="Right">Right</option>
                                      <option value="bilateral">bilateral</option>
                                    
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <?php } ?>
                         
                            
                            <?php if($this->uri->segment("6")=="respi" || $this->uri->segment("6")=="general" || $this->uri->segment("6")==""){ ?>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Breathlessness</label><span class="text-danger"></span></br>
                                    <select name="breathlessness" class="form-control input-sm">
                                      <option value="">- Select Breathlessness -</option>
                                      
                                      <option value="Grade 1">Grade 1</option>
                                      <option value="Grade 2">Grade 2</option>
                                      <option value="Grade 3">Grade 3</option>
                                      <option value="Grade 4">Grade 4</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                       

                            <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>Fatigue</label><span class="text-danger"></span></br>
                                    <select name="fatigue" class="form-control input-sm">
                                      <option value="">- Select Fatigue -</option>
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                             <?php } ?>
                            

                           </div><!--/.row--><br>
                           <hr style="border-top: 2px solid #2B48B0;"/>
                           <div class="row">
                          <div class="col-sm-12">
                            <label><h3><b>A. Bed Mobility</b></h3></label>
                            <p style="font-size: 20px;">Rolling</p>
                        </div>
                    </div><br>
                    <div class="table-responsive">      
                        <table class="table table-striped">
                            <tr>
                              <th>FIM score / Activity</th><!-- <th>Date of eval</th> --><th>Rolling</th><th>Supine to sit</th><th>Sit to stand</th>
                          </tr>
                          <tr>
                               <td>Total Assistance 1</td><!-- <td><input type="date" name="mobility_assist1_evaldate" class="form-control" ></td> --> 
                              <td>
                                  <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist1_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist1_rolling" class="mobility_assist_rolling" value="No">No  --> 
                                 <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist1_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist1_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist1_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist1_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist1_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><!-- <td><input type="date" name="mobility_assist2_evaldate" class="form-control" ></td> -->
                              <td>
                                <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist2_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist2_rolling" class="mobility_assist_rolling" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist2_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist2_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist2_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist2_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist2_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><!-- <td><input type="date" name="mobility_assist3_evaldate" class="form-control" ></td> -->
                              <td>
                                <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist3_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist3_rolling" class="mobility_assist_rolling" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist3_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist3_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist3_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist3_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist3_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><!-- <td><input type="date" name="mobility_assist4_evaldate" class="form-control" ></td> -->
                              <td>
                                <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist4_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist4_rolling" class="mobility_assist_rolling" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist4_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist4_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist4_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist4_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist4_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 A</td><!-- <td><input type="date" name="mobility_assist5a_evaldate" class="form-control" ></td> -->
                              <td>
                                <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist5a_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5a_rolling" class="mobility_assist_rolling" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist5a_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5a_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist5a_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5a_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5a_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 B</td><!-- <td><input type="date" name="mobility_assist5b_evaldate" class="form-control" ></td> -->
                              <td>
                                <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist5b_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5b_rolling" class="mobility_assist_rolling" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist5b_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5b_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist5b_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist5b_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist5b_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><!-- <td><input type="date" name="mobility_assist6_evaldate" class="form-control" ></td> -->
                              <td>
                                <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist6_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist6_rolling" class="mobility_assist_rolling" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist6_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist6_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist6_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist6_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist6_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          <tr>
                              <td>Complete Independence 7</td><!-- <td><input type="date" name="mobility_assist7_evaldate" class="form-control" ></td> -->
                              <td>
                                <!-- <input type="radio" class="mobility_assist_rolling" name="mobility_assist7_rolling" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist7_rolling" class="mobility_assist_rolling" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_rolling" class="mobility_assist_rolling">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_supine" name="mobility_assist7_supine" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist7_supine" class="mobility_assist_supine" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_supine" class="mobility_assist_supine">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="mobility_assist_stand" name="mobility_assist7_stand" value="Yes">Yes &nbsp;<input type="radio" name="mobility_assist7_stand" class="mobility_assist_stand" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="mobility_assist7_stand" class="mobility_assist_stand">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                          </tr>
                          
                      </table>
                  </div>
        </div><!-- / col-sm-8 -->
    </div> 
 

                        
                        <hr style="border-top: 2px solid #2B48B0;"/>
                          

                  <div class="row">
                          <div class="col-sm-12">
                            <label><h3><b>B. Transfers</b></h3></label>
                            <p style="font-size: 20px;">Transfer to wheelchair</p>
                        </div>
                    </div><br>
                    <div class="table-responsive">      
                        <table class="table table-striped">
                            <tr>
                              <th>FIM Levels</th><!-- <th>Date of eval</th> --><th>wheelchair/comode Chair</th><th>Car transfer</th>
                          </tr>
                          <tr>
                              <td>Total Assistance 1</td><!--<td><input type="date" name="transfer_assist1_evaldate" class="form-control" ></td>  -->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist1_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist1_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist1_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist1_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist1_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist1_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Maximal Assistance 2</td><!--<td><input type="date" name="transfer_assist2_evaldate" class="form-control" ></td>  -->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist2_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist2_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist2_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist2_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist2_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist2_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Moderate Assistance 3</td><!--<td><input type="date" name="transfer_assist3_evaldate" class="form-control" ></td>  -->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist3_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist3_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist3_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist3_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist3_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist3_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Minimal Assistance 4</td><!--<td><input type="date" name="transfer_assist4_evaldate" class="form-control" ></td>  -->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist4_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist4_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist4_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist4_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist4_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist4_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Contact  Guarding 5 B</td><!--<td><input type="date" name="transfer_assist5b_evaldate" class="form-control" ></td>  -->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist5b_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5b_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist5b_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist5b_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5b_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist5b_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Supervision or setup 5 A</td><!--<td><input type="date" name="transfer_assist5a_evaldate" class="form-control" ></td>  -->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist5a_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5a_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox"name="transfer_assist5a_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist5a_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist5a_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist5a_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Modified Independence 6</td><!--<td><input type="date" name="transfer_assist6_evaldate" class="form-control" ></td>-->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist6_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist6_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist6_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist6_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist6_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist6_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <tr>
                              <td>Complete Independence 7</td><!-- <td><input type="date" name="transfer_assist7_evaldate" class="form-control" ></td>-->
                              <td>
                                <!-- <input type="radio" class="transfer_assist_wheelchair" name="transfer_assist7_wheelchair" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist7_wheelchair" class="transfer_assist_wheelchair" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox"name="transfer_assist7_wheelchair" class="transfer_assist_wheelchair">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              <td>
                                <!-- <input type="radio" class="transfer_assist_car" name="transfer_assist7_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_assist7_car" class="transfer_assist_car" value="No">No -->
                                <label class="switch">
                                  <input type="checkbox" name="transfer_assist7_car" class="transfer_assist_car">
                                  <span class="slider round"></span>
                                </label>
                              </td>
                              
                          </tr>
                          <!-- <tr>
                              <td>Not Applicable</td><td><input type="date" name="transfer_notappl_evaldate" class="form-control"></td>
                              <td>
                                <input type="radio" class="" name="transfer_notappl_wheelchair" value="Yes" <?php $a=5; echo ($a == 5) ? 'checked' : '';  ?>>Yes &nbsp;<input type="radio" name="transfer_notappl_wheelchair" class="" value="No">No
                              </td>
                              <td>
                                <input type="radio" class="" name="transfer_notappl_car" value="Yes">Yes &nbsp;<input type="radio" name="transfer_notappl_car" class="" value="No">No
                              </td>
                              
                          </tr> -->    
                      </table>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Interpretation</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="fim_interpreter"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                      </div>

                
                <div class="row">
                          <div class="col-sm-12">
                            <label><h3><b>Balance Assessment</b></h3></label>
                            <p style="font-size: 20px;">Berg Balance Scale</p>
                        </div></div>
                      
                   <table class="table table-striped">
                            <tr>
                              <th>Balance Item</th><th class="berg_bal">Score (0-4)</th>
                          </tr>
                    
                          <tr>
                              <td><h5>Sitting unsupported</h5></td><td align="center">
                              <select name="berg_bal_sit_unsupport" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>sitting to standing</h5></td><td align="center">
                               
                              <select name="berg_bal_sit_tostand" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>standing to sitting</h5></td><td align="center">
                               
                              <select name="berg_bal_stand_tosit" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Transfers</h5></td><td align="center">
                                
                              <select name="berg_bal_transfer" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Standing unsupported</h5></td><td align="center">
                               
                              <select name="berg_bal_stand_unsupport" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Standing with eyes closed</h5></td><td align="center">
                               
                              <select name="berg_bal_stand_witheye" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Standing with feet together</h5></td><td align="center">
                                
                              <select name="berg_bal_stand_withfeet" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Tandem standing</h5></td><td align="center">
                               
                              <select name="berg_bal_tendem_stand" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Standing on one leg</h5></td><td align="center">
                                
                              <select name="berg_bal_stand_oneleg" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Turning trunk (feet fixed)</h5></td><td align="center">
                                
                              <select name="berg_bal_turning_trunk" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Retrieving objects from floor</h5></td><td align="center">
                               
                              <select name="berg_bal_object_fromfloor" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>
                         <tr>
                              <td><h5>Turning 360 degrees</h5></td><td align="center">
                                
                              <select name="berg_bal_turning_360_deg" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>

                         <tr>
                              <td><h5>Stool stepping</h5></td><td align="center">
                               
                              <select name="berg_bal_stool" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>

                         <tr>
                              <td><h5>Reaching forward while standing</h5></td><td align="center">
                               
                              <select name="berg_bal_reaching_forward" class="sel_berg_bal_score form-control" style="width:180px;">
                                 <option value="">-Select Score-</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                  <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                 </select>
                            </td>
                         </tr>

                         <tr>
                              <td><h5>Total Score</h5></td><td align="center">
                                <input type="text" name="berg_bal_total_score" id="berg_bal_total_score" class="form-control" style="width:180px;">
                            </td>
                         </tr>
                      </table>
                      <div class="row">
                      <div class="col-md-3">
                      <h3><b>Interpretation</b></h3>
                   <!-- <hr> -->
                   <h4 id="colorDiv1">0–20, wheelchair bound</h4>
                   <h4 id="colorDiv2">21–40, walking with assistance</h4>
                   <h4 id="colorDiv3">41–56, independent</h4>
                            </div>
                            </div>

                   <div class="row">
                      <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Interpretation Remark</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="berg_bal_interpreter_remark"> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                      </div>
                      <hr style="border-top: 2px solid #2B48B0;"/>
              
                    <div class="row">
                          <div class="col-sm-12">
                            <label><h3><b>Gait Assessment</b></h3></label>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Upload Video</label><span class="text-danger"></span></br>
                                    <input type="file" name="videofile" class="form-control input-sm" style="width: 250px;"/> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Gait Remark</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="gait_speed" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                            <?php if($this->uri->segment("6")=="respi"){ ?>
                              <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>1 Min Walk Test</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="walktest1min" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>3 Min Walk Test</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="walktest3min" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>5 Min Walk Test</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="walktest5min" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>6 Min Wlk Test</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="walktest" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="form-group wrapper-class">
                                    <label>6 Min Walk Test</label><span class="text-danger"></span></br>
                                    <select name="walktest" class="form-control input-sm">
                                      <option value="">- Select Walk Test -</option>
                                      <option value="O2 Saturation Post 1 Min">O2 Saturation Post 1 Min</option>
                                      <option value="3 Min">3 Min</option>
                                      <option value="5 Min">5 Min</option>
                                      
                                    </select>

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div> --><!-- /.col-md-3 -->
                        <?php } ?>

                            </div><!-- / row -->
                            <hr style="border-top: 2px solid #2B48B0;"/>

                            <div class="row mt-5">
                  <div class="col-sm-4">Recommendation for physiotherapy</div>
                  <div class="col-sm-4">
                    <input type="radio" class="chkradio" name="expert_rec" value="Yes">Yes &nbsp;
                    <input type="radio" name="expert_rec" class="chkradio" value="No">No</div>
                </div><br>

                <div class="container">
                <div class="row" id="treatment_section" style="display:none;">
                <div class="row">
                          
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

                            <!-- <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Gait speed</label><span class="text-danger"></span></br>
                                    <input type="text" class="form-control" name="gait_speed" value=""> 

                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div>
                            </div> --><!-- /.col-md-3 -->
                           
                            <div class="col-md-3">
                                <div class="form-group wrapper-class" >
                                    <label>Treatment Goals </label><span class="text-danger"></span></br>
                                    
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
                                      
                                      <option value="20 Min">20 Min</option>
                                      
                                      <option value="30 Min">30 Min</option>
                                      
                                      <option value="45 Min">45 Min</option>
                                      
                                      <option value="60 Min">60 Min</option>
                                      
                                    </select>
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->
                            
                            <!-- <div class="col-md-3">
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
                                </div>/.form-group wrapper-class
                            </div>/.col-md-3 -->

                         </div><!-- / row -->
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
                                    <input type="date" class="form-control" name="next_eval_date">
                                    <span class="text-danger error-text type_category_err"></span>                           
                                </div><!-- /.form-group wrapper-class -->
                            </div><!-- /.col-md-3 -->

                        </div><!-- / row -->
                    </div><!--/treatment section div-->
                            </div><br>
                   <div class="text-center">
                <button type="submit" class="btn btn-outline-primary hvr-rectangle-out" name="btnSave" value="Submit" style="width: 10%;">Submit</button>
                            </div>
              </form>

        </section>


    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

 <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>   
<script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/js/validation.js"></script> 
        <!-------------------------jquery cdn for work radio button------------------------>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
        <!-------------------------jquery cdn for work radio button------------------------>

        <!-------------------------jquery cdn for work multiple select dropdown------------------------>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
        <!-------------------------jquery cdn for work multiple select dropdown------------------------>
        

    <script>
        $(document).ready(function() {  
        $('#multiple-checkboxes').multiselect();  
    });  
    
        /*****************Start recommendation yes**********************/
            $(".chkradio") // select the radio by its id
                .change(function(){ // bind a function to the change event
                    if( $(this).is(":checked") ){ // check if the radio is checked
                        //var val = $(this).val(); // retrieve the value
                        var val=$("input[name='expert_rec']:checked").val();
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

        /*****************End recommendation yes**********************/

        /********************Start check one radio button allowed column wise************************/
  
        $(document).ready(function () {
          $('input.mobility_assist_rolling, input.mobility_assist_supine, input.mobility_assist_stand, input.transfer_assist_wheelchair, input.transfer_assist_car').click(function () {
            // Find all radio buttons in the clicked column and reset them
            var columnClass = $(this).attr('class');
            $('.' + columnClass).not(this).prop('checked', false);
          });
        });

       /***********************End check one radio button allowed column wise*************************/

       /*****************Start berg balance question calculate**********************/
      // $(".sel_berg_bal_score").change(function () {
      //   var val = Number($("select[name='berg_bal_sit_unsupport']").val()) + Number($("select[name='berg_bal_sit_tostand']").val()) + Number($("select[name='berg_bal_stand_tosit']").val()) + Number($("select[name='berg_bal_transfer']").val()) + Number($("select[name='berg_bal_stand_unsupport']").val()) + Number($("select[name='berg_bal_stand_witheye']").val()) + Number($("select[name='berg_bal_stand_withfeet']").val()) + Number($("select[name='berg_bal_tendem_stand']").val()) + Number($("select[name='berg_bal_stand_oneleg']").val()) + Number($("select[name='berg_bal_turning_trunk']").val()) + Number($("select[name='berg_bal_object_fromfloor']").val()) + Number($("select[name='berg_bal_turning_360_deg']").val()) + Number($("select[name='berg_bal_stool']").val()) + Number($("select[name='berg_bal_reaching_forward']").val());
      //   $("#berg_bal_total_score").val(val);
      // });
      /*****************End berg balance question calculate**********************/   
    </script>

    <script>
    /*****************Start berg balance question calculate**********************/
      $(".sel_berg_bal_score").change(function () {
      // Calculate the total score based on the selected values
      var val = Number($("select[name='berg_bal_sit_unsupport']").val()) +
                Number($("select[name='berg_bal_sit_tostand']").val()) +
                Number($("select[name='berg_bal_stand_tosit']").val()) +
                Number($("select[name='berg_bal_transfer']").val()) +
                Number($("select[name='berg_bal_stand_unsupport']").val()) +
                Number($("select[name='berg_bal_stand_witheye']").val()) +
                Number($("select[name='berg_bal_stand_withfeet']").val()) +
                Number($("select[name='berg_bal_tendem_stand']").val()) +
                Number($("select[name='berg_bal_stand_oneleg']").val()) +
                Number($("select[name='berg_bal_turning_trunk']").val()) +
                Number($("select[name='berg_bal_object_fromfloor']").val()) +
                Number($("select[name='berg_bal_turning_360_deg']").val()) +
                Number($("select[name='berg_bal_stool']").val()) +
                Number($("select[name='berg_bal_reaching_forward']").val());

      // Set the total score value
      $("#berg_bal_total_score").val(val);

      // Reset the color for all divs
      $('#colorDiv1, #colorDiv2, #colorDiv3').css('color', '');

      // Get the current value of the total score
      var inputValue = $("#berg_bal_total_score").val();

      // Check the range and set the color of the div accordingly
      if (inputValue >= 0 && inputValue <= 20) {
        $('#colorDiv1').css('color', 'red');
      } else if (inputValue >= 21 && inputValue <= 40) {
        $('#colorDiv2').css('color', '#FFBF00');
      } else if (inputValue >= 41 && inputValue <= 56) {
        $('#colorDiv3').css('color', '#03C03C');
      }
    });
/*****************End berg balance question calculate**********************/

/*****************Start highlight pain area on body img**********************/

      $('.shoulder-bullet,.elbow-bullet, .knee-bullet,.wrist-bullet,.cervical_spine-bullet,.thoracic_spine-bullet,.lumbar_spine-bullet,.pelvis-bullet,.hip-bullet,.ankle-bullet').hide();
       // Listen for changes in the select element
    $("select[name='ptn_tightness']").change(function () {
      updateBulletVisibility();
    });

    // Function to update bullet visibility based on selected options
    function updateBulletVisibility() {
      var selectedValue = $("select[name='ptn_tightness']").val();
      console.log(selectedValue);

      // Hide all bullets initially
      $('.shoulder-bullet,.elbow-bullet, .knee-bullet,.wrist-bullet,.cervical_spine-bullet,.thoracic_spine-bullet,.lumbar_spine-bullet,.pelvis-bullet,.hip-bullet,.ankle-bullet').hide();

      // Show the corresponding bullet based on selected options
      for (var i = 0; i < selectedValue.length; i++) {
         if (selectedValue[i] === 'Shoulder') {
          $('.shoulder-bullet').show();
        }
        if (selectedValue[i] === 'Elbow') {
          $('.elbow-bullet').show();
        }
        if (selectedValue[i] === 'Knee') {
          $('.knee-bullet').show();
        }
        if (selectedValue[i] === 'Shoulder') {
          $('.shoulder-bullet').show();
        }
        if (selectedValue[i] === 'Wrist') {
          $('.wrist-bullet').show();
        }
         if (selectedValue[i] === 'Cervical Spine') {
          $('.cervical_spine-bullet').show();
        }
        if (selectedValue[i] === 'Thoracic Spine') {
          $('.thoracic_spine-bullet').show();
        }
        if (selectedValue[i] === 'Lumbar Spine') {
          $('.lumbar_spine-bullet').show();
        }
        if (selectedValue[i] === 'Pelvis') {
          $('.pelvis-bullet').show();
        }
        if (selectedValue[i] === 'Hip') {
          $('.hip-bullet').show();
        }
        if (selectedValue[i] === 'Ankle') {
          $('.ankle-bullet').show();
        }
      }
    }
/*****************End highlight pain area on body img**********************/       
</script>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
      var container = document.getElementById('container');
      var image = document.querySelector('#container img');
      
      container.addEventListener('mousemove', function (event) {
        var containerRect = container.getBoundingClientRect();
        var mouseX = event.clientX - containerRect.left;
        var mouseY = event.clientY - containerRect.top;

        var percentX = mouseX / containerRect.width;
        var percentY = mouseY / containerRect.height;

        var moveX = (percentX - 0.5) * 200; /* Adjust the value to control panning */
        var moveY = (percentY - 0.5) * 100; /* Adjust the value to control panning */

        image.style.transform = 'scale(1.2) translate(' + moveX + 'px, ' + moveY + 'px)';
      });

      container.addEventListener('mouseleave', function () {
        image.style.transform = 'scale(1)'; /* Reset the transform on mouse leave */
      });
    });
  </script> -->
</body>
</html>