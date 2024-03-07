<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preassessment Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?base_url()?>app/doctor/custom.css">
    <style>
        body{
            border: 2px solid #3B4BDF;
        }
        input[type=text] {
        width: 100%;
        border: none;
        border-bottom: 2px solid  #3B4BDF;
    }
input[type=text]:hover{
    border: none;
    border-bottom: 2px solid  #3B4BDF;
}
tr.border_bottom td {
  border-bottom: 1px solid  #3B4BDF;
   padding-bottom:10px
}
.table td {
 padding:5px !important;
}


</style>
    
    
</head>
<body>
<section>
    <!-- <div class="container"> -->
        <div class="row mt-4 border" style="background-color: #3B4BDF; color:white;">
            <div class="col-12">
                <h3 class="text-center">Preassessment Report</h3>
             </div>
            </div>
        <!-- </div> -->
</section>
<section>
    <div class="container"> 
        <div class="row mt-4 border" style="background-color: #3B4BDF; color:white;">
            <div class="col-12">
                <h3 class="text-center"><u>COMPREHESIVE GERIATRIC ASSESSMENT</u></h3>
             </div>
            </div>
         </div>
<div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Date : <?php echo !empty(date("d/m/Y",strtotime($patientInfo[0]->entry_datetime))) ? date("d/m/Y",strtotime($patientInfo[0]->entry_datetime)) : '';?> 
    </td>
    <td width="50%">         
    Time : <?php echo date("h:i A",strtotime($patientInfo[0]->entry_datetime));?>
    </td>
    </tr>
    </table>
     <table width="100%" cellpadding="5">
                <tr>
                <td width="100%">
                 Assessment done by : Dr. <?php
    $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($patientInfo[0]->added_by);
                                                
                                                echo $pages->cPreparedBy;
                                                ?>
                </td>
                </tr>
            </table>
    <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
</div>
</section>
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6 >Personal Details</h6>
                <!-- <hr style="color: #3B4BDF; margin-top:10px; width:120px;"> -->
           </div>
        </div>
</div>
</section>

<section>
   
<div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Preassessment No. : <?php echo $patientInfo[0]->preasses_no;?> 
    </td>
    <td width="50%">         
    Name of Applicant : <?php echo $patientInfo[0]->preasses_name?>
    </td>
    </tr>

    <tr>
    <td width="50%">
    Date of Birth : <?php echo $patientInfo[0]->birthday;?> 
    </td>
    <td width="50%">         
    Age :<?php echo $patientInfo[0]->preasses_age?>
    </td>
    </tr>
    <tr>
    <tr>
    <td width="50%">
    Gender : <?php echo $patientInfo[0]->preasses_gender;?> 
    </td>
    <td width="50%">         
    Marital Status : <?php echo $patientInfo[0]->preasses_marital_status?>
    </td>
    </tr>
    <tr>
    <td width="50%">
    Contact No. : <?php echo $patientInfo[0]->preasses_mobile;?> 
    </td>
    <td width="50%">         
    Email :<?php echo $patientInfo[0]->preasses_email?>
    </td>
    </tr>
    <tr>
    <td width="50%">
    Aadhar Number : <?php echo $patientInfo[0]->preasses_aadhar;?> 
    </td>
    <td width="50%">         
    Religion : <?php echo $patientInfo[0]->preasses_religion?>
    </td>
    </tr>
    </table>
    <table width="100%" cellpadding="5">
    <tr>
    <td width="100%">
    Permanent Address : <?php echo $patientInfo[0]->preasses_add;?> 
    </td>
    </tr>
    </table>

 </div>
 
</section>
    
<div class="container">
<hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
</div>
  

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Family</h6>
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Name of Father : <?php echo $patientInfo[0]->father;?> 
    </td>
    <td width="50%">         
    Name of Mother : <?php echo $patientInfo[0]->mother;?>
    </td>
    </tr>

    <tr>
    <td width="50%">
    Name of Sibling : <?php echo $patientInfo[0]->sublings;?> 
    </td>
    <td width="50%">
   Name of Spouse : <?php echo $patientInfo[0]->spouse_name;?>         
    </td>
    </tr>
    </table>
    <table width="100%" cellpadding="5">
    <tr>
    <td width="100%">
    Permanent Address : <?php echo $patientInfo[0]->family_add;?> 
    </td>
    </tr>
    </table>
    <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
