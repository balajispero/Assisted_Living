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
                    <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>-->
                </section>

                <section class="content">
                    <?php echo $message;?>
    <form action="<?php echo base_url()?>app/doctor/preassessment_save" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-12">
        <p>PERSONAL DETAILS OF APPLICANT</p>
        <div class="row">
          <div class="col-sm-2">Name of Applicant</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_name"></div>
            <div class="col-sm-2">Email</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="applicant_email"></div>
            <div class="col-sm-2">Marital Status</div>
          <div class="col-sm-2">
            <select name="applicant_marital" class="form-control input-sm">
                                                           <option value="">- Marital Status -</option>
                                                     
                                                           <option value="Divorced">Divorced</option>
                                                      
                                                           <option value="Legal Seperated">Legal Seperated</option>
                                                     
                                                           <option value="Married">Married</option>
                                                      
                                                           <option value="Single">Single</option>
                                                       
                                                           <option value="Widow">Widow</option>
                                                      
                                                           <option value="Widower">Widower</option>
                                                </select></div>
          </div>
        </div>
      </div><br>

       
        <div class="row">
          <div class="col-sm-2">Date of Birth</div>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="applicant_dob"></div>
            <div class="col-sm-2">Age</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_age"></div>
            <div class="col-sm-2">Gender</div>
          <div class="col-sm-2">
            <select name="applicant_gender" class="form-control">
              <option value="">- Gender -</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Any Other">Any Other</option>
            </select>
           </div> 
      </div><br>
      <div class="row">
          <div class="col-sm-2">Permanent Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_add">
           </div>
            <div class="col-sm-2">Religion</div>
          <div class="col-sm-2">
                                    <select name="applicant_religion" id="religion" class="form-control input-sm">
                                                       <option value="">- Religion -</option>
                                                       
                                                       <option value="Aglipayan">Aglipayan</option>
                                                  
                                                       <option value="Ang Dating Daan">Ang Dating Daan</option>
                                                   
                                                       <option value="Assemblies of God (Ilocos Norte)">Assemblies of God (Ilocos Norte)</option>
                                                  
                                                       <option value="Born Again">Born Again</option>
                                                   
                                                       <option value="Chinese">Chinese</option>
                                                  
                                                       <option value="Church of God">Church of God</option>
                                                  
                                                       <option value="Church of the Nazarene">Church of the Nazarene</option>
                                                 
                                                       <option value="El Shaddai">El Shaddai</option>
                                                 
                                                       <option value="Evangelical">Evangelical</option>
                                                  
                                                       <option value="Hindu">Hindu</option>
                                                  
                                                       <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                                  
                                                       <option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                                  
                                                       <option value="Judaism">Judaism</option>
                                                 
                                                       <option value="Muslim">Muslim</option>
                                             
                                                       <option value="Roman Catholic">Roman Catholic</option>
                                                   
                                                       <option value="Seventh-Day Adventists">Seventh-Day Adventists</option>
                                                   
                                                       <option value="Unitarian">Unitarian</option>
                                             </select>
  
            </div> 
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_mobile">
           </div>
      </div><br>
          <div class="row">
          <div class="col-sm-2">Aadhar Number </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="applicant_aadhar"></div>
          </div><br>

      <div class="row">
      <div class="col-sm-12">
        <p>Family</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Name of Father</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="father_name"></div>
            <div class="col-sm-2">Name of Mother</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="mother_name"></div>
            <div class="col-sm-2">Name of Siblings</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="sublings_name"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Name of Spouse</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="spouse_name"></div>
            <div class="col-sm-2">Contact number of spouse</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="spouse_mobile"></div>
            <div class="col-sm-2">Permanent Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="family_add"></div>
          </div><br>
          <div class="row">
      <div class="col-sm-12">
        <p>DETAILS OF CHILDREN </p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Name</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="chl_name"></div>
            <div class="col-sm-2">Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="chl_add"></div>
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="chl_mobile"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="chl_email"></div>
            <div class="col-sm-2">Name of Local Guardian</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="guardian_name"></div>
            <div class="col-sm-2">Address</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="guardian_add"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="guardian_mobile"></div>
            <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="guardian_email"></div>
            <div class="col-sm-2">Have you appointed a Power of Attorney (POA) and/or Health Care Proxy (HCP)</div>
          <div class="col-sm-2">
            <select name="appointment_poa" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select></div>
          </div><br>
          
      <div class="row">
          <div class="col-sm-2">Name of POA /HCP holder</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="poa_name"></div>
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="poa_mobile"></div>
            <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="poa_email"></div>
          </div><br>
          
          <div class="row">
          <div class="col-sm-2">Address  </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="poa_add"></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>TREATING DOCTOR</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Name of Doctor </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="doctor_name"></div>
            <div class="col-sm-2">Contact Number</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="doctor_mobile"></div>
            <div class="col-sm-2">Email id</div>
          <div class="col-sm-2">
            <input type="email" class="form-control" name="doctor_email"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Clinic/Hospital Name </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="hospital_name"></div>
            <div class="col-sm-2">DIAGNOSIS </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="diagnosis"></div>
          </div><br>

      <div class="row">
      <div class="col-sm-12">
        <p>CASE HISTORY</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Present Complaints</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="present_complaints"></div>
            <div class="col-sm-2">Past History</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="past_history"></div>
          </div><br>
      <div class="row">
      <div class="col-sm-12">
        <p>DETAILS OF CURRENT MEDICATIONS</p>
        <button type="button" required name="add" id="add" class="btn btn-primary">Add Medicine</button>
        </div>
      </div><br>
      <div class="table-responsive">
      <table class="table table-striped">
    <tr>
      <th>Name of Medicine</th><th>Dose</th><th>Frequency</th><th>Duration</th><th>Action</th>
    </tr>
     <tbody id="dynamic_field">
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
            <input type="text" class="form-control" name="drug"></div>
            <div class="col-sm-2">Food</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="food"></div>
            <div class="col-sm-2">Any Other</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="any_other"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">DEWORMING medicine last taken on Date </div>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="last_taken_medicine_date"></div>
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
    <tr>
      <td>Tetanus</td><td><input type="text" name="tetanus_vac" class="form-control"></td><td><input type="date" name="tetanus_date" class="form-control"></td><td><input type="date" name="tetanus_due_date" class="form-control"></td>
    </tr>
    <tr>
      <td>Influenza</td><td><input type="text" name="influenza_vac" class="form-control"></td><td><input type="date" name="influenza_date" class="form-control"></td><td><input type="date" name="influenza_due_date" class="form-control"></td>
    </tr>
    <tr>
      <td>Pneumococcal</td><td><input type="text" name="pneumococcal_vac" class="form-control"></td><td><input type="date" name="pneumococcal_date"class="form-control"></td><td><input type="date" name="pneumococcal_due_date"class="form-control"></td>
    </tr>
    <tr>
      <td>Typhoid</td><td><input type="text" name="typhoid_vac" class="form-control"></td><td><input type="date" name="typhoid_date" class="form-control"></td><td><input type="date" name="typhoid_due_date" class="form-control"></td>
    </tr>    
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
            <input type="text" class="form-control" name="head"></div>
            <div class="col-sm-2">Neck</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="neck"></div>
            <div class="col-sm-2">Ears</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="ears"></div>
          </div><br>
         
  <div class="row">
          <div class="col-sm-2">Hearing</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="hearing"></div>
            <div class="col-sm-2">Hearing Aid</div>
          <div class="col-sm-2">
            <select name="hearaid" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select></div> 
