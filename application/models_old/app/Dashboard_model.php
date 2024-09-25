<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Dashboard_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function latest_patient(){
		$this->db->select("
			concat(B.cValue,' ',A.firstname,' ',A.middlename) as patient,
			DATE_FORMAT(A.date_entry, '%Y-%m-%d') as date_entry,
			A.age,
			C.cValue as gender,
			A.date_entry as date_entry2,
			A.patient_no
		",false);
		$where = "DATE_FORMAT(A.date_entry, '%Y-%m-%d') = '".date("Y-m-d")."' and A.InActive = 0 and A.organization = '".$this->session->userdata('organization')."'";
		$this->db->where($where);	
		$this->db->order_by("A.date_entry","DESC");
		$this->db->join("system_parameters B","B.param_id = A.title","left outer");
		$this->db->join("system_parameters C","C.param_id = A.gender","left outer");
		$query = $this->db->get('patient_personal_info A',3,0);
		return $query->result();
	}
	
	public function latest_visited_patient(){
		$this->db->select("
			bed_name(C.cValue,' ',B.firstname,' ',B.lastname) as patient,
			A.IO_ID,
			A.date_visit,
			A.time_visit,
			E.dept_name,
			A.patient_no
		",false);
		$where = "A.date_visit = '".date("Y-m-d")."' and A.InActive = 0";
		$this->db->where($where);	
		$this->db->order_by("A.date_visit","DESC");
		$this->db->join("patient_personal_info B","B.patient_no = A.patient_no","left outer");
		$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		$this->db->join("system_parameters D","D.param_id = B.gender","left outer");
		$this->db->join("department E","E.department_id = A.department_id","left outer");
		$query = $this->db->get('patient_details_iop A',3,0);
		return $query->result();
	}

	// public function getTodayAppointment(){
	// 	$this->db->select("*");
	// 	$this->db->where("A.patient_type","IPD");
	// 	$this->db->order_by('date_visit','asc');
	// 	// $this->db->join("system_parameters B","B.param_id = A.title","left outer");
	// 	// $this->db->join("system_parameters C","C.param_id = A.gender","left outer");
	// 	// $this->db->join("system_parameters D","D.param_id = A.civil_status","left outer");
	// 	// $this->db->join("system_parameters E","E.param_id = A.religion","left outer");
	// 	// $this->db->join("system_parameters F","F.param_id = A.blood_group","left outer");
	// 	// $this->db->join("insurance_comp G","G.in_com_id = A.Insurance_comp","left outer");
	// 	$query = $this->db->get("patient_details_iop A");
	// 	return $query->row();
	// }
		public function getRoomstatus(){
			$this->db->select('rbed.*,cat.*,rm.*');
			$this->db->from('room_beds rbed');
			$this->db->join('room_master rm', 'rm.room_master_id = rbed.room_master_id', 'left');
			$this->db->join('room_category cat', 'cat.category_id = rm.category_id', 'left');
			$this->db->where('rbed.nStatus','Vacant');
			$this->db->where('rbed.organization',$this->session->userdata('organization'));
			$this->db->order_by('rbed.room_bed_id', 'DESC');
			//$this->db->limit('5');
			$query = $this->db->get();
		// echo $this->db->last_query(); die;
			if ( $query->num_rows() > 0 )
			{
				$row = $query->result();
				// print_r();
				return $row;
			}
		}
		public function getTodayAppointment($limit = 10, $offset = 0){
			$this->db->select('rbed.*,cat.*,rm.*,pt.patient_no,pt.IO_ID,ptn.patient_no,ptn.middlename,pt.doctor_id,ptn.date_entry,ptn.firstname as fname,ptn.lastname as lname,doc.user_id,doc.firstname,doc.lastname,doc.title,mrs.param_id,mrs.cValue');
			$this->db->from('room_beds rbed');
			$this->db->join('room_master rm', 'rm.room_master_id = rbed.room_master_id', 'left');
			$this->db->join('room_category cat', 'cat.category_id = rm.category_id', 'left');
			$this->db->join('patient_details_iop pt', 'pt.room_id = rbed.room_bed_id','left');
			$this->db->join('patient_personal_info ptn', 'ptn.patient_no = pt.patient_no','left');
			$this->db->join('users doc', 'doc.user_id = pt.doctor_id','left');
			$this->db->join('system_parameters mrs','mrs.param_id = doc.title','left');
 			//$this->db->where('rbed.nStatus','Occupied');
 			$this->db->where('rbed.organization',$this->session->userdata('organization'));
 			$this->db->where(array('rbed.nStatus'=>'Occupied','pt.nStatus'=>'Pending'));
			$this->db->order_by('rbed.room_bed_id', 'ASC');
			//$this->db->limit('7');
// 			$query = $this->db->get("",$limit, $offset);
			$query = $this->db->get();
			//$query = $this->db->get("iop_laboratory A", $limit, $offset);
		// echo $this->db->last_query(); die;
			if ( $query->num_rows() > 0 )
			{
				$row = $query->result();
				// print_r();
				return $row;
			}
		}
		public function getRoomallocatedStatus(){
			$startDate = date('Y-m-d', strtotime('monday this week'));
			$endDate = date('Y-m-d', strtotime('sunday this week'));
			
			$this->db->select('rbed.*,cat.*,rm.*');
			$this->db->from('room_beds rbed');
			$this->db->join('room_master rm', 'rm.room_master_id = rbed.room_master_id', 'left');
			$this->db->join('room_category cat', 'cat.category_id = rm.category_id', 'left');
			//$this->db->join('patient_details_iop admit', 'admit.IO_ID = rbed.patient_no', 'left');
			$this->db->where('rbed.nStatus','Occupied');
			$this->db->where('rbed.organization',$this->session->userdata('organization'));
			$this->db->order_by('rbed.room_bed_id', 'DESC');
			//$this->db->limit('5');
			$query = $this->db->get();
		// echo $this->db->last_query(); die;
			if ( $query->num_rows() > 0 )
			{
				$row = $query->result();
				// print_r();
				return $row;
			}
		}
// 	    public function getstatus(){
// 			$this->db->select('rbed.nStatus,rm.*,');
// 			$this->db->from('room_beds rbed');
// 			$this->db->join('room_master rm', 'rm.room_master_id = rbed.room_master_id', 'left');
//             // $this->db->join('room_category cat', 'cat.category_id = rm.category_id', 'left');
//             //$this->db->where('rbed.nStatus','Vacant');
// 			$this->db->order_by('rbed.room_bed_id', 'DESC');
// 			$this->db->limit('5');
// 			$query = $this->db->get();
// 		    //echo $this->db->last_query(); die;
// 			if ( $query->num_rows() > 0 )
// 			{
// 				$row = $query->result();
// 				// print_r();
// 				return $row;
// 			}
// 		}
}