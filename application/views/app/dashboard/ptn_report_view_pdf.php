<html>
<head>
  <title></title>

</head>
<body>
    <div class="container-fluid">

        <table class="table table-bordered">
            <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">Complaint Report</th></tr>
        </table>


        <table class="table table-bordered">
            <tr bgcolor="#ddd">
                <th colspan="7" style="text-align: center">Personal Details</th>
            </tr>
            <tr>
                <th>Member No.</th>
                <th>Member Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Religion</th>
                <th>Blood Group</th>
            </tr>


            <?php if(!empty($getTodayAppointment)){ ?>
                <tr>
                 <td><?php echo $patientInfo->patient_no;?></td>
                 <td><?php echo !empty($patientInfo->middlename) ? $patientInfo->middlename : ''?></td>
                 <td><?php echo !empty($patientInfo->email_address) ? $patientInfo->email_address : ''?></td>
                 <td><?php echo ($patientInfo->birthday=="0000-00-00") ? '' : $patientInfo->birthday?></td>
                 <td><?php /*echo $patientInfo->gender*/?>
                 <?php
                 $ci_obj = & get_instance();
                 $ci_obj->load->model('app/general_model');
                 $pages = $ci_obj->general_model->getname($patientInfo->gender);

                 echo !empty($pages->cValue) ? $pages->cValue : '';
                 ?>
             </td>
             <td>
                 <?php
                 $ci_obj = & get_instance();
                 $ci_obj->load->model('app/general_model');
                 $pages = $ci_obj->general_model->getname($patientInfo->religion);
                 echo !empty($pages->cValue) ? $pages->cValue : '';
                 ?>
             </td>
             <td>
                 <?php
                 $ci_obj = & get_instance();
                 $ci_obj->load->model('app/general_model');
                 $pages = $ci_obj->general_model->getname($patientInfo->blood_group);
                 echo !empty($pages->cValue) ? $pages->cValue : '';
                 ?>
             </td>
         </tr>
         <?php 
     }
     ?>

 </table>

 <table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="4" style="text-align: center">Contact Information</th>
    </tr>
    <tr>

        <th>Address</th>
        <th>city</th>
        <th>Email</th>
        <th>Phone No.</th>


    </tr>


    <?php if(!empty($getTodayAppointment)){ ?>
        <tr>
           <td><?php echo $patientInfo->street;?></td>
           <td><?php echo $patientInfo->province?></td>
           <td><?php echo $patientInfo->email_address?></td>
           <td><?php echo $patientInfo->phone_no_office?></td>
       </tr>
   <?php }?>

</table>

<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="13" style="text-align: center">General Examination</th>
    </tr>
    <tr>
     <th>KCO</th>
     <th>Chief Complaint</th>
     <th>Family History</th>
     <th>Past History</th>
     <th>Pulse</th>
     <th>CVS</th>
     <th>B.P</th>
     <th>CNS</th>
     <th>SPO2</th>
     <th>Temp</th>
     <th>Urine/Motion</th>
     <th>P/A</th>
     <th>R/S</th>

 </tr>
 <?php if(!empty($getTodayAppointment)){ ?>
    <tr>
     <td><?php echo $patientInfo->ptn_kco;?></td>
     <td><?php echo $patientInfo->ptn_chf_comp?></td>
     <td><?php echo $patientInfo->ptn_fam_his?></td>
     <td><?php echo $patientInfo->ptn_past_his?></td>
     <td><?php echo $patientInfo->ptn_pulse?></td>
     <td><?php echo $patientInfo->ptn_cvs?></td>
     <td><?php echo $patientInfo->ptn_bp?></td>
     <td><?php echo $patientInfo->ptn_cns;?></td>
     <td><?php echo $patientInfo->ptn_spo2?></td>
     <td><?php echo $patientInfo->ptn_temp?></td>
     <td><?php echo $patientInfo->ptn_um?></td>
     <td><?php echo $patientInfo->ptn_pa?></td>
     <td><?php echo $patientInfo->ptn_rs?></td>
 </tr>
<?php }?>

</table>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="   https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

</div>
</body>
</html>