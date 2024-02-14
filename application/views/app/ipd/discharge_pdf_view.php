<?php
$date = date("Y-m-d H:i:s", time());
?>
<html>
<head>
  <title></title>
 
</head>
<body>
    <div class="container-fluid">
   <!--  <table class="table">
        <tr><th colspan="10" style="text-align: center;border-top-style: none;"><img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./assets/img/logo.jpg')); ?>" alt="img not found" width="100px" height="80px"></th></tr>
    </table> -->

    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">Discharge Report</th></tr>
    </table>
    <?php $ci_obj = & get_instance();?>
      <!-- <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="2" style="text-align: center">Ongoing Medication</th></tr>
        <tr><td>Medicine</td><td><?php echo $patientInfo->ptn_sugess_medi; ?></td></tr>
     </table> -->
     <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">Personal Information</th></tr>
    </table>
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th>Member No.</th><th>Reg Date</th><th>Name</th><th>Email</th><th>Birthday</th><th>Age</th><th>Gender</th><th>Civil Status</th><th>Blood Group</th></tr>
        <tr>
            <td><?php echo $patientInfo->patient_no;?></td><td><?php echo $patientInfo->date_entry;?></td><td><?php echo $patientInfo->middlename;?></td><td><?php echo $patientInfo->email_address;?></td><td><?php echo $patientInfo->birthday;?></td><td><?php echo $patientInfo->age;?></td><td><?php $nameby_id = $ci_obj->general_model->getname($patientInfo->gender);
     echo !empty($nameby_id->cValue) ? $nameby_id->cValue : '' ?></td><td>
                <?php $nameby_id = $ci_obj->general_model->getname($patientInfo->civil_status);
     echo !empty($nameby_id->cValue) ? $nameby_id->cValue : '' ?>
            </td><td>
                <?php $nameby_id = $ci_obj->general_model->getname($dischargeInfo->blood_group);
     echo !empty($nameby_id->cValue) ? $nameby_id->cValue : '' ?>
            </td>
        </tr>        
    </table>
     <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="6" style="text-align: center">Room Details</th></tr>
        <tr><td>Member No.</td><td><?php echo $patientInfo->patient_no; ?></td><td>IOP No.</td><td><?php echo $getOPDPatient->IO_ID; ?></td><td>Admit Date</td><td><?php echo $getOPDPatient->date_visit; ?></td></tr>
        <tr><td>Room No.</td><td><?php echo $getOPDPatient->room_name; ?></td><td>Bed No.</td><td><?php echo $getOPDPatient->bed_name; ?></td><td>Discharge Date</td><td><?php echo $dischargeInfo->discharged_date; ?></td></tr>
     </table> 
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">Contact Information</th></tr>
    </table>
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th>Address</th><th>City</th><th>Phone No.</th></tr>
        <tr>
            <td><?php echo !empty($patientInfo->stress) ? $patientInfo->stress : ''?></td><td><?php echo $patientInfo->province;?></td><td><?php echo $patientInfo->mobile_no;?></td>
        </tr>        
    </table>
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">Relative Contact 1</th></tr>
    </table>
        <table class="table table-bordered">
        <tr bgcolor="#ddd"><th>Relation With</th><th>Address</th><th>City</th><th>Phone No.</th></tr>
        <tr>
            <td><?php echo $patientInfo->relation_with;?></td><td><?php echo $patientInfo->rel_add;?></td><td><?php echo $patientInfo->rel_city;?></td><td><?php echo $patientInfo->rel_phone;?></td>
        </tr>        
    </table>
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">Relative Contact 2</th></tr>
    </table>
        <table class="table table-bordered">
        <tr bgcolor="#ddd"><th>Relation With</th><th>Address</th><th>City</th><th>Phone No.</th></tr>
        <tr>
            <td><?php echo $patientInfo->relation_with2;?></td><td><?php echo $patientInfo->rel_add2;?></td><td><?php echo $patientInfo->rel_city2;?></td><td><?php echo $patientInfo->rel_phone2;?></td>
        </tr>        
    </table>
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">General Examination</th></tr>
    </table>
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th>KCO</th><th>Chief Complaint</th><th>Family History</th><th>Past History</th><th>Pulse</th><th>B.P</th><th>Temp</th><th>SPO2</th><th>Urine</th><th>P/A</th><th>R/S</th><th>Food Intake</th></tr>
        <tr>
            <td><?php echo $dischargeInfo->ptn_kco;?></td><td><?php echo $dischargeInfo->ptn_chf_comp;?></td><td><?php echo $dischargeInfo->ptn_fam_his;?></td><td><?php echo $dischargeInfo->ptn_past_his;?></td><td><?php echo $dischargeInfo->ptn_pulse;?></td><td><?php echo $dischargeInfo->ptn_bp;?></td>
            <td><?php echo $dischargeInfo->ptn_temp;?></td><td><?php echo $dischargeInfo->ptn_spo2;?></td><td><?php echo $dischargeInfo->ptn_um;?></td><td><?php echo $dischargeInfo->ptn_pa;?></td><td><?php echo $dischargeInfo->ptn_rs;?></td><td><?php echo $dischargeInfo->ptn_foodin;?></td>
        </tr>        
    </table>
    <table class="table table-bordered">
        <tr bgcolor="#ddd"><th colspan="2" style="text-align: center">Ongoing Medication</th></tr>
        <?php $medicine = explode(',',$dischargeInfo->ptn_sugess_medi); foreach($medicine as $key => $medicine1){ $key1 = $key+1; ?>
        <tr><td><?=$key1?></td><td><?=$medicine1?></td></tr>
        <?php }?>
     </table>
     <table class="table table-bordered">
        <tr bgcolor="#ddd"><th style="text-align: center">Doctor Notes</th></tr>
        <tr><td><?php echo $dischargeInfo->ptn_addtnl_note;?></td></tr>
     </table>
     

    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


</div>
</body>
</html>