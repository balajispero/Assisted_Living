<html>
<head>
<title></title>
</head>
<body>	
<?php
// $invoiceDate = date("d/M/Y", strtotime($invoiceValues[0]['order_date']));
$output = '';
$output1='';
$output .= '<table width="100%" border="1" cellpadding="5" cellspacing="0">

	<tr>
	<td colspan="2" align="center" style="font-size:18px"><b>Invoice</b></td>
	</tr>

	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
	<td width="55%" align="center">
	<img  class="navbar-brand img-rounded" src="'.base_url().'uploads/logo.png" style=" cursor:pointer;background-color:white;height:90px;width:470px;margin-top:5px;">
	</td>
	<td width="45%">         
	 <br />
	 
	</td>
	</tr>
	</table>
	<br />
	


	<table width="100%" border="1" cellpadding="3" cellspacing="0">
	<tr>
	<th align="left">Sr No.</th>
	<!--<th align="left">Item Code</th>-->
	<th align="left">Description</th>
	<!--<th align="left">Quantity</th>
	<th align="left">Price</th>-->
	<th align="left">Amount</th> 
	</tr>';

$count = 0;   
foreach($invoiceItems as $invoiceItem){
	$count++;
	$output .= '

	<tr>
	<td align="left">'.$count.'</td>
	<!--<td align="left"></td>-->
	<td align="left">'.$invoiceItem->charges.'</td>
	<!--<td align="left">'.$invoiceItem->iop_id.'</td>
	<td align="left"></td>-->
	<td align="left">'.$invoiceItem->laboratory_id.'</td>   
	</tr>';

}


/*$output .= '

	<tr>
	<td align="right" colspan="2"><b>Sub Total</b></td>
	<td align="left"><b></b></td>
	</tr>
	<tr>
	<td align="right" colspan="2"><b>Tax Rate :</b></td>
	<td align="left"></td>
	</tr>
	<tr>
	<td align="right" colspan="2">Tax Amount: </td>
	<td align="left"></td>
	</tr>
	<tr>
	<td align="right" colspan="2">Total: </td>
	<td align="left"></td>
	</tr>
	<tr>
	<td align="right" colspan="2">Amount Paid:</td>
	<td align="left"></td>
	</tr>
	<tr>
	<td align="right" colspan="2"><b>Amount Due:</b></td>
	<td align="left"></td>
	</tr>
	<tr>
	<td align="left" colspan="3"><b>Note : </b></td>
	</tr>';*/
$output .= '
	</table>
	</td>
	</tr>
	</table>';
	$output .= '
	<table width="100%" border="1" cellpadding="5">
	<tr>
	<td width="55%">
	PAYMENT DETAILS:<br />
	Account No. : <br />
	Name : Spero healthcare Innovations Pvt. Ltd<br /> 
	Bank Name : <br />
	IFSC Code : <br />
	Branch : <br />
	</td>
	<td width="45%">
	
	</td>
	</tr>
	</table>';

$output.='<table align="center"><tr><th><h3>This is computer generated print does not require signature.</h3></th></tr></table>';				
				
echo $output;
?>   
</body>
</html>   