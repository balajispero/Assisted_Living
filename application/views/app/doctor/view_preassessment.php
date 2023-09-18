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

                    <?php
                    /*echo "<pre>"; 
                    print_r($patientInfo);*/ ?>
                    <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>-->
                </section>

                <section class="content">
                    <?php echo $message;?>
    <form action="<?php echo base_url()?>app/doctor/preassessment_update" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $patientInfo[0]->preasses_id;?>">
    <div class="row">
      <div class="col-sm-12">
        <p>PERSONAL DETAILS OF APPLICANT</p>
        <div class="row">
          <div class="col-sm-2">Name of Applicant</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_name" value="<?php echo $patientInfo[0]->preasses_name?>" readonly></div>
            <div class="col-sm-2">Email</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="applicant_email" value="<?php echo $patientInfo[0]->preasses_email?>" readonly></div>
            <div class="col-sm-2">Marital Status</div>
          <div class="col-sm-2">
            <select name="applicant_marital" class="form-control input-sm" readonly>
                                                           <option value="">- Marital Status -</option>
                                                     
                                                           <option value="Divorced" <?php if($patientInfo[0]->preasses_marital_status=="Divorced"){ echo "selected"; } ?>>Divorced</option>
                                                      
                                                           <option value="Legal Seperated" <?php if($patientInfo[0]->preasses_marital_status=="Legal Seperated"){ echo "selected"; } ?>>Legal Seperated</option>
                                                     
                                                           <option value="Married" <?php if($patientInfo[0]->preasses_marital_status=="Married"){ echo "selected"; } ?>>Married</option>
                                                      
                                                           <option value="Single" <?php if($patientInfo[0]->preasses_marital_status=="Single"){ echo "selected"; } ?>>Single</option>
                                                       
                                                           <option value="Widow" <?php if($patientInfo[0]->preasses_marital_status=="Widow"){ echo "selected"; } ?>>Widow</option>
                                                      
                                                           <option value="Widower" <?php if($patientInfo[0]->preasses_marital_status=="Widower"){ echo "selected"; } ?>>Widower</option>
                                                </select></div>
          </div>
        </div>
      </div><br>

       
        <div class="row">
          <div class="col-sm-2">Date of Birth</div>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="applicant_dob" value="<?php /*echo $patientInfo[0]->preasses_dob*/?>" readonly></div>
            <div class="col-sm-2">Age</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_age" value="<?php echo $patientInfo[0]->preasses_age?>" readonly></div>
            <div class="col-sm-2">Gender</div>
          <div class="col-sm-2">
            <select name="applicant_gender" class="form-control" readonly>
              <option value="">- Gender -</option>
              <option value="Male" <?php if($patientInfo[0]->preasses_gender=="Male"){ echo "selected"; } ?>>Male</option>
              <option value="Female" <?php if($patientInfo[0]->preasses_gender=="Female"){ echo "selected"; } ?>>Female</option>
              <option value="Any Other" <?php if($patientInfo[0]->preasses_gender=="Any Other"){ echo "selected"; } ?>>Any Other</option>
            </select>
           </div> 
      </div><br>
      <div class="row">
          <div class="col-sm-2">Permanent Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_add" value="<?php echo $patientInfo[0]->preasses_add?>" readonly>
           </div>
            <div class="col-sm-2">Religion</div>
          <div class="col-sm-2">
                                    <select name="applicant_religion" id="religion" class="form-control input-sm" readonly>
                                                       <option value="">- Religion -</option>
                                                       
                                                       <option value="Aglipayan" <?php if($patientInfo[0]->preasses_religion=="Aglipayan"){ echo "selected"; } ?>>Aglipayan</option>
                                                  
                                                       <option value="Ang Dating Daan" <?php if($patientInfo[0]->preasses_religion=="Ang Dating Daan"){ echo "selected"; } ?>>Ang Dating Daan</option>
                                                   
                                                       <option value="Assemblies of God (Ilocos Norte)" <?php if($patientInfo[0]->preasses_religion=="Assemblies of God (Ilocos Norte)"){ echo "selected"; } ?>>Assemblies of God (Ilocos Norte)</option>
                                                  
                                                       <option value="Born Again" <?php if($patientInfo[0]->preasses_religion=="Born Again"){ echo "selected"; } ?>>Born Again</option>
                                                   
                                                       <option value="Chinese" <?php if($patientInfo[0]->preasses_religion=="Chinese"){ echo "selected"; } ?>>Chinese</option>
                                                  
                                                       <option value="Church of God" <?php if($patientInfo[0]->preasses_religion=="Church of God"){ echo "selected"; } ?>>Church of God</option>
                                                  
                                                       <option value="Church of the Nazarene" <?php if($patientInfo[0]->preasses_religion=="Church of the Nazarene"){ echo "selected"; } ?>>Church of the Nazarene</option>
                                                 
                                                       <option value="El Shaddai" <?php if($patientInfo[0]->preasses_religion=="El Shaddai"){ echo "selected"; } ?>>El Shaddai</option>
                                                 
                                                       <option value="Evangelical" <?php if($patientInfo[0]->preasses_religion=="Evangelical"){ echo "selected"; } ?>>Evangelical</option>
                                                  
                                                       <option value="Hindu" <?php if($patientInfo[0]->preasses_religion=="Hindu"){ echo "selected"; } ?>>Hindu</option>
                                                  
                                                       <option value="Iglesia ni Cristo" <?php if($patientInfo[0]->preasses_religion=="Iglesia ni Cristo"){ echo "selected"; } ?>>Iglesia ni Cristo</option>
                                                  
                                                       <option value="Jehovah's Witnesses" <?php if($patientInfo[0]->preasses_religion=="Jehovah's Witnesses"){ echo "selected"; } ?>>Jehovah's Witnesses</option>
                                                  
                                                       <option value="Judaism" <?php if($patientInfo[0]->preasses_religion=="Judaism"){ echo "selected"; } ?>>Judaism</option>
                                                 
                                                       <option value="Muslim" <?php if($patientInfo[0]->preasses_religion=="Muslim"){ echo "selected"; } ?>>Muslim</option>
                                             
                                                       <option value="Roman Catholic" <?php if($patientInfo[0]->preasses_religion=="Roman Catholic"){ echo "selected"; } ?>>Roman Catholic</option>
                                                   
                                                       <option value="Seventh-Day Adventists" <?php if($patientInfo[0]->preasses_religion=="Seventh-Day Adventists"){ echo "selected"; } ?>>Seventh-Day Adventists</option>
                                                   
                                                       <option value="Unitarian" <?php if($patientInfo[0]->preasses_religion=="Unitarian"){ echo "selected"; } ?>>Unitarian</option>
                                             </select>
  
            </div> 
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_mobile" value="<?php echo $patientInfo[0]->preasses_mobile?>" readonly>
           </div>
      </div><br>
          <div class="row">
          <div class="col-sm-2">Aadhar Number </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_aadhar" value="<?php echo $patientInfo[0]->preasses_aadhar?>" readonly></div>
          </div><br>

      <div class="row">
      <div class="col-sm-12">
        <p>Family</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Name of Father</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="father_name" value="<?php echo $patientInfo[0]->father?>" readonly></div>
            <div class="col-sm-2">Name of Mother</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="mother_name" value="<?php echo $patientInfo[0]->mother?>" readonly></div>
            <div class="col-sm-2">Name of Siblings</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="sublings_name" value="<?php echo $patientInfo[0]->sublings?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Name of Spouse</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="spouse_name" value="<?php echo $patientInfo[0]->spouse_name?>" readonly></div>
            <div class="col-sm-2">Contact number of spouse</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="spouse_mobile" value="<?php echo $patientInfo[0]->spouse_mobile?>" readonly></div>
            <div class="col-sm-2">Permanent Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="family_add" value="<?php echo $patientInfo[0]->family_add?>" readonly></div>
          </div><br>
          <div class="row">
      <div class="col-sm-12">
        <p>DETAILS OF CHILDREN </p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Name</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="chl_name" value="<?php echo $patientInfo[0]->chl_name?>" readonly></div>
            <div class="col-sm-2">Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="chl_add" value="<?php echo $patientInfo[0]->chl_add?>" readonly></div>
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="chl_mobile" value="<?php echo $patientInfo[0]->chl_mobile?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="chl_email" value="<?php echo $patientInfo[0]->chl_email?>" readonly></div>
            <div class="col-sm-2">Name of Local Guardian</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="guardian_name" value="<?php echo $patientInfo[0]->local_guardian_name?>" readonly></div>
            <div class="col-sm-2">Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="guardian_add" value="<?php echo $patientInfo[0]->guardian_add?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="guardian_mobile" value="<?php echo $patientInfo[0]->guardian_mobile?>" readonly></div>
            <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="guardian_email" value="<?php echo $patientInfo[0]->guardian_email?>" readonly></div>
            <div class="col-sm-2">Have you appointed a Power of Attorney (POA) and/or Health Care Proxy (HCP)</div>
          <div class="col-sm-2">
            <select name="appointment_poa" class="form-control" readonly>
  <option value="Yes" <?php if($patientInfo[0]->appointment_poa=="Yes") { echo "selected"; } ?>>Yes</option>
  <option value="No" <?php if($patientInfo[0]->appointment_poa=="No") { echo "selected"; } ?>>No</option>
