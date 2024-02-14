<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Ipd_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function getRoomMaster($roomType,$occupied){
		$this->db->select("
				A.room_master_id,
				B.floor_name,
				A.room_name,
				C.category_name
		");
		
		if($occupied == "all"){
			$where = "A.category_id = '".$roomType."'";
		}else if($occupied == "occupied"){
			$where = "A.category_id = '".$roomType."' and D.nStatus = 'Occupied' ";
		}else if($occupied == "unoccupied"){
			$where = "A.category_id = '".$roomType."' and D.nStatus = 'Vacant' ";
		}else{
			$where = "A.category_id = '".$roomType."'";	
		}
		
		$this->db->where($where);
		$this->db->order_by("A.room_name","ASC");
		$this->db->join("floor B","B.floor_id = A.floor","left outer");
		$this->db->join("room_category C","C.category_id = A.category_id","left outer");
		$this->db->join("room_beds D","D.room_master_id = A.room_master_id","left outer");
		$this->db->group_by(array('A.room_master_id','B.floor_name','A.room_name','C.category_name'));
		$query = $this->db->get("room_master A");
		return $query->result();
	}
	
	public function validate_ipd(){
		$this->db->where(array(
			'patient_no'		=>		$this->input->post('patient_no'),
			'nStatus'			=>		'Pending',
			'patient_type'		=>		'IPD',
			'InActive'			=>		0
		));
		$query = $this->db->get("patient_details_iop");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function updateBed(){
		$this->data = array(
			'nStatus'		=>	'Occupied',
			'patient_no'	=>	$this->input->post('iopNo')
		);	
		$this->db->where('room_bed_id',$this->input->post('bed_no'));
		$this->db->update("room_beds",$this->data);
	}
	
	public function save(){
		$this->data = array(
			'IO_ID'						=>		$this->input->post('iopNo'),
			'patient_no'				=>		$this->input->post('patient_no'),
			'patient_type'				=>		$this->input->post('department'),
			'date_visit'				=>		date('Y-m-d'),
			'time_visit'				=>		date('h:i:s'),
			'doctor_id'					=>		$this->input->post('doctor'),
			'refferal_doctor'			=>		0,
			'room_id'					=>		$this->input->post('bed_no'),
			// 'department_id'				=>		$this->input->post('department'),
			'provisional_diagnosis'		=>		$this->input->post('prov_diagnosis'),
			'complaints'				=>		$this->input->post('complaint'),
			// 'allergies'					=>		$this->input->post('allergies'),
			// 'warnings'					=>		$this->input->post('warnings'),
			// 'social_history'			=>		$this->input->post('social_history'),
			// 'family_history'			=>		$this->input->post('family_history'),
			// 'personal_history'			=>		$this->input->post('personal_history'),
			// 'past_medical_history'		=>		$this->input->post('past_medical_history'),
			// 'pulse_rate'				=>		$this->input->post('pulse_rate'),
			// 'temperature'				=>		$this->input->post('temperature'),
			// 'height'					=>		$this->input->post('height'),
			// 'bp'						=>		$this->input->post('bp'),
			// 'respiration'				=>		$this->input->post('respiration'),
			// 'weight'					=>		$this->input->post('weight'),
			'nStatus'					=>		'Pending',
			'organization'					=>		$this->session->userdata('organization'),
			'InActive'					=>		0
		);	
		
		$this->db->insert("patient_details_iop",$this->data);
		// print_r($this->data);die;
	}
	
	public function getAll($limit = 10, $offset = 0){
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
		
		$this->db->select("A.patient_no,A.IO_ID,
		B.patient_no,
		concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
		B.age,
		A.date_visit,
		A.time_visit,
		D.patient_type,
		concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
		A.nStatus,
		G.bed_name,
		H.room_name");
		$ptn_dis = $this->uri->segment(3);
		if($ptn_dis == "patient_discharged"){
			$where1 = "( 
				A.nStatus='Discharged'
				)
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.organization= '".$this->session->userdata('organization')."'
				and A.InActive = 0";	
			$this->db->where($where1);
		}elseif($ptn_dis == "index"){
			$where2 = "( 
				A.nStatus='Pending'
				)
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.organization= '".$this->session->userdata('organization')."'
				and A.InActive = 0";	
			$this->db->where($where2);
		}
		$where = "(
				B.middlename like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				) 
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.organization= '".$this->session->userdata('organization')."'   
				and A.InActive = 0";
				$this->db->where($where);
				$this->db->group_by("A.IO_ID");
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
		// print_r($query->result());die;
		return $query->result();
	}
	
	public function count_all(){
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
		
		$this->db->select("A.patient_no,A.IO_ID,
		B.patient_no,
		concat(C.cValue,' ',B.firstname,' ',B.middlename,' ',B.lastname) as 'name',
		B.age,
		A.date_visit,
		A.time_visit,
		D.patient_type,
		concat(F.cValue,' ',E.firstname,' ',E.middlename,' ',E.lastname) as 'doctor',
		A.nStatus,
		G.bed_name,
		H.room_name");
		$ptn_dis = $this->uri->segment(3);
		if($ptn_dis == "patient_discharged"){
			$where1 = "( 
				A.nStatus='Discharged'
				)
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.organization= '".$this->session->userdata('organization')."'
				and A.InActive = 0";	
			$this->db->where($where1);
		}elseif($ptn_dis == "index"){
			$where2 = "( 
				A.nStatus='Pending'
				)
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.organization= '".$this->session->userdata('organization')."'
				and A.InActive = 0";	
			$this->db->where($where2);
		}
		$where = "(
				B.middlename like '%".$this->input->post('search')."%' or 
				B.firstname like '%".$this->input->post('search')."%' or 
				B.patient_no like '%".$this->input->post('search')."%' or 
				A.patient_no like '%".$this->input->post('search')."%'
				) 
				and A.date_visit between '".$cFrom."' and '".$cTo."'
				and A.organization= '".$this->session->userdata('organization')."'   
				and A.InActive = 0";
				$this->db->where($where);
				$this->db->group_by("A.IO_ID");
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
	
	public function getIPDPatient($iop_no){
		
		$this->db->select("
				A.IO_ID,
				A.patient_no,
				A.patient_type,
				A.date_visit,
				A.time_visit,
				concat(D.cValue,' ',B.firstname,' ',B.lastname) as ref_doctor,
				concat(E.cValue,' ',C.firstname,' ',C.lastname) as con_doctor,
				A.doctor_id,
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
				A.nStatus,
				G.bed_name,
				H.room_name
		",false);
		$this->db->where(array('A.organization'=>$this->session->userdata('organization'),"A.IO_ID"=>$iop_no));
		$this->db->join("users B","B.user_id = A.refferal_doctor","left outer");
		$this->db->join("users C","C.user_id = A.doctor_id","left outer");
		$this->db->join("system_parameters D","D.param_id = B.title","left outer");
		$this->db->join("system_parameters E","E.param_id = C.title","left outer");
		$this->db->join("department F","F.department_id = A.department_id","left outer");
		$this->db->join("room_beds G","G.room_bed_id = A.room_id","left outer");
		$this->db->join("room_master H","H.room_master_id = G.room_master_id","left outer");
		$query = $this->db->get("patient_details_iop A");
		// echo $this->db->query();die;
		//echo $this->db->last_query();die;
		return $query->row();
	}
	public function getvitalsign_for_mail($iop_no){

	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("iop_vital_parameters",array(
			'iop_id'	=>		$iop_no,
			'dDate'     =>      date("Y-m-d"),
			'InActive'	=>		0
		));	
		
		return $query->result();

		/*$this->db->select("
				A.IO_ID,
				A.patient_no,
				vital_sign.bsl,
				vital_sign.pulse_rate,
				vital_sign.temperature,
				vital_sign.height,
				vital_sign.bp,
				vital_sign.spo2,
				vital_sign.weight
		",false);
		$this->db->where(array("A.IO_ID"=>$iop_no,"vital_sign.iop_id"=>$iop_no,"vital_sign.dDate"=>strtotime(date("Y-m-D"))));
		$this->db->join("iop_vital_parameters vital_sign","vital_sign.iop_id = A.IO_ID","left outer");
		$query = $this->db->get("patient_details_iop A");
		// echo $this->db->query();die;
		return $query->row();*/
	}
	public function save_sent_mail(){
		$medicines = @implode(',',($this->input->post('medicine_name')));
		@$cc ="kaushikpanditrao@ahpl.in,avinash@sperohealthcare.in,Shivrudra@sperohealthcare.in,vijayrhayakar@ahpl.in,shelke@sperohealthcare.in" .", ". @$this->input->post('rel_email2');
		$this->data = array(
			'iop_id'	=>		$this->input->post('opd_no'),
			'mail_to'				=>		$this->input->post('mail_to'),
			'rel_email2'				=>		$this->input->post('rel_email2'),
			'patient_name'		=>		$this->input->post('patient_name'),
			'mail_from'		=>		!empty($this->input->post('mail_to')) ? $this->input->post('mail_to') : '',
			'msg'			=>		!empty($this->input->post('msg')) ? $this->input->post('msg') : '',
			'mail_cc'			=>		@$cc,
			'rel_name'			=>		$this->input->post('rel_name'),
			'bp'			=>		$this->input->post('bp'),
			'spo2'		=>		$this->input->post('spo2'),
			'pulse_rate'			=>		$this->input->post('pulse_rate'),
			'temperature'		=>		$this->input->post('temperature'),
			'weight'				=>		$this->input->post('weight'),
			'bsl'			=>		$this->input->post('bsl'),
			'medicine_name'			=>		$medicines,
			'doctor_comments'			=>		$this->input->post('doctor_comments'),
			'dDate'		=>		date("Y-m-d h:i:s a"),
			'added_date'	=>		date("Y-m-d h:i:s a"),
			'sent_by'	=>		$this->session->userdata('user_id'),
			'organization'	=>	$this->session->userdata('organization'),
			'InActive'		=>		0
		);	
		$query = $this->db->insert('iop_sent_mail',$this->data);
	
	}
	
	public function diagnosisList(){
		$this->db->order_by("diagnosis_name","ASC");
		$query = $this->db->get_where("diagnosis", array("organization"	=>	$this->session->userdata('organization'),"InActive"=>'0'));	
		return $query->result();
	}
	
	public function patientDiagnosis($iop_no){
		$this->db->select("A.iop_diag_id,B.diagnosis_name, A.remarks,A.dDate");
		$this->db->order_by("A.iop_diag_id","DESC");
		$this->db->where(array(
			'A.iop_id'		=>		$iop_no,
			'A.organization'	=>	$this->session->userdata('organization'),
			'A.InActive'	=>		0
		));
		$this->db->join("diagnosis B","B.diagnosis_id = A.diagnosis_id","left outer");
		$query = $this->db->get("iop_diagnosis A");	
		return $query->result();	
	}
	
	public function save_progress_note(){
		$this->data = array(
			'iop_id'	=>		$this->input->post('opd_no'),
			'dDate'		=>		$this->input->post('dDate'),
			'dDateTime'	=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
			'progress'	=>		$this->input->post('progress'),
			'treatment'	=>		$this->input->post('treatment'),
			'remarks'		=>		$this->input->post('remarks'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		$query = $this->db->insert('iop_progress_note',$this->data);
	
	}
	public function save_individual_care_plan(){
		$this->data = array(
			'iop_id'	=>		$this->input->post('opd_no'),
			'dDate'		=>		$this->input->post('dDate'),
			'dDateTime'	=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
			'to_date'		=>		$this->input->post('todDate'),
			'comorbid_cond'	=>		$this->input->post('comorbid_cond'),
			'goal'	=>		$this->input->post('goal'),
			'plan_action'		=>		$this->input->post('plan_action'),
			'action_taken'		=>		$this->input->post('action_taken'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'organization'		=>		$this->session->userdata('organization'),
			'InActive'		=>		0
		);	
		$query = $this->db->insert('iop_individual_care_plan',$this->data);
	
	}
	public function edit_individual_care_plan(){
		$this->data = array(
			'dDate'		=>		$this->input->post('dDate'),
			'dDateTime'	=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
			'comorbid_cond'	=>		$this->input->post('comorbid_cond'),
			'goal'	=>		$this->input->post('goal'),
			'plan_action'		=>		$this->input->post('plan_action'),
			'action_taken'		=>		$this->input->post('action_taken'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);

		$id=array('ind_care_plan_id'=>$this->input->post('ind_care_plan_id'));	
		$query = $this->db->update('iop_individual_care_plan',$this->data,$id);
	
	}
	public function review_individual_care_plan(){
		$this->data = array(
			/*'dDate'		=>		$this->input->post('dDate'),
			'dDateTime'	=>		$this->input->post('dDate')." ".$this->input->post('cTime'),*/
			'comorbid_cond'	=>		$this->input->post('comorbid_cond'),
			'goal'	=>		$this->input->post('goal'),
			'plan_action'		=>		$this->input->post('plan_action'),
			'action_taken'		=>		$this->input->post('action_taken'),
			'review'		=>		!empty($this->input->post('review')) ? $this->input->post('review') :'',
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);
		
		$id=array('ind_care_plan_id'=>$this->input->post('ind_care_plan_id'));	
		$query = $this->db->update('iop_individual_care_plan',$this->data,$id);
	
	}
	public function getIntake($iop_no){
		$this->db->order_by("intake_id","DESC");
		$query = $this->db->get_where("iop_intake_record",array(
			'iop_id'	=>	$iop_no,
			'organization'		=>		$this->session->userdata('organization'),
			//'cPreparedBy' => $this->session->userdata('user_id'),
			'InActive'	=>	0,
		));
		return $query->result();
	}
	
	public function getOutput($iop_no){
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("iop_output_record",array(
			'iop_id'	=>	$iop_no,
			'organization'		=>		$this->session->userdata('organization'),
			'InActive'	=>	0
		));
		return $query->result();
	}
	public function getIntake_pagination($limit = 10, $offset = 0,$iop_no){

		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get("iop_intake_record", $limit, $offset);
		return $query->result();
	}
	public function getIntake_cnt($iop_no){

		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get("iop_intake_record");
		return $query->num_rows();
	}
	public function getOutput_pagination($limit = 10, $offset = 0,$iop_no){

		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get("iop_output_record", $limit, $offset);
		return $query->result();
	}
	public function getOutput_cnt($iop_no){

		$this->db->where(array(
			'iop_id'		=>		$iop_no,
			'organization'=>$this->session->userdata('organization'),
			'InActive'	=>		0
		));	
		$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get("iop_output_record");
		return $query->num_rows();
	}
	
	public function room_transfer($iop_no){
		$this->db->select("
			A.transfer_id,
			D.category_name,,
			C.room_name,
			B.bed_name,
			A.dDateTime,
			E.floor_name,
			A.reason,
			A.cPreparedBy
		");
		$this->db->order_by("transfer_id","DESC");
		$this->db->join("room_beds B","B.room_bed_id = A.bed_id","left outer");
		$this->db->join("room_master C","C.room_master_id = A.room_master_id","left outer");
		$this->db->join("room_category D","D.category_id = A.room_category_id","left outer");
		$this->db->join("floor E","E.floor_id = C.floor","left outer");
		$query = $this->db->get_where("iop_room_transfer A",array(
			'A.iop_id'	=>		$iop_no,
			'A.organization'	=>		$this->session->userdata('organization'),
			'A.InActive'	=>		0
		));	
		return $query->result();
	}
	
	public function savepatientRoom(){
		$this->data = array(
				'iop_id'				=>		$this->input->post('iopNo'),
				'dDate'					=>		date("Y-m-d"),
				'dDateTime'				=>		date("Y-m-d h:i:s A"),
				'room_category_id'		=>		$this->input->post('roomType'),
				'room_master_id'		=>		$this->input->post('room_idfor'),
				'bed_id'				=>		$this->input->post('bed_no'),
				'reason'				=>		'Patient Admitted',
				'cPreparedBy'			=>		$this->session->userdata('user_id'),
				'organization'      =>      $this->session->userdata('organization'),
				'InActive'				=>		0
			);
			$this->db->insert('iop_room_transfer',$this->data);
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
                and A.InActive = 0";
        $this->db->where($where);
        $this->db->order_by('lastname','asc');
        $this->db->join("system_parameters B","B.param_id = A.title","left outer");
        $this->db->join("system_parameters C","C.param_id = A.gender","left outer");
        $this->db->join("system_parameters D","D.param_id = A.civil_status","left outer");
        $query = $this->db->get("patient_personal_info A");
        return $query->num_rows();
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}