</div>
    
</section>

<section>
    <div class="container">
         <div class="row mt-4">
            <div class="col-12">
                <h6 >Details of Children</h6>
               
           </div>
        </div>
</div> 
</section>
<section>
<div class="container">
    
    <table class="table table-striped" width="50%">
                                                <tr>
                                                   <!-- <th>No.</th> --> <th>Name</th><th>Address</th><th>Contact No.</th><th>Email</th>
                                                </tr>
                                                
                                                    <?php
      if(!empty($preasses_child)){

      foreach($preasses_child as $key => $preasses_child){ $key1 = $key+1; ?>
        <tr class="border_bottom" id="row<?=$key1?>">
          <!-- <td></td> --><td><?=$preasses_child->chl_name?></td><td width="25%"><?=$preasses_child->chl_add?></td><td><?=$preasses_child->chl_mobile?></td><td><?=$preasses_child->chl_email?></td>
        </tr>
        
        <?php } }?>
       
                                                   
                                             </table>
    
      </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Local Guardian</h6>
                <!-- <hr style="color: #3B4BDF; margin-top:10px; width:120px;"> -->
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Name of Local Guardian 1 : <?php echo $patientInfo[0]->local_guardian_name;?> 
    </td>
    <td width="50%">         
    Address : <?php echo $patientInfo[0]->guardian_add?>
    </td>
    </tr>

    <tr>
    <td width="50%">
    Contact No. : <?php echo $patientInfo[0]->guardian_mobile;?> 
    </td>
    <td width="50%">         
    Email : <?php echo $patientInfo[0]->guardian_email?>
    </td>
    </tr>
    <tr>
    <td width="50%">
    Name of Local Guardian 2 : <?php echo $patientInfo[0]->local_guardian_name2;?> 
    </td>
    <td width="50%">         
    Address : <?php echo $patientInfo[0]->guardian_add2?>
    </td>
    </tr>

    <tr>
    <td width="50%">
    Contact No. : <?php echo $patientInfo[0]->guardian_mobile2;?> 
    </td>
    <td width="50%">         
    Email : <?php echo $patientInfo[0]->guardian_email2?>
    </td>
    </tr>
    </table>
</div>

</section>

<div class="container">
<hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
</div>

<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h6>Have you appointed a Power of Attorney (POA) and/or Health Care Proxy (HCP) : <?php echo $patientInfo[0]->appointment_poa; ?></h6>
                <!-- <hr style="color: #3B4BDF; margin-top:10px; width:600px;"> -->
           </div>
        </div>
</div>
</section>

<section>
     <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">         
    Name of POA/HCP Holder : <?php echo $patientInfo[0]->poa_name?>
    </td>
    <td width="50%">         
    Contact No. : <?php echo $patientInfo[0]->poa_mobile;?>
    </td>
    </tr>

    <tr>
    <td width="50%">
    Email : <?php echo $patientInfo[0]->poa_email?>
    </td>
    <td width="50%">         
    </td>
    </tr>
    </table>
    <table width="100%" cellpadding="5">
    <tr>
    <td width="100%">
    Address : <?php echo $patientInfo[0]->poa_add;?> 
    </td>
    </tr>
    </table>
</div>
    
</section>


<div class="container">
<hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
</div>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>TREATING DOCTOR</h6>
                <!-- <hr style="color: #3B4BDF; margin-top:10px; width:120px;"> -->
           </div>
        </div>
</div>

<div class="container">
    <table class="table table-striped" width="50%">
                                                <tr>
                                                   <!-- <th>No.</th> --> <th>Doctor Name</th><th>Contact No.</th><th>Email</th><th>Clinic Name</th>
                                                </tr>
                                                
                                                    <?php
      if(!empty($preasses_doctor)){

      foreach($preasses_doctor as $key => $preasses_doctor){ $key1 = $key+1; ?>
        <tr class="border_bottom" id="row<?=$key1?>">
          <!-- <td></td> --><td><?=$preasses_doctor->tdoctor_name?></td><td><?=$preasses_doctor->tdoctor_mobile?></td><td><?=$preasses_doctor->tdoctor_email?></td><td><?=$preasses_doctor->hospital_name?></td>
        </tr>
        <?php } }?>
       
                                                   
                                             </table>
    
      </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Diagnosis</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:120px;">
            </div>
        </div>
