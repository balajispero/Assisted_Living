<html>
<head>
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>	
<?php

?>   


	<div class="row">
		<div class="col-md-12" style="background-image:url('<?php echo base_url();?>/public/invoice/invoice_header.jpg'); width:100%; min-height:140px; background-repeat: no-repeat;background-size:cover;">
         	<div style="width:80%; float:right;">
			 <div style="padding-top:10px;color:white;margin-left:250px">
                        <div class="col-md-12 ">
                            <label style="font-size:18px;font-weight: bold;">Spero Healthcare Innovations Pvt. Ltd.</label>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label style="font-size:15px">Bill No - <?php echo $bill_no; ?></label>
                             </div>
                        <div class="col-md-12">
                            <label style="font-size:15px">Patient Name - <?php echo @$patientInfo->middlename?></label>
                                </div>
                        <div class="col-md-12">
                            <label style="font-size:15px">Mobile No - <?php echo @$patientInfo->mobile_no?></label>
                              </div>
                        <div class="col-md-12">
                            <label style="font-size:15px">Email ID - <?php echo @$patientInfo->email_address?></label>
                             </div>
						</div>
					</div>
				</div>
			</div>

	<div class="row mt-4">
		<div class="col-12">
		<table cellspacing="5" colspan="5" cellpadding="2" style="border:0px solid #CCC; align-items:center;  width:100%; ">
		<thead>
                                <tr style="background: #b3fffe; color:black; font-size:17px;">
                      
                                    <th>Sr No</th>
                                    <th>Service</th>
                                    <!-- <th >Discription</th> --> 
                                    <th >Date</th>
                                    <th  colspan="5" width="10%">Amount</th>
								</tr>
							 </thead>

							<?php
							$count=0;
							$total_amount=0;  
							foreach($invoiceItems as $invoiceItem){ 
								$count++;
								$total_amount=$total_amount+$invoiceItem->therapy_charges;
								 ?>
								
	                        <tr>
      
			                  <td><?php echo $count; ?></td>
							  <td><?php 
							    $ci_obj = & get_instance();
                                                $ci_obj->load->model('app/Invoicemodel');
                                                $pages = $ci_obj->Invoicemodel->getServiceByEvalNo($invoiceItem->eval_no);
                                                echo @$pages->therapy_type;
							  ?><</td>
							  <!-- <td><?php /*echo @$pages->ptn_name;*/?></td> --> 
							  <td><?php echo date("Y-m-d",strtotime($invoiceItem->added_date)); ?></td>
							  <td><?php echo $invoiceItem->therapy_charges; ?></td>
							  </tr>
							<?php }?>
						</table>
					</div>
				</div>

                
				<div class="row mt-5">
				<div class="col-5">
				<h1 style="background:#b3fffe; font-size:17px; color:#333;">TOTAL :     <span style="float:right; margin-right:90px;"><?=$total_amount?></span></h1>
				</div>
			    </div>

				<div class="row mt-2">
					<div class="col-md-12" style="text-align:left;background:#b3fffe;">
					PAYMENT DETAILS :<br />
                    Name : Spero healthcare Innovations Pvt. Ltd<br />
                    Account No. : <br /> 
                    Bank Name : <br />
                    IFSC Code : <br />
                    Branch : <br />
				</div>
			</div>


		    <div style="position: fixed;bottom: 0;">
            <img src="<?=base_url()?>/public/invoice/Invoice_footer.png" width="100%"   alt="Spero Healthcare Innovations Pvt. Ltd." >
                <span>
                      <!-- <p onclick="sp()">Date : </p> -->
                </span>   
                                          
            </div>  
</body>
</html>   