</select></div>
          </div><br>
          
      <div class="row">
          <div class="col-sm-2">Name of POA /HCP holder</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="poa_name" value="<?php echo $patientInfo[0]->poa_name?>" readonly></div>
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="poa_mobile" value="<?php echo $patientInfo[0]->poa_mobile?>" readonly></div>
            <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="poa_email" value="<?php echo $patientInfo[0]->poa_email?>" readonly></div>
          </div><br>
          
          <div class="row">
          <div class="col-sm-2">Address  </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="poa_add" value="<?php echo $patientInfo[0]->poa_add?>" readonly></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>TREATING DOCTOR</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Name of Doctor </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="doctor_name" value="<?php echo $patientInfo[0]->tdoctor_name?>" readonly></div>
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="doctor_mobile" value="<?php echo $patientInfo[0]->tdoctor_mobile?>" readonly></div>
            <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="doctor_email" value="<?php echo $patientInfo[0]->tdoctor_email?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Clinic/Hospital Name </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="hospital_name" value="<?php echo $patientInfo[0]->hospital_name?>" readonly></div>
            <div class="col-sm-2">DIAGNOSIS </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="diagnosis" value="<?php echo $patientInfo[0]->diagnosis?>" readonly></div>
          </div><br>

      <div class="row">
      <div class="col-sm-12">
        <p>CASE HISTORY</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Present Complaints</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="present_complaints" value="<?php echo $patientInfo[0]->present_complaints?>" readonly></div>
            <div class="col-sm-2">Past History</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="past_history" value="<?php echo $patientInfo[0]->past_history?>" readonly></div>
          </div><br>
      <div class="row">
      <div class="col-sm-12">
        <p>DETAILS OF CURRENT MEDICATIONS</p>
        <!-- <button type="button" required name="add" id="add" class="btn btn-primary">Add Medicine</button> -->
        </div>
      </div><br>
      <div class="table-responsive">
      <table class="table table-striped">
    <tr>
      <th>Name of Medicine</th><th>Dose</th><th>Frequency</th><th>Duration</th><!-- <th>Action</th> -->
    </tr>
     <tbody id="dynamic_field">
      <?php
      if(!empty($preasses_medicine)){

      foreach($preasses_medicine as $key => $medicine){ $key1 = $key+1; ?>
        <tr id="row<?=$key1?>">
          <td><input type="text" class="form-control" name="medicine_name[]" value="<?=$medicine->medicine?>" readonly></td><td><input type="text" class="form-control" name="dose[]" value="<?=$medicine->dose?>" readonly></td><td><input type="text" class="form-control" name="frequency[]" value="<?=$medicine->frequency?>" readonly></td><td><input type="text" class="form-control" name="duration[]" value="<?=$medicine->duration?>" readonly></td><!-- <td><button type="button" class="btn_remove" name="remove" id="<?=$key1?>">-</button></td> -->
        </tr>
        <?php } }?>
        </tbody>
      </table>
      </div>

      <div class="row">
      <div class="col-sm-12">
        <p>ALLERGIES</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Drug</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="drug" value="<?php echo $patientInfo[0]->drug_name?>" readonly></div>
            <div class="col-sm-2">Food</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="food" value="<?php echo $patientInfo[0]->food?>" readonly></div>
            <div class="col-sm-2">Any Other</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="any_other" value="<?php echo $patientInfo[0]->any_other?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">DEWORMING medicine last taken on Date </div>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="last_taken_medicine_date" value="<?php echo $patientInfo[0]->last_taken_medicine_date?>" readonly></div>
          </div><br>

    <div class="row">
      <div class="col-sm-12">
        <p>IMMUNIZATION HISTORY</p>
        </div>
      </div><br>
      <div class="table-responsive">      
    <table class="table table-striped">
    <tr>
      <th>Type of Vaccine</th><th>Name of vaccine</th><th>Date given</th><th>Next due date </th>
    </tr>
    <?php
      if(!empty($preasses_immunization_his)){

      foreach($preasses_immunization_his as $immunze_key => $immunize_his){  
        if($immunze_key=='0')
        { ?>
        <tr>
          <td>Tetanus</td><td><input type="text" name="tetanus_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>" readonly></td><td><input type="date" name="tetanus_date" class="form-control" value="<?php echo $immunize_his->given_date?>" readonly></td><td><input type="date" name="tetanus_due_date" class="form-control" value="<?php echo $immunize_his->due_date?>" readonly></td>
          <input type="hidden" value="<?php echo $immunize_his->id ?>" name="tetanus_id">
        </tr>
      <?php }
      if($immunze_key=='1')
        { ?>
         <tr>
      <td>Influenza</td><td><input type="text" name="influenza_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>" readonly></td><td><input type="date" name="influenza_date" class="form-control" value="<?php echo $immunize_his->given_date?>" readonly></td><td><input type="date" name="influenza_due_date" class="form-control" value="<?php echo $immunize_his->due_date?>" readonly></td>
      <input type="hidden" value="<?php echo $immunize_his->id ?>" name="influenza_id">
    </tr>
      <?php }
      if($immunze_key=='2')
        { ?>
        <tr>
      <td>Pneumococcal</td><td><input type="text" name="pneumococcal_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>" readonly></td><td><input type="date" name="pneumococcal_date"class="form-control" value="<?php echo $immunize_his->given_date?>" readonly></td><td><input type="date" name="pneumococcal_due_date"class="form-control" value="<?php echo $immunize_his->due_date?>" readonly></td>
       <input type="hidden" value="<?php echo $immunize_his->id ?>" name="pneumococcal_id">
    </tr>
      <?php } 
      if($immunze_key=='3')
        { ?>
        <tr>
      <td>Typhoid</td><td><input type="text" name="typhoid_vac" class="form-control" value="<?php echo $immunize_his->vac_name?>" readonly></td><td><input type="date" name="typhoid_date" class="form-control" value="<?php echo $immunize_his->given_date?>" readonly></td><td><input type="date" name="typhoid_due_date" class="form-control" value="<?php echo $immunize_his->due_date?>" readonly></td>
       <input type="hidden" value="<?php echo $immunize_his->id ?>" name="typhoid_id">
    </tr>    
      <?php } ?>
        
        <?php } }?>
        
  </table>
