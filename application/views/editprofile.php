<!DOCTYPE html>
<html>

<head>

    <head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!----------BOOTSTRAP DATEPICKER----------------------------->
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/datepicker/css/datepicker.css">
        <!---------------------------------------------------------->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <?php require_once(APPPATH . 'views/include/responsive_design.php'); ?>
        <style>
            /* @media screen and (max-width: 320px) {
                .user_img {
                    width: 100%;
                    height: 140px;
                }
            }
            @media only screen and (max-width: 768px) {
                .user_img {
                    width: 100%;
                    height: 160px;
                }
            } */
          
@media screen and (max-width: 1025px) {
    .user_img {
        width: 100% !important;
        height: 160px;
    }
}


@media only screen and (min-width: 320px) and (max-width: 768px) {
    .user_img {
        width: 100%;
        height: 140px;
    }
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
            <section class="content-header">
                <h1>Edit My Profile</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Edit My Profile</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">


                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>myprofile/editprofile" onSubmit="return confirm('Are you sure you want to save?');">
                            <input class="form-control input-sm" name="userid" id="userid" type="hidden" style="width: 100px;" required readonly value="<?php echo $user->user_id; ?>">
                            <input type="hidden" name="username" value="<?php echo $user->username; ?>">
                            <div class="box">

                                <div class="box-footer clearfix">

                                    <button class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>

                                </div>

                                <div class="box-body table-responsive">


                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                                            <!--<li><a href="#tab_3" data-toggle="tab">Profile Picture</a></li>-->
                                        </ul>
                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab_1">

                                                <div class="row">

                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>First Name :</label>
                                                            <?php echo form_input('firstname', set_value('firstname', $user->firstname), 'id="firstname" class="form-control input-sm" placeholder="First Name" required'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Birthday :</label>
                                                            <?php echo form_input('birthday', set_value('birthday', $user->birthday), 'id="birthday" class="form-control input-sm" placeholder="Birthday" required'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Civil Status:</label>
                                                            <select name="civil_status" id="civil_status" class="form-control input-sm">
                                                                <option value="">- Civil Status -</option>
                                                                <?php
                                                                foreach ($civilStatus as $civilStatus) {
                                                                    if ($_POST['civil_status'] == $civilStatus->param_id || $user->civil_status == $civilStatus->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $civilStatus->param_id; ?>" <?php echo $selected; ?>><?php echo $civilStatus->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>Middle Name :</label>
                                                            <?php echo form_input('middlename', set_value('middlename', $user->middlename), 'id="middlename" class="form-control input-sm" placeholder="Middle Name" required'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Birth Place :</label>
                                                            <?php echo form_input('birthplace', set_value('birthplace', $user->birthplace), 'id="birthplace" class="form-control input-sm" placeholder="Birth Place"'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>Last Name:</label>
                                                            <?php echo form_input('lastname', set_value('lastname', $user->lastname), 'id="lastname" class="form-control input-sm" placeholder="Last Name" required'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Gender:</label>
                                                            <select name="gender" id="gender" class="form-control input-sm">
                                                                <option value="">- Gender -</option>
                                                                <?php
                                                                foreach ($gender as $gender) {
                                                                    if ($_POST['gender'] == $gender->param_id || $user->gender == $gender->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $gender->param_id; ?>" <?php echo $selected; ?>><?php echo $gender->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <h3 style="margin-left:10px;"><b>Change User Profile</b></h3>
                                                    <div class="col-md-2 col-sm-12">
                                                        <?php
                                                        if (!$user->picture) {
                                                            $picture = "no_avatar.gif";
                                                        } else {
                                                            $picture = $user->picture;
                                                        }
                                                        ?>
                                                        <img class="user_img" src="<?php echo base_url(); ?>public/user_picture/<?php echo $picture; ?>" class="img-rounded" width="150" height="150">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <input type="file" name="userfile" class="form-control change_img">

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_2">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>House No.:</label>
                                                            <?php echo form_input('noofhouse', set_value('noofhouse', $user->street), 'id="noofhouse" class="form-control input-sm" placeholder="No. of House"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Brgy./Subd. :</label>
                                                            <?php echo form_input('brgy', set_value('brgy', $user->subd_brgy), 'id="brgy" class="form-control input-sm" placeholder="Brgy./Subd."'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>Mobile No.:</label>
                                                            <?php echo form_input('mobile', set_value('mobile', $user->mobile_no), 'id="mobile" class="form-control input-sm" placeholder="Mobile No"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Phone No. :</label>
                                                            <?php echo form_input('phone', set_value('phone', $user->phone_no), 'id="phone" class="form-control input-sm" placeholder="Phone No."'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>Email Address :</label>
                                                            <?php echo form_input('email', set_value('email', $user->email_address), 'id="email" class="form-control input-sm" placeholder="Email Address" required'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>City/Province :</label>
                                                            <?php echo form_input('province', set_value('province', $user->province), 'id="province" class="form-control input-sm" placeholder="City/Province"'); ?>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>


            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->


    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>public/js/AdminLTE/app.js" type="text/javascript"></script>

    <!-- BDAY -->
    <script src="<?php echo base_url(); ?>public/datepicker/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function() {

            $('#birthday').datepicker({
                //format: "dd/mm/yyyy"
                format: "yyyy-mm-dd"
            });

        });
    </script>
    <!-- END BDAY -->
    <?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>

</html>