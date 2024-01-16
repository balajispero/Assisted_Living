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
		A.added_date_by_lab,
		B.charges");
		
		$where = "( 
				A.lab_test_name=B.id
				)
				and A.iop_id='".$iop_no."'
				and A.patient_no='".$patient_no."'
				and DATE(A.added_date_by_lab) between '".$cFrom."' and '".$cTo."'
				and A.category_id = 7    
				and A.InActive = 0";
				$this->db->where($where);
		//$this->db->order_by('A.patient_no','asc');
		$this->db->join("lab_test_name_with_charges B","B.id = A.laboratory_id","left outer");
		$query = $this->db->get("iop_laboratory A");
		/*print_r($query->result());
		echo $this->db->last_query(); die;*/
		return $query->result();
	}

	public function generate_therapy_bill($iop_no, $patient_no){
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
		A.eval_no,
		A.added_date,
		A.therapy_charges");
		
		$where = "( 
				A.InActive = 0
				)
				and A.iop_id='".$iop_no."'
				and A.patient_no='".$patient_no."'
				and DATE(A.added_date) between '".$cFrom."' and '".$cTo."'";
				$this->db->where($where);
		//$this->db->order_by('A.patient_no','asc');
		//$this->db->join("lab_test_name_with_charges B","B.id = A.laboratory_id","left outer");
		$query = $this->db->get("physio_notes A");
		/*print_r($query->result());
		echo $this->db->last_query(); die;*/
		return $query->result();
	}
	public function save_invoice_orders($data)
	{     
        $this->db->insert('invoice_orders', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
	}
	public function save_invoice_orders_items($data)
	{     
        return $this->db->insert('invoice_orders_items', $data);    
	}


	public function getServiceByEvalNo($eval_no) {
    $query = $this->db->get_where('physio_evaluation', array('eval_no' => $eval_no));
    return $query->row();
}
	
}
?>