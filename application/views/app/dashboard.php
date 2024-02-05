<!DOCTYPE html>
<html>

<head>

  <head>

    <meta charset="UTF-8">
    <title>Assisted Living</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
      .dash {
        margin-left: 20px;
        color: grey;
      }

      .fa-home {
        background-color: #07B5BC;
        color: white;
        padding: 6px;
        font-size: 18px;
        border-radius: 5px;
      }

      .chart-block {

        height: 170px;
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
      <i class="fa-solid fa-arrow-turn-down-left"></i>
        <h3 class="dash"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;<b>Dashboard</b></h3>
        <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>-->
      </section>
      <!--for dashboard count div-->
      <!-- <section class="content">

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
</section>-->

<!--Start for dashboard count div-->
      <div class="main-panel">
        <!-- <div class="container"> -->
        <div class="content-wrapper">
          <div class="row  row1">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <h4 class="font-weight-bold mb-1"><b> <a href="<?=base_url()?>app/dashboard/dashboard_detail/admit_member" style="color:#FFF;">Total Member</a></b>
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-2" id="inc_count"></h2>
                  <h6 class="card-text">Count 50%</h6>
                </div>
              </div>
            </div>
            </a>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <h4 class="font-weight-bold mb-2"><b> <a href="<?=base_url()?>app/dashboard/new_member_detail/today_member" style="color:#FFF;">Today's New Member</a></b>
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-2" id="today_reg_ptn_cnt">0</h2>
                  <h6 class="card-text">Count 0%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <h4 class="font-weight-bold mb-2"><b><a href="<?=base_url()?>app/dashboard/vacant_room_detail/room_vacant" style="color:#FFF;">Vacant Room Beds</a></b>
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-2" id="vacant_room_cnt"></h2>
                  <h6 class="card-text">Available Rooms 60%</h6>
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->


          <div class="row">
            <div class="col-md-7 col-sm-12 col-lg-7">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <h5 class=" head"><b>Room Status:</b></h5>
                    <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                  </div>
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>

            <div class="col-md-5 col-sm-12 col-lg-5">
              <div class="card">
                <div class="card-body">
                  <h5 class="head"><b>Room Types:</b></h5>
                  <div class="chart-block">
                    <svg viewBox="-400 -400 1000 1000" xmlns="http://www.w3.org/2000/svg" width="500">
                      <g class="pie-slice" aria-describedby="slice1">
                        <circle r="300" class="c1">
                          <animate attributeName="stroke-dasharray" dur="3s" values="0 314 628 942" begin="indefinite" fill="freeze" />
                        </circle>
                        <title id="slice1">Private Room</title>
                        <text x="0" y="-250" text-anchor="middle" fill="black">Slice 1</text>
                      </g>
                       
                      <g class="pie-slice" aria-describedby="slice2">
                        <circle r="300" class="c2">
                          <animate attributeName="stroke-dasharray" dur="3s" values="0 314 628 942" begin="indefinite" fill="freeze" />
                        </circle>
                        <title id="slice2">Semi-Private Room</title>
                      </g>

                      <g class="pie-slice" aria-describedby="slice3">
                        <circle r="300" class="c3">
                          <animate attributeName="stroke-dasharray" dur="3s" values="0 314 628 942" begin="indefinite" fill="freeze" />
                        </circle>
                        <title id="slice3">Suit Room</title>
                      </g>
                    </svg>

                    <div class="tooltip" id="slice1">•Private Room</div>
                    <div class="tooltip" id="slice2">Semi-Private Room</div>
                    <div class="tooltip" id="slice3">Suit Room</div>
                    

                  </div>
                  <div class="text-center">
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="color: #5C6BC0;"></i>&nbsp;Private Room</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="color: #AB47BC;"></i>&nbsp;Semi-Private Room</div>
                    <div><i class="fa fa-circle" aria-hidden="true" style="color: #F06292;"></i>&nbsp;Suit Room</div>
                  </div>
                </div>
              </div>
            </div>

            <?php
            $vacantRoomData =json_encode([$results_data[0]['vacant_room_cnt'],$results_data[0]['vacant_room_cnt'],$results_data[0]['vacant_room_cnt'],$results_data[0]['vacant_room_cnt'],$results_data[0]['vacant_room_cnt'],$results_data[0]['vacant_room_cnt'],$results_data[0]['vacant_room_cnt']]);
  
            $allocatedRoomData = json_encode([$results_data[0]['allocated_room_cnt'],$results_data[0]['allocated_room_cnt'],$results_data[0]['allocated_room_cnt'],$results_data[0]['allocated_room_cnt'],$results_data[0]['allocated_room_cnt'],$results_data[0]['allocated_room_cnt'],$results_data[0]['allocated_room_cnt']]);
          ?>

    </aside><!-- /.right-side -->

  </div><!-- ./wrapper -->
 




  <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>public/js/AdminLTE/app.js" type="text/javascript"></script>



  <script type="text/javascript">
    $(document).ready(function() {

      doctorOUTF();
      doctorINF();

    });

    function doctorOUTF() {
      $.ajax({
        url: "<?php echo base_url() ?>general/getDoctorOUT",
        type: "POST",
        success: function(result) {
          $('#doctorOUT').html(result);
        },
        beforeSend: function() {
          $('#doctorOUT').html("<center><img src='../public/img/ajax-loader.gif'></center>");
        }
      });
    }

    function doctorINF() {
      $.ajax({
        url: "<?php echo base_url() ?>general/getDoctorIN",
        type: "POST",
        success: function(result) {
          $('#doctorIN').html(result);
        },
        beforeSend: function() {
          $('#doctorIN').html("<center><img src='../public/img/ajax-loader.gif'></center>");
        }
      });
    }

    function doctorProcess(id, status) {
      if (confirm('Are you sure you want the doctor ' + status + '?')) {
        $.ajax({
          url: "<?php echo base_url() ?>general/procDocAvail/" + id + "/" + status,
          type: "POST",
          success: function() {
            alert('Doctor is ' + status);
            doctorINF()
            doctorOUTF()
          },
          beforeSend: function() {
            $('#doctor' + status).html("<center><img src='../public/img/ajax-loader.gif'></center>");
          }
        });
        return true;
      } else {
        return false;
      }

    }
  </script>
  <script>
    function get_ipd_ptn_cnt() {
      if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

          document.getElementById("inc_count").innerHTML = xmlhttp.responseText;
        }
      }

      xmlhttp.open("GET", "<?php echo base_url(); ?>app/dashboard/get_ipd_ptn_cnt/", true);
      xmlhttp.send();

    }
    get_ipd_ptn_cnt();

    function today_reg_ptn_cnt() {
      if (window.XMLHttpRequest) {
        xmlhttp1 = new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp1.onreadystatechange = function() {
        if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
          document.getElementById("today_reg_ptn_cnt").innerHTML = xmlhttp1.responseText;
        }
      }

      xmlhttp1.open("GET", "<?php echo base_url(); ?>app/dashboard/today_reg_ptn_cnt/", true);
      xmlhttp1.send();

    }
    today_reg_ptn_cnt();

    function vacant_room_cnt() {
      if (window.XMLHttpRequest) {
        xmlhttp2 = new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp2.onreadystatechange = function() {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {

          document.getElementById("vacant_room_cnt").innerHTML = xmlhttp2.responseText;
        }
      }

      xmlhttp2.open("GET", "<?php echo base_url(); ?>app/dashboard/vacant_room_cnt/", true);
      xmlhttp2.send();

    }
    vacant_room_cnt();


    $(document).ready(function() {
      pieInit()
    });

    function pieInit() {
      $(".pie-slice").hide().fadeIn("slow").find("animate").attr("begin", "0s");

    }

    var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["M", "T", "W", "T", "F", "S", "S"],
    datasets: [{
      label: 'Vacant Room Beds',
      /*data: [12, 19, 3, 17, 28, 24, 7],*/
      data: <?php echo $vacantRoomData; ?>,
      backgroundColor: "#19bea6"
    }, {
      label: 'Allocated Room Beds',
      /*data: [30, 29, 5, 5, 20, 3, 10],*/
      data: <?php echo $allocatedRoomData; ?>,
      backgroundColor: "#90caf9"
    }]
  }
});
  </script>
  <!-- <script>
  var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Density of Planet (kg/m3)',
  data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderColor: 'rgba(0, 99, 132, 1)',
  yAxisID: "y-axis-density"
};
 
var gravityData = {
  label: 'Gravity of Planet (m/s2)',
  data: [3.7, 8.9, 9.8, 3.7, 23.1, 9.0, 8.7, 11.0],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderColor: 'rgba(99, 132, 0, 1)',
  yAxisID: "y-axis-gravity"
};
 
var planetData = {
  labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
  datasets: [densityData, gravityData]
};
 
var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};
 
var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});


</script> -->

</body>

</html>