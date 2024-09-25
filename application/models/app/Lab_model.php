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
			A.patient_no,
			A.laboratory_id,
			A.doctor,
			A.dDate,
			A.doctor,
			A.doctor,
			A.doctor,
			B.test_name,
			C.middlename
			",false);
		
		
			$where = "(
			A.iop_id like '%".$this->input->post('search')."%' or 
			A.laboratory_id like '%".$this->input->post('search')."%' or
			B.test_name like '%".$this->input->post('search')."%' or 
			C.middlename like '%".$this->input->post('search')."%'
			) 
			and A.dDate between '".$cFrom."' and '".$cTo."'
			and (A.category_id=7 or A.category_id=14)
			and A.organization= '".$this->session->userdata('organization')."'
			and A.InActive = 0";

			$this->db->where($where);
		$this->db->order_by('A.dDate','desc');
		$this->db->join("patient_personal_info C","C.patient_no = A.patient_no","left outer");
		$this->db->join("lab_test_name_with_charges B","B.id = A.laboratory_id","left outer");
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
				A.doctor,
				B.test_name,
				C.middlename
				",false);

		
			$where = "(
			A.iop_id like '%".$this->input->post('search')."%' or 
			A.laboratory_id like '%".$this->input->post('search')."%' or 
			B.test_name like '%".$this->input->post('search')."%' or 
			C.middlename like '%".$this->input->post('search')."%'
			) 
			and A.dDate between '".$cFrom."' and '".$cTo."'
			and (A.category_id=7 or A.category_id=14)
			and A.organization= '".$this->session->userdata('organization')."'
			and A.InActive = 0";

			$this->db->where($where);
		$this->db->order_by('A.dDate','desc');
		$this->db->join("patient_personal_info C","C.patient_no = A.patient_no","left outer");
		$this->db->join("lab_test_name_with_charges B","B.id = A.laboratory_id","left outer");
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
 
			$where = "(
			A.io_lab_id= '".$id."'
			) 
			and (A.category_id=7 or A.category_id=14)
			and A.organization= '".$this->session->userdata('organization')."'
			and A.InActive = 0";

			$this->db->where($where);
			//$this->db->where(array('A.InActive'=>0,'A.category_id'=>7,'A.io_lab_id'=>$id));
		//$this->db->order_by('A.preasses_id','desc');
			$query = $this->db->get("iop_laboratory A");
			return $query->result();
		}
		public function get_ptn_name_by_patient_no($patient_no){
			$this->db->select("
				A.patient_no,
				A.middlename,
				B.IO_ID,
				A.InActive
				",false);
			$this->db->where(array(
				'A.patient_no'		=>		$patient_no,
				'A.InActive'			=>		'0'
			));
			$this->db->join("patient_details_iop B","B.patient_no = A.patient_no","left outer");
		//$this->db->order_by("A.bed_name","ASC");
			$query = $this->db->get("patient_personal_info A");
			return $query->result();
		}
		public function getPreparedByDoctor($user_id){
			$query = $this->db->query("SELECT concat(A.firstname,' ',A.middlename,' ',A.lastname) as cPreparedBy FROM `users` A WHERE `A`.`user_id` = $user_id");
			return $query->row();
		}
		

	}