</div>

  <div class="row">
      <div class="col-sm-12">
        <p>GENERAL EXAMINATION</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Head</div> 
          <div class="col-sm-2">
            <input type="text" class="form-control" name="head" value="<?php echo $patientInfo[0]->head?>" readonly></div>
            <div class="col-sm-2">Neck</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="neck" value="<?php echo $patientInfo[0]->neck?>" readonly></div>
            <div class="col-sm-2">Ears</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="ears" value="<?php echo $patientInfo[0]->ears?>" readonly></div>
          </div><br>
         
  <div class="row">
          <div class="col-sm-2">Hearing</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="hearing" value="<?php echo $patientInfo[0]->hearing?>" readonly></div>
            <div class="col-sm-2">Hearing Aid</div>
          <div class="col-sm-2">
            <select name="hearaid" class="form-control" readonly>
  <option value="Yes" <?php if($patientInfo[0]->hearing_aid=="Yes") { echo "selected"; } ?>>Yes</option>
  <option value="No" <?php if($patientInfo[0]->hearing_aid=="No") { echo "selected"; } ?>>No</option>
</select></div> 
<div class="col-sm-2">Nose </div> 
          <div class="col-sm-2">
            <input type="text" class="form-control" name="nose" value="<?php echo $patientInfo[0]->nose?>" readonly></div>
      </div><br>
          <div class="row">
          <div class="col-sm-2">Throat</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="throat" value="<?php echo $patientInfo[0]->throat?>" readonly></div>
            <div class="col-sm-2">Eye</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="eye" value="<?php echo $patientInfo[0]->eye?>" readonly></div>
            <div class="col-sm-2">Vision</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="vision" value="<?php echo $patientInfo[0]->vision?>" readonly></div>
          </div><br>
      <div class="row">
            <div class="col-sm-2">Spectacles</div>
          <div class="col-sm-2">
            <select name="spectacles" class="form-control" readonly>
  <option value="Yes" <?php if($patientInfo[0]->spectacles=="Yes") { echo "selected"; } ?>>Yes</option>
  <option value="No" <?php if($patientInfo[0]->spectacles=="No") { echo "selected"; } ?>>No</option>