<div class="col-sm-2">Nose </div> 
          <div class="col-sm-2">
            <input type="text" class="form-control" name="nose"></div>
      </div><br>
          <div class="row">
          <div class="col-sm-2">Throat</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="throat"></div>
            <div class="col-sm-2">Eye</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="eye"></div>
            <div class="col-sm-2">Vision</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="vision"></div>
          </div><br>
      <div class="row">
            <div class="col-sm-2">Spectacles</div>
          <div class="col-sm-2">
            <select name="spectacles" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select></div>
<div class="col-sm-2">Cataract</div>
          <div class="col-sm-2">
            <select name="cataract" class="form-control">
  <option value="Right">Right</option>
  <option value="Left">Left</option>
</select></div>
<div class="col-sm-2">Glaucoma</div>
          <div class="col-sm-2">
            <select name="glaucoma" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select></div>  
      </div><br>
        <div class="row">
          <div class="col-sm-2">Oral Exam </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="oral"></div>
            <div class="col-sm-2">Ulcers / Tumour </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="tumour"></div>
            <div class="col-sm-2">Tongue</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="tongue"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Dental exam </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="dental"></div>
            <div class="col-sm-2">Dentures</div>
          <div class="col-sm-2">
            <select name="dentures" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select></div>
<div class="col-sm-2">Skin</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="skin"></div> 
      </div><br>
          <div class="row">
          <div class="col-sm-2">Petechial Haemorrhages  </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="potechial"></div>
            <div class="col-sm-2">Bruises</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bruises"></div>
            <div class="col-sm-2">Rashes</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="rashes"></div> 
      </div><br>
      <div class="row">
        <div class="col-sm-2">Bed sore </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bed_sore"></div> 
          <div class="col-sm-2">Pedal Oedema</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="pedal_oedema"></div>
            <div class="col-sm-2">DVT</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="dvt"></div>
      </div><br>

      <div class="row">
          <div class="col-sm-2">Varicose Veins </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="varicose_veins"></div>
            <div class="col-sm-2">Foot Examination </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="foot"></div>
          </div><br>
          <div class="row">
      <div class="col-sm-12">
        <p>PERSONAL HISTORY </p>
        </div>
      </div><br>
          <div class="row">
          <div class="col-sm-2">Diet</div> 
          <div class="col-sm-2">
            <input type="text" class="form-control" name="diet"></div>
            <div class="col-sm-2">Habits</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="habits"></div>
            <div class="col-sm-2">Exercise</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="exercise"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Does the patient is recommended physiotherapy or rehabilitation services? </div>
          <div class="col-sm-2">
            <select name="physiotherapy" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
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
            <input type="text" class="form-control" name="temp"></div>
            <div class="col-sm-2">Pulse</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="pulse"></div>
            <div class="col-sm-2">BP</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bp"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">RR </div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="rr"></div>
            <div class="col-sm-2">SPO2</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="spo2"></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>SYSTEMIC EXAMINATION</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Respiratory System</div>
          <div class="col-sm-2">
            <textarea name="respirate_sys" placeholder="Notes" class="form-control"></textarea></div>
            <div class="col-sm-2">Cardiovascular system</div>
          <div class="col-sm-2">
            <textarea name="cardiovascular_sys" placeholder="Notes" class="form-control"></textarea></div>
            <div class="col-sm-2">Gastrointestinal System</div>
          <div class="col-sm-2">
            <textarea name="gastrointestinal_sys" placeholder="Notes" class="form-control"></textarea></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Genito Urinary System</div>
          <div class="col-sm-2">
            <textarea name="genito_urinary_sys" placeholder="Notes" class="form-control"></textarea></div>
            <div class="col-sm-2">Neurological System</div>
          <div class="col-sm-2">
            <textarea name="neurological_sys" placeholder="Notes" class="form-control"></textarea></div>
            <div class="col-sm-2">Musculoskeletal system</div>
          <div class="col-sm-2">
            <textarea name="musculoskeletal_sys" placeholder="Notes" class="form-control"></textarea></div>
          </div><br>
                    <div class="row">
      <div class="col-sm-12">
        <p>PSYCHOLOGICAL & BEHAVIOURAL CONDITION</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Agitation & or Aggression </div>
          <div class="col-sm-2">
            <select name="aggression" class="form-control">
  <option value="NA">NA</option>
  <option value="Occasionally">Occasionally</option>
  <option value="Frequent">Frequent</option>
  <option value="Always">Always</option>
