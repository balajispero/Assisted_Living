<html>
<head>
  <title></title>

</head>
<body>
    
    <div class="container-fluid">
          <center>
           
            <div class="col-md-12" style="background-image:url('<?php echo base_url();?>/public/invoice/invoice_header.jpg'); width:100%; min-height:140px; background-repeat: no-repeat;background-size:cover;">
          <font size="+1"><?php echo $companyInfo->company_name;?></font></b><br>                   
          <?php echo $companyInfo->company_address;?><br>     
          <?php echo $companyInfo->company_contactNo;?>
          
      </div>
 
     </center>    
        <table class="table table-bordered" style="margin-top:15px;">
            <tr bgcolor="#ddd"><th colspan="10" style="text-align: center">Member Report</th></tr>
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
        <th colspan="3" style="text-align: center">General Examination</th>
    </tr>
    <tr>
     <!-- <th>KCO</th> -->
     <th>Chief Complaint</th>
     <th>Family History</th>
     <th>Past History</th>
     <!-- <th>Pulse</th>
     <th>CVS</th>
     <th>B.P</th>
     <th>CNS</th>
     <th>SPO2</th>
     <th>Temp</th>
     <th>Urine/Motion</th>
     <th>P/A</th>
     <th>R/S</th> -->

 </tr>
 <?php if(!empty($getTodayAppointment)){ ?>
    <tr>
    <!--  <td><?php echo $patientInfo->ptn_kco;?></td> -->
     <td><?php echo $patientInfo->ptn_chf_comp?></td>
     <td><?php echo $patientInfo->ptn_fam_his?></td>
     <td><?php echo $patientInfo->ptn_past_his?></td>
     <!-- <td><?php echo $patientInfo->ptn_pulse?></td>
     <td><?php echo $patientInfo->ptn_cvs?></td>
     <td><?php echo $patientInfo->ptn_bp?></td>
     <td><?php echo $patientInfo->ptn_cns;?></td>
     <td><?php echo $patientInfo->ptn_spo2?></td>
     <td><?php echo $patientInfo->ptn_temp?></td>
     <td><?php echo $patientInfo->ptn_um?></td>
     <td><?php echo $patientInfo->ptn_pa?></td>
     <td><?php echo $patientInfo->ptn_rs?></td> -->
 </tr>
<?php }?>

</table>
<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="10" style="text-align: center">Vital Parameters</th>
    </tr>
    <tr>
     <th>KCO</th>
     <!-- <th>Chief Complaint</th>
     <th>Family History</th>
     <th>Past History</th> -->
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
     <!-- <td><?php echo $patientInfo->ptn_chf_comp?></td>
     <td><?php echo $patientInfo->ptn_fam_his?></td>
     <td><?php echo $patientInfo->ptn_past_his?></td> -->
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
<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="7" style="text-align: center">Individual care Plan</th>
    </tr>
   <tr>
                                            <th>Date Time</th>
                                                    <th>Co-morbid Condition</th>
                                                    <th>Goal</th>
                                                    <th>Plan of Action</th>
                                                    <th>Action Taken</th>
                                                    <th>Review</th>
                                                    <th>Prepared by</th>
                                        </tr>
 <?php if(!empty($getProgressNote)){ ?>
                                        <?php foreach($getProgressNote as $rows){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td><?php echo $rows->comorbid_cond?></td>
                                                <td><?php echo $rows->goal?></td>
                                                <td><?php echo $rows->plan_action?></td>
                                                <td><?php echo $rows->action_taken?></td>
                                                <td><?php echo $rows->review?></td>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                        </tr>
                                        <?php } }?>
                                    </table>

<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="2" style="text-align: center">Diagnosis</th>
    </tr>
     <tr>
                                            <th>Diagnosis</th>
                                            <th>Remarks</th>
                                        </tr>
 <?php if(!empty($patientDiagnosis)){ ?>
                                        <?php foreach($patientDiagnosis as $diagnosisList4){?>
                                        <tr>
                                           <td><?php echo $diagnosisList4->diagnosis_name;?></td>
                                           <td><?php echo $diagnosisList4->remarks?></td>
                                        </tr>
                                        <?php } }?>

</table>
<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="4" style="text-align: center">LAB</th>
    </tr>
    <tr>
                                            <th>IOP No</th>
                                            <th>Test Date</th>
                                            <th>Test Name</th>
                                            <th>Patient Name</th>
                                            
                                        </tr>
 <?php if(!empty($getLabTest)){ ?>
                                        <?php foreach($getLabTest as $getLabTest){?>
                                        <tr>
                                           <td><?php echo anchor('app/lab/view_lab_sample_report/'.$getLabTest->io_lab_id,$getLabTest->iop_id, 'target="_blank"');?></td>
                                           <td><?php echo $getLabTest->dDate?></td>
                                           <td>
                                            <?php
                                                    $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getLabSampleById($getLabTest->laboratory_id);
                                                echo @$pages->test_name;
                                            ?>
                                            <?php /*echo $getLabTest->laboratory_id;*/?>
                                                
                                            </td>
                                           <td>
                                            <?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/lab_model');
                                                $ptn_name = $ci_obj->lab_model->get_ptn_name_by_patient_no($getLabTest->patient_no);
                                                echo @$ptn_name[0]->middlename;
                                                ?>
                                            </td>
                                           
                                        </tr>
                                        <?php } }?>

