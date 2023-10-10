<?php
class Invoicemodel extends CI_Model {
	
	public function login_check($email,$pass)
	{
		
		$qry=$this->db->where('email',$email)->where('password',$pass)->get('invoice_user');
		return $qry->result();
	}
	public function getInvoiceList(){
		// $this->session->userdata('user_id')
		$qry=$this->db->where('user_id',"2")->get('invoice_order');
		return $qry->result_array();
	}
	public function getInvoice($invoiceId){
		$qry=$this->db->where(array('user_id'=>$this->session->userdata('user_id'),'order_id'=>$invoiceId))->get('invoice_order');
		return $qry->result_array();
	}	
	public function getInvoiceItems($invoiceId){
		$qry=$this->db->where(array('order_id'=>$invoiceId))->get('invoice_order_item');
		return $qry->result_array();
			
	}
	
}
?>