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

	public function generate_lab_bill($iop_no, $patient_no){
		if($this->input->post("cFrom") == ""){
			//$cFrom = date("Y-m-d");	
			$cFrom="";
		}else{
			$cFrom = $this->input->post("cFrom");
		}
		
		if($this->input->post("cTo") == ""){
			$cTo = date("Y-m-d");	
		}else{
			$cTo = $this->input->post("cTo");
		}
		
		$this->db->select("A.patient_no,A.iop_id,
		A.laboratory_id,
		B.charges");
		
		$where = "( 
				A.lab_test_name=B.test_name
				)
				and A.iop_id='".$iop_no."'
				and A.patient_no='".$patient_no."'
				and DATE(A.added_date_by_lab) between '".$cFrom."' and '".$cTo."'
				and A.category_id = 7    
				and A.InActive = 0";
				$this->db->where($where);
		//$this->db->order_by('A.patient_no','asc');
		$this->db->join("lab_test_name_with_charges B","B.test_name = A.laboratory_id","left outer");
		$query = $this->db->get("iop_laboratory A");
		 //print_r($query->result());die;
		//echo $this->db->last_query(); die;
		return $query->result();
	}
	
}
?>