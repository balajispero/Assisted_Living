<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $reports_title?></title>
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
<style>
body{
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;
}
th {
    display: table-cell !important;
    vertical-align: inherit !important;
    font-weight: bold !important;
    text-align: left !important;
}
td {
    display: table-cell !important;
    vertical-align: inherit !important;
    font-weight: bold !important;
    text-align: left !important;
}
</style>
<body>

<center>
<font size="+1"><?php echo $companyInfo->company_name;?></font></b><br>                   
                            <?php echo $companyInfo->company_address;?><br>     
                            <?php echo $companyInfo->company_contactNo;?><br><br>
                            <?php echo $reports_title?>
</center>   
<br /><br />
<table align="center" width="100%" border="1" cellpadding="2" cellspacing="2" style="border:1px #999; border-collapse:collapse">
<tr>
	<td><strong>Member Name</strong><br /><br /><?php echo strtoupper($patientInfo->middlename);?></td>
    <td><strong>Reg No./IOP No.</strong><br /><br /><?php echo strtoupper($patientInfo->patient_no." / ".$getOPDPatient->IO_ID)?></td>
    <td><strong>Gender</strong><br /><br /><?php $ci_obj = & get_instance();
                                                            $ci_obj->load->model('app/general_model');
                                                            $nameby_id = $ci_obj->general_model->getname($patientInfo->gender);
    echo strtoupper($nameby_id->cValue)?></td>
    <td><strong>Date of Birth</strong><br /><br /><?php echo date("M d, Y",strtotime($patientInfo->birthday));?></td>
</tr>
<tr>
	<td><strong>Address</strong><br /><br /><?php echo strtoupper($patientInfo->street)?></td>
    <td><strong>Age</strong><br /><br /><?php echo strtoupper($patientInfo->age)?></td>
    <td><strong>Contact No.</strong><br /><br /><?php echo strtoupper($patientInfo->phone_no)?></td>
    <td><strong>Civil Status</strong><br /><br /><?php $nameby_id = $ci_obj->general_model->getname($patientInfo->civil_status);
     echo @strtoupper($nameby_id->cValue)?></td>
</tr>
</table>
<br />

<table cellpadding="5" cellspacing="5" width="100%" align="center">
<tr style="border-bottom:1px #999 solid">
	<th style="border-bottom:1px #999 solid">Date</th>
    <th style="border-bottom:1px #999 solid">I/V Fluids(ml)</th>
    <th style="border-bottom:1px #999 solid">Oral(ml)</th>
    <!--<th style="border-bottom:1px #999 solid">No. of Stool</th>-->
    <!--<th style="border-bottom:1px #999 solid">No. of Urine</th>-->
    <!-- <th style="border-bottom:1px #999 solid">Prepared Date</th>
    <th style="border-bottom:1px #999 solid">Prepared Time</th> -->
    <th style="border-bottom:1px #999 solid">Prepared By</th>
</tr>
 <?php foreach($prepare as $getIntake){?>
                                           <tr>
                                                <td align="center"><?php echo date("d M, Y h:i:s A",strtotime($getIntake->dDateTime));?></td>
                                                <td align="center"><?php echo($getIntake->IV_fluids)?></td>
                                                <td align="center"><?php echo($getIntake->oral)?></td>
                                                <!--<td align="center"><?php echo($getIntake->no_stool)?></td>-->
                                                <!--<td align="center"><?php echo($getIntake->no_urine)?></td>-->
                                                <!-- <td align="center"><?php echo($prepare[0]->dDate)?></td>
                                                <td align="center"><?php echo($prepare[0]->dDateTime)?></td> -->
                                                <td align="center"><?php 
                                                            $ci_obj = & get_instance();
                                                            $ci_obj->load->model('app/general_model');
                                                            $pages = $ci_obj->general_model->getPreparedBy($getIntake->cPreparedBy);
                                                            
                                                            echo $pages->cPreparedBy?></td>
                                                
                                           </tr>
                                           <?php }?>  
</table>

</body>
</html>