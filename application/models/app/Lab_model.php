<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Lab_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function get_lab_sample_test($limit = 10, $offset = 0){
		if($this->input->post('cFrom') == ""){	
			$cFrom = "";
		}else{	
			$cFrom = $this->input->post('cFrom');
		}
		
		if($this->input->post('cTo') == ""){
			$cTo = date("Y-m-d");	
		}else{	
			$cTo = $this->input->post('cTo');
		}
		
		$this->db->select("
		    A.io_lab_id,
		    A.iop_id,
			A.laboratory_id,
			A.doctor,
			A.dDate,
			A.doctor,
			A.doctor,
			A.doctor
			",false);
		
		/*if($this->session->userdata('user_role') == 5)
		{*/
			$where = "(
				A.iop_id like '%".$this->input->post('search')."%' or 
				A.laboratory_id like '%".$this->input->post('search')."%'
				) 
				and A.dDate between '".$cFrom."' and '".$cTo."'
				and A.category_id=7
				and A.InActive = 0";

		/*}else{
				$where = "(
				A.preasses_id like '%".$this->input->post('search')."%' or 
				A.preasses_name like '%".$this->input->post('search')."%'
				) 
				and A.date_entry between '".$cFrom."' and '".$cTo."'
				and A.added_by='".$this->session->userdata('user_id')."'
				and A.InActive = 0";
			}*/
		
		$this->db->where($where);
		//$this->db->order_by('A.preasses_id','desc');
		//$this->db->join("patient_psychological_cond B","B.preasses_id = A.preasses_id","left outer");
		$query = $this->db->get("iop_laboratory A", $limit, $offset);
		//echo $this->db->last_query(); die;
		return $query->result();
	}

	public function count_all_lab_sample_test(){
		if($this->input->post('cFrom') == ""){
			$cFrom ="";	
		}else{	
			$cFrom = $this->input->post('cFrom');
		}
		
		if($this->input->post('cTo') == ""){
			$cTo = date("Y-m-d");
		}else{	
			$cTo = $this->input->post('cTo');
		}
		
		$this->db->select("
		    A.io_lab_id,
		    A.iop_id,
			A.laboratory_id,
			A.doctor,
			A.dDate,
			A.doctor,
			A.doctor,
			A.doctor
			",false);
		
		/*if($this->session->userdata('user_role') == 5)
		{*/
			$where = "(
				A.iop_id like '%".$this->input->post('search')."%' or 
				A.laboratory_id like '%".$this->input->post('search')."%'
				) 
				and A.dDate between '".$cFrom."' and '".$cTo."'
				and A.category_id=7
				and A.InActive = 0";

		/*}else{
				$where = "(
				A.preasses_id like '%".$this->input->post('search')."%' or 
				A.preasses_name like '%".$this->input->post('search')."%'
				) 
				and A.date_entry between '".$cFrom."' and '".$cTo."'
				and A.added_by='".$this->session->userdata('user_id')."'
				and A.InActive = 0";
			}*/
		
		$this->db->where($where);
		//$this->db->order_by('A.preasses_id','desc');
		//$this->db->join("patient_psychological_cond B","B.preasses_id = A.preasses_id","left outer");
		$query = $this->db->get("iop_laboratory A");
		return $query->num_rows();
	}
		public function get_lab_sample_test_single($id){
		
		$this->db->select("
		    A.io_lab_id,
		    A.iop_id,
			A.laboratory_id,
			A.doctor,
			A.dDate,
			A.lab_test_name,
			A.lab_test_reports,
			A.doctor
			",false);
		
		$this->db->where(array('A.InActive'=>0,'A.category_id'=>7,'A.io_lab_id'=>$id));
		//$this->db->order_by('A.preasses_id','desc');
		//$this->db->join("patient_psychological_cond B","B.preasses_id = A.preasses_id","left outer");
		$query = $this->db->get("iop_laboratory A");
		return $query->result();
	}
	public function get_ptn_name_by_iop_no($room_id){
		$this->db->select("
			A.room_bed_id,
			A.bed_name,
			C.patient_no,
			B.IO_ID,
			concat(D.cValue,' ',C.firstname,' ',C.lastname) as patient,
			B.date_visit,
			B.time_visit,
			A.nStatus
		",false);
		$this->db->where(array(
			'A.room_master_id'		=>		$room_id,
			'A.InActive'			=>		'0'
		));
		$this->db->join("patient_details_iop B","B.IO_ID = A.patient_no","left outer");
		$this->db->join("patient_personal_info C","C.patient_no = B.patient_no","left outer");
		//$this->db->join("system_parameters D","D.param_id = C.title","left outer");
		$this->db->order_by("A.bed_name","ASC");
		$query = $this->db->get("patient_personal_info A");
		return $query->result();
	}
		
	
}