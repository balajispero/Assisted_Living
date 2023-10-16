<!DOCTYPE html>
<html>
<head>
    <head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


 <!-- <meta content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
 <meta content="free live demo hms,free live demo Assisted Living,live demo,demo,live,Assisted Living live demo,Assisted Living free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,Assisted Living,hospital,management,system,solution,online demo,demo Assisted Living,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
  <meta content="Jayson Sarino" name="author">

  <meta property="og:site_name" content="Assisted Living Free Trial Demo">
  <meta property="og:title" content="Assisted Living">
  <meta property="og:description" content="Live Demo Assisted Living,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
  <!--<meta property="og:url" content="http://hms-demo.jaysonsarino.com/"> -->

  <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  
  <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url();?>public/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

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
            .btn.btn-primary {
                background: linear-gradient(90deg, #09A3D5 0.58%, #3B4BDF 100.03%);

            /* border-color: #367fa9; */
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
                <!--for dashboard count div-->
          <!--       <section class="content">

                    <div class="row">

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card bg-info text-white shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Available Member</div>
                                    <div class="h5 mb-0 font-weight-bold text-white" id="inc_count">1</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-male fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card bg-info text-white shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Register Member Today</div>
                            <div class="h5 mb-0 font-weight-bold text-white" id="today_reg_ptn_cnt">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-male fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card bg-info text-white shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Available Room bed</div>
                            <div class="h5 mb-0 font-weight-bold text-white" id="vacant_room_cnt">1</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-male fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->   
<!--Start for dashboard count div-->
<section class="content">

    <div class="row">

        <section class="col-lg-12 connectedSortable">

            <!--Start of Patient Visited-->
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
                                                                 <div class="box-footer">
                                                                 </div>
                                                             </div>
                                                             <!--End of Patient Visited-->
                                                         </section>
                                                     </div>
                                                 </section>

                                                 <!-- Main content -->

                                                 <div class="row">
                                                  <section class="col-lg-6 connectedSortable">

                                                   <!--Start of New Member-->
                                                   <div class="box box-primary" id="loading-example">
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
                                       </div>
                                       <!--End of New Member-->

                                   </section>

                                   <section class="col-lg-6 connectedSortable">

                                       <!--Start of Patient Visited-->
                                       <div class="box box-primary" id="loading-example">
                                           <div class="box-header">
                                               <div class="pull-right box-tools">
                                                <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                                            </div>
                                            <i class="fa fa-male"></i>
                                            <h3 class="box-title">Rooms Status</h3>
                                        </div>
                                        <div class="box-body no-padding">
                                           <div class="table-responsive">
                                               <table class="table table-hover">
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
                                   </div>
                               </div>
                               <div class="box-footer">
                               </div>
                           </div>
                           <!--End of Patient Visited-->

                       </section>
                   </div>






                   <!-- Main content -->
                   <?php if($hasAccesstoDoctorAvail){?>   
                       <div class="row">
                        <section class="col-lg-6 connectedSortable">

                            <!--Start of New Member-->
                            <div class="box box-primary" id="loading-example">
                                <div class="box-header">
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                    </div>
                                    <i class="fa fa-user-md"></i>

                                    <h3 class="box-title">Doctor's IN</h3>
                                </div>
                                <div class="box-body no-padding">
                                    <div class="table-responsive" style="height:350px; overflow-y:scroll;">
                                        <div id="doctorIN"></div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                            <!--End of New Member-->

                        </section>

                        <section class="col-lg-6 connectedSortable">

                            <!--Start of Patient Visited-->
                            <div class="box box-primary" id="loading-example">
                                <div class="box-header">
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        
                                    </div>
                                    <i class="fa fa-user-md"></i>
                                    <h3 class="box-title">Doctor's OUT</h3>
                                </div>
                                <div class="box-body no-padding">
                                    <div class="table-responsive" style="height:350px; overflow-y:scroll;">
                                        <div id="doctorOUT"></div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                            <!--End of Patient Visited-->

                        </section>
                    </div>
                <?php }?>







            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        
        <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>

        <script type="text/javascript">
           $(document).ready(function(){

            doctorOUTF();
            doctorINF();

        });

           function doctorOUTF()
           {
            $.ajax({
                url: "<?php echo base_url()?>general/getDoctorOUT",
                type: "POST",
                success: function(result){
                    $('#doctorOUT').html(result);
                },beforeSend: function(){
                    $('#doctorOUT').html("<center><img src='../public/img/ajax-loader.gif'></center>");
                }
            });
        }

        function doctorINF()
        {
            $.ajax({
                url: "<?php echo base_url()?>general/getDoctorIN",
                type: "POST",
                success: function(result){
                    $('#doctorIN').html(result);
                },beforeSend: function(){
                    $('#doctorIN').html("<center><img src='../public/img/ajax-loader.gif'></center>");
                }
            });
        }

        function doctorProcess(id,status)
        {
            if(confirm('Are you sure you want the doctor ' + status + '?'))
            {
                $.ajax({
                    url: "<?php echo base_url()?>general/procDocAvail/" + id + "/" + status,
                    type: "POST",
                    success: function()
                    {
                        alert('Doctor is ' + status);
                        doctorINF()
                        doctorOUTF()
                    },
                    beforeSend: function(){
                        $('#doctor' + status).html("<center><img src='../public/img/ajax-loader.gif'></center>");
                    }
                });
                return true;
            }
            else
            {
                return false;
            }

        }
    </script>
    <script>
    

    function get_ipd_ptn_cnt()
        {
        if (window.XMLHttpRequest)
          {
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            
            document.getElementById("inc_count").innerHTML=xmlhttp.responseText;
            }
          }

        xmlhttp.open("GET","<?php echo base_url();?>app/dashboard/get_ipd_ptn_cnt/",true);
        xmlhttp.send();

        }
        get_ipd_ptn_cnt();

        function today_reg_ptn_cnt()
        {
        if (window.XMLHttpRequest)
          {
          xmlhttp1=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp1.onreadystatechange=function()
          {
          if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
            {
            
            document.getElementById("today_reg_ptn_cnt").innerHTML=xmlhttp1.responseText;
            }
          }

        xmlhttp1.open("GET","<?php echo base_url();?>app/dashboard/today_reg_ptn_cnt/",true);
        xmlhttp1.send();

        }
        today_reg_ptn_cnt();

        function vacant_room_cnt()
        {
        if (window.XMLHttpRequest)
          {
          xmlhttp2=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp2.onreadystatechange=function()
          {
          if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
            {
            
            document.getElementById("vacant_room_cnt").innerHTML=xmlhttp2.responseText;
            }
          }

        xmlhttp2.open("GET","<?php echo base_url();?>app/dashboard/vacant_room_cnt/",true);
        xmlhttp2.send();

        }
        vacant_room_cnt();
</script>

</body>
</html>