<html>
<head>
<title></title>
</head>
<body>	
<?php
$invoiceDate = date("d/M/Y", strtotime($invoiceValues[0]['order_date']));
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
	Invoice No. : '.$invoiceValues[0]['order_id'].'<br />
	Invoice Date : '.$invoiceDate.'
	</td>
	</tr>
	</table>
	<br />
	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
	<td width="55%">
	To,<br />
	<b>RECEIVER (BILL TO)</b><br />
	Name : '.$invoiceValues[0]['order_receiver_name'].'<br /> 
	Billing Address : '.$invoiceValues[0]['order_receiver_address'].'<br />
	Payment Mode : '.$invoiceValues[0]['note'].'
	</td>
	<td width="45%">
	From,<br />         
	<b>Estrella Technology<br>Sr.No.127,Green Park Society,<br>Behind Rail Vihar Bijilinagar,Chinchwad,Pune-411033.</b><br />
	Phone:9890216189<br />
	Email:info@estrellatechnolopgies.com
	</td>
	</tr>
	</table></tr>


	<table width="200%" border="1" cellpadding="3" cellspacing="0">
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
	<!--<td align="left">'.$invoiceItem["item_code"].'</td>-->
	<td align="left">'.$invoiceItem["item_name"].'</td>
	<!--<td align="left">'.$invoiceItem["order_item_quantity"].'</td>
	<td align="left">'.$invoiceItem["order_item_price"].'</td>-->
	<td align="left">'.$invoiceItem["order_item_final_amount"].'</td>   
	</tr>';

}

$output .= '

	<tr>
	<td align="right" colspan="2"><b>Sub Total</b></td>
	<td align="left"><b>'.$invoiceValues[0]['order_total_before_tax'].'</b></td>
	</tr>
	<tr>
	<td align="right" colspan="2"><b>Tax Rate :</b></td>
	<td align="left">'.$invoiceValues[0]['order_tax_per'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="2">Tax Amount: </td>
	<td align="left">'.$invoiceValues[0]['order_total_tax'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="2">Total: </td>
	<td align="left">'.$invoiceValues[0]['order_total_after_tax'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="2">Amount Paid:</td>
	<td align="left">'.$invoiceValues[0]['order_amount_paid'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="2"><b>Amount Due:</b></td>
	<td align="left">'.$invoiceValues[0]['order_total_amount_due'].'</td>
	</tr>
	<tr>
	<td align="left" colspan="3"><b>Note : '.$invoiceValues[0]['note'].'</b></td>
	</tr>';
$output .= '
	</table>
	</td>
	</tr>
	</table>';
$output.='<table align="center"><tr><th><h3>This is computer generated print does not require signature.</h3></th></tr></table>';				
				
echo $output;
?>   
</body>
</html>   