</select></div>
<div class="col-sm-2">Cataract</div>
          <div class="col-sm-2">
            <select name="cataract" class="form-control" readonly>
  <option value="Right" <?php if($patientInfo[0]->cataract=="Right") { echo "selected"; } ?>>Right</option>
  <option value="Left" <?php if($patientInfo[0]->cataract=="Left") { echo "selected"; } ?>>Left</option>
</select></div>
<div class="col-sm-2">Glaucoma</div>
          <div class="col-sm-2">
            <select name="glaucoma" class="form-control" readonly>
  <option value="Yes" <?php if($patientInfo[0]->glaucoma=="Yes") { echo "selected"; } ?>>Yes</option>
  <option value="No" <?php if($patientInfo[0]->glaucoma=="No") { echo "selected"; } ?>>No</option>
</select></div>  
      </div><br>
        <div class="row">
          <div class="col-sm-2">Oral Exam </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="oral" value="<?php echo $patientInfo[0]->oral_exam?>" readonly></div>
            <div class="col-sm-2">Ulcers / Tumour </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="tumour" value="<?php echo $patientInfo[0]->tumour?>" readonly></div>
            <div class="col-sm-2">Tongue</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="tongue" value="<?php echo $patientInfo[0]->tongue?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Dental exam </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="dental" value="<?php echo $patientInfo[0]->dental_exam?>" readonly></div>
            <div class="col-sm-2">Dentures</div>
          <div class="col-sm-2">
            <select name="dentures" class="form-control" readonly>
  <option value="Yes" <?php if($patientInfo[0]->dentures=="Yes") { echo "selected"; } ?>>Yes</option>
  <option value="No" <?php if($patientInfo[0]->dentures=="No") { echo "selected"; } ?>>No</option>
