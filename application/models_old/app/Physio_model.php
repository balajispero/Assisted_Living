<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Physio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	public function save_evaluation_details($data)
	{     
        $this->db->insert('physio_evaluation', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
	}
	public function get_physio_evaluation($iop_no="",$rel_agree=""){
		
		/*if(!empty($rel_agree))
		{
			$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'iop_no'=>$iop_no,
				'rel_agree'=>$rel_agree,
				
			));
		}
		else{
				$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'iop_no'=>$iop_no
				));	
			}	
			
		return $query->result();*/

		if(!empty($rel_agree)){
		$this->db->select("A.*,pt.room_id");
		
		$where = "( 
				A.InActive = 0
				)    
				and A.iop_no ='".$iop_no."' 
				and A.rel_agree ='".$rel_agree."'";
				$this->db->where($where);
		$this->db->order_by('A.eval_no','DESC');
		
		$this->db->join('patient_details_iop pt', 'pt.IO_ID = A.iop_no','left');

		$query = $this->db->get("physio_evaluation A");
		return $query->result();
		}
		else{
			$this->db->select("A.*,
		pt.room_id");
		
		$where = "( 
				A.iop_no='".$iop_no."'
				)    
				and A.InActive = 0";
				$this->db->where($where);
				$this->db->order_by('A.eval_no','DESC');
		$this->db->join("patient_details_iop pt","pt.IO_ID = A.iop_no","left outer");
		$query = $this->db->get("physio_evaluation A");
		 
		return $query->result();
		}
	}
	public function get_physio_discharge($iop_no=""){
	if($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "Yes"){
		$this->db->select("A.*,
		B.*,C.ptn_name");
		
				$where = "( 
				A.iop_id='".$iop_no."'
				)    
				and A.InActive = 0";
				$this->db->where($where);
		$this->db->order_by('A.eval_no','DESC');
		$this->db->join("physio_treatment_protocol B","B.eval_no = A.eval_no","left outer");
		$this->db->join("physio_evaluation C","C.eval_no = A.eval_no","left outer");
		$query = $this->db->get("physio_discharge_summary A");
		return $query->result();
		}
		elseif($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "No"){
			$this->db->select("A.*,
		B.*,C.ptn_name");
		
		$where = "( 
				B.assign_therapist='".$this->session->userdata('user_id')."'
				)
				and A.iop_id='".$iop_no."'    
				and A.InActive = 0";
				$this->db->where($where);
				$this->db->order_by('A.eval_no','DESC');
		$this->db->join("physio_treatment_protocol B","B.eval_no = A.eval_no","left outer");
		$this->db->join("physio_evaluation C","C.eval_no = A.eval_no","left outer");
		$query = $this->db->get("physio_discharge_summary A");
		 
		return $query->result();
		}
	}
	
	public function get_evaluation_data($eval_no,$iop_no=""){
		if(!empty($iop_no))
		{
			$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'iop_no'=>$iop_no,
				'eval_no'=>$eval_no
			));
		}
		else{
				$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'eval_no'=>$eval_no
				));	
			}	
			//$query->result();
			//echo $this->db->last_query(); die;
		//return $query->result();	
		return $query->row();
	}
	public function save_physio_eval_sent_mail(){
		@$cc ="kaushikpanditrao@ahpl.in" .", ". @$this->input->post('rel_email2');
		$this->data = array(
			'iop_id'	=>		$this->input->post('opd_no'),
			'patient_no'	=>		$this->input->post('patient_no'),
			'eval_no'	=>		$this->input->post('eval_no'),
			'mail_to'				=>		$this->input->post('mail_to'),
			'rel_email2'				=>		$this->input->post('rel_email2'),
			'patient_name'		=>		$this->input->post('patient_name'),
			'mail_from'		=>		!empty($this->input->post('mail_to')) ? $this->input->post('mail_to') : '',
			'mail_cc'			=>		@$cc,
			'rel_name'			=>		@$this->input->post('rel_name'),
			'eval_date'			=>		@$this->input->post('eval_date'),
			'treatment_goal'		=>		$this->input->post('treatment_goal'),
			'added_date'	=>		date("Y-m-d h:i:s a"),
			'sent_by'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		return $this->db->insert('physio_evaluation_sent_mail',$this->data);
	
	}
	public function get_physio_eval_sent_mail($iop_no,$patient_no,$eval_no){
		//$this->db->order_by("dDateTime","DESC");
		
				$query = $this->db->get_where("physio_evaluation_sent_mail",array(
				'InActive'	=>		0,
				'iop_id'=>$iop_no,
				'patient_no'=>$patient_no,
				'eval_no'=>$eval_no
				));	
				
			//$query->result();
			//echo $this->db->last_query(); die;
		return $query->result();
	}
	public function update_evaluation_details($data)
		{   
			$this->db->where(array('InActive'=>0,'id'=>$this->input->post('id'),'eval_no'=>$this->input->post('eval_no'))); 
        	return  $this->db->update("physio_evaluation",$data);
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
				and A.dDate between '".$cFrom."' and '".$cTo."'
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
	public function save_treatment_protocol_details($data)
	{     
        $this->db->insert('physio_treatment_protocol', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
	}
		public function save_week_plan_details($data)
	{     
        return $this->db->insert('physio_treatment_protocol_week_plan', $data);    
	}
	public function update_treatment_protocol_details($data)
		{   

			//$this->db->where("preasses_id",$this->input->post('id'));
			$this->db->where(array('InActive'=>0,'eval_no'=>$this->input->post('eval_no'))); 
        	
        	return  $this->db->update("physio_treatment_protocol",$data);
		}
	public function get_treatment_protocol($eval_no){
			$this->db->select('treatment_protocol.*');
			$this->db->from('physio_treatment_protocol treatment_protocol'); 		
 	
			/*$this->db->order_by('rbed.room_bed_id', 'ASC');*/
			//$this->db->limit('7');
			$query = $this->db->get();
		 //echo $this->db->last_query(); die;
			if ( $query->num_rows() > 0 )
			{
				$row = $query->result();
				// print_r();
				return $row;
			}
		}
		public function physio_treatment_weekly_plan($eval_no){
		$this->db->where(array(
			'eval_no'		=>		$eval_no,
			/*'InActive'	=>		0*/
		));	
		$query = $this->db->get("physio_treatment_protocol_week_plan");
		return $query->result();
	}
	public function get_tightness_list(){
		$this->db->select("multi_sel_id, pvalue");	
		$this->db->where(array(
			'pcode'		=>	'tightness',
			'InActive'	=>	0	
		));
		//$this->db->order_by('cValue','asc');
		$query = $this->db->get("physio_multi_sel_parameters");
		return $query->result_array();
	}
	/*public function get_eval_no_list($iop_no=""){
		$this->db->select("eval_no");
		if($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "Yes"){
			$this->db->where(array(
			'iop_no' => $iop_no,	
			'InActive'	=>	0
		));
		}
		elseif($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "No"){
			$this->db->where(array(
			'assign_therapist' => $this->session->userdata('user_id'),
			'iop_no' => $iop_no,
			'InActive'	=>	0
		));
		} 	
		$query = $this->db->get("physio_treatment_protocol");
		return $query->result();
	}*/
	public function get_eval_no_list($iop_no = "") {
    $this->db->select("A.eval_no,B.therapy_status");

    if ($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "Yes") {
        $this->db->where(array(
            'A.iop_no' => $iop_no,
            'A.InActive' => 0
        ));
        
    } elseif ($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "No") {
        $this->db->where(array(
            'A.assign_therapist' => $this->session->userdata('user_id'),
            'A.iop_no' => $iop_no,
            'A.InActive' => 0
        ));
    }
	$this->db->join("physio_discharge_summary B","B.eval_no = A.eval_no","left outer");
    $query = $this->db->get("physio_treatment_protocol A");
    return $query->result();
}



	public function lastPreassesID(){
		$this->db->select("(cValue + 1) as cValue");
		$this->db->where(array('cCode'=>'eval_no','InActive'=>0));
		$query = $this->db->get("system_option");
		return $query->row();	
	}
	public function updateAutoNum(){
		$this->db->where(array(
			'cCode'			=>		'eval_no',
			'InActive'		=>		0
		));	
		$this->data = array('cValue'	=>	$this->input->post('userID2'));
		$this->db->update("system_option",$this->data);
	}
	/*public function get_physio_notes(){
		//$this->db->order_by("dDateTime","DESC");
		if($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "Yes"){
			$query = $this->db->get_where("physio_notes",array(
				'InActive'	=>		0
				));
		}
		elseif($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "No"){
			$query = $this->db->get_where("physio_notes",array(
				// 'assign_therapist' => $this->session->userdata('user_id'),
				'InActive'	=>		0
				));
			
		}	
			
			//$query->result();
			//echo $this->db->last_query(); die;
		return $query->result();
	}*/
	public function get_physio_notes($iop_no=""){
		if($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "Yes"){
		$this->db->select("A.*,
		B.*");
		
		$where = "( 
				A.iop_id='".$iop_no."'
				)    
				and A.InActive = 0";
				$this->db->where($where);
		$this->db->order_by('A.eval_no','DESC');
		$this->db->join("physio_treatment_protocol B","B.eval_no = A.eval_no","left outer");
		$query = $this->db->get("physio_notes A");
		return $query->result();
		}
		elseif($this->session->userdata('user_role') == 11 && $this->session->userdata('physio_expert') == "No"){
			$this->db->select("A.*,
		B.*");
		
		$where = "( 
				B.assign_therapist='".$this->session->userdata('user_id')."'
				)
				and A.iop_id='".$iop_no."'    
				and A.InActive = 0";
				$this->db->where($where);
				$this->db->order_by('A.eval_no','DESC');
		$this->db->join("physio_treatment_protocol B","B.eval_no = A.eval_no","left outer");
		$query = $this->db->get("physio_notes A");
		 
		return $query->result();
		}
	}
	public function view_physio_notes($physio_notes_id)
    {
    $this->db->select("*");
    $this->db->from('physio_notes');
    $this->db->where('InActive', '0');
    $this->db->where('physio_notes_id', $physio_notes_id);
    $query = $this->db->get();
  
    $res = $query->result_array();
    //echo $this->db->last_query();die;
    return $res;
    }
	// Example model function
    public function update_physio_daily_notes($data)
    {
    
	$id=array('physio_notes_id'=>$this->input->post('physio_notes_id')); 
    
    return $this->db->update('physio_notes', $data,$id);
    }

	public function save_physio_discharge_summary($data)
	{     
        return $this->db->insert('physio_discharge_summary', $data);   
    }
    public function physio_treatment_review($eval_no){
		$this->db->where(array(
			'eval_no'		=>		$eval_no,
			/*'InActive'	=>		0*/
		));	
		$query = $this->db->get("physio_treatment_protocol_review");
		return $query->result();
	}
	public function save_review_details($data)
	{     
        return $this->db->insert('physio_treatment_protocol_review', $data);    
	}
	public function get_discharge_summary($physio_discharge_id){
			$this->db->select('physiodischarge_summary.*');
			$this->db->from('physio_discharge_summary physiodischarge_summary');
 		
 	
			/*$this->db->order_by('rbed.room_bed_id', 'ASC');*/
			//$this->db->limit('7');
			 //$this->db->where('InActive', '0');
    $this->db->where('physio_discharge_summary_id', $physio_discharge_id);
			$query = $this->db->get();
		 //echo $this->db->last_query(); die;
			if ( $query->num_rows() > 0 )
			{
				$row = $query->result();
				// print_r();
				return $row;
			}
		}
		public function update_physio_discharge_summary($data)
		{   
			$this->db->where(array('InActive'=>0,'physio_discharge_summary_id'=>$this->input->post('physio_discharge_summary_id'))); 
        	
        	return  $this->db->update("physio_discharge_summary",$data);
		}


		public function get_treatment_protocol_data($eval_no){
			$this->db->where(array(
				'eval_no'		=>		$eval_no,
				/*'InActive'	=>		0*/
			));	
			$query = $this->db->get("physio_treatment_protocol");
			return $query->result();
		}
		public function get_treatment_line_data($eval_no){
			$this->db->order_by("week_plan_id","DESC");
			$this->db->where(array(
				'eval_no'		=>		$eval_no,
			));	
			$query = $this->db->get("physio_treatment_protocol_week_plan");
			return $query->result();
		}
		public function get_bodypart_list(){
			$this->db->select("multi_sel_id, pvalue");	
			$this->db->where(array(
				'pcode'		=>	'body_part',
				'InActive'	=>	0	
			));
			//$this->db->order_by('cValue','asc');
			$query = $this->db->get("physio_multi_sel_parameters");
			return $query->result_array();
		}


	
	
}