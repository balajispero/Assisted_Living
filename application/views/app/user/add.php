<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Assisted Living</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
 

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <?php require_once(APPPATH.'views/include/responsive_design.php');?>
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
                    <h1>Add User</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">User Management</a></li>
                        <li class="active">Add User</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    <form role="form" method="post" action="<?php echo base_url()?>app/user/save" onSubmit="return confirm('Are you sure you want to save?');">    
                    	 <div class="box">
                         		
                         		 <div class="box-footer clearfix">
                            	
                                            <a href="<?php echo base_url();?>app/user" class="btn btn-default">Cancel</a>
                                            <button class="btn btn-primary bg_color" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                 
                            </div>
                            
                        	<div class="box-body table-responsive">
                            	
                                
                                		<div class="nav-tabs-custom">
                                        	<ul class="nav nav-tabs">
                                				<li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                                    			<li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                                			</ul>
                                            <div class="tab-content">
                                            	<div class="tab-pane active" id="tab_1">
                                                	<table cellpadding="3" cellspacing="3" width="100%">
                                                    <tr>
                                                    	<td colspan="2">Required fields = <font color="#FF0000">*</font></td>
                                                    </tr>
                                                    <tR>
                                                    	<td colspan="2">
                                                        <?php echo validation_errors(); ?>    
                                                        </td>
                                                    </tR>
                                                    <?php
													$userID = $lastUserID->cValue;
													$userID2 = $lastUserID->cValue;
													if(strlen($userID) == 1){
														$userID = "0000".$userID;
													}else if(strlen($userID) == 2){
														$userID = "000".$userID;
													}else if(strlen($userID) == 3){
														$userID = "00".$userID;
													}else if(strlen($userID) == 4){
														$userID = "0".$userID;
													}else if(strlen($userID) == 5){
														$userID = $userID;
													}
													?>
                                                    <input type="hidden" name="userID2" value="<?php echo $userID2;?>">
                                                </table>
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                        <p>Required fields = <font color="#FF0000">*</font>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group input-box">
                                                            <label>User ID:</label>
                                                            <input class="form-control" name="userid" id="userid" type="text" required readonly value="<?php echo $userID; ?>">
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Middle Name <font color="#FF0000">*</font>:</label>
                                                            <?php echo form_input('middlename', set_value('middlename'), 'id="middlename" class="form-control" placeholder="Middle Name" '); ?>
                                                        </div>
                                                      
                                                        <div class="form-group input-box">
                                                            <label>Birthday<font color="#FF0000">*</font>:</label>
                                                            <input class="form-control input-sm" name="birthday" id="birthday1" type="date" placeholder="Birthday" required>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Civil Status:</label>
                                                            <select name="civil_status" id="civil_status" class="form-control">
                                                                <option value="">- Civil Status -</option>
                                                                <?php
                                                                foreach ($civilStatus as $civilStatus) {
                                                                    if ($_POST['civil_status'] == $civilStatus->param_id) {
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
                                                            <label>Title<font color="#FF0000">*</font>:</label>
                                                            <select name="title" id="title" class="form-control" required>
                                                                <option value="">- Title -</option>
                                                                <?php
                                                                foreach ($UserTitles as $UserTitles) {
                                                                    if ($_POST['title'] == $UserTitles->param_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $UserTitles->param_id; ?>" <?php echo $selected; ?>><?php echo $UserTitles->cValue; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Last Name<font color="#FF0000">*</font>:</label>
                                                            <?php echo form_input('lastname', set_value('lastname'), 'id="lastname" class="form-control" placeholder="Last Name" required'); ?>
                                                        </div>
                                                     
                                                        <div class="form-group input-box">
                                                            <label>Birth Place:</label>
                                                            <?php echo form_input('birthplace', set_value('birthplace'), 'id="birthplace" class="form-control" placeholder="Birth Place"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Gender:</label>
                                                            <select name="gender" id="gender" class="form-control" >
                                                                <option value="">- Gender -</option>
                                                                <?php
                                                                foreach ($gender as $gender) {
                                                                    if ($_POST['gender'] == $gender->param_id) {
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

                                                    <div class="col-md-4 col-sm-12">
                                                    <div class="form-group input-box">
                                                            <label>First Name<font color="#FF0000">*</font>:</label>
                                                            <?php echo form_input('firstname', set_value('firstname'), 'id="firstname" class="form-control" placeholder="First Name" required'); ?>
                                                        </div>
                                                       
                                                        <div class="form-group input-box">
                                                            <label>Designation <font color="#FF0000">*</font>:</label>
                                                            <select name="designation" id="designation" class="form-control" required>
                                                                <option value="">- Designation -</option>
                                                                <?php
                                                                foreach ($designationList as $designationList) {
                                                                    if ($_POST['designation'] == $designationList->designation_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $designationList->designation_id; ?>" <?php echo $selected; ?>><?php echo $designationList->designation; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>User Role <font color="#FF0000">*</font>:</label>
                                                            <select name="user_role" onChange="addPhysioExpert(this.value);" id="user_role" class="form-control" required>
                                                                <option value="">- User Role -</option>
                                                                <?php
                                                                foreach ($userRoleList as $userRoleList) {
                                                                    if (@$_POST['user_role'] == $userRoleList->role_id) {
                                                                        $selected = "selected='selected'";
                                                                    } else {
                                                                        $selected = "";
                                                                    }
                                                                ?>
                                                                    <option value="<?php echo $userRoleList->role_id; ?>" <?php echo $selected; ?>><?php echo $userRoleList->role_name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Organization <font color="#FF0000">*</font>:</label>
                                                            <select name="organization" class="form-control" required>
                                                                <!-- <option value="">- Select Organization -</option> -->
                                                                <?php
                                                                if ($this->session->userdata('organization') == "aastha") {
                                                                ?>
                                                                    <option value="<?php echo $this->session->userdata('organization') ?>" selected><?php echo ucwords("ALF Bavdhan"); ?></option>
                                                                    <!-- <option value="aastha"><?php echo ucwords("aastha"); ?></option>
                                                                <option value="athashri"><?php echo ucwords("athashri"); ?></option> -->
                                                                    <!-- <option value="post stroke">post stroke</option> -->
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $this->session->userdata('organization') ?>" selected><?php echo ucwords($this->session->userdata('organization')) ?></option>
                                                                <?php } ?>


                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- </div> -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-6">
                                                            <div class="form-group input-boxc physio_expert" style="display:none; margin-left:15px;">
                                                                Do You Expert<font color="#FF0000">*</font>
                                                                <input type="radio" name="pt_expert" value="Yes">Yes &nbsp;
                                                                <input type="radio" name="pt_expert" value="No">No
                                                                <input type="hidden" name="cType">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                </div>
                                                <div class="tab-pane" id="tab_2">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group input-box">
                                                            <label>No. of House:</label>
                                                            <?php echo form_input('noofhouse', set_value('noofhouse'), 'id="noofhouse" class="form-control" placeholder="No. of House"'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Brgy./Subd.:</label>
                                                            <?php echo form_input('brgy', set_value('brgy'), 'id="brgy" class="form-control" placeholder="Brgy./Subd."'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>City/Province.:</label>
                                                            <?php echo form_input('province', set_value('province'), 'id="province" class="form-control" placeholder="City/Province" '); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                    <div class="form-group input-box">
                                                            <label>Username <font color="#FF0000">*</font>:</label>
                                                            <input type="text" name="username" id="username"  value="<?php echo $userID?>" class="form-control" placeholder="Username" required>
                                                        </div>
                                                       
                                                        <div class="form-group input-box">
                                                            <label>Phone No.:</label>
                                                            <?php echo form_input('phone', set_value('phone'), 'id="phone" class="form-control" placeholder="Phone No."'); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Email Address <font color="#FF0000">*</font>:</label>
                                                            <?php echo form_input('email', set_value('email'), 'id="email" class="form-control" placeholder="Email Address" required'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                    <div class="form-group input-box">
                                                            <label>Mobile No.:</label>
                                                            <?php echo form_input('mobile', set_value('mobile'), 'id="mobile" class="form-control" placeholder="Mobile No" '); ?>
                                                        </div>
                                                        <div class="form-group input-box">
                                                            <label>Password <font color="#FF0000">*</font>:</label>
                                                            <input type="text" name="password" id="password" class="form-control" placeholder="Password" required>
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
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- BDAY -->
         <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            /*$(document).ready(function () {
                
                $('#birthday').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });*/
        </script>
        <!-- END BDAY -->
        <script>
            function addPhysioExpert(role_id)
            {
                if(role_id=="11" || role_id=="21")
                {
                    $(".physio_expert").show();
                    
                }
                else {
                    $("input[name='pt_expert']").prop('checked', false);
                    $(".physio_expert").hide();
                    
                 }
             }
        </script>

         <script>
      $(function(){
        var dtToday = new Date();
    
        var month = dtToday.getMonth() + 1;// jan=0; feb=1 .......
        var day = dtToday.getDate();
        var year = dtToday.getFullYear() - 18;
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        var minDate = year + '-' + month + '-' + day;
        var maxDate = year + '-' + month + '-' + day;
        $('#birthday1').attr('max', maxDate);
        
    });
   </script>

        
    <?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>