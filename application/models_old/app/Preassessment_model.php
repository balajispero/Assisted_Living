<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Preassessment_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	public function save_preassessment_details($data)
	{     
        $this->db->insert('patient_preassessment', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
	}
	public function save_family_details($data)
	{     
        return $this->db->insert('patient_family', $data);    
	}
	
	public function save_guardian_details($data)
	{     
        return $this->db->insert('preassessment_guardian', $data);    
	}
		public function child_details($data)
	{     
        return $this->db->insert('patient_chl', $data);    
	}
		public function treating_doctor_details($data)
	{     
        return $this->db->insert('treating_doctor', $data);    
	}
	public function save_typical_day_details($data)
	{     
        return $this->db->insert('preassessment_typical_day', $data);    
	}
		public function save_psychological_cond_details($data)
	{     
        return $this->db->insert('patient_psychological_cond', $data);    
	}
		public function save_med_details($data)
	{     
        return $this->db->insert('preassessment_medicines', $data);    
	}
		public function save_immunization_details($data)
	{     
        return $this->db->insert('preassessment_immunization_his', $data);    
	}

	public function lastPreassesID(){
		$this->db->select("(cValue + 1) as cValue");
		$this->db->where(array('cCode'=>'preasses_no','InActive'=>0));
		$query = $this->db->get("system_option");
		return $query->row();	
	}
	public function updateAutoNum(){
		$this->db->where(array(
			'cCode'			=>		'preasses_no',
			'InActive'		=>		0
		));	
		$this->data = array('cValue'	=>		$this->input->post('userID2'));
		$this->db->update("system_option",$this->data);
	}

	public function save_barthel_details($data)
	{    
		return $this->db->insert('preassessment_barthel_index', $data); 
		/*$this->db->where("preasses_id",$this->input->post('id'));
		//$this->db->where(array("id"=>$id,"preasses_id"=>$this->input->post('id')));
        return  $this->db->update("preassessment_barthel_index",$data); */ 
	}
	public function save_fallrisk_quest_details($data)
	{     
		return $this->db->insert('preassessment_fall_risk_questions', $data); 
		/*$this->db->where(array("fall_risk_id"=>$fallrisk_id,"preasses_id"=>$this->input->post('id')));
        return  $this->db->update("preassessment_fall_risk_questions",$data);*/    
	}
	public function get_preassesment($id){
			$this->db->select('ptn_preasses.*,ptn_fmly.*,psycho_cond.*,immuniz_his.*,barthel_index.*,local_guardian.*,typical_day.*');
			$this->db->from('patient_preassessment ptn_preasses');
			$this->db->join('patient_family ptn_fmly', 'ptn_fmly.preasses_no = ptn_preasses.preasses_no', 'left');
			$this->db->join('preassessment_guardian local_guardian','local_guardian.preasses_no = ptn_preasses.preasses_no','left');
			$this->db->join('preassessment_typical_day typical_day','typical_day.preasses_no = ptn_preasses.preasses_no','left');
			
			/*$this->db->join('preassessment_medicines ptn_med', 'ptn_med.preasses_id = ptn_preasses.preasses_id','left');*/
			$this->db->join('patient_psychological_cond psycho_cond', 'psycho_cond.preasses_no = ptn_preasses.preasses_no','left');

			$this->db->join('preassessment_immunization_his immuniz_his','immuniz_his.preasses_no = ptn_preasses.preasses_no','left');
			$this->db->join('preassessment_barthel_index barthel_index','barthel_index.preasses_no = ptn_preasses.preasses_no','left');
 		
 			if($this->session->userdata('user_role') == 5)
			{
				$this->db->where(array('ptn_preasses.InActive'=>0,'ptn_preasses.preasses_id'=>$id));
			}else{
					$this->db->where(array('ptn_preasses.InActive'=>0,'ptn_preasses.preasses_id'=>$id,'ptn_preasses.added_by'=>$this->session->userdata('user_id')));
				}
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
		public function update_preassessment_details($data)
		{   

			//$this->db->where("preasses_id",$this->input->post('id'));
			$this->db->where(array('InActive'=>0,'preasses_id'=>$this->input->post('id'),'preasses_no'=>$this->input->post('preasses_no'))); 
        	/*$this->db->insert('patient_preassessment', $data);
        	$insert_id = $this->db->insert_id();*/

        	return  $this->db->update("patient_preassessment",$data);
		}
		public function update_family_details($data)
	{    
		$this->db->where("preasses_id",$this->input->post('id'));
        return  $this->db->update("patient_family",$data);  
	}
	
		public function update_guardian_details($data)
	{
		$this->db->where("preasses_id",$this->input->post('id'));
        return  $this->db->update("preassessment_guardian",$data);         
	}
	public function update_typical_day_details($data)
	{
		$this->db->where("preasses_id",$this->input->post('id'));
        return  $this->db->update("preassessment_typical_day",$data);         
	}
	
		public function update_psychological_cond_details($data)
	{   
		$this->db->where("preasses_id",$this->input->post('id'));
        return  $this->db->update("patient_psychological_cond",$data);    
            
	}
		public function update_immunization_details($data,$id)
	{     
		/*$this->db->where("preasses_id",$this->input->post('id'));*/
		$this->db->where(array("id"=>$id,"preasses_id"=>$this->input->post('id')));
        return  $this->db->update("preassessment_immunization_his",$data);    
	}

	public function update_barthel_details($data)
	{    
		$this->db->where("preasses_id",$this->input->post('id'));
		//$this->db->where(array("id"=>$id,"preasses_id"=>$this->input->post('id')));
        return  $this->db->update("preassessment_barthel_index",$data);  
	}
	public function update_fallrisk_quest_details($data,$fallrisk_id)
	{     
		
		$this->db->where(array("fall_risk_id"=>$fallrisk_id,"preasses_id"=>$this->input->post('id')));
        return  $this->db->update("preassessment_fall_risk_questions",$data);    
	}
	public function get_preassessment_medicine($preasses_id){
		$this->db->where(array(
			'preasses_id'		=>		$preasses_id,
			/*'InActive'	=>		0*/
		));	
		$query = $this->db->get("preassessment_medicines");
		return $query->result();
	}
	public function get_treating_doctor($preasses_id){
		$this->db->where(array(
			'preasses_id'		=>		$preasses_id,
			/*'InActive'	=>		0*/
		));	
		$query = $this->db->get("treating_doctor");
		return $query->result();
	}
	public function get_preasses_child($preasses_id){
		$this->db->where(array(
			'preasses_id'		=>		$preasses_id,
			/*'InActive'	=>		0*/
		));	
		$query = $this->db->get("patient_chl");
		return $query->result();
	}
	public function get_preassessment_immunization_his($preasses_id){
		$this->db->where(array(
			'preasses_id'		=>		$preasses_id,
			/*'InActive'	=>		0*/
		));	
		$query = $this->db->get("preassessment_immunization_his");
		return $query->result();
	}
	public function get_preassessment_fallrisk_quest($preasses_id){
		$this->db->where(array(
			'preasses_id'		=>		$preasses_id,
			'InActive'	=>		0
		));	
		$query = $this->db->get("preassessment_fall_risk_questions");
		return $query->result();
	}
	
}