</select></div>
<div class="col-sm-2">Violence</div>
          <div class="col-sm-2">
            <select name="Violence" class="form-control">
  <option value="No">No</option>
  <option value="May Self Inflict">May Self Inflict</option>
  <option value="Verbally Abusive">Verbally Abusive</option>
  <option value="Physically Abusive">Physically Abusive</option>
  <option value="Has Suicidal Ideation">Has Suicidal Ideation</option>
</select></div>
<div class="col-sm-2">Need of Bed Restrain</div>
          <div class="col-sm-2">
            <select name="bed_restrain" class="form-control">
  <option value="No">No</option>
  <option value="Required Temporarily">Required Temporarily</option>
  <option value="Occasionally">Occasionally</option>
  <option value="Permanent">Permanent</option>
</select></div>
          </div><br>

          <div class="row">
          <div class="col-sm-2">Wandering</div>
          <div class="col-sm-2">
            <select name="wandering" class="form-control">
  <option value="No">No</option>
  <option value="Occasionally">Occasionally</option>
  <option value="Always">Always</option>
  <option value="Day Time">Day Time</option>
  <option value="Night Time">Night Time</option>
</select></div>
<div class="col-sm-2">Sleep </div>
          <div class="col-sm-2">
            <select name="sleep" class="form-control">
  <option value="Able to sleep">Able to sleep</option>
  <option value="Relies on sleeping pills">Relies on sleeping pills</option>
  <option value="Required sedation">Required sedation</option>
  <option value="Chronic sleep issues">Chronic sleep issues</option>