</select></div>
<div class="col-sm-2">Skin</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="skin" value="<?php echo $patientInfo[0]->skin?>" readonly></div> 
      </div><br>
          <div class="row">
          <div class="col-sm-2">Petechial Haemorrhages  </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="potechial" value="<?php echo $patientInfo[0]->potenchial?>" readonly></div>
            <div class="col-sm-2">Bruises</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bruises" value="<?php echo $patientInfo[0]->bruises?>" readonly></div>
            <div class="col-sm-2">Rashes</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="rashes" value="<?php echo $patientInfo[0]->rashes?>" readonly></div> 
      </div><br>
      <div class="row">
        <div class="col-sm-2">Bed sore </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bed_sore" value="<?php echo $patientInfo[0]->bed_sore?>" readonly></div> 
          <div class="col-sm-2">Pedal Oedema</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="pedal_oedema" value="<?php echo $patientInfo[0]->pedal_oedema?>" readonly></div>
            <div class="col-sm-2">DVT</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="dvt" value="<?php echo $patientInfo[0]->dvt?>" readonly></div>
      </div><br>

      <div class="row">
          <div class="col-sm-2">Varicose Veins </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="varicose_veins" value="<?php echo $patientInfo[0]->varicose_veins?>" readonly></div>
            <div class="col-sm-2">Foot Examination </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="foot" value="<?php echo $patientInfo[0]->foot_exam?>" readonly></div>
          </div><br>
          <div class="row">
      <div class="col-sm-12">
        <p>PERSONAL HISTORY </p>
        </div>
      </div><br>
          <div class="row">
          <div class="col-sm-2">Diet</div> 
          <div class="col-sm-2">
            <input type="text" class="form-control" name="diet" value="<?php echo $patientInfo[0]->diet?>" readonly></div>
            <div class="col-sm-2">Habits</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="habits" value="<?php echo $patientInfo[0]->preasses_name?>" readonly></div>
            <div class="col-sm-2">Exercise</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="exercise" value="<?php echo $patientInfo[0]->exercise?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Does the patient is recommended physiotherapy or rehabilitation services? </div>
          <div class="col-sm-2">
            <select name="physiotherapy" class="form-control" readonly>
  <option value="Yes" <?php if($patientInfo[0]->physiotherapy_service=="Yes") { echo "selected"; } ?>>Yes</option>
  <option value="No" <?php if($patientInfo[0]->physiotherapy_service=="No") { echo "selected"; } ?>>No</option>
