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
    </head>
    <div style="position:fixed; bottom: 0; right: 0; width: 67%; border: 2px solid #CCC; top:200px; z-index:1001; background-color: #FFF; display:none;" id="ad2">
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
                    <h1>Edit Particular Bill</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Admin</a></li>
                        <li><a href="<?php echo base_url()?>app/particular_bill">Particular Bill</a></li>
                        <li class="active">Edit Particular Bill</li>
                    </ol>
                </section>
				
                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div class="box">
                         		
                         		<div class="box-header">
                                    <h3 class="box-title"></h3>
                                    
                                </div>
                        	<div class="box-body table-responsive">
                            	<form role="form" method="post" action="<?php echo base_url()?>app/particular_bill/edit" onSubmit="return confirm('Are you sure you want to save?');">
                                <input type="hidden" name="id" value="<?php echo $bill_particular->particular_id?>">
                                		<?php echo validation_errors(); ?>   
                                
                                		<div class="form-group">
                                            <label for="exampleInputEmail1">Group Name</label>
                                            <select name="group_name" class="form-control input-sm" required style="width: 350px;">
                                            	<option value="">- Group Name -</option>
                                            	<?php 
												foreach($group_name as $group_name){
													if($bill_particular->group_id == $group_name->group_id){
														$selected = "selected";
													}else{
														$selected = "";
													}
												?>
                                                <option value="<?php echo $group_name->group_id?>" <?php echo $selected;?>><?php echo $group_name->group_name?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Particular Name</label>
                                        	<?php echo form_input("partcular_name",set_value("partcular_name",$bill_particular->particular_name),"class='form-control input-sm' placeholder='Particular Name' required style='width: 350px;'");?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                        	<?php echo form_input("description",set_value("description",$bill_particular->particular_desc),"class='form-control input-sm' placeholder='Description' style='width: 350px;'");?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Amount</label>
                                        	<?php echo form_input("amount",set_value("amount",$bill_particular->charge_amount),"class='form-control input-sm' placeholder='Amount' style='width: 350px;' required");?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <a href="<?php echo base_url();?>app/particular_bill" class="btn btn-default">Cancel</a>
                                            <button class="btn btn-outline-primary hvr-shutter-in-vertical" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                        </div>
                                        
                                </form>
                                
                            </div>
                        </div>
                    </div>
                 </div>
                 
                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        <?php require_once(APPPATH . 'views/include/footer.php'); ?>
    </body>
</html>