</select></div>
<div class="col-sm-2">Inappropriate Behaviour with Care Giver </div>
          <div class="col-sm-2">
            <select name="giver_care" class="form-control">
  <option value="NA">NA</option>
  <option value="Occasionally">Occasionally</option>
  <option value="Always">Always</option>
</select></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Diagnostic Tests</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="diagnostic_test"></div>
            <div class="col-sm-2">TYPICAL DAY OF APPLICANT</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="typical_day_appl"></div>
            <div class="col-sm-2">Total no. of error</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="total_no_error"></div>
          </div><br>



          <div class="row">
      <div class="col-sm-12">
        <p>CLOCK DRAWING TEST</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="clock_score"></div>
            <div class="col-sm-2">Remark</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="clock_remark"></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>GERIATRIC DEPRESSION SCALE</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="geriatric_score"></div>
            <div class="col-sm-2">Remark</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="geriatric_remark"></div>
          </div><br>

          <div class="row">
      <div class="col-sm-12">
        <p>BARTHEL INDEX</p>
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2">Bowels Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bowels_score" id="bowels_score" onkeyup="discountFunc()"></div>
            <div class="col-sm-2">Bladder Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bladder_score" id="bladder_score" onkeyup="discountFunc()"></div>
            <div class="col-sm-2">Toilet Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="toilet_score"></div>
          </div><br>
          <div class="row">
            <div class="col-sm-2">Bathing Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="bathing_score"></div>
            <div class="col-sm-2">Grooming Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="grooming_score"></div>
            <div class="col-sm-2">Dressing Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="dressing_score"></div>
          </div><br>

          <div class="row">
          <div class="col-sm-2">Feeding Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="feeding_score"></div>
            <div class="col-sm-2">Transfer Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="transfer_score"></div>
            <div class="col-sm-2">Mobility Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="mobility_score"></div>
          </div><br>
          <div class="row">
          <div class="col-sm-2">Stairs Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="stairs_score"></div>
            <div class="col-sm-2">Total Score</div>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="barthel_total_score" id="barthel_total_score"></div>
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
        <tr>
          <td>you have fallen in the past year?<input type="hidden" name="past_year_qtn" class="form-control" value="you have fallen in the past year?"></td><td><input type="text" name="past_year" class="form-control"></td>
        </tr>
        <tr>
          <td>Do you use or have been advised to use a stick or walker to move around safely?<input type="hidden" name="use_stick_qtn" class="form-control" value="Do you use or have been advised to use a stick or walker to move around safely?"></td><td><input type="text" name="use_stick" class="form-control"></td>
        </tr>
        <tr>
          <td>Do you feel unsteady while you are walking<input type="hidden" name="feel_stable_qtn" class="form-control" value="Do you feel unsteady while you are walking"></td><td><input type="text" name="feel_stable" class="form-control"></td>
        </tr>
        <tr>
          <td>Do you steady yourself by holding onto furniture while walking at home?<input type="hidden" name="steady_holding_qtn" class="form-control" value="Do you steady yourself by holding onto furniture while walking at home?"></td><td><input type="text" name="steady_holding" class="form-control"></td>
        </tr>

        <tr>
          <td>You are worried about falling?<input type="hidden" name="worry_fall_qtn" class="form-control" value="You are worried about falling?"></td><td><input type="text" name="worry_fall" class="form-control"></td>
        </tr>
        <tr>
          <td>Do You need to push with your hands to stand up from a chair?<input type="hidden" name="from_chair_qtn" class="form-control" value="Do You need to push with your hands to stand up from a chair?"></td><td><input type="text" name="from_chair" class="form-control"></td>
        </tr>
        <tr>
          <td>Do You have some trouble to stepping up onto a curb?<input type="hidden" name="curb_qtn" class="form-control" value="Do You have some trouble to stepping up onto a curb?"></td><td><input type="text" name="curb" class="form-control"></td>
        </tr>
        <tr>
          <td>Do you often have to rush to the toilet?<input type="hidden" name="toilet_rush_qtn" class="form-control" value="Do you often have to rush to the toilet?"></td><td><input type="text" name="toilet_rush" class="form-control"></td>
        </tr>

        <tr>
          <td>Have lost some feeling in your feet?<input type="hidden" name="lost_feet_qtn" class="form-control" value="Have lost some feeling in your feet?"></td><td><input type="text" name="lost_feet" class="form-control"></td>
        </tr>
        <tr>
          <td>Do you take medicine that sometimes make you feel light- headed or more tired than usual?<input type="hidden" name="light_headed_qtn" class="form-control" value="Do you take medicine that sometimes make you feel light- headed or more tired than usual?"></td><td><input type="text" name="light_headed" class="form-control"></td>
        </tr>
        <tr>
          <td>Do you take medicine to help you sleep or improve your mood?<input type="hidden" name="take_medicine_qtn" class="form-control" value="Do you take medicine to help you sleep or improve your mood?"></td><td><input type="text" name="take_medicine" class="form-control"></td>
        </tr>
        <tr>
          <td>I often feel sad or depressed<input type="hidden" name="feel_sad_qtn" class="form-control" value="I often feel sad or depressed"></td><td><input type="text" name="feel_sad" class="form-control"></td>
        </tr>
        <tr>
          <td>Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling<input type="hidden" name="fall_total_score_qtn" class="form-control" value="Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling"></td><td><input type="text" name="fall_total_score" class="form-control" placeholder="Enter Total Score"></td>
        </tr>    
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
            <input type="text" class="form-control" name="time_test_score"></div>
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
            <input type="text" class="form-control" name="chair_stand_score"></div>
          </div><br>

          <input type="submit" class="btn btn-primary" name="submit" value="submit">
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
         <script>
          function discountFunc() {
  var discount = $("#bowels_score").val();
  /*var totalAmount = Number($("#totalAmount").val());
  totalAmount = totalAmount.toFixed(2);*/

  var grandTotal;
  if(discount) {   
    grandTotal = Number($("#bowels_score").val()) + Number($("#bladder_score").val());
    grandTotal = grandTotal.toFixed(2);

    $("#barthel_total_score").val(grandTotal);
    //$("#grandTotalValue").val(grandTotal);
  } else {
  }

  /*var paid = $("#paid").val();

  var dueAmount;  
  if(paid) {
    dueAmount = Number($("#grandTotal").val()) - Number($("#paid").val());
    dueAmount = dueAmount.toFixed(2);

    $("#due").val(dueAmount);
    $("#dueValue").val(dueAmount);
  } else {
    $("#due").val($("#grandTotal").val());
    $("#dueValue").val($("#grandTotal").val());
  }*/

}
         </script>
         
    </body>
</html>