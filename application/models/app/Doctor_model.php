<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Doctor_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function getAll($limit = 10, $offset = 0){
		if($this->input->post('cFrom') == ""){
			$cFrom = date("Y-m-d");	
		}else{
			//$cFrom = "2014-01-01";	
			$cFrom = $this->input->post('cFrom');
		}
		
		if($this->input->post('cTo') == ""){
			$cTo = date("Y-m-d");	
		}else{
			//$cTo = "2014-01-01";	
			$cTo = $this->input->post('cTo');
		}
		
		$this->db->select("
			A.IO_ID,
			B.patient_no,
			concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
			B.age,
			A.date_visit,
			A.time_visit,
			D.patient_type,
			D.patient_type,
			concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
			A.nStatus,
			",false);
		$where = "(
				B.lastname like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.IO_ID like '%".$this->input->post('search')."%'
				) 
				and E.user_id = '".$this->session->userdata('user_id')."' 
				and A.date_visit between '".$cFrom."' and '".$cTo."'  
				and A.patient_type = 'OPD' 
				and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('B.patient_no','asc');
		$this->db->join("patient_personal_info B","B.patient_no = A.patient_no","left outer");
		$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		$this->db->join("patient_type D","D.patient_type = A.patient_type","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$query = $this->db->get("patient_details_iop A", $limit, $offset);
		return $query->result();
	}
	
	public function count_all(){
		if($this->input->post('cFrom') == ""){
			$cFrom = date("Y-m-d");	
		}else{
			$cFrom = $this->input->post('cFrom');	
		}
		
		if($this->input->post('cTo') == ""){
			$cTo = date("Y-m-d");	
		}else{
			$cTo = $this->input->post('cTo');	
		}
		
		$this->db->select("
			A.IO_ID,
			B.patient_no,
			concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
			B.age,
			A.date_visit,
			A.time_visit,
			D.patient_type,
			D.patient_type,
			concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
			",false);
		$where = "(
				B.lastname like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.IO_ID like '%".$this->input->post('search')."%'
				) 
				and A.department_id = '".$this->session->userdata('department')."' 
				and E.user_id = '".$this->session->userdata('user_id')."' 
				and A.date_visit between '".$cFrom."' and '".$cTo."' 
				and A.patient_type = 'IPD' 
				and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('B.lastname','asc');
		$this->db->join("patient_personal_info B","B.patient_no = A.patient_no","left outer");
		$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		$this->db->join("patient_type D","D.patient_type = A.patient_type","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$query = $this->db->get("patient_details_iop A");
		return $query->num_rows();
	}
	
	
	public function getAll2($limit = 10, $offset = 0){
		if($this->input->post('cFrom') == ""){
			//$cFrom = date("Y-m-d");	
			$cFrom = "";
		}else{
			//$cFrom = "2014-01-01";	
			$cFrom = $this->input->post('cFrom');
		}
		
		if($this->input->post('cTo') == ""){
			$cTo = date("Y-m-d");	
		}else{
			//$cTo = "2014-01-01";	
			$cTo = $this->input->post('cTo');
		}
		
		$this->db->select("
		    A.IO_ID,
			A.patient_no,
			B.patient_no,
			concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
			B.age,
			A.date_visit,
			A.time_visit,
			D.patient_type,
			D.patient_type,
			concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
			A.nStatus,
			G.bed_name,
			H.room_name
			",false);
		if($this->input->post('btnSearch')){
		$where = "(
				B.middlename like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				) 
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.nStatus = 'Pending'
				and A.InActive = 0";
			}else{
				$where = "(
				B.middlename like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				) 
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.nStatus = 'Pending'
				and A.InActive = 0";
			}
		$this->db->where($where);
		$this->db->order_by('A.patient_no','asc');
		$this->db->join("patient_personal_info B","B.patient_no = A.patient_no","left outer");
		$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		// $this->db->join("department D","D.department_id = A.department_id","left outer");
		$this->db->join("patient_type D","D.patient_type = A.patient_type","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$this->db->join("room_beds G","G.room_bed_id = room_id","left outer");
		$this->db->join("room_master H","H.room_master_id = G.room_master_id","left outer");
		$query = $this->db->get("patient_details_iop A", $limit, $offset);
		return $query->result();
	}
	
	public function count_all2(){
		if($this->input->post('cFrom') == ""){
			$cFrom ="";	
		}else{
			//$cFrom = "2014-01-01";	
			$cFrom = $this->input->post('cFrom');

		}
		
		if($this->input->post('cTo') == ""){
			$cTo = date("Y-m-d");
			//$cTo ="";	
		}else{
			//$cTo = "2014-01-01";	
			$cTo = $this->input->post('cTo');
		}
		
		$this->db->select("
		    A.IO_ID,
			A.patient_no,
			B.patient_no,
			concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
			B.age,
			A.date_visit,
			A.time_visit,
			D.patient_type,
			D.patient_type,
			concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
			A.nStatus,
			G.bed_name,
			H.room_name
			",false);
		
		if($this->input->post('btnSearch')){
		$where = "(
				B.middlename like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				)
				and A.nStatus = 'Pending'
				and A.InActive = 0";
			}else{
				$where = "(
				B.middlename like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				) 
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.nStatus = 'Pending'
				and A.InActive = 0";
			}
		$this->db->where($where);
		$this->db->order_by('A.patient_no','asc');
		$this->db->join("patient_personal_info B","B.patient_no = A.patient_no","left outer");
		$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		// $this->db->join("department D","D.department_id = A.department_id","left outer");
		$this->db->join("patient_type D","D.patient_type = A.patient_type","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$this->db->join("room_beds G","G.room_bed_id = room_id","left outer");
		$this->db->join("room_master H","H.room_master_id = G.room_master_id","left outer");
		$query = $this->db->get("patient_details_iop A");
		return $query->num_rows();
	}
	public function get_preassesment($limit = 10, $offset = 0){
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
		    A.preasses_id,
		    A.preasses_no,
			A.preasses_name,
			A.preasses_email,
			A.preasses_aadhar,
			A.preasses_gender,
			A.preasses_age,
			concat(E.firstname,' ',E.middlename,' ',E.lastname) as 'name',
			A.preasses_add
			",false);
		
		if($this->session->userdata('user_role') == 5)
		{
			$where = "(
				A.preasses_no like '%".$this->input->post('search')."%' or 
				A.preasses_name like '%".$this->input->post('search')."%'
				) 
				and A.date_entry between '".$cFrom."' and '".$cTo."'
				and A.InActive = 0";

		}else{
				$where = "(
				A.preasses_no like '%".$this->input->post('search')."%' or 
				A.preasses_name like '%".$this->input->post('search')."%'
				) 
				and A.date_entry between '".$cFrom."' and '".$cTo."'
				and A.added_by='".$this->session->userdata('user_id')."'
				and A.InActive = 0";
			}
		
		$this->db->where($where);
		$this->db->order_by('A.preasses_id','desc');
		$this->db->join("patient_psychological_cond B","B.preasses_no = A.preasses_no","left outer");
		$this->db->join("users E","E.user_id = A.added_by","left outer");
		/*$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		$this->db->join("department D","D.department_id = A.department_id","left outer");
		$this->db->join("patient_type D","D.patient_type = A.patient_type","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$this->db->join("room_beds G","G.room_bed_id = room_id","left outer");
		$this->db->join("room_master H","H.room_master_id = G.room_master_id","left outer");*/
		$query = $this->db->get("patient_preassessment A", $limit, $offset);
		return $query->result();
	}

	public function count_all_preassessment(){
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
		    A.preasses_id,
			A.preasses_name,
			A.preasses_email,
			A.preasses_aadhar,
			A.preasses_gender,
			A.preasses_age,
			concat(E.firstname,' ',E.middlename,' ',E.lastname) as 'name',
			A.preasses_add
			",false);
		
		if($this->session->userdata('user_role') == 5)
		{
			$where = "(
				A.preasses_id like '%".$this->input->post('search')."%' or 
				A.preasses_name like '%".$this->input->post('search')."%'
				) 
				and A.date_entry between '".$cFrom."' and '".$cTo."'
				and A.InActive = 0";

		}else{
				$where = "(
				A.preasses_id like '%".$this->input->post('search')."%' or 
				A.preasses_name like '%".$this->input->post('search')."%'
				) 
				and A.date_entry between '".$cFrom."' and '".$cTo."'
				and A.added_by='".$this->session->userdata('user_id')."'
				and A.InActive = 0";
			}
		$this->db->where($where);
		$this->db->order_by('A.preasses_id','desc');
		$this->db->join("patient_psychological_cond B","B.preasses_id = A.preasses_id","left outer");
		$this->db->join("users E","E.user_id = A.added_by","left outer");
		/*$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		$this->db->join("department D","D.department_id = A.department_id","left outer");
		$this->db->join("patient_type D","D.patient_type = A.patient_type","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$this->db->join("room_beds G","G.room_bed_id = room_id","left outer");
		$this->db->join("room_master H","H.room_master_id = G.room_master_id","left outer");*/
		$query = $this->db->get("patient_preassessment A");
		return $query->num_rows();
	}
	
}