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
            <input type="text" class="form-control ">
            </div>

        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Date of Birth :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Age :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
           </div>

           <div class="row mt-2">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label">Gender :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Marital Status :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
           </div>

           <div class="row">
           <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Preassessment No. :</label>
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
            <input type="text" class="form-control ">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Mother :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Sibling :</label>
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>

            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
            <div class="col-3">
            <input type="text" class="form-control ">
            </div>
            
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Name of Spouse :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Contact no of Spouse :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label"> Permanent Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
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
        </div>

        <div class="row mt-2">
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
        </div>
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
            <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Address :</label>
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
            <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
            <label class=" col-form-label">Name of HCP Holder :</label>
            </div>
            <div class="col-3">
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
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Address :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
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
        </div>

        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Clinic/Hospital Name :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
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
            <input type="text" class="form-control ">
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
            <input type="text" class="form-control ">
            </div>
        </div>

        
        <div class="row mt-2">
        <div class="col-md-3 ml-4">
            <label class=" col-form-label">Past History :</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control ">
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
                <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Food:</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">Any Other :</label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control ">
            </div>
            <div class="col-md-3 ml-4">
                <label class=" col-form-label">DEWORMING medicine last taken on Date:</label>
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
                <h6>IMMUNIZATION HISTORY</h6>
                <hr style="color:#00cccc; margin-top:10px; width:190px;">
           </div>
        </div>
</div>
</section>



</body>
</html>