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
		public function save_child_details($data)
	{     
        return $this->db->insert('patient_chl', $data);    
	}
		public function treating_doctor_details($data)
	{     
        return $this->db->insert('treating_doctor', $data);    
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
	public function get_preassesment(){
			$this->db->select('ptn_preasses.*,ptn_fmly.*,ptn_chl.*,ptn_med.*,treat_dr.*,psycho_cond.*,immuniz_his.*,barthel_index.*');
			$this->db->from('patient_preassessment ptn_preasses');
			$this->db->join('patient_family ptn_fmly', 'ptn_fmly.preasses_id = ptn_preasses.preasses_id', 'left');
			$this->db->join('patient_chl ptn_chl', 'ptn_chl.preasses_id = ptn_preasses.preasses_id', 'left');
			$this->db->join('preassessment_medicines ptn_med', 'ptn_med.preasses_id = ptn_preasses.preasses_id','left');
			$this->db->join('treating_doctor treat_dr', 'treat_dr.preasses_id = ptn_preasses.preasses_id','left');
			$this->db->join('patient_psychological_cond psycho_cond', 'psycho_cond.preasses_id = ptn_preasses.preasses_id','left');
			$this->db->join('preassessment_immunization_his immuniz_his','immuniz_his.preasses_id = ptn_preasses.preasses_id','left');
			$this->db->join('preassessment_barthel_index barthel_index','barthel_index.preasses_id = ptn_preasses.preasses_id','left');
 			$this->db->where('ptn_preasses.InActive',0);
 			/*$this->db->where(array('rbed.nStatus'=>'Occupied','pt.nStatus'=>'Pending'));
			$this->db->order_by('rbed.room_bed_id', 'ASC');*/
			//$this->db->limit('7');
			$query = $this->db->get();
		// echo $this->db->last_query(); die;
			if ( $query->num_rows() > 0 )
			{
				$row = $query->result();
				// print_r();
				return $row;
			}
		}
		public function update_preassessment_details($data)
		{   

			$this->db->where("preasses_id",$this->input->post('id'));
			/*$this->db->update("patient_preassessment",$data);*/ 
        	/*$this->db->insert('patient_preassessment', $data);
        	$insert_id = $this->db->insert_id();*/

        	return  $this->db->update("patient_preassessment",$data);
		}
		public function update_family_details($data)
	{    
		$this->db->where("preasses_id",$this->input->post('id'));
        return  $this->db->update("patient_family",$data);  
	}
		public function update_child_details($data)
	{
		$this->db->where("preasses_id",$this->input->post('id'));
        return  $this->db->update("patient_chl",$data);         
	}
		public function update_treating_doctor_details($data)
	{
		$this->db->where("preasses_id",$this->input->post('id'));
        return  $this->db->update("treating_doctor",$data);       
            
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