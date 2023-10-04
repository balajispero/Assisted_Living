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
        input[type=text] {
  width: 100%;
  /* padding: 12px 20px; */
  /* margin: 8px 0; */
  /* box-sizing: border-box; */
  
  border: none;
  border-bottom: 2px solid  #00cccc;
  
}
input[type=text]:hover{
    border: none;
    border-bottom: 2px solid  #00cccc;
}

    </style>
    
    
</head>
<body>
<section>
    <div class="container">
        <div class="row mt-4 border" style="background-color: #00cccc; color:white;">
            <div class="col-12">
                <h3 class="text-center">Preassessment Report</h3>
             </div>
            </div>
        </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6 >Personal Details</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
</div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Preassessment No. :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->preasses_no;?>">
            </div>

        </div>
        <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Applicant :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->preasses_name?>" required>
            </div>

        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Date of Birth :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control " value="<?php /*echo $patientInfo[0]->preasses_dob*/?>" id="birthday" onchange = "calAge()">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Age :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->preasses_age?>">
            </div>
           </div>

           <div class="row mt-2">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label">Gender :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control">
            <!-- <select name="applicant_gender" class="form-control" required>
                                                                              <option value="">- Gender -</option>
                                                                              <option value="Male" <?php if($patientInfo[0]->preasses_gender=="Male"){ echo "selected"; } ?>>Male</option>
                                                                              <option value="Female" <?php if($patientInfo[0]->preasses_gender=="Female"){ echo "selected"; } ?>>Female</option>
                                                                              <option value="Any Other" <?php if($patientInfo[0]->preasses_gender=="Any Other"){ echo "selected"; } ?>>Any Other</option>
                                                                            </select> -->
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Marital Status :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            <!-- <select name="applicant_marital" class="form-control input-sm">
                                                                               <option value="">- Marital Status -</option>
                                                                         
                                                                               <option value="Divorced" <?php if($patientInfo[0]->preasses_marital_status=="Divorced"){ echo "selected"; } ?>>Divorced</option>
                                                                          
                                                                               <option value="Legal Seperated" <?php if($patientInfo[0]->preasses_marital_status=="Legal Seperated"){ echo "selected"; } ?>>Legal Seperated</option>
                                                                         
                                                                               <option value="Married" <?php if($patientInfo[0]->preasses_marital_status=="Married"){ echo "selected"; } ?>>Married</option>
                                                                          
                                                                               <option value="Single" <?php if($patientInfo[0]->preasses_marital_status=="Single"){ echo "selected"; } ?>>Single</option>
                                                                           
                                                                               <option value="Widow" <?php if($patientInfo[0]->preasses_marital_status=="Widow"){ echo "selected"; } ?>>Widow</option>
                                                                          
                                                                               <option value="Widower" <?php if($patientInfo[0]->preasses_marital_status=="Widower"){ echo "selected"; } ?>>Widower</option>
                                                                            </select> -->

            </div>
           </div>
        <div class="row mt-2">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label">Contact No. :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->preasses_mobile?>">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Email :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->preasses_email?>">
            </div>

            <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Permanent Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->preasses_add?>" required>
            </div>

        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Aadhar Number :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->preasses_aadhar?>" required>
            </div>

        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Religion:</label>
            </div>
            <div class="col-9">
            <!-- <input type="text" class="form-control " value="" required> -->
            <option value="Hindu" <?php if($patientInfo[0]->preasses_religion=="Hindu"){ echo "selected"; } ?>>Hindu</option>


            </div>

        </div>
        </div>
</section>
    

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6 >Family</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Father :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->father?>">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Mother :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->mother?>">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Sibling :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->sublings?>">
            </div>

            <div class="col-3">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->sublings?>">
            </div>
            <div class="col-3">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->sublings?>">
            </div>
            
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Spouse :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->spouse_name?>">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Contact no of Spouse :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->spouse_mobile?>">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Permanent Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->family_add?>">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6 >Details of Children</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">1.<span> Name </span>:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->chl_name?>">
            </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">  Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->chl_add?>">
            </div>
        </div>

        <div class="row mt-2">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label">Contact No. :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control"  value="<?php echo $patientInfo[0]->chl_mobile?>">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Email :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->chl_email?>">
            </div>
        </div>

        <!-- <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">2.<span> Name </span>:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">  Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label">Contact No. :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Email :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
        </div> -->
    </div>
</section>