</div>
</section>

<section>
    <div class="container">
<div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Diagnosis :</label>
            </div>
           
            <div class="col-3">
                <?php
                 $diagnosis = @explode(',',$patientInfo[0]->diagnosis); foreach($diagnosis as $key_dg => $diagnosis1){ 
                    ?>
                     <input type="text" name="diagnosis[].." value="<?=$diagnosis1?>">
                      <?php }?>
             </div>
        </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Case History</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:120px;">
            </div>
           </div>
        </div>
</section>
        
<section>
    <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Present History : <?php echo $patientInfo[0]->present_complaints;?> 
    </td>
    <td width="50%">         
    Past History : <?php echo $patientInfo[0]->past_history?>
    </td>
    </tr> 
    </table>
</div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>DETAILS OF CURRENT MEDICATIONS</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:270px;">
           </div>
        </div>
</div>
</section>

<section>
<div class="container">
    <table class="table table-striped" width="50%">
                                                <tr>
                                                   <!-- <th>No.</th> --> <th>Name of Medicine</th><th>Dose</th><th>Frequency</th><th>Duration</th>
                                                </tr>
                                                
                                                    <?php
      if(!empty($preasses_medicine)){

      foreach($preasses_medicine as $key => $medicine){ $key1 = $key+1; ?>
        <tr class="border_bottom" id="row<?=$key1?>">
          <!-- <td></td> --><td><?=$medicine->medicine?></td><td><?=$medicine->dose?></td><td><?=$medicine->frequency?></td><td><?=$medicine->duration?></td>
        </tr>
        <?php } }?>
       
                                                   
                                             </table>
    
      </div>
</section>


<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>ALLERGIES</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:120px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Drug : <?php echo $patientInfo[0]->drug_name;?> 
    </td>
    <td width="50%">         
    Food : <?php echo $patientInfo[0]->food?>
    </td>
    </tr>

    <tr>
    <td width="50%">
    Any Other : <?php echo $patientInfo[0]->any_other;?> 
    </td>
    <td width="50%">         
    DEWORMING medicine last taken on Date : <?php echo $patientInfo[0]->last_taken_medicine_date?>
    </td>
    </tr>
    </table>
</div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>IMMUNIZATION HISTORY</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:190px;">
           </div>
        </div>
</div>
</section>

<section>
<div class="container">

<table class="table table-striped">
                                                                <tr>
                                                                  <th>Type of Vaccine</th><th>Name of vaccine</th><th>Date given</th><th>Next due date </th>
                                                                </tr>
                                                                <?php
      if(!empty($preasses_immunization_his)){

      foreach($preasses_immunization_his as $immunze_key => $immunize_his){  
        if($immunze_key=='0')
        { ?>
        <tr class="border_bottom">
          <td>Tetanus</td><td><?php echo $immunize_his->vac_name?></td><td><?php echo $immunize_his->given_date?></td><td><?php echo $immunize_his->due_date?></td>
        </tr>
      <?php }
      if($immunze_key=='1')
        { ?>
         <tr class="border_bottom">
      <td>Influenza</td><td><?php echo $immunize_his->vac_name?></td><td><?php echo $immunize_his->given_date?></td><td><?php echo $immunize_his->due_date?></td>
    </tr>
      <?php }
      if($immunze_key=='2')
        { ?>
        <tr class="border_bottom">
      <td>Pneumococcal</td><td><?php echo $immunize_his->vac_name?></td><td><?php echo $immunize_his->given_date?></td><td><?php echo $immunize_his->due_date?></td>
    </tr>
      <?php } 
      if($immunze_key=='3')
        { ?>
        <tr class="border_bottom">
      <td>Typhoid</td><td><?php echo $immunize_his->vac_name?></td><td><?php echo $immunize_his->given_date?></td><td><?php echo $immunize_his->due_date?></td>
    </tr>    
      <?php }
      if($immunze_key=='4')
        { ?>
            
      <?php } ?>
        
        <?php } }?>    
        </table>
        </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>COVID19</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:90px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="35%">
    1st Vaccine : <?php echo $immunize_his->covid_vac_1;?> 
    </td>
    <td width="35%">         
    2nd Vaccine : <?php echo $immunize_his->covid_vac_2;?>
    </td>
    <td width="30%">         
    3rd Vaccine : <?php echo $immunize_his->covid_vac_3;?>
    </td>
    </tr>

    </table>
