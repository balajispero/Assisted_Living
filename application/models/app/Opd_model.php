<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Opd_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function getAll($limit = 10, $offset = 0){
		if($this->input->post("cFrom") == ""){
			$cFrom = date("Y-m-d");	
		}else{
			$cFrom = $this->input->post("cFrom");
		}
		
		if($this->input->post("cTo") == ""){
			$cTo = date("Y-m-d");	
		}else{
			$cTo = $this->input->post("cTo");
		}
		
		$this->db->select("
			A.IO_ID,
			B.patient_no,
			concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
			B.age,
			A.date_visit,
			A.time_visit,
			D.dept_name,
			D.dept_name,
			concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
			A.nStatus,
			",false);
		$where = "(
				B.lastname like '%".$this->input->post("search")."%' or 
				B.firstname like '%".$this->input->post("search")."%' or 
				B.patient_no like '%".$this->input->post("search")."%' or 
				A.IO_ID like '%".$this->input->post("search")."%'
				) 
				and A.department_id like '%".$this->input->post("department")."%' 
				and E.user_id like '%".$this->input->post("doctor")."%' 
				and A.date_visit between '".$cFrom."' and '".$cTo."'  
				and A.patient_type = 'OPD' 
				and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('B.patient_no','asc');
		$this->db->join("patient_personal_info B","B.patient_no = A.patient_no","left outer");
		$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		$this->db->join("department D","D.department_id = A.department_id","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$query = $this->db->get("patient_details_iop A", $limit, $offset);
		return $query->result();
	}
	
	public function count_all(){
		if($this->input->post("cFrom") == ""){
			$cFrom = date("Y-m-d");	
		}else{
			$cFrom = $this->input->post("cFrom");
		}
		
		if($this->input->post("cTo") == ""){
			$cTo = date("Y-m-d");	
		}else{
			$cTo = $this->input->post("cTo");
		}
		
		$this->db->select("
			A.IO_ID,
			B.patient_no,
			concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
			B.age,
			A.date_visit,
			A.time_visit,
			D.dept_name,
			D.dept_name,
			concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
			",false);
		$where = "(
				B.lastname like '%".$this->input->post("search")."%' or 
				B.firstname like '%".$this->input->post("search")."%' or 
				B.patient_no like '%".$this->input->post("search")."%' or 
				A.IO_ID like '%".$this->input->post("search")."%'
				) 
				and A.department_id like '%".$this->input->post("department")."%' 
				and E.user_id like '%".$this->input->post("doctor")."%' 
				and A.date_visit between '".$cFrom."' and '".$cTo."'  
				and A.patient_type = 'OPD' 
				and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('B.lastname','asc');
		$this->db->join("patient_personal_info B","B.patient_no = A.patient_no","left outer");
		$this->db->join("system_parameters C","C.param_id = B.title","left outer");
		$this->db->join("department D","D.department_id = A.department_id","left outer");
		$this->db->join("users E","E.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters F","F.param_id = E.title","left outer");
		$query = $this->db->get("patient_details_iop A");
		return $query->num_rows();
	}
	
	
	
	
	
	public function getAll_search($limit = 10, $offset = 0){
		$this->db->select("
			A.patient_no,
			concat(B.cValue,' ',A.firstname,' ',A.middlename,' ',A.lastname) as 'name',
			C.cValue as 'gender',
			D.cValue as 'civil_status',
			A.age,
			A.date_entry
		",false);
		$where = "(
				A.lastname like '%".$this->input->post('search')."%' or 
				A.firstname like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				) 
				and A.patient_no not in(select patient_no from patient_details_iop where nStatus = 'Pending' and InActive = 0)
				and A.organization= '".$this->session->userdata('organization')."'
				and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('lastname','asc');
		$this->db->join("system_parameters B","B.param_id = A.title","left outer");
		$this->db->join("system_parameters C","C.param_id = A.gender","left outer");
		$this->db->join("system_parameters D","D.param_id = A.civil_status","left outer");
		$query = $this->db->get("patient_personal_info A", $limit, $offset);
		return $query->result();
	}
	
	public function count_all_search(){
		$this->db->select("
			A.patient_no,
			concat(B.cValue,' ',A.firstname,' ',A.middlename,' ',A.lastname) as 'name',
			C.cValue,
			D.cValue,
			A.age,
			A.date_entry
		",false);
		$where = "(
				A.lastname like '%".$this->input->post('search')."%' or 
				A.firstname like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				)           
				and A.patient_no not in(select patient_no from patient_details_iop where nStatus = 'Pending' and InActive = 0)
				and A.organization= '".$this->session->userdata('organization')."' 
				and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('lastname','asc');
		$this->db->join("system_parameters B","B.param_id = A.title","left outer");
		$this->db->join("system_parameters C","C.param_id = A.gender","left outer");
		$this->db->join("system_parameters D","D.param_id = A.civil_status","left outer");
		$query = $this->db->get("patient_personal_info A");
		return $query->num_rows();
	}
	
	public function validate_opd(){
		$this->db->where(array(
			'patient_no'		=>		$this->input->post('patient_no'),
			'nStatus'			=>		'Pending',
			'patient_type'		=>		'OPD',
			'InActive'			=>		0
		));
		$query = $this->db->get("patient_details_iop");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function save(){
		$this->data = array(
			'IO_ID'						=>		$this->input->post('opdNo'),
			'patient_no'				=>		$this->input->post('patient_no'),
			'patient_type'				=>		'OPD',
			'date_visit'				=>		date('Y-m-d'),
			'time_visit'				=>		date('h:i:s'),
			'doctor_id'					=>		$this->input->post('doctor'),
			'refferal_doctor'			=>		$this->input->post('refdoctor'),
			'room_id'					=>		0,
			'department_id'				=>		$this->input->post('department'),
			'provisional_diagnosis'		=>		$this->input->post('diagnosis'),
			'complaints'				=>		$this->input->post('complaints'),
			'allergies'					=>		$this->input->post('allergies'),
			'warnings'					=>		$this->input->post('warnings'),
			'social_history'			=>		$this->input->post('social_history'),
			'family_history'			=>		$this->input->post('family_history'),
			'personal_history'			=>		$this->input->post('personal_history'),
			'past_medical_history'		=>		$this->input->post('past_medical_history'),
			'pulse_rate'				=>		$this->input->post('pulse_rate'),
			'temperature'				=>		$this->input->post('temperature'),
			'height'					=>		$this->input->post('height'),
			'bp'						=>		$this->input->post('bp'),
			'respiration'				=>		$this->input->post('respiration'),
			'weight'					=>		$this->input->post('weight'),
			'nStatus'					=>		'Pending',
			'InActive'					=>		0
		);	
		
		$this->db->insert("patient_details_iop",$this->data);
	}
	
	public function save_vital(){
		$this->data = array(
			'iop_id'					=>		$this->input->post('opdNo'),
			'dDate'						=>		date("Y-m-d"),
			'dDateTime'					=>		date("Y-m-d h:i:s"),
			'pulse_rate'				=>		$this->input->post('pulse_rate'),
			'temperature'				=>		$this->input->post('temperature'),
			'height'					=>		$this->input->post('height'),
			'bp'						=>		$this->input->post('bp'),
			'respiration'				=>		$this->input->post('respiration'),
			'weight'					=>		$this->input->post('weight'),
			'InActive'					=>		0
		);	
		
		$this->db->insert("iop_vital_parameters",$this->data);
	}
	
	public function diagnosisList(){
		$this->db->order_by("diagnosis_name","ASC");
		$query = $this->db->get_where("diagnosis", array("InActive"=>'0'));	
		return $query->result();
	}
	
	public function ComplainList(){
		$this->db->order_by("complain_name","ASC");
		$query = $this->db->get_where("complain", array("organization"=>$this->session->userdata('organization'),"InActive"=>'0'));	
		return $query->result();
	}
	
	public function getOPDPatient($iop_no){
		$this->db->select("
				A.IO_ID,
				A.patient_no,
				A.date_visit,
				A.time_visit,
				concat(D.cValue,' ',B.firstname,' ',B.lastname) as ref_doctor,
				concat(E.cValue,' ',C.firstname,' ',C.lastname) as con_doctor,
				F.dept_name,
				A.pulse_rate,
				A.temperature,
				A.height,
				A.bp,
				A.respiration,
				A.weight,
				A.allergies,
				A.warnings,
				A.social_history,
				A.family_history,
				A.personal_history,
				A.past_medical_history,
				A.nStatus
		",false);
		$this->db->where("A.IO_ID",$iop_no);
		$this->db->join("users B","B.user_id = A.refferal_doctor","left outer");
		$this->db->join("users C","C.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters D","D.param_id = B.title","left outer");
		$this->db->join("system_parameters E","E.param_id = C.title","left outer");
		$this->db->join("department F","F.department_id = A.department_id","left outer");
		$query = $this->db->get("patient_details_iop A");
		return $query->row();
	}
	
	public function validate_diagnosis(){
		$this->db->where(array(
			'iop_id'				=>		$this->input->post('opd_no'),
			'diagnosis_id'			=>		$this->input->post('diagnosis'),
			'InActive'				=>		0
		));
		$query = $this->db->get("iop_diagnosis");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function save_complain(){
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'complain_id'	=>		$this->input->post('complain'),
			'remarks'		=>		$this->input->post('remarks'),
			'dDate'			=>		date("Y-m-d h:i:s a"),
			'InActive'		=>		0
		);
		$this->db->insert("iop_complaints",$this->data);	
	}
	
	public function save_diagnosis(){
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'diagnosis_id'	=>		$this->input->post('diagnosis'),
			'remarks'		=>		$this->input->post('remarks'),
			'dDate'			=>		date("Y-m-d h:i:s a"),
			'organization'		=>		$this->session->userdata('organization'),
			'InActive'		=>		0
		);
		// var_dump($this->data);die;
		$this->db->insert("iop_diagnosis",$this->data);	
	}
	
	
	public function patientDiagnosis($iop_no){
		$this->db->select("A.iop_diag_id,B.diagnosis_name, A.remarks");
		$this->db->order_by("A.iop_diag_id","DESC");
		$this->db->where(array(
			'A.iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'A.InActive'	=>		0
		));
		$this->db->join("diagnosis B","B.diagnosis_id = A.diagnosis_id","left outer");
		$query = $this->db->get("iop_diagnosis A");	
		return $query->result();	
	}
	
	public function patientComplain($iop_no){
		$this->db->select("A.iop_comp_id,B.complain_name, A.remarks, A.dDate");
		$this->db->order_by("A.iop_comp_id","DESC");
		$this->db->where(array(
			'A.iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'A.InActive'	=>		0
		));
		$this->db->join("complain B","B.complain_id = A.complain_id","left outer");
		$query = $this->db->get("iop_complaints A");	
		return $query->result();	
	}
	
	public function medicineCategory(){
		$this->db->order_by("med_category_name","ASC");
		$this->db->where("InActive","0");	
		$query = $this->db->get("medicine_category");
		return $query->result();
	}
	public function medicinechart($iop_no){
		//$this->db->order_by("med_category_name","ASC");
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'InActive'	=>		0
		));	
		$query = $this->db->get("iop_nurse_medicine");
		return $query->result();
	}
	public function medicine_chart($iop_no){
		/*$this->db->select("A.*, B.*");
    $this->db->from("iop_medicine B");
    $this->db->join("iop_nurse_medicine A", "B.iop_id = A.iop_id");
    $this->db->where("`B.to_date` >= '" . date('Y-m-d') . "' AND `A.iop_id` = B.iop_id AND `B.InActive` = 0");
    $this->db->group_by(array("B.iop_med_id", "B.dose"));

    $query = $this->db->get();
    return $query->result();*/
		$this->db->where("`to_date` >= '" . date('Y-m-d') . "' AND `from_date` <= '" . date('Y-m-d') . "' AND `iop_id` = '$iop_no' AND `InActive` = 0");
		$query = $this->db->get("iop_medicine");
		return $query->result();
	}
	public function given_medicine_chart_pagination($limit = 10, $offset = 0,$iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'InActive'	=>		0
		));	
		$this->db->order_by('given_date','desc');
		$query = $this->db->get("iop_nurse_medicine", $limit, $offset);
		return $query->result();
	}
	public function given_medicine_chart_cnt($iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'InActive'	=>		0
		));
		$this->db->order_by('given_date','desc');	
		$query = $this->db->get("iop_nurse_medicine");
		return $query->num_rows();
	}
	public function given_medicine_chart($iop_no){
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'InActive'	=>		0
		));
		$this->db->order_by('given_date','desc');
		$query = $this->db->get("iop_nurse_medicine");
		return $query->result();
	}
	public function given_medicine_chart_show_to_doctor_new( $args = array()){
		$startDate = date('Y-m-d', strtotime('monday this week'));
        $endDate = date('Y-m-d', strtotime('sunday this week'));

        $this->db->select('given_date, iop_med_id,dose');
        $this->db->where('iop_id', $args['iop_no']);
		$this->db->where('iop_med_id', $args['iop_med_id']);
        $this->db->where('given_date >=', $startDate);
        $this->db->where('given_date <=', $endDate);

        $query = $this->db->get('iop_nurse_medicine');
	
        return $query->result();
	}
	public function given_medicine_chart_show_to_doctor($iop_no){
		//$startDate1="2023-07-05";
		//$startDate = date('Y-m-d', strtotime($startDate1));
		$startDate = date('Y-m-d', strtotime('monday this week'));
        $endDate = date('Y-m-d', strtotime('sunday this week'));

        $this->db->select('given_date, iop_med_id,dose');
        //$this->db->select('A.*,B.*');
        $this->db->where('iop_id', $iop_no);
        $this->db->where('given_date >=', $startDate);
        $this->db->where('given_date <=', $endDate);
		$this->db->group_by("iop_med_id");
        //$this->db->join("iop_medicine A", "B.iop_id = A.iop_id");
        $query = $this->db->get('iop_nurse_medicine');
		
		 /*$query = $this->db->query("SELECT given_date, dose FROM iop_nurse_medicine WHERE YEARWEEK(given_date) >= DATE_SUB(CURDATE(),INTERVAL 6 DAY)");*/
		 
        return $query->result();
	}
	public function listservices($id){
		$this->db->select("A.*");
		$this->db->order_by("A.med_cat_id","DESC");
		$this->db->where(array(
			'A.med_cat_id'	=>		$id,
		));
		// $this->db->join("medicine_drug_name B","B.med_cat_id = A.cat_id","left outer");
		$query = $this->db->get("medicine_drug_name A");	
		return $query->result();	
	}
	public function drug_name_lists($patient_no){
		$this->db->order_by("ptn_sugess_medi","ASC");	
		$this->db->where(array(
			'patient_no'	=>		$patient_no,
			'InActive'		=>		0
		));
		$query = $this->db->get("patient_personal_info");
		return $query->result();
	}
	public function patient_Medication($iop_no){	
		$this->db->select("
						A.*,
						concat(D.cValue,' ',C.firstname,' ',C.middlename,' ',C.lastname) as name
						",false);
		//$this->db->order_by("A.iop_med_id","asc");
		$mail_med = $this->uri->segment(3);
		if($mail_med == "mail_view"){

			$this->db->where(array(
				'A.iop_id'		=>	$iop_no,
				 'A.from_date<='		=>	date("Y-m-d"),
				'A.to_date>='		=>	date("Y-m-d", strtotime('-2 days')),
				'A.InActive'	=>	0
			));
		}else{
		$this->db->where(array(
			'A.iop_id'		=>	$iop_no,
			'A.InActive'	=>	0
		));
		}
		$this->db->join("users C","C.user_id = A.cPreparedBy","left outer");
		$this->db->join("system_parameters D","D.param_id = C.title","left outer");
		$query = $this->db->get("iop_medicine A");
		//echo $this->db->last_query();die;	
		return $query->result();


		/*$this->db->where(array(
			'iop_id'	=>		$iop_no,
			'InActive'		=>		0
		));
		$query = $this->db->get("iop_medicine");
		return $query->result();*/
	}	
	// public function patientMedication($iop_no){
	// 	// print_r($iop_no);die;
	// 	$this->db->order_by("iop_med_id","DESC");
	// 	$query = $this->db->get_where("iop_medication",array(
	// 		'iop_id'	=>	$iop_no,
	// 		'cPreparedBy' => $this->session->userdata('user_id'),
	// 		'InActive'	=>	0,
	// 	));
	// 	// echo $this->db->last_query();die;
	// 	return $query->result();
	// }
	public function patientMedication($iop_no){
		$this->db->select("
					A.dDate,
						A.iop_med_id,
						B.drug_name,
						A.instruction,
						A.advice,
						A.days,
						A.total_qty,
						A.cPreparedBy,
						concat(D.cValue,' ',C.firstname,' ',C.middlename,' ',C.lastname) as name
						",false);
		$this->db->order_by("A.iop_med_id","asc");
		$this->db->where(array(
			'A.iop_id'		=>	$iop_no,
			'cPreparedBy' => $this->session->userdata('user_id'),
			'A.InActive'	=>	0
		));
		$this->db->join("medicine_drug_name B","B.drug_id = A.medicine_id","left outer");
		$this->db->join("users C","C.user_id = A.cPreparedBy","left outer");
		$this->db->join("system_parameters D","D.param_id = C.title","left outer");
		$query = $this->db->get("iop_medication A");	
		// echo $this->db->last_query();die;
		return $query->result();
	}
	
	public function get_discharge_summary($iop_no){
		$query = $this->db->get_where("iop_discharge_summary",array(
			'iop_id'	=>		$iop_no,
			'InActive'	=>		0
		));	
		return $query->row();
	}
	
	public function getProgressNote($iop_no){
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("iop_progress_note",array(
			'iop_id'	=>		$iop_no,
			'InActive'	=>		0
		));	
		return $query->result();
	}
	public function getIndCarePlan($iop_no){
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("iop_individual_care_plan",array(
			'iop_id'	=>		$iop_no,
			'organization'		=>		$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		return $query->result();
	}
	public function getVital_pagination($limit = 10, $offset = 0,$iop_no){

		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get("iop_vital_parameters", $limit, $offset);
		return $query->result();
	}
	public function getVital_cnt($iop_no){

		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get("iop_vital_parameters");
		return $query->num_rows();
	}
	
	public function getVital($iop_no){
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("iop_vital_parameters",array(
			'iop_id'	=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		
		return $query->result();
	}
	
	public function getNurseProgressNote_pagination($limit = 10, $offset = 0,$iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get("iop_nurse_notes", $limit, $offset);
		return $query->result();
	}
	public function getNurseProgressNote_cnt($iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");	
		$query = $this->db->get("iop_nurse_notes");
		return $query->num_rows();
	}
	
	public function getNurseProgressNote($iop_no){
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("iop_nurse_notes",array(
			'iop_id'	=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		
		return $query->result();
	}
	public function getDrugChart($iop_no){
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("iop_drug_chart",array(
			'iop_id'	=>		$iop_no,
			'InActive'	=>		0
		));	
		
		return $query->result();
	}
	
	public function getOperationTheater($iop_no){
		$this->db->select("A.*,B.surgery_name");
		$this->db->join("surgical_package B","B.surgery_id = A.operation_name","left outer");
		$query = $this->db->get_where("iop_operation_theater A",array('A.iop_id' => $iop_no));
		return $query->row();
	}
	
	public function getServices($iop_no){
		$this->db->select("
				A.dDateTime,
				A.bed_pro_id,
				A.bedside_service,
				A.qty,
				A.notes,
				E.drug_name,
				concat(D.cValue,' ',C.firstname,' ',C.middlename,' ',C.lastname) as name
				",false);
		$this->db->order_by("A.dDateTime","DESC");
		$this->db->join("bill_particular B","B.particular_id = A.bedside_service","left outer");
		$this->db->join("medicine_drug_name E","E.med_cat_id = A.bedside_service","left outer");
		$this->db->join("users C","C.user_id = A.cPreparedBy","left outer");
		$this->db->join("system_parameters D","D.param_id = C.title","left outer");
		$query = $this->db->get_where("iop_bed_side_procedure A",array('A.iop_id' => $iop_no, 'A.InActive' => '0'));
		return $query->result();
	}
	
	public function patient_lab($iop_no){
		$this->db->select("
						A.io_lab_id,
						A.dDateTime,
						A.laboratory_id,
						C.particular_name,
						B.group_name,
						A.findings,
						A.result,
						concat(E.cValue,' ',D.firstname,' ',D.middlename,' ',D.lastname) as doctor
						",false);
		$this->db->order_by("A.io_lab_id","asc");
		$this->db->where(array(
			'A.iop_id'		=>	$iop_no,
			'A.InActive'	=>	0
		));
		$this->db->join("bill_group_name B","B.group_id = A.category_id","left outer");
		$this->db->join("bill_particular C","C.particular_id = A.laboratory_id","left outer");
		$this->db->join("users D","D.user_id = A.doctor","left outer");
		$this->db->join("system_parameters E","E.param_id = D.title","left outer");
		$query = $this->db->get("iop_laboratory A");	
		return $query->result();
	}
	public function view_patient_lab($io_lab_id)
    {
    $this->db->select("*");
    $this->db->from('iop_laboratory');
    $this->db->where('InActive', '0');
    $this->db->where('io_lab_id', $io_lab_id);
    $query = $this->db->get();
  
    $res = $query->result_array();
    //echo $this->db->last_query();die;
    return $res;
    }
	
	public function iop_laboratory($iop_no){
		$this->db->select("*");
		// $this->db->order_by("A.io_lab_id","asc");
		$this->db->where(array(
			'iop_id'		=>	$iop_no,
			'InActive'	=>	0
		));
		$query = $this->db->get("iop_laboratory");	
		return $query->result();
	}
	public function getSentMailList($iop_no){
		$this->db->order_by("mail_id","DESC");
		if(!empty($this->uri->segment(6))){
			$query = $this->db->get_where("iop_sent_mail",array(
				'iop_id'	=>		$iop_no,
				'mail_id'	=>		$this->uri->segment(6),
				'InActive'	=>		0
			));
		}else{
		$query = $this->db->get_where("iop_sent_mail",array(
			'iop_id'	=>		$iop_no,
			'InActive'	=>		0
		));
		}	
		    //echo $this->db->last_query();die;
		return $query->result();
	}
	public function get_progressnote_id_data($nurse_notes_id)
    {
    $this->db->select("*");
    $this->db->from('iop_nurse_notes');
    $this->db->where('InActive', '0');
    $this->db->where('nurse_notes_id', $nurse_notes_id);
    $query = $this->db->get();
  
    $res = $query->result_array();
    //echo $this->db->last_query();die;
    return $res;
    }
    public function getLabTest_pagination($limit = 10, $offset = 0,$iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->where("(category_id = 7 OR category_id = 14)");
		//$this->db->order_by("dDate","DESC");
		$query = $this->db->get("iop_laboratory", $limit, $offset);
		return $query->result();
	}
	public function getLabTest_cnt($iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->where("(category_id = 7 OR category_id = 14)");
		//$this->db->order_by("dDate","DESC");	
		$query = $this->db->get("iop_laboratory");
		return $query->num_rows();
	}

	public function getPhysioNote_pagination($limit = 10, $offset = 0,$iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			/*'organization'=>$this->session->userdata('organization'),*/
			'InActive'	=>		0
		));	
		$this->db->order_by("session_date","DESC");
		$query = $this->db->get("physio_notes", $limit, $offset);
		return $query->result();
	}
	
	
	public function getPhysioNote_cnt($iop_no){
		
		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			/*'organization'=>$this->session->userdata('organization'),*/
			'InActive'	=>		0
		));	
		$this->db->order_by("session_date","DESC");	
		$query = $this->db->get("physio_notes");
		return $query->num_rows();
	}
	
	
}