<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Local Guardian</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Local Guardin :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->local_guardian_name?>">
            </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->guardian_add?>">
            </div>
        </div>
      
        <div class="row mt-2">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label">Contact No. :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->guardian_mobile?>">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Email :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->guardian_email?>">
            </div>
        </div>

    </div>
</section>


<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h6>Have you appointed a Power of Attorney (POA) and/or Health Care Proxy (HCP)</h6>
                <hr style="color:#00cccc; margin-top:10px; width:600px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label">Healthcare Proxy :</label>
            </div>
            <div class="col-3">
            <!-- <input type="text" class="form-control" > -->
            <select name="appointment_poa" class="form-control">
                                                                  <option value="Yes" <?php if($patientInfo[0]->appointment_poa=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                  <option value="No" <?php if($patientInfo[0]->appointment_poa=="No") { echo "selected"; } ?>>No</option>
                                                                </select>
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Name of HCP Holder :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->poa_name?>">
            </div>
        </div>

        
        
        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Contact No. :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->poa_mobile?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Email :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->poa_email?>">
            </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->poa_add?>">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>TREATING DOCTOR</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Name of Doctor :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->tdoctor_name?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Contact No. :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->tdoctor_mobile?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Email :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->tdoctor_email?>">
            </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Clinic/Hospital Name :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->hospital_name?>">
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Diagnosis</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
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
            <input type="text" class="form-control ">
           </div>

            <div class="col-3">
            <input type="text" class="form-control" value="<?php if(!empty($key_dg1)){ print($key_dg1);}else{ echo '0';}?>" id="diagnosiscuont">
            </div>
            <!-- <div class="col-3">
            <input type="text" class="form-control ">
            </div> -->
            
        </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Case History</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
            </div>
           </div>
        </div>
</section>
        
<section>
    <div class="container">
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Present History :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->present_complaints?>">
            </div>
        </div>

        
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Past History :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->past_history?>">
            </div>
        </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>DETAILS OF CURRENT MEDICATIONS</h6>
                <hr style="color:#00cccc; margin-top:10px; width:270px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">No. of Medicine :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Name of Medicine:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Dose :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Frequency:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
            </div>
            <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Duaration:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
            </div>
       

    </div>
</section>


<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>ALLERGIES</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Drug :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->drug_name?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Food:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->food?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Any Other :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->any_other?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">DEWORMING medicine last taken on Date:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->last_taken_medicine_date?>">
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>IMMUNIZATION HISTORY</h6>
                <hr style="color:#00cccc; margin-top:10px; width:190px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Type of Vaccine :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Name of Vaccine:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Date Given :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Next Deu Date:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
        </div>
     </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>COVID19</h6>
                <hr style="color:#00cccc; margin-top:10px; width:90px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">COVID19 :</label>
            </div>
        <div class="col-3">1st Vaccine
            <input type="text" class="form-control " placeholder="first vaccine">
            </div>

            <div class="col-3">2nd Vaccine
            <input type="text" class="form-control " placeholder="second vaccine">
            </div>
            <div class="col-3">3rd Vaccine
            <input type="text" class="form-control " placeholder="third vaccine">
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>GENERAL EXAMINATION</h6>
                <hr style="color:#00cccc; margin-top:10px; width:200px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Head :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->head?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Neck:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->neck?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Ears Hearing :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->ears?>">
            </div>
            <div class="col-md-3 ml-4 mt-2">
                <label class=" col-form-label">Hearing Aid:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="hearaid" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->hearing_aid=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->hearing_aid=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Nose :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->nose?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Throat:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->throat?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Eye Vision :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->vision?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Spectacles:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="spectacles" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->spectacles=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->spectacles=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Cataract :</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="cataract" class="form-control">
                                                                              <option value="Right" <?php if($patientInfo[0]->cataract=="Right") { echo "selected"; } ?>>Right</option>
                                                                              <option value="Left" <?php if($patientInfo[0]->cataract=="Left") { echo "selected"; } ?>>Left</option>
                                                                            </select>
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Glaucoma:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="glaucoma" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->glaucoma=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->glaucoma=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Oral Exam :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control"  value="<?php echo $patientInfo[0]->oral_exam?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Ulcers / Tumour:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->tumour?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Dental exam:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control"  value="<?php echo $patientInfo[0]->dental_exam?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Dentures:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="dentures" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->dentures=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->dentures=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Tongue:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control"  value="<?php echo $patientInfo[0]->tongue?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Skin:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->skin?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Petechial Haemorrhages:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->potenchial?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Bruises:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->bruises?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Rashes:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->rashes?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Bed sore:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->bed_sore?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Pedal Oedema:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->pedal_oedema?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">DVT:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->dvt?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Varicose Veins:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->varicose_veins?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Foot Examination:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->foot_exam?>">
            </div>
        </div>
     </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>PERSONAL HISTORY</h6>
                <hr style="color:#00cccc; margin-top:10px; width:180px;">
           </div>
        </div>
</div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Diet*:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->diet?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Habits:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->habits?>">
            </div>
        </div>
         
        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Exercise:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" value="<?php echo $patientInfo[0]->exercise?>">
            </div>
            <div class="col-md-3 ml-4 mt-2">
                <label class=" col-form-label">Does the patient is recommended physiotherapy or rehabilitation services?:</label>
            </div>
            <div class="col-3 mt-2">
                <!-- <input type="text" class="form-control "> -->
                <select name="physiotherapy" class="form-control">
                                                                              <option value="Yes" <?php if($patientInfo[0]->physiotherapy_service=="Yes") { echo "selected"; } ?>>Yes</option>
                                                                              <option value="No" <?php if($patientInfo[0]->physiotherapy_service=="No") { echo "selected"; } ?>>No</option>
                                                                            </select>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>SYSTEMIC EXAMINATION </h6>
                <hr style="color:#00cccc; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Respiratory System :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->rs?>">
            </div>
         </div>

         <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Cardiovascular system:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->cardiovascular_sys?>">
            </div>
         </div>

         <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Gastrointestinal System:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" <?php echo $patientInfo[0]->gastrointestinal_sys?>>
            </div>
         </div>

         <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Genito Urinary System:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" <?php echo $patientInfo[0]->genito_urinary_sys?>>
            </div>
         </div>

         <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Neurological System:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" <?php echo $patientInfo[0]->neurological_sys?>>
            </div>
         </div>

         <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Musculoskeletal system:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" <?php echo $patientInfo[0]->musculoskeletal_sys?>>
            </div>
         </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>PSYCHOLOGICAL & BEHAVIOURAL CONDITION </h6>
                <hr style="color:#00cccc; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Agitation & Aggression:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="aggression" class="form-control">
                                                                              <option value="NA" <?php if($patientInfo[0]->aggression=="NA") { echo "selected"; } ?>>NA</option>
  <option value="Occasionally" <?php if($patientInfo[0]->aggression=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Frequent" <?php if($patientInfo[0]->aggression=="Frequent") { echo "selected"; } ?>>Frequent</option>
  <option value="Always" <?php if($patientInfo[0]->aggression=="Always") { echo "selected"; } ?>>Always</option>
                                                                            </select>
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Violence:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="Violence" class="form-control">
                                                                              <option value="No" <?php if($patientInfo[0]->violence=="No") { echo "selected"; } ?>>No</option>
  <option value="May Self Inflict" <?php if($patientInfo[0]->violence=="May Self Inflict") { echo "selected"; } ?>>May Self Inflict</option>
  <option value="Verbally Abusive" <?php if($patientInfo[0]->violence=="Verbally Abusive") { echo "selected"; } ?>>Verbally Abusive</option>
  <option value="Physically Abusive" <?php if($patientInfo[0]->violence=="Physically Abusive") { echo "selected"; } ?>>Physically Abusive</option>
  <option value="Has Suicidal Ideation" <?php if($patientInfo[0]->violence=="Has Suicidal Ideation") { echo "selected"; } ?>>Has Suicidal Ideation</option>
                                                                            </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Need of Bed Restrain:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="bed_restrain" class="form-control">
                                                                              <option value="No" <?php if($patientInfo[0]->bed_restrain=="No") { echo "selected"; } ?>>No</option>
  <option value="Required Temporarily" <?php if($patientInfo[0]->bed_restrain=="Required Temporarily") { echo "selected"; } ?>>Required Temporarily</option>
  <option value="Occasionally" <?php if($patientInfo[0]->bed_restrain=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Permanent" <?php if($patientInfo[0]->bed_restrain=="Permanent") { echo "selected"; } ?>>Permanent</option>
                                                                            </select>
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Wandering:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="wandering" class="form-control">
                                                                              <option value="No" <?php if($patientInfo[0]->wandering=="No") { echo "selected"; } ?>>No</option>
  <option value="Occasionally" <?php if($patientInfo[0]->wandering=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Always" <?php if($patientInfo[0]->wandering=="Always") { echo "selected"; } ?>>Always</option>
  <option value="Day Time" <?php if($patientInfo[0]->wandering=="Day Time") { echo "selected"; } ?>>Day Time</option>
  <option value="Night Time" <?php if($patientInfo[0]->wandering=="Night Time") { echo "selected"; } ?>>Night Time</option>
                                                                            </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Sleep:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="sleep" class="form-control">
                                                                              <option value="Able to sleep" <?php if($patientInfo[0]->sleep=="Able to sleep") { echo "selected"; } ?>>Able to sleep</option>
  <option value="Relies on sleeping pills" <?php if($patientInfo[0]->sleep=="Relies on sleeping pills") { echo "selected"; } ?>>Relies on sleeping pills</option>
  <option value="Required sedation" <?php if($patientInfo[0]->sleep=="Required sedation") { echo "selected"; } ?>>Required sedation</option>
  <option value="Chronic sleep issues" <?php if($patientInfo[0]->sleep=="Chronic sleep issues") { echo "selected"; } ?>>Chronic sleep issues</option>
</select>

                                                
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Inappropriate Behaviour with Care:</label>
            </div>
            <div class="col-3">
                <!-- <input type="text" class="form-control "> -->
                <select name="giver_care" class="form-control">
                                                                              <option value="NA" <?php if($patientInfo[0]->giver_care=="NA") { echo "selected"; } ?>>NA</option>
  <option value="Occasionally" <?php if($patientInfo[0]->giver_care=="Occasionally") { echo "selected"; } ?>>Occasionally</option>
  <option value="Always" <?php if($patientInfo[0]->giver_care=="Always") { echo "selected"; } ?>>Always</option>
                                                                            </select>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Diagnostic Tests :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->diagnostic_test?>">
            </div>
         </div>

         <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">TYPICAL DAY OF APPLICANT :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control" value="<?php echo $patientInfo[0]->typical_day_appl?>">
            </div>
         </div>

         <div class="row mt-2">
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">SPMSQ Test Total no. of error:</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control " value="<?php echo $patientInfo[0]->total_no_of_error?>">
            </div>
         </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>CLOCK DRAWING TEST</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->clock_score?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Remark:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->clock_remark?>">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>GERIATRIC DEPRESSION SCALE</h6>
                <hr style="color:#00cccc; margin-top:10px; width:200px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->geriatric_score?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Remark:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control "value="<?php echo $patientInfo[0]->geriatric_remark?>" >
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>BARTHEL INDEX</h6>
                <hr style="color:#00cccc; margin-top:10px; width:120px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Bowels Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->bowels_score?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Bladder Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->bladder_score?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Toilet Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->toilet_score?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Bathing Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control "  value="<?php echo $patientInfo[0]->bathing_score?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Grooming Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->grooming_score?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Dressing Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->dressing_score?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Feeding Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->feeding_score?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Transfer Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->transfer_score?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Mobility Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->mobility_score?>">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Stairs Score:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->stairs_score?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Total Score:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->total_barthel_score?>">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>Fall Risk Assessment</h6>
                <hr style="color:#00cccc; margin-top:10px; width:150px;">
           </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">You have fallen in the past year?</label>
            </div>
            <div class="col-6">Yes
                <input type="text" class="form-control ">
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do you use or have been advised to use a stick or walker to move around safely?</label>
            </div>
            <div class="col-6">Yes
                <input type="text" class="form-control ">
            </div>
        </div>
       
        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do you feel unsteady while you are walking ?</label>
            </div>
            <div class="col-6">No
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do you steady yourself by holding onto furniture while walking at home?</label>
            </div>
            <div class="col-6">Yes
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">You are worried about falling?</label>
            </div>
            <div class="col-6">No
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do You need to push with your hands to stand up from a chair?</label>
            </div>
            <div class="col-6">No
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do You have some trouble to stepping up onto a curb?</label>
            </div>
            <div class="col-6">Yes
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do you often have to rush to the toilet?</label>
            </div>
            <div class="col-6">No
                <input type="text" class="form-control ">
            </div>
        </div>


        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Have lost some feeling in your feet?</label>
            </div>
            <div class="col-6">No
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do you take medicine that sometimes make you feel light- headed or more tired than usual?</label>
            </div>
            <div class="col-6">Yes
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Do you take medicine to help you sleep or improve your mood?</label>
            </div>
            <div class="col-6">Yes
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">I often feel sad or depressed?</label>
            </div>
            <div class="col-6">Yes
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Add up the points for each “Yes” answer. If subject score 4 or more points the subject may be at the risk of falling</label>
            </div>
            <div class="col-6">No
                <input type="text" class="form-control ">
            </div>
        </div>

    </div>
</section>

<!-- <table class="table table-striped">
        <tr>
          <th>Questions<?php /*print_r($preasses_fallrisk_quest);*/ ?></th><th>Answer</th>
        </tr>
        <?php
        for($qtn=0;$qtn<count($preasses_fallrisk_quest);$qtn++)
        {

            if($qtn=="0")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="past_year_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio past_year" name="past_year" value="2" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="past_year" class="chkradio past_year" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="1")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="use_stick_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio use_stick" name="use_stick" value="2" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="use_stick" class="chkradio use_stick" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="2")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="feel_stable_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="feel_stable" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="feel_stable" class="chkradio past_year" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="3")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="steady_holding_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="steady_holding" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="steady_holding" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="4")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="worry_fall_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="worry_fall" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="worry_fall" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="5")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="from_chair_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="from_chair" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="from_chair" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="6")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="curb_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="curb" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="curb" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="7")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="toilet_rush_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="toilet_rush" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="toilet_rush" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="8")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="lost_feet_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="lost_feet" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="lost_feet" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="9")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="light_headed_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="light_headed" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="light_headed" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="10")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="take_medicine_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="take_medicine" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="take_medicine" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="11")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="feel_sad_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td> 
                     <input type="radio" class="chkradio" name="feel_sad" value="1" <?php 
                        if($preasses_fallrisk_quest[$qtn]->answer=="1" || $preasses_fallrisk_quest[$qtn]->answer=="2"){
                             echo "checked=checked";
                            }
                        ?>>Yes  &nbsp;
                    <input type="radio" name="feel_sad" class="chkradio" value="0" <?php if($preasses_fallrisk_quest[$qtn]->answer=="0" ){
                            echo "checked=checked";
                        } ?>>No
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
            if($qtn=="12")
            {
                ?>
               <tr>
                  <td><?php echo $preasses_fallrisk_quest[$qtn]->questions; ?><input type="hidden" name="fall_total_score_qtn" class="form-control" value="<?php echo $preasses_fallrisk_quest[$qtn]->questions; ?>"></td>
                  <td>
                  <input type="text" name="fall_total_score" id="fall_total_score" class="form-control" placeholder="Enter Total Score" value="<?php echo $preasses_fallrisk_quest[$qtn]->answer; ?>"> 
                 </td>
                <input type="hidden" value="<?php echo $preasses_fallrisk_quest[$qtn]->fall_risk_id ?>" name="fallrisk_id[]">
              </tr>
              <?php 
            }
             
        } ?>
            
      </table>
    </div>
                                           
                                         