</div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>GENERAL EXAMINATION</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:200px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Head : <?php echo $patientInfo[0]->head;?> 
    </td>
    <td width="50%">         
    Neck : <?php echo $patientInfo[0]->neck;?>
    </td>
    </tr>
    </table>
            <div class="row mt-4">
                <div class="col-12">
                    <h6>Ears</h6>
               </div>
            </div>
            <table width="100%" cellpadding="5">
            <tr>
            <td width="50%">
            Hearing : <?php echo $patientInfo[0]->hearing;?> 
            </td>
            <td width="50%">         
            Hearing Aid : <?php echo $patientInfo[0]->hearing_aid;?>
            </td>
            </tr>
            </table>
            <hr style="color:black; margin-top:10px; width:500px;">

            <table width="100%" cellpadding="5">
            <tr>
            <td width="50%">
            Nose : <?php echo $patientInfo[0]->nose;?> 
            </td>
            <td width="50%">         
            Throat : <?php echo $patientInfo[0]->throat;?>
            </td>
            </tr>
            </table>

            <div class="row mt-4">
                <div class="col-12">
                    <h6>Eye</h6>
               </div>
            </div>
            <table width="100%" cellpadding="5">
            <tr>
            <td width="50%">
            Eye Vision : <?php echo $patientInfo[0]->vision;?> 
            </td>
            <td width="50%">         
            Spectacles : <?php echo $patientInfo[0]->spectacles;?>
            </td>
            </tr>
            <tr>
            <td width="50%">
            Cataract : <?php echo $patientInfo[0]->cataract;?> 
            </td>
            <td width="50%">         
            Glaucoma : <?php echo $patientInfo[0]->glaucoma;?>
            </td>
            </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">

          
            <table width="100%" cellpadding="5">
            <tr>
            <td width="50%">
            Oral Exam : <?php echo $patientInfo[0]->oral_exam;?> 
            </td>
            <td width="50%">         
            Ulcers / Tumour : <?php echo $patientInfo[0]->tumour;?>
            </td>
            </tr>
            <tr>
            <td width="50%">
            Dental exam : <?php echo $patientInfo[0]->dental_exam;?> 
            </td>
            <td width="50%">         
            Dentures : <?php echo $patientInfo[0]->dentures;?>
            </td>
            </tr>
            <tr>
            <td width="50%">
            Tongue : <?php echo $patientInfo[0]->tongue;?> 
            </td>
            <td width="50%">         
            Skin : <?php echo $patientInfo[0]->skin;?>
            </td>
            </tr>

            <tr>
            <td width="50%">
            Petechial Haemorrhages : <?php echo $patientInfo[0]->potenchial;?> 
            </td>
            <td width="50%">         
            Bruises : <?php echo $patientInfo[0]->bruises;?>
            </td>
            </tr>
            <tr>
            <td width="50%">
            Rashes : <?php echo $patientInfo[0]->rashes;?> 
            </td>
            <td width="50%">         
            Bed sore : <?php echo $patientInfo[0]->bed_sore;?>
            </td>
            </tr>
            <tr>
            <td width="50%">
            Pedal Oedema : <?php echo $patientInfo[0]->pedal_oedema;?> 
            </td>
            <td width="50%">         
            DVT : <?php echo $patientInfo[0]->dvt;?>
            </td>
            </tr>
            <tr>
            <td width="50%">
            Varicose Veins : <?php echo $patientInfo[0]->varicose_veins;?> 
            </td>
            <td width="50%">         
            Foot Examination : <?php echo $patientInfo[0]->foot_exam;?>
            </td>
            </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