</table>

<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="4" style="text-align: center">Progress Note</th>
    </tr>
     <tr>
                                            <th>Date Time</th>
                                            <th>Complain</th>
                                            <th>Notes</th>
                                            <th>Prepared by</th>
                                        </tr>
 <?php if(!empty($getNurseProgressNote)){ ?>
                                        <?php foreach($getNurseProgressNote as $rows){?>
                                        <tr>
                                           <td><?php echo date("M d, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td>
                                                    <?php
                                                    if(!empty($rows->complain_id))
                                                    {
                                                        $ci_obj = & get_instance();
                                                        $ci_obj->load->model('app/general_model');
                                                        $compl = $ci_obj->general_model->getComplainById($rows->complain_id);
                                                        
                                                        echo $compl->complain_name;
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $rows->notes?></td>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                
                                        </tr>
                                        <?php } }?>

</table>
<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="7" style="text-align: center">Vital Sign</th>
    </tr>
     <tr>
                                                    <th>Date Time</th>
                                                    <th>Pulse rate</th>
                                                    <th>Temperature</th>
                                                    <th>SPO2</th>
                                                    <th>Blood Pressure</th>
                                                    <th>Resprition Rate </th>
                                                    <th>Prepared by</th>
                                        </tr>
 <?php if(!empty($getVital)){ ?>
                                        <?php foreach($getVital as $rows){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($rows->dDateTime));?></td>
                                                <td><?php echo $rows->pulse_rate?>/min</td>
                                                <td><?php echo $rows->temperature?> F</td>
                                                <td><?php echo $rows->spo2?></td>
                                                <td><?php echo $rows->bp?> mm of Hg</td>
                                                <td><?php echo $rows->respiration?>/min</td>
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($rows->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                
                                        </tr>
                                        <?php } }?>

</table>
<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="5" style="text-align: center">Intake Record</th>
    </tr>
    <tr>
                                                    <th>Date & Time</th>
                                                     <th>Particulars</th> 
                                                    <th>I/V Fluids(ml)</th>
                                                    <th>Oral(ml)</th>
                                                    <th>Prepared By</th>
                                        </tr>
 <?php if(!empty($getIntake)){ ?>
                                        <?php foreach($getIntake as $getIntake){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($getIntake->dDateTime));?></td>
                                                 <td><?php echo $getIntake->particulars?></td> 
                                                <td><?php echo $getIntake->IV_fluids?></td>
                                                <td><?php echo $getIntake->oral?></td>
                                                <td><?php 
                                                                        $ci_obj = & get_instance();
                                                                        $ci_obj->load->model('app/general_model');
                                                                        $pages = $ci_obj->general_model->getPreparedBy($getIntake->cPreparedBy);
                                                                        
                                                                        echo $pages->cPreparedBy?></td>
                                                
                                        </tr>
                                        <?php } }?>

</table>
<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="5" style="text-align: center">Output Record</th>
    </tr>
      <tr>
                                                    <th>Date & Time</th>
                                                    <th>Urine(ml)</th>
                                                    <th>Stool</th>
                                                    <th>Remark</th>
                                                    
                                                    <th>Prepared By</th>
                                        </tr>
 <?php if(!empty($getOutput)){ ?>
                                        <?php foreach($getOutput as $getOutput){?>
                                        <tr>
                                           <td><?php echo date("d M, Y h:i:s A",strtotime($getOutput->dDateTime));?></td>
                                                <td><?php echo $getOutput->urine?></td>
                                                <td><?php echo $getOutput->stool?></td>
                                                <td><?php echo $getOutput->remark?></td>
                                                <!--<td><?php echo $getOutput->skin?></td>-->
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($getOutput->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                
                                        </tr>
                                        <?php } }?>

</table>
<table class="table table-bordered">
    <tr bgcolor="#ddd">
        <th colspan="4" style="text-align: center">Medicine Record</th>
    </tr>
      <tr>
                                                    <th>Date & Time</th>
                                                    <th>Medicine Name</th>
                                                    <th>Dose</th>
                                                    
                                                    <th>Prepared By</th>
                                        </tr>
  <?php if(!empty($given_medicine)){ ?>
                                        <?php foreach($given_medicine as $given_medicine){?>
                                        <tr>
                                           <td><?php echo date("d M, Y",strtotime($given_medicine->added_date));?></td>
                                                <td><?php
                                                $pages = $ci_obj->general_model->getMedicineById($given_medicine->iop_med_id);
                                                 echo $pages->medicine_name;
                                             ?></td>
                                                <td><?php echo $given_medicine->dose?></td>
                                               
                                                <td><?php 
                                                $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/general_model');
                                                $pages = $ci_obj->general_model->getPreparedBy($given_medicine->cPreparedBy);
                                                
                                                echo $pages->cPreparedBy?></td>
                                                
                                        </tr>
                                        <?php } }?>

</table>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="   https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

</div>

</body>
</html>