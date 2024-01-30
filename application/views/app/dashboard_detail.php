

<!DOCTYPE html>
<html>

<head>

  <head>

    <meta charset="UTF-8">
    <title>Assisted Living</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- <meta content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
 <meta content="free live demo hms,free live demo Assisted Living,live demo,demo,live,Assisted Living live demo,Assisted Living free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,Assisted Living,hospital,management,system,solution,online demo,demo Assisted Living,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
  <meta content="Jayson Sarino" name="author">

  <meta property="og:site_name" content="Assisted Living Free Trial Demo">
  <meta property="og:title" content="Assisted Living">
  <meta property="og:description" content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
    <!--<meta property="og:url" content="http://hms-demo.jaysonsarino.com/"> -->

    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>public/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" type="text/css">


    <!-- <link rel="stylesheet" href="public/css/materialdesignicons.min.css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    <!--Start for dashboard count cdn-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->
    <!--End for dashboard count cdn-->
    <style>
      body {
        font-family: Helvetica;
      }

      .btn.btn-primary {
        background: linear-gradient(90deg, #09A3D5 0.58%, #3B4BDF 100.03%);

        /* border-color: #367fa9; */
      }

      .content-header1 {
        /* margin-top: 10px; */
        /* background-color: #ecf0fa !important; */
        padding: 1px;
        border-radius: 5px;
        box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
      }

      .dash {
        margin-left: 20px;
        color: grey !important;
      }

      .fa-home {
        background-color: #07B5BC;
        color: white;
        padding: 6px;
        font-size: 18px;
        border-radius: 5px;
      }

      .chart-block {

        height: 200px;
        display: flex;
      }

      .chart-block circle {
        transform-origin: center;
        transform-box: fill-box;
        stroke-width: 180;
        fill: none;
        stroke-dasharray: 0 1000;
        transition: all 0.3s;
        cursor: pointer;
      }

      .chart-block circle:hover {
        stroke-width: 250;
        transition: all 0.3s;
      }

      .chart-block circle.active {
        stroke-width: 250;
      }

      .c1 {
        transform: rotate(-150deg);
        stroke: #5C6BC0;
      }


      .c2 {
        transform: rotate(-270deg);
        stroke: #AB47BC;
      }

      .c3 {
        transform: rotate(-30deg);
        stroke: #F06292;
      }

      .head {
        color: grey;
        margin-left: 20px;
      }


      .pie-slice:hover::after {
        content: attr(aria-describedby);
        position: absolute;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px;
        border-radius: 5px;
        font-size: 12px;
        margin-top: -20px;
        margin-left: 10px;
        z-index: 1;
      }

      .pie-slice {
        position: relative;
      }

      .tooltip {
        color: #5C6BC0;
        display: block;
      }
    </style>
  </head>
  <div style="position:fixed; bottom: 0; right: 0; width: 67%; border: 2px solid #CCC; top:200px; z-index:1001; background-color: #FFF; display:none;" id="ad2">
    <span style="right: 0; position: fixed; cursor: pointer; z-index:1002" onclick="closeAd('ad2')">CLOSE</span>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Payroll Management System -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="4635770289" data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Assisted Living -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="3101991489" data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Grading System -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="6132191885" data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- HMS Website -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3182624105910612" data-ad-slot="1562391480" data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>

<body class="skin-blue">
  <!-- header logo: style can be found in header.less -->
  <?php require_once(APPPATH . 'views/include/header.php'); ?>

  <div class="wrapper row-offcanvas row-offcanvas-left">

    <?php require_once(APPPATH . 'views/include/sidebar.php'); ?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
      <!-- Content Header (Page header) -->
      <section class="content-header1">
         <!-- &nbsp; &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 20px;"></i> -->
        <h3 class="dash"><a href="<?=base_url()?>app/dashboard"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 20px; color:black;"></i></a>&nbsp; &nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i>&nbsp;<b>Dashboard</b></h3>
        <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>-->
      </section>
<section class="content" style="background-color: #fff;">

    <div class="row" id="membersdetail" >
        <?php
            if($members=="admit_member"){
                ?>
        <div class="col-md-12">
                    
                  <div class="box">
                   <div class="box-body table-responsive no-padding">
                       <?php echo $message;?>
                       
                       <?php echo $table; ?>
                       
                   </div>
                   <div class="box-footer clearfix">
                       <?php echo $pagination; ?>
                   </div>
               </div>
           </div>
       <?php } ?>
       <?php
            if($members=="today_member"){
                ?>
        <div class="col-md-12">
                    
                  <div class="box">
                   <div class="box-body table-responsive no-padding">
                       <?php echo $message;?>
                       
                       <?php echo $table; ?>
                       
                   </div>
                   <div class="box-footer clearfix">
                       <?php echo $pagination; ?>
                   </div>
               </div>
           </div>
       <?php } ?>
       <?php
             if($members=="room_vacant"){
                ?>
        <div class="col-md-12">
                    
                  <div class="box">
                   <div class="box-body table-responsive no-padding">
                       <?php echo $message;?>
                       
                       <?php echo $table; ?>
                       
                   </div>
                   <div class="box-footer clearfix">
                       <?php echo $pagination; ?>
                   </div>
               </div>
           </div>
       <?php } ?>

        <section class="col-lg-12 connectedSortable">



               
            <!--Start of Patient Visited-->
           
            <?php
            if($members=="admit_member"){
                ?>
            <div class="box box-primary" id="loading-example">
                <div class="box-header">
                    <div class="pull-right box-tools">
                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                    </div>
            
        
                    <i class="fa fa-male"></i>
                    <h3 class="box-title">Member's Details</h3>
                </div>
                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Member No.</th>
                                    <th>Member Name</th>
                                    <th>Entry Date</th>
                                    <th>Consultant Doctor</th>
                                    <th>Room Type</th>
                                    <th>Floor</th>
                                    <th>Allocated Room</th>
                                    <th>Allocated Bed</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($getTodayAppointment)){ foreach($getTodayAppointment as $getTodayAppointment){?>
                                    <tr>
                                     <td><?php if (($getTodayAppointment->patient_no) == null){
                                         echo "NA";}else{?>
                                             <a class="view-data" title="View"  href="<?php echo base_url(); ?>app/dashboard/view_details/<?php echo $getTodayAppointment->patient_no; ?>/<?php echo $getTodayAppointment->IO_ID; ?>"><?php echo $getTodayAppointment->patient_no; ?></a>
                                             <?php
                                         }?></td>
                                         <td><?php if (($getTodayAppointment->middlename ) == null) {
                                             echo "NA";}else
                                             { echo $getTodayAppointment->middlename ; } ?></td>
                                             <td><?php if (($getTodayAppointment->date_entry) == null){
                                                 echo "NA";}else{
                                                     echo $getTodayAppointment->date_entry; }?></td>
                                                     <td><?php if (($getTodayAppointment->firstname && $getTodayAppointment->lastname) == null) {
                                                         echo "NA";}else
                                                         { echo $getTodayAppointment->cValue. " " .$getTodayAppointment->firstname . " " . $getTodayAppointment->lastname; } ?></td>
                                                         <td><?php if (($getTodayAppointment->category_name) == null){
                                                             echo "NA";}else{
                                                                 echo $getTodayAppointment->category_name;}?></td>
                                                                 <td><?php if (($getTodayAppointment->floor) == null){
                                                                     echo "NA";}else{
                                                                         echo $getTodayAppointment->floor;}?></td>
                                                                         <td><?php if (($getTodayAppointment->room_name) == null){
                                                                             echo "NA";}else{
                                                                                 echo $getTodayAppointment->room_name;}?></td>
                                                                                 <td><?php if(($getTodayAppointment->bed_name) == null){
                                                                                     echo "NA";}else{
                                                                                         echo $getTodayAppointment->bed_name;}?></td>
                                                                                         <td><?php echo $getTodayAppointment->nStatus ?></td>
                                                                                     </tr>
                                                                                 <?php }}?>
                                                                             </tbody>
                                                                         </table>
                                                                     </div>
                                                                 </div>
                                                                 <div class="box-footer clearfix">
                                                                 <!-- <?php echo $pagination5; ?> -->
                                                                 </div>
                                                             </div>
                                                             
                                                            <?php } ?>
                                                                        
                                                             <!--End of Patient Visited-->
                                                         </section>
                                                     </div>
                                                 </section>

                                                 <!-- Main content -->

                                                 <div class="row" id="newmember" style="background-color: #fff; margin-left:30px;">
                                                  <section class="col-lg-7 connectedSortable">
                                                  <?php
                                                                               if($members=="today_member"){
                                                                                   ?>
                                                   <!--Start of New Member-->
                                                   <!-- <div class="box box-primary" id="loading-example">
                                                       <div class="box-header">
                                                           <div class="pull-right box-tools">
                                                            <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                                                        </div>
                                                        <i class="fa fa-male"></i>
                                                        <h3 class="box-title">New Member</h3>
                                                    </div>
                                                    <div class="box-body no-padding">
                                                       <div class="table-responsive">
                                                           <table class="table table-hover">
                                                            <thead>
                                                               <tr>
                                                                   <th>Member No.</th>
                                                                   <th>Member Name</th>
                                                                   <th>Date</th>
                                                                   <th>Age</th>
                                                               </tr>
                                                           </thead>
                                                           <tbody>
                                                               <?php foreach($latest_patient as $latest_patient){?>
                                                                <tr>
                                                                   <td><?php echo $latest_patient->patient_no?></td>
                                                                   <td><?php echo $latest_patient->patient?></td>
                                                                   <td><?php echo date("M d, Y", strtotime($latest_patient->date_entry2));?></td>
                                                                   <td><?php echo $latest_patient->age?></td>
                                                               </tr>
                                                           <?php }?>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                           <div class="box-footer">
                                           </div>
                                       </div> -->
                                       <table class="table">
                                       <thead>
                                       <tr>
                                                                   <th>Member No.</th>
                                                                   <th>Member Name</th>
                                                                   <th>Date</th>
                                                                   <th>Age</th>
                                                               </tr>
                                       </thead>
                                       <tbody>
                                       <?php foreach($latest_patient as $latest_patient){?>
                                                                <tr>
                                                                   <td><?php echo $latest_patient->patient_no?></td>
                                                                   <td><?php echo $latest_patient->patient?></td>
                                                                   <td><?php echo date("M d, Y", strtotime($latest_patient->date_entry2));?></td>
                                                                   <td><?php echo $latest_patient->age?></td>
                                                               </tr>
                                                           <?php }?>
                                       </tbody>
                                       </table>
                                       <!--End of New Member-->

                                      <?php } ?>
                                   </section>

                                   <section class="col-lg-6 connectedSortable">
                                   <?php
                                       if($members=="room_vacant"){
                                           ?>
                                    
                                             <table class="table">
                                                  <thead>
                                                  <tr>
                                                       <th>Bed No.</th>
                                                       <th>Room Type</th>
                                                       <th>Floor</th>
                                                       <th>Status</th>
                                                       <th>Rate</th>
                                                   </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php if (isset($latest_visited_patient)) { foreach($latest_visited_patient as $latest_visited_patient){?>
                                                    <tr>
                                                       <td><?php echo $latest_visited_patient->bed_name?></td>
                                                       <td><?php echo $latest_visited_patient->category_name?></td>
                                                       <td><?php echo $latest_visited_patient->floor?></td>
                                                       <td><?php echo $latest_visited_patient->nStatus?></td>
                                                       <td><?php echo $latest_visited_patient->room_rates?></td>
                                                   </tr>
                                               <?php }}?>
                                                   </tbody>
                                                 </table>
                           <!--End of Patient Visited-->
<?php } ?>
                       </section>
                   </div>






                   <!-- Main content -->
                   

                <script src="<?php echo base_url(); ?>public/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>public/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>public/js/dashboard.js"></script>
  <script src="<?php echo base_url(); ?>public/js/chart.js"></script>




  <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>public/js/AdminLTE/app.js" type="text/javascript"></script>



  

</body>

</html>