</div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>PERSONAL HISTORY</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:180px;">
           </div>
        </div>
</div>
</section>

<section>
        <div class="container">
    <table width="100%" cellpadding="5">
    <tr>
    <td width="50%">
    Diet : <?php echo $patientInfo[0]->diet;?> 
    </td>
    <td width="50%">         
    Habits : <?php echo $patientInfo[0]->habits;?>
    </td>
    </tr>

    <tr>
    <td width="50%">
    Exercise : <?php echo $patientInfo[0]->exercise;?> 
    </td>
    <td width="50%">
    Does the patient is recommended physiotherapy or rehabilitation services? : <?php echo $patientInfo[0]->physiotherapy_service;?>         
    </td>
    </tr>
    </table>
    <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
</div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>PHYSICAL EXAMINATION </h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <h6>Vitals</h6>
               </div>
            </div>
        <table width="100%" cellpadding="5">
        <tr>
        <td width="50%">
        Temp : <?php echo $patientInfo[0]->temp;?> 
        </td>
        <td width="50%">         
        Pulse : <?php echo $patientInfo[0]->pulse;?>
        </td>
        </tr>

        <tr>
        <td width="50%">
        BP : <?php echo $patientInfo[0]->bp;?> 
        </td>
        <td width="50%">
        RR : <?php echo $patientInfo[0]->rr;?>         
        </td>
        </tr>
        <tr>
        <td width="50%">
        SPO2 : <?php echo $patientInfo[0]->spo2;?> 
        </td>
        <td width="50%">
        Appearance : <?php echo $patientInfo[0]->rr;?>         
        </td>
        </tr>
        </table>
        <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
    </div>

</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>SYSTEMIC EXAMINATION </h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>

<section>
        <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Respiratory System : <?php echo $patientInfo[0]->rs;?> 
                </td>
                <td width="50%">         
                Cardiovascular system : <?php echo $patientInfo[0]->cardiovascular_sys;?>
                </td>
                </tr>

                <tr>
                <td width="50%">
                Gastrointestinal System : <?php echo $patientInfo[0]->gastrointestinal_sys;?> 
                </td>
                <td width="50%">
                Genito Urinary System : <?php echo $patientInfo[0]->genito_urinary_sys;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Neurological System : <?php echo $patientInfo[0]->neurological_sys;?> 
                </td>
                <td width="50%">
                Musculoskeletal system : <?php echo $patientInfo[0]->musculoskeletal_sys;?>         
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div> 
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>PSYCHOLOGICAL & BEHAVIOURAL CONDITION </h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>

<section>
            <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Agitation & Aggression : <?php echo $patientInfo[0]->aggression;?> 
                </td>
                <td width="50%">         
                Violence : <?php echo $patientInfo[0]->violence;?>
                </td>
                </tr>

                <tr>
                <td width="50%">
                Need of Bed Restrain : <?php echo $patientInfo[0]->bed_restrain;?> 
                </td>
                <td width="50%">
                Wandering : <?php echo $patientInfo[0]->wandering;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Sleep : <?php echo $patientInfo[0]->sleep;?> 
                </td>
                <td width="50%">
                Inappropriate Behaviour with Care : <?php echo $patientInfo[0]->giver_care;?>         
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>TYPICAL DAY OF APPLICANT </h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>

