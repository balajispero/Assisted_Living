

<script language="javascript">
    setTimeout(function timeru(){$('.alert').fadeOut(1000)}, 3000);
</script> 
   
<link href="<?php echo base_url()?>public/css/hover-min.css" rel="stylesheet"  type="text/css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<link href="<?php echo base_url()?>public/css/hover-min.css" rel="stylesheet"  type="text/css" /> 

   <style>
    body{
        font-family:  Helvetica;
        font-size: 12px;
    }
    .navbar-nav > .user-menu > .dropdown-menu > li.user-header{
        background-color: #0097A7 !important;
        /* margin-top:-33px; */
        /* margin-left:20px; */
    }
    
    
    @media only screen and (max-width:768px) and (min-width:300px) {
         .m12{
            font-size: 15px;
            margin-top: -48px;
            margin-left: 35px;
            /* height: 30px; */
         }

         .dropmenu{
            margin-top: -52px;
            width: 100%;
            height: 40px;
            font-size: 12px;
         }
         .droplist{
          height: 55px !important;
          width: 100%;

         }
         .img-circle{
            height: 40px !important;
            width: 35% !important;
            /* margin-left: -145px !important; */
            margin-right: 170px;
         }
         .headname{
            font-size: 12px !important;
            margin-top: -30px !important;
            margin-left: 70px !important;
         }
         
        }
        
/* @media only screen and  (max-width:425px) { */
    @media only screen and (max-width:430px) and (min-width:320px) {
         /* .logo2{
            font-size: 18px;
            margin-top: -50px;
            margin-left: 35px;
         } */
         .dropmenu{
            margin-top: -50px;
            width: 100%;
            height: 40px;
            font-size: 12px;
            background-color: hidden;
         }
         .droplist{
          height: 57px !important;
          width: 100%;

         }
         
         .img-circle {
            height: 40px !important;    
            width: 25% !important;
            /* margin-left: -105px !important; */
            margin-right: 70px;
        }
         .headname{
            font-size: 12px !important;
            margin-top: -30px !important;
            margin-left: 50px;
         }
         img.img-circle {
            margin-left: -104px !important;
        }
        .logo2{
	float: left;
	font-size: 23px !important;
	line-height: 50px !important;
	
	padding: 0 10px;
	width: 500px;
	font-family: 'Calibri';
	font-weight: 500;
	//height: 50px;
	display: block !important;
	color: #f9f9f9 !important;
	margin-top: -46px !important;
    
}
       
        .ml2 {
                    
                    margin-top: -5px !important;
                    margin-left: 25px;
                    font-size: 18px;
                    }
        }
        
        .bg_color{
            /* background: linear-gradient(90deg, #09A3D5 0.58%, #3B4BDF 100.03%) !important; */
               background-color: #07B5BC;

        }
        .pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
             background-color:#2B48B0; 
            border-color: #428bca;
        }
        .search_field{
                    width: 143px !important;    
                }
                .box .box-header > .box-tools {
                    padding: 11px 10px 5px 5px !important;
                    }
                    .user-panel {
                        padding: 5px;
                    }
                    .user-panel > .info {
                        font-weight: 500;
                        padding: 5px 5px 5px 10px;
                        font-size: 14px;
                        line-height: 1;
                    }


                    .ml2 {
                    font-weight: 550;
                    /* font-size: 3.5em; */
                   
                    }

                   .ml2 .letter {
                   display: inline-block;
                
                   /* line-height: 1em; */
                      }
                      .hvr-rectangle-out{
      border-color: #2B48B0;
      border-width: 100%;
      color: #2B48B0;
     }
                      .hvr-shutter-in-vertical{
                        /* background-color: #fff; */
                        color: #fff;
                        border-color: #2B48B0;
                      }
                    
                      .hvr-shutter-in-vertical:before{
                        /*background: linear-gradient(90deg, #09A3D5 0.58%, #3B4BDF 100.03%) !important;*/
                        background-color: #0097A7;
                      }
                      .hvr-shutter-in-vertical:hover{
                        background-color: #fff!important;
                        color:#2B48B0!important;
                      }
                      .content-header
                      {
                      margin-top: 10px;
                      background-color: #ecf0fa !important;
                      padding: 7px 5px;
                      border-radius: 5px;
                      box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
                    }

             .pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #0097A7;
    border-color: #428bca;
}


   
   </style>

<header class="header" style="background: url('<?php echo base_url()?>public/img/new/header_bar_bg_01.jpg') repeat-x; background-size: 100% 100%; border-bottom:1px solid #CCC">
    <a href="#" class="logo" style="background-color: white;">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        <div class="logo-pms"><img src="<?php echo base_url()?>public/company_logo/spero-final-logo2.png" width="50%%" height="45" ></div>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation" style="background-color:#0097A7; background-size: 100% 100%; border-bottom:1px solid #CCC">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="logo2"> 
                <!-- <?php echo "Assisted Living"?> -->
                <p class="ml2">Assisted Living Facility</p>

        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                
               <!-- <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-success">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 1 messages</li>
                        <li>
                          
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../img/avatar3.png" class="img-circle" alt="User Image"/>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>-->
                
               <!-- <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>-->
                
                <!--<li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                           
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>-->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu dropmenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span><?php echo $userInfo->firstname." ".$userInfo->lastname;?><i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header droplist">
                            <?php if($userInfo->picture == ""){?>
                    	<img src="<?php echo base_url()?>public/user_picture/user_img.jpg" class="img-circle" alt="User Image" />
                    <?php }else{?>
                    	<img src="<?php echo base_url()?>public/user_picture/<?php echo $userInfo->picture;?>" class="img-circle" alt="User Image" />
                    <?php }?>
                            <p class="headname">
                                <?php echo $userInfo->firstname." ".$userInfo->lastname;?> <br /> <?php echo $userInfo->designation;?>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url()?>myprofile" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url()?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>





<script type="text/javascript">
function closeAd(id)
{
    $('#' + id).remove();
}
  // Wrap every letter in a span
  var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
