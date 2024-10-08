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
                    <h1>Add Test Report</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="<?php echo base_url()?>app/roles">Admin</a></li>
                         <li><a href="<?php echo base_url()?>app/designation">Designation</a></li>
                         <li class="active">Add Designation</li> -->
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
                            	<form role="form" method="post" action="<?php echo base_url()?>app/lab/lab_sample_test_save" onSubmit="return confirm('Are you sure you want to save?');" enctype="multipart/form-data">
                                    <input type="hidden" name="sample_test_id" value="<?=$this->uri->segment("4"); ?>">
                                    
                                    <?php echo validation_errors(); ?>   
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Test Name<font color="#FF0000">*</font></label>
                                        <?php
                                                    $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getLabSampleById($lab_test_info[0]->laboratory_id);
                                        ?>
                                        <!-- <input class="form-control input-sm" name="sample_test_name" type="text" style="width: 350px;" value="<?php echo !empty($lab_test_info[0]->lab_test_name) ? $lab_test_info[0]->lab_test_name : $lab_test_info[0]->laboratory_id;?>" required readonly> -->

                                        <input class="form-control input-sm" name="sample_test_name" type="text" style="width: 350px;" value="<?php echo @$pages->test_name;?>" required readonly>
                                        
                                        <input class="form-control input-sm" name="sample_test_name" type="hidden" style="width: 350px;" value="<?php echo @$lab_test_info[0]->laboratory_id;?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Upload Report</label>
                                        <input type="file" name="previous_dischargefile[]" class="form-control" style="width: 350px;" multiple="multiple">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-primary bg_color" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
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