<section>
            <div class="container">
                <div class="row mt-4">
                <div class="col-12">
                    <h6>Morning hours</h6>
               </div>
            </div>
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Wake up time : <?php echo $patientInfo[0]->wake_up_time;?> 
                </td>
                <td width="50%">         
                Washroom : <?php echo $patientInfo[0]->washroom;?>
                </td>
                </tr>

                <tr>
                <td width="50%">
                Breakfast time : <?php echo $patientInfo[0]->breakfast_time;?> 
                </td>
                <td width="50%">
                Exercises : <?php echo $patientInfo[0]->exercises;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Social : <?php echo $patientInfo[0]->morning_social;?> 
                </td>
                </tr>

            </table>
            
        </div>

                <div class="container">
                <div class="row mt-4">
                <div class="col-12">
                    <h6>Afternoon hours</h6>
               </div>
            </div>
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Lunch : <?php echo $patientInfo[0]->lunch;?> 
                </td>
                <td width="50%">         
                Afternoon nap : <?php echo $patientInfo[0]->afternoon_nap;?>
                </td>
                </tr>     
            </table>
            
        </div>

        <div class="container">
                <div class="row mt-4">
                <div class="col-12">
                    <h6>Evening hours</h6>
               </div>
            </div>
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Walk/sitting outside : <?php echo $patientInfo[0]->walk_sitting_outside;?> 
                </td>
                <td width="50%">         
                Tea/coffee/snacks time : <?php echo $patientInfo[0]->tea_snacks_time;?>
                </td>
                </tr>

                <tr>
                <td width="50%">
                Social : <?php echo $patientInfo[0]->eve_social;?> 
                </td>
                <td width="50%">         
                Any other : <?php echo $patientInfo[0]->eve_any_other;?>
                </td>
                </tr>     
            </table>
            
        </div>

        <div class="container">
                <div class="row mt-4">
                <div class="col-12">
                    <h6>Late evening/night</h6>
               </div>
            </div>
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Recreational : <?php echo $patientInfo[0]->recreational;?> 
                </td>
                <td width="50%">         
                Reading : <?php echo $patientInfo[0]->reading;?>
                </td>
                </tr>

                <tr>
                <td width="50%">
                Dinner : <?php echo $patientInfo[0]->dinner;?> 
                </td>
                <td width="50%">         
                Any other : <?php echo $patientInfo[0]->night_any_other;?>
                </td>
                </tr>
                <tr>
                <td width="50%">
                Light off time : <?php echo $patientInfo[0]->light_off_time;?> 
                </td>
                <td width="50%">         
                </td>
                </tr>

                <tr>
                <td width="90%">
                Describe any other activities : <?php echo $patientInfo[0]->describe_any_other_activity;?> 
                </td>
                <td width="10%">         
                </td>
                </tr>     
            </table>
            
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;"> 
            
        </div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6> Diagnostic Tests </h6>
                
           </div>
        </div>
    </div>

    <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Diagnostic Tests : <?php echo $patientInfo[0]->diagnostic_test;?> 
                </td>
                <td width="50%">         
                </td>
                </tr>
                
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Short portable mental status questionnaire(SPMSQ) Test </h6>
                
           </div>
        </div>
    </div>

    <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                SPMSQ Test Total no. of error : <?php echo $patientInfo[0]->total_no_of_error;?> 
                </td>
                <td width="50%">         
                </td>
                </tr>
                
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>CLOCK DRAWING TEST</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:120px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Score : <?php echo $patientInfo[0]->clock_score;?> 
                </td>
                <td width="50%">         
                Remark : <?php echo $patientInfo[0]->clock_remark;?>
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>GERIATRIC DEPRESSION SCALE</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Score : <?php echo $patientInfo[0]->geriatric_score;?> 
                </td>
                <td width="50%">         
                Remark : <?php echo $patientInfo[0]->geriatric_remark;?>
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div>
    
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>BARTHEL INDEX</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:120px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Bowels Score : <?php echo $patientInfo[0]->bowels_score;?> 
                </td>
                <td width="50%">         
                Bladder Score : <?php echo $patientInfo[0]->bladder_score;?>
                </td>
                </tr>

                <tr>
                <td width="50%">
                Toilet Score : <?php echo $patientInfo[0]->toilet_score;?> 
                </td>
                <td width="50%">
                Bathing Score : <?php echo $patientInfo[0]->bathing_score;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Grooming Score : <?php echo $patientInfo[0]->grooming_score;?> 
                </td>
                <td width="50%">
                Dressing Score : <?php echo $patientInfo[0]->dressing_score;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Feeding Score : <?php echo $patientInfo[0]->feeding_score;?> 
                </td>
                <td width="50%">
                Transfer Score : <?php echo $patientInfo[0]->transfer_score;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Mobility Score : <?php echo $patientInfo[0]->mobility_score;?> 
                </td>
                <td width="50%">
                Stairs Score : <?php echo $patientInfo[0]->stairs_score;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Total Score : <?php echo $patientInfo[0]->total_barthel_score;?> 
                </td>
                <td width="50%">         
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div>
    