<section> -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>TIME UP AND GO TEST</h6>
                <hr style="color:#00cccc; margin-top:10px; width:150px;">
           </div>
        </div>
    
        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Test Score</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->time_up_go_score?>">
            </div>
        </div>
      
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h6>30 Second Chair Stand Test</h6>
                <hr style="color:#00cccc; margin-top:10px; width:150px;">
                <p>Chair Stand Below Average Scores</p>
           </div>
       </div>

        <!-- <table class="table">
  <thead>
    <tr>
     
      <th scope="col">AGE</th>
      <th scope="col">MEN</th>
      <th scope="col">WOMEN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <tr>60-64</tr>
      <td>65-69</td>
      <td>70-74</td>
      <td>75-79</td>
      <td>80-84</td>
      <td>85-89</td>
      <td>90-94</td>
    </tr>
    <tr>
     
      <td>&lt;14</td>
      <td>&lt;12</td>
      <td>&lt;12</td>
      <td>&lt;11</td>
      <td>&lt;10</td>
      <td>&lt;8</td>
      <td>&lt;7</td>
    </tr>
    <tr>
    
      <td>&lt;12</td>
      <td>&lt;11</td>
      <td>&lt;10</td>
      <td>&lt;10</td>
      <td>&lt;9</td>
      <td>&lt;8</td>
      <td>&lt;4</td>
    </tr>
  </tbody>
</table> -->

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


<div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Score*</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control " value="<?php echo $patientInfo[0]->chair_stand_score?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Observation by Doctor</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Recommendation</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Eligible for ALF</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control ">
            </div>
        </div>
    </div>
</section>

</body>
</html>