</select></div>
          </div><br>

      <div class="row">
      <div class="col-sm-12">
        <p>PHYSICAL EXAMINATION </p>
        </div>
      </div><br>
      <div class="row">
      <div class="col-sm-12">
        Vitals
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Temp</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="temp" value="<?php echo $patientInfo[0]->temp?>" readonly></div>
            <div class="col-sm-2">Pulse</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="pulse" value="<?php echo $patientInfo[0]->pulse?>" readonly></div>
            <div class="col-sm-2">BP</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bp" value="<?php echo $patientInfo[0]->bp?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">RR </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="rr" value="<?php echo $patientInfo[0]->rr?>" readonly></div>
            <div class="col-sm-2">SPO2</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="spo2" value="<?php echo $patientInfo[0]->spo2?>" readonly></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>SYSTEMIC EXAMINATION</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Respiratory System</div>
          <div class="col-sm-2">
            <textarea name="respirate_sys" placeholder="Notes" class="form-control" readonly><?php echo $patientInfo[0]->rs?></textarea></div>
            <div class="col-sm-2">Cardiovascular system</div>
          <div class="col-sm-2">
            <textarea name="cardiovascular_sys" placeholder="Notes" class="form-control" readonly><?php echo $patientInfo[0]->cardiovascular_sys?></textarea></div>
            <div class="col-sm-2">Gastrointestinal System</div>
          <div class="col-sm-2">
            <textarea name="gastrointestinal_sys" placeholder="Notes" class="form-control" readonly><?php echo $patientInfo[0]->gastrointestinal_sys?></textarea></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Genito Urinary System</div>
          <div class="col-sm-2">
            <textarea name="genito_urinary_sys" placeholder="Notes" class="form-control" readonly><?php echo $patientInfo[0]->genito_urinary_sys?></textarea></div>
            <div class="col-sm-2">Neurological System</div>
          <div class="col-sm-2">
            <textarea name="neurological_sys" placeholder="Notes" class="form-control" readonly><?php echo $patientInfo[0]->neurological_sys?></textarea></div>
            <div class="col-sm-2">Musculoskeletal system</div>
          <div class="col-sm-2">
            <textarea name="musculoskeletal_sys" placeholder="Notes" class="form-control" readonly><?php echo $patientInfo[0]->musculoskeletal_sys?></textarea></div>
          </div><br>
                    <div class="row">
      <div class="col-sm-12">
        <p>PSYCHOLOGICAL & BEHAVIOURAL CONDITION</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Agitation & or Aggression </div>
          <div class="col-sm-2">
            <select name="aggression" class="form-control" readonly>
  <option value="NA" <?php if($patientInfo[0]->aggression=="NA") { echo "selected"; } ?>>NA</option>
  <option value="Occasionally" <?php if($patientInfo[0]->aggression=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Frequent" <?php if($patientInfo[0]->aggression=="Frequent") { echo "selected"; } ?>>Frequent</option>
  <option value="Always" <?php if($patientInfo[0]->aggression=="Always") { echo "selected"; } ?>>Always</option>
</select></div>
<div class="col-sm-2">Violence</div>
          <div class="col-sm-2">
            <select name="Violence" class="form-control" readonly>
  <option value="No" <?php if($patientInfo[0]->violence=="No") { echo "selected"; } ?>>No</option>
  <option value="May Self Inflict" <?php if($patientInfo[0]->violence=="May Self Inflict") { echo "selected"; } ?>>May Self Inflict</option>
  <option value="Verbally Abusive" <?php if($patientInfo[0]->violence=="Verbally Abusive") { echo "selected"; } ?>>Verbally Abusive</option>
  <option value="Physically Abusive" <?php if($patientInfo[0]->violence=="Physically Abusive") { echo "selected"; } ?>>Physically Abusive</option>
  <option value="Has Suicidal Ideation" <?php if($patientInfo[0]->violence=="Has Suicidal Ideation") { echo "selected"; } ?>>Has Suicidal Ideation</option>
</select></div>
<div class="col-sm-2">Need of Bed Restrain</div>
          <div class="col-sm-2">
            <select name="bed_restrain" class="form-control" readonly>
  <option value="No" <?php if($patientInfo[0]->bed_restrain=="No") { echo "selected"; } ?>>No</option>
  <option value="Required Temporarily" <?php if($patientInfo[0]->bed_restrain=="Required Temporarily") { echo "selected"; } ?>>Required Temporarily</option>
  <option value="Occasionally" <?php if($patientInfo[0]->bed_restrain=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Permanent" <?php if($patientInfo[0]->bed_restrain=="Permanent") { echo "selected"; } ?>>Permanent</option>
</select></div>
          </div><br>

          <div class="row">
          <div class="col-sm-2">Wandering</div>
          <div class="col-sm-2">
            <select name="wandering" class="form-control" readonly>
  <option value="No" <?php if($patientInfo[0]->wandering=="No") { echo "selected"; } ?>>No</option>
  <option value="Occasionally" <?php if($patientInfo[0]->wandering=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Always" <?php if($patientInfo[0]->wandering=="Always") { echo "selected"; } ?>>Always</option>
  <option value="Day Time" <?php if($patientInfo[0]->wandering=="Day Time") { echo "selected"; } ?>>Day Time</option>
  <option value="Night Time" <?php if($patientInfo[0]->wandering=="Night Time") { echo "selected"; } ?>>Night Time</option>
</select></div>
<div class="col-sm-2">Sleep </div>
          <div class="col-sm-2">
            <select name="sleep" class="form-control" readonly>
  <option value="Able to sleep" <?php if($patientInfo[0]->sleep=="Able to sleep") { echo "selected"; } ?>>Able to sleep</option>
  <option value="Relies on sleeping pills" <?php if($patientInfo[0]->sleep=="Relies on sleeping pills") { echo "selected"; } ?>>Relies on sleeping pills</option>
  <option value="Required sedation" <?php if($patientInfo[0]->sleep=="Required sedation") { echo "selected"; } ?>>Required sedation</option>
  <option value="Chronic sleep issues" <?php if($patientInfo[0]->sleep=="Chronic sleep issues") { echo "selected"; } ?>>Chronic sleep issues</option>
</select></div>
<div class="col-sm-2">Inappropriate Behaviour with Care Giver </div>
          <div class="col-sm-2">
            <select name="giver_care" class="form-control" readonly>
  <option value="NA" <?php if($patientInfo[0]->giver_care=="NA") { echo "selected"; } ?>>NA</option>
  <option value="Occasionally" <?php if($patientInfo[0]->giver_care=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Always" <?php if($patientInfo[0]->giver_care=="Always") { echo "selected"; } ?>>Always</option>
</select></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Diagnostic Tests</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="diagnostic_test" value="<?php echo $patientInfo[0]->diagnostic_test?>" readonly></div>
            <div class="col-sm-2">TYPICAL DAY OF APPLICANT</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="typical_day_appl" value="<?php echo $patientInfo[0]->typical_day_appl?>" readonly></div>
            <div class="col-sm-2">Total no. of error</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="total_no_error" value="<?php echo $patientInfo[0]->total_no_of_error?>" readonly></div>
          </div><br>



          <div class="row">
      <div class="col-sm-12">
        <p>CLOCK DRAWING TEST</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="clock_score" value="<?php echo $patientInfo[0]->clock_score?>" readonly></div>
            <div class="col-sm-2">Remark</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="clock_remark" value="<?php echo $patientInfo[0]->clock_remark?>" readonly></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>GERIATRIC DEPRESSION SCALE</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="geriatric_score" value="<?php echo $patientInfo[0]->geriatric_score?>" readonly></div>
            <div class="col-sm-2">Remark</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="geriatric_remark" value="<?php echo $patientInfo[0]->geriatric_remark?>" readonly></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>BARTHEL INDEX</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Bowels Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bowels_score" value="<?php echo $patientInfo[0]->bowels_score?>" readonly></div>
            <div class="col-sm-2">Bladder Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bladder_score" value="<?php echo $patientInfo[0]->bladder_score?>" readonly></div>
            <div class="col-sm-2">Toilet Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="toilet_score" value="<?php echo $patientInfo[0]->toilet_score?>" readonly></div>
          </div><br>
          <div class="row">
            <div class="col-sm-2">Bathing Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bathing_score" value="<?php echo $patientInfo[0]->bathing_score?>" readonly></div>
            <div class="col-sm-2">Grooming Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="grooming_score" value="<?php echo $patientInfo[0]->grooming_score?>" readonly></div>
            <div class="col-sm-2">Dressing Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="dressing_score" value="<?php echo $patientInfo[0]->dressing_score?>" readonly></div>
          </div><br>

          <div class="row">
          <div class="col-sm-2">Feeding Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="feeding_score" value="<?php echo $patientInfo[0]->feeding_score?>" readonly></div>
            <div class="col-sm-2">Transfer Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="transfer_score" value="<?php echo $patientInfo[0]->transfer_score?>" readonly></div>
            <div class="col-sm-2">Mobility Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="mobility_score" value="<?php echo $patientInfo[0]->mobility_score?>" readonly></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Stairs Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="stairs_score" value="<?php echo $patientInfo[0]->stairs_score?>" readonly></div>
            <div class="col-sm-2">Total Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="barthel_total_score" value="<?php echo $patientInfo[0]->total_barthel_score?>" readonly></div>
          </div><br>
          <div class="row">
      <div class="col-sm-12">
        <p>Fall Risk Assessment</p>
        </div>
      </div><br>
           <div class="table-responsive">      
        <table class="table table-striped">
        <tr>
          <th>Questions</th><th>Answer</th>
        </tr>
         <?php
      if(!empty($preasses_fallrisk_quest)){

      foreach($preasses_fallrisk_quest as $quest_key => $quest_his){  
         ?>
        <tr>
          <td><?php echo $quest_his->questions?> <input type="hidden" name="questions[]" class="form-control" value="<?php echo $quest_his->questions?>" readonly></td><td><input type="text" name="answer[]" class="form-control" value="<?php echo $quest_his->answer?>" readonly></td>
          <input type="hidden" value="<?php echo $quest_his->fall_risk_id ?>" name="fallrisk_id[]">
        </tr>
      <?php } } ?>    
      </table>
    </div><br>

    <div class="row">
      <div class="col-sm-12">
        <p>TIME UP AND GO TEST</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Test Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="time_test_score" value="<?php echo $patientInfo[0]->time_up_go_score?>" readonly></div>
          </div><br>
          <div class="row">
      <div class="col-sm-12">
        <p>30 Second Chair Stand Test</p>
        </div>
      </div><br>

      <div class="row">
      <div class="col-sm-12">
        <p>Chair Stand Below Average Scores</p>
        </div>
      </div><br>
      <div class="table-responsive">      
        <table class="table table-striped">
        <tr>
          <th>AGE</th><th>MEN</th><th>WOMEN</th>
        </tr>
        <tr>
          <td>60-64</td><td>&lt;14</td><td>&lt;12</td>
        </tr>
        <tr>
          <td>65-69</td><td>&lt;12</td><td>&lt;11</td>
        </tr>
        <tr>
          <td>70-74</td><td>&lt;12</td><td>&lt;10</td>
        </tr>
        <tr>
          <td>75-79</td><td>&lt;11</td><td>&lt;10</td>
        </tr>
        <tr>
          <td>80-84</td><td>&lt;10</td><td>&lt;9</td>
        </tr>
        <tr>
          <td>85-89</td><td>&lt;8</td><td>&lt;8</td>
        </tr>
        <tr>
          <td>90-94</td><td>&lt;7</td><td>&lt;4</td>
        </tr>
      </table>
    </div><br>

      <div class="row">
          <div class="col-sm-2">Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="chair_stand_score" value="<?php echo $patientInfo[0]->chair_stand_score?>" readonly></div>
          </div><br>
          <!-- <input type="submit" class="btn btn-primary" name="submit" value="submit"> -->
      </form>
   
  </section>


            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
         <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
         <script>
          $(document).ready(function() {
                var i=0; 
                $('#add').click(function() {
                    i++;
                    
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" name="medicine_name[]"></td><td><input type="text" class="form-control" name="dose[]"></td><td><input type="text" class="form-control" name="frequency[]"></td><td><input type="text" class="form-control" name="duration[]"></td><td><button type="button" class="btn_remove" name="remove" id="'+ i +'">-</button></td></tr>')

                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });
            });
         </script>
         
    </body>
</html>