</section>
<br><br>
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Fall Risk Assessment</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:150px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
            <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                You have fallen in the past year? : <?php echo $preasses_fallrisk_quest[0]->answer=="2" ? "Yes" :"No";?> 
                </td>
                <td width="50%">         
                Do you use or have been advised to use a stick or walker to move around safely? : <?php echo $preasses_fallrisk_quest[1]->answer=="2" ? "Yes" :"No";?>
                </td>
                </tr>

                <tr>
                <td width="50%">
                Do you feel unsteady while you are walking ? : <?php echo $preasses_fallrisk_quest[2]->answer=="1" ? "Yes" :"No";?> 
                </td>
                <td width="50%">
                Do you steady yourself by holding onto furniture while walking at home? : <?php echo $preasses_fallrisk_quest[3]->answer=="1" ? "Yes" :"No";?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                You are worried about falling? : <?php echo $preasses_fallrisk_quest[4]->answer=="1" ? "Yes" :"No";?> 
                </td>
                <td width="50%">
                Do You need to push with your hands to stand up from a chair? : <?php echo $preasses_fallrisk_quest[5]->answer=="1" ? "Yes" :"No";?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Do You have some trouble to stepping up onto a curb? : <?php echo $preasses_fallrisk_quest[6]->answer=="1" ? "Yes" :"No";?> 
                </td>
                <td width="50%">
                Do you often have to rush to the toilet? : <?php echo $preasses_fallrisk_quest[7]->answer=="1" ? "Yes" :"No";?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Have lost some feeling in your feet? : <?php echo $preasses_fallrisk_quest[8]->answer=="1" ? "Yes" :"No";?> 
                </td>
                <td width="50%">
                Do you take medicine that sometimes make you feel light- headed or more tired than usual? : <?php echo $preasses_fallrisk_quest[9]->answer=="1" ? "Yes" :"No";?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Do you take medicine to help you sleep or improve your mood? : <?php echo $preasses_fallrisk_quest[10]->answer=="1" ? "Yes" :"No";?> 
                </td>
                <td width="50%">
                I often feel sad or depressed? : <?php echo $preasses_fallrisk_quest[11]->answer=="1" ? "Yes" :"No";?>         
                </td>
                </tr>
            </table>
            <table width="100%" cellpadding="5">
                <tr>
                <td width="100%">
                Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling : <?php echo !empty($preasses_fallrisk_quest[12]->answer) ? $preasses_fallrisk_quest[12]->answer :"";?> 
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">
        </div>
    
</section>


    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>TIME UP AND GO TEST</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:150px;">
           </div>
        </div>
        <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Test Score : <?php echo $patientInfo[0]->time_up_go_score;?> 
                </td>
                <td width="50%">         
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">      
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>30 Second Chair Stand Test</h6>
                <hr style="color: #3B4BDF; margin-top:10px; width:150px;">
                <p>Chair Stand Below Average Scores</p>
           </div>
       </div>

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

      <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Score : <?php echo $patientInfo[0]->chair_stand_score;?> 
                </td>
                <td width="50%">         
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">

        <table width="100%" cellpadding="5">
                <tr>
                <td width="50%">
                Observation by Doctor : <?php echo $patientInfo[0]->doctor_observation;?> 
                </td>
                <td width="50%">
                Recommendation : <?php echo $patientInfo[0]->recommendation;?>         
                </td>
                </tr>
                <tr>
                <td width="50%">
                Eligible for ALF : <?php echo $patientInfo[0]->ptn_eligible;?> 
                </td>
                <td width="50%">         
                </td>
                </tr>
            </table>
            <hr style="border-top:2px solid #3B4BDF; margin-top:10px; width:542px;">    
    </div>
</section>

<?php require_once(APPPATH . 'views/include/footer.php'); ?>
</body>
</html>